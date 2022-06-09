<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EcoMart!</title>
</head>
<body>
    <header>
    <div class="container"> <br>
        <a href="produk.php" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
        </a>

        <h1>Profile User</h1> <hr>
        
        <div class="row mt-3"> <br>
            <div class="col-8">

            <form action="" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Username</label> <br>
                    <input type="text" class="form-control" id="nama" name="nama"  required autocomplete="off">
                </div> <br>
                <div class="mb-3">
                    <label for="npm" class="form-label">Name</label> <br>
                    <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                </div> <br>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label> <br>
                    <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                </div> <br>
                
                <div class="container">
                <a href="index.php" class="btn btn-outline-success btn-sm">SAVED!</a> <br>
                </div>

                <br> <hr>
                <div>
                    <a href="registrasi.php" class="btn btn-outline-danger btn-sm">Logout</a>
                </div>

            </form>
            </div>

        </div>
    </div>



    </header>
</body>

</html>