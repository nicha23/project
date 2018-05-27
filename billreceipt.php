<?php 
session_start();
$UserID = $_SESSION['UserID'];
$PaymentCode = $_SESSION['PaymentCode'];
$Amount = $_SESSION['Amount'];
$CompanyName = $_SESSION['CompanyName'];
$AccountNo = $_SESSION['AccountNo'] ;
$CurrentBalance = $_SESSION['CurrentBalance'] ;
$Note = $_SESSION['Note'] ;

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
	
	input[type=text], textarea {
		width: 560px;
		padding: 15px;
		display: inline-block;
		border: none;
		background: #ddd;
	}

	select {
		width: 590px;
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
		width: 200px;
		background-color: #34a534;
		margin: 60px 0 30px 10px;
		text-align: center;
		float: right;
	}

	button[type=submit]:hover, button[type=submit]:active, button[type=submit]:focus {
		background-color: #ee4b28!important;
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

	.sidenav>a[name="billpay"] {
		background-color: #3f474f;
		color: #000;
		font-weight: bold;
	}

	.billpay {
		padding: 30px 30px 30px 30px;
		background-color: #eee;
		width: 600px;
	}

	.main {
		margin-left: 280px; /* Same as the width of the sidenav */
		margin-right: 300px;
		margin-top: 50px; 
		font-size: 20px; /* Increased text to enable scrolling */
		padding: 0px 10px;
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
		<a href="billpay.php" name="billpay">Bill Payment</a>
		<a href="settings.php" name="settings">Settings</a>
		<a href="logout.php">Sign out</a>
	</div>
	
	<form action="myacc.php" method="post">
		<div class="main">
			<h1>Bill Receipt</h1>
			<div class="billpay">
				
				<strong>Account Number</strong><br>
				<?php echo $AccountNo ?><br><br>

				<strong>Payment Code</strong><br>
				<?php echo $PaymentCode ?><br><br>
				
				
				<strong>Amount </strong><br>
				<?php echo $Amount ?> baht<br><br>
				

				<strong>Company Name </strong><br>
				<?php echo $CompanyName ?><br><br>

				<strong>Current Balance </strong><br>
				<?php echo $CurrentBalance ?> baht<br><br>

				<strong>Note </strong><br>
				<?php echo $Note ?><br><br>


				<button type="submit" style="color: #fff text-decoration: none">
					<h4>Okay</h4>
				</button>
			</div>
		</div>
	</form>


	<script>
		function showAmount() {
			var x = document.getElementById("psw");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}


	</script>
</body>
</html> 
