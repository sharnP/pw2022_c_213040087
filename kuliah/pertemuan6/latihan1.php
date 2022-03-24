<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Array</title>
        <style>
            .kotak {
                width: 30px;
                height: 30px;
                background-color: #BADA55;
                text-align: center;
                line-height: 30px;
                margin: 3px;
                float: left;
                transition: 1s;
            }
            .kotak:hover {
                transform: rotate(360deg);
                border-radius: 50%;
            }
            .clear {
                clear:both;
            }
        </style>
    </head>
    <body>
        <?php
        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
        ?>

        <?php foreach( $angka as $a ) : ?>
            <?php foreach( $a as $b ) : ?>
            <div class="kotak"><?= $b; ?></div>
            <?php endforeach; ?>
            <div class="clear"></div>
        <?php endforeach; ?>

    </body>
</html>


<?php
// $mahasiswa = [
//     ["Sharen Kamaya Palamba", "213040087", "palambasharen15@gmail.com", "Teknik Informatika"],
//     ["Diel", "213040825", "sarirabdiel@gmail.com", "Teknik Perminyakan"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// Key-nya bukan index, tapi string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Sharen Kamaya Palamba", 
        "nrp" => "213040087", 
        "email" => "palambasharen15@gmail.com",
        "fakultas" => "Teknik Informatika",
        "gambar" => ".png"
    ],
    [
        "nama" => "Diel", 
        "nrp" => "213040825", 
        "email" => "sarirabdiel@gmail.com",
        "fakultas" => "Teknik Perminyakan",
        "gambar" => ".png"
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