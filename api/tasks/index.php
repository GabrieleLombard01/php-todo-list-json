<?php
// Initial DATA:
$tasks = ["HTML", "CSS", "Responsive design", "Javascript", "PHP"];

// Avviso chi mi riceve che la risposta è in json
header('Content-Type: application/json');

// Convert data to JSON
echo json_encode($tasks);
