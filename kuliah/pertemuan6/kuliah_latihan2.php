<?php 
// Array Associative
// Array yang indexnya string

$mahasiswa = [
    [
        "nama" => "Sharen Kamaya Palamba", 
        "npm" => "213040087", 
        "email" => "palambasharen15@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Wina Agustina", 
        "npm" => "213040093", 
        "email" => "winaagustina@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Dia orang", 
        "npm" => "21304000", 
        "email" => "orangji@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ]
];

// var_dump($mahasiswa as $mhs[1]["nilai_tugas"]["tugas2"]); 
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?php echo $mhs["nama"]; ?></li>
    <li>NPM: <?php echo $mhs["npm"]; ?></li>
    <li>Email: <?php echo $mhs["email"]; ?></li>
    <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
</ul>
<?php } ?>

<hr>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key; ?>: <?php echo $value; ?></li>
    <?php } ?>
</ul>
<?php } ?>


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