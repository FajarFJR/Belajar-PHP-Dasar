<?php
$mahasiswa = [
    ["Fajar Arif", "13020220059", "Teknik Informatika", "A2"],
    ["Arif Fajar", "13020220060", "Teknik Informatika", "A2"],
    ["fajri rifa", "13020220061", "Teknik Informatika", "A2"]
];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar mahasiswa</title>
    </head>
    <body>
        <h1>Daftar mahasiswa</h1>

        <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <? =$mhs[0]; ?></li>
            <li>NIM :<? =$mhs[1]; ?></li>
            <li>Jurusan :<? =$mhs[2]; ?></li>
            <li>Kelas :<? =$mhs[3]; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html>