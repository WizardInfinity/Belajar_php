<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
    <style>
        h2{
            color:cyan;
        }
        body{
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
<?php
    //fungsi strlen()
    echo "<b><h2>STRLEN<br></b></h2>";
    $google = "http://www.google.com";
    echo ($google);
    echo "<br><br>";
    echo strlen($google);
    echo "<br><br><hr>";

    //fungsi strcmp()
    echo "<b><h2>STRCMP<br></b></h2>";
    $string1 = "B";
    $string2 = "D";

    echo ("string1"." = ".$string1);
    echo "<br>";
    echo ("string2"." = ".$string2);
    echo "<br>";
    echo "<br>";
    if (strcmp($string1, $string2) < 0) {
        echo "string1 lebih kecil dari string2";
        } else if (strcmp($string1, $string2) > 0) {
            echo "string1 lebih besar dari string2";
        } else {
            echo "Kedua string sama";
        }
    echo "<br><br><hr>";

    //fungsi explode()
    echo "<b><h2>EXPLODE<br></b></h2>";
    $warna = "biru,cokelat hijau,hitam,putih";
    $color = explode(',', $warna);
        foreach ($color as $colors) {
        echo $colors . "<br />";
        }
    echo "<br><br><hr>";

    //fungsi htmlspecialchars()
    echo "<b><h2>HTMLSPECIALCHARS<br></b></h2>";
    $str = "Nama <b>saya</b> <i>Habieb</i>";
    echo ($str);
    echo "<br>";
    $str = "Nama <b>saya</b> <i>Habieb</i>";
    echo htmlspecialchars ($str);
    echo "<br><br><hr>";
?>  
</body>
</html>
