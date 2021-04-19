<?php
$Subject=$_POST['Subject'];



$con=new mysqli("localhost","root","","qbms");
if($con->connect_error){
    die("Something went wrong");
}

if(isset($_POST['add'])){
    $qry="insert into subject values(0,'$Subject')";

    if($con->query($qry)) {
        header("location:courses.php");
    }
    else{
        header("location:admin-add-course.php?error='true'");
    }
}

?>