<?php 

// Koneksi Database
require 'functions.php';

// cek apakah data sudah dikirimkan
if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    // cek username
    if( mysqli_num_rows($result) === 1 ) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    h1 {
        text-align: center;
    }
    form {
        width: 300px;
        margin: 0 auto;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="password"] {
        padding: 5px;
        margin-bottom: 10px;
        width: 100%;
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
</style>
<body>

    <h1>Halaman Login</h1>

    <?php if( isset($error) ) : ?>
        <center><p style="color: red; font-style: italic;">Username / Password Salah</p></center>
    <?php endif; ?>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
            <li>
                <a href="registrasi.php">Registrasi</a>
            </li>
        </ul>
    </form>
    
</body>
</html>