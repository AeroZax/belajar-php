<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    if ($number <= 3) {
        return true;
    }
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }

    $i = 5;
    while ($i * $i <= $number) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }

    return true;
}

echo "<h3>Mathias Pandu A.D.S. XII PPLG B</h3> <br>";
echo "Deret bilangan prima dari 0 hingga 200: <br>";

for ($i = 0; $i <= 200; $i++) {
    if (isPrime($i)) {
        echo $i;
        if ($i != 200) {
            echo ", ";
        }
    }
}

// function isPrima($angka) {
//     if ($angka <= 1) return false;
//     for ($i = 2; $i * $i <= $angka; $i++) {
//         if ($angka % $i == 0) return false;
//     }
//     return true;
// }

// echo "Deret bilangan prima dari 0 sampai 200:<br>";
// for ($angka = 0; $angka <= 200; $angka++) {
//     if (isPrima($angka)) {
//         echo $angka . " ";
//     }
// }
?>