<?php
require 'function_DB_kampus.php';

if (isset($_POST["Input"])) {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];

    // Cek apakah NIM sudah ada dalam database
    $cekNIM = query("SELECT * FROM mahasiswa WHERE nim = '$nim'");

    if (empty($cekNIM)) {
        // NIM belum ada, tambahkan ke database
        if (tambah($nim, $nama, $jurusan) > 0) {
            echo "
                <script>
                    alert('DATA BERHASIL DITAMBAHKAN!');
                    document.location.href = 'outputDB_kampus.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('DATA GAGAL DITAMBAHKAN!');
                    document.location.href = 'outputDB_kampus.php';
                </script>
            ";
        }
    } else {
        // NIM sudah ada dalam database, beri pesan kesalahan
        echo "
            <script>
                alert('NIM sudah ada dalam database. Gunakan NIM yang berbeda.');
                document.location.href = 'latihanDB_kampus.php';
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
    <title>LATIHAN</title>
    <link rel="website icon" type="png" href="new-php-logo.png"></link>
    <style>
        body{
            font-family: courier;
            background-color:black;
            color:cyan;
        }
        .title{
            margin-top: 200px;
        }
        .button{
            margin-left: 270px;
        }
    </style>
</head>
<body>
    <center><h1 class="title">LATIHAN PWPB</h1><br>

    <form action="" method="POST" enctype="multipart/form-data">

    <label for="nim">NIM           :</label>
    <input type="number" name="nim" id="nim"  autocomplete="off" required></input><br><br>

    <label for="nama">Nama         :</label>
    <input type="text" name="nama" id="nama" autocomplete="off" required></input><br><br>

    <label for="jurusan">Jurusan      :</label>
    <input type="text" name="jurusan" id="jurusan" autocomplete="off" required></input><br><br>

    <button class="button" type="submit" name="Input">INPUT</button></center>
    </form>
</body>
</html>
