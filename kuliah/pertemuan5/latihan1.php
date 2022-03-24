<?php
// Pertemuan 5 - ARRAY
//Array adalah variabel yang bisa menampung/menyimpan banyak nilai sekaligus

$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

$mahasiswa1 = "Sandhika";

// Membuat ARRAY
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"]; // cara baru
$bulan = array("Januari", "Februari", "Maret"); // cara lama
$myArr = [10, "Sandhika", true];

// Mencetak ARRAY
// mencetak 1 elemen di dalam array, menggunakan index
// dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $myArr[0];
echo "<hr>";

// mencetak menggunakan var_dump() atau print_r()
// khusus untuk debuggin
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// Mencetak semua isi array menggunakan looping
// for
for($i = 0; $i < count($hari); $i++) {
echo $hari[0];
echo "<br>";
}
echo "<hr>";

// foreach
foreach($bulan as $b ) {
    echo $b;
    echo "<br>";
}
echo "<hr>";

// -> arrow
// => fat arrow
foreach ($bulan as $key => $value) {
    echo "Key: $key - Value: $value";
    echo "<br>";
}
echo "<hr>";

// Memanipulasi ARRAY
// menambah elemen baru diakhir array
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);

?>