<?php
session_start();
if(!$_SESSION['head_master_id']){
  header('Location: admin_login.php');
  die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>HEAD MASTER DASHBOARD</title>
 <link rel="stylesheet" href="css/home.css">
 <style>
   @keyframes appear{
      0%{opacity: 0; transform: translateY(50px) rotate(5deg);transform-origin: 100% 0%;} 
      100%{opacity: 1; transform: translateY(0px) rotate(0deg);transform-origin: 0% 0%;} 
    }
    #opt1{
      height:34px;
    }
    @media (max-width:1000px) {
      
      #opt1{
        height:34px;
        font-size:12px;
        padding:2.6px 0px;
      }
    }
    #sub:hover{
      opacity:0.7;
    }
    #lebo:hover{
      color:gray;
    }
    #btn:hover{
     opacity:0.7;
    }
    #btn:active{
    opacity:0.5;
   }
   u{
    font-size: 15px;
    margin:0px;
    padding:0px;
   }
   #content{
 background-color: blue;
 width: 100%;
 height: 517px;
 display: flex;
}
#top{
  max-width: 100%;  
  min-height: 200px;
  max-height: 500px; 
  margin: auto;
  position: relative;
 }
 
 </style>
 
</head>
<body>
 <div id="top">
  <p id="para_head"><u>PRESIDENT'S OFFICE</u></p>
  <p id="para_head"><u>MINISTRY OF EDUCATIOIN, SCIENCE AND TECHNOLOGY MOROGORO REGION.</u></p>
  <h1 id="head">
    
    <marquee scrolldelay=""  behavior="alternate" direction="right" style="margin: 0;"><u>BAPTIST</u> <u>PRIMARY</u> <u>SCHOOL</u></marquee></h1>
  <!-- <div id="image_div">
   <img src="images/shule2.jpeg" id="image1">
   <a id="prev" onclick="plusSlides(1)">&#10094;</a>
    <a id="next" onclick="plusSlides(-1)">&#10095;</a>
  </div> -->
  <div id="content">
   <div id="left_panel">
    <label id="opt1" for="option0"><span id="arrow">::&#10095;</span>Home Dashboard</label>
    <label id="opt1" for="option1"><span id="arrow" >::&#10095;</span>Add new student</label>
    <label id="opt1" for="option2"><span id="arrow">::&#10095;</span>Students info</label>
    <label id="opt1" for="option3"><span id="arrow">::&#10095;</span>Insert results</label>
    <label id="opt1" for="option4"><span id="arrow">::&#10095;</span>View results</label>
    <label id="opt1" for="option5"><span id="arrow" >::&#10095;</span>Add new teacher</label>
    <label id="opt1" for="option6"><span id="arrow">::&#10095;</span>Teachers info</label>
    <label id="opt1" for="option8"><span id="arrow">::&#10095;</span>Generate report</label>
    <label id="opt1" for="option9"><span id="arrow">::&#10095;</span>Upgrade classes</label>
    <label id="opt1" for="option10"><span id="arrow">::&#10095;</span>View comments</label>
    <label id="opt1" for="logout"><span id="arrow">::&#10095;</span>Logout</label>
    <form action="logout.php" method="post">
      <input type="submit" name="head_logout" id="logout" style="display:none;" onclick="logout()">
    </form>
   </div>
  
   <div id="right_panel" style="height: 517px;overflow-y:scroll;overflow-x:scroll;text-align: center;">
    <!-- control radio inputs -->
    <form method="post">
      <input type="submit" name="dashboard" id="option0" style="display: none;">
    </form>
    <input type="radio" name="one" id="option1" style="display: none;" onclick="add_student()">
    <input type="radio" name="one" id="option2" style="display: none;" onclick="view_student_info()">

    <input type="radio" name="one" id="option3" style="display: none;" onclick="insert_student_results_form()">

    <input type="radio" name="one" id="option4" style="display: none;" onclick="view_student_results_form()">

    <input type="radio" name="one" id="option5" style="display: none;" onclick="add_teacher()">
<form method="POST">
  <input type="submit" name="six" id="option6" style="display: none;">
</form>

    <input type="radio" name="one" id="option8" style="display: none;" onclick="generate_report_form()">

    <input type="radio" name="one" id="option9" style="display: none;" onclick="upgrade_classes_form()">

    <input type="radio" name="one" id="option10" style="display: none;" onclick="view_comment_form()">

   <!-- <div id="inner_right_panel0"></div> -->
   <div id="inner_right_panel1" style="width:100%;animation: appear 1s ease;margin-bottom:10px;">
   
   <?php
  
        require_once("classes/autoload.php");
        $DB = new Database();
        include('DASHBOARD/dashboard.php');
        include('STUDENT/view_comment.php');
        include('STUDENT/student_details.php');
        include('STUDENT/save_student_data.php');
        include('STUDENT/upgrade.php');
        include('STUDENT/move.php');
        include('STUDENT/insert_result.php');
        include('STUDENT/insert.php');
        include('STUDENT/get_results.php');
        include('STUDENT/update_result_admin.php');

        include('TEACHER/teacher_details.php');
        include("TEACHER/save_teacher_data.php");
        
   ?>




   </div>
   </div>
  </div>
 <div id="footer">
    @Designed By Hamidu System developer
   </div>
