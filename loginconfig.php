<?php
session_start();
if($_SERVER["REQUEST_METHOD"] =="POST"){

  $myemail = mysqli_real_escape_string($con,$_POST['email']);
  $mypassword = mysqli_real_escape_string($con,$_POST['password']);

  $query ="SELECT * FROM freshers where email = '$myemail' and password = '$mypassword'";

  $sql =mysqli_query($con, $query);
  $row =mysqli_fetch_array ($sql);

  $count = mysqli_num_rows($sql);

  if ($count == 1){
    $_SESSION['student_in'] = $myemail;
    header("location: e-portal.cithub.php?id='$student_id'");
  } else{
    echo "<font color='#600000'>Your Email or Password is invalid</font>";
  }
}
?>
