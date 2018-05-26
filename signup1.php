<?php
$con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno()) 
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// escape variables for security
$Name = mysqli_real_escape_string($con, $_POST['Name']);
$IdentificationNo = mysqli_real_escape_string($con, $_POST['IdentificationNo']);
$PassportNo = mysqli_real_escape_string($con, $_POST['PassportNo']);
$DateofBirth = mysqli_real_escape_string($con, $_POST['DateofBirth']);
$Gender = mysqli_real_escape_string($con, $_POST['Gender']);
$Nationality = mysqli_real_escape_string($con, $_POST['Nationality']);
$HighestEducation = mysqli_real_escape_string($con, $_POST['HighestEducation']);
$MaritalStatus = mysqli_real_escape_string($con, $_POST['MaritalStatus']);
$ResidentialStatus = mysqli_real_escape_string($con, $_POST['ResidentialStatus']);
$Occupation = mysqli_real_escape_string($con, $_POST['Occupation']);
$Email = mysqli_real_escape_string($con, $_POST['Email']);
$TelNo = mysqli_real_escape_string($con, $_POST['TelNo']);
$MobileNo = mysqli_real_escape_string($con, $_POST['MobileNo']);
$Address = mysqli_real_escape_string($con, $_POST['Address']);
$ZIPCode = mysqli_real_escape_string($con, $_POST['ZIPCode']);
$AccountNo = mysqli_real_escape_string($con, $_POST['AccountNo']);
$TypeAccountID = mysqli_real_escape_string($con, $_POST['TypeAccountID']);
$BranchID = mysqli_real_escape_string($con, $_POST['BranchID']);

$sql="INSERT INTO account (AccountNo,TypeAccountID,BranchID)
VALUES ('$AccountNo','$TypeAccountID','$BranchID' )";

if (!mysqli_query($con,$sql)) 
{
	die('Error: ' . mysqli_error($con));
}

$sql1="INSERT INTO userinfo (Name,IdentificationNo,PassportNo,DateofBirth,Gender,Nationality,HighestEducation,MaritalStatus,ResidentialStatus,Occupation,Email,TelNo,MobileNo,Address,ZIPCode)
VALUES ('$Name', '$IdentificationNo', '$PassportNo', '$DateofBirth', '$Gender', '$Nationality', '$HighestEducation', '$MaritalStatus', '$ResidentialStatus', '$Occupation', '$Email', '$TelNo', '$MobileNo', '$Address', '$ZIPCode')";

if (!mysqli_query($con,$sql1)) 
{
	die('Error: ' . mysqli_error($con));
}

echo "1 record added";
mysqli_close($con);
?> 