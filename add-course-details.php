<?php
$Course=$_POST['Course'];




$con=new mysqli("localhost","root","","qbms");
if($con->connect_error){
    die("Something went wrong");
}

if(isset($_POST['add'])){
    $qry="insert into course values(0,'$Course')";

    if($con->query($qry)) {
        header("location:courses.php");
    }
    else{
        header("location:admin-add-course.php?error='true'");
    }
}

?>