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
        "nama" => "Nadilla Ananda", 
        "nrp" => "213040076", 
        "email" => "nputriananda21@gmail.com",
        "fakultas" => "Teknik Informatika",
        "gambar" => "nyan1.png"
    ],
    [
        "nama" => "Chino", 
        "nrp" => "213040999", 
        "email" => "chino123@gmail.com",
        "fakultas" => "Ilmu Fisika",
        "gambar" => "kitten1.png"
    ]
];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
        <body>
            <h1>Daftar Mahasiswa</h1>
            <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $mhs["gambar"]; ?>">
                </li>
                <li>Nama : <?= $mhs["nama"]; ?></li>
                <li>NPM : <?= $mhs["nrp"]; ?></li>
                <li>Email : <?= $mhs["email"]; ?></li>
                <li>Fakultas : <?= $mhs["fakultas"]; ?></li>
            </ul>
            <?php endforeach; ?>
        </body>
    </head>
</html>

<!-- MINIMAL 10 KASUS -->