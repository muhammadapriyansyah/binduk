<?php 
$title = "Daftar Siswa";
require 'koneksi.php';

    $id_siswa = $_GET['id'];
    $query= "SELECT * FROM tb_siswa WHERE id_siswa ='$id_siswa'";
    $data = ambilsatubaris($conn,$query);
    require 'layout-header.php';
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Siswa</h1>
                        <div>
                            <span><a href="#" class="text-dark">Siswa</a> / <a href="siswa.php" class="text-dark"><?= $title?></a> / <a href="#" class="text-dark">Siswa Detail</a></span>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="col-lg-12 align-items-center justify-content-between">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header bg-primary py-3">
                                <center><h6 class="m-0 font-weight-bold text-white"><strong>Data Siswa</strong></h6></center>
                            </div>
                            <div class="card-body">
                                <center><img src="siswa/<?= $data['foto_siswa']?>" width="150"></center>
                                <table  width="100%" class="table table-striped mt-5">
                                    <tr>
                                        <td width="40%" align="right">NIS</td>
                                        <td width="1%">:</td>
                                        <td width="40%"><?= $data['nis'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">NISN</td>
                                        <td>:</td>
                                        <td><?= $data['nisn'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Nomor Akta Kelahiran</td>
                                        <td>:</td>
                                        <td><?= $data['no_akta'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Nama Lengkap</td>
                                        <td>:</td>
                                        <td><?= $data['nama_siswa'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Tempat, Tanggal Lahir</td>
                                        <td>:</td>
                                        <td><?= $data['tempat_lahir'] ?>, <?= date('d F Y', strtotime($data['tgl_lahir']))  ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Jenis Kelamin</td>
                                        <td>:</td>
                                        <td><?= $data['jk'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Agama</td>
                                        <td>:</td>
                                        <td><?= $data['agama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Kewarganegaraan</td>
                                        <td>:</td>
                                        <td><?= $data['kewarganegaraan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Alamat</td>
                                        <td>:</td>
                                        <td><?= $data['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Tahun Lulus</td>
                                        <td>:</td>
                                        <td><?= $data['tahun_lulus'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Nomor Ijazah</td>
                                        <td>:</td>
                                        <td><?= $data['no_ijazah'] ?></td>
                                    </tr>
                                </table>
                                
                            </div>
                                <div class="card-header">
                                    <a href="siswa-edit.php?id=<?php echo $edit['id_instansi']; ?>" class="btn btn-success"> Edit Data</a>
                                    <a href="cetak-bio.php?id=<?php echo $edit['id_instansi']; ?>" class="btn btn-warning"> Print PDF</a>
                                </div>
                        </div>

                        <div class="card shadow mb-4">
                            <div class="card-header bg-primary py-3">
                                <center><h6 class="m-0 font-weight-bold text-white"><strong>Data Orang Tua dan Wali Murid</strong></h6></center>
                            </div>
                            <div class="card-body">
                                <!-- table tampil data ayah -->
                                <h5 class="font-weight-bold text-dark text-uppercase mt-4">Data Ayah</h5>
                                <table width="100%" class="table table-striped">
                                    <tr>
                                        <td width="40%" align="right">Nama Ayah</td>
                                        <td width="1%">:</td>
                                        <td width="40%"><?= $data['nama_ayah'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Nomor Telpon</td>
                                        <td>:</td>
                                        <td><?= $data['no_telpAyah'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Pendidikan</td>
                                        <td>:</td>
                                        <td><?= $data['pendidikan_ayah'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Pekerjaan</td>
                                        <td>:</td>
                                        <td><?= $data['pekerjaan_ayah'] ?></td>
                                    </tr>
                                </table>
                                <!-- table tampil data ibu -->
                                <h5 class="font-weight-bold text-dark text-uppercase mt-4">Data Ibu</h5>
                                <table width="100%" class="table table-striped">
                                    <tr>
                                        <td width="40%" align="right">Nama Ibu</td>
                                        <td width="1%">:</td>
                                        <td width="40%"><?= $data['nama_ibu'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Nomor Telpon</td>
                                        <td>:</td>
                                        <td><?= $data['no_telpIbu'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Pendidikan</td>
                                        <td>:</td>
                                        <td><?= $data['pendidikan_ibu'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Pekerjaan</td>
                                        <td>:</td>
                                        <td><?= $data['pekerjaan_ibu'] ?></td>
                                    </tr>
                                </table>
                                <!-- table tampil data wali murid -->
                                <h5 class="font-weight-bold text-dark text-uppercase mt-4">Data Wali Murid</h5>
                                <table width="100%" class="table table-striped">
                                    <tr>
                                        <td width="40%" align="right">Nama Wali Murid</td>
                                        <td width="1%">:</td>
                                        <td width="40%"><?= $data['nama_wali'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Nomor Telpon</td>
                                        <td>:</td>
                                        <td><?= $data['no_telpWali'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Pendidikan</td>
                                        <td>:</td>
                                        <td><?= $data['pendidikan_wali'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Pekerjaan</td>
                                        <td>:</td>
                                        <td><?= $data['pekerjaan_wali'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->
<?php 
require 'footer.php';
?>