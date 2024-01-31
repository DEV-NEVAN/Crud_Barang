<?php 	
include_once("koneksi.php");
$no=1;
$query = "SELECT * FROM tb_produk";

$hasil = mysqli_query($koneksi,$query);


 ?>

 
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DATA MASTER</title>
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
				 <div class="latarinfo" >
		      	<div class="info">
		      		<div class="tulis">
		      			<h4 style="font-weight: bold;">INFORMASI DATA BARANG</h4>
		      		</div>
		      	</div>

				
      	<!--bagian tambah table-->
		<div class="ltable" style=" font-weight: bold;">
		  	<ol class="breadcrumb Tambah">
		  	<li class="breadcrumb-item active" data-toggle="modal" data-target="#exampleModal" style="color: #32CD32;"><i class="fa fa-plus" style="margin-right: 10px;"></i>Tambah</li>
			</ol>

		       <table id="example1" class="table" style="width:100%; background-color: #1282b2; text-align: center; margin-bottom: 20px;">
		        <thead style="border: 2px solid; border-color: #1282b2;">
		            <tr style="color: white;">
		            	<th > No Produk</th>
		                <th>Nama Produk</th>
		                <th>Merk Produk</th>
		                <th>Harga Produk</th>
		                <th>Stok Produk</th>
		                <th>Aksi</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php while ($data = mysqli_fetch_array($hasil)) { ?>
					<tr>
						<td scope="row"><?php echo $no++; ?></td>
						<td><?php 	echo $data['nama_produk']; ?></td>
						<td><?php 	echo $data['merk']; ?></td>
						<td><?php 	echo $data['harga']; ?></td>
						<td><?php 	echo $data['stok']; ?></td>
						<td>
							<div class="submit">
								<a href="formedit.php?id=<?php echo $data['no_produk'] ?>" ><i class="fa fa-pencil-square" style="background-color: orange; width: 30px; height: 30px; text-align: center; color: white;padding: 7px; border-radius: 10px; " ></i></a>
								|
							<a href="proseshapus.php?id=<?php echo $data['no_produk'] ?>" onclick="return confirm('yakin ingin menghapus data ini?')"><i class="fa fa-trash " style="background-color: red; width: 30px; height: 30px; text-align: center; color: white;padding: 7px; border-radius: 10px;"></i></a>


							</div>
						</td>
					</tr>
						<?php 	} ?>
		            
		           

		        </tbody>
		        <tfoot style="color: white;">
		        	<th>No Produk</th>
	                <th>Nama Produk</th>
	                <th>Merk Produk</th>
	                <th>Harga Produk</th>
	                <th>Stok Produk</th>
	                <th>Aksi</th>
		        </tfoot>

		    </table>
		</div>			


	<!-- tutup table-->

		<!--bagian modal tambah-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 		 <div class="modal-dialog" role="document">
    		<div class="modal-content">
      		<div class="modal-header">
      			<i class="fa fa-plus-circle fa-3x" style="margin-right: 20px; color: #00FF7F;"></i>
        		<h5 class="modal-title" id="exampleModalLabel" style="margin-top: 7px;">Tambah Barang</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
       		 </button>
      		</div>
      		<div class="modal-body">
			<form action="prosestbh.php" method="POST">
				  <fieldset>
				    <legend>  
				    	<h5>silahkan isi form dibawah ini </h5>
				    </legend>
				    <div class="form-group">
				      <label for="exampleInputtambah1">Nama Produk :</label>
				      <input type="text" class="form-control" name="naproduk" id="exampleInputtamabah1" aria-describedby="tambahHelp" placeholder="Masukan Nama Produk">
				      <small id="tambahHelp" class="form-text text-muted">nama produk tidak boleh kosong.</small>
				    </div>

					<div class="form-group">
				      <label for="exampleInputtambah1">Merk Produk :</label>
				      <input type="text" class="form-control" name="meproduk" id="exampleInputtambah1" aria-describedby="tambahHelp" placeholder="Masukan merk Produk">
				      <small id="tambahHelp" class="form-text text-muted">merk produk tidak boleh kosong.</small>
				    </div>
				    

				    <div class="form-group">
				      <label for="exampleInputPassword1">Harga Produk :</label>
				      <input type="text" class="form-control" name="haproduk" id="exampleInputPassword1" placeholder="Masukan Harga Produk">
				      <small id="tambahHelp" class="form-text text-muted">harga produk tidak boleh kosong.</small>
				    </div>
				    <div class="form-group">
				      <label for="exampleSelect1">Stok Produk :</label>
				       <input type="text" class="form-control" name="seproduk" id="exampleInputtambah1" aria-describedby="tambahHelp" placeholder="Masukan Stok Produk">
				    </div>
				    
				  </fieldset>
				</div>
				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 10px;">Close</button>
        			<input type="submit" value="Simpan" style="background-color: #1282b2; height: 35px; border-radius:10px; color: white; font-size: 15px;">

		      	</div>
		      </form>
				
		    </div>
		  </div>
		</div>
							
		
		
		<!--bagian notif berhasil modal-->
		<?php if (isset($_SESSION['modal'])) : ?>
		<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 270px; margin-left: 600px; margin-top: 180px;">
 		 <div class="modal-dialog" role="document">
    		<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel" style="margin-left: 30px; ">
        			<strong><?php echo $_SESSION['modal']; ?></strong></h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
       		 </button>
      		</div>
      		<div class="modal-body">

      			
      			<center><i class="fa fa-check-circle fa-4x" style="color: green;"></i></center>
			</div>
      		
		    </div>
		  </div>
		</div>
		<?php 
		unset($_SESSION['modal']);
		endif
		 ?>
		 <!--tutup notif berhasil-->

		<!--bagian notif gagal modal hapus-->
		<?php if (isset($_SESSION['modalg'])) : ?>
		<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 270px; margin-left: 600px; margin-top: 180px;">
 		 <div class="modal-dialog" role="document">
    		<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel" style="margin-left: 30px; ">
        			<strong><?php echo $_SESSION['modalg']; ?></strong></h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
       		 </button>
      		</div>
      		<div class="modal-body">
      			<center><i class="fa fa-times-circle fa-4x" style="color: red;"></i></center>
			</div>
      		
		    </div>
		  </div>
		</div>
		<?php 
		unset($_SESSION['modalg']);
		endif
		 ?>
		<!-- tutup notif gagal-->			


			</div>
		</div>
	</div>

	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<script>
		$('#mymodal').modal('show')
	</script>

	<script>
		$(document).ready(function() {
    	$('#example1').DataTable();
		} );
	</script>

</body>
</html>