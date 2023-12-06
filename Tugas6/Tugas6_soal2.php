<?php
$target = 10946;

$angka_sebelumnya = 0;
$angka_sekarang = 1;

echo "<h3>Mathias Pandu A.D.S. XII PPLG B</h3> <br>";
echo "Deret Bilangan Fibonacci 0 sampai 20 : ";
echo "<br>";

while ($angka_sekarang <= $target) {
    // Cetak angka sekarang
    echo $angka_sekarang;

    // Cetak koma jika bukan angka terakhir dalam deret
    if ($angka_sekarang < $target) {
        echo ", ";
    }

    // Hitung angka Fibonacci berikutnya
    $angka_berikutnya = $angka_sebelumnya + $angka_sekarang;

    // Pindahkan nilai
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $angka_berikutnya;
}

// $jumlah_angka = 20;
// $angka_sebelumnya = 0;
// $angka_sekarang = 1;

// echo "Deret Fibonacci dari 0 hingga 20: ";

// for ($i = 0; $i < $jumlah_angka; $i++) {
//     // Cetak angka sekarang
//     echo $angka_sebelumnya;

//     // Cetak koma jika bukan angka terakhir dalam deret
//     if ($i < $jumlah_angka - 1) {
//         echo ", ";
//     }

//     // Hitung angka Fibonacci berikutnya
//     $angka_berikutnya = $angka_sebelumnya + $angka_sekarang;

//     // Pindahkan nilai
//     $angka_sebelumnya = $angka_sekarang;
//     $angka_sekarang = $angka_berikutnya;
// }
?>

