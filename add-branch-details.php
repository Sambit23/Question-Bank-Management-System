<?php
$Course=$_POST['Course'];
$Branch=$_POST['Branch'];
$Subject=$_POST['Subject'];



$con=new mysqli("localhost","root","","qbms");
if($con->connect_error){
    die("Something went wrong");
}

if(isset($_POST['add'])){
    $qry="insert into branch values(0,'$Branch')";

    if($con->query($qry)) {
        header("location:courses.php");
    }
    else{
        header("location:admin-add-branch.php?error='true'");
    }
}

?>