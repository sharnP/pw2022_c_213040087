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
        "nama" => "Yuko", 
        "npm" => "213040615", 
        "email" => "yukoichr@gmail.com", 
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