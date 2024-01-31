<?php 	
include_once("koneksi.php");
//if (isset($_POST['namabarang'])) {

session_start();
$user_reg = $_POST['userreg'];
$email_reg = $_POST['emailreg'];
$pass_reg1 = md5($_POST['passreg1']);
$pass_reg2 = md5($_POST['passreg2']);

//}
$query="INSERT INTO tb_user(username,email,password,repassword)
		VALUES ('$user_reg','$email_reg','$pass_reg1','$pass_reg2')";

		$hasil=mysqli_query($koneksi,$query);

		if ($hasil) {
			$_SESSION['alert'] = " selamat akun anda sudah terdaftar ";
			header('location:formlogin.php');
		}else{
			echo "gagal";
		}
 ?>