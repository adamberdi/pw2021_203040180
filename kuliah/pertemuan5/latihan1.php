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
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value 
//key adalah index, yang dimulai dari 0

$nama = "adamberdi";
$hari = "senin";
$hari2 ="selasa";

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = [ "Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];


// Menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// menambhakan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);




?>