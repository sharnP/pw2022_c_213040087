<?php
// $mahasiswa = [
//  ["Sharen Kamaya Palamba", "213040087", "palambasharen15@gmail.com", "Teknik Informatika"],
//  ["Yuko", "213040615", "yukoichr@gmail.com", "Biologi"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// Key-nya bukan index, tapi string yang kita buat sendiri
$mahasiswa = [

    [
        "nama" => "Chemistry", 
        "nrp" => "Paul Cook & The Chronicles", 
        "email" => "Indie",
        "fakultas" => "2020",
        "gambar" => "paulcook.png"
    ],
    [
        "nama" => "Kaktus", 
        "nrp" => "Suara Kayu", 
        "email" => "Pop",
        "fakultas" => "2020",
        "gambar" => "kaktus.png"
    ],
    [
        "nama" => "Ingkar", 
        "nrp" => "Tulus", 
        "email" => "Pop",
        "fakultas" => "2020",
        "gambar" => "ingkar.png"
    ],
    [
        "nama" => "To Many Problems", 
        "nrp" => "Ouse (feat. Powfu)", 
        "email" => "Pop",
        "fakultas" => "2019",
        "gambar" => "problems.png"
    ],
    [
        "nama" => "Realistic", 
        "nrp" => "Ouse", 
        "email" => "Pop",
        "fakultas" => "2020",
        "gambar" => "realistic.png"
    ],
    [
        "nama" => "I'll Be Friends With You", 
        "nrp" => "Arash Buana", 
        "email" => "Indie",
        "fakultas" => "2020",
        "gambar" => "arashbuana.png"
    ],
    [
        "nama" => "Whatever You Want", 
        "nrp" => "Finding Hope", 
        "email" => "Indie",
        "fakultas" => "2019",
        "gambar" => "whatever.png"
    ],
    [
        "nama" => "Heat Waves", 
        "nrp" => "Glass Animals", 
        "email" => "Pop",
        "fakultas" => "2020",
        "gambar" => "heatawaves.png"
    ],
    [
        "nama" => "Apocalypse", 
        "nrp" => "Cigarettes After S", 
        "email" => "Indie",
        "fakultas" => "2020",
        "gambar" => "apocalypse.png"
    ],
    [
        "nama" => "LoveSick", 
        "nrp" => "BoyWithUke", 
        "email" => "Pop",
        "fakultas" => "2021",
        "gambar" => "lovesick.png"
    ],
    [
        "nama" => "IDK You Yet", 
        "nrp" => "Alexander 23", 
        "email" => "Indie",
        "fakultas" => "2021",
        "gambar" => "idkyouyet.png"
    ],
    [
        "nama" => "Long Drives", 
        "nrp" => "BoyWithUke", 
        "email" => "Pop",
        "fakultas" => "2021",
        "gambar" => "longdrives.png"
    ]


];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Lagu</title>
        <style>
            .foto {
                width: 200px;
                height: 200px;
            }
        </style>
        <body>
            <h1>
                <font face="Garamond">Daftar Musik :</font><br>
            </h1>
            <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $mhs["gambar"]; ?>" class="foto">
                </li>
                <pre>
                <li>Judul       : <?= $mhs["nama"]; ?></li>
                <li>Artis       : <?= $mhs["nrp"]; ?></li>
                <li>Genre       : <?= $mhs["email"]; ?></li>
                <li>Tahun Rilis : <?= $mhs["fakultas"]; ?></li>
                </pre>
            </ul>
            <?php endforeach; ?>
        </body>
    </head>
</html>

<!-- MINIMAL 10 KASUS -->