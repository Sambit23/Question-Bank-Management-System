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
    $uploaded_by=$_POST['uploaded_by'];
    $date_of_upload=$_POST['date_of_upload'];

    $pname=$_FILES["question"]["name"];

    $tname=$_FILES["question"]["tmp_name"];

    $file_path="added_question/$university_name/$course/$branch/$subject/$year/$semester/";
    $file_ab_path=$file_path."/".$pname;

    if (!is_dir($file_path)) {
        mkdir($file_path, 0777, true);
    }
   if(move_uploaded_file($tname,$file_ab_path)){
    
        $qry="insert into university_questions values(0,'$university_name','$course','$branch','$subject','$year','$semester','$uploaded_by','$file_ab_path',0,'$date_of_upload')";
        
        if($con->query($qry)){
            header("location:staff-question-upload.php");
        }
    }
        
else{
    echo "not done";
}

 }   

//  echo "<a href=\"delete-university-question.php?file=$pname\">";

    ?>