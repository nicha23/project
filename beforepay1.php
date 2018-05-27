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
    $PaymentCode = mysqli_real_escape_string($con, $_POST['PaymentCode']);

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
    
    if ($result11 != NULL) {
        $_SESSION['PaymentCode'] = $PaymentCode;
        $_SESSION['Amount'] = $result11;
        $_SESSION['CompanyName'] = $result12;
        echo "<script>setTimeout(\"location.href = 'billpay.php';\",0);</script>";
    }else{
        echo '<script language="javascript">';
        echo 'alert("Not have this Payment Code")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'beforepay.php';\",0);</script>";      
    }
    



 
    mysqli_close($con);
?> 