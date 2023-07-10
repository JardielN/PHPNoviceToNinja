<?php

try {
    include __DIR__ . '/../includes/DatabaseConnection.php';
    include __DIR__ . '/../includes/DatabaseFunctions.php';

    /*
    $sql = 'DELETE FROM  `artist` WHERE
    `idartist` = :idartist';

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue('idartist', $_POST['idartist']);

    $stmt->execute();
    */

    deleteArtist($pdo, $_POST['idartist']);

    header('location: artists.php');

} catch (PDOException $e) {
    $output = 'Unable to connect to the database server:' . $e->getMessage() . ' in ' . 
    $e->getFile() . ':' . $e->getLine();
}

include __DIR__ . '/../templates/layout.html.php';