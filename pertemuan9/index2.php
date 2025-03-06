<?php 
// Koneksi Database
$conn = mysqli_connect("localhost", "root", "root", "phpdasar");

// Ambil Data dari Tabel Karyawan
$result = mysqli_query($conn, "SELECT * FROM karyawan");

// Ambil data (fetch) karyawan dari object result
// mysqli_fetch_row() // Mengembalikan array numerik
// mysqli_fetch_assoc() // Mengembalikan array associative
// mysqli_fetch_object() // Mengembalikan object
// while( $karyawan = mysqli_fetch_assoc($result) ) {
//     var_dump($karyawan);
// }

// Menghitung jumlah data karyawan


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Selamat Datang Di Halaman Admin</h1>
    <br>
    <h2>Halaman Daftar Karyawan</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nik</th>
            <th>Email</th>
            <th>Tanggal Masuk</th>
            <th>Gambar</th>
            <th>Aksi</th>

        </tr>
        <?php $i = 1; ?>
        <?php while( $karyawan = mysqli_fetch_assoc($result) ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $karyawan["name"]; ?></td>
                <td><?= $karyawan["nik"]; ?></td>
                <td><?= $karyawan["email"]; ?></td>
                <td><?= $karyawan["tgl_msk"]; ?></td>
                <td><img src="img/<?= $karyawan["gambar"]; ?>" width="50px" height="50px"></td>
                <td>
                    <a href="detail.php?id=<?= $karyawan["id"]; ?>">Lihat Detail</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>

    </table> 

    
</body>
</html>