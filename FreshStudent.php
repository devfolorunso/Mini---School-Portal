<?php require 'studentsession.php';?>
<!DOCTYPE>
<html>
    <head>
      <title>CiTHUB >> STUDENT'S BIODATA</title>
      <link rel="stylesheet" type="text/css" href="freshdetails.css">
      	<link rel="shortcut icon" href="favico.ico" type="image/x-icon">
    </head>
<body>
  <div class="header">
    <div class="logo">
      <h1> <?php echo $surname . " " . $firstname .  "  " . $othername?></h1>
    <p>KNOWLEDGE FOR DEVELOPMENT</p>
  </div>
  <div class="passimg">
  <?php echo "<img src='passimg/" .$passport."'>"?>
</div>
<div class="clearboth"></div>
  </div>

    <div class="navs">
      <a href="home.php">HOME</a>
      <marquee>WELCOME!!! KINDLY FILL THE FORM BELOW CORRECTLY! CORRECTIONS AFTER SUBMISSION ATTRACTS PENALTY FEES - MGT</marquee>
  </div>

    <form>
      <div class="container">
<div class="cont-left">

        <label>SURNAME</label>
        <input value="<?php echo $surname?>" disabled>
        <label>FIRSTNAME</label>
        <input value="<?php echo $firstname?>" disabled>
        <label>OTHERNAMES</label>
      <input value="<?php echo $othername?>" disabled>
        <label>Gender</label>
        <input value="<?php echo $gender?>" disabled>
  <br/><label>Marital Status</label>
        <input value="<?php echo $marital?>" disabled>
  <label>DATE OF BIRTH</label>
    <input value="<?php echo $dob?>" disabled>
    <label>PLACE OF BIRTH</label>
    <input value="<?php echo $pob?>" disabled>
    <label>STATE OF ORIGIN</label>
    <input value="<?php echo $sog?>" disabled>
    <label>LOCAL GOVERNMENT AREA</label>
    <input value="<?php echo $lga?>" disabled>

  </div>

  <div class="cont-right">
    <label>NATIONALITY</label>
    <input value="<?php echo $nationality?>" disabled>
    <label>CONTACT ADDRESS</label>
    <input value="<?php echo $contact?>" disabled>
    <label>YOUR EMAIL</label>
    <input value="<?php echo $email?>" disabled>
    <label>YOUR TELEPHONE NUMBER</label>
    <input value="<?php echo $tel?>" disabled>
    <label>NEXT OF KIN</label>
  <input value="<?php echo $nok?>" disabled>
    <label>NEXT OF KIN'S ADDRESS</label>
    <input value="<?php echo $nok_address?>" disabled>
    <label>NEXT OF KIN'S TELEPHONE NUMBER</label>
    <input value="<?php echo $nok_tel?>" disabled>
      <label class="prog-label">Programme</label><br/>
    <input value="<?php echo $prog?>" disabled>
<br/>
    <label class="corse-label">DEPARTMENT</label><br/>
    <input value="<?php echo $department?>" disabled>
  </div>
<div class="clearboth"></div>


  </div>


  </form>
</body>
</html>
