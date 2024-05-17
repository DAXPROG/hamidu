<?php
$info = (object)[];
$data = false;

$myform = '<style>
@keyframes appear{
   0%{opacity: 0; transform: translateY(50px) rotate(5deg);transform-origin: 100% 0%;} 
   100%{opacity: 1; transform: translateY(0px) rotate(0deg);transform-origin: 0% 0%;} 
 }
@keyframes para{
   0%{opacity: 0; transform: translateY(-50px);} 
   100%{opacity: 1; transform: translateY(0px);} 
 }
 input{
    padding: 10px; 
    border-radius: 5px;
    font-size: 18px;
    width:250px;
    border:none;
    font-family:arial;
  }
  #register_btn1:hover{
    cursor:pointer;
    opacity:0.7;
  }
  #label{
    width:150px;
    padding: 10px; 
    background-color: #2b5488;
    color:white;
    border-radius: 5px;
    font-size: 18px;
    font-family:arial;
  }
  #label:hover{ 
    background-color: #17141d;
  }

</style>';
$myform .= '
<p style="background-color:#485b6c;color:white;padding:4px;font-size:20px;margin:0px;width:100%;animation:para 1s ease;"><strong>ADD A NEW STUDENT DEATAILS</strong></p>
<p id="error" style="display:none;background-color:red;color:white;padding:4px;font-size:20px;margin:0px;width:100%;animation:para 1s ease;"><strong>This handle errors</strong></p>
  <form id="form"style="animation:appear 1s ease;text-align:center;border-radius:70px;">
  <p style="color:white;font-size:18px;font-weight:bold;">STUDENT INFORMATION</>
  <br>
    <input type="text" name="first_name" placeholder="Firstname"><br><br>
    <input type="text" name="middle_name" placeholder="Middlename"><br><br>
    <input type="text" name="sur_name" placeholder="surname"><br><br>
    Date of birth<br><input type="date" name="date_of_birth"><br><br>
    <input style="width:12px;padding:10px;" type="radio" name="gender" value="male"><span style="color:white;">Male</span>
    <input style="width:12px;padding:10px;" type="radio" name="gender" value="female"><span style="color:white;" value="female">Female</span><br><br>
   
    <select name="standard" style="padding:5px;border-radius:5px;background-color:rgb(2, 69, 69);color:white;">
     <option>Standard</option>
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

    <select name="year" style="padding:5px;border-radius:5px;background-color:rgb(2, 69, 69);color:white;">
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
    <select name="stream" style="padding:5px;border-radius:5px;background-color:rgb(2, 69, 69);color:white;">
     <option>Stream</option>
     <option>A</option>
     <option>B</option>
     <option>C</option>
     <option>D</option>
     </select>
    <br>
    <br>
    <p style="color:white;font-size:18px;font-weight:bold;">GUARDIAN INFORMATION</>
    <br>
    <input type="text" name="guardian_name" placeholder="First name"><br><br>
    <input type="text" name="guardian_surname" placeholder="Lastname"><br><br>
    <input type="text" name="guardian_type" placeholder="Guardiantype"><br><br>
    <input type="text" name="guardian_contacts" placeholder="Contacts">
    <br>
    <br>
    
    <input id="register_btn1" type="button" value="REGISTER" style="background-color:darkgreen;margin-bottom:10px;color:white;font-family:arial;" onclick="collect_student_data(event)">
  </form>
';


$info->message = $myform;
$info->data_type = "add_student";
echo json_encode($info);