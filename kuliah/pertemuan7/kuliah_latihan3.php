<?php 

// title ganti dengan nama: <p class="card-text">npm</p>
// jgn lupa ganti yg latihan 3 nya!!


$mahasiswa = [
[
    "nama" => "Sharen Kamaya Palamba", 
    "npm" => "213040087", 
    "email" => "nputriananda21@gmail.com", 
    "fakultas" => "Teknik Informatika"
],
[
    "nama" => "Yuko Ichiro", 
    "npm" => "213040615", 
    "email" => "yukoichr@gmail.com", 
    "fakultas" => "Teknik Informatika"
],
[
    "nama" => "Cici Friskila",
    "npm" => "213040812",
    "email" => "fcici12@gmail.com",
    "fakultas" => "Pendidikan Kedokteran"
],
[
    "nama" => "Abdiel Sarira",
    "npm" => "213040825",
    "email" => "sariradiel@gmail.com",
    "fakultas" => "Teknik Perminyakan"
],
[
    "nama" => "Dwi Al",
    "npm" => "213040317",
    "email" => "aldwi@gmail.com",
    "fakultas" => "Teknik Kimia"
]
];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
        <div class="container">
            <h1>Detail Mahasiswa</h1>
            <div class="col-md-8">
                <p class="card-title">Sharen Kamaya palamba</div>
                <p class="card-title">213040087</div>
                <p class="car-title">palambasharen15@gmail.com</div>
                <p class="car-title">Teknik Informatika</div>
                <a href=""></a>
            </div>
        </div>
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
        
        </tr>
    </thead>
    <tbody>

        <tr>
        <th scope="row">1</th>
        <td>
            <img src="aku.png" height="50" class="rounded-circle">
        </td>
        <td>Sharen Kamaya Palamba</td>
        <td>213040087</td>
        <td>palambasharen15@gmail.com</td>
        <td>Teknik Informatika</td>
        <td>
            <a href="" class="btn badge bg-info">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
            <a href="" class="btn badge bg-danger">detail</a>
        </td>
        </tr>

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
            <a href="" class="btn badge bg-info">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
            <a href="" class="btn badge bg-danger">detail</a>
        </td>
        </tr>

        <tr>
        <th scope="row">3</th>
        <td>
            <img src="img/balik.png" height="50" class="rounded-circle">
        </td>
        <td>Cici F</td>
        <td>213040812</td>
        <td>fcici12@gmail.com</td>
        <td>Pendidikan Kedokteran</td>
        <td>
            <a href="" class="btn badge bg-info">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
            <a href="" class="btn badge bg-danger">detail</a>
        </td>
        </tr>

        <tr>
        <th scope="row">4</th>
        <td>
            <img src="img/kitten3.png" height="50" class="rounded-circle">
        </td>
        <td>Abdiel Sarira</td>
        <td>213040825</td>
        <td>sarirabdiel@gmail.com</td>
        <td>Teknik Perminyakan</td>
        <td>
            <a href="" class="btn badge bg-info">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
            <a href="" class="btn badge bg-danger">detail</a>
        </td>
        </tr>

        <tr>
        <th scope="row">5</th>
        <td>
            <img src="img/dia.png" height="50" class="rounded-circle">
        </td>
        <td>Dwi Al</td>
        <td>213040317</td>
        <td>aldwi@gmail.com</td>
        <td>Teknik Kimia</td>
        <td>
            <a href="" class="btn badge bg-info">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
            <a href="" class="btn badge bg-danger">detail</a>
        </td>
        </tr>

    </tbody>
    </table>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>