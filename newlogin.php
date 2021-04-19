<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>

<body class="body">
    <!--Header-->
    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="nave">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Question-Bank</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_login.html">Admin login</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.html"><i class="fa fa-user-circle"></i></a>

                        </li>
                    </ul>
                   
                </div>
            </div>
        </nav>

        </div>
        <!--End of header-->

        <div class="container-fluid">
            <div class="content-area">
                <h1>Student Login</h1>

                <br><br><br><br><br>
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="Images\1.png" id="img" alt="" class="img-fluid">
                        </div>

                        <div class="col-lg-6 col-md-6 col-12" id="log">

                            <!-- Login -->
                            <div id="row2">
                                <h3 style="color:rgb(7, 6, 6);">Login</h3>
                                <hr w=8>
                                <form action="loginauth.php" method="POST">
                                    <div id="login">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text">Username </span>
                                            <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" autocomplete="off">

                                        </div>

                                        <br><br>

                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">Password</span>
                                            <input name="pass" type="password" class="form-control" placeholder="password" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>


                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Keep me logged-in</label>
                                        </div>
                                        <div class="d-grid">
                                            <button name="login" class="btn btn-primary" type="submit">Login</button>
                                        </div><br>
                                    </div>
                                </form>
                                <!-- Login-end -->

                                <!-- Sign-up -->
                                <a href="exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: black;">not a member?<br>Sign-up</a>
                                <div class="modal fade bg-transparent" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="contaner">
                                                <div class="row">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Sign up </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body m-5">

                                                        <form action="sign-up.php" method="POST" onsubmit="return validation()">

                                                            <div class="input-group flex-nowrap">
                                                                <span class="input-group-text" id="addon-wrapping">First Name</span>
                                                                <input name="fname" type="text" class="form-control" autocomplete="off" placeholder="Username" id="user_name" aria-label="Username" aria-describedby="addon-wrapping">
                                                            </div>
                                                            <br>
                                                            <div class="input-group flex-nowrap">
                                                                <span class="input-group-text" id="addon-wrapping">Last Name</span>
                                                                <input name="lname" type="text" class="form-control" autocomplete="off" placeholder="Username" id="user_name" aria-label="Username" aria-describedby="addon-wrapping">
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
                                                                <span class="input-group-text" id="addon-wrapping">Email</span>
                                                                <input name="email" type="email" class="form-control" placeholder="E-mail" aria-label="Username" autocomplete="off" aria-describedby="addon-wrapping">
                                                                <span id="pass_message"></span>
                                                            </div>
                                                            <br>
                                                            <div class="input-group flex-nowrap">
                                                                <span class="input-group-text" id="addon-wrapping">Phone-number</span>
                                                                <input name="phone" type="text" class="form-control" placeholder="enter phone number" aria-label="Username" autocomplete="off" aria-describedby="addon-wrapping">
                                                            </div>
                                                            <br>
                                                            <div class="input-group flex-nowrap">
                                                                <span class="input-group-text" id="addon-wrapping">Userame</span>
                                                                <input name="username" type="text" class="form-control" autocomplete="off" placeholder="Username" id="user_name" aria-label="Username" aria-describedby="addon-wrapping">
                                                            </div>
                                                            <span id="user_name1"></span>
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
                                                            <button name="sign-up" type="submit" class="btn btn-primary">Sign-up</button>
                                                            <p class="change_link">
                                                                Already a member ?
                                                                <a href="login.html" class="to_register"> Go and log in </a>
                                                            </p>
                                                        </form>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </header>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="login.js">
    </script>
</body>

</html>