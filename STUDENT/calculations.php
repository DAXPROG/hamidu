<?php
$conn = mysqli_connect("localhost","root","","school_db");
$cal_query = "SELECT * FROM results WHERE term != '' || exam_type != '' || exam_date != ''";
$cal_results = mysqli_query($conn,$cal_query);

if($cal_results){
 foreach($cal_results as $cal_row){
  if($cal_row['class'] == "KGT 1"){}
  if($cal_row['class'] == "KGT 2"){}


  if($cal_row['class'] == "STD 1" || $cal_row['class'] == "STD 1"){}


  if($cal_row['class'] == "STD 3" || $cal_row['class'] == "STD 4" || $cal_row['class'] == "STD 5" || $cal_row['class'] == "STD 6" || $cal_row['class'] == "STD 7"){
   
  $total = $cal_row['mathematics'] + $cal_row['kiswahili'] + $cal_row['civics_and_moral_education'] + $cal_row['english'] + $cal_row['social_studies'] + $cal_row['science'] + $cal_row['vocation_skills'] + $cal_row['religion']; 

  $average = $total/8;
  $student_id = $cal_row["student_id"];

  $cal_sql = "UPDATE results SET total = '$total', average = '$average' WHERE  (term != '' || exam_type != '' || exam_date != '') AND student_id = '$student_id';";
  mysqli_query($conn,$cal_sql);
  }

 }
}