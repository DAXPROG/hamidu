<?php
session_start();
include("<include/connect.php");

if(isset($_POST['login'])){
  $firstname = htmlspecialchars($_POST['firstname']);
  $middlename = htmlspecialchars($_POST['middlename']);
  $password = htmlspecialchars($_POST['password']);

  if(empty($firstname) || empty($middlename)){
    $_SESSION['error'] = "FILL STUDENT'S NAMES";
    header('Location: login.php');
  }else if(empty($password)){
    $_SESSION['error'] = "FILL PASSWORD TO LOGIN";
    header('Location: login.php');
  }else{
    $sql = "SELECT * FROM students WHERE firstname='$firstname'AND midllename='$middlename' AND password='$password';";
    $sql_run = mysqli_query($connect, $sql);

    
    if($data = mysqli_fetch_array($sql_run)){

        $_SESSION['student_id'] = $data['student_id'];
        header('Location: homes.php');
      
    }else{
      $_SESSION['error'] = "INCORECT LOGIN!";
      header('Location: login.php');
    }
    mysqli_close();
  }
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>LOGIN PAGE</title>
 <style>
  body{
   margin: 0px;
   background-color: brown;
   
  }
  .topdiv{
   background-image: url("img/shule2.jpeg");
   background-size: cover;
   background-position: center;
   background-repeat: no-reapeat;
   /* opacity: 0.4; */
   height: 515px;
   width: 85%;
  }
  .header{
   background-color: black;
   color: white;
   padding: 6px;
   opacity: 0.79;
  }
  h1{
   margin: 0px;
  }
  .ul{
   margin: 0px;
   padding-top: 5px;
   padding-bottom: 5px;
   display: flex;
   justify-content: center;
   align-items: center;
   list-style: none;
   background-color: #f4f4f4;
  }
  li{
   transition: 0.4s;
   float:right;
  }
  li:hover{
   color: blue;
   font-size: 25px;
   cursor: pointer;
  }
  select{
   border: none;
   background-color: #f4f4f4;
   font-size: 16px;
   transition: 0.4s;
  }
  select:hover{
   color: blue;
   font-size: 25px;
   cursor: pointer;
  }
  option{
  color: black;
  border-radius: 20px;
  }
  .para{
   font-size: 20px;
   color: darkblue;
  }
  a{
   text-decoration: none;
   color: black;
  }
  a:hover{
   color: blue;
  }
  
  .body{
   display: flex;
   justify-content: center;
   padding: 10px;
   border-radius: 20px;
   box-shadow: 4px 4px 20px black;
  }
  .left{
   flex: 1;
   background-color: #f4f4f4;
   height: 400px;
  }
  .right{
   flex: 2;
   background-color: white;
   height: 400px;
  }
  .login{
   margin: 10px 15px 12px 15px;
   border-radius: 20px;
   box-shadow: 4px 4px 20px black;
   padding: 10px 15px 20px 15px;
   
  }
  input{
   border-radius: 5px;
   margin-bottom: 10px;
   font-size: 12px;
   padding: 3px 2px 3px 2px;
   text-align: center;
   color: brown;
   width: 110px;
  }
  button{
   padding: 8px 25px;
   border-radius: 8px;
   border: none;
   background-color: rgb(21, 60, 69);
   color:white;
  }
  p{
   margin: 0px;
   color: black;
   font-weight: bold;
  }
  .content{
   line-height: 20px;
   font-size: 20px;
   color: black;
  }
  .footer{
    background-color: rgb(10, 121, 162);
    height: 80px;
  }
 </style>
</head>
<body>
 <center>
  <div class="header">
  <h5 class="card-title" style="margin:0px;color:white;">PRESIDENT'S OFFICE</h5>
   <h4 class="card-text" style="margin:0px;color:orange;">MINISRY OF EDUCATIOIN, SCIENCE AND TECHNOLOGY MOROGORO REGION.</h4>
   <h2 class="card-text" style="margin:0px;color:white;">BAPTIST PRIMARY SCHOOL</h2>
   <!-- <h1>BAPTIST PRIMARY SCHOOL</h1> -->
  </div>
 <div class="topdiv">
  <div class="headerdiv">
    <span style="color:white;font-family:arial;font-weight:bold;">
      <a href="index.html" style="color:white;background-color:gray;padding:5px 5px 0px 5px;">HOME</a>
    </span>
  </div>
  
  <div class="body">
   <div class="left">

    <div class="login">
     <h3 style="margin:0px;">LOGIN FORM</h3>
     <form action="" method="post">
      <input type="text" name="firstname" placeholder="FIRSTNAME" ><br>
      <input type="text" name="middlename" placeholder="MIDDLENAME" ><br>
      <input type="password" name="password" placeholder="PASSWORD" ><br>
      <button type="submit" name="login">LOGIN</button>
     </form>
    <h5 style="color: red;"><?php 
    if(isset($_SESSION['error']) && $_SESSION['error'] != ''){
      echo $_SESSION['error'];
      unset($_SESSION['error']);
    }
    ?></h5>
    </div>
    <p>For any problem try to communicate with the administration</p>
    <p style="color:orange;">+225 675 256 261</p>
    <p style="color:orange;">+225 657 418 291</p>
   </div>
   <div class="right">
    <h3 style="color: darkblue;"><u>WELCOME IN STUDENT RESULT MANAGEMENT SYSTEM(<span style="color: black;">SRMS</span>)</u></h3>
    <p class="content">Fill correct details of your son/daughter at the login form to view the results of your child. Thank you.</p>
   </div>
  </div>
  
 </div>
 <div class="footer">
  
 </div>
 </center>
</body>
</html>
