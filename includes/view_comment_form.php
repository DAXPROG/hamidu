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


</style>';
$myform .= '
<p style="background-color:#485b6c;color:white;padding:4px;font-size:20px;margin:0px;width:100%;animation:para 1s ease;"><strong>VIEW PARENTS COMMENTS</strong></p>

  <form method="post" id="form"style="animation:appear 1s ease;text-align:center;border-radius:70px;">
  <p style="color:white;font-size:18px;font-weight:bold;">SELECT DATE</>
  <br>
    <input type="date" name="date" required><br><br>
    
    
    <input id="register_btn1" type="submit" name="view" value="VIEW" style="background-color:darkgreen;margin-bottom:10px;color:white;font-family:arial;">
  </form>
';


$info->message = $myform;
$info->data_type = "view_comment_form";
echo json_encode($info);