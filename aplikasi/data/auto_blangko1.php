<?php
include "config.php";
$query = mysqli_query($koneksi,"SELECT * FROM `saluranpetak`WHERE petak='$_GET[petak]'");
$user = mysqli_fetch_array($query);
$data = array('daerah_irigasi' => $user['daerah_irigasi'],
        'saluran_primer' => $user['saluran_primer'],
        'saluran_sekunder' =>$user['saluran_sekunder'],
        'saluran_tersier' =>$user['saluran_tersier'],
        'petak' =>$user['petak'],
        'desa' =>$user['desa'],
        'jenis_tanam1' =>$user['jenis_tanam1'],
        'jenis_tanam2' =>$user['jenis_tanam2'],
        'jenis_tanam3' =>$user['jenis_tanam3'],  
    );
      echo json_encode($data);
 ?>