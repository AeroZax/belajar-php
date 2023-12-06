<?php 
echo "<h3>Mathias Pandu A.D.S. XII PPLG B</h3>";
$jual = 80000 ;
$beli = 50000;
$keuntungan = "?";
echo "Jual = $jual <br>"; 
echo "beli = $beli <br>";
echo "Keuntungan = $keuntungan";
echo "<br>";

$pengurangan = $jual - $beli;
$pembagian = $pengurangan / $beli;
$perkalian = $pembagian * 100 ;
echo "Cara : ((80.000 - 50.000)/ 50.000) * 100 %";
echo "<br>";
echo "Hasil : $perkalian %";
echo "<br>";
echo "Jadi keuntungan yang di dapatkan putri adalah 60%";
?>