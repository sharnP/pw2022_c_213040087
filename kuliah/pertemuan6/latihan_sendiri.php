<?php
// $mahasiswa = [
//     ["Nadilla Ananda", "213040076", "nputriananda21@gmail.com", "Teknik Informatika"],
//     ["Chino", "213040999", "chino123@gmail.com", "Ilmu Fisika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// Key-nya bukan index, tapi string yang kita buat sendiri
$mahasiswa = [

    [
        "nama" => "Chemistry", 
        "nrp" => "Paul Cook & The Chronicles", 
        "email" => "Pop",
        "fakultas" => "2020",
        "gambar" => "chemistry.png"
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
        "fakultas" => "2018",
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
        "nrp" => "Powfu", 
        "email" => "Pop",
        "fakultas" => "2020",
        "gambar" => "realistic.png"
    ],
    [
        "nama" => "See you tomorrow", 
        "nrp" => "Arash Buana", 
        "email" => "Pop",
        "fakultas" => "2019",
        "gambar" => "tomorrow.png"
    ],
    [
        "nama" => "Whatever You Want", 
        "nrp" => "Finding Hope", 
        "email" => "Pop",
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
        "email" => "",
        "fakultas" => "",
        "gambar" => "apocalypse.png"
    ],
    [
        "nama" => "", 
        "nrp" => "", 
        "email" => "",
        "fakultas" => "",
        "gambar" => ".png"
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
            <h1>Daftar Mahasiswa</h1>
            <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $mhs["gambar"]; ?>" class="foto">
                </li>
                <li>Nama        : <?= $mhs["nama"]; ?></li>
                <li>Artis       : <?= $mhs["nrp"]; ?></li>
                <li>Genre       : <?= $mhs["email"]; ?></li>
                <li>Tahun Rilis : <?= $mhs["fakultas"]; ?></li>
            </ul>
            <?php endforeach; ?>
        </body>
    </head>
</html>

<!-- MINIMAL 10 KASUS -->