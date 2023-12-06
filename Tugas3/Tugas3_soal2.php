<?php 
echo "<h3>Mathias Pandu A.D.S. XII PPLG B</h3> <br>";

$tabungan = 150000;
$bunga = 12.5;

echo "Tabungan Awal = Rp. $tabungan <br>";
echo "Bungan Setahun = $bunga% <br>";
echo "Total Tabungan Setahun = ? <br>";

$bagi = $bunga / 100;
$kali = $bagi * $tabungan;
$penjumlahan = $tabungan + $kali;
echo "Penyelesaian : <br>";
echo "($bunga%) / 100 x $tabungan <br>";
echo "$bagi x $tabungan = $kali<br>";
echo "$tabungan + $kali = $penjumlahan <br>";
echo "<b>Jawaban : Rp. $penjumlahan <br>";
?>