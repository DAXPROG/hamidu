<?php
if(isset($_POST['view_btn'])){
 $data_info['class'] = $_POST['class'];
 $data_info['year'] = $_POST['year'];

$query_data = "SELECT DISTINCT students.student_id,students.firstname,students.midllename,students.surname,students.date_of_birth,students.gender,students.image,students.password,students.guardian_name,students.guardian_lastname,students.guardian_type,students.guardian_contact,students.guardian_image,students.enrolled_date,results.class,results.year FROM students INNER JOIN results ON students.student_id = results.student_id WHERE results.class = :class AND results.year = :year ORDER BY students.firstname";
$results = $DB->read($query_data,$data_info);


echo '
<div style="padding:0px 10px;">
<h2 style="text-align:center;margin:0px;padding:2px;background-color:darkgreen;color:white;">STUDENTS DETAILS</h2>
<table border="1" cellspacing="0" style="margin:5px 5px;">


<tr style="background-color: rgb(11, 83, 128); color:white;padding:2px;">
 <th style="padding:2px;">Student Image</th>
 <th style="padding:2px;">Guardian img</th>
 <th style="padding:2px;">Firstname</th>
 <th style="padding:2px;">Middlename</th>
 <th style="padding:2px;">Surname</th>
 <th style="padding:2px;">Date of birth</th>
 <th style="padding:2px;">Gender</th>
 <th style="padding:2px;">Password</th>
 <th style="padding:2px;">Enrolled date</th>
</tr>';
if(is_array($results)){
  
  foreach($results as $row){

 $image = ($row->gender == "male") ? "ui/icons/male.png" :"ui/icons/female.png";
 $guardian_image = ($row->gender == "male") ? "ui/icons/male.png" :"ui/icons/female.png";

 // Here we check if the image exist to the data base then asign the image of the image
       if(file_exists($row->image)){
         $image = $row->image; 
         $guardian_image = $row->guardian_image; 
      }
      $gender_male = "";
      $gender_female = "";
      if($row->gender == "male"){
        
        $gender_male = "checked";
      }else{
        
        $gender_female = "checked";
      }

 echo '

 
 <tr style="background-color:#ccc;">

 <form method="post" enctype="multipart/form-data">
 <td rowspan="4" style="text-align:center;">
        <img src="'.$image.'" alt="" style="width:100px;height:100px;object-fit:cover;"><br>
       
        <input type="file" id="s_image" name="student_image" style="width:55px;margin-bottom:2px;cursor:pointer;"><br>
        <input type="hidden" name="s_id" value="'.$row->student_id.'">
        <input type="submit" name="s_image" value="Change">
        </td>
</form>
        
 <form method="post"  enctype="multipart/form-data">
    <td rowspan="4" style="text-align:center;">
        <img src="'.$guardian_image.'" alt="" style="width:100px;height:100px;object-fit:cover;margin-right:4px;"><br>

        <input type="file" name="guardian_image" style="width:55px;margin-bottom:2px;cursor:pointer;"><br>
        <input type="hidden" name="s_id" value="'.$row->student_id.'">
        <input type="submit" name="g_image" value="Change">
    </td>
 </form>
 <form method="POST">
    
    <td>
      <input type="text" name="firstname" value="'.$row->firstname.'" style="width:100px;padding:10px 0px;">
    </td>
    <td>
      <input type="text" name="middlename" value="'.$row->midllename.'" style="width:100px;padding:10px 0px;">
    </td>
    <td>
      <input type="text" name="surname" value="'.$row->surname.'" style="width:100px;padding:10px 0px;">
    </td>
    <td>
      <input type="text" name="date_of_birth" value="'.$row->date_of_birth.'" style="width:100px;padding:10px 0px;">
    </td>
    <td>
      <input type="radio" value="male" name="gender" '.$gender_male.'>Male
      <input type="radio" value="female" name="gender" '.$gender_female.'>Female
    </td>
    <td>
      <input type="text" name="password" value="'.$row->password.'" style="width:100px;padding:10px 0px;">
    </td>
   
    <td>
      <input type="text" value="'.$row->enrolled_date.'" style="width:100px;padding:10px 0px;">
    </td>
   
  </tr>
  <tr style="background-color: rgb(11, 83, 128); color:white;">
    <th>Guardian name</th>
    <th>Guardian lastname</th>
    <th>Guardian type</th>
    <th>Guardian contacts</th>
  </tr>
  <tr style="background-color:brown;">
    <td>
      <input type="text" name="guardian_name" value="'.$row->guardian_name.'" style="width:100px;padding:10px 0px;">
    </td>
    <td>
      <input type="text" name="guardian_lastname" value="'.$row->guardian_lastname.'" style="width:100px;padding:10px 0px;">
    </td>
    <td>
      <input type="text" name="guardian_contacts" value="'.$row->guardian_contact.'" style="width:100px;padding:10px 0px;">
    </td>
    <td>
      <input type="text" name="guardian_type" value="'.$row->guardian_type.'" style="width:100px;padding:10px 0px;">
      <input type="hidden" name="student_id" value="'.$row->student_id.'">
    </td>
    <td>
      &#10095;&#10095;
    </td>
    <td>
      <input id="sub" name="edit_data" type="submit" value="UPDATE" style="border-radius:5px;padding:10px 8px;background-color:green;border:none;cursor:pointer;color:white;" onclick="collect_data_student(event)">
  </td>
  <td>
     <label for="delete" name="edit_teacher" type="submit" value="" style="border-radius:5px;padding-top:10px;margin-top:5px;background-color:RED;border:none;cursor:pointer;color:white;">DELETE</label>
    </td>
    
  </tr>
  <tr></tr>
  </form>
  <form method="post">
     <input type="submit" name="delete_teacher" id="delete" style="display:none;">
  </form>

';
}

echo'
</table>
<form>
    <input type="submit" name="unset" value="CLOSE" style="background-color:red;color:white;border-radius:5px;border:none;">
   </form>
</div>
'; 
// mysqli_close();
}
else{
  echo "<h1>data not found</h1>";
}

}

