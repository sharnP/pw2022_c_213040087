<?php
// $mahasiswa = [
//     ["Sharen Kamaya Palamba", "213040087", "palambasharen15@gmail.com", "Teknik Informatika"],
//     ["Yuko", "213041615", "yukoichr@gmail.com", "Astronomi"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// Key-nya bukan index, tapi string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Sharen", 
        "nrp" => "213040087", 
        "email" => "palambasharen15@gmail.com",
        "fakultas" => "Teknik Informatika",
        "gambar" => "cwini.png"
    ],
    [
        "nama" => "Yuko", 
        "nrp" => "213041615", 
        "email" => "yukoichr@gmail.com",
        "fakultas" => "Astronomi",
        "gambar" => "ykichr.png"
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
                <pre>
                <li>Nama     : <?= $mhs["nama"]; ?></li>
                <li>NPM      : <?= $mhs["nrp"]; ?></li>
                <li>Email    : <?= $mhs["email"]; ?></li>
                <li>Fakultas : <?= $mhs["fakultas"]; ?></li>
            </pre>
            </ul>
            <?php endforeach; ?>
        </body>
    </head>
</html>

