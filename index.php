<?php require_once('config.php');

session_start();

$logged_in = $_SESSION['logged_in'];

	if ($logged_in !== 1) {
			header("Location: /admin/login.php");
			exit();
	 } 

	 if (!$_SESSION['user_type'] === 'admin') {
	 	echo "You are not admin.";
	 	exit();
	 }  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Management</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container"><br>
		<div class="row">
			<div class="col-4">
				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Donor Management</div>
					<div class="card-body">
					<p class="card-text"><a class="btn btn-secondary" href="new_donor.php">Add New Donor</a></p>
					<p class="card-text"><a class="btn btn-secondary" href="delete_donor.php">Delete Donor</a></p>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Available Donors</div>
					<div class="card-body">
					<p class="card-text"><a class="btn btn-secondary" href="available_donors.php">All Available Donors</a></p>
					<p class="card-text"><a class="btn btn-secondary" href="donor_by_group.php">By Blood Group</a></p>
					<p class="card-text"><a class="btn btn-secondary" href="available_soon.php">Available Soon</a></p>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Donation Management</div>
					<div class="card-body">
					<p class="card-text"><a class="btn btn-secondary" href="blood_requests.php">See Blood Requests</a></p>
					<p class="card-text"><a class="btn btn-secondary" href="add_donation.php">Add Donation</a></p>
					</div>
				</div>
			</div>
		</div>
		<hr>
				<a class="btn btn-danger" href="http://bloodbogura.com/logout.php">Logout</a>
	</div>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>