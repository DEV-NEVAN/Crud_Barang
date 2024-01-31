<?php 	
include_once("koneksi.php");
//if (isset($_POST['namabarang'])) {

// post akan mengirimkan data atau nilai langsung ke action untuk ditampung, tanpa menampilkan pada URL.
$na_produk = $_POST['naproduk'];
$me_produk = $_POST['meproduk'];
$ha_produk = $_POST['haproduk'];
$se_produk = $_POST['seproduk'];

//}
$query="INSERT INTO tb_produk(nama_produk,merk,harga,stok)
		VALUES ('$na_produk','$me_produk','$ha_produk','$se_produk')";

		$hasil=mysqli_query($koneksi,$query);

		if ($hasil) {
			header('location:datamaster.php');
		}else{
			echo "gagal";
		}
 ?>