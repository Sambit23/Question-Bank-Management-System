<?php
$con=new mysqli("localhost","root","","qbms");
if($con->connect_error){
    die("Something went wrong!!!");
}

$id=$_GET['delete'];

$sql="DELETE FROM mcq_questions where q_id=$id";

if($con->query($sql)){
    header("location:mcq.php");
}else{
    echo"Failed";
}
?>



