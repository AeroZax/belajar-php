<?php 
echo "<h3>Mathias Pandu A.D.S. XII PPLG B</h3>";
$hari = [36, "X"] ;
$pekerja = [12, 24];

echo "$hari[0] Hari = $pekerja[0] Pekerja ";
echo "<br>";
echo "$hari[1] Hari = $pekerja[1] Pekerja ";
echo "<br>";
echo "$hari[1] = ...?";
echo "<br>";

$kali = $hari[0] * $pekerja[0];
echo "<br>";
$bagi = $kali / $pekerja[1];
echo "Cara kerja :  ((36 * 36) /24)";
echo "<br>";
echo "Hasil : $bagi Hari = $pekerja[1] Pekerja";
echo "<br>";
echo "Jadi dengan 24 pekerja mempersingkat waktu menjadi 18 Hari";
?>