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
    
    $AccountNo = mysqli_real_escape_string($con, $_POST['AccountNo']);
    $Note = mysqli_real_escape_string($con, $_POST['Note']);
    
    #check amount in paymentcode
    $sql_Balance_check1 = "SELECT Balance FROM account WHERE AccountNo ='$AccountNo'";     
    $query1 = mysqli_query($con, $sql_Balance_check1);
    $result1 = NULL ;
    $result11 = NULL ;
    while($result1 = mysqli_fetch_assoc($query1)){
        $result11 = $result1['Balance'];
    }
    $CurrentBalance =  $result11-$Amount ;
    if ($result11 >= $Amount ) {
        $sql="INSERT INTO transaction (AccountNo,PaymentCode,Amount,Total,CurrentBalance,Note,TransactionCode)
            VALUES ('$AccountNo', '$PaymentCode', '$Amount', '$Amount', '$CurrentBalance', '$Note', 'A002');";
         if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
            }
        
        $sql1="UPDATE account
        SET Balance = '$CurrentBalance'
        WHERE AccountNo = '$AccountNo';";
        if (!mysqli_query($con,$sql1)) {
            die('Error: ' . mysqli_error($con));
            }
        
            $_SESSION['AccountNo'] = $AccountNo;
            $_SESSION['CurrentBalance'] = $CurrentBalance;
            $_SESSION['Note'] = $Note;
    
        echo "<script>setTimeout(\"location.href = 'billreceipt.php';\",0);</script>";
    }else{
        echo '<script language="javascript">';
        echo 'alert("This Account not have enough money")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'billpay.php';\",0);</script>";      
    }
    mysqli_close($con);
?> 