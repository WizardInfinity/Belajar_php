<?php
require 'function_bootstrap.php';
//cek apakah tombol sudah di tekan atau belum
if ( isset ($_POST["save"]) ){

    if( tambah ($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'tabeltugas2.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'tabeltugas2.php';
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
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box; 
        }
        .row{
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px;
        }
        .login img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
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
    </style>
</head>
  <body>
    <section class="login py-5 bg-light">
        <div class="container">
            <div class="row g-0" >
                <div class="col-lg-4">
                    <img src="photo-1567095751004-aa51a269036823.jfif" class="img-fluid">
                </div>
                <div class="container col-lg-6">
                <form action="" method="post">

          
          <center><h2 class=" form-row py-3 pt-3">FORM SISWA</h2>
          <div class="mb-3">
            <div class="input-group col-lg-10">
              <input type="text" class="form-control inp px-5" placeholder="NAMA" name="nama" id="nama">
            </div>
          </div><br>
          <div class="mb-3">
            <div class="input-group">
              <input type="number" class="form-control inp px-5" name="nis" placeholder="NIS" id="nis">
            </div>
          </div><br>
          <div class="mb-3">
            <div class="input-group">
            <select class="form-select inp px-5" name="kelas" id="kelas">
              <?php $qry = $connected -> query ("SELECT * FROM kelas"); 
              while ($data = $qry->fetch_assoc() ){ ?>
              <option value="<?=$data["kelas"]; ?>"><?= $data ["kelas"];?></option>
              <?php }?>
            </select>
            </div>
          </div>

          
          <br><br>

          <a href="tugas2_2.php" class="btn btn-success  w-90" type="add"  name="add" >TAMBAH KELAS</a>
            <button class="btn btn-primary offset-1 w-90" type="save"  name="save" >SIMPAN</button></center>
          </div>
          
          
          </div>
        </form>
            </div>
        </div>
    </div>
    </section>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>