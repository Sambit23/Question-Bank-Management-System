<?php
$uname=$_POST['uname'];
$city=$_POST['city'];
$state=$_POST['state'];


$con=new mysqli("localhost","root","","qbms");
if($con->connect_error){
    die("Something went wrong");
}

if(isset($_POST['add'])){
    $qry="insert into university values(0,'$uname','$city','$state')";

    if($con->query($qry)) {
        header("location:university.php");
    }
    else{
        header("location:index.php?error='true'");
    }
}

?>