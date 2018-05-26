<?php
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
    // escape variables for security
    $UserID = mysqli_real_escape_string($con, $_POST['UserID']);
    $IdentificationNo = mysqli_real_escape_string($con, $_POST['IdentificationNo']);
    $PassportNo = mysqli_real_escape_string($con, $_POST['PassportNo']);
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $DateofBirth = mysqli_real_escape_string($con, $_POST['DateofBirth']);
    $Gender = mysqli_real_escape_string($con, $_POST['Gender']);
    $Nationality = mysqli_real_escape_string($con, $_POST['Nationality']);
    $HighestEducation = mysqli_real_escape_string($con, $_POST['HighestEducation']);
    $MaritalStatus = mysqli_real_escape_string($con, $_POST['MaritalStatus']);
    $ResidentialStatus = mysqli_real_escape_string($con, $_POST['ResidentialStatus']);
    $Occupation = mysqli_real_escape_string($con, $_POST['Occupation']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $TelNo = mysqli_real_escape_string($con, $_POST['TelNo']);
    $MobileNo = mysqli_real_escape_string($con, $_POST['MobileNo']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);
    $ZIPCode = mysqli_real_escape_string($con, $_POST['ZIPCode']);

    #check in account have identification
    $sql_Identification_check1 = "SELECT IdentificationNo FROM account WHERE IdentificationNo ='$IdentificationNo'";     
    $query1 = mysqli_query($con, $sql_Identification_check1);
    while($result1 = mysqli_fetch_assoc($query1)){
        $result11 = $result1['IdentificationNo'];
    }
    // print_r($result11);

    #check in userinfo have 1 detail for identificationNo
    $sql_Identification_check2 = "SELECT IdentificationNo FROM userinfo WHERE IdentificationNo ='$IdentificationNo'";    
    $query2 = mysqli_query($con, $sql_Identification_check2);
    while($result2 = mysqli_fetch_assoc($query2)){
        $result22 = $result2['IdentificationNo'];
    }
    // print_r($result22);

    if ($result11 == NULL) {
        echo "GO TO JBU BANK! FOR Create AccountNO.";
    }else{
        if($result22 != NULL){
            echo "HAVE detail of my Identification and You go to login";
        }
        else{
            $sql="INSERT INTO userinfo (UserID,IdentificationNo,PassportNo,Name,DateofBirth,Gender,Nationality,HighestEducation,MaritalStatus,ResidentialStatus,Occupation,Email,TelNo,MobileNo,Address,ZIPCode)
            VALUES ('$UserID','$IdentificationNo', '$PassportNo', '$Name', '$DateofBirth', '$Gender', '$Nationality', '$HighestEducation', '$MaritalStatus', '$ResidentialStatus', '$Occupation', '$Email', '$TelNo', '$MobileNo', '$Address', '$ZIPCode')";
            if (!mysqli_query($con,$sql)) {
                die('Error: ' . mysqli_error($con));
            }
            echo "1 record added";
            header("Location: create_user.html");
        }
    }
    mysqli_close($con);
?>