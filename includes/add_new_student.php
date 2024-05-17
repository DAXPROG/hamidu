<?php
session_start();

// echo json_encode($DATA_OBJ->year);
// echo json_encode($DATA_OBJ->standard);
// die;
 $info = (object)[];
 $dat = [];
 $dat['student_id'] = $DB->generate_id(20);
 $dat['enrolled_date'] = date("Y-m-d H:i:s");

 // Validate username
 $dat['first_name'] = $DATA_OBJ->first_name;
 if(empty($DATA_OBJ->first_name)){
  $Error .= "Please enter a valid firstname.<br>";
}else{

  if(!preg_match("/^[A-Z]*$/",$DATA_OBJ->first_name)){
    
    $Error .= "No special characters/number/small latters required in the firstname!<br>";
  }
 }

 $dat['middle_name'] = $DATA_OBJ->middle_name;
 if(empty($DATA_OBJ->middle_name)){
  $Error .= "Please enter a valid Middlename.<br>";
}else{

  if(!preg_match("/^[A-Z]*$/",$DATA_OBJ->middle_name)){
    
    $Error .= "No special characters/number/small latters required in the middlename!<br>";
  }
 }

 $dat['sur_name'] = $DATA_OBJ->sur_name;
 if(empty($DATA_OBJ->sur_name)){
  $Error .= "Please enter a valid Surname.<br>";
}else{

  if(!preg_match("/^[A-Z]*$/",$DATA_OBJ->sur_name)){
    
    $Error .= "No special characters/number/small latters required in the surname!<br>";
  }
 }


 $dat['date_of_birth'] = $DATA_OBJ->date_of_birth;
 if(empty($DATA_OBJ->date_of_birth)){
  $Error .= "Please enter a valid date of birth.<br>";
}


 $dat['gender'] = isset($DATA_OBJ->gender) ? $DATA_OBJ->gender : null;
 if(empty($DATA_OBJ->gender)){
  $Error .= "Please select a gender.<br>";
}
else{
  
  if($DATA_OBJ->gender != "male" && $DATA_OBJ->gender != "female"){
    
    $Error .= "Please enter a valid gender. <br>";
  }
 }

 $dat['class'] = $DATA_OBJ->standard;
 if(empty($DATA_OBJ->standard) || $DATA_OBJ->standard =="Standard"){
  $Error .= "Please select class.<br>";
}

 $dat['year'] = $DATA_OBJ->year;
 if(empty($DATA_OBJ->year) || $DATA_OBJ->year =="Year"){
  $Error .= "Please select year.<br>";
}

 $dat['stream'] = $DATA_OBJ->stream;
 if(empty($DATA_OBJ->stream) || $DATA_OBJ->stream =="Stream"){
  $Error .= "Please select stream.<br>";
}


// GUARDIAN INFORMATION
// GUARDIAN INFORMATION

$dat['guardian_name'] = $DATA_OBJ->guardian_name;
 if(empty($DATA_OBJ->guardian_name)){
  $Error .= "Please enter a valid guardian name.<br>";
}else{

  if(!preg_match("/^[a-z A-Z]*$/",$DATA_OBJ->guardian_name)){
    
    $Error .= "No special characters/number required in the name!<br>";
  }
 }

 $dat['guardian_lastname'] = $DATA_OBJ->guardian_surname;
 if(empty($DATA_OBJ->guardian_surname)){
  $Error .= "Please enter a valid guardian Lastname.<br>";
 }else{
  
  if(!preg_match("/^[a-z A-Z]*$/",$DATA_OBJ->guardian_surname)){
   
   $Error .= "No special characters/number required in the name!<br>";
  }
 }
 
 $dat['guardian_type'] = $DATA_OBJ->guardian_type;
 if(empty($DATA_OBJ->guardian_type)){
  $Error .= "Please enter guardiantype.<br>";
}

 $dat['guardian_contact'] = $DATA_OBJ->guardian_contacts;
 if(empty($DATA_OBJ->guardian_contacts)){
  $Error .= "Please enter guardian contact.<br>";
}

// echo json_encode($data);
// die;
 

 if($Error == ""){

      // CHECK IF THE STUDENT EXISTS
      // CHECK IF THE STUDENT EXISTS
     
      $check['first_name'] = $dat['first_name'];
      $check['middle_name'] = $dat['middle_name'];
      $check['sur_name'] = $dat['sur_name'];

      $sql = "SELECT * FROM students WHERE firstname = :first_name && midllename = :middle_name && surname = :sur_name LIMIT 1";
      $answer = $DB->read($sql,$check);
      if(is_array($answer)){
        $answer = $answer[0];
      if($answer->firstname == $dat['first_name'] && $answer->midllename == $dat['middle_name'] && $answer->surname == $dat['sur_name']){
          
          $info->message = "Sory ".$answer->firstname." ".$answer->midllename." ".$answer->surname." is already registered!";
          $info->data_type = "error";
          echo json_encode($info);
        
      }
      }
      
      else{

        $sql_query = "INSERT into students (student_id,firstname,midllename,surname,date_of_birth,gender,classs,yearr,password,guardian_name,guardian_lastname,guardian_type,guardian_contact,enrolled_date) 
        values (:student_id,:first_name,:middle_name,:sur_name,:date_of_birth,:gender,:class,:year,:sur_name,:guardian_name,:guardian_lastname,:guardian_type,:guardian_contact,:enrolled_date);";
        $result = $DB->write($sql_query,$dat);

        
        if($result){
          $user['student_id'] = $dat['student_id'];
          $user['class'] = $DATA_OBJ->standard;
          $user['stream'] = $DATA_OBJ->stream;
          $user['year'] = $DATA_OBJ->year;

          $mysql = "INSERT INTO results (student_id,class,stream,year) VALUES (:student_id,:class,:stream,:year)";
          $DB->write($mysql,$user);

            $info->message = '<h1 style="background-color:darkgreen;color:white;margin:0px;padding:10px;text-align:center;animation:para 1s ease;">Student was added successifully</h1>';
            $info->data_type = "student";
            echo json_encode($info);

        }
        else{
            $info->message = "Student was NOT added due to an error";
            $info->data_type = "error";
            echo json_encode($info);
      }  
    }
 } 
 else{

  $info->message = $Error;
  $info->data_type = "error";   
  echo json_encode($info);
}
