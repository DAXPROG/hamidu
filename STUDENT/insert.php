<?php

if(isset($_POST['insert'])){
  
 function insert_into_dbb($data){
  foreach($data as $key => $value){
   $k[] = $key;
   $v[] = "'".$value."'";
   }
   $k=implode(",", $k);
   $v=implode(",", $v);
  
   $conn = mysqli_connect("localhost","root","","school_db");
   $sql = "INSERT INTO results($k) VALUES($v)";
   $run_query = mysqli_query($conn,$sql);
   
   if($run_query){
    echo '
    <h1 style="backgroung-color:green;color:white;">STUDENTS SESULTS INSERTED SUCCESSFULY</h1>
    ';
   }
   echo '
   <form>
    <input type="submit" name="unset" value="STOP QUERY" style="background-color:red;color:white;border-radius:5px;border:none;">
   </form>
   ';
  }
 


 for($i=1; $i <= $_SESSION['jumlaa']; $i++){

  if($_POST['term'.$i] == "Term"){
   echo '
   <h1 style="background-color:red;color:white;margin:0;">PLEASE SELECT TERM ON LINE '.$i.'</h1>';
    }else if($_POST['exam_type'.$i] == "Exam type"){
     echo '<h1 style="background-color:red;color:white;margin:0;">PLEASE SELECT EXAM TYPE ON LINE '.$i.'</h1>';
    }else{

     $data=array(
       'student_id' => $_POST['id'.$i],
       'class' => $_POST['class'.$i],
       'stream' => $_POST['stream'.$i],
       'year' => $_POST['year'.$i],
       'term' => $_POST['term'.$i],
       'exam_type' => $_POST['exam_type'.$i],
       'exam_date' => $_POST['exam_date'.$i],
       'mathematics' => $_POST['math'.$i],
       'kiswahili' => $_POST['kisw'.$i],
       'civics_and_moral_education' => $_POST['civics'.$i],
       'english' => $_POST['eng'.$i],
       'social_studies' => $_POST['social'.$i],
       'science' => $_POST['science'.$i],
       'vocation_skills' => $_POST['vocation'.$i],
       'religion' => $_POST['religion'.$i]
     );
     insert_into_dbb($data);
    }
}
}
?>