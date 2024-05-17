<?php
session_start();
$class = $_SESSION['class_teacher_id'];
$classs = $_SESSION['class_teacher_id2'];
$year = $_SESSION['class_teacher_year'];
$id = $_SESSION['class_teacher_id0'];

$con = mysqli_connect('localhost','root','','school_db');
$query = "SELECT * FROM teachers WHERE teacher_id = '$id' AND usertype ='$classs' AND year = '$year';";
$runs = mysqli_query($con,$query);


if($runs){
  foreach($runs as $run){
    if($run['status'] == 'OFF'){
      echo "<h1 style='background-color:red;color:white;text-align:center;'>SORRY THE ACCESS FOR RESULTS UPDATION IS CURRENTLY CLOSSED!</h1>";
      die;
    }
  }

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>CLASS TEACHER DASHBOARD</title>
</head>
<style>
 body{
  margin:0px;
  padding:0px;
  /* background-color:black; */
 }
  #top{
   display:flex;
   min-width:500px;
   min-height:500px;
   background-color:black;
  }
  #left{
   flex:1;
   background-color:lightgreen;
  }
  #right{
   flex:6;
   background-color:rgb(170, 6, 80);
  }
  #ay{
   width:100%;
   padding:15px 10px;
   text-align:center;
   font-size:18px;
   font-weight:bold;
   background-color:rgb(2, 56, 84);
   color:aqua;
   border:none;
   border-bottom:solid thin white;
   transition:0.6s ease;
  }
  #ay:hover{
   transform: translateY(-4px);
   opacity:0.6;
  }
  option{
   background-color:yellow;
   color:darkblue;
  }
  @media (max-width:800px) {
   #ay{
    font-size:12px;
    padding:10px 0px;
   }
   #left{
    flex:0.6;
   }
   #right{
    flex:3;
   }
  }
  #btn{
   background-color:rgb(150, 62, 8);
   width:100%;
   border-radius:10px;
   border:none;
   padding:10px 20px;
   color:white;
   font-size:20px;
   transition:0.6s ease;
  }
  #btn:hover{
   opacity:0.7;
   cursor:pointer;
   padding:8px 18px;
  }
  #btn:active{
   
   opacity:0.4;
  }
  #lebo:hover{
   
   opacity:0.5;
  }
  #logout{
    border-radius: 10px;
    width: 100%;
    float:bottom;
    padding:10px 20px;
    background-color:#ccc;
    transition:1s ease;
  }
  #logout:hover{
    background-color:aqua;
    font-size: 20px;
  }
  #footer{
   z-index:2;
   font-size: 18px;
   background-color: #788695;
   color: white;
   text-align: center;
   padding:10px;
  }
</style>
<body>
 
    <h1 style="margin:0px;"><marquee scrolldelay=""  behavior="alternate" direction="right" style="margin: 0;color:black;font-size:22px;"><u>BAPTIST</u> <u>PRIMARY</u> <u>SCHOOL</u></marquee></h1>
    <h1 style="margin:0px;"><marquee scrolldelay=""  behavior="alternate" direction="left" style="margin: 0;color:black;font-size:22px;"><u>CLASS</u> <u>TEACHER</u> <u>DASHBOARD</u></marquee></h1>
 <div id="top">
  
  <div id="left">

   <form method="post">
     <select name="exam_type" id="ay">
      <option>Exam type</option>
      <?php

      $conn = mysqli_connect("localhost","root","","school_db");
      $query = "SELECT DISTINCT exam_type  FROM results WHERE class = '$class' AND year ='$year' AND exam_type !='';";
      $results = mysqli_query($conn,$query);
      if($results){
     foreach($results as $result){
      ?>
      <option><?php echo $result['exam_type'];?></option>

      <?php

     }
    }else{
      echo "data not found";
    }
      ?>
     </select>
     <br>
     <select name="term" id="ay">
      <option value="">Term</option>
      <?php

          $conn = mysqli_connect("localhost","root","","school_db");
          $query = "SELECT DISTINCT term  FROM results WHERE class = '$class' AND year ='$year' AND term != '';";
          $results = mysqli_query($conn,$query);
          if($results){
          foreach($results as $result){
          ?>
          <option><?php echo $result['term'];?></option>

          <?php

          }
          }else{
          echo "data not found";
          }
          ?>
     </select>
     <br>
     <select name="exam_date" id="ay">
      <option>Exam date</option>
     <?php

        $conn = mysqli_connect("localhost","root","","school_db");
        $query = "SELECT DISTINCT exam_date  FROM results WHERE class = '$class' AND year ='$year' AND exam_date != '';";
        $results = mysqli_query($conn,$query);
        if($results){
        foreach($results as $result){
        ?>
        <option><?php echo $result['exam_date'];?></option>

        <?php

        }
        }else{
        echo "data not found";
        }
        ?>
     </select>
     <br>
     <input type="submit" id="btn" name="open" value="OPEN">
    </form>
    <form action="logout.php" method="POST">
      <input id="logout" type="submit" name="c_t_logout" value="LOGOUT">
    </form>
  </div>

  <div id="right" style="height:500px;overflow-x:scroll;text-align: center;padding:0px 10px;">
   <div id="contents">
