<?php 
include_once ("koneksi.php");
session_start();
$id=$_GET['id'];
$query="DELETE FROM tb_produk WHERE no_produk=".$id;

$hasil=mysqli_query($koneksi,$query);

if ($hasil) {
	$_SESSION['modal'] = "<center>data produk berhasil di hapus</center> ";
	header('location:datamaster.php');
}else{
	echo "hapus gagal";
}
 ?>
