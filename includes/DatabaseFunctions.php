<?php
function query($pdo, $sql, $parameters = [])
{
    $query = $pdo->prepare($sql);

    /*
    foreach($parameters as $name => $value)
    {
        $query->bindValue($name, $value);
    }
    */

    $query->execute($parameters);
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
    // Create the array of $parameters for use in the 
    // query() function
    $parameters = [':idartist' => $idartist];

    // Call the query() function and provide the
    // $parameters
    $query = query($pdo, 'SELECT * FROM  `artist` WHERE
    `idartist` = :idartist', $parameters);
    return $query->fetch();
}

function insertArtist($pdo, $artistname, $artistborn, $idauthor)
{
    $query = 'INSERT INTO `artist` (`artistname`, `artistborn`, `artistdate`, `idauthor`) VALUES (:artistname, :artistborn, CURDATE(), :idauthor)';

    $parameters = [':artistname' => $artistname, ':artistborn' => $artistborn, ':idauthor' => $idauthor];

    query($pdo, $query, $parameters);
}

function updateArtist($pdo, $idartist, $artistname, $idauthor)
{
    $parameters = [':artistname' => $artistname, ':idartist' => $idartist, ':idauthor' => $idauthor];

    query($pdo, 'UPDATE `artist` SET `idauthor` = :idauthor, `artistname` = :artistname WHERE `idartist` = :idartist', $parameters);
}

function deleteArtist($pdo, $idartist)
{
    $parameters = [':idartist' => $idartist];

    query($pdo, 'DELETE FROM `artist` 
    WHERE `idartist` = :idartist', $parameters);
}

function allArtists($pdo)
{
    $artists = query($pdo, 'SELECT `artist`.`idartist`, `artistname`,
    `authorname`, `authoremail` FROM `artist` INNER JOIN
    `author` ON `idauthor` = `author`.`id`');

    return $artists->fetchAll();
}