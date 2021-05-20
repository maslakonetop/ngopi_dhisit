<?php
    include("admin/auth.php");
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Ngopi Dhisit - Di Warung Jamu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="index.php" class="logo"><img src="assets/images/logongopidhisit.png" style="width: 100%;" alt="logo"></a></h1><br/><br/>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="index.php"><span class="fa fa-home"></span> Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-book"></span>
                    Blanko O</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                    <a class="dropdown-item" href="databaru.php"><span class="fa fa-book"></span> Pengisian Data Blangko</a>
                    <a class="dropdown-item" href="pencarian.php"><span class="fa fa-book"></span> Pengisian Data Blangko O6</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="print.php"><span class="fa fa-book"></span></i> Cetak</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-book"></span>
                    Blanko P</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                    <a class="dropdown-item" href=""><span class="fa fa-book"></span> Data Baru</a>
                    <a class="dropdown-item" href="#"><span class="fa fa-book"></span> Blanko P1-012</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="print.php"><span class="fa fa-book"></span></i> Cetak</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-database"></span>
                    Data Master</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                <a class="dropdown-item" href="master_upt.php"><span class="fa fa-database"></span> Tambah UPT</a>
                    <a class="dropdown-item" href="master_irigasi.php"><span class="fa fa-database"></span> Daerah Irigasi</a>
                    <a class="dropdown-item" href="master_petak.php"><span class="fa fa-database"></span> Saluran Petak</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="admin/register.php"><span class="fa fa-database"></span></i> Tambah User</a>
                    <a class="dropdown-item" href="print.php"><span class="fa fa-database"></span></i> Edit User</a>
                    <a class="dropdown-item" href="print.php"><span class="fa fa-database"></span></i> Hapus User</a>
                </div>
            </li>
            <li>
                <a href="admin/logout.php"><span class="fa fa-sign-out"></span> Logout</a>
            </li>
        </ul>

        <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear()); </script> Dinas PSDA Kab Cilacap All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div>
    	</nav>