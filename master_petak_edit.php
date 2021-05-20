<?php 
  
  include("layout/sidebar.php");
  include("layout/header.php");
?>
  </head>
  <body>
        <div class="container-fluid">
        <?php
          include "data/config.php";
          if (isset($_GET['id'])) {
            // ambil nilai id dari url dan disimpan dalam variabel $id
            $koderekening = ($_GET["id"]);
        
            // menampilkan data dari database yang mempunyai id=$id
            $query = "SELECT * FROM `saluranpetak` WHERE id='$koderekening'";
            $result = mysqli_query($koneksi, $query);
            // jika data gagal diambil maka akan tampil error berikut
            if(!$result){
              die ("Query Error: ".mysqli_errno($koneksi).
                 " - ".mysqli_error($koneksi));
            }
            // mengambil data dari database
            $data = mysqli_fetch_assoc($result);
              // apabila data tidak ada pada database maka akan dijalankan perintah ini
               if (!count($data)) {
                  echo "<script>alert('Data tidak ditemukan pada database');window.location='databaru.php';</script>";
               }
          } else {
            // apabila tidak ada data GET id pada akan di redirect ke index.php
            echo "<script>alert('Masukkan data id.');window.location='databaru.php';</script>";
          }         
        ?>
<body>
<div class="container-fluid">
        <form method="POST" action="master/update_master_petak.php">
        <section class="base">
        <h2 class="title text-center">Data Baru Saluran Petak</h2>
                <div class="row">
                    <div class="col-6"><!--left side -->
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">No Urut</label>
                            <div class="col-sm-6">
                                <input type="number" name="id" class="form-control" id="lname" readonly value="<?php echo $data["id"]?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="lname" class="col-sm-6 col-form-label">Daerah Irigasi</label>                        
                            <div class="col-sm-6">
                            <input type="text" name="daerah_irigasi" class="form-control text-uppercase" id="lname" required="" value="<?php echo $data["daerah_irigasi"]?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label ">Saluran Primer</label>
                            <div class="col-sm-6">
                                <input type="text" name="saluran_primer" class="form-control text-uppercase" id="lname" required="" value="<?php echo $data["saluran_primer"]?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Saluran Sekunder</label>
                        
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-uppercase" name="saluran_sekunder" required="" value="<?php echo $data["saluran_sekunder"]?>" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Saluran Tersier</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-uppercase" name="saluran_tersier" required="" value="<?php echo $data["saluran_tersier"]?>" />    
                            </div>
                        </div>                    
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Petak</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="petak" required=""value="<?php echo $data["petak"]?>" />
                                </div>                 
                        </div>                    
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Desa</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control text-uppercase" name="desa" required=""value="<?php echo $data["desa"]?>" />
                                </div>                 
                        </div>
                    </div>                         
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="luas" class="col-sm-6 col-form-label">Luas</label>
                            <div class="col-sm-6">
                                <input type="text" name="luas" class="form-control" id="fname" value="<?php echo $data["luas"]?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="luas" class="col-sm-6 col-form-label">Masa Tanam 1</label>
                            <div class="col-sm-6">
                                <input type="text" name="masa_tanam3" class="form-control" id="fname" value="<?php echo $data["masa_tanam1"]?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="luas" class="col-sm-6 col-form-label">Masa Tanam 2</label>
                            <div class="col-sm-6">
                                <input type="text" name="masa_tanam2" class="form-control" id="fname" value="<?php echo $data["masa_tanam2"]?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="luas" class="col-sm-6 col-form-label">Masa Tanam 3</label>
                            <div class="col-sm-6">
                                <input type="text" name="masa_tanam3" class="form-control" id="fname" value="<?php echo $data["masa_tanam3"]?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="luas" class="col-sm-6 col-form-label">Jenis Tanaman 1</label>
                            <div class="col-sm-6">
                                <input type="text" name="jenis_tanam1" class="form-control" id="fname" value="<?php echo $data["jenis_tanam1"]?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="luas" class="col-sm-6 col-form-label">Jenis Tanaman 2</label>
                            <div class="col-sm-6">
                                <input type="text" name="jenis_tanam2" class="form-control" id="fname" value="<?php echo $data["jenis_tanam2"]?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="luas" class="col-sm-6 col-form-label">Jenis Tanaman 3</label>
                            <div class="col-sm-6">
                                <input type="text" name="jenis_tanam3" class="form-control" id="fname" value="<?php echo $data["jenis_tanam3"]?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-warning mb-4"><i class="fa fa-save"></i> Simpan</button>
                            </div>                            
                    </div><!--right side -->
                </div><!-- form for teacher/student-->
            </section>
        </form>
    </div>
<?php
  include("layout/footer.php");
?>