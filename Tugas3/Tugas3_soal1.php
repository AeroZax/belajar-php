<?php 
echo "<h3>Mathias Pandu A.D.S. XII PPLG B</h3>";

$jarak = 360;
$kecepatan = 90;
echo "Jarak Kota A - Z = $jarak Km <br>";
echo "Kecepatan = $kecepatan <br>";

$jam = $jarak / $kecepatan;
$menit = $jam * 60; //60 menit 
echo "Penyelesaian : <br>";
echo "($jarak / $kecepatan) = $jam Jam <br>";
echo "($jam x 60) = $menit Menit <br>";
echo "<b>Jawaban : $menit Menit <br>";
?>