</div>
<script>
  function _(element){
 return document.getElementById(element);
}

function logout(){
  var answer = confirm("ARE YOU SURE YOU WANT TO LOGOUT ??");
  if(answer){
    return true;
  }
}


function send_data(data,type){
 
 var xml = new XMLHttpRequest();
 var data = {};
 xml.onload = function(){
  if(xml.readyState == 4 || xml.status == 200){
   
   handle_result(xml.responseText,type);
   // signup_button.disabled = false;
   // signup_button.value = "Signup";
  }
 }
 data.data_type = type;
 var data_string = JSON.stringify(data);
 xml.open("POST","api.php",true);
 xml.send(data_string);
}
function get_data(data,type){
 
 var xml = new XMLHttpRequest();
 
 xml.onload = function(){
  if(xml.readyState == 4 || xml.status == 200){
   
   handle_result(xml.responseText,type);
   // signup_button.disabled = false;
   // signup_button.value = "Signup";
  }
 }
 data.data_type = type;
 var data_string = JSON.stringify(data);
 xml.open("POST","api.php",true);
 xml.send(data_string);
}
function student_info(data,type){
 var xml = new XMLHttpRequest();
 
 xml.onload = function(){
  if(xml.readyState == 4 || xml.status == 200){
   
   var answer = JSON.parse(xml.responseText);
    var inner_right_panel1 = _("inner_right_panel1");

  //  handle_result2(xml.responseText,type);
   // signup_button.disabled = false;
   // signup_button.value = "Signup";
  }
 }
 data.data_type = type;
 var data_string = JSON.stringify(data);
 xml.open("POST","api2.php",true);
 xml.send(data_string);
}
//FUNCTION THAT HANDLES THE RESPONSES

// DASHBOARD DASHBOARD DASHBOARD DASHBOARD
// DASHBOARD DASHBOARD DASHBOARD DASHBOARD
function get_dshboard_info(){

  send_data([],'get_dashboard_info');
}

// STUDENT STUDENT STUDENT
// STUDENT STUDENT STUDENT
function add_student(){

send_data([],'get_student_register_form');
}

function view_student_info(){
  
  send_data([],'get_student_info_form');
}

function insert_student_results_form(){
  
  send_data([],'get_insert_result_form');
}

function view_student_results_form(){
  
  send_data([],'get_view_result_form');
}

function generate_report_form(){
  
  send_data([],'generate_report_form');
}

function upgrade_classes_form(){
  
  send_data([],'upgrade_classes_form');
}

function view_comment_form(){
  
  send_data([],'view_comment_form');
}

// TEACHER TEACHER TEACHER
// TEACHER TEACHER TEACHER

function add_teacher(){

send_data([],'get_teacher_register_form');
}

function view_teacher_info(){
  
  send_data([],'get_teacher_info_form');
}

function asign_teacher_class_form(){
  
  send_data([],'asign_teacher_class_form');
}

// HANDLE RESULTS HANDLE RESULTS HANDLE RESULTS
// HANDLE RESULTS HANDLE RESULTS HANDLE RESULTS
// HANDLE RESULTS HANDLE RESULTS HANDLE RESULTS
// HANDLE RESULTS HANDLE RESULTS HANDLE RESULTS
// HANDLE RESULTS HANDLE RESULTS HANDLE RESULTS
// HANDLE RESULTS HANDLE RESULTS HANDLE RESULTS


function handle_result(result,type){
  //alert(result);
 if(result.trim() != ""){

    var obj = JSON.parse(result);
    switch(obj.data_type){
  
      case "student":
        var inner_right_panel1 = _("inner_right_panel1");
       inner_right_panel1.innerHTML = obj.message;
       break;
       
       case "teacher":
        var inner_right_panel1 = _("inner_right_panel1");
       inner_right_panel1.innerHTML = obj.message;
     break;

      case "error":
       var error = _("error");
       error.style.display = "block";
       error.innerHTML = obj.message;
       break;
       
      case "add_student":
       var inner_right_panel1 = _("inner_right_panel1");
       inner_right_panel1.innerHTML = obj.message;
       // inner_right_pannel.style.overflow = "hidden";
       break;

      case "add_teacher":
        // alert(obj.message);
        var inner_right_panel1 = _("inner_right_panel1");
       inner_right_panel1.innerHTML = obj.message;
       // inner_right_pannel.style.overflow = "hidden";
     break;

      case "student_info_form":
        // alert(obj.message);
        var inner_right_panel1 = _("inner_right_panel1");
       inner_right_panel1.innerHTML = obj.message;
       // inner_right_pannel.style.overflow = "hidden";
     break;

      case "teacher_info":
        var inner_right_panel1 = _("inner_right_panel1");
       inner_right_panel1.innerHTML = obj.message;
     break;

      case "upgrade_student_class":
        var inner_right_panel1 = _("inner_right_panel1");
       inner_right_panel1.innerHTML = obj.message;
     break;
      case "insert_form":
        var inner_right_panel1 = _("inner_right_panel1");
       inner_right_panel1.innerHTML = obj.message;
     break;
      case "view_results":
        var inner_right_panel1 = _("inner_right_panel1");
       inner_right_panel1.innerHTML = obj.message;
     break;
      case "view_comment_form":
        var inner_right_panel1 = _("inner_right_panel1");
       inner_right_panel1.innerHTML = obj.message;
     break;

   

    }
   }
 }



