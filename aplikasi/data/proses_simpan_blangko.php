<?php
include "../data/config.php";
    $kode = $_POST['kode_irigasi'];
    $daerah = $_POST['daerah_irigasi'];
    $luas   = $_POST['luas_sawah'];
    $jumlah     = $_POST['jumlah_petak_tersier'];
    $psda    = $_POST['balai_psda'];    
    $tahun    = $_POST['th_periode'];
    $p3a    = $_POST['p3a'];
    $kemantren = $_POST['kemantren'];
    $uptd = $_POST['uptd'];
    $masa1 = $_POST['masa_tanam1'];
    $masa2 = $_POST['masa_tanam2'];
    $masa3 = $_POST['masa_tanam3'];

$query  = "INSERT INTO `blanko_o1`(`daerah_irigasi`, `kode_irigasi`, `masa_tanam1`, `masa_tanam2`, `masa_tanam3`, `petak`, `desa`, `luas`, `jenis_tanam1`, `jenis_tanam2`, `jenis_tanam3`, `usulan_mt1_tanam1`, `usulan_mt2_tanam1`, `usulan_mt3_tanam1`, `usulan_mt1_tanam2`, `usulan_mt2_tanam2`, `usulan_mt3_tanam2`, `usulan_mt1_tanam3`, `usulan_mt2_tanam3`, `usulan_mt3_tanam3`, `realisasi_mt1_tanam1`, `realisasi_mt2_tanam1`, `realisasi_mt3_tanam1`, `realisasi_mt1_tanam2`, `realisasi_mt2_tanam2`, `realisasi_mt3_tanam2`, `realisasi_mt1_tanam3`, `realisasi_mt2_tanam3`, `realisasi_mt3_tanam3`) 
VALUES ('$daerah','$kode','$masa1','$masa2','$masa3','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]','[value-30]')";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan.');window.location='../databaru1.php';</script>";
    }