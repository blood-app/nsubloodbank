<?php 
require_once('config.php'); 
	session_start();
	if (isset($_SESSION['logged_in'])) {
		header("Location: admin");
	 }
	if (isset($_POST['login'])) {
		$username	=	$_POST["username"];
		$password	=	$_POST["pass"];
		$user = $db->rawQuery ("select * from donor_primary_info where phone_number = $username AND pass = $password");

		if ($user) {
			$_SESSION['username'] = $user['phone_number'];
			$_SESSION['user_type'] = $user['user_type'];
			$_SESSION['logged_in'] = 1;
			header("Location: index.php");

		} else {
			echo "Login Failed.";
		}

	} else{
			echo "Login Failed.";
	}

?>

Login Failed. Please contact site admin. 