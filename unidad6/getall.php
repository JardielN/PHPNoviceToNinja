<?php
include __DIR__ . '/../includes/DatabaseConnection.php';
include __DIR__ . '/../includes/DatabaseFunctions.php';

$artists = allArtists($pdo);

echo '<ul>';
foreach($artists as $artist)
{
    echo '<li>' . $artist['artistname'] . '</li>';
}
echo '</ul>';