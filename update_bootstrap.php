<?php
require 'function_bootstrap.php';

//ambil data di URL
$id = $_GET ["id"];

//query data berdasarkan id
$sws = query ("SELECT * FROM tugasbootstrap WHERE id = $id ")[0];


//cek apakah tombol sudah di tekan atau belum
if ( isset ($_POST["save"]) ){

    if( ubah ($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'crudbootstraptable.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'crudbootstraptable.php';
            </script>
            ";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
<!-- Awal Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- Form Awal -->
<div class="container-fluid py-5 bg-info">
    <div class="container">
      <h3 class="text-center">Tugas PHP</h3>

      <div class="offset-md-3 col-md-6">



        <form action="" method="post">
        <input type="hidden" name="id" value=" <?= $sws ["id"] ; ?> ">

          <div class="mb-3">
            <div class="row">
              <div class="col-md-6">
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="nama">Nama</label>
            <div class="input-group">
              <input type="text" class="form-control"name="nama" id="nama" required value=" <?= $sws["nama"]; ?>">
            </div>
          </div><br>
          <div class="mb-3">
            <label for="nis">NIS</label>
            <div class="input-group">
              <input type="text" class="form-control" name="nis" id="nis" required value=" <?= $sws["nis"]; ?>">
            </div>
          </div><br>
          <div class="mb-3">
            <label for="kelas">Kelas</label>
            <div class="input-group">
              <input type="text" class="form-control" name="kelas" id="kelas" required value=" <?= $sws["kelas"]; ?>">
            </div>
          </div>

          
          <br><br><br><br>
          <!-- Button trigger modal -->
          <div class="mb-3">
            <button class="btn btn-primary w-100" type="save"  name="save" >SIMPAN</button>
          </div>
          
          
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- Form Akhir -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>