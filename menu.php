<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAPENDA</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
        <div class="col-md-10 p-5 pt-5 mt-4">
            <h3>MENU</h3><hr>

            <div class="row text-white">
                <div class="card bg-danger " style=" margin-left: 10px ; width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Data Wajib Pajak</h5><br>
                        <a href="lihatdata.php" class="btn btn-info">Input Data</a>
                    </div>
                </div>
                <div class="card bg-success ml-5" style="margin-left: 25px ; width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Transaksi</h5><br>
                        <a href="tambahtransaksi.php" class="btn btn-info">Input Transaksi</a>
                    </div>
                </div>
                <div class="card bg-warning ml-5" style="margin-left: 25px ; width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Laporan</h5><br>
                        <a href="#" class="btn btn-info">Lihat Laporan</a>
                    </div>
                </div>
            </div>

        </div>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
        <script type="text/javascript" src="admin.js"></script>
</body>

</html>