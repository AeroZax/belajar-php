<?php 
require_once "functions.php";

session_start();

if (!isset($_SESSION["auth"])) {
    header("Location: login.php");
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container-dashboard">
        <div class="row-1">
            <?php require_once "components/header.php" ?>
            <main>
                <section>
                    <div class="hero"></div>

                    <div class="produk">
                        <h3>Daftar Paket laundry</h3>
                        <div class="daftar">
                            <?php $i = 0 ?>
                            <?php foreach ($datapaket as $paket) : ?>
                            <div class="card">
                                <div class="card-content">
                                    <h3><?= $paket[1] ?></h3>
                                    <p><?= $paket[2] ?></p>
                                    <p><?= $paket[3] ?></p>
                                </div>
                                <a href="transaksi.php?id=<?= $i++ ?>" class="paket-btn">Pilih Paket</a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <div class="row-2">
           <?php require_once "components/footer.php" ?>
        </div>
    </div>
</body>
</html>