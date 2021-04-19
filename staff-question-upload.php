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
                 ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Staff-University-q.php">Back</a>

                        </li>
                      

                        <form action="" method="POST">
                        <button type="submit" name="logout" class="btn btn-primary">Logout  <i class="fa fa-sign-out"></i></button>
                            
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
                   
                </div>
            </div>
        </nav>
    </header>
    </div>
    <!--End of header-->
    <!-- ======= Services Section ======= -->
      <?php
 $con=new mysqli("localhost","root","","qbms");

 if($con->connect_error){
     die("Something went wrong");
 }

?>
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

           
            <br><br><br><br><br>
           <div class="container">
               <div class="row justify-content-center">
               <div class="card" style="width: 28rem; height: auto; color:white">
          
            <div class="section-title">
                <h1 style="color:white">
                    Add-Questions</h1>
            </div>
            <form action="staff-q-upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">University Name</label>
                                <select class="form-control" name="university_name">
                                    <option>--Select--</option>
                                    <?php
                                    $qry="select * from university order by universityname";
                                    $res=$con->query($qry);
                                    if($res->num_rows>0){
                                        while($data=$res->fetch_assoc()){
                                    
                                            echo "<option value='$data[universityname]'>$data[universityname]</option>";
                                   
                                    }}
                                   ?>
                                </select>
                             
                              
                            </div>
                            
                            <div class="form-group">
                                <label for="">Course</label>
                                <select class="form-control" name="course">
                                    <option>--Select--</option>
                                    <?php
                                    $qry1="SELECT DISTINCT * from course";
                                    $res1=$con->query($qry1);
                                    if($res1->num_rows>0){
                                        while($data1=$res1->fetch_assoc()){
                                            echo "<option value='$data1[course]'>$data1[course]</option>";
                                   
                                    }}
                                   ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Branch</label>
                                <select class="form-control" name="branch">
                                    <option>--Select--</option>
                                    <?php
                                     $qry1="select DISTINCT * from branch";
                                     $res1=$con->query($qry1);
                                     if($res1->num_rows>0){
                                         while($data1=$res1->fetch_assoc()){
                                                echo "<option value='$data1[branch]'>$data1[branch]</option>";
                                   
                                            }}
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Subject</label>
                                <select class="form-control" name="subject">
                                    <option>--Select--</option>
                                    <?php
                                      $qry1="select * from subject order by subject";
                                      $res1=$con->query($qry1);
                                      if($res1->num_rows>0){
                                          while($data1=$res1->fetch_assoc()){
                                      
                                               echo "<option value='$data1[subject]'>$data1[subject]</option>";
                                   
                                            }}
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Year</label>
                                <select class="form-control" name="year">
                                    <option>--Select--</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Semester</label>
                                <select class="form-control" name="semester">
                                    <option>--Select--</option>
                                    <option value="1 ST">1 ST</option>
                                    <option value="2 ND">2 ND</option>
                                    <option value="3 RD">3 RD</option>
                                    <option value="4 TH">4 TH</option>
                                    <option value="5 TH">5 TH</option>
                                    <option value="6 TH">6 TH</option>
                                    <option value="7 TH">7 TH</option>
                                    <option value="8 TH">8 TH</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Uploaded By</label>
                                <?php
                                $sql="SELECT * FROM staff WHERE username='$user_email'";
                                $res=$con->query($sql);
                                if($res->num_rows>0){
                                    $row=$res->fetch_assoc();
                                 echo  "<input type=\"text\" class=\"form-control\" name=\"uploaded_by\" value=\"$row[id]\" autocomplete=\"off\" readonly>";
                              
                                }
                            
                                ?>
                              
                            </div>
                            <div class="form-group">
                                <label for="">Date of Uploaded</label>
                               <input type="date" class="form-control" name="date_of_upload" required>
                            </div>
                            <div class="form-group">
                                <label for="">Question Paper
                                <span class="text-muted">PDF Only</label>
                                <input type="file" name="question">
                            </div>
                            <input type="submit" value="Add" name="submit" class="btn btn-block btn-outline-secondary float-end">
                        </form>

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

</html><?php   }else{
    header("location:staff-login.php");}?>