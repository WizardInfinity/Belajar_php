<?php
require 'function_ulangan.php';
//cek apakah tombol sudah di tekan atau belum
if (isset($_POST["Input"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('DATA BERHASIL DITAMBAHKAN!');
                document.location.href = 'OutputUlangan1.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('DATA GAGAL DITAMBAHKAN!');
                document.location.href = 'OutputUlangan1.php';
            </script>
            ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulangan</title>
    <link rel="website icon" type="png" href="new-php-logo.png"></link>
    <style>
        body{
            font-family: courier;
            background-color:black;
            color:cyan;
        }
    </style>
</head>
<body>
    <center><h1>ULANGAN PWPB</h1></center>

    <FORM ACTION="" METHOD="POST" enctype="multipart/form-data">

    <label for="nama">Nama           :</label>
    <input type="text" name="nama" autocomplete="off" required></input><br><br>

    <label for="alamat">Alamat        :</label>
    <input type="text" name="alamat" autocomplete="off" required></input><br><br>

    <label>Jenis Kelamin :</label>
    <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</input><br><br>

    <div class="">
        <label>Jurusan       :</label><br>
                      <input type="radio" name="jurusan" value="TKR">TKR</input><br>
                      <input type="radio" name="jurusan" value="TEI">TEI</input><br>
                      <input type="radio" name="jurusan" value="TKI">TKI</input><br>
                      <input type="radio" name="jurusan" value="RPL">RPL</input><br>
                      <input type="radio" name="jurusan" value="TAV">TAV</input><br>
    </div>
    <div class="">
        <label>Hobi          :</label><br>
                      <input type="checkbox" name="hobi[]" value="Basket"> Basket</input><br>
                      <input type="checkbox" name="hobi[]" value="Futsal"> Futsal</input><br>
                      <input type="checkbox" name="hobi[]" value="Renang"> Renang</input><br>
                      <input type="checkbox" name="hobi[]" value="Bersepeda"> Bersepeda</input><br>
                      <input type="checkbox" name="hobi[]" value="Berwisata"> Berwisata</input><br><br>
    </div>
    <div class="">
        <label for="">Masukkan Gambar :</label>
        <input type="file" name="file"></input><br><br>
    </div>
    <div class="">
        <label for="">Masukkan Musik  :</label>
        <input type="file" name="file2"></input><br><br>
    </div>
    <div class="">
        <label for="">Masukkan Video  :</label>
        <input type="file" name="file3"></input><br><br>
    </div>
    <div class="">
        <label for="">Masukkan Dokumen:</label>
        <input type="file" name="file4"></input><br><br>
    </div>
    <button type="submit" name="Input">INPUT</button>
</body>
</html>
