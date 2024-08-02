<?php
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
        <ul>
        <?php foreach ($gunung as $gng): ?>
          <li>
            <a href="latihan2.php?nama=<?= $gng["nama"]; ?>&
            mdmpl=<?= $gng["mdmpl"]; ?>&
            lokasi=<?= $gng["lokasi"]; ?>&
            gambar=<?= $gng["gambar"]; ?>"><?= $gng["nama"]; ?></li>
        <?php endforeach; ?>   
        </ul>
       
    </body>
</html>

