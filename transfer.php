<?php 
session_start();
$UserID = $_SESSION['UserID'];
include_once 'phpConnect/connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transfer</title>
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
		margin: 30px 0 30px 10px;
		text-align: center;
		float: right;
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

	.sidenav>a[name="transfer"] {
		background-color: #3f474f;
		color: #000;
		font-weight: bold;
	}

	.transfer {
		padding: 30px 30px 0px 30px;
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
		<a href="beforepay.php" name="billpay">Bill Payment</a>
		<a href="settings.php" name="settings">Settings</a>
		<a href="logout.php">Sign out</a>
	</div>
	<form action="transfer1.php" method="post">
		<div class="main">
			<h1>Transfer</h1>
			<div class="transfer">
				Select your account <br>
				<select name="AccountNo" required>
					<option value="" selected="selected" disabled="disabled">-- select your account --</option>
					<?php
					$sql_acc = "SELECT AccountNo
					FROM userid WHERE UserID='$UserID';";     
					if ($result_acc = mysqli_query($conn, $sql_acc)) {
						while ($row_acc = mysqli_fetch_array($result_acc)) {
						?>
							<option value="<?php echo $row_acc['AccountNo'] ?>"><?php echo $row_acc['AccountNo']?>
								<?php
							}
							$result_acc->close();
						}
						?>
					</select><br><br>

					Select Receiever's Bank <br>
					<select name="BankID" required>
						<option value="" selected="selected" disabled="disabled">-- select bank --</option>
						<?php
						$sql = "SELECT BankID,BankName FROM bank";
						if ($result = mysqli_query($conn, $sql)) {
							while ($row = mysqli_fetch_array($result)) {
								?>
								<option value="<?php echo $row['BankID']?>"><?php echo $row['BankName']?>
									<?php
								}
								$result->close();
							}
							?>
						</select><br><br>

						Receiver's Account No. <br>
						<input type="text" name="ReceiveAccountNo" required></input><br><br>

						Amount <br>
						<input type="text" name="Amount" required></input><br><br>

						Note <br>
						<textarea name="Note" rows="4" cols="50" placeholder="Note about your transaction..."></textarea><br><br>

						<button type="submit" style="color: #fff text-decoration: none">
							<h4>Okay</h4>
						</button>
					</div>
				</div>
			</form>

		</body>
		</html> 