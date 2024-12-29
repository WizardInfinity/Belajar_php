<?php
require 'function_tugas1.1.php';
//cek apakah tombol sudah di tekan atau belum
if ( isset ($_POST["save"]) ){

    if( tambah ($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'tugas1.1.php';
            </script>
            ";
    }else{
        echo "
            <script> 
                alert('data gagal ditambahkan!');
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
    <center><h2>Tugas PHP </h2>

    <form action="" method="post">
        
            <label for="nama"> Nama : </label>
                <input type="text" name="nama" id="nama"><br><br>
   
    
            <label for="nis"> NIS :    </label>
                <input type="number" name="nis" id="nis"><br><br>
   
    
            <label for="kelas"> Kelas : </label>
                <input type="number" name="kelas" id="kelas"><br><br>
   
    
            <button type="save" name="save">Simpan
   
    </form>
    </center>
</body>
</html>