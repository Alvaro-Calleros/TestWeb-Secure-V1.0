<?php
require 'config.php';
session_start();

header('Content-Type: text/plain; charset=utf-8');

// Verificar que el usuario esté autenticado
if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo "No autorizado. Debes iniciar sesión.";
    exit;
}

// Solo aceptar POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Método no permitido";
    exit;
}

// Leer y decodificar JSON
$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);

if (!is_array($data)) {
    http_response_code(400);
    echo "JSON inválido";
    exit;
}

// Validar que los campos existan (solo básico)
if (!isset($data['scanType'], $data['targetUrl'], $data['payloadsUsed'])) {
    http_response_code(400);
    echo "Faltan campos obligatorios";
    exit;
}

$userId       = $_SESSION['user_id'];
$targetUrl    = trim($data['targetUrl']);
$payloadsUsed = json_encode($data['payloadsUsed'], JSON_UNESCAPED_UNICODE);

try {
    $sql = "INSERT INTO escaneos_fuzzing (user_id, target_url, payloads_used, fecha) 
            VALUES (:uid, :url, :payloads, NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':uid'      => $userId,
        ':url'      => $targetUrl,
        ':payloads' => $payloadsUsed
    ]);

    echo "Escaneo guardado correctamente. ID: " . $pdo->lastInsertId();
} catch (PDOException $e) {
    http_response_code(500);
    echo "Error al guardar escaneo: " . $e->getMessage();
}
