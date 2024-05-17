<?php

if(isset($_POST['six'])){
$info = (object)[];
$data = false;


$query_data = "SELECT DISTINCT * FROM teachers WHERE usertype != 'head_master';";
$results = $DB->read($query_data);

echo'
<style>
  input{
   border-radius:10px;
   text-align:center;
   width:120px;
   padding:10px 0px;
  }
</style>
';
echo  '
<div style="padding:0px 10px;animation:appear 1s ease;">
<h2 style="text-align:center;margin:0px;padding:2px;background-color:darkgreen;color:white;">TEACHERS DETAILS</h2>

<table border="1" cellspacing="0" style="margin:5px 5px;">
<tr style="background-color: rgb(11, 83, 128); color:white;padding:2px;">
 <th style="padding:2px;">Teacher Image</th>
 <th style="padding:2px;">Teacher name</th>
 <th style="padding:2px;">Teacher lastname</th>
 <th style="padding:2px;">Teacher email</th>
 <th style="padding:2px;">teacher contacts</th>
 <th style="padding:2px;">Password</th>
 <th style="padding:2px;">Usertype</th>
 <th style="padding:2px;">Enrolled date</th>
 <th style="padding:2px;">UPDATE</th>
</tr>';
if(is_array($results)){
  
  foreach($results as $row){

 $image = ($row->gender == "male") ? "ui/icons/male.png" :"ui/icons/female.png";

 if(file_exists($row->teacher_image)){
  $image = $row->teacher_image; 
}
      $gender_male = "";
      $gender_female = "";
      if($row->gender == "male"){
        
        $gender_male = "checked";
      }else{
        
        $gender_female = "checked";
      }

echo  '

 
<tr style="background-color:#ccc;">
<form method="post" enctype="multipart/form-data">
<td rowspan="2" style="text-align:center;">
       <img src="'.$image.'" alt="" style="width:100px;height:100px;object-fit:cover;"><br>
      
       <input type="file" name="teacher_image" style="width:55px;margin-bottom:2px;cursor:pointer;"><br>
       <input type="hidden" name="t_id" value="'.$row->teacher_id.'">
       <input type="submit" name="t_image" value="Change" style="background-color:lightblue;">
       </form>
    </td>
<form method="POST">
    <td>
      <input type="text" name="teacher_name" value="'.$row->teacher_name.'"">
    </td>
    <td>
      <input type="text" name="teacher_lastname" value="'.$row->teacher_lastname.'">
    </td>
    <td>
      <input type="text" name="teacher_email" value="'.$row->teacher_email.'">
    </td>
    <td>
      <input type="text" name="teacher_contacts" value="'.$row->teacher_contacts.'">
    </td>
    <td>
      <input type="text" name="teacher_password" value="'.$row->teacher_password.'">
    </td>
    <td>
      <select name="usertype" style="padding:10px 0px;border-radius:10px;">
      <option>'.$row->usertype.'</option>
      <option>User</option>
      <option>Academic</option>
      <option>KGT 1 C.Teacher</option>
      <option>KGT 2 C.Teacher</option>
      <option>STD 1 C.Teacher</option>
      <option>STD 2 C.Teacher</option>
      <option>STD 3 C.Teacher</option>
      <option>STD 4 C.Teacher</option>
      <option>STD 5 C.Teacher</option>
      <option>STD 6 C.Teacher</option>
      <option>STD 7 C.Teacher</option>
      </select>
      <select name="year" style="padding:10px 0px;border-radius:10px;">
            <option>'.$row->year.'</option>
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
      <select name="status" style="padding:10px 0px;border-radius:10px;">
            <option>'.$row->status.'</option>
            <option>ON</option>
            <option>OFF</option>
        
      </select>
    </td>
    <td>
      <input type="text" placeholder="'.$row->enrolled_date.'">
      <input type="hidden" name="teacher_id" value="'.$row->teacher_id.'">
    </td>
    <td>
      <input id="sub" name="edit_teacher" type="submit" value="UPDATE" style="border-radius:5px;padding:10px 8px;background-color:green;border:none;cursor:pointer;color:white;">

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
echo '
</table>
<form>
    <input type="submit" name="unset" value="CLOSE" style="background-color:red;color:white;border-radius:5px;border:none;padding:8px 5px;cursor:pointer;">
</form>
</div>
'; 
// mysqli_close();

}
else{
 echo "NO DATA FOUND";
}
}


// UPLOAD TEACHER IMAGE UPLOAD TEACHER IMAGE
// UPLOAD TEACHER IMAGE UPLOAD TEACHER IMAGE
// UPLOAD TEACHER IMAGE UPLOAD TEACHER IMAGE
// UPLOAD TEACHER IMAGE UPLOAD TEACHER IMAGE

if(isset($_POST['t_image'])){

  $t_id = $_POST['t_id'];
  $teacher_image = $_FILES['teacher_image']['name'];
  
 
  // die;
  
    $destination = "";
  // HERE WE CHECH IF THE IMAGE IS CHOOSEN/DRAGED
  if(isset($_FILES['teacher_image']) && $_FILES['teacher_image']['name']){
  // HERE WE CHECK IF NO ERROR
   if($_FILES['teacher_image']['error'] == 0){
   
    // If the image is selected we create the folder for it and store the path
  //  HERE WE CREATE THE FOLDER and check if it exist
   $folder = "teachers_images/";
   if(!file_exists($folder)){
    // HERE WE MAKE DIRECTORY
      mkdir($folder,0777,true);
   }
   // HERE WE MOVE THE FILE FROM WHERE IT COMES TO THE DESTINATION OF OUR DIRECTORY WE CREATED.
  //  and SAVE THE DIRECTORY TO THE destination as path where the image can be accessed in the codes
   $destination = $folder . $_FILES['teacher_image']['name'];
    move_uploaded_file($_FILES['teacher_image']['tmp_name'],$destination);
  
    $conn = mysqli_connect('localhost','root','','school_db');
    $query = "UPDATE teachers SET teacher_image = '$destination' WHERE teacher_id = '$t_id';";
    $results = mysqli_query($conn,$query);
    echo '<h1 style="background-color:green;color:white;margin:0px;">Teacher image uploaded successfully
    
    <form>
      <input type="submit" name="unset" value="CLOSE" style="background-color:red;color:white;border-radius:5px;border:none;">
     </form>
    </h1>
    ';
   }
  }
  
  
  
  }