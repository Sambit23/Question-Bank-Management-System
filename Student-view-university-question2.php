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
                                <a class="nav-link" href="Student-view-university-question.php">Home</a>
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

    <section id="services" class="services">
    <div class="container" data-aos="fade-up">

<div class="section-title">
    <h1><?php $con=new mysqli("localhost","root","","qbms");

if($con->connect_error){
    die("Something went wrong");
} 

$id=$_GET['university'];
$query="select * from university where universityname='$id' ";

    $result=$con->query($query);
    if($result->num_rows>0){
        while($row = mysqli_fetch_array($result)){
            echo "$row[universityname]";
        }
    }


?></h1>
</div>


<br><br><br>
<div class="container">
    <div class="table-responsive">
        
    
        <table class="table" style="color:black black;background-color: white; padding: 20px; border-radius: 5px;">
            <tr>
                
                <th style="border: 2px solid black;">University-Name</th>
                <th style="border: 2px solid black;">Courses</th>
                <th style="border: 2px solid black;">Branch</th>
                <th style="border: 2px solid black;">Subject</th>
                <th style="border: 2px solid black;">Batch</th>
                <th style="border: 2px solid black;">Semester</th>
               
                <th style="border: 2px solid black;">View</th>
                
             
                
            </tr>
            <?php

$connect= new mysqli("localhost","root","","qbms");

if($connect->connect_error){
die("Connection lost");
}
$id=$_GET['university'];
$query="SELECT * FROM university_questions WHERE universityname='$id' AND approved='1' ";

$result=$connect->query($query);

if($result->num_rows>0){
while($row = $result->fetch_assoc()){
echo "<tr  style=\"border:2px solid black; height:5rem;\">";

echo "<td style=\"border:2px solid black;\">".$row['universityname']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['course']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['branch']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['subject']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['year']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['semester']."</td>";


echo "<td style=\"border:2px solid black;\" class=\"ps-4\">"."<a target='_blank' href=\"$row[file_path]\">"."<i class=\"fa fa-eye fa-2x\"></i>"."</a>"."</td>";




echo "</tr>";

}
}else{
echo "There's no data in the table";
}


?>
        </table>
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
    header("location:login.php");}?>