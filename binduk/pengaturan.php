<?php 
require 'header.php';

$halaman = 'Pengaturan';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Pendukung</h1>
                        <div>
                            <span>Data Pendukung / <?= $halaman?></span>
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
                            <form action="" method="post">
                                <table width="100%">
                                    <tr  height="70px">
                                        <div class="form-group">
                                            <td><label class="font-weight-bold d-inline" width="20%">Nama Sekolah</label></td>
                                            <td width="80%"><input type="text" class="form-control" placeholder="nama sekolah"></td>
                                        </div>
                                    </tr>
                                    <tr  height="70px">
                                        <div class="form-group">
                                            <td><label class="font-weight-bold d-inline">Npsn</label></td>
                                            <td width="80%"><input type="text" class="form-control" placeholder="npsn"></td>
                                        </div>
                                    </tr>
                                    <tr  height="70px">
                                        <div class="form-group">
                                            <td><label class="font-weight-bold d-inline">Alamat</label></td>
                                            <td width="80%"><input type="text" class="form-control" placeholder="alamat"></td>
                                        </div>
                                    </tr>
                                    <tr  height="70px">
                                        <div class="form-group">
                                            <td><label class="font-weight-bold d-inline">Kota</label></td>
                                            <td width="80%"><input type="text" class="form-control" placeholder="nama kota"></td>
                                        </div>
                                    </tr>
                                    <tr  height="70px">
                                        <div class="form-group">
                                            <td><label class="font-weight-bold d-inline">Telp</label></td>
                                            <td width="80%"><input type="text" class="form-control" placeholder="no telp"></td>
                                        </div>
                                    </tr>
                                    <tr  height="70px">
                                        <div class="form-group">
                                            <td><label class="font-weight-bold d-inline">Email</label></td>
                                            <td width="80%"><input type="text" class="form-control" placeholder="Email"></td>
                                        </div>
                                    </tr>
                                    <tr  height="70px">
                                        <div class="form-group">
                                            <td><label class="font-weight-bold d-inline">Instansi Induk</label></td>
                                            <td width="80%"><input type="text" class="form-control" placeholder="instansi induk"></td>
                                        </div>
                                    </tr>
                                    <tr  height="70px">
                                        <div class="form-group">
                                            <td><label class="font-weight-bold d-inline">Kota</label></td>
                                            <td width="80%"><input type="text" class="form-control" placeholder="nama kota"></td>
                                        </div>
                                    </tr>
                                    <tr  height="70px">
                                        <div class="form-group">
                                            <td><label class="font-weight-bold d-inline">Nama Kepala Sekolah</label></td>
                                            <td width="80%"><input type="text" class="form-control" placeholder="nama kepala sekolah"></td>
                                        </div>
                                    </tr>
                                    <tr  height="70px">
                                        <div class="form-group">
                                            <td><label class="font-weight-bold d-inline">Nip Kepala Sekolah</label></td>
                                            <td width="80%"><input type="text" class="form-control" placeholder="nip kepala sekolah"></td>
                                        </div>
                                    </tr>
                                    <tr  height="70px">

                                    </tr>
                                </table>
                                
                                <div class="input-group mb-3">
                                    <div>
                                        <label class="font-weight-bold d-inline">Upload Logo</label>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile03">
                                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                    </div>
                                </div>
                                
                            </form>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->
<?php 
require 'footer.php';
?>