<?php
//Variabel yang dapat menampung banyak nilai
$nama ="FajarArif";

//Membuat Array
//cara lama
$hari =array("Senin", "Selasa", "Rabu");
//cara baru
$bulan =["januari", "Februari", "Maret"];

//Menampilkan Array
var_dump($hari);
echo "<br>";
echo $bulan[1]

//Menambah elemen baru papa array
var_dump($hari);
$hari[] ="kamis";
echo "<br>";
var_dump($hari);

?>