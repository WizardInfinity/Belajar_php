<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validate</title>
    <link rel="website icon" type="png" href="new-php-logo.png">
    <style>
        h2,h3{
            color:cyan;
        }
        body{
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
    <FORM ACTION="" METHOD="POST" NAME="input">
    <h2>Validasi Umur</h2>
    <h3>Masukkan Nama Anda : <input type="text" name="nama"><br></h3>
    <h3>Masukkan Umur Anda : <input type="number" name="umur"><br></h3>
    <input type="submit" name="input" value="Check">
    </FORM>
    <?php
    if (isset($_POST['input'])) {
    $umur = $_POST['umur'];
    $nama = $_POST['nama'];
    echo "<br><br> Nama Anda : <b>$nama</b><br>";
    echo "<br> Umur Anda : <b>$umur</b><br><br><br>";
    if ($umur < 18) {
        echo "Maaf, hanya bisa di akses untuk umur 18+";
    } else {
        echo "Halo selamat datang";
    }
    
    }
    ?>
</body>
</html> 