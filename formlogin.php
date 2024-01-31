<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="style1.css">
	
</head>
<body>
	
	<div class="container-sm">
		<div class="row">
			<div class="col kolom1">
			</div>
		</div>
		<div class="row">
			<div class="col kolom2"></div>
			<div class="col" style="padding: 50px;">
				<div class="card" style="width: 25rem;">
					<img src="IMG/p1.png" width="100" height="100" style="background-color: white; border:8px solid; border-color: white; border-radius: 50% !important; margin-left: 150px; margin-top: -50px; " class="rounded" alt="ini gambar">
					
					<div class="text-center">
					</div>
				  <div class="card-body" style="">
				    <h5 class="card-title text-center">Silahkan Login</h5>

					<!-- bagian form login -->
				    <form style="text-align: center;" action="proseslogin.php" method="post">
						  <fieldset>
						    
						    <div class="form-group">
						     <div class="input-group mb-3">
						      <div class="input-group-prepend" >
						        <span class="input-group-text" style="border-radius: 25px 0px 0px 25px;"><i class="fa fa-user"></i></span>
						      
						    </div>
						      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" style="border-radius:0px 25px 25px 0px;" name="user1">
						      </div>
						    </div>
						    <div class="form-group">
						      <div class="input-group mb-3">
						      <div class="input-group-prepend" >
						        <span class="input-group-text" style="border-radius: 25px 0px 0px 25px;"><i class="fa fa-lock"></i></span>
						      </div>
						    
						      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="border-radius: 0px 25px 25px 0px;" name="pass1">
						  		</div>
						    </div>
						</fieldset>
						<!-- bagian alert notification -->
						<?php if (isset($_SESSION['alert'])) : ?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						  <strong><?php echo $_SESSION['alert']; ?></strong>
						</div>
						<?php 
							unset($_SESSION['alert']);
						endif
						 ?>
						<!-- tutup alert -->
						<input type="submit" name="submit" class="masuk" value="Login"  >
						<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 20px; width: 195px; border-radius:  25px">Registrasi</button>
						<p>forget <a href="#">username / password ?</a></p>
						</form>
						<!-- tutup form -->

		<!-- modal regis-->
		<div class="modal fade mod" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content mdl">
		      <div class="modal-header" style="background-color: #1282b2; color: white;">
		        <h5 class="modal-title" id="exampleModalLabel" ><i class="fa fa-user-plus fa-2x" style="color: yellow; width: 60px;"></i>Form Registrasi</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="prosesregis.php" method="post">
				  <fieldset>
				    <div class="form-group">
				    	<div class="input-group mb-3">
					      <div class="input-group-prepend" >
					        <span class="input-group-text" style="border-radius: 25px 0px 0px 25px; width: 40px;"><i class="fa fa-user"></i></span>
					      </div>
				      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="userreg" style="border-radius: 0px 25px 25px 0px;">
				      </div>
				    </div>

				    <div class="form-group">
				    <div class="input-group mb-3">
				      <div class="input-group-prepend" >
				        <span class="input-group-text" style="border-radius: 25px 0px 0px 25px; width: 40px;"><i class="fa fa-envelope"></i></span>
				      </div>
				      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" name="emailreg" style="border-radius: 0px 25px 25px 0px;">
				    </div>
				    </div>

				    <div class="form-group">
				    <div class="input-group mb-3">
				      <div class="input-group-prepend" >
				        <span class="input-group-text" style="border-radius: 25px 0px 0px 25px; width: 40px;"><i class="fa fa-unlock-alt"></i></span>
				      </div>
				      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passreg1" style="border-radius: 0px 25px 25px 0px;">
				    </div>
					</div>

				    <div class="form-group" style="margin-bottom: 20px;">
				    <div class="input-group mb-3">
				      <div class="input-group-prepend" >
				        <span class="input-group-text" style="border-radius: 25px 0px 0px 25px; width: 40px;"><i class="fa fa-lock"></i></span>
				      </div>
				      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-Password" name="passreg2" style="border-radius: 0px 25px 25px 0px;">
				    </div>
					</div>

				</fieldset>
				<center>
				<input type="submit" class="masuk" value="Simpan"  >
				<p>Back to <a href="formlogin.php">Login</a></p>
				</center>
				</form>

		      </div>
		    </div>
		  </div>
		</div>
		<!--tutup regis-->


				  </div>
				</div>
			</div>
			<div class="col"></div>
		</div>
		<div class="row">
			<div class="col kolom3"></div>
		</div>
	</div>


	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	
</body>
</html>