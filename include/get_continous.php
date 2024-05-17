<?php
if(isset($_POST['asessment'])){
 $year = $_POST['year'];
 $term = $_POST['term'];

 $id = $_SESSION['student_id'];
 $sql = "SELECT exam_type,exam_date FROM results WHERE student_id = '$id' AND year = '$year' AND term = '$term' AND term != '' AND exam_type != '' AND exam_date != '' AND (exam_type = 'weeklytest' || exam_type = 'monthlytest') ORDER BY year";
 $results = mysqli_query($connect,$sql);
 if($results){
  $mydata = '
  <table border="2" cellspacing="0px" cellpadding="5px">
  <tr style="background-color:brown;color:aqua;">
   <th>EXAM DATE</th>
   <th>EXAM TYPE</th>
  </tr>
  ';
   $i = 0;
   foreach($results as $result){
    $i++;
    $mydata .= '
    <tr style="background-color:lightblue;">
      <form method="post">
        <td style="color:rgb(21, 60, 69);font-family:arial;"><label for="cont'.$i.'">'.$result['exam_date'].'</label></td>
        <td style="color:rgb(21, 60, 69);font-family:arial;"><label for="cont'.$i.'">'.$result['exam_type'].'</label></td>
        <input type="hidden" name="year" value="'.$year.'">
        <input type="hidden" name="term" value="'.$term.'">
        <input type="hidden" name="exam_date" value="'.$result['exam_date'].'">
        <input type="hidden" name="exam_type" value="'.$result['exam_type'].'">
        <input type="submit" id="cont'.$i.'" name="cont" style="display:none;">
      </form>
    </tr>
    ';
    
   }
   $mydata .= '
   </table>
   ';
   echo $mydata;
  }
 // echo $_POST['year'];
 // echo $_POST['term'];
}

if(isset($_POST['cont'])){

$year =  $_POST['year'];
$term = $_POST['term'];
$exam_date = $_POST['exam_date'];
$exam_type = $_POST['exam_type'];

$id = $_SESSION['student_id'];
 $sql = "SELECT * FROM results WHERE student_id = '$id' AND year = '$year' AND term = '$term' AND exam_type = '$exam_type' AND exam_date = '$exam_date' AND term != '' AND exam_type != '' AND exam_date != '' AND (exam_type = 'weeklytest' || exam_type = 'monthlytest') ORDER BY year";
 $results = mysqli_query($connect,$sql);
 if($results){
  $mydata = '
  <center>
  <table border="2" cellspacing="0px" style="border-radius:10px;padding:2px;">
  <tr style="background-color:brown;color:aqua;border-radius:10px;">
        <th style="text-align:center;">Standard</th>
        <th style="text-align:center;">Stream</th>
        <th style="text-align:center;">Year</th>
        <th style="text-align:center;">term</th>
        <th style="text-align:center;">Exam type</th>
        <th style="text-align:center;">exam date</th>
  </tr>
  ';
   $i = 0;
   foreach($results as $result){
    $i++;
    $mydata .= '
    <tr style="background-color:lightblue;">
      
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$result['class'].'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$result['stream'].'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$result['year'].'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$result['term'].'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$result['exam_type'].'</td>
        <td style="color:rgb(21, 60, 69);font-family:arial;text-align:center;">'.$result['exam_date'].'</td>
       
    </tr>
    ';
    
   }
   $mydata .= '
   </table>
   
   ';
   echo $mydata;
   echo '</center>
   <br>
   ';
  }


  $sql_result = "SELECT * FROM results WHERE student_id = '$id' AND year = '$year' AND term = '$term' AND exam_type = '$exam_type' AND exam_date = '$exam_date' AND term != '' AND exam_type != '' AND exam_date != '' AND (exam_type = 'weeklytest' || exam_type = 'monthlytest') ORDER BY year";
 $runs = mysqli_query($connect,$sql_result);
 if($runs){
  $myresult = '
  <center>
  <table border="2" cellspacing="0px" style="border-radius:10px;padding:2px;">
  <tr style="background-color:brown;color:aqua;border-radius:10px;">
        <th style="text-align:center;">Subject</th>
        <th style="text-align:center;">Marks</th>
        <th style="text-align:center;">Grade</th>
        <th style="text-align:center;">Comment</th>
  </tr>
  ';
  
   foreach($runs as $run){
    if($run['class'] == "KGT 1" || $run['class'] == "KGT 2"){

        include('RESULTS/kgt.php');
    }else if($run['class'] == "STD 1" || $run['class'] == "STD 2"){
        
        include('RESULTS/std1.php');
    }else if($run['class'] == "STD 3" || $run['class'] == "STD 4" || $run['class'] == "STD 5" || $run['class'] == "STD 6" || $run['class'] == "STD 7"){
        
        include('RESULTS/std3.php');
    }

    
    
   }
   $myresult .= '
   </table>
   <span style="background-color:white;color:darkblue;">Class Teacher Comment:</span>
   <p style="width:320px;margin:0px;background-color:brown;color:lightblue;border-radius:10px;">'.$class_teacher.'</p><br>
   <span style="background-color:white;color:darkblue;">Head Teacher Comment:</span>
   <p style="width:320px;margin:0px;background-color:brown;color:lightblue;border-radius:10px;">'.$head_teacher.'</p>.';
   
   echo $myresult;
   echo '
   <br>
   <form method="POST">
     <input type="submit" name="download" value="Download Results" style="border-radius:10px;background-color:red;padding:10px 5px;color:white;">
   </form>
   ';
   echo '</center>';
  }

}


if(isset($_POST['termina'])){

 echo $_POST['year'];
 echo $_POST['term'];
}

if(isset($_POST['discipline'])){
 
 echo "Good discpline";
}


if(isset($_POST['logout'])){
 
 unset($_SESSION['student_id']);
 header('location: login.php');
}