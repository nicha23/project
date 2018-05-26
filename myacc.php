<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body {
		font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
	}

	h1 {
		color: Tomato;
		font-size: 30px;
	}

	h2 {
		color: Tomato;
		font-size: 25px;
	}
	
	input[type=text], textarea {
		width: 200px;
		padding: 15px;
		display: inline-block;
		border: none;
		background: #ddd;
	}

	select {
		width: 250px;
		padding: 15px;
		display: inline-block;
		border: none;
		background: #ddd;
	}

	input[type=text]:focus, select:focus, textarea:focus {
		background-color: #b3b3b3;
		outline: none;
	}

	button[type=submit] {
		font-weight: 700;
		text-transform: uppercase;
		border-radius: 300px;
		border: none;
		font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
		cursor: pointer;
		color: #fff;
		padding: 1rem 2rem;
		display: inline-block;
		width: 100px;
		background-color: #34a534;
		margin: 30px 0 30px 10px;
		text-align: center;
		float: right;
	}

	button[type=submit]:hover, button[type=submit]:active, button[type=submit]:focus {
		background-color: #309630!important;
	}

	button[type=submit]:active, button[type=submit]:focus {
		box-shadow: 0 0 0 .2rem rgba(240,95,64,.5)!important;
	}

	.sidenav {
		height: 100%;
		width: 250px;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #212529;
		overflow-x: hidden;
		padding-top: 200px;
	}

	.sidenav a {
		padding: 6px 8px 6px 16px;
		text-decoration: none;
		font-size: 20px;
		color: #ddd;
		display: block;
	}

	.sidenav a:hover {
		color: Tomato;
	}

	.sidenav a:focus, .sidenav a:active {
		background-color: #3f474f;
		color: #000;
		font-weight: bold; 
	}

	.sidenav>a[name="myacc"] {
		background-color: #3f474f;
		color: #000;
		font-weight: bold;
	}

	.left {
		width: 700px;
		height: 500px;
		background-color: #eee;
	}

	.myinfo {
		padding: 30px;
		height: 300px;
	}

	.right {
		margin-left: 30px;
		width: 600px;	

	}

	.acc {
		padding: 30px;
		height: 300px;
		background-color: #eee;
	}

	.statement {
		margin-top: 30px;
		padding: 30px;
		height: 100px;
		background-color: #eee;
	}

	.addacc {
		cursor: pointer;
	}

	.accbar {
		background-color: #eee;
		padding: 10px 10px 10px 10px;
	}

	.main {
		margin-left: 280px; /* Same as the width of the sidenav */
		margin-right: 100px;
		margin-top: 50px; 
		font-size: 20px; /* Increased text to enable scrolling */
		padding: 0px 10px;
	}

	.container {
		display: flex;
		flex-wrap: nowrap;
	}

	@media screen and (max-height: 450px) {
		.sidenav {
			padding-top: 15px;
		}
		.sidenav a {
			font-size: 18px;
		}
	}
</style>
<?php 
session_start();
$UserID = $_SESSION['UserID'];
include_once 'phpConnect/connect.php';
?>
</head>
<body>
	<div class="sidenav">
		<div style="padding-left: 16px;">
			<h2>JBU <br> Online Banking</h2>
		</div>
		<a href="myacc.php" name="myacc">My Account</a>
		<a href="transfer.php" name="transfer">Transfer</a>
		<a href="billpay.php" name="billpay">Bill Payment</a>
		<a href="settings.php" name="settings">Settings</a>
		<a href="#contact">Sign out</a>
	</div>

	<div class="main">
		<h1>My Account</h1>
		<div class="container">
			<div class="left">
				<div class="myinfo">
					<?php
					$sql_myinfo = "SELECT UserID,Name,DateofBirth,Gender,Nationality,HighestEducation,MaritalStatus,ResidentialStatus,Occupation,Email,TelNo,MobileNo,Address,ZIPCode FROM userinfo WHERE UserID='$UserID'";     
					$query_myinfo = mysqli_query($conn, $sql_myinfo);
					$result_myinfo = mysqli_fetch_assoc($query_myinfo);
					?>

					<strong>UserID</strong>
					<?php echo $UserID ?><br>
					<strong>Name </strong>
					<?php echo $result_myinfo['Name']; ?><br>
					<strong>Date of Birth</strong>
					<?php echo $result_myinfo['DateofBirth'] ?><br>
					<strong>Gender</strong>
					<?php echo $result_myinfo['Gender'] ?><br>
					<strong>Nationality</strong>
					<?php echo $result_myinfo['Nationality'] ?><br>
					<strong>Highest Education</strong>
					<?php echo $result_myinfo['HighestEducation'] ?><br>
					<strong>Marital Status</strong>
					<?php echo $result_myinfo['MaritalStatus'] ?><br>
					<strong>Residential Status</strong>
					<?php echo $result_myinfo['ResidentialStatus'] ?><br>
					<strong>Occupation</strong>
					<?php echo $result_myinfo['Occupation'] ?><br>
					<strong>Email</strong>
					<?php echo $result_myinfo['Email'] ?><br>
					<strong>TelNo</strong>
					<?php echo $result_myinfo['TelNo'] ?><br>
					<strong>Mobile No.</strong>
					<?php echo $result_myinfo['MobileNo'] ?><br>
					<strong>Address</strong>
					<?php echo $result_myinfo['Address'] ?><br>
					<strong>ZIPCode</strong>
					<?php echo $result_myinfo['ZIPCode'] ?><br>
				</div>	
			</div>

			<div class="right">
				<div class="acc">
					<strong>Your Account(s)</strong> <br>

					<?php
					$sql_acc = "SELECT userinfo.IdentificationNo, account.AccountNo
					FROM userinfo
					INNER JOIN account ON userinfo.IdentificationNo=account.IdentificationNo WHERE userinfo.UserID='$UserID';";     
					$query_acc = mysqli_query($conn, $sql_acc);
					$result_acc = mysqli_fetch_assoc($query_acc);
					?>

					<?php echo $result_acc['AccountNo'] ?><br>

					<div class="addacc">
						<img src="img/png/add.png" alt="add" width="17px" height="17px"></img> Add account
					</div>

					<div class="accbar">
						<form action="myacc1.php" method="post">
							Account No. <input type="text"></input>

							<button type="submit" style="color: #fff text-decoration: none"><h3>Add</h3></button>
						</form>
					</div>
				</div>


				<div class="statement">
					<strong>Latest Statement </strong>
				</div>
			</div>	
		</div>

	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".accbar").hide();
			$(".addacc").click(function(){
				$(".accbar").toggle();
			});
		});
	</script>
</body>
</html> 
