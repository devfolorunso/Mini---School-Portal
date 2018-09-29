<?php require 'studentsession.php';?>
<!DOCTYPE>
<html>
    <head>
      <title>CiTHUB</title>
      <link rel="stylesheet" type="text/css" href="e-portala.css">
      	<link rel="shortcut icon" href="favico.ico" type="image/x-icon">
    </head>
<body>
  <div class="header">
    <h1>STUDENTS PORTAL</h1>
    <p>KNOWLEDGE FOR DEVELOPMENT</p>
  </div>

    <div class="navs">
      <a href="home.php">HOME</a>
      <a href="course.php">COURSE REGISTRATION</a>
      <a href="result.php">RESULTS</a>
      <a href="signout.php">SIGN OUT</a>
      <?php
      echo "<input type='text' value='$department' hidden>
      <input type='text' value='$id' hidden>";
      // if (isset($_GET['department'])){
      //   $department = $_GET['department'];
      //   $id = $_GET['student_id'];

              if ($department = "computer-science"){
          $query = "INSERT INTO comscience (student_id) VALUES('$id')";
        }

  if ($department ="statistics") {
        $query = "INSERT INTO statistics (student_id) VALUES('$id')";
      }

        if (mysqli_query($con, $query)){
          echo "sucess!!";
        }
        else{
        echo "<font color='#660000'>Error!!!</font> " . mysqli_error($con);
        }
      ?>
  </div>
    <div class="dashboard">
<div class="left">
      <div class="fresh">
        <a href="freshstudent.php">FRESH STUDENT
          <p>  BIODATA , MEDICAL & OTHER DETAILS
        </p></a>
      </div>
      <div class="course-reg">
        <a href="course-reg.php">COURSE REGISTRATION
          <p>  FRESH & RETURNING STUDENTS
        </p></a>
      </div>
      <div class="change-course">
        <a href="change-course.php">CHANGE OF COURSE
          <p>  VOLUNTARY & WITHDRAWN STUDENTS
        </p></a>
      </div>

      <div class="email-ret">
        <a href="retreive-email.php">e-MAIL RETREIVAL
          <p> RETREIVE E-MAIL
        </p></a>
      </div>

</div>

<div class="center">
      <div class="receipt">
        <a href="receipts.php">RECEIPTS
          <p>  FOR ALL STUDENTS
        </p></a>
      </div>

      <div class="reset">
        <a href="retreive.php">RETREIVE PASSWORD
          <p> SEND TO MY MAILBOX
        </p></a>
      </div>
      <div class="login">
        <a href="portallogin.php">PORTAL LOGIN
          <p> STUDENTS
        </p></a>
      </div>

      <div class="school-fee">
        <a href="make-payment.php">SCHOOL FEES
          <p>  FRESH & RETURNING STUDENTS
        </p></a>
      </div>
</div>
<div class="center">
  <div class="check-result">
    <a href="check-result.php">RESULT CHECKER
      <p>Check Approved Result
    </p></a>
  </div>

  <div class="forum">
    <a href="e-learning.php">E-LEARNING FORUM
      <p>Discuss Topics With Coursemates
    </p></a>
  </div>

  <div class="lecturenote">
    <a href="lecturenotes.php">LECTURE NOTES
      <p>Course Materials</p></a>
  </div>
  <div class="get-mail">
    <a href="lecturenotes.php">CHECK MAILBOX
      <p>@students.cithub</p></a>
  </div>
</div>
<div class="clearboth"></div>
    </div>

</body>
</html>
