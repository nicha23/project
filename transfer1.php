<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$con=mysqli_connect($servername,$username,$password,$dbname);
    // Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    // escape variables for security
$UserID = $_SESSION['UserID'];
$Password = $_SESSION['Password'];

$AccountNo = mysqli_real_escape_string($con, $_POST['AccountNo']);
$BankID = mysqli_real_escape_string($con, $_POST['BankID']);
$ReceiveAccountNo = mysqli_real_escape_string($con, $_POST['ReceiveAccountNo']);
$Amount = mysqli_real_escape_string($con, $_POST['Amount']);
$Note = mysqli_real_escape_string($con, $_POST['Note']);




if ($BankID=="000") {
	
	//same bank
	//transaction Sender
	$sql_send1="INSERT INTO transaction (AccountNo,BankID,ReceiveAccountNo,Amount,Note,transactionCode)
	VALUES ('$AccountNo','$BankID','$ReceiveAccountNo','$Amount','$Note','A001')";

	//transaction Receiver
	$sql_rec1="INSERT INTO transaction (AccountNo,BankID,SenderAccountNo,Amount,Note,transactionCode)
	VALUES ('$ReceiveAccountNo','$BankID','$AccountNo','$Amount','$Note','A003')";

	//update sender
	$sql_up_send1="UPDATE account SET Balance=Balance-'$Amount' WHERE AccountNo='$AccountNo'";

	//update receiver
	$sql_up_rec1="UPDATE account SET Balance=Balance+'$Amount' WHERE AccountNo='$ReceiveAccountNo'";
}
else {
	//other banks
	//transaction Sender
	$sql_send2="INSERT INTO transaction (AccountNo,BankID,ReceiveAccountNo,Amount,Note,transactionCode)
	VALUES ('$AccountNo','$BankID','$ReceiveAccountNo','$Amount','$Note','A001')";
}













?>