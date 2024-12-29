<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OperatorPenugasan</title>
    <style>
        .font{
            font-family: courier;
        }
    </style>
</head>
<body>
    <center><h1 class="font">Operator Penugasan<br><br></h1>
        <h2><?php

        $a = 2;
        $a .= 5;
        echo ($a);

        ?>
            
            
            
        <?php 
        $a = 20 ;
        echo "Hasil dari $a = ".($a)."<br><br>" ;

        $a = 20 ;
        $a = 10 ;
        echo "Hasil dari $a  +=  $b = ".($a += $a)."<br><br>" ;

        $a = 20 ;
        $b = 10 ;
        echo  "Hasil dari $a  -=  $b = ".($a -= $b)."<br><br>" ;

        $a = 20 ;
        $b = 10 ;
        echo  "Hasil dari $a  *=  $b = ".($a *= $b)."<br><br>" ;

        $a = 20 ;
        $b = 10 ;
        echo  "Hasil dari $a  /=  $b = ".($a /= $b)."<br><br>" ;

        $a = 20 ;
        $b = 10 ;
        echo  "Hasil dari $a  %=  $b = ".($a %= $b)."<br><br>" ;

        $a = 20 ;
        $b = 10 ;
        echo  "Hasil dari $a  .=  $b = ".($a .= $b)."<br><br>" ;
    ?></h2>
</body>
</html>