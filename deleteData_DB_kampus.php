<?php
require 'function_DB_kampus.php';

$nim = $_GET ["nim"];

    if ( hapus($nim) > 0 ) {
        echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href = 'outputDB_kampus.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('data gagal dihapus!');
                document.location.href = 'outputDB_kampus.php';
            </script>
            ";
    }

?>