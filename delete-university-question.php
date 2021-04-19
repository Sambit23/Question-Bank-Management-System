<?php

//connection
$con=new mysqli("localhost","root","","qbms");
if($con->connect_error){
  die("try again....");
}

$id=$_GET['delete'];

$sql1="SELECT * FROM university_questions WHERE id=$id";

$res=$con->query($sql1);

if($res->num_rows>0){
  $row=$res->fetch_assoc();
  $file_path=$row["file_path"];
  if(unlink($file_path)){
    
    $sql="delete from university_questions where id=$id";

    if($con->query($sql)){
      header("location:University-questions.php");
    }
  }
}
$con->close();

?>