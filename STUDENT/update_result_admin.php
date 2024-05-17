<?php

if(isset($_POST['update_results'])){

  
  

 function insert_into_dbbb($data){
  foreach($data as $key => $value){
   $column = $key;
   $data = "'".$value."'";
   

      $sid = $_SESSION['get_idd'];
      $stream = $_SESSION['streamm'];
      $class = $_SESSION['classs'];
      $year = $_SESSION['yearr'];
      $exam_type = $_SESSION['exam_typee'];
      $term = $_SESSION['termm'];
      $exam_date = $_SESSION['exam_datee'];

  
   $conn = mysqli_connect("localhost","root","","school_db");
   $sql = "UPDATE results SET $column = $data WHERE student_id = '$sid' AND class = '$class' AND stream = '$stream' AND year = '$year' AND exam_type = '$exam_type' AND term = '$term' AND exam_date = '$exam_date' AND exam_type != '' AND term != '' AND exam_date != '';";
   $run_query = mysqli_query($conn,$sql);
   
  }
   if($run_query){
    echo '
    
    <h1 style="position:absolute;left:200px;right:200px;background-color:green;color:white;margin:0px;text-align:center;">STUDENTS SESULTS UPDATED SUCCESSFULY
    </h1>
    ';
   
   }
  }
 
 for($i=1; $i <= $_SESSION['jumlaaaa']; $i++){
    
    $_SESSION['get_idd'] = $_POST['id'.$i];
    $_SESSION['streamm'] = $_POST['stream'.$i];

    if($_SESSION['classs'] == "KGT 1" || $_SESSION['classs'] == "KGT 2"){
      echo "THIS IS KGT";
      }else if($_SESSION['classs'] == "STD 1" || $_SESSION['classs'] == "STD 2"){
       echo "THIS IS STD 1/2";

    }else if($_SESSION['classs'] == "STD 3" || $_SESSION['classs'] == "STD 4" || $_SESSION['classs'] == "STD 5" || $_SESSION['classs'] == "STD 6" || $_SESSION['classs'] == "STD 7"){

      $total = $_POST['math'.$i] + $_POST['kisw'.$i] + $_POST['civics'.$i] + $_POST['eng'.$i] + $_POST['social'.$i] + $_POST['science'.$i] + $_POST['vocation'.$i] + $_POST['religion'.$i];

  $average = $total/8;
     $data=array(
       'mathematics' => $_POST['math'.$i],
       'kiswahili' => $_POST['kisw'.$i],
       'civics_and_moral_education' => $_POST['civics'.$i],
       'english' => $_POST['eng'.$i],
       'social_studies' => $_POST['social'.$i],
       'science' => $_POST['science'.$i],
       'vocation_skills' => $_POST['vocation'.$i],
       'religion' => $_POST['religion'.$i],
       'total' => $total,
       'average' => $average
     );
     insert_into_dbbb($data);
    }


  
    }


}



?>