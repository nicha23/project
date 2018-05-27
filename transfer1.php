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

$accno = mysqli_real_escape_string($con, $_POST['AccountNo']);
$bank = mysqli_real_escape_string($con, $_POST['BankID']);
$recaccno = mysqli_real_escape_string($con, $_POST['ReceiveAccountNo']);
$amount = mysqli_real_escape_string($con, $_POST['Amount']);
$note = mysqli_real_escape_string($con, $_POST['Note']);



//other banks
//Sender
$sql_trans1="INSERT INTO transaction (AccountNo,BankID,ReceiveAccountNo,Amount,Note,transactionCode)
VALUES ('$accno','$bank','$recaccno','$amount','$note','A001')";



//same bank
//Sender
$sql="INSERT INTO transaction (AccountNo,BankID,ReceiveAccountNo,Amount,Note,transactionCode)
VALUES ('$accno','$bank','$recaccno','$amount','$note','A001')";

//Receiver
$sql="INSERT INTO transaction (AccountNo,BankID,ReceiveAccountNo,Amount,Note,transactionCode)
VALUES ('$recaccno','$bank','$accno','$amount','$note','A003')";









?>