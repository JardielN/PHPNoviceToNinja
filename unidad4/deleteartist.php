<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=artists;port=33061;charset=utf8', 'artistsuser', 'administrador123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'DELETE FROM  `artist` WHERE
    `idartist` = :idartist';

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue('idartist', $_POST['idartist']);

    $stmt->execute();

    header('location: artists.php');

} catch (PDOException $e) {
    $output = 'Unable to connect to the database server:' . $e->getMessage() . ' in ' . 
    $e->getFile() . ':' . $e->getLine();
}

include __DIR__ . '/../templates/layout.html.php';