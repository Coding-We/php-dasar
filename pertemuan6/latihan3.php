<?php 
// Latihan Foreach Array Associative

$smartphone = [
    ["nama_barang" => "Samsung", "harga_barang" => "2.000.000", "tipe_barang" => "Smartphone", "penyimpanan" => "32GB", "warna" => "Hitam", "gambar" => "hp2.jpg"],
    ["nama_barang" => "Xiaomi", "harga_barang" => "2.000.000", "tipe_barang" => "Smartphone", "penyimpanan" => "32GB", "warna" => "Hitam", "gambar" => "hp2.jpg"],
    ["nama_barang" => "Oppo", "harga_barang" => "2.000.000", "tipe_barang" => "Smartphone", "penyimpanan" => "32GB", "warna" => "Hitam", "gambar" => "hp3.jpg"],
    ["nama_barang" => "Vivo", "harga_barang" => "2.000.000", "tipe_barang" => "Smartphone", "penyimpanan" => "32GB", "warna" => "Hitam", "gambar" => "hp3.jpg"],
    ["nama_barang" => "Nokia", "harga_barang" => "2.000.000", "tipe_barang" => "Smartphone", "penyimpanan" => "32GB", "warna" => "Hitam", "gambar" => "hp2.jpg"],
    ["nama_barang" => "Asus", "harga_barang" => "2.000.000", "tipe_barang" => "Smartphone", "penyimpanan" => "32GB", "warna" => "Hitam", "gambar" => "hp2.jpg"],
    ["nama_barang" => "Lenovo", "harga_barang" => "2.000.000", "tipe_barang" => "Smartphone", "penyimpanan" => "32GB", "warna" => "Hitam", "gambar" => "hp3.jpg"],
    ["nama_barang" => "Apple", "harga_barang" => "2.000.000", "tipe_barang" => "Smartphone", "penyimpanan" => "32GB", "warna" => "Hitam", "gambar" => "hp3.jpg"],
    ["nama_barang" => "Huawei", "harga_barang" => "2.000.000", "tipe_barang" => "Smartphone", "penyimpanan" => "32GB", "warna" => "Hitam", "gambar" => "hp2.jpg"],
    ["nama_barang" => "Motorola", "harga_barang" => "2.000.000", "tipe_barang" => "Smartphone", "penyimpanan" => "32GB", "warna" => "Hitam", "gambar" => "hp2.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Smartphone</title>
</head>
<body>

    <h1>Daftar Smartphone</h1>

    <?php foreach( $smartphone as $sp ) : ?>
        <ul>
            <li><img src="img/<?= $sp["gambar"] ?>" height="70px" width="70px"></li>
            <li>Nama : <?= $sp["nama_barang"] ?></li>
            <li>Harga : <?= $sp["harga_barang"] ?></li>
            <li>Tipe : <?= $sp["tipe_barang"] ?></li>
            <li>Penyimpanan : <?= $sp["penyimpanan"] ?></li>
            <li>Warna : <?= $sp["warna"] ?></li>
            
        </ul>
    <?php endforeach; ?>
    
</body>
</html>