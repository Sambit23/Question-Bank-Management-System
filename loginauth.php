<?php
$username=$_POST['username'];
$pass=$_POST['pass'];
$con=new mysqli("localhost","root","","qbms");
if($con->connect_error){
    die("Connection Failed..Try Again");
}
if(isset($_POST['login']))
{
    // $qry="select * from student where Username='$username' and Password='$pass'";
    $qry="select * from student where Username='$username'";
    $res=$con->query($qry);
    if($res->num_rows>0)
    {
        while($row=$res->fetch_assoc()){
            if(password_verify($pass,$row['password'])){
                session_start();
                $_SESSION['username']=$username;
        
                header("location:studenthome.php");
            }
        }
       
    }
    else{
        header("location:login.php?error='true'");
    }
}

?>