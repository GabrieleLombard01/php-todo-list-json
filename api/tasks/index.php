<?php
// Initial DATA:
$tasks = ["Lavare il cane", "Comprare le zucchine", "Comprare pastiglie lavastoviglie", "Colloquio di lavoro", "Spazzare il cortile"];

// Avviso chi mi riceve che la risposta è in json
header('Content-Type: application/json');

// Convert data to JSON
echo json_encode($tasks);
