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
    $PaymentCode = $_SESSION['PaymentCode'];
    $Amount = $_SESSION['Amount'];
    $CompanyName = $_SESSION['CompanyName'];
    
    #check amount in paymentcode
    $sql_Amount_check1 = "SELECT Amount,CompanyName FROM billinfo WHERE PaymentCode ='$PaymentCode'";     
    $query1 = mysqli_query($con, $sql_Amount_check1);
    $result1 = NULL ;
    $result11 = NULL ;
    $result12 = NULL ;
    while($result1 = mysqli_fetch_assoc($query1)){
        $result11 = $result1['Amount'];
        $result12 = $result1['CompanyName'];
    }
    // print_r($result11);



 
    mysqli_close($con);
?> 