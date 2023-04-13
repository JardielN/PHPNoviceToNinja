<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=artists;port=33061;charset=utf8', 'artistsuser', 'administrador123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT `idartist`, `artistname` FROM  `artist`';
    $artists = $pdo->query($sql);

    //foreach($result as $row){
      //  $artists[] = $row['artistname'];
    //}

    /*
    while($row = $result->fetch()){
        $artists[] = ['idartist' => $row['idartist'], 'artistname' => $row['artistname']];
    }
    */

    /*
    foreach($result as $row){
        $artists[] = $row;
    }
    */

    $title = 'Artists List';

    // Start the buffer
    ob_start();

    // Include the template. The PHP code will be executed,
    // but the resulting HTML will be stored in the buffer
    // rather than sent to the browser.

    include __DIR__ . '/../templates/artists.html.php';

    // Read the contents of the output buffer and store them
    // in the $output variable for use in layout.html.php
    $output = ob_get_clean();
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server:' . $e->getMessage() . ' in ' . 
    $e->getFile() . ':' . $e->getLine();
}

include __DIR__ . '/../templates/layout.html.php';