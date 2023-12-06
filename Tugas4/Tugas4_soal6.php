<?php
echo "<h2>Mathias Pandu A.D.S. XII PPLG B</h2>";

$hargaJambu = 15000; //Rp. 15000/Kg
$hargaKardus = 2000; //Rp. 2000/Pcs
$jumlahDus = 6; // 6 kardus
$jumlahJambu = 5; // 5 kg jambu

$totalkg = $jumlahDus * $jumlahJambu;
$totalJambu = $totalkg * $hargaJambu;

$totalDus = 2 * $hargaKardus;
$totalPenjualan = $totalJambu + $totalDus;

echo "=======================================<br>";
echo "Harga Jambu = Rp. $hargaJambu / Kg<br>";
echo "Harga Kardus = Rp. $hargaKardus / Pcs<br>";
echo "Total Penjualan (Dus dan Jambu) = <b>Rp. $totalPenjualan<br>";
echo "=======================================<br>"
?>