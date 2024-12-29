<?php
$connected = mysqli_connect("localhost", "root", "", "tugas");


function query ($query){
    global $connected;
    $result = mysqli_query( $connected, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc ($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah( $data ){
    global $connected;
    
    $nama = htmlspecialchars ( $data ["nama"] );
    $nis = htmlspecialchars ( $data ["nis"] );
    $kelas = htmlspecialchars ( $data ["kelas"] );

    $query = "INSERT INTO siswa
                 VALUES
                ('','$nama', '$nis', '$kelas')
                 ";

mysqli_query ($connected, $query);

return mysqli_affected_rows($connected);

}

function hapus ($id) {
    global $connected;
    mysqli_query ($connected, "DELETE FROM siswa WHERE id = $id ");

    return mysqli_affected_rows ($connected);
}

function ubah( $data ){
    global $connected;

    $id =  ( $data ["id"] );
    $nama = htmlspecialchars ( $data ["nama"] );
    $nis = htmlspecialchars ( $data ["nis"] );
    $kelas = htmlspecialchars ( $data ["kelas"] );

    $query = "UPDATE siswa SET
                 nama = '$nama',
                 nis = '$nis',
                 kelas = '$kelas'
              WHERE id = $id
                 ";

mysqli_query ($connected, $query);

return mysqli_affected_rows($connected);

}







?>