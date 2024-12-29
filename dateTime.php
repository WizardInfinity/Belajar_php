<?php
echo date('d-m-Y H:i:s'); 
echo "<br><br><br>";
echo date('\T\g\l: d-m-Y H:i:s');
echo "<br><br><br>";
date_default_timezone_set('UTC');
echo strtotime("1970-01-01 00:00:10");
echo "<br><br><br>";
echo date('Y-m-d', 3);
echo "<br><br><br>";
echo date('l, d F Y');
echo "<br><br><br>";
echo 'Waktu sekarang: ' . date('Y-m-d H:i:s') . '<br/>';
echo '1 menit kedepan: ' . date('Y-m-d H:i:s', time() + 60) . '<br/>';
echo '1 jam kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60)) . '<br/>';
echo '1 hari kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60 * 24)) . '<br/>';
echo '7 hari kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60 * 20 * 6)) . '<br/>';
echo "<br><br><br>";
echo strtotime('now');
echo "<br><br><br>";
echo mktime(0,0,0,8,5,2023);
echo "<br><br><br>";
echo time();
echo "<br><br><br>";
?>