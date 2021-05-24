<?php
    include("admin/auth.php");
    include("layout/sidebar.php");
    include("layout/header.php");
    include("data/config.php");    
?>
    <body>
    <div class="container">
        <h3 class="text-center">Edit Blangko A01-O</h3>
        <hr style="border-top: 3px double blue;">
        <?php
            $query = "SELECT * FROM `blanko_o1` WHERE 1";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($result);
        ?>
        <section class="base">
                <h5 class="float-right">Blangko : 01 A -  O</h5><br/><br/>
                <h2 class="title text-center">REKAPITULASI USULAN DAN KUTIPAN KEPUTUSAN LUAS TANAM DETAIL</h2>
                <div class="row">
                    <div class="col-6"><!--left side -->
                        <div class="form-group row">
                            <label for="lname" class="col-sm-4 col-form-label text-dark">Daerah Irigasi :</label>
                            <div class="col-sm-4">
                                <input type="text" class="width: 10px;" name="daerah_irigasi" class="form-control" id="lname" required="" value="<?php echo $data["daerah_irigasi"];?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-4 col-form-label text-dark">No Kode DI</label>
                            <div class="col-sm-6">
                                <input type="text" name="daerah_irigasi" class="form-control" required="" value="<?php echo $data["kode_irigasi"];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Kode Irigasi</label>
                            <div class="col-sm-6">
                                <input type="number" name="kode_irigasi" class="form-control" id="lname" required="" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Luas Sawah</label>
                        
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="luas_sawah" required="" value="" />
                            </div>
                            <div class="col-sm-2">
                                <label for="fname" class="col-sm-2 col-form-label">Hektar</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Jumlah Petak Tersier</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="jumlah_petak" required="" value="" />    
                            </div>
                        </div>
                    </div>
                    <div class="col-6"><!--right side -->    
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Balai PSDA</label>
                            <div class="col-sm-6">
                                <input type="text" name="balai_psda" class="form-control" id="fname" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-6 col-form-label">Perkumpulan Petani Pemakai Air</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="p3a" required=""value="" />
                                </div>                 
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-6 col-form-label">Kemantren</label>
                            <div class="col-sm-6">
                                <input type="text" name="kemantren" class="form-control" required="" id="lname" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Unit Pelaksana Teknis Daerah</label>
                            
                            <div class="col-sm-6">
                                <select name="uptd" class="custom-select" required="">
                                <option disabled selected>Pilih...</option>
                                <?php
                                $query = "SELECT uptd_pengairan FROM `upt_psda`";
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
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-warning mb-4"><i class="fa fa-save"></i> Simpan</button>
                            </div> 
                        </div>                           
                    </div><!--right side -->
                </div><!-- form for teacher/student-->
            </section>
        <table id="example" class="table table-hover table table-striped table-bordered w-auto">
            <thread>
                <tr>
                <th scope="col" class="text-center bg-success">No Urut</th>
                    <th scope="col" class="text-center bg-success">Kode Irigasi</th>
                    <th scope="col" class="text-center bg-success">Daerah Irigasi</th>
                    <th scope="col" class="text-center bg-success">Masa Tanam I</th>
                    <th scope="col" class="text-center bg-success">Masa Tanam II</th>
                    <th scope="col" class="text-center bg-success">Masa Tanam III</th>
                    <th scope="col" class="text-center bg-success">Petak</th>
                    <th scope="col" class="text-center bg-success">Desa</th>
                    <th scope="col" class="text-center bg-success">Tanaman I</th>
                    <th scope="col" class="text-center bg-success">Tanaman II</th>
                    <th scope="col" class="text-center bg-success">Tanaman III</th>
                    <th scope="col" class="text-center bg-success">Tanaman IV</th>
                    <th scope="col" class="text-center bg-success">Usulan MT I Tanaman I</th>
                    <th scope="col" class="text-center bg-success">Usulan MT I Tanaman II</th>
                    <th scope="col" class="text-center bg-success">Usulan MT I Tanaman III</th>
                    <th scope="col" class="text-center bg-success">Usulan MT I Tanaman IV</th>
                    <th scope="col" class="text-center bg-success">Usulan MT II Tanaman I</th>
                    <th scope="col" class="text-center bg-success">Usulan MT II Tanaman II</th>
                    <th scope="col" class="text-center bg-success">Usulan MT II Tanaman III</th>
                    <th scope="col" class="text-center bg-success">Usulan MT II Tanaman IV</th>
                    <th scope="col" class="text-center bg-success">Usulan MT III Tanaman I</th>
                    <th scope="col" class="text-center bg-success">Usulan MT III Tanaman II</th>
                    <th scope="col" class="text-center bg-success">Usulan MT III Tanaman III</th>
                    <th scope="col" class="text-center bg-success">Usulan MT III Tanaman IV</th>
                    <th scope="col" class="text-center bg-success">Edit/Hapus</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    $query = "SELECT * FROM `blanko_o1`";
                    $result = mysqli_query($koneksi, $query);

                    if(!$result) {
                        die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    }
                    //kalau ini melakukan foreach atau perulangan
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
        
                <tr>
                <td class="text-center"><?php echo $row['id']; ?></td>
                    <td class="text-center"><?php echo $row['kode_irigasi']; ?></td>
                    <td class="text-center"><?php echo $row['daerah_irigasi']; ?></td>
                    <td class="text-center"><?php echo $row['masa_tanam1']; ?></td>
                    <td class="text-center"><?php echo $row['masa_tanam2']; ?></td>
                    <td class="text-center"><?php echo $row['masa_tanam3']; ?></td>
                    <td class="text-center"><?php echo $row['petak']; ?></td>
                    <td class="text-center"><?php echo $row['desa']; ?></td>
                    <td class="text-center"><?php echo $row['jenis_tanam1']; ?></td>
                    <td class="text-center"><?php echo $row['jenis_tanam2']; ?></td>
                    <td class="text-center"><?php echo $row['jenis_tanam3']; ?></td>
                    <td class="text-center"><?php echo $row['jenis_tanam4']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt1_tanam1']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt1_tanam2']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt1_tanam3']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt1_tanam4']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt2_tanam1']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt2_tanam2']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt2_tanam3']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt2_tanam4']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt3_tanam1']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt3_tanam2']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt3_tanam3']; ?></td>
                    <td class="text-center"><?php echo $row['usulan_mt3_tanam4']; ?></td>
                    <td><a href="maslakone/suratmakam.php?id=<?php echo $row['id'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-print fa-3x"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table><br/><br/>
    </div>
<?php
    include("layout/footer.php");
?>