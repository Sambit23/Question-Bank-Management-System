<?php
$con= new mysqli("localhost","root","","qbms");

if($con->connect_error){
die("Connection lost");
}
$msg="";

$qry="select distinct subject from course order by subject";
$courses=$con->query($qry);

if (isset($_POST['add'])) {
    $subject = $_POST['subject'];
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $correct_option=$_POST['correct_option'];

    $question = str_replace("'", "''", $question);
    $option1 = str_replace("'", "''", $option1);
    $option2 = str_replace("'", "''", $option2);
    $option3 = str_replace("'", "''", $option3);
    $option4 = str_replace("'", "''", $option4);

    $qry="";
    for($i=0;$i<count($question);$i++){
        $qry.="insert into mcq_question values(0,'$subject','$question[$i]','$option1[$i]','$option2[$i]','$option3[$i]','$option4[$i]','$correct_option[$i]',$_SESSION[id]);";
    }
    if($con->multi_query($qry)){
        header("location:mcq.php");
        exit();
    }
    else{
        $msg=$con->error;
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>Add MCQ</h3>
                </div>
                <div class="card-body">
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
                            <div class="row mt-1 question_row">
                                <div class="col-lg-2">
                                    <input type="text" name="question[]" class="form-control" placeholder="Question" required>
                                    <!-- <textarea class="form-control"></textarea> -->
                                </div>
                                <div class="col-lg-2">
                                
                                    <input type="text" name="option1[]" class="form-control" placeholder="Option One" required>
                                </div>
                                <div class="col-lg-2">
                                    
                                    <input type="text" name="option2[]" class="form-control" placeholder="Option Two" required>
                                </div>
                                <div class="col-lg-2">
                                    
                                    <input type="text" name="option3[]" class="form-control" placeholder="Option Three" required>
                                </div>
                                <div class="col-lg-2">
                                   
                                    <input type="text" name="option4[]" class="form-control" placeholder="Option Four" required>
                                </div>
                                <div class="col-lg-2">
                    
                                    <select name="correct_option[]" class="form-control" required>
                                        <option value="">Correct Option</option>
                                        <option value="1">a</option>
                                        <option value="2">b</option>
                                        <option value="3">c</option>
                                        <option value="4">d</option>
                                    </select>
                                </div>
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
        </div>
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
        
        question.appendChild(clone);
        return false;
    }
</script>