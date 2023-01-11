<?php 
$title = "Mata Pelajaran";
require 'koneksi.php';

$query = 'SELECT * FROM tb_mapel';
$data = ambildata($conn,$query);

if(isset($_POST['simpan'])) {
    $nama_mapel = $_POST['nama_mapel'] ;

    $query = "INSERT INTO tb_mapel (nama_mapel) values ('$nama_mapel')";

    $execute = bisa($conn,$query);
    if($execute == 1){
        header('location: mapel.php');
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
                            <span><a href="#" class="text-dark">Data Pendukung</a> / <a href="kelas.php" class="text-dark">Kelas</a> / <a href="#" class="text-dark">Kelas Tambah</a></span>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="col-lg-13">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header bg-primary py-3">
                                <h6 class="m-0 font-weight-bold text-white"><strong>Tambah Kelas</strong></h6>
                            </div>
                            <div class="card-body">

                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="inputTahunPelajaran">Nama Pelajaran</label>
                                                <input type="text" class="form-control" name="nama_mapel" required>
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