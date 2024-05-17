<?php

if(isset($_POST['edit_teacher'])){

  $dat = [];
 $dat['teacher_id'] = $_POST['teacher_id'];

 $Error = "";
 // Validate username
 $dat['teacher_id'] = $_POST['teacher_id'];
 $dat['teacher_name'] = $_POST['teacher_name'];
 if(empty($_POST['teacher_name'])){
  $Error .= "Please enter a valid Teacher name.<br>";
}else{

  if(!preg_match("/^[A-Z]*$/",$_POST['teacher_name'])){
    
    $Error .= "No special characters/number/small latters required in the Teacher name!<br>";
  }
 }

 $dat['teacher_lastname'] = $_POST['teacher_lastname'];
 if(empty($_POST['teacher_lastname'])){
  $Error .= "Please enter a valid Teacher lastname.<br>";
}else{

  if(!preg_match("/^[A-Z]*$/",$_POST['teacher_lastname'])){
    
    $Error .= "No special characters/number/small latters required in the Teacher lastname!<br>";
  }
 }

 $dat['teacher_email'] = $_POST['teacher_email'];
 if(empty($_POST['teacher_email'])){
  $Error .= "Please enter a valid Surname.<br>";
 }


 $dat['teacher_contacts'] = $_POST['teacher_contacts'];
 if(empty($_POST['teacher_contacts'])){
  $Error .= "Please enter a valid Contacts.<br>";
}

 $dat['teacher_password'] = $_POST['teacher_password'];
 if(empty($_POST['teacher_password'])){
  $Error .= "Please enter a valid password.<br>";
}
 $dat['usertype'] = $_POST['usertype'];
 $dat['year'] = $_POST['year'];
 $dat['status'] = $_POST['status'];


// echo json_encode($data);
// die;

 if($Error == ""){

        $sql_query = "UPDATE  teachers SET teacher_name=:teacher_name,teacher_lastname=:teacher_lastname,teacher_email=:teacher_email,teacher_contacts=:teacher_contacts,usertype=:usertype,status=:status,year=:year,teacher_password=:teacher_password
         WHERE teacher_id=:teacher_id;";
        $result = $DB->write($sql_query,$dat);

        
        if($result){

            echo '
            <h1 style="background-color: green;margin: 150px;;color:white;padding:10px;border-radius:10px;height:100px;">
            Teacher details updated successifully
            </h1>
            <form>
                <input type="submit" name="unset" value="CLOSE" style="background-color:red;color:white;border-radius:5px;border:none;padding:8px 5px;cursor:pointer;">
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