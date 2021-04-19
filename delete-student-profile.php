<?php

//connection
$con=new mysqli("localhost","root","","qbms");
if($con->connect_error){
  die("try again....");
}

$id=$_GET['delete'];

$sql="delete from student where id=$id";
if($con->query($sql)){
  header("location:login.php");

}
else{
  echo "failed";
}


?>