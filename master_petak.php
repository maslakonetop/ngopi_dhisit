<?php
    include("layout/sidebar.php");
    include("layout/header.php");
    include("data/config.php");    
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
    <body>
    <div class="container-fluid">
        <form method="POST" action="master/simpan_master_petak.php">
        <?php
            $query = "SELECT id FROM saluranpetak ORDER BY id DESC LIMIT 1";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($result);
        ?>
        <section class="base">
        <h2 class="title text-center">Data Baru Saluran Petak</h2>
                <div class="row">
                    <div class="col-6"><!--left side -->
                    <div class="form-group row">
                            <label for="lname" class="col-sm-3 col-form-label">No Urut</label>
                            <div class="col-sm-6">
                                <input type="number" name="saluran_primer" class="form-control" id="lname" readonly value="<?php echo $data["id"]+1;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="lname" class="col-sm-3 col-form-label">Daerah Irigasi</label>
                        
                        <div class="col-sm-6">
                                <select name="daerah_irigasi" class="custom-select" required="">
                                <option disabled selected>Pilih...</option>
                                <?php
                                $query = "SELECT daerah_irigasi FROM `daerahirigasi`";
                                $result = mysqli_query($koneksi, $query);                                
                                    while(list($category) = mysqli_fetch_row($result)){
                                    $option = '<option class="text-uppercase" value="'.$category.'">'.$category.'</option>';
                                    echo ($option);
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 col-form-label ">Saluran Primer</label>
                            <div class="col-sm-6">
                                <input type="text" name="saluran_primer" class="form-control text-uppercase" id="lname" required="" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 col-form-label">Saluran Sekunder</label>
                        
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-uppercase" name="saluran_sekunder" required="" value="" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 col-form-label">Saluran Tersier</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-uppercase" name="saluran_tersier" required="" value="" />    
                            </div>
                        </div>                    
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Petak</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control text-uppercase" name="petak" required=""value="" />
                                </div>                 
                        </div>
                    </div>                         
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Desa</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control text-uppercase" name="desa" required=""value="" />
                                </div>                 
                        </div>            
                        <div class="form-group row">
                            <label for="luas" class="col-sm-3 col-form-label">Luas</label>
                            <div class="col-sm-6">
                                <input type="text" name="luas" class="form-control" id="fname" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="luas" class="col-sm-3 col-form-label">Jenis Tanaman 1</label>
                            <div class="col-sm-6">
                                <input type="text" name="jenis_tanam1" class="form-control text-uppercase" id="fname" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="luas" class="col-sm-3 col-form-label">Jenis Tanaman 2</label>
                            <div class="col-sm-6">
                                <input type="text" name="jenis_tanam2" class="form-control text-uppercase" id="fname" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="luas" class="col-sm-3 col-form-label">Jenis Tanaman 3</label>
                            <div class="col-sm-6">
                                <input type="text" name="jenis_tanam3" class="form-control text-uppercase" id="fname" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="luas" class="col-sm-3 col-form-label">Jenis Tanaman 3</label>
                            <div class="col-sm-6">
                                <input type="text" name="jenis_tanam4" class="form-control text-uppercase" id="fname" value="">
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
        <table id="example" class="table table-hover table table-striped table-bordered w-auto">
            <thread>
                <tr>
                    <th scope="col" class="text-center bg-success">No Urut</th>
                    <th scope="col" class="text-center bg-success">Nama Daerah Irigasi</th>
                    <th scope="col" class="text-center bg-success">Saluran Primer</th>
                    <th scope="col" class="text-center bg-success">Saluran Sekunder</th>
                    <th scope="col" class="text-center bg-success">Saluran Tersier</th>
                    <th scope="col" class="text-center bg-success">Petak</th>
                    <th scope="col" class="text-center bg-success">Desa</th>
                    <th scope="col" class="text-center bg-success">Luas</th>
                    <th scope="col" class="text-center bg-success">Jenis Tanam1</th>
                    <th scope="col" class="text-center bg-success">Jenis Tanam2</th>
                    <th scope="col" class="text-center bg-success">Jenis Tanam3</th>
                    <th scope="col" class="text-center bg-success">Edit/Hapus</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    $query = "SELECT * FROM `saluranpetak`";
                    $result = mysqli_query($koneksi, $query);

                    if(!$result) {
                        die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    }
                    //kalau ini melakukan foreach atau perulangan
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
        
                <tr>
                <td class="text-center"><?php echo $row['id']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $row['daerah_irigasi']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $row['saluran_primer']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $row['saluran_sekunder']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $row['saluran_tersier']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $row['petak']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $row['desa']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $row['luas']; ?></td>
                    <td class="text-center"><?php echo $row['jenis_tanam1']; ?></td>
                    <td class="text-center"><?php echo $row['jenis_tanam2']; ?></td>
                    <td class="text-center"><?php echo $row['jenis_tanam3']; ?></td>
                    <td><a href="master_petak_edit.php?id=<?php echo $row['id'] ?>"><i class="fa fa-pencil-square fa-2x"></i></a>
                    <a href="master/delete_petak_edit.php?id=<?php echo $data['id'];?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="delete" title="Delete" data-toggle="tooltip">&nbsp;<i class="fa fa-trash fa-2x"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table><br/><br/>
    </div>
<?php
    include("layout/footer.php");
?>