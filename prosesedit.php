<?php 
include_once ("koneksi.php");
session_start();

$id=$_POST['id'];
$nam_produk=$_POST['naproduk'];
$mer_produk=$_POST['meproduk'];
$har_produk=$_POST['haproduk'];
$set_produk=$_POST['seproduk'];

$query="UPDATE tb_produk SET nama_produk='$nam_produk',merk='$mer_produk',harga=$har_produk,stok=$set_produk WHERE no_produk=$id";

$hasil=mysqli_query($koneksi,$query);

if ($hasil) {
	$_SESSION['modal'] = " <center>data produk berhasil di update<br></center> ";
	header('location:datamaster.php');
}else{
	$_SESSION['modalg'] = " <center>data produk gagal<br>di update<br></center> ";
	header('location:datamaster.php');
}
 ?>
