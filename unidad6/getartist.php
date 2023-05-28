<?php
include __DIR__ . '/../includes/DatabaseConnection.php';
include __DIR__ . '/../includes/DatabaseFunctions.php';

$artist1 = getArtist($pdo, 9);
echo $artist1['artistname'];