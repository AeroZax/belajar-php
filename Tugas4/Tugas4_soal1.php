<?php 
echo "<h3>Mathias Pandu A.D.S. PPLG B</h3> <br>";

$beli = 6000;
$jual = 7500;
$untung = 300;

echo "Harga Beli = Rp. $beli <br>";
echo "Harga Jual = Rp. $jual <br>";
echo "Keuntungan = Rp. $untung <br>";
echo "Berapa jumlah kambing yang dibeli = ? <br>";

$keuntungan = $jual - $beli;
$ekor = $keuntungan / $untung;

echo "Penyelesaian : <br>";
echo "($jual - $beli) :$untung <br>";
echo "$keuntungan : $untung = $ekor <br>";
echo "<b>Jawaban : $ekor Ekor <br>";
?>