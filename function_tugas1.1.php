<?php
$connect = mysqli_connect("localhost", "root", "", "siswa");


function query ($query){
    global $connect;
    $result = mysqli_query( $connect, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc ($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah( $data ){
    global $connect;
    
    $id = htmlspecialchars ( $data ["id"] );
    $nama = htmlspecialchars ( $data ["nama"] );
    $nis = htmlspecialchars ( $data ["nis"] );
    $kelas = htmlspecialchars ( $data ["kelas"] );

    $query = "INSERT INTO tugassiswa
                 VALUES
                ('','$nama', '$nis', '$kelas')
                 ";

mysqli_query ($connect, $query);

return mysqli_affected_rows($connect);

}

function hapus ($id) {
    global $connect;
    mysqli_query ($connect, "DELETE FROM tugassiswa WHERE id = $id ");

    return mysqli_affected_rows ($connect);
}

function ubah( $data ){
    global $connect;

    $id =  ( $data ["id"] );
    $nama = htmlspecialchars ( $data ["nama"] );
    $nis = htmlspecialchars ( $data ["nis"] );
    $kelas = htmlspecialchars ( $data ["kelas"] );

    $query = "UPDATE tugassiswa SET
                 nama = '$nama',
                 nis = '$nis',
                 kelas = '$kelas'
              WHERE id = $id
                 ";

mysqli_query ($connect, $query);
return mysqli_affected_rows($connect);

}







?>