<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=artists;port=33061', 'artistsuser', 'administrador123');
    $output = 'Database connection established';
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server.' . $e;
}

include __DIR__ . '/../templates/output.html.php';