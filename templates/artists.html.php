<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of artists</title>
</head>
<body>
    <?php if(isset($error)): ?>
        <p>
            <?= $error;?>
        </p>
    <?php else: ?>
        <p><?=$totalArtist?> artists have been submitted to the Internet Artist Database</p>
        <?php foreach($artists as $artist): ?>
            <blockquote>
                <p>
                    <?= htmlspecialchars($artist['artistname'], 
                    ENT_QUOTES, 'UTF-8') ?>

                    (by <a href="mailto: <?php 
                    echo htmlspecialchars($artist['authoremail'], ENT_QUOTES, 'UTF-8'); ?>">
                    <?php 
                    echo htmlspecialchars($artist['authorname'], ENT_QUOTES, 'UTF-8'); ?></a>)

                    <a href="editartist.php?idartist=<?=$artist['idartist']?>">Edit</a>

                    <form action="deleteartist.php" method="POST">
                        <input type="hidden" name="idartist" value="<?=$artist['idartist']?>">
                        <input type="submit" value="Delete">
                    </form>
                </p>
            </blockquote>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>