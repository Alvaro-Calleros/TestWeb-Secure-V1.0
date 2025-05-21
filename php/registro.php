<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $required = ['firstName', 'lastName', 'email', 'password'];
    foreach ($required as $field) {
        if (empty($data[$field])) {
            http_response_code(400);
            echo json_encode(['error' => "El campo $field es requerido"]);
            exit;
        }
    }

    $stmt = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
    $stmt->execute([$data['email']]);
    if ($stmt->fetch()) {
        http_response_code(409);
        echo json_encode(['error' => 'El email ya está registrado']);
        exit;
    }

    $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
    
    // Insertar usuario
    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios 
            (first_name, last_name, email, organization, password, role, created_at, terms_accepted) 
            VALUES (?, ?, ?, ?, ?, 'user', NOW(), 1)");
        
        $stmt->execute([
            $data['firstName'],
            $data['lastName'],
            $data['email'],
            $data['organization'] ?? null, 
            $hashedPassword
        ]);
        
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['error' => 'Error en el servidor: ' . $e->getMessage()]);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Método no permitido']);
}
?>