<?php
  session_start();

  $UserID = $_SESSION['UserID'];
//   session_destroy();
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create User Account</title>
	<style>
	body {
		font-family: Merriweather,Arial, Helvetica, sans-serif;
		background-color: #212529;
		color: #fff;
	}

	* {
		box-sizing: border-box;
	}

	h1 {
		text-align: center;
		color: Tomato;
		font-size: 30px;
	}

	h2 {
		text-align: left;
		color: Tomato;
		font-size: 13px;
	}

	h3 {
		color: #fff;
		font-size: 13px;
	}

	label {
		color: Tomato;
	}

	p {
		font-family: Merriweather;
		font-size: 20px;
		color: #ddd;
	}

	input[type=checkbox] {
		margin: 0 5px 5px 10px;
		display: inline-block;
	}

	input[type=text], input[type=password] {
		width: 100%;
		padding: 15px;
		display: inline-block;
		border: none;
		background: #f1f1f1;
	}

	input[type=text]:focus, input[type=password]:focus {
		background-color: #ddd;
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
		width: 40%;
		background-color: #f05f40;
		margin: 30px 0 30px 10px;
		text-align: center;
		margin-left: 200px;
	}

	button[type=submit]:hover, button[type=submit]:active, button[type=submit]:focus {
		background-color: #ee4b28!important;
	}

	button[type=submit]:active, button[type=submit]:focus {
		box-shadow: 0 0 0 .2rem rgba(240,95,64,.5)!important;
	}

	.container {
		padding: 5% 20% 0 20%;
	}

	.login {
		padding: 15px 25px 5px 25px;
		width: 100%;
		background-color: rgba(255,255,255,0.1);
	}

	.hpage {
		margin: 70px;
		margin-top: 20px;
		margin-bottom: 0;
	}

	.navbar-brand {
		font-size: 20px;
		font-weight: 700;
		text-transform: uppercase;
		color: #b3b3b3;
		font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif
	}

	.navbar-brand:focus, .navbar-brand:hover {
		color: #fff;
	}

	@media screen and (max-width: 300px) {
		.cancelbtn, .signupbtn {
			width: 100%;
		}
	}
</style>
</head>
<body>
	<div class="hpage">
		<a href="index.html" class="navbar-brand" style="text-decoration: none">JBU.com</a>
	</div>

	<form action="create_user1.php" method="post">
		<div class="container">
			<h1>Create Online Banking Account</h1><br>

			<div class="login">
				<h2>UserID</h2>
				<h3><?php echo $UserID ?></h3>

				<h2>Password</h2>
				<input type="password" name="Password" id="Password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required></input>
				<h3><input type="checkbox" onclick="showPsw()">Show Password</input></h3>	

				<h2>Repeat Password</h2>
				<input type="password" name="rep_Password" id="rep_Password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required></input>
				<h3><input type="checkbox" onclick="showRepPsw()">Show Password</input></h3>	

				<h2>Account No.</h2>
				<input type="text" name="AccountNo" id="accno" placeholder="Enter Account No." required></input>

				<p id="demo"></p>

				<button type="submit" style="color: #fff text-decoration: none" >
					<h3>Create</h3>
				</button>
			</div>
		</div>
	</form>

	<script>
		function showPsw() {
			var x = document.getElementById("Password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}

		function showRepPsw() {
			var y = document.getElementById("rep_Password");
			if (y.type === "password") {
				y.type = "text";
			} else {
				y.type = "password";
			}
		}

		
	</script>
</body>
</html>