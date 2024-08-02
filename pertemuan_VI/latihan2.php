<?php

//$mahasiswa = [
   //["Fajar Arif", "130202200059", "A2", "Teknik Informatika"],
  // ["Faqih Arif", "130202200060", "A3", "Teknik Informatika"],
//];

//Array Assoctiative

$gunung =[
  [
    "nama" => "Gunung Latimojong",
    "mdmpl" => "3.478",
    "lokasi" => "Kabupaten Luwu",
    "gambar" => "G.Latimojong.jpg",
  ],

  [
    "nama" => "Gunung Lompobattang",
    "mdmpl" => "2.871",
    "lokasi" => "Kabupaten Gowa",
    "gambar" => "G.Lompobattang.jpg",
  ],

  [
    "nama" => "Gunung Bawakaraeng",
    "mdmpl" => "2.845",
    "lokasi" => "Kabupaten Gowa",
    "gambar" => "G.Bawakaraeng.jpg",
  ],

  [
    "nama" => "Gunung Bulubaria",
    "mdmpl" => "2.730",
    "lokasi" => "Kabupaten Gowa",
    "gambar" => "G.Bulubaria.jpg",
  ],

  [
    "nama" => "Gunung Bulusaraung",
    "mdmpl" => "1.353",
    "lokasi" => "Kabupaten Pangkep",
    "gambar" => "G.Bulusaraung.jpg",
  ],
]; 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Gunung</title>
    </head>
    <body>
        <h1>Daftar Gunung</h1>
        <?php foreach ( $gunung as $gng): ?>
        <ul>
            <li>
                <img src="img/<?= $gng["gambar"]; ?>">
            </li>
            <li>Nama : <?= $gng['nama']; ?></li>
            <li>MDMPL : <?= $gng['mdmpl']; ?></li>
            <li>Lokasi : <?= $gng['lokasi']; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html>