<?php

require 'function_bootstrap.php';
$siswa = query ("SELECT * FROM tugasbootstrap");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-info">
<br><br><br><br><br><br><br>
<center><h2>Welcome To Tabel Data !</h2>

<div class="col-md-6 ">
    <div class="container-fluid py-5 ">
        <div class="container " >
        <table class="table table-striped table-borderless ">

        
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
            <a href="update_bootstrap.php?id= <?= $row["id"]; ?>"><input type="button" class="btn btn-primary " value="Edit"></a>
            <a href="delete_bootstrap.php?id= <?= $row["id"]; ?>" onclick = "return confirm ('Afakah Yakin Ingin Menghapus?');" ><input type="button" class="btn btn-primary " value="Delete"></a>
        </td>
        </tr>
        <?php endforeach ;?>
        </table></div></div><br>
        <div class="container-fluid py-5 ">
        <div class="container">
        <div class="mb-3">
            <a href="crudbootstrap.php" class="btn btn-primary w-100" type="save"  name="save" >TAMBAH</a>
          </div>
        </div>
        </div>
        </div>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>