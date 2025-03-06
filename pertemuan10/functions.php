<?php 
// Koneksi Database
$conn = mysqli_connect("localhost", "root", "root", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;
    $name = htmlspecialchars($data["name"]);
    $nik = htmlspecialchars($data["nik"]);
    $email = htmlspecialchars($data["email"]);
    $tgl_msk = htmlspecialchars($data["tgl_msk"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO karyawan
                VALUES
                (null, '$name', '$nik', '$email', '$tgl_msk', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
    return mysqli_affected_rows($conn);
}


?>