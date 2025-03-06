<?php 

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

// Koneksi Database
require 'functions.php';

// Ambil Data dari Tabel Karyawan
$karyawan = "SELECT * FROM karyawan ORDER BY id DESC";

// Ambil data (fetch) karyawan dari object result
$result = query($karyawan);

// Cari Data Karyawan
if( isset($_POST["cari"]) ) {
    $result = cari($_POST["keyword"]);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        img {
            border-radius: 50%;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            height: 100px;

        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        tr:hover {background-color: #ddd;}

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        .loader {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-radius: 50%;
            border-top: 5px solid #3498db;
            animation: spin 2s linear infinite;
        }

        @media print {
            .tambah, .search, .logout {
                
                display: none;
            }
            
        }

    </style>
</head>
<body>

<a href="logout.php" class="logout">Logout</a> |
<a href="cetak.php" class="cetak" target="_blank">Cetak</a>

    <h1>Selamat Datang Di Halaman Admin</h1>
    <br>
    <a href="tambah.php" class="tambah">Tambah Data Karyawan</a>
    <br>
    <h2>Halaman Daftar Karyawan</h2>


    <form action="" method="post" class="search">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword pencarian..." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
        <img src="img/loader.gif" class="loader">
    </form>

    <br>

    <div id="container">

    <table>
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
                    <a href="delete.php?id=<?= $karyawan["id"]; ?>" onclick="return confirm('Yakin?')">Hapus</a> |
                    <br>
                    <a href="update.php?id=<?= $karyawan["id"]; ?>">Ubah</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table> 

    </div>

    <script src="js/jquery-3.4.1.min.js"></script>

    <script src="js/script.js"></script>

    
</body>
</html>
