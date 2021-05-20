<?php
include "../data/config.php";
    $daerah = $_POST['daerah_irigasi'];
    $kode   = $_POST['kode_irigasi'];
    $luas     = $_POST['luas_sawah'];
    $jumlah    = $_POST['jumlah_petak'];    
    $balai    = $_POST['balai_psda'];
    $perkumpulan    = $_POST['p3a'];
    $kemantren = $_POST['kemantren'];
    $uptd = $_POST['uptd'];

$query  = "INSERT INTO `daerahirigasi`(`daerah_irigasi`, `kode_irigasi`, `luas_sawah`, `jumlah_petak_tersier`, `balai_psda`, `p3a`, `kemantren`, `UPTD`) VALUES 
('$daerah','$kode','$luas','$jumlah','$balai','$perkumpulan','$kemantren','$uptd')";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan. Mohon diingat nomer plat Anda');window.location='../master_irigasi.php';</script>";
    }