<?php

if(isset($_POST['news'])){

 
 $sql = "SELECT DISTINCT news FROM comments;";
 $results = mysqli_query($connect,$sql);
 if($results){
  foreach($results as $result){
  
   echo '
   <div style="margin:auto;background-color:#f4f4f4;color:darkblue;border-radius:10px;padding:10px;font-size:20px;box-shadow:0px 0px 20px black;text-align:center;">'.$result['news'].'</div>
   ';
  }
 }
}