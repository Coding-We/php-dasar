
<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM karyawan WHERE 
    name LIKE '%$keyword%' OR 
    nik LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    tgl_msk LIKE '%$keyword%'";

$result = query($query);


?>

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
                    <a href="delete.php?id=<?= $karyawan["id"]; ?>" onclick="return confirm('Yakin?')">Hapus</a> |
                    <br>
                    <a href="update.php?id=<?= $karyawan["id"]; ?>">Ubah</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table> 