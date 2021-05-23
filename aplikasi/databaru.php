<?php
    include("layout/sidebar.php");
    include("layout/header.php");
    include("data/config.php");
?>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label, textarea,input {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    textarea {
    padding: 10px;
    line-height: 1.5;
    border-radius: 5px;
    border: 2px solid #ccc;
    box-shadow: 1px 1px 1px #999;
    outline-color: salmon;
    }
    input {
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 100%;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
</style>
<!DOCTYPE html>
<html>
<head>
    <title>Ngopi Dhisit Di Warung Jamu</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
    <h2 class="mb-4 text-center">Data Baru Usulan Luas Tanam Detail Blangko 01 A-O</h2>
    <hr style="border-top: 3px double #8c8b8b;">
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
                                                echo '<select class="custom-select my-1 mr-sm-2" name="kode_irigasi" onchange="changeValue(this.value)">'; 
                                                echo '<option>Kode Irigasi</option>'; 
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
                                        <label class="text-dark col-sm-6 col-form-label" for="daerah_irigasi">Daerah Irigasi</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="prod_name" id="prd_name" class="text-uppercase" readonly required/>
                                            <input type="hidden" name="daerah_irigasi" id="prd_name1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Luas Sawah</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="luas_sawah" id="prd_desc" readonly required/>
                                            <input type="hidden" name="luas_sawah" id="prd_desc1"/>
                                        </div>
                                        <label class="text-dark col-sm-3 col-form-label" for="luas_sawah">Hektar</label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Jumlah Petak Tersier</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="jumlah_petak_tersier" id="jumlah" readonly required/>
                                            <input type="hidden" name="jumlah_petak_tersier" id="jumlah1"/>                                        
                                        </div>
                                        <label class="text-dark col-sm-3 col-form-label" for="luas_sawah">Petak</label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Balai PSDA</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="balai_psda" id="balai" class="text-uppercase" readonly required/>
                                        <input type="hidden" name="balai_psda" id="balai1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Tahun Periode</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="th_periode" id="tahun" readonly required/>
                                        <input type="hidden" name="th_periode" id="tahun1"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Perkumpulan Petani Pemakai Air</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="p3a" id="p3a" class="text-uppercase" readonly required/>
                                        <input type="hidden" name="p3a" id="p3a1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Kemantren</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="kemantren" id="kemantren" class="text-uppercase" readonly required/>
                                        <input type="hidden" name="kemantren" id="kemantren1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Unit Pelaksana Teknis Daerah</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="uptd" id="uptd" class="text-uppercase" readonly required/>
                                        <input type="hidden" name="uptd" id="uptd1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Masa Tanam I</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="masa_tanam1" id="tanam1" class="text-uppercase" readonly required/>
                                        <input type="hidden" name="masa_tanam1" id="tanam11"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Masa Tanam II</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="masa_tanam2" id="tanam2" class="text-uppercase" readonly required/>
                                        <input type="hidden" name="masa_tanam2" id="tanam21"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Masa Tanam III</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="masa_tanam3" id="tanam3"  readonly required/>
                                        <input type="hidden" name="masa_tanam3" id="tanam31"/>
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
                    </section>
                </div>
            </div>
        </div>
    </div> 
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('prd_name').value = prdName[id].name;
document.getElementById('prd_name1').value = prdName[id].name;
document.getElementById('prd_desc').value = prdName[id].desc;
document.getElementById('prd_desc1').value = prdName[id].desc;
document.getElementById('jumlah').value = prdName[id].jumlah;
document.getElementById('jumlah1').value = prdName[id].jumlah;
document.getElementById('tahun').value = prdName[id].tahun;
document.getElementById('tahun1').value = prdName[id].tahun;
document.getElementById('p3a').value = prdName[id].p3a;
document.getElementById('p3a1').value = prdName[id].p3a;
document.getElementById('kemantren').value = prdName[id].kemantren;
document.getElementById('kemantren1').value = prdName[id].kemantren;
document.getElementById('uptd').value = prdName[id].uptd;
document.getElementById('uptd1').value = prdName[id].uptd;
document.getElementById('tanam1').value = prdName[id].tanam1;
document.getElementById('tanam11').value = prdName[id].tanam1;
document.getElementById('tanam2').value = prdName[id].tanam2;
document.getElementById('tanam21').value = prdName[id].tanam2;
document.getElementById('tanam3').value = prdName[id].tanam3;
document.getElementById('tanam31').value = prdName[id].tanam3;
document.getElementById('balai').value = prdName[id].balai;
};
</script>

<?php
    include("layout/footer.php");
?>