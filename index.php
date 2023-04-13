<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=artists;port=33061;charset=utf8', 'artistsuser', 'administrador123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT `artistname` FROM  `artist`';
    $result = $pdo->query($sql);

    foreach($result as $row){
        $artists[] = $row['artistname'];
    }
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server:' . $e->getMessage() . ' in ' . 
    $e->getFile() . ':' . $e->getLine();
}

include __DIR__ . '/templates/artists.html.php';