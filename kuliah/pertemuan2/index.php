<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

var_dump("Sharen");
echo true;

echo "nya ";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2.HTML di dalam PHP
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Hello, Selamat Datang <?php echo "Sharen!"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

</body>
</html>

<?php
// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama ="Sharen";
echo $nama;
echo "<hr>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Hello, Selamat Datang <?php echo "$nama"; ?></h1>

</body>
</html>

<?php
// Operator
// aritmatika
// + - X / $
// $x = 10;
// $y = 20;
// echo 1 + 1 ;

// penggabung string / concatenation / concat
// .
$nama_depan="Sharen ";
$nama_belakang="Palamba'";
echo $nama_depan . "Kamaya " . $nama_belakang;
echo "<hr>";
?>

<?php
// Addignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
echo "$x <br>";

$nama = " Sharen";
$nama .= " ";
$nama .= "Kamaya";
echo "$nama <br>";

// Perbandingan
// <, >, <=, >=, ==, != (*tidak mengecek tipe datanya, tapi nilainya)
var_dump(1 < 5) ;
var_dump(1 > 5);
var_dump(1 == 5);
echo "<hr>";

// identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, ! (*dipake untuk pengkondisian)
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
?>