<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="admin_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="footer.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <title>Admin_Login</title>
</head>

<body>
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
                            <a class="nav-link active" aria-current="page" href="index.html">Home <i class="fa fa-home"></i></a>

                        </li>
                        
                        
                    </ul>
                    
                </div>
            </div>
        </nav>

        </div>
        <!--End of header-->
        <div class="container-fluid">
            <div class="content-area">
               

                <br><br><br><br><br>
                <div class="container">
                    <div class="row g-5 justify-content-center" >
                    <div  class="card bg-transparent" style="width: 25rem; height:auto; border:2px solid rgba(18, 136, 48, 0.2);box-shadow: 0 5px 15px rgba(0, 0, 0, .5);">
  
                                <div class="card-body">
 
                                <h3 style="color:rgb(7, 6, 6);">Admin-Login</h3>
                                <hr w=8>
                                <form action="adminauth.php" method="POST">
                                    <div id="login">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">Username</span>
                                            <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <br>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">Password</span>
                                            <input name="pass" type="password" class="form-control" placeholder="password" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                       <br>
                                        <button type="submit" name="login" class="btn btn-primary">login</button><br>
                                        <?php
                                        //  session_start();
                                        
                                         if(isset($_SESSION['username'])){
                                             header("location:admin-page.php");
                                         }if(isset($_GET['error'])=="true")
                                         {
                                             echo "Wrong username or password";
                                         }
                                        //  }else{
                                        //     header("location:admin-page.php");
                                        //  }
                                         ?>
                                        <!-- Login-end -->


                                    </div>

                                </form>
                          
  </div>
</div>

                       

                   
                            
                        
              

    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
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
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>