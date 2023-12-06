<?php
echo "<h2>Mathias Pandu A.D.S. XII PPLG B</h2>";
echo "<h1>Operator String</h1>";
$data = [
    ['first_input' => "Ayo", 'second_input' => "Belajar"],
    ['first_input' => "Bersama", 'second_input' => "Niomic"],
];

echo "<table border='1'>";
echo "<tr>";
echo "<td>Input 1</td>";
echo "<td>Input 2</td>";
echo "<td>Hasil</td>";
echo "</tr>";


foreach ($data as $dt) {
    echo "<tr>";
    echo "<td>" . $dt['first_input'] . "</td>";
    echo "<td>" . $dt['second_input'] . "</td>";
    echo "<td>" . $dt['first_input'] . " " . $dt['second_input'] . "</td>";
    echo "</tr>";
};

echo "</table>";
echo "<br>";
echo "Gabungan : " . $data[0]['first_input'] . " " . $data[0]['second_input'] . " " . $data[1]['first_input'] . " " . $data[1]['second_input'];
?>