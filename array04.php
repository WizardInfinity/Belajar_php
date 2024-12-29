<?php

$arrNilai = array (80, 90, 75,85); 
$arrNama = array ("budi", "susi", "ani","susan"); 
echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrNilai as $nama => $nilai) {
 echo "Nilai $nama = $nilai<br>";
}
reset ($arrNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
list($nama, $nilai) = $arrNilai;
echo "Nilai = $nilai<br>"; 
?> 