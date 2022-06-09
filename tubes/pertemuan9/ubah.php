<?php 
require 'functions.php';

// Query mahasiswa berdasarkan id
$id = $_GET['id'];
$mhs = query("SELECT * FROM food WHERE id = $id")[0];


// cek ketika tombol ubah di-klik
if(isset($_POST['ubah'])) {

if(ubah($_POST) > 0) {
    echo "<script> 
            alert('Data berhasil diubah!')
            document.location.href = 'food.php';
    </script>";
}

}