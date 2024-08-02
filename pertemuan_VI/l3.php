
<?php
//ARRAY
//Membuat Array
$hari =array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Ahad");
$bulan =["Januari","Februari","Maret","April","Mei","Juni"];
$arr =[100, "Teks", true];

//Menampilkan Array versi debugging
var_dump($hari);
echo"<br>";
print_r($bulan);

//Menampilkan 1 elemen pada Array
echo $arr[0];
?>

//latihan2
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <?php foreach ( $mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Kelas : <?= $mhs[2]; ?></li>
            <li>Prodi : <?= $mhs[3]; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html>