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
						$db->where ("status", "New");
						$cols = Array ("request_id", "blood_group", "place", "contact", "status");
						
						$users = $db->get ("requests", null, $cols);
							echo "
				<table cellpadding='2' class='table table-bordered'>
					<tr>
						<th>Request ID</th>
						<th>Blood Group</th>
						<th>Location</th>
						<th>Contact Number</th>
						<th>Status</th>
					</tr>";
						if ($db->count > 0)
						    foreach ($users as $user) { 
						        echo "
					<tr>
						<td>" . $user['request_id'] . "</td>
						<td>" . $user['blood_group'] . "</td>
						<td>" . $user['place'] . "</td>
						<td>" . $user['contact'] . "</td>
						<td>" . $user['status'] . "</td>
					</tr>";

						    }
						    echo "
				</table>";
					
				 ?>
			</div>
</div>
	</div>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>