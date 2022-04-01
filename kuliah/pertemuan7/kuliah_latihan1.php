<?php 
// SUPERGLOBALS
// Variabel milik PHP yang bisa kita gunakan
// bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER

// localhost/.../..php?nama=Sandhika&email=sandhika@gmail.com   (lewat URL)

// $_GET["nama"] = "Sharen";
// $_GET["email"] = "palambasharen15@gmail.com";

// var_dump($_GET);
// var_dump($_POST);

if(isset($_GET["nama"])) {
    $nama = $_GET['nama'];
} else {
    $nama = 'Tidak Diketahui';
}
?>

<h1>Halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=Diel">Diel</a>
    </li>
    <li>
        <a href="?nama=Cici">Cici</a>
    </li>
    <li>
        <a href="kuliah_latihan1.php?nama=Dwi">Dwi</a>
    </li>
</ul>