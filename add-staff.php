<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$hash= password_hash($pass, PASSWORD_DEFAULT);

$con=new mysqli("localhost","root","","qbms");

if($con->connect_error){
    die("Something went Wrong");
}

$qry="insert into staff values(0,'$fname','$lname','$email','$mobile','$gender','$dob','$address','$user','$hash')";

if($con->query($qry)){
    header("location:staff.php");
}else{
    echo"Try Again";
}
?>