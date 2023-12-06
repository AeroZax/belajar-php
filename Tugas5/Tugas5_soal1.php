<?php
$angka = [1,2,3,4,5,6,7,8,9,10];

$hasil = [];
foreach ($angka as $a){
if ($a % 2 == 0){
    $jenisBilangan = "Bilangan Genap";
} else {
    $jenisBilangan = "Bilangan Ganjil";
}
$hasil[] = $jenisBilangan;
}

?>
<h2>Mathias Pandu A.D.S. XII PPLG B</h2>
<h1>Tabel Bilangan</h1>
<table border="1">
  <tr>
         <td>Bilangan</td>
         <td>Jenis</td>
  </tr>
  <tr>
        <td><?php echo "$angka[0]" ?></td>
        <td>
          <?php
          //Tulis jawaban disini
          echo "$hasil[0]";
        ?>
        </td>
  </tr>
  <tr>
        <td><?php echo "$angka[1]" ?></td>
        <td>
          <?php
          //Tulis jawaban disini
          echo "$hasil[1]";
          ?>
        </td>
  </tr>
  <tr>
        <td><?php echo "$angka[2]" ?></td>
        <td>
          <?php
          //Tulis jawaban disini
          echo "$hasil[2]";
          ?>
        </td>
  </tr>
  <tr>
 <td><?php echo "$angka[3]" ?></td>
 <td>
        <?php
        //Tulis jawaban disini
        echo "$hasil[3]";
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[4]" ?></td>
 <td>
        <?php
        //Tulis jawaban disini
        echo "$hasil[4]";
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[5]" ?></td>
 <td>
        <?php
        //Tulis jawaban disini
        echo "$hasil[5]";
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[6]" ?></td>
 <td>
        <?php
        //Tulis jawaban disini
        echo "$hasil[6]";
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[7]" ?></td>
 <td>
        <?php
        //Tulis jawaban disini
        echo "$hasil[7]";
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[8]" ?></td>
 <td>
        <?php
        //Tulis jawaban disini
        echo "$hasil[8]";
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[9]" ?></td>
 <td>
        <?php
        //Tulis jawaban disini
        echo "$hasil[9]";
        ?>
 </td>
</tr>
</table>