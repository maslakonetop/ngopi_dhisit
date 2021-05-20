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
                        <h5>Display Data Petak</h5>
                        <?php
                            $query = "SELECT id FROM blanko_o1 ORDER BY id DESC LIMIT 1";
                            $result = mysqli_query($koneksi, $query);
                            $data = mysqli_fetch_assoc($result);
                        ?>
                        <form method="POST" action="data/proses_simpan_blangko1.php?id=<?php echo $data['id'];?>" enctype="multipart/form-data" id="usrform">
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
                                        <label class="text-dark col-sm-6 col-form-label" for="inlineFormCustomSelectPref">Pilih Petak</label>
                                        <div class="col-sm-6">
                                            <?php
                                                $result = mysqli_query($koneksi , "SELECT * FROM `saluranpetak`"); 
                                                $jsArray = "var prdName = new Array();\n"; 
                                                echo '<select class="custom-select my-1 mr-sm-2" name="petak" onchange="changeValue(this.value)">'; 
                                                echo '<option>Petak Irigasi --</option>'; 
                                                while ($row = mysqli_fetch_array($result)) { 
                                                echo '<option value="' . $row['petak'] . '">' . $row['petak'] . '</option>'; 
                                                $jsArray .= "prdName['" . $row['petak'] . "'] 
                                                = {name:'" . addslashes($row['daerah_irigasi']) .
                                                    "',premier:'".addslashes($row['saluran_primer']). 
                                                    "',sekunder:'".addslashes($row['saluran_sekunder']).
                                                    "',tersier: '".addslashes($row['saluran_tersier']).
                                                    "',desa: '".addslashes($row['desa']). 
                                                    "',luas: '".addslashes($row['luas']).
                                                    "',tanaman1: '".addslashes($row['jenis_tanam1']).
                                                    "',tanaman2: '".addslashes($row['jenis_tanam2']).
                                                    "',tanaman3: '".addslashes($row['jenis_tanam3']).
                                                    "',petak: '".addslashes($row['petak'])."'};\n"; 
                                                } 
                                                echo '</select>'; 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text dark col-sm-6 col-form-label" for="daerah_irigasi">Daerah Irigasi</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="daerah_irigasi" id="prd_name" readonly required/>
                                            <input type="hidden" name="daerah_irigasi" id="prd_name1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text dark col-sm-6 col-form-label" for="daerah_irigasi">Saluran Primer</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="saluran_primer" id="premier" readonly required/>
                                            <input type="hidden" name="saluran_primer" id="premier1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Saluran Sekunder</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="saluran_sekunder" id="sekunder" readonly required/>
                                            <input type="hidden" name="saluran_sekunder" id="sekunder1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Saluran Tersier</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="jumlah_petak_tersier" id="tersier" readonly required/>
                                            <input type="hidden" name="jumlah_petak_tersier" id="tersier1"/>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Petak</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="petak" id="petak" readonly required/>
                                        <input type="hidden" name="petak" id="petak1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Desa</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="desa" id="desa1" readonly required/>
                                        <input type="hidden" name="desa" id="desa"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Luas Petak</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="luas" id="luas1" readonly required/>
                                        <input type="hidden" name="luas" id="luas"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Jenis Tanaman I</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="tanam1" id="tanaman11" readonly required/>
                                        <input type="hidden" name="jenis_tanam1" id="tanaman1"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Jenis Tanaman II</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="tanam2" id="tanaman21" readonly required/>
                                        <input type="hidden" name="jenis_tanam2" id="tanaman2"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-dark col-sm-6 col-form-label" for="luas_sawah">Jenis Tanaman III</label>
                                        <div class="col-sm-6">
                                        <input type="text" name="tanam3" id="tanaman31" readonly required/>
                                        <input type="hidden" name="jenis_tanam3" id="tanaman3"/>
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
document.getElementById('premier').value = prdName[id].premier;
document.getElementById('premier1').value = prdName[id].premier;
document.getElementById('sekunder').value = prdName[id].sekunder;
document.getElementById('sekunder1').value = prdName[id].sekunder;
document.getElementById('tersier').value = prdName[id].tersier;
document.getElementById('tersier1').value = prdName[id].tersier;
document.getElementById('petak').value = prdName[id].petak;
document.getElementById('petak1').value = prdName[id].petak;
document.getElementById('desa').value = prdName[id].desa;
document.getElementById('desa1').value = prdName[id].desa;
document.getElementById('luas').value = prdName[id].luas;
document.getElementById('luas1').value = prdName[id].luas;
document.getElementById('tanaman1').value = prdName[id].tanaman1;
document.getElementById('tanaman11').value = prdName[id].tanaman1;
document.getElementById('tanaman2').value = prdName[id].tanaman2;
document.getElementById('tanaman21').value = prdName[id].tanaman2;
document.getElementById('tanaman3').value = prdName[id].tanaman3;
document.getElementById('tanaman31').value = prdName[id].tanaman3;
};
</script>

<?php
    include("layout/footer.php");
?>