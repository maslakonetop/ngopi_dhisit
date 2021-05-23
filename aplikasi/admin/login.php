<?php
require_once("config.php");

if(isset($_POST['login'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //jika user terdaftar
    if($user){
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: ../index.php");
        }           
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/css/admin.css"/>
    <link rel="stylesheet" href="../assets/css/admin-style.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
    <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/icon/apple-touch-icon.png">
    <link rel="icon" type="images/png" sizes="32x32" href="../assets/images/icon/favicon-32x32.png">
    <link rel="icon" type="images/png" sizes="16x16" href="../assets/images/icon/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/icon/site.webmanifest">
    <link rel="mask-icon" href="../assets/images/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Login</title>
    <script>
        $('.date-own').datepicker({
         minViewMode: 2,
         format: 'yyyy'
       });
    </script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="" method="POST" class="box">
                    <h1>Login</h1>
                        <p class="text-primary">Silahkan Masukan Nama Pengguna dan Kata Sandi</p> 
                        <input type="text" name="username" placeholder="Username atau email" />
                        <input type="password" name="password" placeholder="Password" />
                        <a class="text-primary" href="#">Lupa Password?</a>
                        <input type="submit" name="login" value="Masuk" />
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="https://www.facebook.com/dpsdacilacap/" target="blank" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://psda1.cilacapkab.go.id/" target="blank" class="icoNews" title="Website PSDA"><i class="fas fa-newspaper"></i></a></li>
                                <li><a href="https://www.instagram.com/dpsdacilacap/?hl=id" target="blank" class="icoInstagram" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/dpsdacilacap" target="blank" class="icoTwitter" title="twitter"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                </form>
            </div> 
        <div>
    </div>
</div>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/admin.js" type="text/javascript"></script>
</body>