<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
// date_default_timezone_set("Asia/Jakarta");
// echo date("l, d-m-y");

// Time
// Unix Timestamp / EPOCH time
// Detik yang sudah berlalu sejak 1 Januari 1970 00.00.00
// echo time();

// echo date("l, D-M-Y", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,7,7,2000));

// strtotime
echo date("l", strtotime("7 july 2000"));


?>
