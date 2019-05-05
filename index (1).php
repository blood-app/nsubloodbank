<?php session_start(); session_destroy(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>NSU Blood BANK</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
</head>
<body  style="background-image: url('assets/bg.jpg'); background-repeat: no-repeat; background-size: cover;">
	<div class="container"><br>
		<div class="row">
			<div class="col-12">
				<h1 class="text-center"></h1>
				<h2 class="text-center">A project by <b>NSU CSE 327, Group 07</b></h2>
				<h3 class="text-center">for <b>NSU Blood BANK</b></h3>
<hr><hr>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header text-center"><b>Admin</b></div>
					<div class="card-body">
					<p class="card-text text-center"><a class="btn btn-secondary" href="admin">Admin Login</a></p>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header text-center"><b>Donor</b></div>
					<div class="card-body">
					<p class="card-text text-center"><a class="btn btn-secondary" href="donor">Existing Donor</a></p>	
					<p class="card-text text-center"><a class="btn btn-secondary" href="donor_register.php">Register as Donor</a></p>	
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header text-center"><b>Guest</b></div>
					<div class="card-body">
					<p class="card-text text-center"><a class="btn btn-secondary" href="guest">Search Blood</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>