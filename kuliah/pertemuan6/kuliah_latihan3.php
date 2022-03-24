<?php 
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
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>daftar_mahasiswa!</title>
  </head>
  <body>
      <div class="container">
          <h1>Daftar Mahasiswa</h1>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
          <img src="img/aku.png" height="50" class="rounded-circle">
      </td>
      <td>Sharen Kamaya Palamba'</td>
      <td>213040087</td>
      <td>palambasharen15@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btw badge bg-warning">delete</a>
      </td>

      <tr>
      <th scope="row">2</th>
      <td>
          <img src="img/siapa.png" height="50" class="rounded-circle">
      </td>
      <td>Yuko Ichiro</td>
      <td>213040615</td>
      <td>yukoichr@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btw badge bg-warning">delete</a>
      </td>
      </tr>

      <th scope="row">3</th>
      <td>
          <img src="img/mereka.png" height="50" class="rounded-circle">
      </td>
      <td>Cici Friskila</td>
      <td>213040812</td>
      <td>friskilaacp@gmail.com</td>
      <td>Pendidikan Kedokteran</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btw badge bg-warning">delete</a>
      </td>
      <th scope="row">4</th>
      <td>
          <img src="img/balik.png" height="50" class="rounded-circle">
      </td>
      <td>Diel Sarira</td>
      <td>213040825</td>
      <td>sarirabdiel@gmail.com</td>
      <td>Teknik Perminyakan</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btw badge bg-warning">delete</a>
      </td>

    </tr>
  </tbody>
</table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>