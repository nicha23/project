<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign up</title>
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
		font-size: 50px;
	}

	h2 {
		text-align: center;
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

	input[type=text], input[type=date], select {
		width: 100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
	}

	input[type=radio] {
		margin: 5px 5px 10px 10px;
		display: inline-block;
		border: none;
	}

	input[type=text]:focus, input[type=date]:focus, select:focus {
		background-color: #ddd;
		outline: none;
	}

	hr {
		text-align: center;
		max-width: 50px;
		border-width: 3px;
		border-color: #f05f40;
		margin-top: 30px;
		margin-bottom: 30px;
	}

	button[type=reset], button[type=submit] {
		font-weight: 700;
		text-transform: uppercase;
		border: none;
		border-radius: 300px;
		font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
		cursor: pointer;
		color: #fff;
		padding: 1rem 2rem;
		display: inline-block;
		width: 25%;
		float: right;
	} 

	button[type=reset] {
		text-decoration: none;
		background-color: #919191;
		margin: 30px 0 30px 0;
	}

	button[type=reset]:hover, button[type=reset]:active, input[type=reset]:focus {
		background-color: #6f6f6f!important;
	}

	button[type=reset]:active, button[type=reset]:focus {
		box-shadow: 0 0 0 .2rem rgba(145,145,145,.5)!important;
	}

	button[type=submit] {
		text-decoration: none;
		background-color: #f05f40;
		margin: 30px 0 30px 10px;
	}

	button[type=submit]:hover, button[type=submit]:active, button[type=submit]:focus {
		background-color: #ee4b28!important;
	}

	button[type=submit]:active, button[type=submit]:focus {
		box-shadow: 0 0 0 .2rem rgba(240,95,64,.5)!important;
	}

	.container {
		padding: 0 10% 0 10%;
	}

	.clearfix::after {
		content: "";
		clear: both;
		display: table;
		overflow: auto;
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
	
	/* Change styles for cancel button and signup button on extra small screens */
	@media screen and (max-width: 300px) {
		.cancelbtn, .signupbtn {
			width: 100%;
		}
	}
</style>
</head>
<body>
	<form action="signup1.php" method="post">
		<div class="hpage">
			<a href="index.html" class="navbar-brand" style="text-decoration: none">JBU.com</a>
		</div>
		
		<div class="container">
			
			<h1>SIGN UP</h1>
			<p style="text-align: center">Please fill in this form to create an account.</p>
			<hr>

			<label for="userid"><b>UserID</b></label>
			<input type="text" placeholder="Enter Username" name="UserID" required>

			<label for="name" ><b>Name</b></label>
			<input type="text" placeholder="Enter Your Name" name="Name" id= "Name" required>

			<label for="idenid"><b>Identification ID</b></label>
			<input type="text" placeholder="Enter Identification ID" name="IdentificationNo" required>

			<label for="passno"><b>Passport No.</b></label>
			<input type="text" placeholder="Enter Passport No." name="PassportNo">

			<label for="dob"><b>Date of birth</b></label>
			<input type="date" name="DateofBirth" max="2018-05-05" min="1980-01-01" required>

			<label for="gender"><b>Gender</b></label><br>
			<input type="radio" name="Gender" value="male" checked> Male <br>
			<input type="radio" name="Gender" value="female"> Female <br>
			<input type="radio" name="Gender" value="other"> Other<br><br>

			<label for="nationality"><b>Nationality</b></label>
			<input type="text" placeholder="Enter Nationality" name="Nationality" required>

			<label for="hiedu"><b>Highest Education</b></label><br>

			<select name="HighestEducation" required>

				<option value="" selected="selected" disabled="disabled">-- select one --</option>
				<option value="unspecified">Unspecified</option>
				<option value="primary">Primary education</option>
				<option value="secondary">Secondary education/High school</option>
				<option value="bachelor">Bachelor's degree</option>
				<option value="master">Master's degree</option>
				<option value="doctorate">Doctorate or higher</option>
			</select>

			<label for="marital"><b>MaritalStatus</b></label><br>
			<input type="radio" name="MaritalStatus" value="single" checked> Single <br>		
			<input type="radio" name="MaritalStatus" value="married"> Married <br>
			<input type="radio" name="MaritalStatus" value="divorce"> Divorce<br><br>

			<label for="resident"><b>ResidentalStatus</b></label><br>
			<input type="radio" name="ResidentialStatus" value="home" checked> Home <br>
			<input type="radio" name="ResidentialStatus" value="townhouse"> Townhouse <br>
			<input type="radio" name="ResidentialStatus" value="condo"> Condo/Apartment <br>
			<input type="radio" name="ResidentialStatus" value="other"> Etc. <input type="text" name="resident" placeholder="Enter Your Resident" style="width: 25%"><br>

			<label for="occupation"><b>Occupation</b></label>
			<input type="text" placeholder="Enter Occupation" name="Occupation">

			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="Email" required>

			<label for="telno"><b>Telephone No.</b></label>
			<input type="text" placeholder="Enter Telephone No." name="TelNo">

			<label for="mobileno"><b>Mobile No.</b></label>
			<input type="text" placeholder="Enter Mobile No." name="MobileNo" required>

			<label for="address"><b>Address</b></label>
			<input type="text" placeholder="Enter Address" name="Address" required>

			<label for="zip"><b>ZIP Code</b></label>
			<input type="text" placeholder="Enter ZIP Code" name="ZIPCode" required>
			
			<button type="submit"><h2>Sign Up</h2></button>
			<button type="reset"><h2>Cancel</h2></input>			
		</div>
	</form>
</body>
</html>