<?php  
require_once('config.php');

session_start();

$logged_in = $_SESSION['logged_in'];

	if ($logged_in !== 1) {
			header("Location: /login.php");
			exit();
	 } 

	 if (!$_SESSION['user_type'] === 'admin') {
	 	echo "You are not admin.";
	 	exit();
	 } 

if (isset($_POST['submit'])) {
	$db->where('phone_number', $_POST['donor_id']);
		if($db->delete('donor_primary_info')){
			echo 'successfully deleted';
		}else {
			echo "Something went wrong.";
		}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Management</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container"><br>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4">
					<form method="post">
						<input type="text" name="donor_id" placeholder="Donor ID" class="form-control"><br>
						<input type="submit" class="form-control btn btn-danger" name="submit" value="Delete">
					</form>
				</div>
				<div class="col-4"></div>
			</div>
	</div>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>