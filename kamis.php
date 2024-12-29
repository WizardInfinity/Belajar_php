<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<h2>
<FORM ACTION="" METHOD="POST" NAME="input">
 Poin : <input type="number" name="nama"><br>
 <input type="submit" name="MASUKKANSEBUAHNILAI" value="Input"> <br><br>
<?php
if (isset($_POST['MASUKKANSEBUAHNILAI'])) {
    $a= $_POST['nama'];


if ($a <= 25) {
    echo "Mythic biasa";
} elseif ($a <= 50) {
    echo "Mythic honor";
} elseif ($a <= 10) {
    echo "Legend";
} else {
    echo "Mythic glory";
    }}
?>
</form>
</h2>
</body>
</html>

