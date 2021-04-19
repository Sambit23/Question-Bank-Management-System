<?php
$user=$_POST['user'];
$pass=$_POST['password'];

$con=new mysqli("localhost","root","","qbms");

if($con->connect_error){
    die("Something went wrong");
}

if(isset($_POST['login'])){
    $qry="select * from staff where username='$user'";

    $res=$con->query($qry);
    
    if($res->num_rows>0){
        while($row=mysqli_fetch_assoc($res)){
            if(password_verify($pass,$row['password'])){

                session_start();
                $_SESSION['user']=$user;
                header("location:Staff-page.php");
            }
        
        }
    }else{
        
        header("location:staff-login.php?error='true'");
    }
}


    ?>