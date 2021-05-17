<?php


// $sql = "INSERT INTO usjr-students VALUES(:studid,:studfname,:studmname,:studlname,:studprogram,:studcollege,:studyear)";





$dbStatement = $dbconnection->prepare($sql);

$sname = $_POST['sname'];
$sname = $_POST['semail'];
$sname = $_POST['spassword'];
$sname = $_POST['scpassword'];


if (!empty($sname) ||  (!empty($semail) ||  (!empty($spassword)|| (!empty($scpassword)){
$host ="localhost";
$dbUsername = "root";
$dbPassword = " ";
$dbname = "addtokart";

$conn = new mysqli($host , $dbUsername ,$dbPassword ,$dbname);
if(mysqli_connect_error()){
die ('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
}
else{
    $SELECT = "Select email from user where email = ? Limit 1";
    $INSERT = "Insert into user ()"
}

}
else{
    echo "All field required!";
    die();
}
