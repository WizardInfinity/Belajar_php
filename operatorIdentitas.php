<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OperatorIdentitas</title>
    <style>
        .font{
            font-family: courier;
        }
    </style>
</head>
<body>
    <center><h1 class="font">Operator Identitas<br><br></h1>
    <h2><?php
        echo "Hasil identitas dari 1 === 5  =  ";
        var_dump (1===5);
        echo "<br><br>";

        echo "Hasil identitas dari 1 !== 5  =  ";
        var_dump (1!==5);
    ?></h2>
</body>
</html>