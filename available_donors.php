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
				<div class="col-sm-12">
					<p>Server Time: <b><?php echo date('d M, Y (D): h:i:s A'); ?></b></p></p>

					<?php 

					// $date = '2012-11-08';
					$date = date('Y-m-d');
					$new_date = date( 'Y-m-d', strtotime( $date . ' -90 day' ) );
					$ninety_days_date = "'" . $new_date . "'";
					// $today_date = $db->rawQueryOne ("SELECT DATEDIFF(NOW(), '2018-10-05') as datediff");
					// echo $today_date['datediff'];
					$users = $db->rawQuery ("select * from donor_primary_info where last_donation_date<=$ninety_days_date");
					// echo $user['phone_number'];
					// echo "DATEDIFF()"
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
					 ?>

				</div>
			</div>
	</div>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>