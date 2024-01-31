<?php 	
include_once("koneksi.php");

$id=$_GET['id'];
//get akan menampilkan data/nilai pada URL, kemudian akan ditampung oleh action.
$query="SELECT * FROM tb_produk WHERE no_produk=".$id;

$hasil=mysqli_query($koneksi,$query);


 ?>

 
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UPDATE PRODUK</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="style3.css">
		
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
				  <a class="navbar-brand sentuh" href="cetak.html"><i class="fa fa-print fa-2x fav"></i>Cetak Laporan</a>
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
				<div class="formedit" style="background-image: url(IMG/b5.png); border-radius: 20px; margin-top: -20px;">
				 <div class="latarinfo" >
		      	<div class="info" style="border-radius: 20px 20px 0px 0px">
		      		<div class="tulis">
		      			<h4 style="font-weight: bold;">UPDATE DATA PRODUK</h4>
		      		</div>
		      	</div>

			 
				</div>
				<div class="row">
					<div class="col"></div>
					<div class="col">
				<form action="prosesedit.php" method="post">
				<?php 	while ($data=mysqli_fetch_array($hasil)) { ?>
				  <fieldset>
				    <legend>  
				    	<h5 style="text-align: center; margin-top: 20px;">silahkan isi form dibawah ini :</h5>
				    </legend>
				    <div class="form-group">
				      <label for="na-p">Nama Produk :</label>
				      <input type="text" class="form-control" name="naproduk" value="<?php echo $data['nama_produk'] ?>">
				      <small id="editHelp" class="form-text text-muted">nama produk tidak boleh kosong.</small>
				    </div>

					<div class="form-group">
				      <label for="me-p">Merk Produk :</label>
				      <input type="text" class="form-control" name="meproduk" value="<?php echo $data['merk'] ?>" >
				      <small id="editHelp" class="form-text text-muted">merk produk tidak boleh kosong.</small>
				    </div>
				    

				    <div class="form-group">
				      <label for="ha-p">Harga Produk :</label>
				      <input type="text" class="form-control" name="haproduk" value="<?php echo $data['harga'] ?>">
				      <small id="editHelp" class="form-text text-muted">harga produk tidak boleh kosong.</small>
				    </div>
				    <div class="form-group">
				      <label for="st-p">Stok Barang :</label>
				      <input type="text" class="form-control" name="seproduk" value="<?php echo $data['stok'] ?>">
				    </div>
				</fieldset>
				
				<div class="tombol" style=" text-align: center;">
					<input type="hidden" name="id" value="<?php echo $data['no_produk'] ?>">
			        <input type="submit" value="Simpan" style="color: white; background-color: #1282b2; width: 200px; height: 40px; border-radius: 20px 20px 20px 20px; font-size: 20px; margin-bottom: 20px; ">
				</div>
			     <?php } ?>
				</form>
					</div>
					<div class="col"></div>
				</div>
				<div class="tutuform" style="background-color: #1282b2; border-radius: 0px 0px 20px 20px; height: 50px; margin-top: 20px;"></div>
			</div>
		</div>

	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>


	<script>
		$(document).ready(function() {
    	$('#example1').DataTable();
		} );
	</script>

</body>
</html>