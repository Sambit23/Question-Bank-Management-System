<!doctype html>
<html lang="en">
<?php
//retrieving session value
session_start();
if(isset($_SESSION['user']))
{
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="student.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   
    <title>profile-update</title>
    
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
    $Username=$_POST['username'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];

    $qry="update staff set fname='$fname',lname='$lname',gender='$gender',email='$email',mobile='$phone',username='$Username',address='$address',dob='$dob' where id=$id";


    if($con->query($qry)){
        header("location:staff-profile.php");
    }else{
        header("location:staff-profile.php");
    }
}


$qry2="select * from staff where id=$id ";
$result=$con->query($qry2);
if($result->num_rows>0){
    $data=$result->fetch_assoc();
    $fname=$data['fname'];
    $lname=$data['lname'];
    $gender=$data['gender'];
    $email=$data['email'];
    $phone=$data['mobile'];
    $Username=$data['username'];
    $address=$data['address'];
    $dob=$data['DOB'];
}
?>
    <!--Header-->

    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="nave">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> <?php
               
               $user_email=$_SESSION['user'];
               echo "<h4> welcome $user_email </h4>";
            
                  // destroying session

                 
               ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="staff-profile.php">My-Profile</a>
                        </li>
                        


                        <form action="" method="POST">
                        <button type="submit" name="logout" class="btn btn-primary">Logout  <i class="fa fa-sign-out-alt"></i></button>
                            
                        </form>   
                             <?php
                              if(isset($_POST['logout']))
                              {
                               session_unset();
                               session_destroy();
                               header("location:staff-login.php");
                              }
                             ?>
                    </ul>
                    <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>

        </div>
    
        <!--End of header-->

        <div class="container" data-aos="fade-up">

            
<div class="container">
    <div class="row justify-content-center mt-5">
    <div class="card p-5 text-center" style="width: 38rem; height:auto;">
            <h1>Profile-Update</h1>
         
<form action="" method="POST">
 <div class="row">
     <i class="fa fa-user-circle fa-5x"></i>
</div>
<br><br><br>
<br>
<div class="input-group flex-nowrap">
     <span class="input-group-text" id="addon-wrapping">First Name</span>
    <input name="fname" value=<?php echo $fname;?> type="text" class="form-control" autocomplete="off" placeholder="University Name" id="user_name" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>
 <br>
<div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">Last Name</span>
    <input name="lname" value=<?php echo $lname;?> type="text" class="form-control" autocomplete="off" placeholder="City" id="user_name" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>
<br>
<div>
    <input value="Male" name="gender" class="form-check-input float-start" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
     <label class="form-check-label float-start" for="flexRadioDefault1">
         Male &nbsp;
    </label>
</div>

 <div>
     <input value="Female" name="gender" class="form-check-input float-start" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label float-start" for="flexRadioDefault1">
        female 
     </label>
 </div>

<br>
<div class="input-group flex-nowrap">
     <span class="input-group-text" id="addon-wrapping">E-mail</span>
    <input name="email" value=<?php echo $email;?> type="text" class="form-control" placeholder="State" aria-label="Username" autocomplete="off" aria-describedby="addon-wrapping" required>

 </div>
 <br>
 <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">Date of birth</span>
    <input name="dob" value=<?php echo $dob;?> type="date" class="form-control" autocomplete="off" placeholder="City" id="user_name" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>
<br>
 <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">Address</span>
    <input name="address" value=<?php echo $address;?> type="text" class="form-control" autocomplete="off" placeholder="City" id="user_name" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>
<br>
<br>
<div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">Mobile Number</span>
    <input name="mobile" value=<?php echo $phone;?> type="text" class="form-control" autocomplete="off" placeholder="City" id="user_name" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>
<br>
<div class="input-group flex-nowrap">
     <span class="input-group-text" id="addon-wrapping">Username</span>
    <input name="username" value=<?php echo $Username;?> type="text" class="form-control" placeholder="State" aria-label="Username" autocomplete="off" aria-describedby="addon-wrapping" required>

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
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Appstone<span>.</span></h3>
                            <p>
                                Silicon institute of technology <br> Patia, Bhubaneswar, Odisha 751024<br><br>
                                <strong>Phone:</strong> +91 987654321<br>
                                <strong>Email:</strong> sambitpattanaik52@gmail.com.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
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
    header("location:login.php");}?>