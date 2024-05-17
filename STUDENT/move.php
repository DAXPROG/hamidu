<?php

if(isset($_POST['upgrade_class'])){

 for($i=1; $i <= $_SESSION['jumla']; $i++){
  if($_POST['new_class'.$i] == "New class"){
   echo '<h1 style="background-color:red;color:white;margin:0;">Please select new class for all students on line '.$i.'</h1><br>';
   
  }
  else if($_POST['new_stream'.$i] == "Stream"){
   echo '<h1 style="background-color:red;color:yellow;margin:0;">Please select new stream for all students on line '.$i.'</h1><br>';
   
  }
  else if($_POST['new_year'.$i] == "Year"){
  echo '<h1 style="background-color:lightblue;color:white;margin:0;">Please select new year for all students on line '.$i.'</h1><br>';
  
  }else{
     $data=array(
       'student_id' => $_POST['id'.$i],
       'class' => $_POST['new_class'.$i],
       'stream' => $_POST['new_stream'.$i],
       'year' => $_POST['new_year'.$i]
     );
     insert_into_db($data);
    }
}
}

function insert_into_db($data){
foreach($data as $key => $value){
 $k[] = $key;
 $v[] = "'".$value."'";
 }
 $k=implode(",", $k);
 $v=implode(",", $v);

 $conn = mysqli_connect("localhost","root","","school_db");
 $sql = "INSERT INTO results($k) VALUES($v)";
 $run_query = mysqli_query($conn,$sql);
 
 if($run_query){
  echo '
  <h1 style="backgroung-color:green;color:white;">STUDENT CLASS UPGRATION SUCCESSFULY DONE</h1>
  ';
}
}
// mysqli_close();

?>