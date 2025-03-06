<?php 
// Koneksi Database
require 'functions.php';

// Ubah Data
// Cek apakah data sudah dikirimkan atau diubah
if( isset($_POST["submit"]) ) {
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Gagal Diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
   
}else {
    $id = $_GET["id"];
    $karyawan = query("SELECT * FROM karyawan WHERE id = $id")[0];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halama update</title>

        <style>
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"] {
            padding: 5px;
            margin-bottom: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
        }

        input[type="file"] {
            padding: 5px;
            margin-bottom: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }



    </style>

</head>
<body>
    <h1>Ubah Data Karyawan</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $karyawan["id"]; ?>">
        <ul>
            <li>
                <label for="name">Name : </label>
                <input type="text" name="name" id="name" required value="<?= $karyawan["name"]; ?>">
            </li>
            <li>
                <label for="nik">Nik : </label>
                <input type="text" name="nik" id="nik" required value="<?= $karyawan["nik"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" required value="<?= $karyawan["email"]; ?>">
            </li>
            <li>
                <label for="tgl_msk">Tanggal Masuk : </label>
                <input type="date" name="tgl_msk" id="tgl_msk" required value="<?= $karyawan["tgl_msk"]; ?>">
            </li>  
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $karyawan["gambar"]; ?>">
            </li>          
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
    
</body>
</html>