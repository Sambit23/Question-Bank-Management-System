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
    <link rel="stylesheet" href="staff.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <title>Staff page</title>
</head>

<body>
    <!--Header-->

    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="nave">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">  
                   <?php
                 $user_email=$_SESSION['user'];
                 echo "<h5> welcome $user_email </h5>";
                 ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
                    <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Staff-page.php">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Staff-MCQ.php">Add-MCQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="staff-profile.php">Profile</a>
                        </li>
                    <form action="" method="POST">
                        <button type="submit" name="logout" class="btn btn-primary">Logout  <i class="fa fa-sign-out"></i></button>
                            
                        </form>
                   
                            <?php
                             if(isset($_POST['logout']))
                             {
                                unset($_SESSION["user"]);
                                session_destroy();
                                header("location:staff-login.php");
                             }
                            ?>
                    </ul>
                   
                </div>
            </div>
        </nav>
    </header>
    </div>
    <!--End of header-->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h1>Welcome</h1>
            </div>
            <br><br><br><br><br>

            <div class="row">

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 text-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card1" id="box">
                        <div>
                            <a href="Staff-view-university-question.php" id="icon-a"><i class="fa fa-university fa-5x"></i></a>
                        </div>
                        <div>
                            <h4><a href="Staff-view-university-question.php">View-University-Questions</a></h4>
                        </div>


                    </div>

                </div>



                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 text-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card1" id="box">
                        <div>
                            <a href="staff-question-upload.php" id="icon-a"><i class="fas fa-file-upload fa-5x"></i></a>
                        </div>
                        <div>
                            <h4><a href="staff-question-upload.php">Upload</a></h4>
                        </div>


                    </div>

                </div>



            </div>



        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br>
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
    header("location:staff-login.php");}?>