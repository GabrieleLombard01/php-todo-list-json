<?php
// Initial DATA:

$database_path = __DIR__ . '/../../database/tasks.json';

$json_data = file_get_contents($database_path);

$tasks = json_decode($json_data, true);

// Avviso chi mi riceve che la risposta è in json
header('Content-Type: application/json');

// Convert data to JSON
echo json_encode($tasks);
