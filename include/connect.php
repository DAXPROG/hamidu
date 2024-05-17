<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$db = 'school_db';

$connect = mysqli_connect($localhost,$username,$password,$db);

if(!$connect){
 die("CONNECTION FAILED");
}