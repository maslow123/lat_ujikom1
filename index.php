<?php
session_start();
require('models/koneksi.php');
require('config/db.php');
require("models/message.php");
if (isset($_SESSION["xusername"])) {
    //header
    include("views/main/header.php");

    require("controller/message.php");
    //konten start
    if (isset($_GET['page'])) {


        switch ($_GET['page']) {
            case 'siswa':
                include 'views/body/siswa/index.php';
                break;
            case 'tambah-siswa':
                include 'views/body/siswa/tambah.php';
                break;
            case 'edit-siswa':
                include 'views/body/siswa/ubah.php';
                break;
            case 'matpel':
                include 'views/body/matpel/index.php';
                break;
            case 'tambah-matpel':
                include 'views/body/matpel/tambah.php';
                break;
            case 'edit-matpel':
                include 'views/body/matpel/ubah.php';
                break;
            case 'item':
                include 'views/body/item/index.php';
                break;
            case 'tambah-item':
                include 'views/body/item/tambah.php';
                break;
            case 'edit-item':
                include 'views/body/item/ubah.php';
                break;
            case 'user':
                include 'views/body/user/index.php';
                break;
            case 'tambah-user':
                include 'views/body/user/tambah.php';
                break;
            case 'edit-user':
                include 'views/body/user/ubah.php';
                break;
            case 'penjualan':
                include 'views/body/penjualan/index.php';
                break;
            case 'tambah-penjualan':
                include 'views/body/penjualan/tambah.php';
                break;
            case 'edit-penjualan':
                include 'views/body/penjualan/ubah.php';
                break;
            case 'lihat-penjualan':
                include 'views/body/penjualan/lihat.php';
                break;
        }

    } else {
        echo '<meta http-equiv="refresh" content="0;url=index.php?page=siswa" />';
    }
    //konten selesai


    //footer
    include("views/main/footer.php");

} else {
    echo '<meta http-equiv="refresh" content="0;url=login.php" />';
}
?>