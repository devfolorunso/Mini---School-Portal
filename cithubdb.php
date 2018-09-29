<?php
$db_host="localhost";
$db_database="cithub";
$db_username="root";
$db_password="";

$con = mysqli_connect($db_host,$db_username,$db_password,$db_database);

if (!$con){
  die("connection falied:" . mysqli_connect_error());
}
 ?>
