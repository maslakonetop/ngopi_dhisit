<?php
    include("admin/auth.php");
    include("data/config.php");
    include("layout/sidebar.php");
    include("layout/header.php");

    if (isset($_GET['id'])) {
        // ambil nilai id dari url dan disimpan dalam variabel $id
        $kodebuku = ($_GET["id"]);
    
        // menampilkan data dari database yang mempunyai id=$id
        $query = "SELECT * FROM upt_psda WHERE id='$kodebuku'";
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
        echo "<script>alert('Masukkan data id.');window.location='master_upt.php';</script>";
    }         
?>
</head>

<body>
    <div class="container-fluid"><br/><br/><br/><br/>
    <form method="POST" action="master/update_uptd.php">
        <section class="base">
        <h2 class="title text-center">Tambah Unit Pelaksana Teknis</h2>
                <div class="row">
                    <div class="col-6"><!--left side -->
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">ID UPT</label>
                            <div class="col-sm-6">
                                <input type="text" name="uptd_pengairan" class="form-control text-uppercase" id="lname" required="" value="<?php echo $data["id"];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Nama UPT Pengairan</label>
                            <div class="col-sm-6">
                                <input type="text" name="uptd_pengairan" class="form-control text-uppercase" id="lname" required="" value="<?php echo $data["uptd_pengairan"];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Dinas PSDA Kabupatan</label>
                            <div class="col-sm-6">
                                <input type="text" name="dinas_psda_kab" class="form-control text-uppercase" id="lname" required="" value="<?php echo $data["dinas_psda_kab"];?>">
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
</body>
