<?php 
$mahasiswa = [

         ["Santoso", "123456789", "R9VjW@example.com", "Teknik Informatika"],
         ["Queen", "123456789", "R9VjW@example.com", "Teknik Informatika"],
         ["Budi", "123456789", "R9VjW@example.com", "Teknik Informatika"] 
];




          

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
        <h1>Daftar Mahasiswa</h1>

        <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
                <li>Nama : <?= $mhs[0] ?></li>
                <li>NRP : <?= $mhs[1] ?></li>
                <li>Email : <?= $mhs[2] ?></li>
                <li>Jurusan : <?= $mhs[3] ?></li>
            </ul>
        <?php endforeach; ?>
    
</body>
</html>