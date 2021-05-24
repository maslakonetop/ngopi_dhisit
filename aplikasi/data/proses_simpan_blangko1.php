<?php
include "../data/config.php";
    $id = $_POST['id'];
    $petak = $_POST['petak'];
    $desa   = $_POST['desa'];
    $luas     = $_POST['luas'];
    $tanam1    = $_POST['jenis_tanam1'];
    $tanam2    = $_POST['jenis_tanam2'];
    $tanam3    = $_POST['jenis_tanam3'];

$query  = "UPDATE `blanko_o1` SET `petak`='$petak',`desa`='$desa',`luas`='$luas',`jenis_tanam1`='$tanam1',`jenis_tanam2`='$tanam2',`jenis_tanam3`='$tanam3' 
WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan');window.location='../databaru_A01_2.php';</script>";
    }