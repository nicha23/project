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
    $NewAccountNo = mysqli_real_escape_string($con, $_POST['NewAccountNo']);

    $sql_Identification_check1 = "SELECT IdentificationNo FROM userinfo WHERE UserID ='$UserID'";     
    $query1 = mysqli_query($con, $sql_Identification_check1);
    $result11 = NULL ;
    while($result1 = mysqli_fetch_assoc($query1)){
        $result11 = $result1['IdentificationNo'];
    }

    $sql_AccountNo_check2 = "SELECT AccountNo FROM account WHERE (AccountNo = '$NewAccountNo')";    
    $query2 = mysqli_query($con, $sql_AccountNo_check2);
    $result22 = NULL ;

    while($result2 = mysqli_fetch_assoc($query2)){
        $result22 = $result2['AccountNo'];
        
    }

    $sql_AccIden_check3 = "SELECT IdentificationNo FROM account WHERE (AccountNo = '$NewAccountNo')&&(IdentificationNo ='$result11')";    
    $query3 = mysqli_query($con, $sql_AccIden_check3);
    $result33 = NULL ;
    while($result3 = mysqli_fetch_assoc($query3)){
        $result33 = $result3['IdentificationNo'];
    }

    if ($result22 == NULL) {
        //echo "GO TO JBU BANK! FOR Create AccountNO.";
        echo '<script language="javascript">';
        echo 'alert("Not have this AccountNo")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'myacc.php';\",0);</script>";
    }else{
        if($result33 != NULL){/////////////////////////////////////////////////////////////////////////////////////
            
            $sql="INSERT INTO userid (UserID,AccountNo,Password)
            VALUES ('$UserID','$NewAccountNo', '$Password')";
            
            if (!mysqli_query($con,$sql)) {
                die('Error: ' . mysqli_error($con));
            }

            echo '<script language="javascript">';
            echo 'alert("Add New Account successfully")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'myacc.php';\",0);</script>";
            //////////////////////////////////////////////////////////////////////////////////////////////////////
        }
        else{
            //echo "HAVE detail of my Identification and You go to login";
            echo '<script language="javascript">';
            echo 'alert("It is not your AccountNo")';
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'myacc.php';\",0);</script>";
        }
    }
    mysqli_close($con);
?> 