<?php 
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';


// Ambil Data dari Tabel Karyawan
$karyawan = "SELECT * FROM karyawan ORDER BY id DESC";

// Ambil data (fetch) karyawan dari object result
$result = query($karyawan);

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <h1>Daftar Karyawan</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>    
            <th>Nik</th>    
            <th>Email</th>    
            <th>Tanggal Masuk</th>    
            <th>Gambar</th>    
        </tr>
        ';
        $i = 1;
        foreach( $result as $karyawan ) {
            $html .= '<tr>
                <td>'.$i.'</td>
                <td>'.$karyawan["name"].'</td>
                <td>'.$karyawan["nik"].'</td>
                <td>'.$karyawan["email"].'</td>
                <td>'.$karyawan["tgl_msk"].'</td>
                <td><img src="img/'.$karyawan["gambar"].'" width="50px" height="50px"></td>
            </tr>';
            $i++;
        }
        $html .= '    
    </table>        
</body>    
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-karyawan.pdf', \Mpdf\Output\Destination::INLINE);


?>