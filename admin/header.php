<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Laundry Firsthanoventia</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>

    <style>
        .navbar-default {
            background-color: #1e3a5f;
            border: none;
        }
        .navbar-default .navbar-brand,
        .navbar-default .navbar-nav > li > a,
        .navbar-default .navbar-text {
            color: white;
        }
        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > .active > a,
        .navbar-default .navbar-nav > .active > a:focus,
        .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .open > a,
        .navbar-default .navbar-nav > .open > a:focus,
        .navbar-default .navbar-nav > .open > a:hover {
            background-color: #345678;
            color: white;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #333;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
            background-color: #eeeeee;
            color: #000;
        }
    </style>
</head>

<body style="background: #f0f0f0;">

<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
?>

<nav class="navbar navbar-default" style="border-radius: 0px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="display: flex; align-items: center;">
        <img src="../logo3.png" alt="Logo" style="height: 30px; margin-right: 10px; display: inline;">
    LAUNDRY
</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                <li><a href="pelanggan.php"><i class="glyphicon glyphicon-user"></i> Pelanggan</a></li>
                <li><a href="transaksi.php"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
                <li><a href="laporan.php"><i class="glyphicon glyphicon-list-alt"></i> Laporan</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-wrench"></i> Pengaturan <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="harga.php"><i class="glyphicon glyphicon-usd"></i> Pengaturan Harga</a></li>
                        <li><a href="ganti_password.php"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a></li>
                    </ul>
                </li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><p class="navbar-text">Hallo, <b><?php echo $_SESSION['username']; ?></b>!</p></li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>
