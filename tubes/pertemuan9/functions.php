<?php 

function koneksi() {
    // koneksi ke database nya.
    $conn = mysqli_connect("localhost", "root", "", "phptubes") or die('KONEKSI GAGAL');

    // koneksi data dari tabel.
    $result = mysqli_query($conn, "SELECT * FROM users");
    if( !$result) {
        echo mysqli_error($conn);
    }
    
    return $conn;
}


function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}



function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // untuk mengecek konfirmasi password user
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password salah!');
              </script>";
              return false;
    }
    return 'index.php';
}



function tambah($data) {
    $conn = koneksi();

    $nama = htmlspecialhars($data['nama']);
    $harga = htmlspecialhars($data['harga']);
    $gambar = htmlspecialhars($data['gambar']);

    $query = "INSERT INTO produk VALUES (null, '$nama', '$harga', '$gambar' )";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}



function hapus($id)
{
    $conn = koneksi();

    // query mahasiswa berdasarkan id
    $data = query("SELECT * FROM food WHERE id = $id")[0];

    // hapus file gambar, kecuali gambar default
    if ($data["gambar"] !== 'nophoto.png') {
    unlink('img/' . $data["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}




function ubah($data){
    $conn = koneksi();

    // jalankan fungsi upload gambar
    // jika user tidak memilih gambar
    if($_FILES["gambar"]["error"] === 4) {
        $gambar  = 'nophoto.png';
    } else {

        // jalankan fungsi upload gambar
        $gambar = upload();
        // cek jika upload gagal
        if(!$gambar) {
            return false;
        }
    }
}



function upload() 
{
    // menyiapkan data gambar.
    $filename = $_FILES["gambar"]["nama"];
    $filetmpname = $_FILES["gambar"]["tmp_nama"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = $pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek file yg bukan gambar.
    // if(!in_array($filetype, $allowedtype)) {
        //echo "<script>
                // alert('File yang di upload bukan gambar!);
                // document.location.href = 'food.php';
              // </script>"
        // return false;
    // }

    // cek ukuran gambar.
    // if($filesize > 1000000) {
        // echo "<script>
                // alert('Gambar terlalu besar!');
              // </script>"
        // return false;
    // }

    // siap untuk upload.
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, 'img/'. $filename);
    return $filename;
}



?>