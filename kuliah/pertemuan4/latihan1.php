<?php 

// date.php     // untuk menampilkan tanggal dengan format tertentu

// function -> adl potongan program / baris2 kode yg dpt mempermudah saat sedang memprogram sesuatu
//         -> kode program bisa diberi nama dan dpt disebut berulang2
//         -> ada 4: 

// parameter(argumen) adl nilai yg dimasukkan dlm 'kurung' nya 

// Referensi : php.net/manual/en/funcref.php
// l=hari, d=tanggal, M=bulan (dlm btk huruf), m=bulan (dlm btk angka), Y=tahun

    echo date("l, d-M-Y");
echo "<hr>";


// Time
// UNIX Timestamp / EPOCH time  --> 'asal mula waktu di dunia IT'
// 'angk 16xxx' : adl detik yg sdh berlalu sejak 1 Januari 1970 - sekarang

    echo time();
echo "<br>";
echo "<br>";

    echo date("l, d M Y", time()-60*60*24*100);    // cara menghitung 100 hari kedepan(+) maupun ke belakang(-)
echo "<br>";
echo "<br>";

// mktime  --> membuat sendiri detik dari 1 Januari 1970 - detik yg diinginkan
// mktime() --> parameternya ada 6 (cuma 6 angka yg bisa di dlm)
// contoh: mktime(0,0,0,0,0,0)  --> angkanya bisa diubah sesuai keinginan
// mktime(0,0,0,0,0,0) --> (jam, menit, detik, bulan, tanggal, tahun)  --> adl urutannya!

echo date("l", mktime(0,0,0,6,15,2004));     // cara melihat pd hari apa anda lahir
echo "<hr>";

// Strtotime  --> format tanggal    // kebalikan dari 'mktime'
echo date("l", strtotime("15 jun 2004"));


// CATATAN :
// DATE/TIME ada : time(), date(), mktime(), strtotime()
// STRING : strlen() =menghitung panjang string, strcmp() =membandingkan 2 string, explode() =memecah sebuah string menjadi array, htmlspecialchars() =string khusus untuk menjaga website kita dari hacker dll.
// UTILITY : var_dump() ='mencetak isi dari sebuah variabel array/objek', isset() ='mengecek sebuah variabel apkh sdh pernah dibuat(true) atau belum(false) : menghasilkan Nilai Bolean', empty() ='mengecek apkh variabel yg dibuat kosong atau tdk', die() ='untuk memberhentikan program kita', sleep() ='untuk memberhentikan sementara'


// WARNING : fuction ini dpt digunakan bila ingin meramal:v
?>