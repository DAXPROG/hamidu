<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>ADMIN LOGIN PAGE</title>
 <style>
@keyframes para2{
   0%{opacity: 0; transform: translateX(70px);} 
   100%{opacity: 1; transform: translateX(-5px)} 
 }
  @keyframes para{
   0%{opacity: 0; transform: translateX(-70px);} 
   100%{opacity: 1; transform: translateX(5px)} 
 }

  body{
   background-color: brown;
   margin: 0px;
  }
  .header{
   background-color: black;
   color: white;
   padding: 4px;
   border-bottom: solid 5px brown;
  }
  .top{
   margin-top: 10px;
   width: 40%;
   padding: 10px;
   background-color: lightblue;
   border-radius: 10px;
   border-top: solid 12px rgb(236, 214, 10);
   border-right: solid 3px blue;
   border-left: solid 3px blue;
   border-bottom: solid 3px blue;
  }
  .container{
   display: grid;
   grid-template-columns: 1fr;
   background-color: rgb(6, 105, 129);
   padding: 20px 10px;
   border-radius: 20px;
   /* border-top: solid 12px rgb(236, 214, 10); */
   border-right: solid 3px blue;
   border-left: solid 3px blue;
   border-bottom: solid 3px blue;
  }
  #input1,#input2{
   background-color: #ccc;
   font-size: 30px;
   padding: 10px;
   width:270px;
   text-align: center;
   border-radius: 10px;
   border-top: solid 12px rgb(236, 214, 10);
   border-right: solid 3px blue;
   border-left: solid 3px blue;
   border-bottom: solid 3px blue;
  }

  @media (max-width:1000px) {
    .container{
      width: 300px;
    }
    .top{
      width: 350px;
      margin:auto;
    }
   
  }
  @media (max-width:1500px) {
    .top{
      width: 350px;
      margin:auto;
    }
  }

  #adminbtn{
   font-size: 35px;
   border-radius: 10px;
   background-color: darkgreen;
   color: white;
   transition: 1s;
  }
  #adminbtn:hover{ 
   background-color: lightblue;
   cursor: pointer;
   color: black;
  }
  h1{
   color: darkblue;
   border-bottom: solid 3px green;
   text-align:center;
  }
  h2,h3,h4{
    text-align:center;
    margin: 0px;
  }
 </style>
</head>
<body>
  <div class="header">
    <h3 class="card-title">PRESIDENT'S OFFICE</h5>
     <h4 class="card-text">MINISRY OF EDUCATIOIN, SCIENCE AND TECHNOLOGY MOROGORO REGION.</h4>
     <h2 class="card-text">BAPTIST PRIMARY SCHOOL</h2>
     <!-- <h1>BAPTIST PRIMARY SCHOOL</h1> -->
    </div>
  <div class="top">
   <h1>ADMIN LOGIN FORM</h1>
   <center>
  <div class="container">
    <?php 
    if(isset($_SESSION['error1'])){
      echo $_SESSION['error1'];
    }
    ?><?php
    if(isset($_SESSION['error2'])){
      echo $_SESSION['error2'];
    }
    ?><?php
    if(isset($_SESSION['error3'])){
      echo $_SESSION['error3'];
    }
    ?>
   <form method="post">
    
    <input type="text" id="input1" name="username" placeholder="USERNAME">
    <br>
    <br>    
    <input type="password" id="input2" name="password" placeholder="PASSWORD">
    <br>
    <br>
    <br>
    
    <input type="submit" name="login" id="adminbtn" value="LOGIN">
  </form>
</center>
   <h2 style="color: red; background-color: white;"></h2>
  </div>
  </div>
</body>
</html>

<?php
include('includes/adminlogin.php');
?>
