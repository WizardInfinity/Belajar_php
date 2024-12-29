<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
    <center>
    <h1>Pekondisian PHP</h1>

    <h2>IF<br><br>
    <?php 
    $total_belanja = 150000;
        if ($total_belanja >= 100000) {
            echo "Anda dapat hadiah";
        }
    ?>
    </h2>
    <hr>

    <h2>IF/ELSE<br><br>
    <?php 
    $umur = 13;
        if ($umur < 18) {
            echo "Kamu tidak boleh membuka situs ini!";
        } else {
            echo "Selamat datang di website kami";
        }
        
    ?>
    </h2>
    <hr>
    
    <h2>IF/ELSEIF/ELSE<br><br>
    <?php 
    $nilai = 54;
        if ($nilai > 90) {
            $grade = "A+";
        }
        elseif ($nilai > 80) {
            $grade = "A";
        }
        elseif ($nilai > 70) {
            $grade = "B+";
        }
        elseif ($nilai > 60) {
            $grade = "B";
        }
        elseif ($nilai > 50) {
            $grade = "C+";
        }
        elseif ($nilai > 40) {
            $grade = "C";
        }
        elseif ($nilai > 30) {
            $grade = "D";
        }
        elseif ($nilai > 20) {
            $grade = "E";
        }
        else {
            $grade = "F";
        }

        echo "Nilai anda: $nilai<br>";
        echo "Grade: $grade";
    ?>
    </h2>
    <hr>
    
    <h2>SWITCH/CASE<br><br>
    <?php 
    $level = 5;

    switch ($level) {
        case 1:
            echo "Pelajari HTML";
            break;
        case 2:
            echo "Pelajari CSS";
            break;
        case 3:
            echo "Pelajari Javascript";
            break;
        case 4:
            echo "Pelajari PHP";
            break;
        default:
            echo "Kamu bukan Programmer!";
        }
    ?>
    </h2>
    <hr>
    
    <h2>Operator Ternary<br><br>
    <?php 
    $suka = true;

    echo $suka ? "Aku juga suka kamu" : "baiklah";
    
    ?>
    </h2>
    <hr>

    </h2><h2>Percabangan Bersarang<br><br>
    <?php 
    $umur = 17;
    $menikah = false;

    if ($umur > 18) {
        if ($menikah) {
            echo "Selamat datang pak!";
        }else {
            echo "Selamat datang wahai pemuda!";
        }
    }else {
        echo "Maaf website ini hanya untuk yang sudah berumur 18+";
    }
    ?>
    </h2>
</body>
</html>