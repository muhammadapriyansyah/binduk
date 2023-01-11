<?php 
require 'koneksi.php';
$sql = "DELETE FROM tb_mapel WHERE id_mapel = " . $_GET['id'];
$exe = mysqli_query($conn,$sql);

if($exe){
    header('location: mapel.php');
} else {
    echo "<b>GAGAL HAPUS DATA DISEBABKAN MEMBER TERHUBUNG KE TRANSAKSI<b>";
}
 ?>