<?php 
date_default_timezone_set("Asia/Dhaka");
require_once('assets/classes/MysqliDb.php'); 
$db = new MysqliDb ('192.3.31.98', 'rcybogur_blood', '352_XTRR_tht', 'rcybogur_blood');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_name ?> - Blood Management</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<!-- <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 col-sm-12">
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				  <div class="collapse navbar-collapse" id="navbarColor01">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item">
				        <a class="nav-link" href="new_donor.php">New Donor</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="donation_post.php">Donation</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="donor_search_by_group.php">Search(Group)</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="donor_search_by_ID.php">Search(ID)</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="valid_donor.php">Valid Donor</a>
				      </li>
				    </ul>
				  </div>
				</nav>
			</div>
			<div class="col-md-2"></div>
		</div> -->
		<br>
		<div class="row">
