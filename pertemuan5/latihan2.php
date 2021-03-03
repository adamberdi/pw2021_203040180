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
// Pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,77,89, 8, 45];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}

	.clear {clear: both;}
	</style>
</head>
<body>
<?php for( $i = 0; $i < count($angka);  $i++ ) { ?>
	<div class="kotak"><?php echo $angka[$i] ; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ( $angka as $a ) : ?>
	<div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>




</body>
</html>
