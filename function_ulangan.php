<?php
$connect = mysqli_connect("localhost", "root", "", "ulangan");

function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $connect;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jenis_kelamin = $data["jenis_kelamin"];
    $jurusan = $data["jurusan"];
    $hobi = implode(",", $data["hobi"]);

    $namaGambar = $_FILES['file']['name'];
    $ukuranGambar = $_FILES['file']['size'];
    $path = $_FILES['file']['tmp_name'];

    $namaMusik = $_FILES['file2']['name'];
    $ukuranMusik = $_FILES['file2']['size'];
    $path2 = $_FILES['file2']['tmp_name'];

    $namaVideo = $_FILES['file3']['name'];
    $ukuranVideo = $_FILES['file3']['size'];
    $path3 = $_FILES['file3']['tmp_name'];

    $namaDokumen = $_FILES['file4']['name'];
    $ukuranDokumen = $_FILES['file4']['size'];
    $path4 = $_FILES['file4']['tmp_name'];

    if ($ukuranGambar <= 2 * 1024 * 1024 && $ukuranMusik <= 2 * 1024 * 1024 && $ukuranVideo <= 2 * 1024 * 1024 && $ukuranDokumen <= 2 * 1024 * 1024) {
        move_uploaded_file($path, "gambar/" . $namaGambar);
        move_uploaded_file($path2, "musik/" . $namaMusik);
        move_uploaded_file($path3, "video/" . $namaVideo);
        move_uploaded_file($path4, "dokumen/" . $namaDokumen);

        $query = "INSERT INTO ulangan1 VALUES ('', '$nama', '$alamat', '$jenis_kelamin', '$jurusan', '$hobi', '$namaGambar', '$namaMusik', '$namaVideo', '$namaDokumen')";
        mysqli_query($connect, $query);

        return mysqli_affected_rows($connect);
    } else {
        echo '<font color = red>';
        die("UKURAN FILE GAMBAR, MUSIK, ATAU VIDEO TERLALU BESAR");
        return false;
    }
}
?>
