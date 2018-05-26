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
    $IdentificationNo = $_SESSION['IdentificationNo'];

    $AccountNo = mysqli_real_escape_string($con, $_POST['AccountNo']);
    $Password = md5(mysqli_real_escape_string($con, $_POST['Password']));
    $rep_Password = md5(mysqli_real_escape_string($con, $_POST['rep_Password']));

    $sql_AccountNo_check = "SELECT AccountNo,IdentificationNo FROM account WHERE (AccountNo ='$AccountNo')&&(IdentificationNo = '$IdentificationNo') ";     
    $query = mysqli_query($con, $sql_AccountNo_check);
    $result = mysqli_fetch_assoc($query);
    
    if(($Password == $rep_Password)){
        if (!mysqli_query($con,$sql_AccountNo_check)) {
            die('Error: ' . mysqli_error($con));
        }elseif(($result['AccountNo']==$AccountNo)&&($result['IdentificationNo']==$IdentificationNo)){
            $sql="INSERT INTO userid (UserID, AccountNo, password)
            VALUES ('$UserID', '$AccountNo', '$Password');";
            if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
            }
            echo '<script language="javascript">';
            echo 'alert("Create User successfully")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'index.html';\",0);</script>";
            //header('location: index.html');
            session_destroy();
        }else{
            // Account no matching with IdentificationNo 
            echo '<script language="javascript">';
            echo 'alert("Account no matching with IdentificationNo")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'create_user.php';\",0);</script>";
        }
        
    }else if($Password != $rep_Password){
        // Password not matching 
        echo '<script language="javascript">';
        echo 'alert("Password not matching")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'create_user.php';\",0);</script>";
    }
    mysqli_close($con);
?> 