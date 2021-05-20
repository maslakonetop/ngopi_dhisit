<?php
    include("layout/sidebar.php");
    include("layout/header.php");
    include("data/config.php");
    $query = "SELECT * FROM blanko_o1 ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
?>
<div class="container-fluid">
    <h2 class="mb-4 text-center">Data Baru Usulan Luas Tanam Detail Blangko 01 A-O</h2>
    <hr style="border-top: 3px double #8c8b8b;">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <section class="base">
                        <h5>Entry Data</h5>
                        <form method="POST" action="data/proses_simpan_blangko2.php" enctype="multipart/form-data" id="usrform">
                            <div class="row">
                                <div class="col-6">
                                <div class="form-group row">
                                        <label class="text dark col-sm-6 col-form-label" for="daerah_irigasi">ID Aplikasi</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="id" value="<?php echo $data["id"];?>" readonly required/>
                                            <input type="hidden" name="id" value="<?php echo $data["id"];?>"/>
                                        </div>
                                    </div>                                 
                                    
                                    <div class="form-group row">
                                        <label class="text dark col-sm-6 col-form-label" for="daerah_irigasi">Kode Irigas</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="daerah_irigasi" id="prd_name" value="<?php echo $data["kode_irigasi"];?>" readonly required/>
                                            <input type="hidden" name="daerah_irigasi" value="<?php echo $data["kode_irigasi"];?>" id="prd_name1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text dark col-sm-6 col-form-label" for="daerah_irigasi">Daerah Irigasi</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="saluran_primer" id="premier" value="<?php echo $data["daerah_irigasi"];?>" readonly required/>
                                            <input type="hidden" name="daerah_irigasi" value="<?php echo $data["daerah_irigasi"];?>" id="premier1"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Petak</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="text-uppercase" name="petak" id="sekunder" value="<?php echo $data["petak"];?>" readonly required/>
                                            <input type="hidden" name="petak" value="<?php echo $data["petak"];?>" id="sekunder1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Desa</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="desa" id="tersier" value="<?php echo $data["desa"];?>" readonly required/>
                                            <input type="hidden" name="desa" value="<?php echo $data["desa"];?>" id="tersier1"/>                                        
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Luas</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="luas" value="<?php echo $data["luas"];?>" id="petak" readonly required/>
                                        <input type="hidden" name="luas"value="<?php echo $data["luas"];?>" id="petak1"/>
                                        </div>
                                    </div>                                                         
                                </div>
                            </div>
                            <hr style="border-top: 3px double blue;">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="text-danger text-uppercase blink blink-one">* Pastikan Data yang dipilh sudah benar sebelum melanjutkan</h5>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-danger" type="submit">Lanjutkan</button>
                                </div>
                            </div>
                        </form>
