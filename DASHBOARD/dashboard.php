<?php
if(isset($_POST['dashboard'])){

 
?>

 <style>
    @keyframes apear{
      0%{opacity: 0; transform: translateY(100px);} 
      100%{opacity: 1; transform: translateY(0px);} 
    }
  #outer{
   display:grid;
   grid-template-columns: 1fr 1fr 1fr 1fr;
   padding: 20px;
   background-color:brown;
   column-gap: 30px;
   row-gap: 30px;
   width:70%;
   border-radius:0px 0px 20px 20px;
   animation: apear 1s ease;
   box-shadow:0px 0px 60px black;
  }
  #cards{
   background-color:#f4f4f4;
   padding:20px;
   border-radius:10px;
   width:80%;
   box-shadow:0px 0px 20px black;
   z-index: 2;
   height:50px;
   margin-top:10px;
  }
  #toll{
   padding:5px;
   /* background-color:rgb(255, 183, 146); */
   margin-top:-45px;
   border-radius:5px;
   border-top: solid 4px darkblue;
   border-right: solid 4px darkblue;
   border-bottom: none;
   border-left: solid 4px darkblue;
   width:50%;
   color:white;
   /* box-shadow:0px 0px 5px #35bae7; */
  }
  #hh{
   margin:auto;
   background-color:green;
   color:white;
  }
  #h{
   margin:auto;
   padding-top:13px;
  }
  #in{
   background-color:#2181bc;
   color:white;
   padding:10px 30px;
   border-radius:8px;
   border:none;
   cursor:pointer;
  }
  #in:hover{
   opacity:0.6;
  }
  @media (max-width:1000px) {
   #outer{
    width:85%;
   display:grid;
   grid-template-columns: 1fr 1fr 1fr;
  }
  }
  @media (max-width:800px) {
   #outer{
    width:94%;
   display:grid;
   grid-template-columns: 1fr 1fr;
  }
  }
  @media (max-width:600px) {
   #outer{
    width:70%;
   display:grid;
   grid-template-columns: 1fr;
  }
  #hh{
   font-size:15px;
  }
  }
 </style>

