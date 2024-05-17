<?php
if(isset($_POST['edit_data'])){


 $info = (object)[];
 $dat = [];

 $Error = "";
 // Validate username
 $dat['student_id'] = $_POST['student_id'];
 $dat['first_name'] = $_POST['firstname'];
 if(empty($_POST['firstname'])){
  $Error .= "Please enter a valid firstname.<br>";
}else{

  if(!preg_match("/^[A-Z]*$/",$_POST['firstname'])){
    
    $Error .= "No special characters/number/small latters required in the firstname!<br>";
  }
 }

 $dat['middle_name'] = $_POST['middlename'];
 if(empty($_POST['middlename'])){
  $Error .= "Please enter a valid Middlename.<br>";
}else{

  if(!preg_match("/^[A-Z]*$/",$_POST['middlename'])){
    
    $Error .= "No special characters/number/small latters required in the middlename!<br>";
  }
 }

 $dat['sur_name'] = $_POST['surname'];
 if(empty($_POST['surname'])){
  $Error .= "Please enter a valid Surname.<br>";
}else{

  if(!preg_match("/^[A-Z]*$/",$_POST['surname'])){
    
    $Error .= "No special characters/number/small latters required in the surname!<br>";
  }
 }

 $dat['gender'] = $_POST['gender'];

 $dat['date_of_birth'] = $_POST['date_of_birth'];
 if(empty($_POST['date_of_birth'])){
  $Error .= "Please enter a valid date of birth.<br>";
}
 $dat['password'] = $_POST['password'];
 if(empty($_POST['password'])){
  $Error .= "Please enter a valid password.<br>";
}



// GUARDIAN INFORMATION
// GUARDIAN INFORMATION

$dat['guardian_name'] = $_POST['guardian_name'];
 if(empty($_POST['guardian_name'])){
  $Error .= "Please enter a valid guardian name.<br>";
}else{

  if(!preg_match("/^[a-z A-Z]*$/",$_POST['guardian_name'])){
    
    $Error .= "No special characters/number required in the name!<br>";
  }
 }

 $dat['guardian_lastname'] = $_POST['guardian_lastname'];
 if(empty($_POST['guardian_lastname'])){
  $Error .= "Please enter a valid guardian Lastname.<br>";
 }else{
  
  if(!preg_match("/^[a-z A-Z]*$/",$_POST['guardian_lastname'])){
   
   $Error .= "No special characters/number required in the name!<br>";
  }
 }
 
 $dat['guardian_type'] = $_POST['guardian_type'];
 if(empty($_POST['guardian_type'])){
  $Error .= "Please enter guardiantype.<br>";
}

 $dat['guardian_contacts'] = $_POST['guardian_contacts'];
 if(empty($_POST['guardian_contacts'])){
  $Error .= "Please enter guardian contact.<br>";
}

// echo json_encode($data);
// die;

 if($Error == ""){

        $sql_query = "UPDATE  students SET firstname=:first_name,midllename=:middle_name,surname=:sur_name,date_of_birth=:date_of_birth,gender=:gender,password=:password,guardian_name=:guardian_name,guardian_lastname=:guardian_lastname,guardian_type=:guardian_type,guardian_contact=:guardian_contacts 
         WHERE student_id=:student_id;";
        $result = $DB->write($sql_query,$dat);

        
        if($result){

            echo '
            <h1 style="background-color: green;margin: 150px;color:white;padding:10px;border-radius:10px;height:100px;">
            Student details updated successifully
            </h1>
            <form>
              <input type="submit" name="unset" value="STOP QUERY" style="background-color:red;color:white;border-radius:5px;border:none;">
            </form>
            '
            ;
            // mysqli_close();

        } 
    }
 else{
echo '
<h1 style="background-color: red;margin: 150px;;color:white;padding:10px;border-radius:10px;height:100px;">
   '.$Error.'
 </h1>';
 
}
}