<?php

require __DIR__ . '/../vendor/autoload.php';

use App\FormHandler;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $name = $data['name'] ?? '';
    $date = $data['date'] ?? '';

    $formHandler = new FormHandler();

    if (!$formHandler->validateName($name)) {
        echo json_encode(['error' => 'Nome deve ser maior que 7 caracteres']);
        http_response_code(400);
        return;
    }

    $result = $formHandler->saveData($name, $date);
    echo json_encode(['success' => $result]);
    return;
}

    http_response_code(405);
