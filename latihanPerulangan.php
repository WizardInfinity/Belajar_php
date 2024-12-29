<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
    <style>
        h1,h2{
            font-family: courier;
        }
    </style>
</head>
<body>
    <center>
        <h1>Perulangan PHP</h1><hr>

        <h2>
            FOR
            <p>
                <?php 
                    for ($i = 1; $i <= 10; $i++) {
                        echo "$i ";
                        }
                ?>
            </p>
        </h2>
        <hr>
        <h2>
            WHILE
            <p>
                <?php 
                    $i = 0;
                    $x = 1;
                    while ($i <= 20) {
                    print $x++." x 5 = ";
                    echo $i+=5;
                    echo "<br>";
                    }
                ?>
            </p>
        </h2>
        <hr>
        <h2>
            DO-WHILE
            <p>
                <?php
                    $i = 2;
                    do {
                        echo "$i ";
                        $i+=2;
                    }   while ($i <= 20);
                    ?>
                </p>
        </h2>
        <hr>
        <h2>
            FOREACH
            <p>
                <?php 
                    $fruits = array ("Apel","Pisang","Mangga", "Jeruk", "Anggur");

                    foreach ($fruits as $buah) {
                        echo $buah." ";
                    }
                ?>
            </p>
        </h2>    
</body>
</html>