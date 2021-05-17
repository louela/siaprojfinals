<?php


session_start();
header('location:signup-entry.php');

$con = mysqli_connect('localhost' ,'root','');

mysqli_select_db($con , 'addtokart');

$userName =$_POST['sname'];
$userEmail =$_POST['semail'];
$userPassword =$_POST['spassword'];
$userCpassword =$_POST['scpassword'];

$s= "select uemail ,upassword from user where uemail = '$userEmail'" ;

$dbResult =mysqli_query($con, $s);

    $num = mysqli_num_rows($dbResult);

    if($num == 1){
        echo "Email is already registered!";

    }
    else{
        $reg= "INSERT INTO user(uname,uemail,upassword,ucpassword) VALUES('$userName' ,'$userEmail','$userPassword','$userCpassword' )";
        mysqli_query($con,$reg);
        echo 'Registered Successfully!';
    }

    
      

        
