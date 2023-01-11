<?php
    include('koneksi.php');

    $id_siswa = $_GET['id'];
	$query = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa' " ;
    $exe = ambilsatubaris($conn,$query);

	$foto_siswa = $exe['foto_siswa'] ;
	if(file_exists('siswa/'.$foto_siswa))
	{
		unlink('siswa/'.$foto_siswa) ;
	}
	
    $sql = "DELETE FROM tb_siswa WHERE id_siswa = " . $_GET['id'];
    mysqli_query($conn, $sql) or die ("SQL Error ".mysqli_error()) ;
    header('location: siswa.php');
?>
