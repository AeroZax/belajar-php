<?php 
require_once "functions.php";

session_start();

if (!isset($_SESSION["auth"])) {
    header("Location: login.php");
}


$id = $_GET["id"];
$data = $datapaket[$id];

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
                    <div class="transaksi-form">
                        <div class="row-1">
                            <div class="row-1 row">
                                <label for="no">No Transaksi</label>
                                <input type="text" name="no" id="no">
                            </div>
                            <div class="row-2 row">
                                <label for="tanggal">Tanggal Transaksi</label>
                                <input type="text" name="tanggal" id="tanggal">
                            </div>
                            <div class="row-3 row">
                                <label for="nama">Nama Customer</label>
                                <input type="text" name="nama" id="nama">
                            </div>
                            <div class="row-4 row">
                            <label for="paket">Pilihan Paket</label>
                                <input type="text" name="paket" value="<?= htmlspecialchars($data[2]) ?>" id="paket">
                            </div>
                            <div class="row-5 row">
                                <label for="harga">Harga Paket</label>
                                <input type="text" name="harga" value="<?= htmlspecialchars($data[3]) ?>" id="harga">
                            </div>
                        </div>
                        <div class="row-2">
                            <div class="row">
                                <input type="checkbox" name="tidak" id="tidak">
                                <label for="tidak">Tidak ada tambahan - Rp.0</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" name="pelembut" value="10000" id="pelembut">
                                <label for="pelembut">Pelembut - Rp.10.000</label>
                            </div>
                            <div class="row">
                                <button id="total" name="total">Hitung total harganya</button>
                            </div>
                        </div>
                    </div>
                    <div class="rows-2">
                        <div class="rows">
                        <div class="row-1">
                            <label for="total">Total Harga</label>
                            <input type="text" name="total" class="total" id="total">
                        </div>
                        <div class="row-1">
                            <label for="total">Pembayaran</label>
                            <input type="text" name="bayar" class="bayar" id="bayar">
                        </div>
                        <button id="kembalian">Hitung Kembalian</button>
                        </div>
                        <div class="row-1">
                            <label for="total">Kembalian</label>
                            <input type="text" name="kembalians" value="" class="kembalians" id="kembalians">
                        <button id="simpan">Simpan Kembalian</button>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <div class="row-2">
            <?php require_once "components/footer.php" ?>
        </div>
    </div>
    <script src="assets/script.js"></script>
</body>
</html>