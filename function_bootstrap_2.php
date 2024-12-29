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
    
    $kelas = htmlspecialchars ( $data ["kelas"] );

    $query = "INSERT INTO kelas
                 VALUES
                ('','$kelas')
                 ";

mysqli_query ($connected, $query);

return mysqli_affected_rows($connected);

}

function hapus ($id) {
    global $connected;
    mysqli_query ($connected, "DELETE FROM kelas WHERE id = $id ");

    return mysqli_affected_rows ($connected);
}

function ubah( $data ){
    global $connected;

    $id =  ( $data ["id"] );
    $kelas = htmlspecialchars ( $data ["kelas"] );

    $query = "UPDATE kelas SET
                 kelas = '$kelas'
              WHERE id = $id
                 ";

mysqli_query ($connected, $query);

return mysqli_affected_rows($connected);

}







?>