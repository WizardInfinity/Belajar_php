<?php 
    $x = 20;
    function hasilx() {
        $x = 30;
        // global $x;
        echo $x."<br>";
    }
    hasilx();
    echo $x;
?>