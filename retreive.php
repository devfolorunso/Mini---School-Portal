<?php require 'cithubdb.php';?>
<!DOCTYPE>
<html>
    <head>
      <title>CiTHUB >> STUDENT'S BIODATA</title>
      <link rel="stylesheet" type="text/css" href="getpass.css">
      	<link rel="shortcut icon" href="favico.ico" type="image/x-icon">
    </head>
<body>
  <div class="header">
    <div class="logo">
      <h1> CiTHUB</h1>
    <p>KNOWLEDGE FOR DEVELOPMENT</p>
  </div>
  <div class="passimg">
</div>
<div class="clearboth"></div>
  </div>

    <div class="navs">
      <a href="home.php">HOME</a>
      <marquee>WELCOME!!! KINDLY FILL THE FORM BELOW CORRECTLY! CORRECTIONS AFTER SUBMISSION ATTRACTS PENALTY FEES - MGT</marquee>
  </div>
<div class="container">
<form method="POST">
      <label>ENTER STUDENT ID</label>
    <input type="text" name="surname" placeholder="ENTER STUDENT ID"/>
    <br/>
    <button type="submit">GET PASSWORD</button>
        <?php if(isset($_POST) && !empty($_POST)){
          $surname = $_POST['surname'];
          $query ="SELECT * FROM freshers where surname = '$surname' ";
          $sql = mysqli_query($con, $query);
          $row = mysqli_fetch_array($sql);
          $passkey = $row['password'];

          ?>
</form>
  <div class="pass"><?php echo $passkey;}?></div>
</div>
</body>
</html>
