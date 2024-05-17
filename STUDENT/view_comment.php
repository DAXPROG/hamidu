<?php
if(isset($_POST['view'])){
include('include/connect.php');
 $date = $_POST['date'];

 $sql_view = "SELECT * FROM comments INNER JOIN students ON comments.student_id = students.student_id WHERE comments.date = '$date';";
 $view_runs = mysqli_query($connect,$sql_view);
 $mycomments = '
 <table border="2">
 <tr style="background-color:lightblue;">
   <th>STUDENT NAME</th>
   <th>GUARDIAN NAME</th>
   <th>CONTACTS</th>
   <th>COMMENT</th>
   <th>DATE</th>
   <th>UPDATE</th>
 </tr>
 
 ';
 if($view_runs){
  foreach($view_runs as $view_run){

   $mycomments .= '
   <tr>
   <td style="background-color:darkblue;color:aqua;">'.$view_run['firstname'].' '.$view_run['midllename'].'</td>
   <td style="background-color:aqua;color:darkblue;">'.$view_run['guardian_name'].' '.$view_run['guardian_lastname'].'</td>
   <td style="background-color:brown;color:white;">'.$view_run['guardian_contact'].'</td>
   <td style="background-color:orange;color:rgb(75, 6, 75);">'.$view_run['comment'].'</td>
   <td  style="background-color:pink;color:rgb(75, 6, 75);">'.$view_run['date'].'</td>
   <td  style="background-color:yellow;color:red;">
   <form method="post">
   <input type="hidden" name="student_id" value="'.$view_run['student_id'].'">
   <input type="hidden" name="comment" value="'.$view_run['comment'].'">
   <input type="submit" name="delete" value="DELETE" style="background-color:red;color:white;padding:10px 20px;border-radius:10px;border:none;cursor:pointer;margin-top:5px;">
  </form>
   </td>
   </tr>
   ';
   
   
  }
  $mycomments .= '
  </table>
  <form>
   <input type="submit" value="CLOSE" style="background-color:red;color:white;padding:10px 20px;border-radius:10px;border:none;cursor:pointer;margin-top:5px;">
  </form>
  ';
  echo $mycomments;
 }

}
include('include/connect.php');
if(isset($_POST['delete'])){
 $student_id = $_POST['student_id'];
 $comment = $_POST['comment'];
 $_sql = "DELETE FROM comments WHERE student_id = '$student_id' AND comment = '$comment';";
$sql_run = mysqli_query($connect,$_sql);
if($sql_run){
 echo "Comment deleted successfully";
}
}