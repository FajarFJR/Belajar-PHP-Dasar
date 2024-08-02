<!DOCTYPE html>
<html>
    <head>
        <title>Detail Gunung</title>
    </head>
    <body>
        <ul>
            <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
            <li><?= $_GET["nama"]; ?></li>
            <li><?= $_GET["mdmpl"]; ?>
            <li><?= $_GET["lokasi"]; ?>
        </ul>
        
        <a href="latihan1.php">kembali ke daftar mahasiswa</a>
    </body>
</html>

//Metode Requesr Get adalah metode pengiriman data melalui URL dan data tersebut dapat di tangkap oleh variabel super global