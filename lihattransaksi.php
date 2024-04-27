<?php

require 'functions.php';

$rows = query("SELECT * FROM tb_input");

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAPENDA</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="admin.css" </head>

<body>
    <div class="container"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>BAPENDA</b> </a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </nav>

    <div class="row no-gutters mt-4">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="dashboard.php" aria-current="page" href="#">Home</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="menu.php">Main Menu</a>
                    <hr class="bg-secondary">
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="information.php">Information</a>
                    <hr class="bg-secondary">
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="about.php">About</a>
                    <hr class="bg-secondary">
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="help.php">Help</a>
                    <hr class="bg-secondary">
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="download.php">Download</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="login.php">Login</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index1.php">Logout</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-5 mt-6">
            <h3>Pendaftaran Wajib Pajak</h3>
            <hr>
            <a href="tambahdata.php" class="btn btn-success">Tambah Data</a> <br>

            </table>
            <div class="container mt-5">
                <table class="table table-dark table-striped border border-1 border-secondary">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">NPWP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">Tanggal Mendaftar</th>
                            <th scope="col">Jenis Pajak</th>
                            <th scope="col">Massa Pajak</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($rows as $row) : ?>
                            <tr>
                                <td><?php echo $i ?></td>

                                <td><?php echo $row["nama_lengkap"] ?></td>
                                <td><?php echo $row["npwp"] ?></td>
                                <td><?php echo $row["alamat"] ?></td>
                                <td><?php echo $row["no_telepon"] ?></td>
                                <td><?php echo $row["tanggal"] ?></td>
                                <td><td><td>
                                    <a href="tambahtransaksi.php?id= <?php echo $row["id"] ?>">transaksi |</a>
                                    <a href="ubah.php?id= <?php echo $row["id"] ?>">ubah |</a>
                                    <a href="hapus.php?id= <?php echo $row["id"] ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data?')">hapus |</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <br>
               
                <a href="menu.php" class="btn btn-danger">Kembali</a>
            </div>
</body>

</html>