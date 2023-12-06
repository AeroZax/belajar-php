<?php 

$datapaket = [
    [1, "Paket A", "cuci kering biasa",40000],
    [2, "Paket B", "Cuci kering dan lipat",45000],
    [3, "Paket C", "Cuci kering, setrika, dan lipat", 50000],
    [4, "Paket D", "Cuci kering, setrika, pengharum,lipat",55000]
];

function login() {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "userlsp" && $password == "smkfarmasibjm") {
        $_SESSION["auth"] = true;
        header("Location: ./index.php");
    } else {
        echo "<script>alert('Username atau password salah!')</script>";
    }
}

function logout() {
    unset($_SESSION["auth"]);
    header("Location: login.php");
}
