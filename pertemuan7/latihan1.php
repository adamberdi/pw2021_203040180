<?php 

/*
Adam Berdi R. Adipati
203040180
https://github.com/adamberdi/pw2021_203040180
Pertemuan 7 - 8 Maret 2021
Mempelajari Mengenai Request Method(GET & POST) pada PHP

*/

?>



<?php
// $_GET

$mahasiswa = [
	[
		"nrp" => "203040180",
		"nama" => "Adam Berdi",
		"email" => "adamberdi46@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "lisa.png"
	],
	[
		"nama" => "Suci Wulandari",
		"nrp" => "203040183",
		"email" => "zhucinarie@gmail.com",
		"jurusan" => "Teknik Pangan",
		"gambar" => "jennie.png"
	]
];


?>

<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
	<?php foreach ( $mahasiswa as $mhs) : ?>
		<li>
			<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp= <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"> <?= $mhs["nama"]; ?></a>
	</li>

	<?php endforeach; ?>

	</ul>
</body>
</html>