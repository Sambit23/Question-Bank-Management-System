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

    <title>Staff</title>
</head>

<body>
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
                            <a class="nav-link active" aria-current="page" href="staff.php">staff</a>

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
                    </ul>
                 
                </div>
            </div>
        </nav>
    </header>
    </div>
    <!--End of header-->
    <div class="section-title">
                <h1>Add-Staff</h1>
            </div>
           <br><br><br>
            <div class="container">
                    <div class="row justify-content-center">
                        <div class="card py-4 bg-transparent" id="cards" style="width: 38rem; height:auto; border:2px solid rgba(18, 136, 48, 0.2);box-shadow: 0 5px 15px rgba(0, 0, 0, .5);">
                            <form action="add-staff.php" method="POST" onsubmit="return validation()">
                                <h1>Registration</h1>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">First Name</span>
                                    <input name="fname" type="text" class="form-control" autocomplete="off" placeholder="First Name" id="user_name" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <br>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Last Name</span>
                                    <input name="lname" type="text" class="form-control" autocomplete="off" placeholder="Last Name" id="user_name" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <br>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Email</span>
                                    <input name="email" type="email" class="form-control" placeholder="E-mail" aria-label="Username" autocomplete="off" aria-describedby="addon-wrapping">
                                    <span id="pass_message"></span>
                                </div>
                                <br>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Phone-number</span>
                                    <input name="mobile" type="text" class="form-control" placeholder="enter phone number" aria-label="Username" autocomplete="off" aria-describedby="addon-wrapping">
                                </div>
                                <br>
                                <div>
                                    <input value="male" name="gender" class="form-check-input float-start" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label float-start" for="flexRadioDefault1">
                                      Male &nbsp;
                                    </label>
                                </div>

                                <div>
                                    <input value="female" name="gender" class="form-check-input float-start" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label float-start" for="flexRadioDefault2">
                                      Female
                                    </label>
                                </div>
                                <br>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">DOB</span>
                                    <input name="dob" type="date" class="form-control" placeholder="Date of birth" aria-label="Username" autocomplete="off" aria-describedby="addon-wrapping">

                                </div>
                                <br>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Address</span>
                                    <input name="address" type="text" class="form-control" placeholder="Address" aria-label="Username" autocomplete="off" aria-describedby="addon-wrapping">

                                </div>
                                <br>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Username</span>
                                    <input name="user" type="text" class="form-control" autocomplete="off" placeholder="Username" id="user_name" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <br>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Password</span>
                                    <input type="password" class="form-control" placeholder="password" aria-label="Username" id="password_id" aria-describedby="addon-wrapping">

                                </div>
                                <span id="pass"></span>
                                <br>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Confirm Password</span>
                                    <input name="pass" type="password" class="form-control" placeholder="password" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary float-end">Sign-up</button>
                            </form>




                        </div>
                    </div>
                    <!-- Login-end -->
                </div>
     
    

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- End Services Section -->
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