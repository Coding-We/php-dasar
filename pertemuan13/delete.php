<?php 
// Delete Data
// Koneksi Database
require 'functions.php';

// Cek apakah data sudah dikirimkan
if( isset($_GET["id"]) ) {
    if( delete($_GET["id"]) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'index.php';
            </script>   
        ";
    }else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'index.php';
            </script>   
        ";
    }
   
}


?>