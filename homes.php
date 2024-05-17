<?php
session_start();
if(!isset($_SESSION['student_id'])){
  header('location: login.php');
}
include('include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>STUDENT RESULTS MANAGEMENT SYSTEM</title>
 <link rel="stylesheet" href="style/css.css">
</head>
<style>
  #header{
 background-color: rgb(30, 246, 206);
 color: brown;
 height:50px;
 text-align:center;
}
#h1{
  margin:0px;
  border-radius:10px;
}
#top-container{
 height:600px;
}
#right-div{
  background-color: rgb(208, 198, 191);
  flex: 5;
  overflow-x: scroll;
  overflow-y: scroll;
}
 @media (max-width:399px) {
  #top-container{
  width:98%;
 }
 
  #right-div{
   flex: 2.3;
  }
  #label{
  font-size:11px;
 }
 
 }
</style>
<body>
 <div id="header">
  <h1 id="h1"><marquee>STUDENT RESULTS MANAGEMENT SYSTEM</marquee></h1>
 </div>
  <center>
   <div id="top-container">
    <div id="left-div">
      <label id="label" for="news"><span id="arrow">::&#10095;</span>News</label>
        
      <label id="label" for="ases"><span id="arrow">::&#10095;</span>Cont Asesment</label>
     <?php
    include('include/assesment.php');
    ?>
      <label id="label" for="terminal"><span id="arrow">::&#10095;</span>Terminal Results</label>
      <?php
      include('include/terminal.php');
      ?>
      <label id="label" for="discipline"><span id="arrow">::&#10095;</span>Disciplinary</label>
      <label id="label" for="logout"><span id="arrow">::&#10095;</span>Logout</label>

      <form method="post" id="form">
        <input type="submit" id="news" name="news" style="display:none;">
      </form>
      
      <form method="post" id="form">
        <input type="submit" id="ases" name="asesment" style="display:none;">
      </form>
      
      <form method="post" id="form">
        <input type="submit" id="terminal" name="terminal" style="display:none;">
      </form>
      <form method="post" id="form">
        <input type="submit" id="discipline" name="discipline" style="display:none;">
      </form>
      <form method="post" id="form">
        <input type="submit" id="logout" name="logout" style="display:none;">
      </form>
      <h3 style="font-weight:bold;color:#f4f4f4;margin:0px;">For assistance call us</h3>
      <span style="font-family:arial;color:#f4f4f4;">System Administrator:</span><br>
      <span style="color:orange;font-size:12px;">+255 675 256 261</span><br>
      <span style="color:orange;font-size:12px;">+255 657 418 291</span>
      <br>
      <br>
      <span style="font-family:arial;color:#f4f4f4;">School Headteacher:</span><br>
      <span style="color:orange;font-size:12px;">+255 675 256 261</span><br>
      <span style="color:orange;font-size:12px;">+255 657 418 291</span>
 
      <form method="post">
        <input type="submit" name="leave" value="Leave a comment" style="background-color:brown;color:white;padding:5px;border-radius: 20px 20px;cursor:pointer;border:none;">
      </form>
      <?php
      if(isset($_POST['leave'])){

      ?>
      <form method="post">
        <textarea name="comment" cols="14" rows="8" placeholder="You can leave you'r comment here" require></textarea><br>
        <input type="hidden" name="student_id" value="<?php echo $_SESSION['student_id'];?>">
        <input type="submit" name="submit_comment" value="SEND" style="background-color:brown;color:white;padding:5px;border-radius: 20px 20px;cursor:pointer;border:none;">
      </form>
      <form method="post">
        <input type="submit" name="cancel" value="Cancel" style="background-color:red;color:white;padding:5px;border-radius: 20px 20px;cursor:pointer;border:none;">
      </form>
      <?php
       }
      include('include/comment.php');
      ?>
      
    </div>
      
    
    
    <div id="right-div">
      <div id="prof_image">
        <?php
          $id = $_SESSION['student_id'];
          $sql_query = "SELECT DISTINCT firstname,midllename,image,guardian_image FROM students WHERE student_id = '$id' LIMIT 1;";
          $runs = mysqli_query($connect,$sql_query);
          if($runs){
            
            foreach($runs as $run){
              ?>
              <div id="parent_image"><img src="<?php echo $run['guardian_image'];?>"></div>
              <div id="student_image">
              <img src="<?php echo $run['image'];?>"></div>
           

      </div>
            <?php
               
                 echo '<p style="text-align:center;margin:0px;background-color:white;font-family:arial;color:darkgreen;">WELCOME: '.$run["firstname"].' '.$run["midllename"].'</p>';
               
           }
          }
          ?>
      <div id="results_div">

    <?php
    include('include/get_continous.php');
    include('include/news.php');
  
    ?>
      </div>

    </div>
   </div>
  </center>
  <center>
   <div id="footer">@Designed & Developed By Hamidu System Developer</div>
  </center>
</body>
</html>