<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST ['username'];
        $password = $_POST ['password'];

        if ($username === "admin" && $password === "123") {
            header ("Location: hasilgetpost.php");
            exit;
        }else {
            echo "Username atau Password salah";
        }
    }
?>