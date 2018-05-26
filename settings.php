<?php 
session_start();
$UserID = $_SESSION['UserID'];
include_once 'phpConnect/connect.php';
?>

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

	h3 {
		color: #666;
		font-size: 20px;
	}

	h4 {
		color: #777;
		font-size: 13px;
	}
	
	input[type=text], input[type=password], select, textarea {
		width: 460px;
		padding: 15px;
		display: inline-block;
		border: none;
		background: #ddd;
	}

	input[type=text]:focus, input[type=password]:focus, select:focus, textarea:focus {
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
		margin: 50px 0 100px 10px;
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

	.sidenav>a[name="settings"] {
		background-color: #3f474f;
		color: #000;
		font-weight: bold;
	}

	.psw, .user {
		padding-left: 30px;
	}

	.pswbar {
		background-color: #eee;
		width: 500px;
		padding: 10px 30px 15px 30px;
		margin-bottom: 180px;
	}

	.userbar {
		background-color: #eee;
		width: 500px;
		padding: 10px 30px 30px 30px;
	}
	
	.changepsw>h3:hover, .changeuser>h3:hover {
		color: #212529;
		cursor: pointer;
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$(".pswbar").hide();
		$(".changepsw").click(function(){
			$(".pswbar").toggle();
		});
	});
	$(document).ready(function(){
		$(".userbar").hide();
		$(".changeuser").click(function(){
			$(".userbar").toggle();
		});
	});
</script>
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

	<form action="settings1.php" method="post">
		<div class="main">
			<h1>Settings</h1>

			<div class="psw">
				<div class="changepsw">
					<h3>&#9679; Change Password</h3>
				</div>
				<div class="pswbar">
					<p>Input your current password</p>
					<input type="password" id="psw" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"></input>
					<h4><input type="checkbox" onclick="showPsw()">Show Password</input></h4>	
					<p>Input your new password</p>
					<input type="password" id="newpsw" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"></input>
					<h4><input type="checkbox" onclick="showNewPsw()">Show Password</input></h4>
					<button type="submit" style="color: #fff text-decoration: none">
					<h4 style="color: #fff;">Okay</h4>
				</button>	
				</div>
				

			</div>

			<div class="user">
				<div class="changeuser">
					<h3>&#9679; Change UserID</h3>
				</div>
				<div class="userbar">
					<p>Input your new UserID</p>
					<input type="text" name="user" placeholder="Cherprang48"></input>
					<button type="submit" style="color: #fff text-decoration: none">
					<h4 style="color: #fff;">Okay</h4>
				</button>
				</div>

			</div>

		</div>

	</form>
	
	<script>
		function showPsw() {
			var x = document.getElementById("psw");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}

		function showNewPsw() {
			var y = document.getElementById("newpsw");
			if (y.type === "password") {
				y.type = "text";
			} else {
				y.type = "password";
			}
		}		
	</script>

</body>
</html> 