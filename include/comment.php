<?php

if(isset($_POST['submit_comment'])){
 $student_id = $_POST['student_id'];
 $comment = $_POST['comment'];
 $date = date('Y:m:d H:i:s');

 $sql_comment = "INSERT INTO comments (student_id,comment,date) VALUES ('$student_id','$comment','$date')";
 $comment_runs = mysqli_query($connect,$sql_comment);
 if($comment_runs){

  echo '<p style="color: lightgreen;">Your comment was reseived successfully!</p>';
 }

}