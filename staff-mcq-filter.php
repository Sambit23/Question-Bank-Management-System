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
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   
    <title>MCQ</title>
    
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
                    <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                        
                    <li class="nav-item">
                    <a class="nav-link" href="Staff-MCQ.php">Back</a>
                            
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

            
            <br><br><br><br><br>

            <div class="container">
            <div class="row">

           
                            <div class="section-title">
                            <h1 style="color:white">
                                             Filter</h1>
                        </div>
                                <form action="staff-mcq-filter.php" method="POST">
                            <select name="subject" class="form-select" aria-label="Default select example">
                                    <option selected>Subject</option>
                                    <?php
                                    $qry="select * from subject";
                                    $res=$con->query($qry);
                                    if($res->num_rows>0){
                                        while($data=$res->fetch_assoc()){
                                    
                                            echo "<option value='$data[subject]'>$data[subject]</option>";
                                   
                                    }}
                                   ?>
                            </select>
                            <br>
                           
                          
                            <button type="submit" name="submit" class="btn btn-primary float-end">Search</button>
                            </form>
                          
            </div>
            <div class="section-title">
              
            </div>
<br><br><br>
         
                   
                    <div class="table-responsive">
                  <table class="table" style="border-collapse: collapse; color: black;background-color: whitesmoke; padding: 20px; border-radius: 5px;">
                      <thead>
                          <tr>
                              <th style=" border: 2px solid black;">Id</th>
                              <th style=" border: 2px solid black;">Subject</th>
                              <th style=" border: 2px solid black;">Question</th>
                              <th style=" border: 2px solid black;">Option-1</th>
                              <th style=" border: 2px solid black;">Option-2</th>
                              <th style=" border: 2px solid black;">Option-3</th>
                              <th style=" border: 2px solid black;">Option-4</th>
                              <th style=" border: 2px solid black;">Correct-Option</th>
                              <th style=" border: 2px solid black;">Explanation</th>
                              <th style=" border: 2px solid black;">Delete</th>
                          </tr>
                      </thead>
                
                  <tbody>
                      <?php
                      $con=new mysqli("localhost","root","","qbms");

                      if($con->connect_error){
                          die("Something went wrong");
                      }
                      if(isset($_POST['submit'])){
                        $subject=$_POST['subject'];
                      
                       
                        if($subject != "" ){
                          $qry="select * from  mcq_questions where subject='$subject'";
                           
                          

                            $res=$con->query($qry);
                            if($res->num_rows>0){
                                while($row=$res->fetch_assoc()){
                                    $id=$row['q_id'];
                                    $subject=$row['subject'];
                                    $question=$row['question'];
                                    $op1=$row['op1'];
                                    $op2=$row['op2'];
                                    $op3=$row['op3'];
                                    $op4=$row['op4'];
                                    $co=$row['correct_option'];
                                    $exp=$row['explanation'];
                                    ?>

                                    <tr>
                                        <td style=" border: 2px solid black;"><?php echo $id;?></td>
                                        <td style=" border: 2px solid black;"><?php echo $subject;?></td>
                                        <td style=" border: 2px solid black;"><?php echo  "<pre>".$question."</pre>"?></td>
                                        <td style=" border: 2px solid black;"><?php echo $op1;?></td>
                                        <td style=" border: 2px solid black;"><?php echo $op2;?></td>
                                        <td style=" border: 2px solid black;"><?php echo $op3;?></td>
                                        <td style=" border: 2px solid black;"><?php echo $op4;?></td>
                                        <td style=" border: 2px solid black;"><?php echo $co;?></td>
                                        <td style=" border: 2px solid black;"><?php echo "<pre>".$exp."</pre>";?></td>
                                        <td style=" border: 2px solid black;"><?php echo "<a href=\"staff-delete-mcq-question2.php?delete=$row[q_id]\">"."<i class=\"fa fa-trash-alt fa-2x float-end\"></i>"."</a>";?></td>
                                    </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td style=" border: 2px solid black;">Records not found</td>
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
    header("location:staff-login.php");}?>