<?php
if(isset($_POST['upgrades'])){
 $data_info['class'] = $_POST['class'];
 $data_info['year'] = $_POST['year'];

$query_data = "SELECT DISTINCT students.student_id,students.firstname,students.midllename,students.surname,results.class FROM students INNER JOIN results ON students.student_id = results.student_id WHERE results.class = :class AND results.year = :year ORDER BY students.firstname";
$results = $DB->read($query_data,$data_info);


echo '
<div style="padding:0px 10px;">
<h2 style="text-align:center;margin:0px;padding:2px;background-color:darkgreen;color:white;">STUDENTS CLASS UPGRATION</h2>
<table border="1" cellspacing="0" style="margin:5px 5px;">

<form method="POST">

<tr style="background-color: rgb(11, 83, 128); color:white;padding:2px;">
 <th style="padding:2px;">Firstname</th>
 <th style="padding:2px;">Middlename</th>
 <th style="padding:2px;">Lastname</th>
 <th style="padding:2px;">CURRENT CLASS</th>
 <th style="padding:2px;">UPGRADE TO</th>
</tr>';
if(is_array($results)){
 $_SESSION['jumla'] = count($results);
  $count = 0;
  foreach($results as $row){
   $count++;
 echo '

 
  <tr style="background-color:#ccc;">
  
    <td>
      '.$row->firstname.'
    </td>
    <td>
      '.$row->midllename.'
    </td>
    <td>
      '.$row->surname.'
    </td>
    <td>
      '.$row->class.'
    </td>
    <td>
    <input type="hidden" name="id'.$count.'" value="'.$row->student_id.'">
      <select name="new_class'.$count.'" required>
        <option>New class</option>
        <option>KGT 1</option>
        <option>KGT 2</option>
        <option>KGT 3</option>
        <option>STD 1</option>
        <option>STD 2</option>
        <option>STD 3</option>
        <option>STD 4</option>
        <option>STD 5</option>
        <option>STD 6</option>
        <option>STD 7</option>
      </select>
      <select name="new_stream'.$count.'" required>
        <option>Stream</option>
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
      </select>
      <select name="new_year'.$count.'" required>
        <option>Year</option>
        <option>2024</option>
     <option>2025</option>
     <option>2026</option>
     <option>2027</option>
     <option>2028</option>
     <option>2029</option>
     <option>2030</option>
     <option>2031</option>
     <option>2032</option>
     <option>2033</option>
     <option>2034</option>
     <option>2035</option>
     <option>2036</option>
     <option>2037</option>
     <option>2038</option>
     <option>2039</option>
     <option>2040</option>
     <option>2041</option>
     <option>2042</option>
     <option>2043</option>
     <option>2044</option>
     <option>2045</option>
     <option>2045</option>
     <option>2047</option>
     <option>2048</option>
     <option>2049</option>
     <option>2050</option>
      </select>
    </td>
  </tr>
  
  ';
 }
}

echo'
<div>
<input id="upgrade_class" type="submit" name="upgrade_class" style="display:none;">
</div>
</form>
</table>
<form>
      <input type="submit" name="unset" value="CLOSE" style="background-color:red;color:white;border-radius:5px;border:none;">
     </form>
<label for="upgrade_class" style="width:100px;padding:5px;border-radius:10px;cursor:pointer;">UPGRADE</label>
</div>
'; 
// mysqli_close();
}

