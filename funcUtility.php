<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utility</title>
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
    //fungsi var_dump()
    echo "<b><h2>VAR_DUMP<br></b></h2>";
    $arrWarna = array ("Blue","Black","Red","Yellow","Green");
    foreach ($arrWarna as $warna) {
        echo $warna.""."<br><br>";
    }
    var_dump ($arrWarna);
    echo "<pre>";
    var_dump ($arrWarna);
    echo "<br>";

    //fungsi isset()
    echo "<b><h2>ISSET<br></b></h2>";
    echo '
    <form action="" method="POST" NAME="input">
    Nama Anda : <input type="text" name="nama"><br>
    <input type="submit" name="MASUKKANSEBUAHNILAI" value="Input">
    </form>';
    if (isset($_POST['MASUKKANSEBUAHNILAI'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda : <b>$nama</b>";
        }
    echo "<br><hr>";

    //fungsi empty()
    echo "<b><h2>EMPTY<br></b></h2>";

    $variable1 = "Nilai 1";
    $variable2 = "67";
    $variable3 = "Nilai 1";

    if (isset($variable1, $variable2, $variable3)) {
        echo "Semua Variable ada value atau tidak bernilai null";
    } else {
        echo "Satu atau lebih variable tidak ada value atau bernilai null";
    }
    
    echo "<br><hr>";

    //fungsi die()
    echo "<b><h2>DIE<br></b></h2>";
    $role = "admin";
    if ($role != "admin") {
        die ("Akses ditolak. Hanya admin yang bisa akses");
    }
    else {
        echo "Anda adalah admin";
    }
    echo "<br><hr>";

    //fungsi sleep()
    echo "<b><h2>SLEEP<br></b></h2>";
    echo date('h:i:s') . "<br>";

    //sleep untuk 3 detik
    sleep(0);

    //start lagi
    echo date('h:i:s');
    echo "<br><hr>";

    ?>
</body>
</html>