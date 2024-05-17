<?php
session_start();

// echo json_encode($DATA_OBJ);
// die;
 $info = (object)[];
 $data_teacher = false;
 $data_teacher['teacher_id'] = $DB->generate_id(20);
 $data_teacher['enrolled_date'] = date("Y-m-d H:i:s");

 // Validate username
 $data_teacher['first_name'] = $DATA_OBJ->first_name;
 if(empty($DATA_OBJ->first_name)){
  $Error .= "Please enter a valid firstname.<br>";
}else{

  if(!preg_match("/^[A-Z]*$/",$DATA_OBJ->first_name)){
    
    $Error .= "No special characters/number/small latters required in the firstname!<br>";
  }
 }

 $data_teacher['middle_name'] = $DATA_OBJ->middle_name;
 if(empty($DATA_OBJ->middle_name)){
  $Error .= "Please enter a valid Lastname.<br>";
}else{

  if(!preg_match("/^[A-Z]*$/",$DATA_OBJ->middle_name)){
    
    $Error .= "No special characters/number/small latters required in the lastname!<br>";
  }
 }

$data_teacher['email'] = $DATA_OBJ->email;
 if(empty($DATA_OBJ->email)){
  $Error .= "Please enter a valid email.<br>";
}
else{
  
  if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $DATA_OBJ->email)){
    
    $Error .= "Please enter a valid email. <br>";
  }
 }

 $data_teacher['contacts'] = $DATA_OBJ->contacts;
 if(empty($DATA_OBJ->contacts)){
   
  $Error .= "Please enter a valid ontacts.<br>";
 }else{
 if(strlen($DATA_OBJ->contacts) != 10){
   $Error .= "Contacts must be ten(10) numbers.<br>";
 }
}

 $data_teacher['gender'] = isset($DATA_OBJ->gender) ? $DATA_OBJ->gender : null;
 if(empty($DATA_OBJ->gender)){
  $Error .= "Please select a gender.<br>";
}
else{
  
  if($DATA_OBJ->gender != "male" && $DATA_OBJ->gender != "female"){
    
    $Error .= "Please enter a valid gender. <br>";
  }
 }

 $data_teacher['usertype'] = $DATA_OBJ->usertype;
 if(empty($DATA_OBJ->usertype) || $DATA_OBJ->usertype =="Usertype"){
  $Error .= "Select usertype.<br>";
}



 if($Error == ""){

  $check_data['first_name'] = $data_teacher['first_name'];
  $check_data['middle_name'] = $data_teacher['middle_name'];

  $sql = "SELECT * FROM teachers WHERE teacher_name = :first_name && teacher_lastname = :middle_name LIMIT 1";
  $answer = $DB->read($sql,$check_data);
    if(is_array($answer)){
      $answer = $answer[0];
        if($answer->teacher_name == $data_teacher['first_name'] && $answer->teacher_lastname == $data_teacher['middle_name']){
            
            $info->message = "Sory Mr/Ms".$answer->teacher_name." ".$answer->teacher_lastname."is already registered!";
            $info->data_type = "error";
            echo json_encode($info);
          
        }
    }
  
  else{

  $query = "INSERT INTO teachers (teacher_id,teacher_name,teacher_lastname,teacher_email,teacher_contacts,gender,usertype,teacher_password,enrolled_date) 
   VALUES (:teacher_id,:first_name,:middle_name,:email,:contacts,:gender,:usertype,:middle_name,:enrolled_date);";
   $result = $DB->write($query,$data_teacher);

 if($result){
  $info->message = '<h1 style="background-color:darkgreen;color:white;margin:0px;padding:10px;text-align:center;animation:para 1s ease;">Teacher was added successifully</h1>';
  $info->data_type = "teacher";
  echo json_encode($info);
 }else{
  echo "Teacher was NOT added";
  $info->message = "Your profile was NOT created due to an error";
  $info->data_type = "error";
  echo json_encode($info);
 }
} }
else{
   $info->message = $Error;
   $info->data_type = "error";
   
   echo json_encode($info);
 }