<center>
 <h1 id="hh">TOTAL NUMBER OF STUDENTS AND TEACHERS IN THE YEAR 2024</h1>
 <br>
 <div id="outer">

  <div id="cards">
   <div id="toll">KGT 1</div>
   <h1 id="h">
    <?php
    include('include/connect.php');
    $year =  date('Y');

    $sql = "SELECT DISTINCT results.student_id,students.student_id,year,class FROM students LEFT JOIN results ON students.student_id = results.student_id WHERE results.year = '$year' AND results.class = 'KGT 1'";
    $sql_run = mysqli_query($connect,$sql);
    echo mysqli_num_rows($sql_run);
    ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">KGT2</div>
   <h1 id="h">
   <?php
   $sql = "SELECT DISTINCT results.student_id,students.student_id,year,class FROM students LEFT JOIN results ON students.student_id = results.student_id WHERE results.year = '$year' AND results.class = 'KGT 2'";
   $sql_run = mysqli_query($connect,$sql);
   echo mysqli_num_rows($sql_run);
   ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">STD 1</div>
   <h1 id="h">
   <?php
   $sql = "SELECT DISTINCT results.student_id,students.student_id,year,class FROM students LEFT JOIN results ON students.student_id = results.student_id WHERE results.year = '$year' AND results.class = 'STD 1'";
   $sql_run = mysqli_query($connect,$sql);
   echo mysqli_num_rows($sql_run);
   ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">STD 2</div>
   <h1 id="h">
   <?php
   $sql = "SELECT DISTINCT results.student_id,students.student_id,year,class FROM students LEFT JOIN results ON students.student_id = results.student_id WHERE results.year = '$year' AND results.class = 'STD 2'";
   $sql_run = mysqli_query($connect,$sql);
   echo mysqli_num_rows($sql_run);
   ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">STD 3</div>
   <h1 id="h">
   <?php
   $sql = "SELECT DISTINCT results.student_id,students.student_id,year,class FROM students LEFT JOIN results ON students.student_id = results.student_id WHERE results.year = '$year' AND results.class = 'STD 3'";
   $sql_run = mysqli_query($connect,$sql);
   echo mysqli_num_rows($sql_run);
   ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">STD 4</div>
   <h1 id="h">
   <?php
   $sql = "SELECT DISTINCT results.student_id,students.student_id,year,class FROM students LEFT JOIN results ON students.student_id = results.student_id WHERE results.year = '$year' AND results.class = 'STD 4'";
   $sql_run = mysqli_query($connect,$sql);
   echo mysqli_num_rows($sql_run);
   ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">STD 5</div>
   <h1 id="h">
   <?php
   $sql = "SELECT DISTINCT results.student_id,students.student_id,year,class FROM students LEFT JOIN results ON students.student_id = results.student_id WHERE results.year = '$year' AND results.class = 'STD 5'";
   $sql_run = mysqli_query($connect,$sql);
   echo mysqli_num_rows($sql_run);
   ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">STD 6</div>
   <h1 id="h">
   <?php
   $sql = "SELECT DISTINCT results.student_id,students.student_id,year,class FROM students LEFT JOIN results ON students.student_id = results.student_id WHERE results.year = '$year' AND results.class = 'STD 6'";
   $sql_run = mysqli_query($connect,$sql);
   echo mysqli_num_rows($sql_run);
   ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">STD 7</div>
   <h1 id="h">
   <?php
   $sql = "SELECT DISTINCT results.student_id,students.student_id,year,class FROM students LEFT JOIN results ON students.student_id = results.student_id WHERE results.year = '$year' AND results.class = 'STD 7'";
   $sql_run = mysqli_query($connect,$sql);
   echo mysqli_num_rows($sql_run);
   ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">All</div>
   <h1 id="h">
   <?php
   $sql = "SELECT DISTINCT results.student_id,students.student_id,results.year FROM students LEFT JOIN results ON students.student_id = results.student_id WHERE results.year = '$year'";

   $sql_run = mysqli_query($connect,$sql);
   echo mysqli_num_rows($sql_run);
   ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">Teachers</div>
   <h1 id="h">
   <?php

   $sql = "SELECT DISTINCT teacher_id FROM teachers";
   $sql_run = mysqli_query($connect,$sql);
   echo mysqli_num_rows($sql_run);
   ?>
   </h1>
  </div>
  <div id="cards">
   <div id="toll">News</div>
   <form method="post" style="margin-top:20px;">
    <input type="submit" name="publish" value="PUBLISH" id="in">
   </form>
  </div>

 </div>
</center>
<?php
}

if(isset($_POST['publish'])){
 
 echo '
 <style>
  #in:hover{
   opacity:0.6;
  }
 </style>
 <h1 style="margin:0px;background-color:green;color:white;">WRITE A NEWS TO PUBLISH TO THE PARENTS</h1>
 <br>
 <form method="post">';

 include('include/connect.php');
 $sql = "SELECT DISTINCT news FROM comments;";
 $run = mysqli_query($connect,$sql);
 if($run){
  foreach($run as $data){
  $news = $data['news'];
  }
 }
   echo '<textarea name="news" cols="26" rows="8" style="border-radius:10px;font-size:20px;" placeholder="'.$news.'" required></textarea><br>
   <input type="hidden" name="student_id" value=""><input type="submit" id="in" name="publish_news" value="PUBLISH" style="
   background-color:#2181bc;
   color:white;
   padding:10px 30px;
   border-radius:8px;
   border:none;
   cursor:pointer;
   ">
 </form>
 ';
}

if(isset($_POST['publish_news'])){
 include('include/connect.php');
 $news = $_POST['news'];
 $sql = "UPDATE comments SET news = '$news'";
 $run = mysqli_query($connect,$sql);
 if($run){
  echo "<h2 style='background-color:green;color:white;margin:0px;'>The news published successfully!</h2>";
 }
}

?>
