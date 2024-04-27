<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM tb_bapenda2 WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
           
        }
    }
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

    <title>Login Admin</title>
    <style>
        * {
            padding: 10;
            margin: 10;
            box-sizing: border-box;
        }

        body {
            background-image: url("double-bubble.png");
        }

        .row {
            background: whitesmoke;
            box-sizing: border-box;
            border-radius: 70px;
            box-shadow: 12 px 12 px 22px;
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

<body>

    <form action="" method="post">
        <section class="form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 px-5 pt-5">
                        <img src="sura.png" class="img-fluid" alt="surakarta" width="50%" weight="50%"
                            style="display:block;">
                    </div>
                    <div class="col-lg-7">
                        <h1 class="font-weight-bold py-4">Login Pegawai BAPENDA</h1>
                        <form>
                            <div class="form-row">
                                <div class="col-lg-7 px-5 pt-3">
                                    <label for="username" class="form-label">Username</label><br>
                                    <input type="text" name="username" id="username" placeholder="Username">
                                    
                                </div>
                        
                                <div class="col-lg-7 px-5 pt-4">
                                    <label for="password" class="form-label">Password</label><br>
                                    <input type="password" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-7 px-5 pt-5">
                                        <input type="submit" name="login" class="btn1" value="Login" />
                                        <br><br><center><a href="register.php" class="btn btn-success">Register</a></center></br>
                                    </div>
                                </div>

                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>