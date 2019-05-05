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
	 } ?>
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
					<?php 
					// Create function to check if ID exists!

					//Check: Button Pressed
					if (isset($_POST['add_new_donor'])) {
						//Check: If ID exists.
						$db->where ("phone_number", $_POST['donor_phone_number']);
						$user = $db->getOne ("donor_primary_info");
						if ($user) {
							// Id exists.
							$data = Array ("donor_id" => $_POST['donor_phone_number'],
								               "location" => $_POST['donation_location'],
								);
							$id = $db->insert ('donation_info', $data);

							// Insert Data into database.
							if($id) {

							//
							echo $date = date('Y-m-d');
							$data = Array (
								"last_donation_date" => $date
							);
							$db->where ('phone_number', $_POST['donor_phone_number']);
							if ($db->update ('donor_primary_info', $data))
							    echo $db->count . ' records were updated';
							else
							    echo 'update failed: ' . $db->getLastError();

							    // If successful
							    echo "<div class='alert alert-dismissible alert-success'>
							    		<p>
							    		New Donation Created for ID: " . $_POST['donor_phone_number'] . "
							    		</p>
							    	  </div>"; } else {
							    // If failed
					    	  	echo "<div class='alert alert-dismissible alert-danger'>
					    		<p>
					    		Unable to create donation for ID: " . $_POST['donor_phone_number'] . "
					    		</p>
					    	  </div>"; 
							    	  }
							
						} else {
							//If ID does not exist. 
							echo "<div class='alert alert-dismissible alert-danger'>
					    		<p>
					    		ID: " . $_POST['donor_phone_number'] . " Does not exist.
					    		</p>
					    	  </div>";
						}


					} ?>
					<form method="post">
						<input type="text" class="form-control" name="donor_phone_number" placeholder="Donor Phone Number"><br>
						<input type="text" class="form-control" name="donation_location" placeholder="Location"><br>
						<!-- Todo: Picture Upload option -->
						<input type="submit" class="form-control btn btn-primary" name="add_new_donor" value="Add Record">
					</form>
				</div>
				<div class="col-4"></div>
			</div>
	</div>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>