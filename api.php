<?php
// session_start();

// HERE WE RESEAVE ALL THA DATA FROM THE AJAX THROUGH THE OBJECT $DATA_RAW and convert it from string back to object and asign it to varable $DATA_OBJ 
$DATA_RAW = file_get_contents("php://input");
$DATA_OBJ = json_decode($DATA_RAW);

// echo json_encode($DATA_OBJ);
// die;


$info = (object)[];
// if(!isset($_SESSION['useridd'])){

//   if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type != "login" && $DATA_OBJ->data_type != "signup"){
//     $info->logged_in = false;
//     echo json_encode($info);
//     die;
//   }
  
// }

// HERE WE INCLUDES THE DATABASE CLASS REQUEST 
require_once("classes/autoload.php");
$DB = new Database();



$Error = "";
// Processnthe data
// STUDENT STUDENT STUDENT STUDENT STUDENT
// STUDENT STUDENT STUDENT STUDENT STUDENT
// STUDENT STUDENT STUDENT STUDENT STUDENT
if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "get_student_register_form"){
  // student register form
  include("includes/student_form.php");
}

else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "get_student_info_form"){
  // student info form
  include("includes/student_info_form.php");
}
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "get_insert_result_form"){
  // student info form
  include("includes/insert_result_form.php");
}
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "get_view_result_form"){
  // student info form
  include("includes/view_result_form.php");
}
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "student_data")
{
  // teacher register form
 include("includes/add_new_student.php");
//  include("includes/signup.php");
}

else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "generate_report_form")
{
  // teacher register form
 include("includes/generate_report_form.php");
//  include("includes/signup.php");
}
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "upgrade_classes_form")
{
  // teacher register form
 include("includes/upgrade_classes_form.php");
//  include("includes/signup.php");
}
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "view_comment_form")
{
  // teacher register form
 include("includes/view_comment_form.php");
//  include("includes/signup.php");
}
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "save_student_data")
{
  // teacher register form
 include("includes/save_student_data.php");
//  include("includes/signup.php");
}
// TEACHER TEACHER TEACHER TEACHER
// TEACHER TEACHER TEACHER TEACHER
// TEACHER TEACHER TEACHER TEACHER

else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "get_teacher_register_form")
{
  // teacher register form
 include("includes/teacher_form.php");
//  include("includes/signup.php");
}
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "get_teacher_info_form"){
  // teacher info form
  include("TEACHER/teacher_details.php");
}
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "teacher_data")
{
  // teacher register form
 include("includes/add_new_teacher.php");
//  include("includes/signup.php");
}
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "asign_teacher_class_form")
{
  // teacher register form
 include("includes/asign_teacher_class_form.php");
//  include("includes/signup.php");
}
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "adminlogin")
{
  // teacher register form
 include("includes/adminlogin.php");
//  include("includes/signup.php");
}

// DASHBOARD DASHBOARD DASHBOARD DASHBOARD
// DASHBOARD DASHBOARD DASHBOARD DASHBOARD
// DASHBOARD DASHBOARD DASHBOARD DASHBOARD
else if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "get_dashboard_info")
{
  // teacher register form
 include("includes/get_dashboard_info.php");
//  include("includes/signup.php");
}




