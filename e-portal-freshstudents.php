  <?php  require 'cithubdb.php';?>
<!DOCTYPE>
<html>
    <head>
      <title>CiTHUB >> ADMISSION FORM</title>
      <link rel="stylesheet" type="text/css" href="afresh.css">
      	<link rel="shortcut icon" href="favico.ico" type="image/x-icon">
    </head>
<body>
  <div class="header">
    <h1> CiTHUB ADDMISSION FORM</h1>
    <p>KNOWLEDGE FOR DEVELOPMENT</p>
  </div>

    <div class="navs">
      <a href="home.php">HOME</a>
      <marquee>WELCOME!!! KINDLY FILL THE FORM BELOW CORRECTLY! CORRECTIONS AFTER SUBMISSION ATTRACTS PENALTY FEES - MGT</marquee>
  </div>

    <form method="POST" enctype="multipart/form-data">
      <div class="container">
        <div class="user">
          <?php require 'newadmitconfig.php';?>
        </div>
<div class="cont-left">
        <label>ENTER YOUR SURNAME</label>
        <input type="text"  placeholder="Enter Your Surname" name="surname" required/>
        <label>ENTER YOUR FIRSTNAME</label>
        <input type="text"  placeholder="Enter Your Firstname" name="first_name" required/>
        <label>ENTER YOUR OTHERNAMES</label>
        <input type="text"  placeholder="Enter Your Othernames" name="othername" required/>
        <label>UPLOAD YOUR CLEAR PASSPORT</label>
        <input type="file" name="passport" id="uploadFile"  value="uploadFile"/>
        <label>Gender</label>
        <input type="radio" name="gender" value="Male "class="radiom" checked="checked"/>Male
        <input type="radio" name="gender" value="Female" class="radiof" checked="checked"/>Female
  <br/><label>Marital Status</label>
  <input type="radio" name="marital_status" value="Single "class="radiom" checked="checked"/>Single
  <input type="radio" name="marital_status" value="Married" class="radiof" checked="checked"/>Married
  <label>ENTER YOUR DATE OF BIRTH</label>
    <input type="date"  placeholder="ENTER YOUR DATE OF BIRTH" name="dob" required/>
    <label>ENTER YOUR PLACE OF BIRTH</label>
    <input type="text" placeholder="ENTER YOUR PLACE OF BIRTH" name="pob" required/>
    <label>STATE OF ORIGIN</label>
    <input type="text" placeholder="STATE OF ORIGIN" name="sog" required/>
    <button type="reset" class="cont-rght">RESET</button>
  </div>


  <div class="cont-right">
    <label>NATIONALITY</label>
    <input type="text" placeholder="NATIONALITY" name="nationality" required/>
    <label>CONTACT ADDRESS</label>
    <input type="text"  placeholder="CONTACT ADDRESS" name="contact_address" required/>
    <label>YOUR EMAIL</label>
    <input type="email"  placeholder="YOUR EMAIL" name="email" required/>
    <label>YOUR TELEPHONE NUMBER</label>
    <input type="tel"  placeholder="YOUR TELEPHONE NUMBER" name="tel" required/>
    <label>NEXT OF KIN</label>
    <input type="text"  placeholder="NEXT OF KIN" name="next_of_kin" required/>
    <label>NEXT OF KIN'S ADDRESS</label>
    <input type="text"  placeholder="NEXT OF KIN'S ADDRESS" name="nok_address" required/>
    <label>NEXT OF KIN'S TELEPHONE NUMBER</label>
    <input type="tel"  placeholder="NEXT OF KIN'S TELEPHONE NUMBER" name="nok_tel" required />
      <label class="prog-label">Programme</label><br/>
    <select name="programme" class="cat-prog">
      <option value="full-time">Full Time</option>
      <option value="part-time">Part Time</option>
      <option value="diploma">Diploma</option>
      <option value="pdg">Pre Degree</option>
    </select>
<br/>
    <label class="corse-label">Courses</label><br/>
    <select name="deptartment" class="cat-course">
      <option value="computer-science">Computer Science</option>
      <option value="computer-eng">Computer Enginneering</option>
      <option value="data-science">Data Science</option>
      <option value="statistics">Mathematics & Statistics</option>
    </select>
  </div>
  <div class="cont-cent">

    <button type="submit">SUBMIT</button>
  </div>
<div class="clearboth"></div>



  </div>


  </form>
</body>
</html>