// UPLOAD STUDENT IMAGE UPLOAD STUDENT IMAGE
// UPLOAD STUDENT IMAGE UPLOAD STUDENT IMAGE
// UPLOAD STUDENT IMAGE UPLOAD STUDENT IMAGE

if(isset($_POST['s_image'])){

$s_id = $_POST['s_id'];
$student_image = $_FILES['student_image']['name'];

echo '<h1>'.$s_id.'</h1>';echo "  ";
echo '<h1>'.$student_image.'</h1>
';
// die;

  $destination = "";
// HERE WE CHECH IF THE IMAGE IS CHOOSEN/DRAGED
if(isset($_FILES['student_image']) && $_FILES['student_image']['name']){
// HERE WE CHECK IF NO ERROR
 if($_FILES['student_image']['error'] == 0){
 
  // If the image is selected we create the folder for it and store the path
//  HERE WE CREATE THE FOLDER and check if it exist
 $folder = "students_images/";
 if(!file_exists($folder)){
  // HERE WE MAKE DIRECTORY
    mkdir($folder,0777,true);
 }
 // HERE WE MOVE THE FILE FROM WHERE IT COMES TO THE DESTINATION OF OUR DIRECTORY WE CREATED.
//  and SAVE THE DIRECTORY TO THE destination as path where the image can be accessed in the codes
 $destination = $folder . $_FILES['student_image']['name'];
  move_uploaded_file($_FILES['student_image']['tmp_name'],$destination);

  $conn = mysqli_connect('localhost','root','','school_db');
  $query = "UPDATE students SET image = '$destination' WHERE student_id = '$s_id';";
  $results = mysqli_query($conn,$query);
  echo 'image uploaded successfull
  <form>
    <input type="submit" name="unset" value="CLOSE" style="background-color:red;color:white;border-radius:5px;border:none;">
   </form>
  ';
 }
}



}



// UPLOAD GUARDIAN IMAGE UPLOAD GUARDIAN IMAGE
// UPLOAD GUARDIAN IMAGE UPLOAD GUARDIAN IMAGE
// UPLOAD GUARDIAN IMAGE UPLOAD GUARDIAN IMAGE
if(isset($_POST['g_image'])){


  $s_id = $_POST['s_id'];
$student_image = $_FILES['guardian_image']['name'];

echo '<h1>'.$s_id.'</h1>';echo "  ";
echo '<h1>'.$student_image.'</h1>
';
// die;

  $destination = "";
// HERE WE CHECH IF THE IMAGE IS CHOOSEN/DRAGED
if(isset($_FILES['guardian_image']) && $_FILES['guardian_image']['name']){
// HERE WE CHECK IF NO ERROR
 if($_FILES['guardian_image']['error'] == 0){
 
  // If the image is selected we create the folder for it and store the path
//  HERE WE CREATE THE FOLDER and check if it exist
 $folder = "guardians_images/";
 if(!file_exists($folder)){
  // HERE WE MAKE DIRECTORY
    mkdir($folder,0777,true);
 }
 // HERE WE MOVE THE FILE FROM WHERE IT COMES TO THE DESTINATION OF OUR DIRECTORY WE CREATED.
//  and SAVE THE DIRECTORY TO THE destination as path where the image can be accessed in the codes
 $destination = $folder . $_FILES['guardian_image']['name'];
  move_uploaded_file($_FILES['guardian_image']['tmp_name'],$destination);

  $conn = mysqli_connect('localhost','root','','school_db');
  $query = "UPDATE students SET guardian_image = '$destination' WHERE student_id = '$s_id';";
  $results = mysqli_query($conn,$query);
  echo 'image uploaded successfull
  <form>
    <input type="submit" name="unset" value="CLOSE" style="background-color:red;color:white;border-radius:5px;border:none;">
   </form>
  ';
 }
}

}

