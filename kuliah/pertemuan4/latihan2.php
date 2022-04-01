<?php 
// function.php        // defenisikan dulu, lalu panggil !
// cara mengisi PARAMETER !

function salam($waktu ="Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";       // ini adl nilainya !
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Malam", "Sharen"); ?></h1>
</body>
</html>

<?php echo "<hr>" ?>

<?php
// function salam($waktu, $nama) {
//     return "Selamat $waktu, $nama!";       // ini adl nilainya !
// }    ?.>

// <!DOCTYPE html>
// <html>
// <head>
//     <title>Latihan Function</title>
// </head>
// <body>
//     <h1><?= salam();..? ><h1>
// </body>
// </html>
?>