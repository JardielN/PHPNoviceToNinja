<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/form.css">
    <title><?=$title ?></title>
</head>
<body>
    <header>
        <h1>List of Artists</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../unidad4/index.php">Home</a></li>
            <li><a href="../unidad4/artists.php">Artists</a></li>
            <li><a href="../unidad4/addartist.php">Add an Artist</a></li>
        </ul>
    </nav>

    <main>
        <?=$output; ?>
    </main>

    <footer>
        &copy; JNRM 2023
    </footer>
</body>
</html>