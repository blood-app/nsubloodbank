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

			<div class="col-sm-12">
				<?php 
					if (isset($_POST['search_db'])) {
						$db->where ("blood_group", $_POST['blood_group']);
						$cols = Array ("phone_number", "blood_group", "name", "age", "weight", "location", "comment", "gender", "last_donation_date");
						
						$users = $db->get ("donor_primary_info", null, $cols);
							echo "
				<table cellpadding='2' class='table table-bordered'>
					<tr>
						<th>BG</th>
						<th>Name</th>
						<th>Age</th>
						<th>Weight</th>
						<th>Phone Number / ID</th>
						<th>Location</th>
						<th>Gender</th>
						<th>Comment</th>
						<th>Last Donation Date</th>
					</tr>";
						if ($db->count > 0)
						    foreach ($users as $user) { 
						        echo "
					<tr>
						<td>" . $user['blood_group'] . "</td>
						<td>" . $user['name'] . "</td>
						<td>" . $user['age'] . "</td>
						<td>" . $user['weight'] . "</td>
						<td>" . $user['phone_number'] . "</td>
						<td>" . $user['location'] . "</td>
						<td>" . $user['gender'] . "</td>
						<td>" . $user['comment'] . "</td>
						<td>" . $user['last_donation_date'] . "</td>
					</tr>";

						    }
						    echo "
				</table>";
					}
				 ?>
				<form method="post">
					<select name="blood_group" class="form-control">
						<option value="A+">A+</option>
						<option value="AB+">AB+</option>
						<option value="B+">B+</option>
						<option value="O+">O+</option>
						<option value="A-">A-</option>
						<option value="AB-">AB-</option>
						<option value="B-">B-</option>
						<option value="O-">O-</option>
					</select>
					<br>
					<!-- Todo: Picture Upload option -->
					<input type="submit" class="form-control btn btn-primary" name="search_db" value="Search Database">
				</form>
			</div>
</div>
	</div>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>