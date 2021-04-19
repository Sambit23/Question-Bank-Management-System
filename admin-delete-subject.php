<?php

$con=new mysqli("localhost","root","","qbms");
if($con->connect_error){
  die("try again....");
}

$id=$_GET['delete'];

$sql="delete from subject where id=$id";
if($con->query($sql)){
  header("location:courses.php");

}
else{
header("location:courses.php");

}


?>