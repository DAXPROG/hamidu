<?php
Class Database{

 // CONSTRUCT CONSTRUCT
 private $con;
 function __construct(){
 $this->con = $this->connect();
 }

 // CONNECT TO DB CONNECT TO DB
 private function connect(){
  try{

   $string = "mysql:host=localhost;dbname=school_db;";
   $connection = new PDO($string,DBUSER,DBPASS);
   return $connection;
  }catch(PDOException $e){
   echo $e->getMessage();
   die;
  }
  return false;
 }

 // HERE WE WRITE TO DATABASE
 public function write($query,$dat=[]){

 $con = $this->connect();
  $statement = $con->prepare($query);  
  $check = $statement->execute($dat);
 
  
  if($check){
   return true;
  }
  return false;
 }

 // HERE WE READ FROM THE DATABASE
 public function read($query,$data_array=[]){

 $con = $this->connect();
  $statement = $con->prepare($query);  
  $check = $statement->execute($data_array);
 
  
  if($check){
   $result = $statement->fetchAll(PDO::FETCH_OBJ);
   if(is_array($result) && count($result) > 0){
      return $result;
   }
   return false;
  }
  return false;
 }

//  HERE WE GET USER WE CHAT



//  public function get_user($userid){

//  $con = $this->connect();
//  $arr['userid'] = $userid;
//  $query = "SELECT * FROM users WHERE userid = :userid LIMIT 1;";
//   $statement = $con->prepare($query);  
//   $check = $statement->execute($arr);
 
  
//   if($check){
//    $result = $statement->fetchAll(PDO::FETCH_OBJ);
//    if(is_array($result) && count($result) > 0){
//       return $result[0];
//    }
//    return false;
//   }
//   return false;
//  }

//  HERE WE GENERATE THE USERID
 public function generate_id($max){
  $rand = "";
  $rand_count = rand(4,$max);
  for($i = 0; $i < $rand_count; $i++){

   $r = rand(0,9);
   $rand .= $r; 
  }
  return $rand;
 }
}