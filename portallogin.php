<?php require 'cithubdb.php';
?>
<!DOCTYPE>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="login.css">
  <title>Kindly Login To Continue</title>
  <script type="text/javascript">
function validate()
{
  var username = document.login.username.value;
  var password = document.login.password.value;

  if (username == null || username == "")
  {
    alert("username can't be blank");
    return false;
  }
  elseif (password = null || password =="")
  {
    alert("password cant be blank");
    return false;
  }
}
  </script>
</head>
<body>
  <div class="header">
    <h1> CiTHUB PORTAL LOGIN</h1>
    <p>KNOWLEDGE FOR DEVELOPMENT</p>
  </div>

    <div class="navs">
      <a href="home.php">HOME</a>
      <marquee>LATEST UPDATES CAN BE HERE!!! LATEST UPDATES CAN BE HERE!!!  LATEST UPDATES CAN BE HERE!!!   LATEST UPDATES CAN BE HERE!!!
        LATEST UPDATES CAN BE HERE!!!</marquee>
  </div>


<div class="container">
  <div class="cont-left"><div class="greetings"><h2>WELCOME!!! LOGIN TO YOUR PERSONALIZED CiTHUB PORTAL</h2>
    <br/>
    <p>LOGIN TO your personalized CiTHUB PORTAL</p>
    <p>
      </p>
  </div>
</div>
  <div class="cont-right">
  <form name="login" method="POST" onsubmit="return validate();">
        <label>ENTER YOUR VALID EMAIL</label>
      <input type="email" name="email" placeholder="ENTER YOUR eMAIL"/>
      <br/>
      <label>ENTER YOUR PASSWORD</label>
          <input type="Password" name="password" placeholder="Password"/>
          <button type="submit" name="login">Login</button>
  </form>
<?php require 'loginconfig.php';?>
  <div class="fmnav-one">FORGOT <a href="retreive.php">PASSWORD?</a></div>
  <div class="fmnav-two"><a href="retreive-email.php">FORGOT E-MAIL?</a></div>
  </div>

</div>
</body>
</html>
