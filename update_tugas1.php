<?php
require 'function_tugas1.1.php';

//ambil data di URL
$id = $_GET ["id"];

//query data berdasarkan id
$sws = query ("SELECT * FROM tugassiswa WHERE id = $id ")[0];


//cek apakah tombol sudah di tekan atau belum
if ( isset ($_POST["save"]) ){

    if( ubah ($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'tugas1.1.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'tugas1.1.php';
            </script>
            ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    body{
        background-color: blue;
        color: skyblue;
    }
</style>
<body>
    <br><br><br><br><br><br><br><br><br>
    <center><h2>UBAH DATA </h2>

    <form action="" method="post">
        <input type="hidden" name="id" value=" <?= $sws ["id"] ; ?> ">
        
            <label for="nama"> Nama : </label>
                <input type="text" name="nama" id="nama" required value=" <?= $sws["nama"]; ?>" ><br><br>
   
    
            <label for="nis"> NIS :    </label>
                <input type="text" name="nis" id="nis" required value=" <?= $sws["nis"]; ?>" ><br><br>
   
    
            <label for="kelas"> Kelas : </label>
                <input type="text" name="kelas" id="kelas" required value=" <?= $sws["kelas"]; ?>" ><br><br>
   
    
            <button type="save" name="save">Simpan
   
    </form>
    </center>
</body>
</html>