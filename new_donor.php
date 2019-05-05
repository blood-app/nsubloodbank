<?php require_once('config.php');

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

if (isset($_POST['add_new_donor'])) {
	$data = Array ("blood_group" => $_POST['donor_blood_group'],
	               "name" => $_POST['donor_name'],
	               "phone_number" => $_POST['donor_phone_number'],
	               "age" => $_POST['donor_age'],
	               "weight" => $_POST['donor_weight'],
	               "gender" => $_POST['gender'],
	               "location" =>  $_POST['donor_location'],
	               "comment" => $_POST['donor_comment'],
	               "last_donation_date" => '0000-00-00',
	               "pass" => $_POST['pass'],
	               "user_type" => 'donor'
	);
	$id = $db->insert ('donor_primary_info', $data);
	if($id){
		echo 'New Donor Created.';
	} else {
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
						<select name="donor_blood_group" class="form-control">
							<option value="A+">A+</option>
							<option value="AB+">AB+</option>
							<option value="B+">B+</option>
							<option value="O+">O+</option>
							<option value="A-">A-</option>
							<option value="AB-">AB-</option>
							<option value="B-">B-</option>
							<option value="O-">O-</option>
						</select><br>
						<input type="text" name="donor_name" placeholder="Donor Name" class="form-control"><br>
						<input type="text" name="donor_phone_number" placeholder="Donor Phone Number" class="form-control"><br>
						<input type="text" name="donor_age" placeholder="Donor Age" class="form-control"><br>
						<input type="text" name="donor_weight" placeholder="Donor Weight" class="form-control"><br>
						<select name="gender" class="form-control">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Other</option>
						</select><br>
						<input type="text" name="donor_location" placeholder="Donor Location" class="form-control"><br>
						<input type="text" name="donor_comment" placeholder="Additional Comment" class="form-control"><br>
						<input type="password" name="pass" placeholder="Password" class="form-control"><br>
						<input type="submit" class="form-control btn btn-primary" name="add_new_donor" value="Register">
					</form>
				</div>
				<div class="col-4"></div>
			</div>
	</div>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>