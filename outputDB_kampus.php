<?php
require 'function_DB_kampus.php';
$latihan = query ("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN</title>
    <link rel="website icon" type="png" href="new-php-logo.png">
    <style>
        body {
            font-family: courier;
            background-color: black;
            color: cyan;
        }
        .title {
            margin-top: 200px;
        }
    </style>
</head>
<body>
    <center>
        <h1 class="title">LATIHAN PWPB</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>

            <?php $nomor = 1; // Inisialisasi nomor urut ?>
            <?php foreach ($latihan as $row) : ?>
                <tr>
                    <td><?= $nomor; ?></td> <!-- Menampilkan nomor urut -->
                    <td><?= $row["nim"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                    <td>
                        <a href="update_DB_kampus.php?id=<?= $row["id"]; ?>"><input type="button" value="Edit"></a>
                        <a href="deleteData_DB_kampus.php?nim=<?= $row["nim"]; ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus?');"><input type="button" value="Delete"></a>
                    </td>
                </tr>
                <?php $nomor++; // Tingkatkan nomor urut setiap kali melakukan perulangan ?>
            <?php endforeach; ?>
        </table><br>
        <a href="latihanDB_kampus.php"><input type="button" value="Tambah"></a>
    </center>
</body>
</html>
