<?php
// login.php

require 'config.php'; // Aquí debe estar tu conexión PDO llamada $pdo

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ocultamos errores a pantalla y los mandamos a log
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/php-error.log');
error_reporting(E_ALL);

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método no permitido']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);
if ($data === null) {
    http_response_code(400);
    echo json_encode(['error' => 'JSON inválido o no recibido']);
    exit;
}

if (empty($data['email']) || empty($data['password'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Email y contraseña requeridos']);
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$data['email']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user || !password_verify($data['password'], $user['password'])) {
        http_response_code(401);
        echo json_encode(['error' => 'Credenciales inválidas']);
        exit;
    }

    if (isset($user['active']) && !$user['active']) {
        http_response_code(403);
        echo json_encode(['error' => 'Cuenta desactivada. Contacta al administrador.']);
        exit;
    }

    // Regeneramos ID y guardamos datos en $_SESSION
    session_regenerate_id(true);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_name'] = $user['first_name'] . ' ' . $user['last_name'];
    $_SESSION['user_role'] = $user['role'];
    $_SESSION['last_login'] = time();

    echo json_encode([
        'success'  => true,
        'redirect' => 'home_scan.php',
        'user_id'  => $user['id'], // <-- Se envía el user_id para guardarlo en sessionStorage
        'name'     => $_SESSION['user_name']
    ]);
    exit;

} catch (Exception $e) {
    error_log('Error en login.php: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'Error interno del servidor']);
    exit;
}
