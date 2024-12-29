<?php
require 'function_DB_kampus.php';

//ambil data di URL
$id = $_GET ["id"];

//query data berdasarkan id
$mhs = query ("SELECT * FROM mahasiswa WHERE id = $id ")[0];

//cek apakah tombol sudah di tekan atau belum
if (isset($_POST["Input"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];

    
    if (ubah($id,  $nama, $jurusan) > 0) {
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

<FORM ACTION="" METHOD="POST" enctype="multipart/form-data" >

<input type="hidden" name="id" id="id"  autocomplete="off" value=" <?= $mhs["id"]; ?>"  required></input>

<label for="nim">NIM           :</label>
<input type="text" name="nim" id="nim"  autocomplete="off" required value=" <?= $mhs["nim"]; ?>" disabled></input><br><br>

<label for="nama">Nama         :</label>
<input type="text" name="nama" autocomplete="off" required value=" <?= $mhs["nama"]; ?>"></input><br><br>

<label for="jurusan">Jurusan      :</label>
<input type="text" name="jurusan" autocomplete="off" required value=" <?= $mhs["jurusan"]; ?>"></input><br><br>

<button class="button" type="submit" name="Input">INPUT</button></center>
    </form>
</body>
</body>
</html>