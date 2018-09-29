<?php
   require 'cithubdb.php';
   session_start();


   $user_check = $_SESSION['student_in'];
   $ses_sql = mysqli_query($con,"SELECT * FROM freshers where  email = '$user_check' ");
   $row = mysqli_fetch_array ($ses_sql,MYSQLI_ASSOC);

    $id = $row['student_id'];
    $surname = $row['surname'];
    $firstname = $row['first_name'];
    $othername = $row['othername'];
    $gender =  $row['gender'];
    $dob = $row['dob'];
    $marital = $row['marital_status'];
    $dob =$row['dob'];
    $pob = $row['pob'];
    $sog = $row['sog'];
    $nationality = $row['nationality'];
    $contact = $row['contact_address'];
    $email = $row ['email'];
    $tel  = $row ['tel'];
    $nok = $row['next_of_kin'];
    $nok_address= $row ['nok_address'];
    $nok_tel = $row ['nok_tel'];
    $prog= $row ['programme'];
    $department = $row['department'];
    $passport = $row ['passport'];
   if(!isset($_SESSION['student_in'])){
      header("location:portallogin.php");
   }
?>
  
