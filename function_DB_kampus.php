    <?php
    $connect = mysqli_connect("localhost", "root", "", "kampus");

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

function tambah($nim, $nama, $jurusan)
{
    global $connect;

    $query = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "sss", $nim, $nama, $jurusan);
    mysqli_stmt_execute($stmt);

    return mysqli_stmt_affected_rows($stmt);
}

function ubah($id,$nama, $jurusan)
{
    global $connect;

    $query = "UPDATE mahasiswa SET  nama = ?, jurusan = ? WHERE id = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $nama, $jurusan, $id);
    mysqli_stmt_execute($stmt);

    return mysqli_stmt_affected_rows($stmt);
}

function hapus($nim)
{
    global $connect;

    $query = "DELETE FROM mahasiswa WHERE nim = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "i", $nim);
    mysqli_stmt_execute($stmt);

    return mysqli_stmt_affected_rows($stmt);
}
?>
