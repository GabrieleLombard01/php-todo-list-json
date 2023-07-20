<?php
// Recupero l'indirizzo del file che simula il databse
$database_path = __DIR__ . '/../../database/tasks.json';

// Leggo contenuto JSON
$json_data = file_get_contents($database_path);

// Converto in un'array PHP
$tasks = json_decode($json_data, true);

// SE abbiamo qualcosa in post
$new_task = $_POST['task'] ?? null;
if ($new_task) {
    $tasks[] = $new_task;

    $json_tasks = json_encode($tasks);
    file_put_contents($database_path, $json_tasks);
}


// Avviso chi mi riceve che la risposta è in json
header('Content-Type: application/json');

// Convert data to JSON
echo json_encode($tasks);
