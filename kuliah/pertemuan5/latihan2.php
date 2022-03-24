<?php
// ARRAY Multidimensi
// Array di dalam array

$mahasiswa = [["Sharen Kamaya P", "213040087", "palambasharen15@gmail.com", "Teknik Informatika"], ["Wina Agustina", "213040093", [1,2,3], "winaagustina@unpas.ac.id", "Teknik Informatika"]];
echo $mahasiswa[1][2][1][0]; // 2

?>