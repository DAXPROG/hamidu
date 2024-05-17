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
  #register_btn2:hover{
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
<p style="background-color:#485b6c;color:white;padding:4px;font-size:20px;margin:0px;width:100%;animation:para 1s ease;"><strong>ADD A NEW TEACHER DEATAILS</strong></p>
<p id="error" style="display:none;background-color:red;color:white;padding:4px;font-size:20px;margin:0px;width:100%;animation:para 1s ease;"><strong>This handle errors</strong></p>
  <form id="teacher_form" style="animation:appear 1s ease;text-align:center;border-radius:70px;">
  
  
    <input type="text" name="first_name" placeholder="Firstname"><br><br>
    <input type="text" name="middle_name" placeholder="Lastname"><br><br>
    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="text" name="contacts" placeholder="Contacts"><br><br>
    <input style="width:12px;padding:10px;" type="radio" name="gender" value="male"><span style="color:white;">Male</span>
    <input style="width:12px;padding:10px;" type="radio" name="gender" value="female"><span style="color:white;" value="female">Female</span><br><br>
    <select name="usertype" style="padding:5px;border-radius:5px;background-color:rgb(2, 69, 69);color:white;">
     <option>Usertype</option>
     <option>User</option>
     <option>Academic</option>
    </select>
    <br><br>    
    <input type="button" value="REGISTER" style="background-color:darkgreen;margin-bottom:10px;color:white;font-family:arial;" onclick="collect_teacher_data(event)">
  </form>
';


$info->message = $myform;
$info->data_type = "add_teacher";
echo json_encode($info);