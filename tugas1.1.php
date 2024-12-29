<?php

require 'function_tugas1.1.php';
$siswa = query ("SELECT * FROM tugassiswa");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: skyblue;
    }
    h2{
        color: blue;
    }
</style>
<body>
<br><br><br><br><br><br><br><br><br>
<center><h2>Welcome To Tabel Data !</h2>

    
        <table border="1" cellpadding="10" cellspacing="0">

        
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nis</th>
            <th>kelas</th>
            <th>Action</th>
        </tr>


        <?php  foreach ( $siswa as $row ) : ?>
        <tr>
            <td><?= $row["id"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["kelas"]; ?></td>
            <td>
            <a href="update_tugas1.php?id= <?= $row["id"]; ?>"><input type="button" value="Edit"></a>
            <a href="delete_tugas1.php?id= <?= $row["id"]; ?>" onclick = "return confirm ('Apakah Yakin Ingin Menghapus?');" ><input type="button" value="Delete"></a>
        </td>
        </tr>
        <?php endforeach ;?>
        </table><br>
        <a href="tugas1.php"><input type="button" value="Tambah"></a>
</center>
</body>
</html>