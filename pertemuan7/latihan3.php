<?php 
// Latihan POST Array Associative

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latiahan 3 POST</title>
</head>
<body>
    <?php if( isset($_POST["submit"]) ) : ?>
        <h1>Selamat Smartphone <?php echo $_POST["nama_barang"]; ?></h1>
    <?php endif; ?>
    <form action="" method="post">
        Nama Smartphone <input type="text" name="nama_barang">
        <br>
        Harga Smartphone <input type="text" name="harga_barang">
        <br>
        Tipe Smartphone <input type="text" name="tipe_barang">
        <br>
        Penyimpanan Smartphone <input type="text" name="penyimpanan">
        <br>
        Warna Smartphone <input type="text" name="warna">
        <br>
        gambar Smartphone <input type="text" name="gambar">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>