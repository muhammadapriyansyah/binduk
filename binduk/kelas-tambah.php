<?php 
$title = "Kelas";
require 'koneksi.php';

$query = 'SELECT * FROM tb_kelas';
$data = ambildata($conn,$query);

if(isset($_POST['simpan'])) {
    $nama_kelas = $_POST['nama_kelas'] ;
    $tingkat = $_POST['tingkat'] ;
    $kurikulum = $_POST['kurikulum'] ;

    $query = "INSERT INTO tb_kelas (nama_kelas,tingkat,kurikulum) values ('$nama_kelas','$tingkat','$kurikulum')";


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
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="tingkat">Tingkat</label><br>    
                                                <label class="form-check-label d-inline"><input type="radio" name="tingkat" value="VII"> VII</label>
                                                <label class="form-check-label d-inline"><input type="radio" name="tingkat" value="VIII"> VIII</label>
                                                <label class="form-check-label d-inline"><input type="radio" name="tingkat" value="IX"> IX</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <label>Nama Kelas</label>
                                                <input type="text" class="form-control" name="nama_kelas" id="inputKelas" required>
                                                <span id="inputTahunPelajaran-error" class="error invalid-feedback">Wajib isi</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="inputTahunPelajaran">Kurikulum</label>
                                                <input type="text" class="form-control" name="kurikulum" required>
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