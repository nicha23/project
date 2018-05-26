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
    $Password_Login = $_SESSION['Password'];

    $Password = md5(mysqli_real_escape_string($con, $_POST['Password']));
    $New_Password = md5(mysqli_real_escape_string($con, $_POST['New_Password']));
        if($Password_Login == $Password){
            $sql="UPDATE userid
            SET Password = '$New_Password'
            WHERE UserID = '$UserID';";

            if (!mysqli_query($con,$sql)) {
                die('Error: ' . mysqli_error($con));
            }

            echo '<script language="javascript">';
            echo 'alert("Update New Password successfully")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'login.php';\",0);</script>";

            // session_destroy();
        }else{
            echo '<script language="javascript">';
            echo 'alert("Wrong! Ceurrent Password")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'settings.php';\",0);</script>";
        }
    mysqli_close($con);
?> 