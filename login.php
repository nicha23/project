<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log in</title>
	<style>
	body {
		font-family: Merriweather,Arial, Helvetica, sans-serif;
		background-color: #fff;
		color: #212529;
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
		font-size: 15px;
	}

	h3 {
		color: #212529;
		font-size: 13px;
	}

	h4 {
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
		width: 50%;
		padding: 15px;
		display: inline-block;
		border: none;
		background: #ddd;
	}

	input[type=text]:focus, input[type=password]:focus {
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
		width: 30%;
		background-color: #f05f40;
		margin: 30px 0 30px 10px;
		text-align: center;
		margin-left: 70px;
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
		background-color: rgba(0,0,0,0.05);
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
		color: Tomato;
	}

	img {
		width: 300px;
		float: left;
		margin: 30px;
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
	<form action="login.php" method="POST">
		<div class="container">
			<h1>Login</h1><br>

			<img src="img/png/man.png" alt="profilepic">

			<div class="login">
				<h2>UserID</h2>
				<input type="text" name="UserID" placeholder="Cherprang48" required></input>

				<h2>Password</h2>
				<input type="Password" name="Password" id="Password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required></input>
				<h3><input type="checkbox" onclick="showPsw()">Show Password</input></h3>	

				<button type="submit" style="color: #fff text-decoration: none" onclick="checkPsw()">
					<h4>Login</h4>
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
	</script>
</body>
</html>