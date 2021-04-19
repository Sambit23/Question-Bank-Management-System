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
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="student.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
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
                                <a class="nav-link" href="student-view-mcq.php">Home</a>
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
                        
                            $id=$_GET['subject'];
                            $query="select * from subject where subject='$id' ";

                            $result=$con->query($query);
                            if($result->num_rows>0){
                                while($row = mysqli_fetch_array($result)){
                                    echo "$row[subject]";
                                }
                            }
                       
                        
                        ?></h1>
            </div>
            <br><br><br><br><br>
          
            

        </div>

<div class="container">
        <div class="table-responsive">
            <table class="table" style="color: white;">
                        
            <?php

        $connect= new mysqli("localhost","root","","qbms");

        if($connect->connect_error){
          die("Connection lost");
        }
            $id=$_GET['subject'];
            $query="select * from mcq_questions where subject='$id' ";

            $result=$connect->query($query);
            $key = 0;
            if($result->num_rows>0){
                while($row = mysqli_fetch_array($result)){
                    $key += 1;
                    echo "<ol class=\"list-group list-group-numbered\" style=\"color:black;\">";
                    echo" <li class=\"list-group-item d-flex justify-content-between align-items-start\">";
                    echo   " <div class=\"ms-2 me-auto\">";
                    echo " <div class=\"fw-bold\">"."<pre>".'Q.'." ".$row['question']."</pre>"."</div>"; echo "<br>";
                   
                    echo "a.$row[op1]";
                   echo "<br>";
                    echo "<br>";
                    echo "b.$row[op2]";
                   echo "<br>";
                   echo "<br>";
                   echo "c.$row[op3]";
                   echo "<br>";
                   echo "<br>";
                   echo "d.$row[op4]";
                   echo "  </div>";
                
                   echo" </li>";
                   echo "</ol>" ;
                
                   echo  "<div class=\"accordion accordion-flush\" id=\"accordionFlushExample$key\">";
                   echo    "<div class=\"accordion-item\">";
                   echo         "<h2 class=\"accordion-header\" id=\"flush-headingOne\">";
                   echo            "<button class=\"accordion-button collapsed bg-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne$key\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne$key\">";
                   echo                'Correct Answer';
                   echo             "</button>";
                   echo        "</h2>";
                   echo     "<div id=\"flush-collapseOne$key\" class=\"accordion-collapse collapse bg-white\" aria-labelledby=\"flush-headingOne\" data-bs-parent=\"#accordionFlushExample$key\">";
                   echo           "<div style=\"color:black;\" class=\"accordion-body\">".$row['correct_option']."<br><br>"."<pre>".$row['explanation']."</pre>"."</div>";
                   echo     " </div>";
                  echo    "</div>";
                   echo  "</div>";
                   echo "<br>";
    

              }
            }else{
               echo "<div style=\"color:white;\">".'No data Found'."</div";
            }


            ?>
                    </table>
                </div>
                </div>
    </section>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- End Services Section -->


    
    <!-- ======= Footer ======= -->
   
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  

</body>

</html>
<?php   }else{
    header("location:login.php");}?>