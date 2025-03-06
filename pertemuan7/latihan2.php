<?php 
// pertemuan7/latihan2.php
// Cek apakah ada data di $_GET
if( !isset($_GET["nama_barang"]) || 
    !isset($_GET["harga_barang"]) ||
    !isset($_GET["tipe_barang"]) ||
    !isset($_GET["penyimpanan"]) ||
    !isset($_GET["warna"]) ||
    !isset($_GET["gambar"]) ) {
    // Ridairekan data dari $_GET

    header("Location: latihan1.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 Penjualan Ditail Smartphone</title>
</head>
<body>

    <h1>Daftar Smartphone</h1>
    <ul>
        <li>Nama : <?= $_GET["nama_barang"]; ?></li>
        <li>Harga : <?= $_GET["harga_barang"]; ?></li>
        <li>Tipe : <?= $s_GET["tipe_barang"]; ?></li>
        <li>Penyimpanan : <?= $_GET["penyimpanan"]; ?></li>
        <li>Warna : <?= $_GET["warna"]; ?></li>
        <li><img src="img/<?= $_GET["gambar"]; ?>" height="70px" width="70px"></li>
    </ul>

    <a href="latihan1.php">Kembali ke Daftar Smartphone</a>
    
</body>
</html>