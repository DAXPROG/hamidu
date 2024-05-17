<?php
 $info = (object)[];
 $data = false;

$mydata ='
<style>
 @keyframes para2{
  0%{opacity: 0; transform: translateY(50px);} 
  100%{opacity: 1; transform: translateY(0px)} 
}
 @keyframes para{
  0%{opacity: 0; transform: translateY(700px);} 
  100%{opacity: 1; transform: translateY(0px)} 
}


p{
background-color:darkblue;
margin:0px;
padding:10px;
color:#f4f4f4;
font-family:arial;
font-weight:bold;
}
  select{
    background-color:gray;
    border-radius:8px;
    padding:10px;
    color:white;
  }
  input{
   padding:10px 30px;
   border-radius:6px;
   background-color:rgb(6, 83, 121);
   color:white;
   border:none;
   {
   
</style>
<p style="animation:para2 1s ease;">SELECT THE CLASS YOU WANT TO VIEW WITH CORRESPONDING CREDENCIALS</p>

<form method="post" style="animation:para 1s ease;">
<select id="select" name="class" style="margin-top:5px;">
   <option>Select class you want to view</option>
     <option>KGT 1</option>
     <option>KGT 2</option>
     <option>STD 1</option>
     <option>STD 2</option>
     <option>STD 3</option>
     <option>STD 4</option>
     <option>STD 5</option>
     <option>STD 6</option>
     <option>STD 7</option>
 </select>
<br>
<br>
 <select id="select" name="year">
   <option>Select year of study</option>
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
 
<br>
<br>
<select name="exam_type" id="ay">
 <option>Exam type</option>
 <option>weeklytest</option>
 <option>monthlytest</option>
 <option>midterm1</option>
 <option>terminal</option>
 <option>midterm2</option>
 <option>annual</option>
</select>

<br>
<br>
<select name="exam_date" id="ay">
 <option>Exam date</option>';

   $conn = mysqli_connect("localhost","root","","school_db");
   $query_data = "SELECT DISTINCT exam_date FROM results WHERE exam_date != '';";
   $results = mysqli_query($conn,$query_data);
    
   if($results){
    foreach($results as $result){
     $mydata .='<option>'.$result['exam_date'].'</option>';
    }
   }

   $mydata .='
</select>
<br>
<br>
<select name="term" id="ay">
 <option value="">Term</option>
 <option>term1</option>
 <option>term2</option>
</select>
<br>
<br>
<input type="submit" id="btn" name="get_results" value="OPEN" style="cursor:pointer;">
</form>';

$info->message = $mydata;
 $info->data_type = "view_results";
 echo json_encode($info);