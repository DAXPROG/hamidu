
<hr>
<form action="" method="get">
 <input type="number" placeholder="number of inputs" name="number_of_rows" max="10" min="1" value="?=$rows?">
<input type="submit" name="submit2" value="Submit">
</form>

<form action="" method="post">
<?php
$rows = 1;
 if(isset($_GET['number_of_rows'])){
    $rows = $_GET['number_of_rows'];
 }
 for($i=0; $i<$rows; $i++){
  ?>
   <div>
    <input type="text" name="fname<?=$i?>" placeholder="Firstname" required>
    <input type="text" name="lname<?=$i?>" placeholder="Lastname" required>
   </div>
  <?php
 }
?>
 <div>
   <input type="submit" name="submit" value="submit">
 </div>
</form>

<?php

      if(isset($_POST['submit'])){

        for($i=0; $i<$rows; $i++){
            $data=array(
              'fname' => $_POST['fname'.$i],
              'lname' => $_POST['lname'.$i]
            );
            insert_into_db($data);
      }
      }
      
      function insert_into_db($data){
       foreach($data as $key => $value){
        $k[] = $key;
        $v[] = "'".$value."'";
        }
        $k=implode(",", $k);
        $v=implode(",", $v);

        $conn = mysqli_connect("localhost","root","","sample");
        $sql = "INSERT INTO names($k) VALUES($v)";
        $run_query = mysqli_query($conn,$sql); 
      }

      

?>