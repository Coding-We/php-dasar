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

function login($data) {
    global $conn;
    $username = $data["username"];
    $password = $data["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if( mysqli_num_rows($result) === 1 ) {
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            header("Location: index.php");
            exit;
        }
    }
    return [
        "error" => true,
        "pesan" => "Username / Password Salah"
    ];

}

function registrasi ($data) {
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Username Sudah Terdaftar');
            </script>";
        return false;

    }

    // cek konfirmasi password    
    if( $password !== $password2 ) {
        echo "<script>
                alert('Konfirmasi Password Tidak Sesuai');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}


?>