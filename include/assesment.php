<?php

if(isset($_POST['asesment'])){

 $id = $_SESSION['student_id'];
 $sql = "SELECT DISTINCT year,term FROM results WHERE student_id = '$id' AND term != '' AND exam_type != '' AND exam_date != '' AND (exam_type = 'weeklytest' || exam_type = 'monthlytest') ORDER BY year";
 $results = mysqli_query($connect,$sql);
 if($results){
  $mydata = "";
  $i = 0;
  foreach($results as $result){
   $i++;
   $mydata .= '
   <label id="label" for="for'.$i.'"><span id="arrow">:::::&#10095;</span><span style="color:yellow;">'.$result['year'].' '.$result['term'].'</span></label>
   
   <form method="post" id="form">
        <input type="hidden" name="year" value="'.$result['year'].'">
        <input type="hidden" name="term" value="'.$result['term'].'">
        <input type="submit" id="for'.$i.'" name="asessment" style="display:none;">
      </form>
   ';
   
  }
  echo $mydata;
 }
}
?>