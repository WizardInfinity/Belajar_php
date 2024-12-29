<html>
 <head><title>Pengolahan Form</title></head>
 <body>
 <FORM ACTION="" METHOD="POST" NAME="input">
 Nama Anda : <input type="text" name="nama"><br>
 <input type="submit" name="MASUKKANSEBUAHNILAI" value="Input">
 </FORM>
 </body>
</html>

<?php
if (isset($_POST['MASUKKANSEBUAHNILAI'])) {
 $nama = $_POST['nama'];
 echo "Nama Anda : <b>$nama</b>";
}
?>