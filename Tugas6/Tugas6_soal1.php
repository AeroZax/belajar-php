<?php
$samping = 9;
$bawah = 1;

$limit = 10;
$const = 9;

// Data belah ketupat pertama
$data_pertama = 10; 
$data_kedua = 0;
$data_ketiga = 1;
$data_keempat = 18;

// Data belah ketupat kedua
$data_kelima = 10;
$data_keenam = 0;
$data_ketujuh = 1;
$data_kedelapan = 18;

echo "<h2>Mathias Pandu A.D.S. XII PPLG B</h2>";

// Segitiga pertama 
for ($a = 0; $a <= $limit; $a++) {
    for ($b = 1; $b <= $samping; $b++) {
        for ($c = 0; $c < $data_pertama; $c++) {
            echo "_";
        }

        for ($c = 0; $c < $data_kedua; $c++) {
            echo "x";
        }

        for ($c = 0; $c <= $data_pertama; $c++) {
            echo "&nbsp;&nbsp;";
        }
    }

    echo "<br>";

    $data_pertama -= 1;
    $data_kedua += 2;
}

// Segitiga Kedua
for ($a = 0; $a <= $const; $a++) {
    for ($b = 1; $b <= $samping; $b++) {
        for ($c = 0; $c < $data_ketiga; $c++) {
            echo "_";
        }
        for ($c = 0; $c < $data_keempat; $c++) {
            echo "x";
        }
        for ($c = 0; $c <= $data_ketiga; $c++) {
            echo "&nbsp;&nbsp;";
        }
    }

    echo "<br>";

    $data_ketiga += 1;
    $data_keempat -= 2;
}

// Segitiga ketiga
for ($a = 0; $a <= $limit; $a++) {
    for ($b = 1; $b <= $samping; $b++) {
        for ($c = 0; $c < $data_kelima; $c++) {
            echo "_";
        }

        for ($c = 0; $c < $data_keenam; $c++) {
            echo "x";
        }

        for ($c = 0; $c <= $data_kelima; $c++) {
            echo "&nbsp;&nbsp;";
        }
    }

    echo "<br>";

    $data_kelima -= 1;
    $data_keenam += 2;
}

// Segitiga keempat
for ($a = 0; $a <= $const; $a++) {
    for ($b = 1; $b <= $samping; $b++) {
        for ($c = 0; $c < $data_ketujuh; $c++) {
            echo "_";
        }
        for ($c = 0; $c < $data_kedelapan; $c++) {
            echo "x";
        }
        for ($c = 0; $c <= $data_ketujuh; $c++) {
            echo "&nbsp;&nbsp;";
        }
    }

    echo "<br>";

    $data_ketujuh += 1;
    $data_kedelapan -= 2;
}