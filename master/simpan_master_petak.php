<?php
include "../data/config.php";
    $daerah = $_POST['daerah_irigasi'];
    $primer   = $_POST['saluran_primer'];
    $sekunder     = $_POST['saluran_sekunder'];
    $tersier    = $_POST['saluran_tersier'];    
    $petak    = $_POST['petak'];
    $desa    = $_POST['desa'];
    $luas = $_POST['luas'];
    $tanam1 = $_POST['jenis_tanam1'];
    $tanam2 = $_POST['jenis_tanam2'];
    $tanam3 = $_POST['jenis_tanam3'];
    $tanam4 = $_POST['jenis_tanam4'];

$query  = "INSERT INTO `saluranpetak`(`daerah_irigasi`, `saluran_primer`, `saluran_sekunder`, `saluran_tersier`, `petak`, `desa`, `luas`, `jenis_tanam1`, `jenis_tanam2`, `jenis_tanam3`, `jenis_tanam4`) 
VALUES ('$daerah','$primer','$sekunder','$tersier','$petak','$desa','$luas','$tanam1','$tanam2','$tanam3','$tanam4')";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan. Mohon diingat nomer plat Anda');window.location='../master_petak.php';</script>";
    }