<form action="" method="post">
    <input type="hidden" name="idartist"
    value="<?=$artist['idartist']?>">
    <label for="artistname">Type your artist name here:</label>
    <textarea name="artistname" id="artistname" cols="30" rows="10"><?=$artist['artistname']?></textarea>
    <input type="submit" value="Save">
</form>