<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // menyiapkan query
    $sql = "INSERT INTO tb_bapenda2 (nama, username, email, password) 
            VALUES (:nama, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":nama" => $nama,
        ":username" => $username,
        ":email" => $email,
        ":password" => $password,
        
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Registrasi Pegawai</title>
    <style>
        * {
            padding: 5;
            margin: 5;
            box-sizing: border-box;
        }

        body {
            background-image: url("double-bubble.png");
        }

        .row {
            background: whitesmoke;
            box-sizing: border-box;
            border-radius: 70px;
            box-shadow: 10 px 10 px 10 px;
        }

        .btn1 {
            border: none;
            outline: none;
            height: 40px;
            width: 90%;
            background-color: black;
            color: whitesmoke;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background: whitesmoke;
            border: 1px solid;
            color: black;
        }
    </style>
</head>

body>
    <form action="" method="post">
        <section class="form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 px-5 pt-7">
                        <img src="sura.png" class="img-fluid" alt="surakarta" width="50%" weight="50%"
                            style="display:block;">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="font-weight-bold py-4">Registrasi Admin BAPENDA</h1>
                        <form>
                            <div class="form-row">
                                <div class="col-lg-7 px-5 pt-1">
                                    <label for="nama" class="form-label">Nama</label><br>
                                    <input type="text" name="nama" id="nama" required>
                                    
                                </div>
                                <div class="col-lg-7 px-5 pt-1">
                                    <label for="username" class="form-label">Username</label><br>
                                    <input type="text" name="username" id="username" required>
                                    
                                </div>
                                <div class="col-lg-7 px-5 pt-1">
                                    <label for="email" class="form-label">Alamat Email</label><br>
                                    <input type="text" name="email" id="email" required>
                                </div>
                                <div class="col-lg-7 px-5 pt-1">
                                    <label for="password" class="form-label">Password</label><br>
                                    <input type="password" name="password" id="password" required>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-7 px-5 pt-5">
                                        <button type="submit" name="register" class="btn1">Register</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>