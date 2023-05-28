<?php
function query($pdo, $sql)
{
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query;
}

function totalArtist($pdo)
{
    $query = query($pdo, 'SELECT COUNT(*) FROM `artist`');
    $row = $query->fetch();
    return $row[0];
}

function getArtist($pdo, $idartist)
{
    $query = query($pdo, 'SELECT * FROM  `artist` WHERE
    `idartist` = :idartist');
    return $query->fetch();
}