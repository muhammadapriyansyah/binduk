<?php 
$title = "Tahun ajaran";
require 'koneksi.php';

$id_thnAjaran = $_GET['id'];
$query = "SELECT * FROM tb_thnAjaran WHERE id_thnAjaran='$id_thnAjaran'";
$data = ambilsatubaris($conn,$query);
$datastatus = explode(',', $data['status']);

if(isset($_POST['simpan'])) {
    $tahun_ajaran = $_POST['tahunajaran'] ;
    $status = implode($_POST['status']);

    $query = "UPDATE tb_thnajaran SET thnAjaran = '$tahun_ajaran', status = '$status' WHERE id_thnAjaran='$id_thnAjaran'";


    $execute = bisa($conn,$query);
    if($execute == 1){
        header('location: tahun-ajaran.php');
    }else{
        echo "Gagal Tambah Data";
    }
}

    require 'layout-header.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Pendukung</h1>
                        <div>
                            <span>Data Pendukung / <?= $title?></span>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="col-lg-13">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header bg-primary py-3">
                                <h6 class="m-0 font-weight-bold text-white"><strong>Tahun Ajaran</strong></h6>
                            </div>
                            <div class="card-body">

                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="inputTahunPelajaran">Tahun Pelajaran</label>
                                        <input type="text" class="form-control" name="tahunajaran" required value="<?= $data['thnAjaran']?>">
                                        <span id="inputTahunPelajaran-error" class="error invalid-feedback">Wajib isi</span>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Status <small>Jika dicek maka akan menonaktifkan data lain yang sudah tersimpan</small></label>
                                    </div>
                                    <div class="form-group mt-0">
                                        <label class="form-check-label"><input type="checkbox" name="status[]" value="Aktif" <?php if(in_array("Aktif", $datastatus)) echo "checked" ?> > Aktif</label>
                                    </div>


                            </div>    
                            <div class="card-header">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                <a href="tahun-ajaran.php" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->
<?php 
require 'footer.php';
?>