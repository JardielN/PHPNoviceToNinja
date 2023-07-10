<?php
include __DIR__ . '/../includes/DatabaseConnection.php';
include __DIR__ . '/../includes/DatabaseFunctions.php';

try {
    if(isset($_POST['artistname']))
    {
        updateArtist($pdo, $_POST['idartist'], $_POST['artistname'], 1);

        header('location: artists.php');
    }
    else
    {
        $artist = getArtist($pdo, $_GET['idartist']);

        $title = 'Edit Artist';

        ob_start();

        include __DIR__ . '/../templates/editartist.html.php';

        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server:' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}

include __DIR__ . '/../templates/layout.html.php';