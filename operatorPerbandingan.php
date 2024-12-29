<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OperatorPerbandingan</title>
    <style>
        .font{
            font-family: courier;
        }
    </style>
</head>
<body>
    <center><h1 class="font">Operator Perbandingan<br><br></h1>
        <h2><?php
        echo "Hasil perbandingan dari 1 > 5  =  ";
        var_dump(1>5);
        echo "<br><br>";

        echo "Hasil perbandingan dari 1 < 5  =  ";
        var_dump(1<5);
        echo "<br><br>";

        echo "Hasil perbandingan dari 1 <= 5  =  ";
        var_dump(1<=5);
        echo "<br><br>";

        echo "Hasil perbandingan dari 1 >= 5  =  ";
        var_dump(1>=5);
        echo "<br><br>";

        echo "Hasil perbandingan dari 1 == 5  =  ";
        var_dump(1==5);
        echo "<br><br>";

        echo "Hasil perbandingan dari 1 != 5  =  ";
        var_dump(1!=5);
    ?></h2>
</body>
</html>