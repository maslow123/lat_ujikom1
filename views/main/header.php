<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Dashboard :.</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/vendor/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>

<body>
    <!-- Header mulai disini -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info" style="margin-bottom:0px;">
        <a class="navbar-brand" href="index.php">Aplikasi Penilaian Siswa</a>
        <div class="container-fluid">

        </div>
        <ul class="navbar-nav">
            <li class="navbar-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="d-flex flex-row-reverse row">
        <button class="border col-md-2">Logout</button>
        <button class="border col-md-2">File Laporan</button>
        <button class="border col-md-2">File Transaksi</button>
        <button class="border col-md-2">File Master</button>
    </div>
    <!-- header akhi r-->
    <!-- start side bar-->
    <div class="container-fluid">
        <div class="row">
            <!-- menu sidebar mulai disini-->
            <!-- <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
                style="height:100%;margin-top:70px;">
                <div class="position-sticky">
                    <a href="index.php?page=customer" class="list-group-item list-group-item-action <?php
                    if (isset($_GET['page'])) {
                        if ($_GET['page'] == "customer") {
                            echo "active";
                        } elseif ($_GET['page'] == "edit-customer") {
                            echo "active";
                        } elseif ($_GET['page'] == "tambah-customer") {
                            echo "active";
                        }
                    }
                    ?>">Customer</a>
                    <a href="index.php?page=item" class="list-group-item list-group-item-action <?php
                    if (isset($_GET['page'])) {
                        if ($_GET['page'] == "item") {
                            echo "active";
                        } elseif ($_GET['page'] == "edit-item") {
                            echo "active";
                        } elseif ($_GET['page'] == "tambah-item") {
                            echo "active";
                        }
                    }
                    ?>">Item</a>
                    <a href="index.php?page=penjualan" class="list-group-item list-group-item-action <?php
                    if (isset($_GET['page'])) {
                        if ($_GET['page'] == "penjualan") {
                            echo "active";
                        } elseif ($_GET['page'] == "edit-penjualan") {
                            echo "active";
                        } elseif ($_GET['page'] == "tambah-penjualan") {
                            echo "active";
                        } elseif ($_GET['page'] == "lihat-penjualan") {
                            echo "active";
                        }
                    }
                    ?>">Transaksi Penjualan</a>

                    <a href="index.php?page=user" class="list-group-item list-group-item-action <?php
                    if (isset($_GET['page'])) {
                        if ($_GET['page'] == "user") {
                            echo "active";
                        } elseif ($_GET['page'] == "edit-user") {
                            echo "active";
                        } elseif ($_GET['page'] == "tambah-user") {
                            echo "active";
                        }
                    }
                    ?>">User</a>
                </div>
            </nav> -->
            <!-- menu sidebar Akhir disini-->
            <!-- Awal Content disini -->
            <main class="col-md-12 border">