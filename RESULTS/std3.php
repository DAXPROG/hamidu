<?php
 echo '
 <h2 style="text-align:center;margin:0px;padding:2px;background-color:darkgreen;color:white;">STUDENTS RESULTS UPDATION</h2>
 <table border="1" cellspacing="0" cellpadding="5px" style="margin:5px 5px;">
 
 <form method="POST">
 
 <tr style="background-color: rgb(11, 83, 128); color:white;padding:2px;">
  <th style="padding:2px;">Student name</th>
  <th style="padding:2px;">Class</th>
  <th style="padding:2px;">MATH</th>
  <th style="padding:2px;">KISW</th>
  <th style="padding:2px;">Civ</th>
  <th style="padding:2px;">S.Studies</th>
  <th style="padding:2px;">ENG</th>
  <th style="padding:2px;">SCIE</th>
  <th style="padding:2px;">Vocation</th>
  <th style="padding:2px;">Religion</th>
  <th style="padding:2px;">Total</th>
  <th style="padding:2px;">Average</th>
  <th style="padding:2px;">Position</th>
 </tr>';
 if(is_array($results)){
  $_SESSION['jumlaaa'] = count($results);
   $count = 0;
   foreach($results as $row){
    $count++;
  echo '
 
  
   <tr style="background-color:#ccc;">
   
     <td style="font-size:16px;font-family:arial;float:left;padding:5px 0px;border-right:none;">
       '.$row->firstname.' '.$row->midllename.' '.$row->surname.'
     </td>
     <td>
       '.$row->class.'
       <input type="hidden" name="id'.$count.'" value="'.$row->student_id.'" >
     <input type="hidden" name="stream'.$count.'" value="'.$row->stream.'" >

     </td>
     <td><input type="text" name="math'.$count.'" value="'.$row->mathematics.'" style="width:47px;padding:5px 0px;"></td>
     <td><input type="text" name="kisw'.$count.'" value="'.$row->kiswahili.'" style="width:47px;padding:5px 0px;"></td>
     <td><input type="text" name="civics'.$count.'" value="'.$row->civics_and_moral_education.'" style="width:47px;padding:5px 0px;"></td>
     <td><input type="text" name="eng'.$count.'" value="'.$row->english.'" style="width:47px;padding:5px 0px;"></td>
     <td><input type="text" name="social'.$count.'" value="'.$row->social_studies.'" style="width:47px;padding:5px 0px;"></td>
     <td><input type="text" name="science'.$count.'" value="'.$row->science.'" style="width:47px;padding:5px 0px;"></td>
     <td><input type="text" name="vocation'.$count.'" value="'.$row->vocation_skills.'" style="width:47px;padding:5px 0px;">
     </td>
     <td><input type="text" name="religion'.$count.'" value="'.$row->religion.'" style="width:47px;padding:5px 0px;">
     </td>
     <td>'.$row->total.'</td>
     <td>'.$row->average.'</td>';
     
     $id =  $row->student_id;
     $clas = $_SESSION['class'];
     $year =  $_SESSION['year'];
     $term =  $_SESSION['term'];
     $exam_type =  $_SESSION['exam_type'];
     $exam_date =  $_SESSION['exam_date'];
  
    $connect =mysqli_connect('localhost','root','','school_db');
      $ss = "SELECT * FROM results WHERE class = '$clas' AND year = '$year' AND term = '$term' AND exam_type = '$exam_type' AND exam_date = '$exam_date' ORDER BY average DESC";
           $result = mysqli_query($connect,$ss);
           $count = mysqli_num_rows($result);
  
           if($result->num_rows> 0){
            $poss = 1;
            while($row=$result->fetch_assoc()){
             
             if($row['student_id'] == $id && $row['class'] == $clas && $row['year'] == $year && $row['term'] == $term && $row['exam_type'] == $exam_type && $row['exam_date'] == $exam_date){
              echo '<td>'.$poss.'/'.$count.'</td>';
              
           }
             
           $poss++;
            }
            
            }

     echo '
   </tr>
   
   ';
  }
 }
 // mysqli_close();
 
 echo'
 <div>
 <input id="update" type="submit" name="update" style="display:none;">
 </div>
 </form>
 </table>
 <label id="lebo" for="update" style="width:100px;margin-left:6px;padding:10px 10px;border-radius:10px;cursor:pointer;background-color:darkgreen;color:white;float:left;">UPDATE</label>
 <form>
    <input type="submit" name="unset" value="CLOSE" style="background-color:red;color:white;border-radius:5px;border:none;padding:8px 5px;cursor:pointer;">
</form>

 '; 
 