<?php
if(isset($_POST['get_results'])){

 $data_info['class'] = $_POST['class'];
 $data_info['year'] = $_POST['year'];
 $data_info['exam_type'] = $_POST['exam_type'];
 $data_info['term'] = $_POST['term'];
 $data_info['exam_date'] = $_POST['exam_date'];

 $_SESSION['classs'] = $data_info['class'];
 $_SESSION['yearr'] = $data_info['year'];
 $_SESSION['exam_typee'] = $data_info['exam_type'];
 $_SESSION['termm'] = $data_info['term'];
 $_SESSION['exam_datee'] = $data_info['exam_date'];



$query_data = "SELECT * FROM students INNER JOIN results ON students.student_id = results.student_id WHERE results.exam_type = :exam_type AND results.term = :term AND results.exam_date = :exam_date AND results.class = :class AND results.year = :year ORDER BY students.firstname";
$results = $DB->read($query_data,$data_info);

if($_SESSION['classs'] == "KGT 1" || $_SESSION['classs'] == "KGT 2"){

  include('RESULTS/kgt1.php');
 }else if($_SESSION['classs'] == "STD 1" || $_SESSION['classs'] == "STD 2"){
   
   include('RESULTS/std12.php');
   }else if($_SESSION['classs'] == "STD 3" || $_SESSION['classs'] == "STD 4" || $_SESSION['classs'] == "STD 5" || $_SESSION['classs'] == "STD 6" || $_SESSION['classs'] == "STD 7"){
     
     include('RESULTS/std3.php');
  }


}