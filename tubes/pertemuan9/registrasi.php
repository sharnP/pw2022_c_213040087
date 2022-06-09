<?php 

function login() {
    $user = $this->input->past('username');
    $pass = md5($this->input->post('password'));
    $cekuser = $this->model_User->cekuser($user);

    if($cekuser) {
        $ceklogin = $this->model_User->login($user, $pass);
        if($ceklogin) {
            foreach ($ceklogin as $row);

            if(($row->status) == "Aktif" ) {
                $this->session->set_userdata('username', $row->username);
                $this->session->set_userdata('nama', $row->nama);
                $this->session->set_userdata('konfirmasi', $row->konfirmasi_password);
            }
        }
    }
}


function logout() {
    $this->session->sess_destroy();
    redirect('Beranda', 'refresh');
}

require 'functions.php';

if( isset($_POST["register"]) ) {
    
    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Berhasil ditambahkan!') ;
              </script>";
              if( isset($_POST["index.php"]) ) {  
                  redirect('Beranda', 'refresh');
              } else {
                  echo mysqli_error($conn);
              }
                    
    } else {
        echo mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    
<h1>Registrasi Akun</h1>

<form action="" method="post">
    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li> <br>

        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li> <br>

        <li>
            <label for="passwoed2">Konfirmasi password :</label>
            <input type="password" name="password2" id="password">
        </li> <br>

        <button type="submit" name="register"><a href="index.php">Login</a></button>
    </ul> 
    <?php // if( isset($_POST["login"]) ) {
          //      if( login($_POST) > 0 ) {
           //     } else {
             //       echo mysqli_error($conn);
                // }
    ?>

</form>


</body>
</html>