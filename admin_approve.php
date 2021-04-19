<?php
 //retrieving session value
 session_start();
 if(isset($_SESSION['username']))
 {
     $id = $_GET['id'];

     echo "$id";

     $conn= new mysqli("localhost", "root", "", "qbms");

     $sql = "UPDATE university_questions SET approved='1' WHERE id='$id'";

    if($conn->query($sql)){
        header("location:./University-questions.php");
    }
    else{
        header("location:./University-questions.php");
    }

 }
?>