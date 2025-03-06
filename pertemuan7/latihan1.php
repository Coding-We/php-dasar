<?php 
// Variabel Scope
// Global
// Local

// Variabel Global
// Dapat diakses dimana saja
// Dapat diakses di luar function
// Dapat diakses di dalam function

// Variabel Local
// Hanya dapat diakses di dalam function


// Variabel Global
// Variabel Global milik PHP


// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }
// tampilX();

// $_GET
// $_GET["nama"] = "Budi";
// $_GET["nrp"] = "123456789";

// var_dump($_GET);

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

// $_POST

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 Penjualan Smartphone GET</title>
</head>
<body>

    <h1>Daftar Smartphone</h1>
    <ul>
        <?php foreach( $smartphone as $sp ) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $sp["nama_barang"] ?>&harga=<?= $sp["harga_barang"] ?>&tipe=<?= $sp["tipe_barang"] ?>&penyimpanan=<?= $sp["penyimpanan"] ?>&warna=<?= $sp["warna"] ?>&gambar=<?= $sp["gambar"] ?>">Nama : <?= $sp["nama_barang"] ?></a>
            </li>
            
        <?php endforeach; ?>
    </ul>
    
    
</body>
</html>