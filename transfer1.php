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



////same bank
if ($BankID=="000") { //1check bankID
	
	//2query balance sender
	$sql_balance_send1="SELECT Balance FROM account WHERE AccountNo='$AccountNo'";
	$query_balance_send1 = mysqli_query($con, $sql_balance_send1);
	$Balance1=$query_balance_send1['Balance'];
	//3calculate current balance sender
	$CurrentBalance1=$Balance1-$Amount;

	//2query balance receiver
	$sql_balance_send2="SELECT Balance FROM account WHERE AccountNo='$ReceiveAccountNo'";
	$query_balance_send2 = mysqli_query($con, $sql_balance_send2);
	$Balance2=$query_balance_send2['Balance'];
	//3calculate current balance receiver
	$CurrentBalance2=$Balance2+$Amount;

	//4transaction Sender
	$sql_send1="INSERT INTO transaction (AccountNo,BankID,ReceiveAccountNo,Amount,Total,CurrentBalance,Note,transactionCode)
	VALUES ('$AccountNo','$BankID','$ReceiveAccountNo','$Amount','$Amount','$CurrentBalance1','$Note','A001')";
	if (!mysqli_query($con,$sql_send1)) {
                die('Error: ' . mysqli_error($con));
            }

	//4transaction Receiver
	$sql_rec1="INSERT INTO transaction (AccountNo,BankID,SenderAccountNo,Amount,Total,CurrentBalance,Note,transactionCode)
	VALUES ('$ReceiveAccountNo','$BankID','$AccountNo','$Amount','$Amount','$CurrentBalance2','$Note','A003')";
	if (!mysqli_query($con,$sql_rec1)) {
                die('Error: ' . mysqli_error($con));
            }

	//5update sender
	$sql_up_send1="UPDATE account SET Balance='$CurrentBalance1' WHERE AccountNo='$AccountNo'";
	if (!mysqli_query($con,$sql_up_send1)) {
                die('Error: ' . mysqli_error($con));
            }

	//5update receiver
	$sql_up_rec1="UPDATE account SET Balance='$CurrentBalance2' WHERE AccountNo='$ReceiveAccountNo'";
	if (!mysqli_query($con,$sql_up_rec1)) {
                die('Error: ' . mysqli_error($con));
            }
}
////other banks
else {
	//2query fee
	$sql_fee_send2="SELECT fee FROM bank WHERE bankID='$bankID'";
	$query_fee_send2 = mysqli_query($con, $sql_fee_send2);
	$fee=$query_fee_send2['fee'];
	
	//3calculate total
	$total=$Amount+$fee;

	//4query balance
	$sql_balance_send2="SELECT Balance FROM account WHERE AccountNo='$AccountNo'";
	$query_balance_send2 = mysqli_query($con, $sql_balance_send2);
	$Balance3=$query_balance_send2['Balance'];

	//5calculate current balance
	$CurrentBalance3=$Balance3-$Amount;

	//6transaction
	$sql_send2="INSERT INTO transaction (AccountNo,BankID,ReceiveAccountNo,Amount,Total,CurrentBalance,Note,transactionCode)
	VALUES ('$AccountNo','$BankID','$ReceiveAccountNo','$Amount','$total','$CurrentBalance3','$Note','A001')";
	if (!mysqli_query($con,$sql_send2)) {
                die('Error: ' . mysqli_error($con));
            }

	//7update sender
	$sql_up_send1="UPDATE account SET Balance='$CurrentBalance3' WHERE AccountNo='$AccountNo'";
	if (!mysqli_query($con,$sql_up_send1)) {
                die('Error: ' . mysqli_error($con));
            }
}













?>