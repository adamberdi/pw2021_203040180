<?php 

/*
Adam Berdi R. Adipati
203040180
https://github.com/adamberdi/pw2021_203040180
Pertemuan 4 - 22 Februari 2021
Mempelajari Mengenai Function pada PHP

*/

?>


<?php
function salam($waktu = "Datang", $nama = "Adam Ganteng")	{
	return "selamat $waktu, $nama!";
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
<h1><?php echo salam(); ?></h1>
</body>
</html>