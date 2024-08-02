<?php
// 2 jenis cara menulis komentar di php, bisa dengan tanda// atau 
/* dengan cara ini*/
//pertemuan 2_PHP Dasar

// Standar Output:
//echo, print
//print_r
//var_dump

echo"Fajar Arif_Teknik Informatika <br>";
print"Fajar Arif_Teknik Informatika <br>";
print_r("Fajar Arif_Teknik Informatika <br>");
var_dump("Fajar Arif_Teknik Informatika <br>");

//kalau mau menggunakan echo untuk mencetak string bisa pakai ('' atau "")

//Penulisan sintaks PHP
//1. PHP di dalam Html
//2. Html di dalam PHP

//Variabel dan Tipe data
//variabel
$nama="Pondok_Teknologi <br>";//tidak boleh di awali angka, tapi boleh menggunakan angka
echo "Assalamualaikum, selamat datang di $nama";

//Operator
//1. Aritmatika
//2. +,-,x,%
echo 10+50;

//poperator penghubung string, concatemation
$nama_depan= "FJR";
$nama_belakang= "Desain";
echo $nama_depan."". $nama_belakang;

//Assignment
$x = 1;
$x += 10;
echo $x;

//Operator perbandingan: ===, !==
var_dump(1 < 5);

//Identitas
var_dump(1 === "1");

//Logika: &&, ||, !
$x= 10;
var_dump($x <20 && $x % 2 ==0);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar PHP</title>
    </head>
    <body>
        //1
        <h1>Assalamualaikum, Fajar Arif <?php echo "INFORMATIKA"; ?></h1>
        <p><?php echo "Santri PondokIT"; ?></p>
       
    </body>
</html>
