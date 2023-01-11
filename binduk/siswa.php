<?php 
$title = "Daftar Siswa";
require 'koneksi.php';

$query = 'SELECT * FROM tb_siswa';
$data = ambildata($conn,$query);

    require 'layout-header.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Siswa</h1>
                        <div>
                            <span><a href="#" class="text-dark">Siswa</a> / <a href="#" class="text-dark"><?= $title?></a></span>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="col-lg-13">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header bg-primary py-3">
                                <h6 class="m-0 font-weight-bold text-white"><strong>Siswa</strong></h6>
                            </div>
                            <div class="card-body">
                            <a href="siswa-tambah.php" class="btn btn-primary mb-3" align="right">Tambah data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Foto Siswa</th>
                                            <th>NIS</th>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Tempat/Tanggal Lahir</th>
                                            <th>Tahun Lulus</th>
                                            <th width="20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Foto Siswa</th>
                                            <th>NIS</th>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Tempat/Tanggal Lahir</th>
                                            <th>Tahun Lulus</th>
                                            <th width="20%">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1; foreach($data as $row): ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><img src="siswa/<?php echo $row['foto_siswa'] ; ?>" width="100"></td>
                                            <td><?= $row['nis'] ?></td>
                                            <td><?= $row['nisn'] ?></td>
                                            <td><?= $row['nama_siswa'] ?></td>
                                            <td><?= $row['tempat_lahir'] ?>, <?= date('d F Y', strtotime($row['tgl_lahir']))  ?></td>
                                            <td><?= $row['tahun_lulus'] ?></td>
                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <a href="siswa-detail.php?id=<?php echo $row['id_siswa']; ?>" class="btn btn-info"><i class="fa fa-info"></i></a>
                                                        <a href="siswa-detail.php?id=<?php echo $row['id_siswa']; ?>" class="btn btn-warning"><i class="fa fa-print"></i></a>
                                                        <a href="siswa-edit.php?id=<?php echo $row['id_siswa']?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                        <a href="siswa-delete.php?id=<?php echo $row['id_siswa']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->
<?php 
require 'footer.php';
?>