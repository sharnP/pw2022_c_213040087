<?php 
require 'functions.php';

// cek ketika tombol tambah di-klik
if(isset($_POST['tambah'])) {

if(tambah($_POST) > 0) {
    echo "<script> 
            alert('Produk ditambahkan!')
            document.location.href = 'food.php';
    </script>";
}
}

// $newfilename = uniqid() . $filename;
    // move_uploaded_file($filetmpname, 'img/'. $filename);
    // return $filename;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Produk</title>    
</head>
<body>

<div class="container"> <br>
    <center><h2>Tambah Produk</h2></center> <br>

    <a href="food.php" class="btn btn-outline-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>
    </a>



      <div class="row mt-3">
          <div class="col-8">

          <form action="" method="post">
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <img src="" class="omg-thumbnail" id="img-preview" width="120" style="display: none;">
                    <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama"  required autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="price" class="form-control" id="harga" name="harga" required style="width: 120px;" autocomplete="off">
                </div> <br>

              <button type="submit" class="btn btn-success btn-block btn-sm" name="tambah">Tambahkan Produk!</button>

          </form>
          </div>
      </div>
 

  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="script.js"></script>
  </body>
</html>


</div>

<table class="table">
    <thead>
        <tr></tr>
    </thead>
</table>
    
</body>
</html>