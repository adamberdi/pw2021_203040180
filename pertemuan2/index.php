<?php 

/*
Adam Berdi R. Adipati
203040180
https://github.com/adamberdi/pw2021_203040180
Pertemuan 2 - 14 Februari 2021
Mempelajari Mengenai Sintaks PHP
*/

?>

<?php
// Pertemuan 2 - PHP Dasar
// Sintaks php

// Standar Output
// echo, print 
//print_r
//var_dump

//Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diambil dengan angka, tapi boleh mengandung angka
// $nama = "Adam Berdi";
// echo "Halo, nama saya $nama";

// Operator 
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x + $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Adam";
// $nama_belakang = "Berdi";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Adam";
// $nama .= " " ;
// $nama .= "Berdi";
// echo $nama ;

// Perbandingan
// <, >, <=, >=, ==, != 
// var_dump(1 == "1");

// Identitas 
// ===, !==
// var_dump(1 === "1");

// Logika 
// &&, ||, ! 
$x = 30;
var_dump($x < 20 || $x % 2 == 0);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Adam Berdi" ?></h1>
</body>
</html>