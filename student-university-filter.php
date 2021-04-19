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
    <link rel="stylesheet" href="student.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   
    <title>Student</title>
    
</head>

<body>
      

    <!--Header-->

    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="nave">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <?php
               
                 $user_email=$_SESSION['username'];
                 echo "<h4> welcome $user_email </h4>";
              
                    // destroying session

                   
                 ?>

                 </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                        
                    <li class="nav-item">
                    <a class="nav-link" href="studenthome.php">Home</a>
                            
                                   </li>
                            <li class="nav-item">
              
                            
                                <a class="nav-link" href="Student-view-university-question.php">Back</a>
                            </li>

                    <form action="" method="POST">
                        <button type="submit" name="logout" class="btn btn-primary">Logout  <i class="fa fa-sign-out-alt"></i></button>
                            
                        </form>   
                             <?php
                              if(isset($_POST['logout']))
                              {
                               session_unset();
                               session_destroy();
                               header("location:login.php");
                              }
                             ?>
                       
                    </ul>
                    <!-- <form class="d-flex">
                        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
    </header>
    </div>
    <!--End of header-->
    <?php
 $con=new mysqli("localhost","root","","qbms");

 if($con->connect_error){
     die("Something went wrong");
 }

?>
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h1>Welcome</h1>
            </div>
            <br><br><br><br><br>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                       
                        <div class="card2">
                            <div class="card-body">
                            <div class="section-title">
                <h1 style="color:white">
                    Filter</h1>
            </div>
                                <form action="student-university-filter.php" method="POST">
                            <select name="university_name" class="form-select" aria-label="Default select example">
                                    <option selected>University_Name</option>
                                    <?php
                                    $qry="select * from university";
                                    $res=$con->query($qry);
                                    if($res->num_rows>0){
                                        while($data=$res->fetch_assoc()){
                                    
                                            echo "<option value='$data[universityname]'>$data[universityname]</option>";
                                   
                                    }}
                                   ?>
                            </select>
                            <br>
                            <select name="course" class="form-select" aria-label="Default select example">
                                    <option selected>Course</option>
                                    <?php
                                    $qry="SELECT DISTINCT * from course";
                                    $res=$con->query($qry);
                                    if($res->num_rows>0){
                                        while($data=$res->fetch_assoc()){
                                    
                                            echo "<option value='$data[course]'>$data[course]</option>";
                                   
                                    }}
                                   ?>
                            </select>
                            <br>
                            <select name="branch" class="form-select" aria-label="Default select example">
                                    <option selected>Branch</option>
                                    <?php
                                    $qry="select DISTINCT * from branch";
                                    $res=$con->query($qry);
                                    if($res->num_rows>0){
                                        while($data=$res->fetch_assoc()){
                                    
                                            echo "<option value='$data[branch]'>$data[branch]</option>";
                                   
                                    }}
                                   ?>
                            </select>
                            <br>
                            <select name="subject" class="form-select" aria-label="Default select example">
                                    <option selected>Subject</option>
                                    <?php
                                    $qry="select * from subject order by subject";
                                    $res=$con->query($qry);
                                    if($res->num_rows>0){
                                        while($data=$res->fetch_assoc()){
                                    
                                            echo "<option value='$data[subject]'>$data[subject]</option>";
                                   
                                    }}
                                   ?>
                            </select>
                            <br>
                            <select name="year" class="form-select" aria-label="Default select example">
                                    <option selected>Year</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                            </select>
                            <br>
                            <select name="semester" class="form-select" aria-label="Default select example">
                                    <option selected>Semester</option>
                                    <option value="1 ST">1 ST</option>
                                    <option value="2 ND">2 ND</option>
                                    <option value="3 RD">3 RD</option>
                                    <option value="4 TH">4 TH</option>
                                    <option value="5 TH">5 TH</option>
                                    <option value="6 TH">6 TH</option>
                                    <option value="7 TH">7 TH</option>
                                    <option value="8 TH">8 TH</option>
                            </select>
                            <br> 
                            <button type="submit" name="submit" class="btn btn-primary float-end">Search</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="table-responsive">
                  <table class="table" style="color: white;">
                      <thead>
                          <tr>
                              <th>University Name</th>
                              <th>Course</th>
                              <th>Branch</th>
                              <th>Subject</th>
                              <th>year</th>
                              <th>Semester</th>
                              <th>View</th>
                          </tr>
                      </thead>
                
                  <tbody>
                      <?php
                      $con=new mysqli("localhost","root","","qbms");

                      if($con->connect_error){
                          die("Something went wrong");
                      }
                      if(isset($_POST['submit'])){
                        $university_name=$_POST['university_name'];
                        $course=$_POST['course'];
                        $branch=$_POST['branch'];
                        $subject=$_POST['subject'];
                        $year=$_POST['year'];
                        $semester=$_POST['semester'];
                       
                        if($university_name != "" || $course != "" || $branch != "" || $subject != "" || $year != "" ||
                         $semester != ""){
                          $qry="select * from  university_questions where universityname='$university_name' and course='$course' and branch='$branch' and subject='$subject' and 
                            year=$year and semester='$semester'";
                           
                          

                            $res=$con->query($qry);
                            if($res->num_rows>0){
                                while($row=$res->fetch_assoc()){
                                    $university_name=$row['universityname'];
                                    $course=$row['course'];
                                    $branch=$row['branch'];
                                    $subject=$row['subject'];
                                    $year=$row['year'];
                                    $semester=$row['semester'];
                                    ?>

                                    <tr>
                                        <td><?php echo $university_name;?></td>
                                        <td><?php echo $course;?></td>
                                        <td><?php echo $branch;?></td>
                                        <td><?php echo $subject;?></td>
                                        <td><?php echo $year;?></td>
                                        <td><?php echo $semester;?></td>
                                        <td><?php echo "<a href=\"$row[file_path]\" target='_blank'>"."<i class=\"fa fa-eye fa-2x\"></i>"."</a>";?></td>
                                    </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td>Records not found</td>
                                </tr>
                                <?php
                            }

                         }
                      }
                      ?>
                  </tbody>
                  </table>
                  </div>
                </div>
                </div>
            </div>



        </div>
    </section>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- End Services Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row text-center">
                

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>
<?php   }else{
    header("location:login.php");}?>