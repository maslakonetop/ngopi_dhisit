<?php
    include("admin/auth.php");
    include("data/config.php");
    include("layout/sidebar.php");
    include("layout/header.php");    
?>
    <body>
    <div class="container-fluid">
        <form method="POST" action="master/simpan_edit_uptd.php">
        <section class="base">
        <h2 class="title text-center">Tambah Unit Pelaksana Teknis</h2>
                <div class="row">
                    <div class="col-6"><!--left side -->
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Nama UPT Pengairan</label>
                            <div class="col-sm-6">
                                <input type="text" name="uptd_pengairan" class="form-control text-uppercase" id="lname" required="" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 col-form-label">Dinas PSDA Kabupatan</label>
                            <div class="col-sm-6">
                                <input type="text" name="dinas_psda_kab" class="form-control text-uppercase" id="lname" required="" value="">
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
                    <th scope="col" class="text-uppercase bg-warning">No ID</th>
                    <th scope="col" class="text-uppercase bg-warning">Nama UPTD Pengairan</th>
                    <th scope="col" class="text-uppercase bg-warning">Dinas PSDA Kabupaten</th>
                    <th scope="col" class="text-uppercase bg-warning">Edit/Hapus</th>
                </tr>
            </thread>
            <tbody>
                <?php                    
                    $query = "SELECT * FROM upt_psda ORDER BY id ASC";
                    $result = mysqli_query($koneksi, $query);

                    if(!$result) {
                        die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    }
                    //kalau ini melakukan foreach atau perulangan
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
        
                <tr>
                <td class="text-uppercase"><?php echo $row['id']; ?></td>
                    <td class="text-uppercase"><?php echo $row['uptd_pengairan']; ?></td>
                    <td class="text-uppercase"><?php echo $row['dinas_psda_kab']; ?></td>
                    <td><a href="master_upt_edit.php?id=<?php echo $row['id'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    <a href="master/master_upt_delete.php?id=<?php echo $row['id'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-eraser" aria-hidden="true"></i></a></td></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php
    include("layout/footer.php");
?>