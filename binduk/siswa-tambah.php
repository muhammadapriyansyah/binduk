<?php 
$title = "Daftar Siswa";
require 'koneksi.php';

error_reporting(0);

if(isset($_POST['simpan'])) {
    $nis = $_POST['nis'] ;
    $nisn = $_POST['nisn'] ;
    $no_akta = $_POST['no_akta'] ;
    $nama_siswa = $_POST['nama_siswa'] ;
    $tempat_lahir = $_POST['tempat_lahir'] ;
    $tgl_lahir = $_POST['tgl_lahir'] ;
    $jk = $_POST['jk'] ;
    $agama = $_POST['agama'] ;
    $kewarganegaraan = $_POST['kewarganegaraan'] ;
    $alamat = $_POST['alamat'] ;
    $tahunlulus = $_POST['tahun_ajaran'] ;
    $no_ijazah = $_POST['no_ijazah'] ;

    $foto_siswa = $_FILES['foto_siswa']['name'];
    $file_tmp = $_FILES['foto_siswa']['tmp_name'] ;

    $nama_ayah = $_POST['nama_ayah'];
    $no_telpAyah = $_POST['no_telpAyah'];
    $pendidikanAyah = $_POST['pendidikan_ayah'];
    $pekerjaanAyah = $_POST['pekerjaan_ayah'];

    $nama_ibu = $_POST['nama_ibu'];
    $no_telpIbu = $_POST['no_telpIbu'];
    $pendidikanIbu = $_POST['pendidikan_ibu'];
    $pekerjaanIbu = $_POST['pekerjaan_ibu'];

    $nama_wali = $_POST['nama_wali'];
    $no_telpWali = $_POST['no_telpWali'];
    $pendidikanWali = $_POST['pendidikan_wali'];
    $pekerjaanWali = $_POST['pekerjaan_wali'];
    $hubunganKeluarga = $_POST['hubungan_keluarga'];


    if ($foto_siswa) {
        move_uploaded_file($file_tmp, 'siswa/'.$foto_siswa) ;

        $query = "INSERT INTO tb_siswa (nis,nisn,no_akta,nama_siswa,tempat_lahir,tgl_lahir,jk,agama,kewarganegaraan,alamat,tahun_lulus,no_ijazah,foto_siswa,nama_ayah,no_telpAyah,pendidikan_ayah,pekerjaan_ayah,nama_ibu,no_telpIbu,pendidikan_ibu,pekerjaan_ibu,nama_wali,no_telpWali,pendidikan_wali,pekerjaan_wali,hubungan_keluarga) 
        values ('$nis','$nisn','$no_akta','$nama_siswa','$tempat_lahir','$tgl_lahir','$jk','$agama','$kewarganegaraan','$alamat','$tahunlulus','$no_ijazah','$foto_siswa','$nama_ayah','$no_telpAyah','$pendidikanAyah','$pekerjaanAyah','$nama_ibu','$no_telpIbu','$pendidikanIbu','$pekerjaanIbu','$nama_wali','$no_telpWali','$pendidikanWali','$pekerjaanWali','$hubunganKeluarga')";

    }else {
        $query = "INSERT INTO tb_siswa (nis,nisn,no_akta,nama_siswa,tempat_lahir,tgl_lahir,jk,agama,kewarganegaraan,alamat,tahun_lulus,no_ijazah,nama_ayah,no_telpAyah,pendidikan_ayah,pekerjaan_ayah,nama_ibu,no_telpIbu,pendidikan_ibu,pekerjaan_ibu,nama_wali,no_telpWali,pendidikan_wali,pekerjaan_wali,hubungan_keluarga) 
        values ('$nis','$nisn','$no_akta','$nama_siswa','$tempat_lahir','$tgl_lahir','$jk','$agama','$kewarganegaraan','$alamat','$tahunlulus','$no_ijazah','$nama_ayah','$no_telpAyah','$pendidikanAyah','$pekerjaanAyah','$nama_ibu','$no_telpIbu','$pendidikanIbu','$pekerjaanIbu','$nama_wali','$no_telpWali','$pendidikanWali','$pekerjaanWali','$hubunganKeluarga')";
    }



    $execute = bisa($conn,$query);
    
    if($execute == 1){
        header('location: siswa.php');
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
                            <span><a href="#" class="text-dark">Siswa</a> / <a href="siswa.php" class="text-dark"><?= $title?></a> / <a href="#" class="text-dark">Siswa Tambah</a></span>
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
                            <h4 class="card-title">Form Data Siswa</h4>
                                <!-- content card -->
                                <div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step col-xs-3">
                                        <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                        <p><small>Data Siswa</small></p>
                                    </div>
                                    <div class="stepwizard-step col-xs-3">
                                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                        <p><small>Data Ayah Kandung</small></p>
                                    </div>
                                    <div class="stepwizard-step col-xs-3">
                                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                        <p><small>Data Ibu Kandung</small></p>
                                    </div>
                                    <div class="stepwizard-step col-xs-3">
                                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                        <p><small>Data Wali Murid</small></p>
                                    </div>
                                    </div>
                                </div>
                                <form enctype="multipart/form-data" method="POST" action="" role="form">
                                    <!-- batas step 1 -->
                                    <div class="panel panel-primary setup-content" id="step-1">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Siswa</h3>
                                    </div>
                                    <br>
                                    <div class="panel-body">
                                        <table  width="100%">
                                            <tr>
                                                <td width="15%"><label for="nis" class="d-inline">NIS</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="nis" placeholder="NIS"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td><label for="nisn" class="d-inline">NISN</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="nisn" placeholder="NISN"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="nomor_akta">Nomor Akta Kelahiran</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="no_akta" id="nomor_akta" placeholder="Nomor akta kelahiran"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td><label for="nama_siswa">Nama Lengkap</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="nama_siswa" placeholder="Nama Lengkap"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="tempat_lahir">Tempat lahir</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                                                <td>:</td>
                                                <td><input type="date" class="form-control" name="tgl_lahir"></td>
                                            </tr>
                                            <tr>
                                                <td><label class="d-inline">Jenis Kelamin</label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-group row mt-3">
                                                        <div class="col-sm-4 d-inline">
                                                            <div>
                                                                <label>
                                                                    <input type="radio" class="d-inline" name="jk" value="Laki-Laki"> Laki-Laki
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-radio form-radio-flat">
                                                                <label class="form-check-label">
                                                                    <input type="radio" name="jk" value="Perempuan"> Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr height="70px">
                                                <td><label for="agama">Agama</label></td>
                                                <td>:</td>
                                                <td>
                                                <select class="form-control form-control-lg" name="agama" id="agama">
                                                    <option value="Islam">Islam</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Kristen">Kristen Potestan</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label >Kewarganegaraan</label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="form-group row mt-3">
                                                    <div class="col-sm-4">
                                                        <div>
                                                        <label>
                                                            <input type="radio" name="kewarganegaraan" value="WNI"> WNI
                                                        </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div>
                                                        <label>
                                                            <input type="radio" name="kewarganegaraan" value="WNA"> WNA
                                                        </label>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr height="70px">
                                                <td><label for="alamat">Alamat</label></td>
                                                <td>:</td>
                                                <td><textarea class="form-control" name="alamat" placeholder="alamat" rows="5"></textarea></td>
                                            </tr>
                                            <tr  height="70px">
                                                <td><label for="tahun_ajaran">Tahun Lulus</label></td>
                                                <td>:</td>
                                                <td>
                                                    <select class="form-control form-control-lg" name="tahun_ajaran" id="tahun_ajaran">
                                                        <option selected>----Pilih Tahun Lulus----</option>
                                                        <?php
                                                        //query menampilkan tahun ajaran
                                                        $query = "SELECT * FROM tb_thnajaran WHERE status ='Aktif'";
                                                        $data = ambildata($conn,$query);
                                                        foreach ($data as $row) :
                                                            ?>
                                                            <option value="<?=$row['thnAjaran'];?>"><?php echo $row['thnAjaran'];?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr height="70px">
                                                <td><label for="nomor_ijazah">Nomor Ijazah</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="no_ijazah"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td><label for="foto_siswa">Foto Siswa <small>jpg | jpeg</small></label></td>
                                                <td>:</td>
                                                <td>
                                                    <div class="custom-file mb-3">
                                                        <input type="file" name="foto_siswa" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-primary nextBtn pull-right" type="button">Selanjutnya</button>
                                    </div>
                                    </div>
                                    <!-- batas step 1 -->
                                    <!-- batas step 2 -->
                                    <div class="panel panel-primary setup-content" id="step-2">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Ayah Kandung</h3>
                                    </div>
                                    <br>
                                    <div class="panel-body">
                                        <table width="100%">
                                            <tr height="70px">
                                                <td width="15%"><label for="nama_ayah">Nama Ayah</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama ayah kandung"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td width="15%"><label for="nama_ayah">Nomor Telepon</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="no_telpAyah" id="nama_ayah" placeholder="Nomor Telepon"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td width="15%"><label for="pendidikan_ayah">Pendidikan Terakhir</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" placeholder="Pendidikan terakhir ayah kandung"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td width="15%"><label for="pekerjaan_ayah">Pekerjaan Ayah</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan ayah kandung"></td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-primary nextBtn pull-right" type="button">Selanjutnya</button>
                                    </div>
                                    </div>
                                    <!-- batas step2 -->
                                    <!-- batas step2 -->
                                    <div class="panel panel-primary setup-content" id="step-3">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Ibu Kandung</h3>
                                    </div>
                                    <br>
                                    <div class="panel-body">
                                        <table width="100%">
                                            <tr height="70px">
                                                <td width="15%"><label for="nama_ayah">Nama Ibu</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="nama_ibu"  placeholder="Nama Ibu kandung"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td width="15%"><label for="nama_ayah">Nomor Telepon</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="no_telpIbu"  placeholder="Nomor Telepon"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td width="15%"><label for="pendidikan_ayah">Pendidikan Terakhir</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="pendidikan_ibu" id="pendidikan_ayah" placeholder="Pendidikan terakhir ibu kandung"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td width="15%"><label for="pekerjaan_ayah">Pekerjaan Ibu</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="pekerjaan_ibu"  placeholder="Pekerjaan Ibu kandung"></td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-primary nextBtn pull-right" type="button">Selanjutnya</button>
                                    </div>
                                    </div>
                                    <!-- batas step 3 -->
                                    <!-- batas step 4 -->
                                    <div class="panel panel-primary setup-content" id="step-4">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Wali Murid</h3>
                                    </div>
                                    <br>
                                    <div class="panel-body">
                                        <table width="100%">
                                            <tr height="70px">
                                                <td width="15%"><label for="nama_ayah">Nama Wali Murid</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="nama_wali"  placeholder="Nama wali"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td width="15%"><label for="nama_ayah">Nomor Telepon</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="no_telpWali"  placeholder="Nomor Telepon"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td width="15%"><label for="pendidikan_ayah">Pendidikan Terakhir</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="pendidikan_wali" placeholder="Pendidikan terakhir wali kandung"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td width="15%"><label for="pekerjaan_ayah">Pekerjaan Wali Murid</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="pekerjaan_wali"  placeholder="Pekerjaan wali kandung"></td>
                                            </tr>
                                            <tr height="70px">
                                                <td width="15%"><label for="pekerjaan_ayah">Hubungan Dengan Keluarga</label></td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" name="hubungan_wali"  placeholder="Pekerjaan wali kandung"></td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-success pull-right" type="submit" name="simpan">Simpan</button>
                                    </div>
                                    </div>
                                    <!-- batas step 4 -->
                                </form>
                                
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