<?php

require 'function_ulangan.php';
$ulangan = query ("SELECT * FROM ulangan1");


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
        .gambar{
            width: 100px;
        height: 100px;
        }
    </style>
</head>
<body>
    <center>
        <h1>ULANGAN PWPB</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis kelamin</th>
            <th>Jurusan</th>
            <th>Hobi</th>
            <th>Gambar</th>
            <th>Musik</th>
            <th>Video</th>
            <th>Dokumen</th>
        </tr>

        <?php  foreach ( $ulangan as $row ) : ?>
        <tr>
            <td><?= $row["id"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><?= $row["hobi"]; ?></td>
            <td >
                <img class="gambar" src="gambar/<?= $row['gambar'] ?>">
            </td>
            <td >
                <audio  controls  src="musik/<?= $row['musik'] ?> ">
            </td>
            <td >
                <video controls width="200px" src="video/<?= $row['video'] ?>">
            </td>
            <td><?= $row["dokumen"]; ?></td>
        </tr>
        <?php endforeach ;?>
        </table><br>
        <a href="ulangan1.php"><input type="button" value="Tambah"></a></center>
</body>
</html>