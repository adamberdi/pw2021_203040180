<?php 

/*
Adam Berdi R. Adipati
203040180
https://github.com/adamberdi/pw2021_203040180
Pertemuan 5 - 3 Maret 2021
Mempelajari Mengenai Array pada PHP

*/

?>

<?php
$mahasiswa = [
	["Adam Berdi", "203040180", "Teknik Informatika", "adamberdi46@gmail.com"], 
	["Suci Wulandari", "203040181", "Teknik Industri", "zhucinarie@gmail.com"],
	["Irene", "203040182", "Teknik Komputer", "irenerv@gmail.com"]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>

<ul>
	
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan :<?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>