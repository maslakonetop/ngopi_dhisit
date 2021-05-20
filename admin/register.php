<?php
require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    //if($saved) header("Location: login.php");
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
<body>
    <div class="container-fluid main">
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form action="register.php" method="POST" class="box">
                        <h1>Register User</h1>
                        <p class="text-muted">Isikan Detail dibawah ini</p>
                        <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" required="" />
                        <input class="form-control" type="text" name="username" placeholder="Nama Pengguna" required="" />
                        <input class="form-control" type="email" name="email" placeholder="Alamat Email" required="" />
                        <input class="form-control" type="password" name="password" placeholder="Kata Sandi" required="" />
                        <input type="submit" name="register" value="Daftar" />
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include("../layout/footer.php")
?>