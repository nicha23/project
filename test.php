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

    $month = mysqli_real_escape_string($con, $_POST['month']);

    $sql="SELECT datetime, total, currentbalance, transactioncode FROM transaction WHERE accountNo='$AccountNo' AND MONTH(DateTime) = $month;";
    $query = mysqli_query($con, $sql);
    // $outp = "[";
    while($result1 = mysqli_fetch_assoc($query)){
        if($result1!=NULL){
        // if ($outp != "[") {$outp .= ",";}
            // $outp .= '{"datetime":"'. $result1['datetime']. '",';
            // $outp .= '"total":"'. $result1['total']. '",';
            // $outp .= '"currentbalance":"'. $result1['currentbalance']. '",';
            // $outp .= '"transactioncode":"'. $result1['transactioncode']. '"}';
            echo "<br>date :    ".$result1['datetime'];
            echo "  total :   ".$result1['total'];
            echo "  currentbalance :  ".$result1['currentbalance'];
            echo "  transactioncode : ".$result1['transactioncode'];
            
            
        }
    // $outp .="]";
    // echo($outp);
    }
?>