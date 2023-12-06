<?php
$data = [
  ['first_input' => "false", 'second_input' => "false"],
  ['first_input' => "false", 'second_input' => "true"],
  ['first_input' => "true", 'second_input' => "false"],
  ['first_input' => "true", 'second_input' => "true"],
];

echo "<h2>Mathias Pandu A.D.S. XII PPLG B</h2>";
echo "Tabel Input 1111";

// Bagian Tabel
echo "<table border= 1>";
echo "<tr>";
echo "<td>Input true</td>";
echo "<td>Input 2</td>";
echo "<td>AND</td>";
echo "<td>OR</td>";
echo  "</tr>";

  foreach ($data as $dt) {
    if ($dt['first_input'] == "true" && $dt['second_input'] == "true") {
      $and = "1";
    } else {
      $and = "0";
    }
    if ($dt['first_input'] == "true" || $dt['second_input'] == "true") {
      $or = "1";
    } else {
      $or = "0";
    }
    echo "<tr>";
    echo "<td>" . $dt['first_input'] . "</td>";
    echo "<td>" . $dt['second_input'] . "</td>";
    echo "<td>" . $and . "</td>";
    echo "<td>" . $or . "</td>";
    echo "</tr>";
  }

echo "</table>";
  ?>