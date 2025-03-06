<?php 
// Array
// Variabel yang dapat memiliki banyak nilai
// elemen yang tidak terbatas
// indexnya adalah angka

// Membuat Array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array        
//echo $hari[0];   

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<hr>";
var_dump($hari);

// Menghapus elemen pada array
// unset($hari[1]);
// echo "<hr>";
// var_dump($hari);


?>