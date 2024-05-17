<?php
$info = (object)[];
$data = false;

$myform = '
<style>
  @keyframes appear{
   0%{opacity: 0; transform: translateY(50px) rotate(5deg);transform-origin: 100% 0%;} 
   100%{opacity: 1; transform: translateY(0px) rotate(0deg);transform-origin: 0% 0%;} 
  }
  @keyframes para2{
   0%{opacity: 0; transform: translateX(70px);} 
   100%{opacity: 1; transform: translateX(-5px)} 
 }
  @keyframes para{
   0%{opacity: 0; transform: translateX(-70px);} 
   100%{opacity: 1; transform: translateX(5px)} 
 }

  #select{
   margin:20px 20px 0px 20px;
   padding: 10px 0px;
   border-radius: 7px;
   background-color:brown;
   color: #c7f7f7;
   font-size:20px;
  }
  #select option{
    text-align:center;
   background-color:white;
   color: brown;
   font-size:18px;
  } 

  #view_btn:hover{
    opacity: 0.6;
    cursor:pointer;
  }
</style>
<p style="background-color:darkblue;color:white;padding:4px;font-size:20px;margin:0px;width:100%;animation:para 1s ease;padding:5px;"><strong>
SELECT CLASS WITH CORRESPONDING YEAR YOU WANT TO UPGRADE CLASS</strong></p>

<form action="" method="POST" style="animation:para2 1s ease;border-radius: 10px;padding:20px;">

 <select id="select" name="class">
   <option>Select class to upgrade</option>
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
<input id="view_btn" name="upgrades" type="submit" value="VIEW" onclick="get_student_info()" style="padding:12px 50px;border-radius:8px;background-color:rgb(14, 84, 89);border:none;color:white;">
</form>
           ';

$info->message = $myform;
$info->data_type = "upgrade_student_class";
echo json_encode($info);
 
