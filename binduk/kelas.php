<?php 
$title = "Kelas";

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
                                <h6 class="m-0 font-weight-bold text-white"><strong>Daftar Kelas</strong></h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <a href="kelas-tambah.php" class="btn btn-primary" align="right">Tambah data</a>
                                </div>
                                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
                                <div class="row">
                                    <div class="form-group col-5">

                                        <select id="inputState" class="form-control" name="tingkat">
                                            <option selected>--Pilih Tingkat--</option>
                                                    <?php
                                                    include "koneksi.php";
                                                    //query menampilkan nama unit kerja ke dalam combobox
                                                    $query = 'SELECT * FROM tb_kelas GROUP BY tingkat ORDER BY tingkat';
                                                    $data = ambildata($conn,$query);
                                                    foreach ($data as $row) :
                                                        $ket="";
                                                        if (isset($_GET['tingkat'])) {
                                                            $tingkat = trim($_GET['tingkat']);
                                            
                                                            if ($tingkat==$row['tingkat'])
                                                            {
                                                                $ket="selected";
                                                            }
                                                        }

                                                        ?>
                                                        
                                                        <option <?php echo $ket; ?> value="<?=$row['tingkat'];?>"><?php echo $row['tingkat'];?></option>
                                                    <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <input class="btn btn-primary" type="submit" value="Pilih">
                                        <a href="kelas.php" class="btn btn-primary">Refresh</a>
                                    </div>
                                </div>
                                    
                                </form>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Nama Kelas</th>
                                            <th>Tingkat</th>
                                            <th>Kurikulum</th>
                                            <th width="10%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Status</th>
                                            <th>Kurikulum</th>
                                            <th width="10%">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        	if (isset($_GET['tingkat'])) {
                                                $tingkat=trim($_GET['tingkat']);
                                                        
                                                //menampilkan pegawai berdasarkan unit kerja yang dipilih pada combobox
                                                $tamPeg=mysqli_query($conn, "SELECT * FROM tb_kelas WHERE tingkat='$tingkat' ORDER BY nama_kelas DESC");
                                            } else {
                                                $tamPeg=mysqli_query($conn, "SELECT * FROM tb_kelas ORDER BY nama_kelas DESC");
                                        
                                            }
                                        $no = 1; foreach($tamPeg as $dakel): ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $dakel['nama_kelas'] ?></td>
                                            <td><?= $dakel['tingkat'] ?></td>
                                            <td><?= $dakel['kurikulum'] ?></td>
                                            <td>
                                                <center>
                                                <a href="kelas-edit.php?id=<?php echo $dakel['id_kelas']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a> | 
                                                <a href="kelas-delete.php?id=<?php echo $dakel['id_kelas']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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