<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOME</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="style2.css">
	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-3 kolom1">
				<div class="row">
					<div class="col col-12 kolom3">
						<!--ini bagian profil-->
						<div class="card" style="width: 20rem; height: 250px; border: 5px solid; border-radius: 10px 10px 0px 0px; border-color:#1282b2">
						  <img src="IMG/b1.jpg" class="card-img-top" alt="..." height="125">
						  <div class="card-body">
						  	<img src="IMG/p1.png" width="100" height="100" style="background-color: white; border:8px solid; border-color: white; border-radius: 50% !important; margin-left: 85px; margin-top: -70px; margin-bottom: 20px; " class="rounded" alt="ini gambar">
						    <h5 class="card-title text-center">Card title</h5>
						  </div>
						</div>
						<!--tutup profil-->
					</div>
					<div class="col kolom4">
				<!--bagian nav-->
				<div class="latar">
				<nav class="navbar navbar-dark" style="background-color: #1282b2">
				  <a class="navbar-brand sentuh" href="formutama.php"><i class="fa fa-home fa-2x fav"></i>Home</a>
				</nav>

				<nav class="navbar navbar-dark" style="background-color: #1282b2">
				  <a class="navbar-brand sentuh" href="datamaster.php"><i class="fa fa-file-text fa-2x fav"></i>Data Master</a>
				</nav>

				<nav class="navbar navbar-dark" style="background-color: #1282b2">
				  <a class="navbar-brand sentuh" href="#"><i class="fa fa-print fa-2x fav"></i>Cetak Laporan</a>
				</nav>

				<nav class="navbar navbar-dark" style="background-color: #1282b2">
				  <a class="navbar-brand sentuh" href="index.php"><i class="fa fa-arrow-circle-o-left fa-2x fav"></i>Logout</a>
				</nav>
				</div>
				<!--tutup nav-->
					</div>
				</div>
			</div>
			<div class="col col-9 kolom2">
				<div class="row">
					<div class="col kolom5">
				<!--header -->
					<div class="header">
						<img src="IMG/b4.png" class="img-fluid" alt="Responsive image" style="border-radius: 10px 10px 10px 10px">
						<div class="judul">
							<h4 class="display-4">Selamat Datang</h4>
							<p>kami akan melayani anda dengan aman dan nyaman dalam pendataan barang anda.</p>
						</div>
						
					</div>
					
				<!--tutup header -->
					</div>
				</div>
				<div class="row kolom6">
					<div class="col">
						<div class="card text-white mb-3 bdc" style="max-width: 20rem;">
						  <div class="card-header h1" style="border-radius: 145px 145px 0px 0px">
						  	<div class="row">
						  		<div class="col-sm-4"></div>
						  		<div class="col-sm-">
						  			<i class="fa fa-shopping-cart fa-2x icon1 "></i>
						  		</div>
						  		<div class="col-sm-3"></div>
						  	</div>
						  </div>
						  
						  <div class="card-body body1">
						  	<h4>JUMLAH BARANG</h4>
						  	<h1 class="card-title papan">100</h1>
						  	</div> 	
						</div>
					</div>
					<div class="col">
						<div class="card text-white mb-3 bdc" style="max-width: 20rem; ">
						  <div class="card-header h1" style="border-radius: 145px 145px 0px 0px">
						  	<div class="row">
						  		<div class="col-sm-4"></div>
						  		<div class="col-sm-">
						  			<i class="fa fa-cloud-download fa-2x icon2"></i>
						  		</div>
						  		<div class="col-sm-3"></div>
						  	</div>
						  </div>
						  
						  <div class="card-body body1">
						  	<h4>BARANG MASUK</h4>
						  	<h1 class="card-title papan">100</h1>
						  	</div> 	
						</div>
					</div>
					<div class="col">
						<div class="card text-white mb-3 bdc" style="max-width: 20rem;">
						  <div class="card-header h1" style="border-radius: 145px 145px 0px 0px">
						  	<div class="row">
						  		<div class="col-sm-4"></div>
						  		<div class="col-sm-">
						  			<i class="fa fa-cloud-upload fa-2x icon3"></i>
						  		</div>
						  		<div class="col-sm-3"></div>
						  	</div>
						  </div>
						  
						  <div class="card-body body1">
						  	<h4>BARANG KELUAR</h4>
						  	<h1 class="card-title papan">100</h1>
						  	</div> 	
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	
</body>
</html>