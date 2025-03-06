<?php

// Cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // Cek username dan password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
        // Jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // Jika salah, tampilkan pesan kesalahan
        $error = true;
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">Username atau Password salah</p>
    <?php endif; ?>

    <h1>Halaman Login</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </ul>
    </form>
    
</body>
</html>