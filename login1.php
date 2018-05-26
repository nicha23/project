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

    $UserID = mysqli_real_escape_string($con, $_POST['UserID']);
    $Password = md5(mysqli_real_escape_string($con, $_POST['Password']));

    $sql_Password_check = "SELECT UserID,Password FROM userid WHERE UserID = '$UserID'&& Password = '$Password';";
    $query = mysqli_query($con, $sql_Password_check);
    $result = mysqli_fetch_assoc($query);

    if (!mysqli_query($con,$sql_Password_check)) {
        die('Error: ' . mysqli_error($con));
    }else if($result['UserID']!=''){
        //echo "login success!"; 
        // Set session variables
        $_SESSION["UserID"]=$result['UserID'];
        $_SESSION["Password"]=$result['Password'];
        //echo "Session variables are set.";
        echo "<script>setTimeout(\"location.href = 'myacc.php';\",1500);</script>";
        //header('Location: myacc.php');
    }else{
        //echo "UserID or Password incorrect!";
        echo '<script language="javascript">';
        echo 'alert("UserID or Password incorrect!")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'login.php';\",0);</script>";
    }
    mysqli_close($con);
?> 