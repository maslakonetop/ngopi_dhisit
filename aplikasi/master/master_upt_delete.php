<?php
include "../data/config.php";
    $id = $_POST['id'];
    $uptd   = $_POST['uptd_pengairan'];
    $dinas = $_POST['dinas_psda_kab'];


$query  = "DELETE FROM `upt_psda` WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil dihapus. ');window.location='../master_upt.php';</script>";
    }