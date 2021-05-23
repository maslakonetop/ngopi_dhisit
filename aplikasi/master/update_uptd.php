<?php
include "../data/config.php";
    $id = $_POST['id'];
    $uptd = $_POST['uptd_pengairan'];
    $dinas   = $_POST['dinas_psda_kab'];

$query  = "UPDATE `upt_psda` SET `uptd_pengairan`='$uptd',`dinas_psda_kab`='$dinas' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan. Klik OK');window.location='../master_upt.php';</script>";
    }