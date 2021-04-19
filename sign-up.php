<?php
// error_reporting(0);
$con=new mysqli("localhost","root","","qbms");

if($con->connect_error){
    die("Something went wrong");
}
 if(isset($_POST['sign-up'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $hash= password_hash($pass, PASSWORD_DEFAULT);

    // $pname=$_FILES["image"]["name"];

    // $tname=$_FILES["image"]["tmp_name"];

//     $file_path="student-profile/$email/$phone/$username/";
//     $file_ab_path=$file_path."/".$pname;

//     if (!is_dir($file_path)) {
//         mkdir($file_path, 0777, true);
//     }
//    if(move_uploaded_file($tname,$file_ab_path)){
        $qry="insert into student values(0,'$fname','$lname','$gender','$email','$phone','$file_ab_path','$username','$hash')";
        
        if($con->query($qry)){
            header("location:login.php");
        }
    // }
        
else{
    echo "not done";
}

 }   

//  echo "<a href=\"delete-university-question.php?file=$pname\">";

    ?>