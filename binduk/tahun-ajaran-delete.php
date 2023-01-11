<?php 
require 'koneksi.php';
$sql = "DELETE FROM tb_thnajaran WHERE id_thnAjaran = " . $_GET['id'];
$exe = mysqli_query($conn,$sql);

if($exe){
    header('location: tahun-ajaran.php');
} else {
    echo "<b>GAGAL HAPUS DATA DISEBABKAN MEMBER TERHUBUNG KE TRANSAKSI<b>";
}
 ?>