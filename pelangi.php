<center><h2>Warna Pelangi<br><br>
    <?php 
    $nilai = 8;

        if ($nilai <= 1) {
            $warna = "Merah";
        }
        elseif ($nilai <= 2) {
            $warna = "Jingga";
        }
        elseif ($nilai <= 3) {
            $warna = "Kuning";
        }
        elseif ($nilai <= 4) {
            $warna = "Hijau";
        }
        elseif ($nilai <= 5) {
            $warna = "Biru";
        }
        elseif ($nilai <= 6) {
            $warna = "Biru Muda";
        }
        elseif ($nilai <= 7) {
            $warna = "Ungu";
        }
        else {
            $warna = "Bukan Pelangi";
        }

        echo "Warna Pelangi nya : $warna<br>";
    ?>