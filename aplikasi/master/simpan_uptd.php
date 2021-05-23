<?php
include "../data/config.php";
    $uptd = $_POST['uptd_pengairan'];
    $dinas   = $_POST['dinas_psda_kab'];

$query  = "INSERT INTO upt_psda(uptd_pengairan, dinas_psda_kab) 
VALUES ('$uptd','$dinas')";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan. Mohon diingat nomer plat Anda');window.location='../master_upt.php';</script>";
    }