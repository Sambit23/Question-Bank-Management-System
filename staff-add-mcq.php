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
    <title>MCQ</title>
</head>

<body>
    <!--Header-->

    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="nave">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php
                 $user_email=$_SESSION['user'];
                 echo "<h5> welcome $user_email </h5>";
                 ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Staff-MCQ.php">Back</a>

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
    <!-- <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h1>
                    MCQ</h1>
            </div>
            <br><br><br><br><br>




        </div>
    </section> -->
     
    <?php
$con= new mysqli("localhost","root","","qbms");

if($con->connect_error){
die("Connection lost");
}
$msg="";

$qry="select distinct subject from subject order by subject";
$courses=$con->query($qry);

if (isset($_POST['add'])) {
    $subject = $_POST['subject'];
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $correct_option=$_POST['correct_option'];
    $explanation=$_POST['explanation'];

    $question = str_replace("'", "''", $question);
    $option1 = str_replace("'", "''", $option1);
    $option2 = str_replace("'", "''", $option2);
    $option3 = str_replace("'", "''", $option3);
    $option4 = str_replace("'", "''", $option4);
    $explanation= str_replace("'", "''", $explanation);

    $qry="";
    for($i=0;$i<count($question);$i++){
        $qry.="insert into mcq_questions values(0,'$subject','$question[$i]','$option1[$i]','$option2[$i]','$option3[$i]','$option4[$i]','$correct_option[$i]',' $explanation[$i]','$user_email');";
    }
    if($con->multi_query($qry)){
        header("location:Staff-MCQ.php");
        exit();
    }
    else{
        $msg=$con->error;
    }
}
?>

<div class="container">
    <div class="content-area1">
        <div class="container">
            <div class="row justify-content-center text-center">
        
          
                    <h3 class="mt-5">Add MCQ</h3>
               <br><br><br><br><br><br><br>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                
                                <select name="subject" class="form-control" required>
                                    <option value="">Subject</option>
                                    <?php
                                        if($courses->num_rows >0){
                                            while($c=$courses->fetch_assoc()){
                                                echo "<option value='$c[subject]'>$c[subject]</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div id="questions">
                            <div class="row justify-content-center mt-1 question_row">
                                <div class="col-lg-12">
                                   <pre> <textarea type="text" name="question[]" class="form-control" placeholder="Question" autocomplete="off" required></textarea></pre>
                                    <!-- <textarea class="form-control"></textarea> -->
                                </div>
                               <br><br><br>
                                <div class="col-lg-6">
                                
                                    <input type="text"  name="option1[]" class="form-control" placeholder="Option One" autocomplete="off" required>
                                </div>
                                <div class="col-lg-6">
                                    
                                    <input type="text" name="option2[]" class="form-control" placeholder="Option Two" autocomplete="off" required>
                                </div>
                                <div class="col-lg-6">
                                    
                                    <input type="text" name="option3[]" class="form-control" placeholder="Option Three" autocomplete="off" required>
                                </div>
                                <div class="col-lg-6">
                                   
                                    <input type="text" name="option4[]" class="form-control" placeholder="Option Four" autocomplete="off" required>
                                </div>
                                <div class="col-lg-12">
                    
                                    <select name="correct_option[]" class="form-control" required>
                                        <option value="">Correct Option</option>
                                        <option value="(a)">(a)</option>
                                        <option value="(b)">(b)</option>
                                        <option value="(c)">(c)</option>
                                        <option value="(d)">(d)</option>
                                    </select>
                                </div>
                                <br><br>
                                <div class="col-lg-12">
                                   
                                   <textarea  name="explanation[]" class="form-control " placeholder="Explanation" required></textarea>
                               </div>
                               <br><br><br><br><br><br>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-dark mr-2" onclick="return addRow()">Add More</button>
                                <input type="submit" class="btn btn-primary" name="add" Value="Submit">
                            </div>
                        </div>
                    </form>
             
                </div>
        </div>
        <br><br><br><br><br><br><br>
    </div>
</div>
<script>
    function addRow() {
       
        var element = document.querySelector('.question_row');
        var question = document.querySelector('#questions');

        var clone = element.cloneNode(true);

        var x = clone.getElementsByTagName("input");
        for(let i=0;i<x.length;i++){
            x[i].value='';
        }
        var y = clone.getElementsByTagName("textarea");
        for(let i=0;i<y.length;i++){
            y[i].value='';
        }
        
        question.appendChild(clone);
        return false;
    }
</script>
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