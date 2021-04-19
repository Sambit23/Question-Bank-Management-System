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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="footer.css">
    <title>Admin</title>
</head>

<body>
    <!--Header-->

    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="nave">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php
             $user_email=$_SESSION['username'];
             echo "<h4> welcome $user_email </h4>";   
            ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin-page.php">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="university.php">University</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="courses.php">Course</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="staff.php">Staff</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Student.php">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="University-questions.php">University-questions</a>
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
                   
                </div>
            </div>
        </nav>
    </header>
    </div>
    <!--End of header-->
    <!-- ======= Services Section ======= -->

    <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
            <h1>MCQs</h1>
        </div>
        <div class="container-fluid">
    <div class="table-responsive">
        
  
        <table class="table"  style="color: black;background-color: white; padding: 20px; border-radius: 5px;">
            <tr>
                <th style="border: 2px solid black;">id</th>
                <th style="border: 2px solid black;">Subject</th>
                <th style="border: 2px solid black;">Question</th>
                <th style="border: 2px solid black;">Option-1</th>
                <th style="border: 2px solid black;">Option-2</th>
                <th style="border: 2px solid black;">Option-3</th>
                <th style="border: 2px solid black;">Option-4</th>
                <th style="border: 2px solid black;">Correct-option</th>
                <th style="border: 2px solid black;">Explanation</th>
                <th style="border: 2px solid black;">Uploaded-By</th>
                <th style="border: 2px solid black;">Delete</th>
                
            </tr>
            <?php

$connect= new mysqli("localhost","root","","qbms");

if($connect->connect_error){
die("Connection lost");
}

$query="select * from mcq_questions";

$result=$connect->query($query);

if($result->num_rows>0){
while($row = $result->fetch_assoc()){
echo "<tr  style=\"border:2px solid black; height:5rem;\">";
echo "<td style=\"border:2px solid black;\">".$row['q_id']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['subject']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['question']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['op1']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['op2']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['op3']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['op4']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['correct_option']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['explanation']."</td>";
echo "<td style=\"border:2px solid black;\">".$row['uploaded_by']."</td>";

echo "<td style=\"border:2px solid black;\" class=\"ps-4\">"."<a href=\"delete-mcq-question.php?delete=$row[q_id]\">"."<i class=\"fa fa-trash-alt fa-2x\"></i>"."</a>"."</td>";

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
        <br><br><br><br><br>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- End Services Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row text-center">

                    <div class="col-lg-6 col-md-6">
                        <div class="footer-info" id="info">
                            <h3>Appstone<span>.</span></h3>
                            <p text-align-sm-left>
                                428 DLF Cybercity <br> Chandaka Industrial Estate, Patia, Bhubaneswar, Odisha 751024<br><br>
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