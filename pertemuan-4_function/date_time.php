<?php 

// Date
// Untuk menampilkan tanggal dengan format tertentu
echo "Date 	-> ";
echo date('l, d-M-Y');




echo "<br><br>";
// Time
//UNIX Timestamp / EPOCH time
// Detik yang sudah berlalu sejak 1 Januari 1970
echo "Time 	-> ";
echo time();


/* contoh menampilkan dua hari dari sekarang
	 	60*60*24*2 = 172800
	 echo date("l", time()+172800);
*/

echo "<br><br>";
// cek hari di 100 hari kedepan
echo "100 hari kedepan dari sekarang 	-> ";
echo date('l', time()+60*60*24*100);



echo "<br><br>";
// mktime
// Membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo "Hari pada tanggal 2-12-1999	-> ";
echo date('l', mktime(0,0,0,2,5,1999));

echo "<br><br>";
//strtotime
echo "Hari pada tanggal 2-12-1999	-> ";
echo date('l', strtotime("2 aug 1999"));




?>