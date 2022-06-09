<?php 

$product = [
    ["nama" => "Jaket Coach Hitam",
     "harga" => "Rp. 85.000",
     "gambar" => "jktcoachhitam.png"
    ],
    ["nama" => "Jaket Coach Putih",
     "harga" => "Rp. 87.000",
     "gambar" => "jktcoachpth.png"
    ],
    ["nama" => "Sepatu NIKE AIR MAX putih",
     "harga" => "Rp. 250.000",
     "gambar" => "sptnikeairmaxpth.png"
    ],
    ["nama" => "Sepatu NIKE AIR JORDAN",
     "harga" => "Rp. 210.000",
     "gambar" => "sptjordanmerah.png"
    ]
]

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EcoMart!</title>
</head>
<body>
    <!-- header -->

    <header>   
        <div class="container"> <br>
            <div>
                <p>(E-Commerce)</p>
            </div>

            <div class="container"></div>
            <nav class="navbar bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand"><h1><a href="index.php">EcoMart!</a></h1></a> 
                    <br>
                    <form class="d-flex" role="search"> <br>
                        <input class="form-control me-2" type="keyword" placeholder="Cari produk.." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Cari!</button>
                    </form>
                </div>
            </nav> <br>

                <center>
                <ul>
                    <i class="bi bi-cart4"></i>
                    <a href="index.php" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                    </a>

                    <i class="bi bi-cart4"></i>
                    <a href="produk.php" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg>
                    </a>

                    <i class="bi bi-cart4"></i>
                    <a href="profil.php" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </a>
                </ul>
                </center>


            </div>

        </div>
    </header>
    <br>
 
    <hr> <hr>
    
    <center>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

        <h2>Selamat Datang!</h2>
        <h5>Hari ini mau belanja apa?</h5>

            <div class="carousel-item active">
                <img src="img/slide1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide3.png" class="d-block w-100" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </center>

    <thead>
    </thead>


</body>
</html>