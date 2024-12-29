<?php
//cek apakah tombol submit sudah di tekan atau belum
if ( isset ( $_POST ["submit"] ) ){
    //cek username & password
    if ( $_POST ["username"] == "user" && $_POST ["password"] == "123"){
    //jika benar, redirect ke halaman loginhasil
        header ("Location : loginhasil.php");
        exit;
    }else{
    //jika salah, tampilkan pesan kesalahan
        $salah = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <h2>LOGIN USER !</h2> 

    <?php if ( isset( $salah) ) : ?>
        <p style="color: red ; font-style: italic;">
        USERNAME/PASSWORD SALAH ! </p>
    <?php endif ; ?>

    <ul>
        <form action="loginhasil.php" method="post">
        <li>
            <label for="username"> USERNAME : </label>
            <input type="text" name="username" id="username">
        </li>
        <br>
        <li>
            <label for="password"> PASSWORD : </label>
            <input type="password" name="password" id="password">
        </li>
        <br>
        <li>
            <button type="submit" name="submit">LOGIN
        </li>
    </ul>
</body>
</html>