<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OperatorLogika</title>
    <style>
        .font{
            font-family: courier;
        }
    </style>
</head>
<body>
    <center><h1 class="font">Operator Logika<br><br></h1>
    <h2><?php
        $x=10;
        echo "Hasil logika dari $x < 20 && $x  > 2  =  ";
        var_dump($x < 20 && $x  > 2);
        echo "<br><br>";

        echo "Hasil logika dari $x < 20 || $x  > 2  =  ";
        var_dump($x < 20 || $x  > 2);
        echo "<br><br>";

        echo "Hasil logika dari $x !== 20  =  ";
        var_dump ($x !== 20);
    ?></h2>
</body>
</html>