<?php
//DATE
//untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y <br>");

//TIME
echo time();
echo date("l"), time()-60*60*24*100;

//MKDATE untuk membuat detik sendiri
echo mktime(0,0,0,8,25,1985);
?>