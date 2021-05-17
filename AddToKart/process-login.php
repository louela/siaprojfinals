<?php


session_start();


$con = mysqli_connect('localhost' ,'root','');

mysqli_select_db($con , 'addtokart');

$userName =$_POST['sname'];
$userEmail =$_POST['semail'];
$userPassword =$_POST['spassword'];
$userCpassword =$_POST['scpassword'];

$s= "select uemail ,upassword from user where uemail = '$userEmail' && upassword = '$userPassword'" ;

$dbResult =mysqli_query($con, $s);

    $num = mysqli_num_rows($dbResult);
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if($num == 1 ){
        header('location:homepage.php');

    }
    else if (strpos($fullUrl, "sigin=empty")== true){
        header('location:signup-entry.php');
        echo "<p class ='error'> You did not fill in all fields!</p>";
        exit();
    }


   

  