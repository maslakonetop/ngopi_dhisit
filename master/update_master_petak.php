<?php
include "../data/config.php";
    $id = $post['id'];
    $daerah = $_POST['daerah_irigasi'];
    $primer   = $_POST['saluran_primer'];
    $sekunder     = $_POST['saluran_sekunder'];
    $tersier    = $_POST['saluran_tersier'];    
    $petak    = $_POST['petak'];
    $desa    = $_POST['desa'];
    $luas = $_POST['luas'];
    $tanam1 = $_POST['masa_tanam1'];
    $tanam2 = $_POST['masa_tanam2'];
    $tanam3 = $_POST['masa_tanam3'];

$query  = "UPDATE `saluranpetak` SET `saluran_primer`='$primer',`saluran_sekunder`='$sekunder',`saluran_tersier`='$tersier',`petak`='$petak',`desa`='$desa',`luas`='$luas',`masa_tanam1`='$tanam1',`masa_tanam2`='$tanam2',`masa_tanam3`='$tanam1' WHERE id='$id'";
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