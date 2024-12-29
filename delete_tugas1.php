<?php
require 'function_tugas1.1.php';

    $id = $_GET ["id"];

    if ( hapus($id) > 0 ) {
        echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href = 'tugas1.1.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('data gagal dihapus!');
                document.location.href = 'tugas1.1.php';
            </script>
            ";
    }

?>