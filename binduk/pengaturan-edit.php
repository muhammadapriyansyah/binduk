<?php 
$title = "Pengaturan";
require 'koneksi.php';

    $id_instansi = $_GET['id'];
    $queryedit = "SELECT * FROM tb_instansi WHERE id_instansi='$id_instansi'";
    $edit = ambilsatubaris($conn,$queryedit);

    if(isset($_POST['simpan'])) {

        $nama = $_POST['nama'] ;
        $npsn = $_POST['npsn'] ;
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $provinsi = $_POST['provinsi'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $instansi_induk = $_POST['instansi_induk'];
        $nama_kepsek = $_POST['nama_kepsek'];
        $nip_kepsek = $_POST['nip_kepsek'];
        $fotolama = $_POST['fotolama'];

        $logo = $_FILES['logo']['name'];
        $file_tmp = $_FILES['logo']['tmp_name'] ;


        if ($logo) {
            unlink('instansi/'.$fotolama);

            move_uploaded_file($file_tmp, 'instansi/'.$logo) ;
            $query = "UPDATE tb_instansi SET nama = '$nama',
                                            npsn = '$npsn',
                                            alamat = '$alamat',
                                            kota = '$kota',
                                            provinsi = '$provinsi',
                                            telp = '$telp',
                                            email = '$email',
                                            instansi_induk = '$instansi_induk',
                                            nama_kepsek = '$nama_kepsek',
                                            nip_kepsek = '$nip_kepsek',
                                            logo = '$logo'
                                            WHERE id_instansi='$id_instansi' ";
        } else {
            $query = "UPDATE tb_instansi SET nama = '$nama', npsn = '$npsn', alamat = '$alamat',
                                            kota = '$kota',
                                            provinsi = '$provinsi',
                                            telp = '$telp',
                                            email = '$email',
                                            instansi_induk = '$instansi_induk',
                                            nama_kepsek = '$nama_kepsek',
                                            nip_kepsek = '$nip_kepsek'
                                            WHERE id_instansi='$id_instansi' ";
        }

        $execute = bisa($conn,$query);
        if($execute == 1){
            header('location: pengaturan.php');
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
                            <span>Data Pendukung / <?= $title?> / Pengaturan Edit</span>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="col-lg-13">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header bg-primary py-3">
                                <h6 class="m-0 font-weight-bold text-white"><strong>Edit Data</strong></h6>
                            </div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" action="" method="post">
                                    <table width="100%">
                                        <tr  height="70px">
                                            <div class="form-group">
                                                <td><label class="font-weight-bold d-inline" width="20%">Nama Sekolah</label></td>
                                                <td width="80%"><input type="text" name="nama" class="form-control" placeholder="nama sekolah" value="<?= $edit['nama'] ?>" ></td>
                                            </div>
                                        </tr>
                                        <tr  height="70px">
                                            <div class="form-group">
                                                <td><label class="font-weight-bold d-inline">Npsn</label></td>
                                                <td width="80%"><input type="text" name="npsn" class="form-control" placeholder="npsn" value="<?= $edit['npsn'] ?>" ></td>
                                            </div>
                                        </tr>
                                        <tr  height="70px">
                                            <div class="form-group">
                                                <td><label class="font-weight-bold d-inline">Alamat</label></td>
                                                <td width="80%"><input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?= $edit['alamat'] ?>" ></td>
                                            </div>
                                        </tr>
                                        <tr  height="70px">
                                            <div class="form-group">
                                                <td><label class="font-weight-bold d-inline">Kota</label></td>
                                                <td width="80%"><input type="text" name="kota" class="form-control" placeholder="nama kota" value="<?= $edit['kota'] ?>" ></td>
                                            </div>
                                        </tr>
                                        <tr  height="70px">
                                            <div class="form-group">
                                                <td><label class="font-weight-bold d-inline">Provinsi</label></td>
                                                <td width="80%"><input type="text" name="provinsi" class="form-control" placeholder="Provinsi" value="<?= $edit['provinsi'] ?>" ></td>
                                            </div>
                                        </tr>
                                        <tr  height="70px">
                                            <div class="form-group">
                                                <td><label class="font-weight-bold d-inline">Telp</label></td>
                                                <td width="80%"><input type="text" name="telp" class="form-control" placeholder="no telp" value="<?= $edit['telp'] ?>" ></td>
                                            </div>
                                        </tr>
                                        <tr  height="70px">
                                            <div class="form-group">
                                                <td><label class="font-weight-bold d-inline">Email</label></td>
                                                <td width="80%"><input type="text" name="email" class="form-control" placeholder="Email" value="<?= $edit['email'] ?>" ></td>
                                            </div>
                                        </tr>
                                        <tr  height="70px">
                                            <div class="form-group">
                                                <td><label class="font-weight-bold d-inline">Instansi Induk</label></td>
                                                <td width="80%"><input type="text" name="instansi_induk" class="form-control" placeholder="instansi induk" value="<?= $edit['instansi_induk'] ?>" ></td>
                                            </div>
                                        </tr>
                                        <tr  height="70px">
                                            <div class="form-group">
                                                <td><label class="font-weight-bold d-inline">Nama Kepala Sekolah</label></td>
                                                <td width="80%"><input type="text" name="nama_kepsek" class="form-control" placeholder="nama kepala sekolah" value="<?= $edit['nama_kepsek'] ?>" ></td>
                                            </div>
                                        </tr>
                                        <tr  height="70px">
                                            <div class="form-group">
                                                <td><label class="font-weight-bold d-inline">Nip Kepala Sekolah</label></td>
                                                <td width="80%"><input type="text" name="nip_kepsek" class="form-control" placeholder="nip kepala sekolah" value="<?= $edit['nip_kepsek'] ?>" ></td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <img src="instansi/<?= $edit['logo']?>" width="150" <small> Gunakan File Image ukuran 150px</small>
                                                <input type="hidden" name="fotolama" value="<?php echo $edit['logo']; ?>" >
                                            </td>
                                        </tr>
                                        <tr  height="70px">
                                            <td><label class="font-weight-bold d-inline">Upload Logo <small>jpg | jpeg</small></label></td>
                                            <td>
                                                <div class="custom-file mb-3">
                                                    <input type="file" name="logo" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                
                                    </div>
                                    <div class="card-header">
                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                        </div>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->
<?php 
require 'footer.php';
?>