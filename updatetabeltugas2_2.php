<?php
require 'function_bootstrap_2.php';

//ambil data di URL
$id = $_GET ["id"];

//query data berdasarkan id
$sws = query ("SELECT * FROM kelas WHERE id = $id ")[0];


//cek apakah tombol sudah di tekan atau belum
if ( isset ($_POST["save"]) ){

    if( ubah ($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'tabeltugas2_2.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'tabeltugas2_2.php';
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

                <br><br>
                <center><h2 class=" form-row py-3 pt-3">FORM KELAS</h2>
                <input type="hidden" name="id" value=" <?= $sws ["id"] ; ?> ">
          <div class=" form-row py-3 pt-5">
            <div class="input-group col-lg-10">
              <input type="text" class="form-control inp px-5" name="kelas" id="kelas" required value=" <?= $sws["kelas"]; ?>">
            </div>

          
          <br><br>

          
            <button class="btn btn-primary inp w-50" type="save"  name="save" >SIMPAN</button></>
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