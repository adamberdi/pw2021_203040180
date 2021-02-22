<?php 

/*
Adam Berdi R. Adipati
203040180
https://github.com/adamberdi/pw2021_203040180
Pertemuan 4 - 22 Februari 2021
Mempelajari Mengenai Date pada PHP

*/

?>


<?php
	// Date
	// untuk menampilkan tanggal dengan format tertentu
	// echo date("l, d-M-Y");

	// Time
	// UNIX Timestamp / EPOCH time
	// detik yang sudah berlalu 1 januari 1970 
	// echo time();
	// echo date ("d M Y", time ()-60*60*24*100);

	

	// mktime
	// membuat sendiri detik
	// mktime(0,0,0,0,0,0)
	// jam, menit, detik, bulan, tanggal, tahun
	//echo date("l", mktime(0,0,0,9,4,1999));

// strtotime
echo date ("l", strtotime("04 sep 1999"));

?>