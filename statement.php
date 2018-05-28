<?php 
session_start();
$UserID = $_SESSION['UserID'];
include_once 'phpConnect/connect.php';
// $xx = intval($_GET['check']);
$account = $_GET['check'];
$_SESSION['AccountNo'] = $account;
// $xx = mysqli_real_escape_string($con,$_GET['check']);
?>

<script>

var i = "<?php echo $xx; ?>";
console.log(i);
</script>

<!DOCTYPE html>
<html lang="en">
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
		display: block;
		width: 200px;
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

	.statement {
		padding: 30px 30px 30px 30px;
		background-color: #eee;
		width: 1100px;
	}

	.accbar {
		background-color: #555;
		padding: 5px 5px 5px 5px;
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
	<div class="main">
		<h1>Statement</h1>
		<div class="statement">
			
			Please select month to see your monthly statement. <br>
			
			<form action="test.php" method="post">
				<select name="month" id="month">
					<option value="" selected>-- select month --</option>
					<option value="1" >January</option>
					<option value="2" >February</option>
					<option value="3" >March</option>
					<option value="4" >April</option>
					<option value="5" >May</option>
				</select>
				<button type="submit" id="select" style="color: #fff text-decoration: none">
					<h4>Select</h4>
				</button>
			</form>
			

			<script>
				function myfn() {
					var x = document.getElementById("month").value;
					if (x === "January") {
						document.getElementById("demo").innerHTML = "<?php echo $result1['total']; ?>";
					}
					else if (x === "February") {
						document.getElementById("demo").innerHTML = "55";
					}
				}
			</script>

			<div class="statementbar">
				<h1 id="demo"></h1>






			</div>
		</div>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".statementbar").hide();
			$("#select").click(function(){
				$(".statementbar").show();
			});
		});
	</script>
</body>
</html>







