<?php
session_start();
if(isset($_POST["academic_logout"])){

unset($_SESSION["academic_id"]);
header('location: admin_login.php');
}
else if(isset($_POST["head_logout"])){
 
 unset($_SESSION['head_master_id']);
 header('location: admin_login.php');
}
else if(isset($_POST["c_t_logout"])){
 
 unset($_SESSION["class_teacher_id"]);
 header('location: admin_login.php');
}
else if(isset($_POST["head_logout"])){
 
 unset($_SESSION["parent_id"]);
 header('location: user_login.php');
}