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
	
	input[type=text], select, textarea {
		width: 100%;
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
		width: 20%;
		background-color: #34a534;
		margin: 30px 0 30px 10px;
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
	
	.sidenav>a[name="myacc"] {
		background-color: #3f474f;
		color: #000;
		font-weight: bold;
	}

	.left {
		width: 700px;
		height: 500px;
		background-color: #456;
	}

	.right {
		margin-left: 30px;
		width: 600px;	
		
	}

	.acc {
		height: 300px;
		background-color: #283;
	}

	.statement {
		height: 100px;
		background-color: #eee;
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
				
				<h2>eieiza</h2>
				
			</div>



			<div class="right">
				<div class="acc">
					<h2>hahaha</h2>
				</div>

				<div class="statement">
					<h2>ggez</h2>
				</div>
			</div>	
		</div>

	</div>

</body>
</html> 
