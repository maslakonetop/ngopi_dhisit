<?php
include "layout/sidebar.php";
include "layout/header.php";
include "data/config.php"; 
?>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <section class="base">
                        <h5>Display Data Irigasi</h5>
                        <form method="POST" action="data/proses_simpan_blangko.php" enctype="multipart/form-data" id="usrform">
                            <div class="row">
                                <div class="col-6">                                 
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="inlineFormCustomSelectPref">Pilih Kode Irigasi</label>
                                        <div class="col-sm-6">
                                            <?php
                                                $result = mysqli_query($koneksi , "SELECT * FROM `daerahirigasi`"); 
                                                $jsArray = "var prdName = new Array();\n"; 
                                                echo '<select class="custom-select my-1 mr-sm-2" name="prdId" onchange="changeValue(this.value)">'; 
                                                echo '<option>-------</option>'; 
                                                while ($row = mysqli_fetch_array($result)) { 
                                                echo '<option value="' . $row['kode_irigasi'] . '">' . $row['kode_irigasi'] . '</option>'; 
                                                $jsArray .= "prdName['" . $row['kode_irigasi'] . "'] 
                                                = {name:'" . addslashes($row['daerah_irigasi']) . 
                                                    "',desc:'".addslashes($row['luas_sawah']).
                                                    "',jumlah: '".addslashes($row['jumlah_petak_tersier']).
                                                    "',balai: '".addslashes($row['balai_psda']). 
                                                    "',tahun: '".addslashes($row['th_periode']).
                                                    "',p3a: '".addslashes($row['p3a']).
                                                    "',kemantren: '".addslashes($row['kemantren']).
                                                    "',uptd: '".addslashes($row['uptd']).
                                                    "',tanam1: '".addslashes($row['masa_tanam1']).
                                                    "',tanam2: '".addslashes($row['masa_tanam2']).
                                                    "',tanam3: '".addslashes($row['masa_tanam3'])."'};\n"; 
                                                } 
                                                echo '</select>'; 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text dark col-sm-6 col-form-label" for="daerah_irigasi">Daerah Irigasi</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="prod_name" id="prd_name"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Luas Sawah</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="prod_desc" id="prd_desc"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Jumlah Petak Tersier</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="jumlah" id="jumlah"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Balai PSDA</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="balai" id="balai"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Tahun Periode</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="balai" id="tahun"/>
                                        </div>
                                    </div>
                                </div>>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Perkumpulan Petani Pemakai Air</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="balai" id="p3a"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Kemantren</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="balai" id="kemantren"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Unit Pelaksana Teknis Daerah</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="balai" id="uptd"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Masa Tanam I</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="balai" id="tanam1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Masa Tanam II</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="balai" id="tanam2"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Masa Tanam III</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="balai" id="tanam3"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div> 
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('prd_name').value = prdName[id].name;
document.getElementById('prd_desc').value = prdName[id].desc;
document.getElementById('jumlah').value = prdName[id].jumlah;
document.getElementById('tahun').value = prdName[id].tahun;
document.getElementById('p3a').value = prdName[id].p3a;
document.getElementById('kemantren').value = prdName[id].kemantren;
document.getElementById('uptd').value = prdName[id].uptd;
document.getElementById('tanam1').value = prdName[id].tanam1;
document.getElementById('tanam2').value = prdName[id].tanam2;
document.getElementById('tanam3').value = prdName[id].tanam3;
document.getElementById('balai').value = prdName[id].balai;
};
</script>
<?php
    include "layout/footer.php";
?>