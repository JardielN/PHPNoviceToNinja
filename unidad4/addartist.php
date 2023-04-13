<?php

if(isset($_POST['artistname']) and isset($_POST['artistborn'])){
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=artists;port=33061;charset=utf8', 'artistsuser', 'administrador123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'INSERT INTO `artist` SET
    `artistname` = :artistname,
    `artistborn` = :artistborn,
    `artistdate` = CURDATE()';

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':artistname', $_POST['artistname']);
    $stmt->bindValue('artistborn', $_POST['artistborn']);

    $stmt->execute();

    header('location: artists.php');

    } catch (PDOException $e) {
    $output = 'Unable to connect to the database server:' . $e->getMessage() . ' in ' . 
    $e->getFile() . ':' . $e->getLine();
    }
} else{
    $title = 'Add a new Artist';

    ob_start();

    include __DIR__ . '/../templates/addartist.html.php';

    $output = ob_get_clean();
}

include __DIR__ . '/../templates/layout.html.php';