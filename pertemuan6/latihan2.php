<?php 

// $mahasiswa = [
//     ["Santoso", "123456789", "R9VjW@example.com", "Teknik Informatika"],
//     ["Queen", "123456789", "R9VjW@example.com", "Teknik Informatika"],
//     ["Budi", "123456789", "R9VjW@example.com", "Teknik Informatika"] 
// ];

// Array Associative
// Definisinya sama seperti array numerik, kecuali
// Key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    ["nama" => "Santoso", "nrp" => "123456789", "email" => "R9VjW@example.com", "jurusan" => "Teknik Informatika", "gambar" => "1.jpeg"],
    ["nama" => "Queen", "nrp" => "123456789", "email" => "R9VjW@example.com", "jurusan" => "Teknik Informatika", "gambar" => "2.jpeg"],
    ["nama" => "Budi", "nrp" => "123456789", "email" => "R9VjW@example.com", "jurusan" => "Teknik Informatika", "gambar" => "3.jpeg"] 
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

<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"] ?>" height="70px" width="70px"></li>
        <li>Nama : <?= $mhs["nama"] ?></li>
        <li>NRP : <?= $mhs["nrp"] ?></li>
        <li>Email : <?= $mhs["email"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
        
    </ul>
<?php endforeach; ?>
    
</body>
</html>