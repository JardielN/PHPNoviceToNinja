<?php
// Include the file that creates the $pdo variable
// and connects to the database
include __DIR__ . '/../includes/DatabaseConnection.php';

// Include the file that provides the `totalJokes` function 
include __DIR__ . '/../includes/DatabaseFunctions.php';

// Call the function
echo totalArtist($pdo);