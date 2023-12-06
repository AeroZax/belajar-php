<?php 
require "functions.php";

session_start();

if (isset($_SESSION["auth"])) {
    header("Location: dashboard.php");
}

if (isset($_POST["login"])) {
    login();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="login-container">
        <h3 class="login-title">Login</h3>
        <h3 class="login-text">Selamat Datang di laundry <br> smk farmasi banjarmasin</h3>
        <form action="" class="login-card" method="post">
            <input type="text" name="username" placeholder="username" id="username">
            <input type="password" name="password" placeholder="password" id="password">
            <div class="login-btn-group">
                <button type="submit" name="register" id="register">Register</button>
                <button type="submit" name="login" id="login">Login</button>
            </div>
        </form>
    </div>
</body>
</html>