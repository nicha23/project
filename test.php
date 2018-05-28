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
$AccountNo = $_SESSION['AccountNo'];
$Password = $_SESSION['Password'];

$month = mysqli_real_escape_string($con, $_POST['month']);

	//january
$sql="SELECT datetime, total, currentbalance, transactioncode FROM transaction WHERE accountNo='$AccountNo' AND MONTH(DateTime) = $month;";
$query = mysqli_query($con, $sql);
while($result1 = mysqli_fetch_assoc($query)){
        $result11 = $result1['DateTime'];
    }
				
while($result1 = mysqli_fetch_array($query_may)){
	$result11 = $result1['datetime'];
}
echo $result1['datetime'];

?>