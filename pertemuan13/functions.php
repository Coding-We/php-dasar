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

    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }else {
        $gambar = $gambar;
    }

    $query = "INSERT INTO karyawan
                VALUES
                (null, '$name', '$nik', '$email', '$tgl_msk', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload

    if( $error === 4 ) {
        echo "<script>
                alert('Pilih Gambar Terlebih Dahulu');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Yang Anda Upload Bukan Gambar');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar

    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('Ukuran Gambar Terlalu Besar');
            </script>";
        return false;
    }

    // lolos pengecekan

    //nama file baru

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // gambar siap diupload
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;

}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $id = $data["id"];
    $name = htmlspecialchars($data["name"]);
    $nik = htmlspecialchars($data["nik"]);
    $email = htmlspecialchars($data["email"]);
    $tgl_msk = htmlspecialchars($data["tgl_msk"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // cek apakah user pilih gambar baru

    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    }else {
        $gambar = upload();
    }

    $query = "UPDATE karyawan SET
                name = '$name',
                nik = '$nik',
                email = '$email',
                tgl_msk = '$tgl_msk',
                gambar = '$gambar'
                WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM karyawan
                WHERE
                name LIKE '%$keyword%' OR
                nik LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                tgl_msk LIKE '%$keyword%'
            ";
    return query($query);
}



?>