<!-- HER WE CALL THE RESULTS FOR THE UPDATION PROCESS -->
<!-- HER WE CALL THE RESULTS FOR THE UPDATION PROCESS -->
<!-- HER WE CALL THE RESULTS FOR THE UPDATION PROCESS -->
<!-- HER WE CALL THE RESULTS FOR THE UPDATION PROCESS -->
<!-- HER WE CALL THE RESULTS FOR THE UPDATION PROCESS -->
<!-- HER WE CALL THE RESULTS FOR THE UPDATION PROCESS -->
   <?php
   require_once("classes/autoload.php");
   $DB = new Database();
     
     if(isset($_POST['open'])){

      $data_info['class'] = $_SESSION['class_teacher_id'];
      $data_info['year'] = $_SESSION['class_teacher_year'];
      $data_info['exam_type'] = $_POST['exam_type'];
      $data_info['term'] = $_POST['term'];
      $data_info['exam_date'] = $_POST['exam_date'];

      $_SESSION['class'] = $_SESSION['class_teacher_id'];
      $_SESSION['year'] = $_SESSION['class_teacher_year'];
      $_SESSION['exam_type'] = $_POST['exam_type'];
      $_SESSION['term'] = $_POST['term'];
      $_SESSION['exam_date'] = $_POST['exam_date'];
     
     $query_data = "SELECT * FROM students INNER JOIN results ON students.student_id = results.student_id WHERE results.exam_type = :exam_type AND results.term = :term AND results.exam_date = :exam_date AND results.class = :class AND results.year = :year ORDER BY students.firstname";
     $results = $DB->read($query_data,$data_info);
     
     
     if($_SESSION['class'] == "KGT 1" || $_SESSION['class'] == "KGT 2"){

     include('RESULTS/kgt1.php');
    }else if($_SESSION['class'] == "STD 1" || $_SESSION['class'] == "STD 2"){
      
      include('RESULTS/std12.php');
      }else if($_SESSION['class'] == "STD 3" || $_SESSION['class'] == "STD 4" || $_SESSION['class'] == "STD 5" || $_SESSION['class'] == "STD 6" || $_SESSION['class'] == "STD 7"){
        
        include('RESULTS/std3.php');
     }

     }
   ?>
  </div>
  </div>
 </div>
 <div id="footer">
    @Designed By Hamidu System developer
   </div>
</body>
</html>

<?php

if(isset($_POST['update'])){

  
  

 function insert_into_dbb($data){
  foreach($data as $key => $value){
   $column = $key;
   $data = "'".$value."'";
   

      $sid = $_SESSION['get_id'];
      $stream = $_SESSION['stream'];
      $class = $_SESSION['class'];
      $year = $_SESSION['year'];
      $exam_type = $_SESSION['exam_type'];
      $term = $_SESSION['term'];
      $exam_date = $_SESSION['exam_date'];
  
   $conn = mysqli_connect("localhost","root","","school_db");
   $sql = "UPDATE results SET $column = $data WHERE student_id = '$sid' AND class = '$class' AND stream = '$stream' AND year = '$year' AND exam_type = '$exam_type' AND term = '$term' AND exam_date = '$exam_date' AND exam_type != '' AND term != '' AND exam_date != '';";
   $run_query = mysqli_query($conn,$sql);
   
  }
   if($run_query){
    echo '
    <h1 style="position:absolute;left:0px;right:0px;background-color:green;color:white;margin:0px;text-align:center;">STUDENTS RESULTS UPDATED SUCCESSFULY</h1>
    ';
   }
  }
 


 for($i=1; $i <= $_SESSION['jumlaaa']; $i++){

  $_SESSION['get_id'] = $_POST['id'.$i];
  $_SESSION['stream'] = $_POST['stream'.$i];

 if($_SESSION['class'] == "KGT 1" || $_SESSION['class'] == "KGT 2"){
      echo "THIS IS KGT 1/2";
      }else if($_SESSION['class'] == "STD 1" || $_SESSION['class'] == "STD 2"){
       echo "THIS IS STD 1/2";

    }else if($_SESSION['class'] == "STD 3" || $_SESSION['class'] == "STD 4" || $_SESSION['class'] == "STD 5" || $_SESSION['class'] == "STD 6" || $_SESSION['class'] == "STD 7"){

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
     insert_into_dbb($data);
    }
}

}
}




?>