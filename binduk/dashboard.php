<?php 
$title = "Dashboard";
require 'layout-header.php';

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                        <div>
                            <span><a href="#" class="text-dark">Dashboard</a></span>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Siswa Aktif</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Siswa Mutasi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Siswa Keluar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Siswa Lulus</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->
                    <!-- isi konten disini -->
                    <div class="col-lg-13">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark"><strong>Informasi!!</strong></h6>
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li>Isi Daftar Tahun Ajaran <a href="tahun-ajaran.php">Go To Tahun Ajaran</a></li>
                                    <li>Isi Kelas <a href="kelas.php">Go To Kelas</a></li>
                                    <li>Isi Daftar Tahun Ajaran <a href="tahun-ajaran.php">Go To Tahun Ajaran</a></li>
                                    <li>Isi Daftar Tahun Ajaran <a href="tahun-ajaran.php">Go To Tahun Ajaran</a></li>
                                    <li>Isi Daftar Tahun Ajaran <a href="tahun-ajaran.php">Go To Tahun Ajaran</a></li>
                                    <li>Isi Daftar Tahun Ajaran <a href="tahun-ajaran.php">Go To Tahun Ajaran</a></li>
                                    <li>Isi Daftar Tahun Ajaran <a href="tahun-ajaran.php">Go To Tahun Ajaran</a></li>
                                    <li>Isi Daftar Tahun Ajaran <a href="tahun-ajaran.php">Go To Tahun Ajaran</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>


                    

                </div>
                <!-- /.container-fluid -->
<?php 
require 'footer.php';
?>