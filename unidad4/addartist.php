<?php

if(isset($_POST['artistname']) and isset($_POST['artistborn'])){
    try {
    include __DIR__ . '/../includes/DatabaseConnection.php';
    include __DIR__ . '/../includes/DatabaseFunctions.php';

    /*
    $sql = 'INSERT INTO `artist` SET
    `artistname` = :artistname,
    `artistborn` = :artistborn,
    `artistdate` = CURDATE()';

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':artistname', $_POST['artistname']);
    $stmt->bindValue('artistborn', $_POST['artistborn']);

    $stmt->execute();
    */

    insertArtist($pdo, $_POST['artistname'], $_POST['artistborn'], 2);

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