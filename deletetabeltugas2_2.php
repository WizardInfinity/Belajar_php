<?php
require 'function_bootstrap_2.php';

    $id = $_GET ["id"];

    if ( hapus($id) > 0 ) {
        echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href = 'tabeltugas2_2.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('data gagal dihapus!');
                document.location.href = 'tabeltugas2_2.php';
            </script>
            ";
    }

?>