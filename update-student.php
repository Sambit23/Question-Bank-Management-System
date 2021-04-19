<!doctype html>
<html lang="en">
<?php
 //retrieving session value
 session_start();
 if(isset($_SESSION['username']))
 {
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="admin page.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   
    <title>Update Student</title>
</head>

<body>
<?php
$con=new mysqli("localhost","root","","qbms");

if($con->connect_error){
    die("Something went wrong");
}

$id=$_GET['updateid'];

if(isset($_POST['update'])){
  
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['mobile'];
    $username=$_POST['username'];

    $qry="update student set fname='$fname',lname='$lname',gender='$gender',email='$email',mobile='$phone',username='$username' where id=$id";

    if($con->query($qry)){
        header("location:Student.php");
    }else{
        header("location:update-student.php");
    }
}
 

$qry2="select * from student where id=$id ";
$result=$con->query($qry2);
if($result->num_rows>0){
    $data=$result->fetch_assoc();
    $fname=$data['fname'];
    $lname=$data['lname'];
    $gender=$data['gender'];
    $email=$data['email'];
    $phone=$data['mobile'];
    $username=$data['username'];
}
?>
    <!--Header-->

    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="nave">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php
             $user_email=$_SESSION['username'];
             echo "<h4> welcome $user_email</h4>";   
            ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="Student.php">Student</a>
                        </li>
                        


                        <form action="" method="POST">
                        <button type="submit" name="logout" class="btn btn-primary">Logout  <i class="fa fa-sign-out-alt"></i></button>
                            
                        </form>   
                             <?php
                              if(isset($_POST['logout']))
                              {
                               session_unset();
                               session_destroy();
                               header("location:admin_login.php");
                              }
                             ?>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        </div>
    
        <!--End of header-->

        <div class="container" data-aos="fade-up">

            
<div class="container">
    <div class="row justify-content-center mt-5">
    <div  class="card bg-transparent text-center" style="width: 28rem; height:auto; border:2px solid rgba(18, 136, 48, 0.2);box-shadow: 0 5px 15px rgba(0, 0, 0, .5);">
    <div class="row">
 <i class="fa fa-user fa-5x"></i>
</div>
            <h1>Student-update form</h1>
         
<form action="" method="POST">
 
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">First Name</span>
  <input name="fname" type="text" value=<?php echo $fname;?> class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Last Name</span>
  <input name="lname" type="text"  value=<?php echo $lname;?> class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div>
    <input value="male" name="gender" class="form-check-input float-start" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
     <label class="form-check-label float-start" for="flexRadioDefault1">
         Male &nbsp;
    </label>
</div>

 <div>
     <input value="female" name="gender" class="form-check-input float-start" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label float-start" for="flexRadioDefault1">
        female 
     </label>
 </div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">E-mail</span>
  <input name="email" type="text"  value=<?php echo $email;?> class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Mobile</span>
  <input name="mobile" type="text"  value=<?php echo $phone;?> class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
  <input name="username" type="text"  value=<?php echo $username;?> class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<br>

<button type="submit" value="update" name="update" class="btn btn-primary float-end">update</button></form>
            
  
</div>
    </div>



</div>
   
            
           
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- End Services Section -->
    </header>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="footer-info">
                            <h3>Appstone<span>.</span></h3>
                            <p>
                                Silicon institute of technology <br> Patia, Bhubaneswar, Odisha 751024<br><br>
                                <strong>Phone:</strong> +91 987654321<br>
                                <strong>Email:</strong> sambitpattanaik52@gmail.com.com<br>
                            </p>
                           
                        </div>
                    </div>

                   

                    <div class="col-lg-6 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright. All Rights Reserved
            </div>
            <div class="credits">
                Designed by Sambit kumar pattanaik
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>
<?php   }else{
    header("location:admin_login.php");}?>