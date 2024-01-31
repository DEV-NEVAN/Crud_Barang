<?php 
include_once 'koneksi.php';
session_start();
	$user=$_POST['user1'];
	$pass= md5($_POST['pass1']);

	$query="SELECT * FROM tb_user WHERE username='$user' AND password='$pass'";

	$hasil=mysqli_query($koneksi,$query);
	if (mysqli_num_rows($hasil)==1) {
		header("location:formutama.php");
	}else{
		$_SESSION['alert'] = "username atau password salah, jika akun belum terdaftar silahkan Registrasi terlebih dahulu ";
			header("location:formlogin.php");
	}

 ?>