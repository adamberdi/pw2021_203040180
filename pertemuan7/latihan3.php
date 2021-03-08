<?php 

/*
Adam Berdi R. Adipati
203040180
https://github.com/adamberdi/pw2021_203040180
Pertemuan 7 - 8 Maret 2021
Mempelajari Mengenai Request Method(GET & POST) pada PHP

*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
	<?php if( isset($_POST["submit"]) ) : ?>

	<h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

	<form action="" method="post">
		Masukan nama :
		<input type="text" name="nama">
		<br>
		<button type="submit" name="submit">Kirim!</button>
	</form>

</body>
</html>