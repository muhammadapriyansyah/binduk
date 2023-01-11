<?php 
$title = "Kelas";
require 'koneksi.php';

$id_kelas = $_GET['id'];
$query = "SELECT * FROM tb_kelas WHERE id_kelas='$id_kelas'";
$data = ambilsatubaris($conn,$query);

if(isset($_POST['simpan'])) {
    $nama_kelas = $_POST['nama_kelas'] ;
    $tingkat = $_POST['tingkat'] ;
    $kurikulum = $_POST['kurikulum'] ;

    $query = "UPDATE tb_kelas SET nama_kelas = '$nama_kelas', tingkat = '$tingkat', kurikulum = '$kurikulum' WHERE id_kelas='$id_kelas'";


    $execute = bisa($conn,$query);
    if($execute == 1){
        header('location: kelas.php');
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
                        <span><a href="#" class="text-dark">Data Pendukung</a> / <a href="kelas.php" class="text-dark">Kelas</a> / <a href="#" class="text-dark">Kelas Edit</a></span>
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
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="tingkat">Tingkat</label><br>    
                                                <label class="form-check-label d-inline"><input type="radio" name="tingkat" value="VII" <?php if($data['tingkat']=='VII') echo "checked" ?>> VII</label>
                                                <label class="form-check-label d-inline"><input type="radio" name="tingkat" value="VIII" <?php if($data['tingkat']=='VIII') echo "checked" ?>> VIII</label>
                                                <label class="form-check-label d-inline"><input type="radio" name="tingkat" value="IX" <?php if($data['tingkat']=='IX') echo "checked" ?>> IX</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <label>Nama Kelas</label>
                                                <input type="text" class="form-control" name="nama_kelas" value="<?= $data['nama_kelas'] ?>" required>
                                                <span id="inputTahunPelajaran-error" class="error invalid-feedback">Wajib isi</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="inputTahunPelajaran">Kurikulum</label>
                                                <input type="text" class="form-control" name="kurikulum" value="<?= $data['kurikulum'] ?>" required>
                                                <span id="inputTahunPelajaran-error" class="error invalid-feedback">Wajib isi</span>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>    
                            <div class="card-footer">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <button type="reset" name="reser" class="btn btn-danger">Batal</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.container-fluid -->
<?php 
require 'footer.php';
?>