// COLLECT STUDENT INFORMATION ON ADDING ANEW STUDENT
// COLLECT STUDENT INFORMATION ON ADDING ANEW STUDENT
function collect_student_data(e){
  // var register_btn1 = _("register_btn1");
  
  // register_btn1.disabled = true;
  // register_btn1.value = "Loading...Please wait";
  var form = _("form"); 
  var inputs = form.getElementsByTagName("INPUT");
  var data = {};
  var selects = form.getElementsByTagName("select");
  //  select = e.target.getAttribute("standard");
 
 for(var i = 0; i < inputs.length; i++){
   
   var key = inputs[i].name;
   
   switch(key){
     case "first_name":
       data.first_name = inputs[i].value;
    break;
    
    case "middle_name":
      data.middle_name = inputs[i].value;
    break;

    case "sur_name":
      data.sur_name = inputs[i].value;
    break;
    
   case "date_of_birth":
     data.date_of_birth = inputs[i].value;
    break;
    
   case "gender":
    if(inputs[i].checked){
      data.gender = inputs[i].value;
    }
    break;
    
   case "student_image":
     data.student_image = inputs[i].value;
    break;

    // GUARDIAN GUARDIAN
    case "guardian_name":
      data.guardian_name = inputs[i].value;
      break;
      
      case "guardian_surname":
        data.guardian_surname = inputs[i].value;
        break;
        
        case "guardian_type":
       data.guardian_type = inputs[i].value;
      break;
      
      case "guardian_contacts":
       data.guardian_contacts = inputs[i].value;
      break;
      
     case "guardian_image":
       data.guardian_image = inputs[i].value;
       break;
 
      }
    }

    for(var i = 0; i <selects.length; i++){
   
   var key = selects[i].name;
   switch(key){
    case "standard":
      data.standard = selects[i].value;
      break;
    case "year":
      data.year = selects[i].value;
      break;
    case "stream":
      data.stream = selects[i].value;
      break;
   }
 }
     get_data(data, "student_data");
     
     // alert(JSON.stringify(data));
     // alert(JSON.stringify(data));
     
    }
   
  
  // COLLECT TEACHER INFORMATION ON ADDING ANEW TEACHER
  // COLLECT TEACHER INFORMATION ON ADDING ANEW TEACHER
  function collect_teacher_data(e){
  
  var teacher_form = _("teacher_form"); 
  var inputs = teacher_form.getElementsByTagName("INPUT");
  var selects = teacher_form.getElementsByTagName("select");
  var data = {};


   
  for(var i = 0; i < inputs.length; i++){

  var key = inputs[i].name;

  switch(key){
  case "first_name":
    data.first_name = inputs[i].value;
    break;
    
  case "middle_name":
    data.middle_name = inputs[i].value;
    break;
    
  case "email":
    data.email = inputs[i].value;
    break;
    
  case "contacts":
    data.contacts = inputs[i].value;
    
    break;

    case "gender":
      if(inputs[i].checked){
      data.gender = inputs[i].value;
      }
      break;



  }
  }
  for(var i = 0; i <selects.length; i++){

  var key = selects[i].name;
  switch(key){
  case "usertype":
    data.usertype = selects[i].value;
    break;
  }
  }
  get_data(data, "teacher_data");

  }



  // function upload_profile_image(files){
       
  //      var change_image_button = __("change_image_button");
  //          change_image_button.disabled = true;
  //          change_image_button.innerHTML = "Uploading Image...";
 
  //      var xml = new XMLHttpRequest();
 
  //      var myform = new FormData();
 
  //      xml.onload = function(){
  //        if(xml.readyState == 4 || xml.status == 200){
 
  //          // alert(xml.responseText);
  //          // HERE WE REFRESH THE SETTINGS AND USER INFO AFTER IMAGE UPDATE
  //         //  get_data_data({},"user_info");
  //         //  get_settings(true);
  //          var change_image_button = __("change_image_button");
  //          change_image_button.disabled = false;
  //          change_image_button.innerHTML = "Change Image";
  //      }
  //      }
  //      // create the form and attach it with the file draged
  //      myform.append('file',files[0]);
  //      myform.append('data_type',"change_profile_image");
 
  //      xml.open("POST","uploader_student.php",true);
  //      xml.send(myform);// send the form that has the name of the image selected
  //    }

</script>
 
</body>
</html>
 