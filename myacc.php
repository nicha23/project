<?php 
session_start();
$UserID = $_SESSION['UserID'];
include_once 'phpConnect/connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JBU Online Banking System</title>
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

	a {
		text-decoration: none;
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
		display: block;
		width: 100px;
		background-color: #34a534;
		text-align: center;
		float: right;
		padding: 13px;
	}

	button[type=submit]:hover, button[type=submit]:active, button[type=submit]:focus {
		background-color: #309630!important;
	}

	button[type=submit]:active, button[type=submit]:focus {
		box-shadow: 0 0 0 .2rem rgba(67,209,54,.5)!important;
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
		width: 600px;
		background-color: #eee;
	}

	.myinfo {
		padding: 30px;
		height: auto;
	}

	.right {
		margin-left: 30px;
		width: 600px;	
	}

	.acc {
		padding: 30px;
		height: auto;
		background-color: #eee;
	}
	
	.myacc {
		padding: 20px;
		background-color: #777;
		border-radius: 20px; 
		color: #fff;
		cursor: pointer;
	}

	.addacc {
		cursor: pointer;
	}

	.addacc:hover {
		cursor: pointer;
		color: Tomato;
	}

	.accbar {
		background-color: #eee;
		padding: 5px 0px 5px 5px;
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

</head>
<body>
	<div class="sidenav">
		<div style="padding-left: 16px;">
			<h2>JBU <br> Online Banking</h2>
		</div>
		<a href="myacc.php" name="myacc">My Account</a>
		<a href="transfer.php" name="transfer">Transfer</a>
		<a href="beforepay.php" name="billpay">Bill Payment</a>
		<a href="settings.php" name="settings">Settings</a>
		<a href="logout.php">Sign out</a>
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
					<?php echo $result_myinfo['UserID']; ?><br><br>
					<strong>Name </strong><br>
					<?php echo $result_myinfo['Name']; ?><br>
					<strong>Date of Birth</strong><br>
					<?php echo $result_myinfo['DateofBirth'] ?><br>
					<strong>Gender</strong><br>
					<?php echo $result_myinfo['Gender'] ?><br>
					<strong>Nationality</strong><br>
					<?php echo $result_myinfo['Nationality'] ?><br>
					<strong>Highest Education</strong><br>
					<?php echo $result_myinfo['HighestEducation'] ?><br>
					<strong>Marital Status</strong><br>
					<?php echo $result_myinfo['MaritalStatus'] ?><br>
					<strong>Residential Status</strong><br>
					<?php echo $result_myinfo['ResidentialStatus'] ?><br>
					<strong>Occupation</strong><br>
					<?php echo $result_myinfo['Occupation'] ?><br>
					<strong>Email</strong><br>
					<?php echo $result_myinfo['Email'] ?><br>
					<strong>TelNo</strong><br>
					<?php echo $result_myinfo['TelNo'] ?><br>
					<strong>Mobile No.</strong><br>
					<?php echo $result_myinfo['MobileNo'] ?><br>
					<strong>Address</strong><br>
					<?php echo $result_myinfo['Address'] ?><br>
					<strong>ZIPCode</strong><br>
					<?php echo $result_myinfo['ZIPCode'] ?><br>
				</div>	
			</div>

			<div class="right">
				<div class="acc">
					<strong>Your Account(s)</strong>
					<div class="addacc">
						<img src="img/png/add.png" alt="add" width="17px" height="17px"></img> Add account
					</div>
					<div class="accbar">
						<form action="myacc1.php" method="post">
							Account No. <input type="text" name = 'NewAccountNo'></input>
							<button type="submit" id="add" style="color: #fff text-decoration: none">Add</button>
						</form>
					</div>
					
					<?php $sql_acc1 = "SELECT typeaccount.TypeAccount, userid.AccountNo, account.Balance 
					FROM userid 
					INNER JOIN account ON  userid.AccountNo=account.AccountNo
					INNER JOIN typeaccount ON account.TypeAccountID=typeaccount.TypeAccountID 
					WHERE userid.UserID='$UserID'";
					$query_acc1 = mysqli_query($conn, $sql_acc1);
							//$result_acc1 = mysqli_fetch_assoc($query_acc1);
					$sql_acc2 = "SELECT userid.AccountNo,branchinfo.BranchName FROM userid 
					INNER JOIN account ON  userid.AccountNo=account.AccountNo
					INNER JOIN branchinfo ON account.BranchID=branchinfo.BranchID 
					WHERE userid.UserID='$UserID'"; 
					$query_acc2 = mysqli_query($conn, $sql_acc2);
							//$result_acc2 = mysqli_fetch_assoc($query_acc2);
					$test = 1;
					while(($result_acc1 = mysqli_fetch_assoc($query_acc1))&&($result_acc2 = mysqli_fetch_assoc($query_acc2))){
						
						echo '<a href="statement.php?check=' . $result_acc1['AccountNo'] . '"><div class="myacc">	<div class="accinfobar">  '	;
						echo "<strong>Account Number</strong>";
						echo " : ".$result_acc1['AccountNo'];
						echo "<br><strong>Balance</strong>";
						echo " : ".$result_acc1['Balance'];
						echo "<br><strong>Type Account</strong>";
						echo " : ".$result_acc1['TypeAccount'];
						echo "<br><strong>Branch</strong>";
						echo " : ".$result_acc2['BranchName'];

						echo "</div></div></a><br>";
						$test = $test+1;
					}
					?>
							<!-- <strong>Acc No.</strong>
							<?php echo $result_acc1['AccountNo'] ?><br>
							<strong>Balance</strong>
							<?php echo $result_acc1['Balance'] ?><br>
							<strong>Type Account</strong>
							<?php echo $result_acc1['TypeAccount'] ?><br>

							 <?php $sql_acc2 = "SELECT userid.AccountNo,branchinfo.BranchName FROM userid 
												INNER JOIN account ON  userid.AccountNo=account.AccountNo
												INNER JOIN branchinfo ON account.BranchID=branchinfo.BranchID 
												WHERE userid.UserID='$UserID'"; 
							$query_acc2 = mysqli_query($conn, $sql_acc2);
							$result_acc2 = mysqli_fetch_assoc($query_acc2);
							?> 
							<strong>Branch</strong>
							<?php echo $result_acc2['BranchName'] ?><br> -->
							<div class="newacc" id="newacc">
								
							</div>
						<!-- </div>
						</div>			 -->
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
