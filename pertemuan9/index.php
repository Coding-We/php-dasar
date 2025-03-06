<?php 

// Koneksi Database
require 'functions.php';

// Ambil Data dari Tabel Karyawan
$karyawan = "SELECT * FROM karyawan";

// Ambil data (fetch) karyawan dari object result
$result = query($karyawan);


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
        <?php foreach( $result as $karyawan ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $karyawan["name"]; ?></td>
                <td><?= $karyawan["nik"]; ?></td>
                <td><?= $karyawan["email"]; ?></td>
                <td><?= $karyawan["tgl_msk"]; ?></td>
                <td><img src="img/<?= $karyawan["gambar"]; ?>" width="50px" height="50px"></td>
                <td>
                    <a href="delete.php?id=<?= $karyawan["id"]; ?>">Hapus</a> |
                    <br>
                    <a href="update.php?id=<?= $karyawan["id"]; ?>">Ubah</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table> 

    
</body>
</html>