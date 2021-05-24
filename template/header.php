<!doctype html>
<html lang="en">
    <head>
        <title>Ngopi Dhisit di Warung Jamu</title>
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.css"/>
        <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <style type="text/css">
            * {
                font-family: "Trebuchet MS";
            }
            h2 {
                text-transform: uppercase;
                color: salmon;
            }
            button {
                background-color: salmon;
                color: #fff;
                padding: 10px;
                text-decoration: none;
                font-size: 12px;
                border: 0px;
                margin-top: 20px;
            }
            label, textarea {
                float: left;
                text-align: left;
                width: 100%;
            }
            textarea {
                padding: 10px;
                line-height: 1.5;
                border-radius: 5px;
                border: 1px solid #ccc;
                box-shadow: 1px 1px 1px #999;
            }
            input {
                padding: 6px;
                width: 100%;
                box-sizing: border-box;
                background: #f8f8f8;
                border: 2px solid #ccc;
                outline-color: salmon;
            }
            div {
                width: 100%;
                height: auto;
            }
            .base {
                width: 75%;
                height: auto;
                padding: 20px;
                margin-left: auto;
                margin-right: auto;
                background: #ededed;
            }
            .blink {
                animation: blinker 0.6s linear infinite;
                color: #8B0000;
                font-size: 10px;
                font-weight: bold;
                font-family: sans-serif;
            }
            @keyframes blinker {
                50% {
                opacity: 0;
                }
            }
            .blink-one {
                animation: blinker-one 1s linear infinite;
            }
            @keyframes blinker-one {
                0% {
                opacity: 0;
                }
            }
            .blink-two {
                animation: blinker-two 1.4s linear infinite;
            }
            @keyframes blinker-two {
                100% {
                opacity: 0;
                }
            }
        </style>

    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
                <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logocilacapkab.png" alt="" width="100%" class="d-inline-block align-text-top">
                    
                </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-laptop-house fa-2x"></i> BERANDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-water fa-2x"></i> DISTRIBUSI AIR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-server fa-2x"></i> DATA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aplikasi/index.php"><i class="fas fa-mobile-alt fa-2x"></i> APLIKASI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://psda1.cilacapkab.go.id/" target="_blank"><i class="fas fa-globe fa-2x"></i> WEBSITE DINAS</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>            
        </div>