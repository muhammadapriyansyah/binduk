<?php 
require 'koneksi.php';
$sql = "DELETE FROM tb_kelas WHERE id_kelas = " . $_GET['id'];
$exe = mysqli_query($conn,$sql);

if($exe){
    header('location: kelas.php');
} else {
    echo "<b>GAGAL HAPUS DATA DISEBABKAN MEMBER TERHUBUNG KE TRANSAKSI<b>";
}
 ?>