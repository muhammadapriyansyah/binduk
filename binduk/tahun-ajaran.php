<?php 
$title = "Tahun ajaran";
require 'koneksi.php';

$query = 'SELECT * FROM tb_thnAjaran';
$data = ambildata($conn,$query);

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
                            <a href="tahun-ajaran-tambah.php" class="btn btn-primary mb-3" align="right">Tambah data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Status</th>
                                            <th width="10%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Status</th>
                                            <th width="10%">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1; foreach($data as $row): ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row['thnAjaran'] ?></td>
                                            <td><?= $row['status'] ?></td>
                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <a href="tahun-ajaran-edit.php?id=<?php echo $row['id_thnAjaran']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                        <a href="tahun-ajaran-delete.php?id=<?php echo $row['id_thnAjaran']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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