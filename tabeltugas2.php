<?php

require 'function_bootstrap.php';
$siswa = query ("SELECT * FROM siswa");


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .inp{
            
            height: 50px;
            width: 70px;
            border: none;
            outline: none;
            border-radius: 60px;
            box-shadow: -1px 1px 30px -11px rgba(0,0,0,0.75);
            -webkit-box-shadow: -1px 1px 30px -11px rgba(0,0,0,0.75);
            -moz-box-shadow: -1px 1px 30px -11px rgba(0,0,0,0.75);
        }
        .gambar{
            background-image: url('istockphoto-1287665860-612x612.jpg');
            background-repeat: repeat;
            background-size: cover;
            color: white;
        }
        .underline{
            text-decoration: none;
        }
    </style>
</head>
  <body>
    <div class="container gambar rounded-5 mt-5">
        <div class="container">
            <div class="row g-0" >
                <div class="col-md-2 "><br><br><br><br><br><br>
                <table class="table table-striped table-hover bg-light offset-3 ">
                                <thead class="col-3 ">
                                    <tr>
                                        <th class="bg-dark text-white" scope="col">Data Lain</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="">
                                            <a class="underline text-dark" href="tabeltugas2_2.php">
                                            <h6>Data Kelas</h6></a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class=" bg-info ">
                                            <a class="underline text-dark" href="#">
                                            <h6>Data Siswa</h6></a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="bg-primary ">
                                            <a class="underline text-dark" href="tugas2.php">
                                            <h6>Form Siswa</h6></a>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                </div>
                <div class="container col-lg-6">
                <table class="table  border-white mt-5 text-white offset-2">

        
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
            <a href="updatetabeltugas2.php?id= <?= $row["id"]; ?>"><input type="button" class="btn btn-primary " value="Edit"></a>
            <a href="deletetabeltugas2.php?id= <?= $row["id"]; ?>" onclick = "return confirm ('Apakah Yakin Ingin Menghapus?');" ><input type="button" class="btn btn-primary " value="Delete"></a>
        </td>
        </tr>
        <?php endforeach ;?>
        </table>
        <div class="container-fluid py-2 ">
        <div class="container">
            <center><a href="tugas2.php" class="btn btn-primary offset-4 pt-3 inp w-50" type="save"  name="save" >TAMBAH</a></center>
        </div>
    </div>
</div>
        </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>