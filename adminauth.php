<?php
$user=$_POST['username'];
$password=$_POST['pass'];


$con=new mysqli("localhost","root","","qbms");

if($con->connect_error){
    die("Something went wrong!!!");
}

$qry="select * from admin where name='$user' and password='$password'";

$res=$con->query($qry);

if($res->num_rows>0){
    session_start();
    $_SESSION['username']=$user;
    header("location:admin-page.php");
}else{
    header("location:admin_login.php");
}
?>