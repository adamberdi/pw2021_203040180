<?php 

/*
Adam Berdi R. Adipati
203040180
https://github.com/adamberdi/pw2021_203040180
Pertemuan 6 - 3 Maret 2021
Mempelajari Mengenai Associative Array pada PHP

*/

?>

<?php
// $mahasiswa = [
// 	["Adam Berdi", "203040180", "adamberdi46@gmail.com", "Teknik Informatika"],
// 	["Suci Wulandari", "203040181", "zhucinarie@gmail.com", "Teknik Industri"]	
// 	];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$blackpink = [
	[
		"nama" => "Jennie", 
		"posisi" => "Main Rapper, Vokalis", 
		"tgllahir" => "16 Januari 1999",
		"instagram" => "@Jennierubyjane",
		"gambar" => "jennie.png",
		"lahir" => "Korea Selatan",
		"goldar" => "B",
		"tinggi" => "163 cm",
		"berat" => "50 kg",
	], 
	[
		"nama" => "Jisoo", 
		"posisi" => "Lead Vocalis, Visual", 
		"tgllahir" => "3 Januari 1995",
		"instagram" => "@sooyaaa__",
		"gambar" => "jisoo.png",
		"lahir" => "Seoul, Korea Selatan",
		"goldar" => "A",
		"tinggi" => "162 cm",
		"berat" => "45 cm",
	],
	[
		"nama" => "Rose", 
		"posisi" => "Main Vocalist, Lead Dancer", 
		"tgllahir" => "11 Februari 1997",
		"instagram" => "@roses_are_rosie",
		"gambar" => "rose.png",
		"lahir" => "New Zealand",
		"goldar" => "B",
		"tinggi" => "168 cm",
		"berat" => "45 kg",
	],
	[
		"nama" => "Lisa", 
		"posisi" => "Main Dancer, Lead Rapper, Sub-Vokalis, Maknae", 
		"tgllahir" => "27 Maret 1997",
		"instagram" => "@lalalalisa_m",
		"gambar" => "lisa.png",
		"lahir" => "Bangkok, Thailand",
		"goldar" => "O",
		"tinggi" => "166,5 cm",
		"berat" => "44,7 kg",
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>MEMBER BLACKPINK</title>
</head>
<body>
	<h1>BLACKPINK</h1>

	<?php foreach ( $blackpink as $bp) : ?>
		<ul>
			<li>
				<img src="img/<?= $bp["gambar"]; ?>">
			</li>
			<li>Nama : <?= $bp["nama"]; ?></li>
			<li>Posisi : <?= $bp["posisi"]; ?></li>
			<li>Tanggal Lahir : <?= $bp["tgllahir"]; ?></li>
			<li>Tempat Lahir : <?= $bp["lahir"]; ?></li>
			<li>Tinggi Badan : <?= $bp["tinggi"]; ?></li>
			<li>Berat Badan : <?= $bp["berat"]; ?></li>
			<li>Golongan Darah : <?= $bp["goldar"]; ?></li>
			<li>Instagram : <?= $bp["instagram"]; ?></li>
		</ul>
		
	<?php endforeach; ?>

</body>
</html>




