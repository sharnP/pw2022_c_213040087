<?php 
// SUPERGLOBALS
// Variabel milik PHP yang bisa kita gunakan
// bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER

// localhost/.../..php?nama=Sandhika&email=sandhika@gmail.com   (lewat URL)

// $_GET["nama"] = "Diel";
// $_GET["email"] = "diel25@gmail.com";

// var_dump($_GET);
// var_dump($_POST);

if(isset($_GET["nama"])) {
} else {
    $nama = 'Tidak Diketahui!';
}

// localhost/.../...php?nama=Sandhika
?>


<h1>Halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?
        nama=Didit">Didit</a>
    </li>
    <li>
        <a href="?nama=Sandhika">Diel</a>
    </li>
</ul>