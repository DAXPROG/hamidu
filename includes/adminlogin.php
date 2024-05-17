<?php
if(isset($_POST['login'])){

$info = (object)[];
$data = false;


// Validate info
 $username = $_POST['username']; 
 if(empty($username)){
  $_SESSION['error1'] = '<div style="color:red;">ENTER USERNAME</div>';
  }
  
  $password = $_POST['password']; 
 if(empty($password)){
  $_SESSION['error2'] = '<div style="color:red;">ENTER PASSWORD</div>';
 }


  $conn = mysqli_connect("localhost","root","","school_db");
  $query = "SELECT * FROM teachers WHERE teacher_name = '$username' AND teacher_password='$password'  LIMIT 1";
  $results = mysqli_query($conn,$query);

if($results){

  foreach($results as $result){

    if($result['usertype'] == "KGT 1 C.Teac"){
      $_SESSION['class_teacher_id0'] = $result['teacher_id'];
      $_SESSION['class_teacher_id'] = "KGT 1";
      $_SESSION['class_teacher_id2'] = "KGT 1 C.Teac";
      $_SESSION['class_teacher_year'] = $result['year'];
      echo "You are successfully logged in";
      header('Location: class_teacher.php');
     }
     else if($result['usertype'] == "KGT 2 C.Teac"){
      $_SESSION['class_teacher_id0'] = $result['teacher_id'];
      $_SESSION['class_teacher_id'] = "KGT 2";
      $_SESSION['class_teacher_id2'] = "KGT 2 C.Teac";
      $_SESSION['class_teacher_year'] = $result['year'];
      echo "You are successfully logged in";
      header('Location: class_teacher.php');
     }
     else if($result['usertype'] == "STD 1 C.Teac"){
      $_SESSION['class_teacher_id0'] = $result['teacher_id'];
      $_SESSION['class_teacher_id'] = "STD 1";
      $_SESSION['class_teacher_id2'] = "STD 1 C.Teac";
      $_SESSION['class_teacher_year'] = $result['year'];
      echo "You are successfully logged in";
      header('Location: class_teacher.php');
     }
     else if($result['usertype'] == "STD 2 C.Teac"){
      $_SESSION['class_teacher_id0'] = $result['teacher_id'];
      $_SESSION['class_teacher_id'] = "STD 2";
      $_SESSION['class_teacher_id2'] = "STD 2 C.Teac";
      $_SESSION['class_teacher_year'] = $result['year'];
      echo "You are successfully logged in";
      header('Location: class_teacher.php');
     }
     else if($result['usertype'] == "STD 3 C.Teac"){
      $_SESSION['class_teacher_id0'] = $result['teacher_id'];
      $_SESSION['class_teacher_id'] = "STD 3";
      $_SESSION['class_teacher_id2'] = "STD 3 C.Teac";
      $_SESSION['class_teacher_year'] = $result['year'];
      echo "You are successfully logged in";
      header('Location: class_teacher.php');
     }
     else if($result['usertype'] == "STD 4 C.Teac"){
      $_SESSION['class_teacher_id0'] = $result['teacher_id'];
      $_SESSION['class_teacher_id'] = "STD 4";
      $_SESSION['class_teacher_id2'] = "STD 4 C.Teac";
      $_SESSION['class_teacher_year'] = $result['year'];
      echo "You are successfully logged in";
      header('Location: class_teacher.php');
     }
     else if($result['usertype'] == "STD 5 C.Teac"){
      $_SESSION['class_teacher_id0'] = $result['teacher_id'];
      $_SESSION['class_teacher_id'] = "STD 5";
      $_SESSION['class_teacher_id2'] = "STD 5 C.Teac";
      $_SESSION['class_teacher_year'] = $result['year'];
      header('Location: class_teacher.php');
      echo "You are successfully logged in";
     }
     else if($result['usertype'] == "STD 6 C.Teac"){
      $_SESSION['class_teacher_id0'] = $result['teacher_id'];
      $_SESSION['class_teacher_id'] = "STD 6";
      $_SESSION['class_teacher_id2'] = "STD 6 C.Teac";
      $_SESSION['class_teacher_year'] = $result['year'];
      header('Location: class_teacher.php');
      echo "You are successfully logged in";
     }
     else if($result['usertype'] == "STD 7 C.Teac"){
      $_SESSION['class_teacher_id0'] = $result['teacher_id'];
      $_SESSION['class_teacher_id'] = "STD 7";
      $_SESSION['class_teacher_id2'] = "STD 7 C.Teac";
      $_SESSION['class_teacher_year'] = $result['year'];
      header('Location: class_teacher.php');
      echo "You are successfully logged in";
     }
     else if($result['usertype'] == "Academic"){
      $_SESSION['academic_id'] = $result['teacher_id'];
      echo "You are successfully logged in";
      header('Location: index.php');

     }
     else if($result['usertype'] == "head_master"){
      $_SESSION['head_master_id'] = $result['teacher_id'];
      echo "You are successfully logged in";
      header('Location: head.php');

     }
     else if($result['usertype'] == "User"){
      $_SESSION['error3'] = "Sorry you are not an ADMIN!";
    }
 
  }
  $_SESSION['error'] = '<div style="color:red;">INCORRECT LOGIN</div>';
}
else{
  $_SESSION['error'] = '<div style="color:red;">INCORRECT LOGIN</div>';
}
  
}

