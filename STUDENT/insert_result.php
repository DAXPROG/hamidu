<?php
if(isset($_POST['access'])){
 $data_info['class'] = $_POST['class'];
 $data_info['year'] = $_POST['year'];

$query_data = "SELECT DISTINCT students.student_id,students.firstname,students.midllename,students.surname,results.class,results.year,results.stream FROM students INNER JOIN results ON students.student_id = results.student_id WHERE results.class = :class AND results.year = :year ORDER BY students.firstname";
$results = $DB->read($query_data,$data_info);


echo '
<div style="padding:0px 10px;">
<h2 style="text-align:center;margin:0px;padding:2px;background-color:darkgreen;color:white;">INSERT STUDENTS RESULTS</h2>
<table border="1" cellspacing="0" cellpadding="5px" style="margin:5px 5px;">

<form method="POST">

<tr style="background-color: rgb(11, 83, 128); color:white;padding:2px;">
 <th style="padding:2px;">Student name</th>
 <th style="padding:2px;">Class</th>
 <th style="padding:2px;">Term</th>
 <th style="padding:2px;">Exam type</th>
 <th style="padding:2px;">Exam date</th>
 <th style="padding:2px;">MATH</th>
 <th style="padding:2px;">KISW</th>
 <th style="padding:2px;">Civ</th>
 <th style="padding:2px;">S.Studies</th>
 <th style="padding:2px;">ENG</th>
 <th style="padding:2px;">SCIE</th>
 <th style="padding:2px;">Vocation</th>
 <th style="padding:2px;">Religion</th>
</tr>';
if(is_array($results)){
 $_SESSION['jumlaa'] = count($results);
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
    </td>
    <td>
    <input type="hidden" name="id'.$count.'" value="'.$row->student_id.'" >
    <input type="hidden" name="class'.$count.'" value="'.$row->class.'" >
    <input type="hidden" name="stream'.$count.'" value="'.$row->stream.'" >
    <input type="hidden" name="year'.$count.'" value="'.$row->year.'" >
      <select name="term'.$count.'" style="padding:5px;border-radius:10px;">
        <option>Term</option>
        <option>term1</option>
        <option>term2</option>
      </select>
    </td>
    <td>
      <select name="exam_type'.$count.'" style="padding:5px;border-radius:10px;">
        <option>Exam type</option>
        <option>weeklytest</option>
        <option>monthlytest</option>
        <option>midterm1</option>
        <option>terminal</option>
        <option>midterm2</option>
        <option>annual</option>
      </select>
     </td>
     <td>
      <input type="date" name="exam_date'.$count.'" style="padding:5px;border-radius:10px;">
    </td>
    <td><input type="text" name="math'.$count.'" style="width:47px;padding:5px 0px;"></td>
    <td><input type="text" name="kisw'.$count.'" style="width:47px;padding:5px 0px;"></td>
    <td><input type="text" name="civics'.$count.'" style="width:47px;padding:5px 0px;"></td>
    <td><input type="text" name="eng'.$count.'" style="width:47px;padding:5px 0px;"></td>
    <td><input type="text" name="social'.$count.'" style="width:47px;padding:5px 0px;"></td>
    <td><input type="text" name="science'.$count.'" style="width:47px;padding:5px 0px;"></td>
    <td><input type="text" name="vocation'.$count.'" style="width:47px;padding:5px 0px;">
    </td>
    <td><input type="text" name="religion'.$count.'" style="width:47px;padding:5px 0px;"></td>
  </tr>
  
  ';
 }
}
// mysqli_close();

echo'
<div>
<input id="insert" type="submit" name="insert" style="display:none;">
</div>
</form>
</table>
<label id="lebo" for="insert" style="width:100px;padding:10px 0px 0px 0px;border-radius:10px;cursor:pointer;background-color:black;">INSERT</label>
</div>
'; 
}

