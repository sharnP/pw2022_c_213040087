<?php
// Array Associative
// Array yang index-nya ber-asosiasi / berpasangan dengan angka

$mahasiswa = [
    ["Sharen Kamaya Palamba", "213040087", "palambasharen15@gmail.com", "Teknik Informatika"],
    ["Wina Agustina", "213040093", "winaagustina@gmail.com", "Teknik Informatika"],
    ["Yuko", "213040615", "yukoichr@gmail.com", "Teknik Informatika"]
];

// var_dump($mahasiswa[1][3]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?php echo $mhs[0]; ?></li>
    <li>NPM: <?php echo $mhs[1]; ?></li>
    <li>Email: <?php echo $mhs[2]; ?></li>
    <li>Jurusan: <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>