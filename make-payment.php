<?php require 'studentsession.php';
?>
<!DOCTYPE>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="make-paymenta.css">
  <title>PAYMENT GATEWAY</title>
  <script type="text/javascript">
function validate()
{
  var firstname = document.pay.firstname.value;
  var surname = document.pay.surname.value;
  var card = document.pay.card.value;
  var month = document.pay.month.value;
  var year = document.pay.year.value;
  var cvv = document.pay.cvv.value;
  if (surname == null || surname == "")
  {
    alert("SURNAME can't be blank");
    return false;
  }
  elseif ( firstname= null || firstname =="")
  {
    alert("FIRSTNAME cant be blank");
    return false;
  }
  elseif ( card= null || card =="")
  {
    alert("CARD DETAILS  cant be blank");
    return false;
  }
  elseif ( month= null || month =="")
  {
    alert("MONTH cant be blank");
    return false;
  }
  elseif ( year= null || year =="")
  {
    alert("YEAR cant be blank");
    return false;
  }
  elseif ( cvv= null || cvv =="")
  {
    alert("CVV cant be blank");
    return false;
  }
}
  </script>
</head>
<body>
  <div class="header">
    <h1> CiTHUB PAYMENT GATEWAY</h1>
    <p>KNOWLEDGE FOR DEVELOPMENT</p>
  </div>

    <div class="navs">
      <a href="home.php">HOME</a>
      <marquee>LATEST UPDATES CAN BE HERE!!! LATEST UPDATES CAN BE HERE!!!  LATEST UPDATES CAN BE HERE!!!   LATEST UPDATES CAN BE HERE!!!
        LATEST UPDATES CAN BE HERE!!!</marquee>
  </div>


<div class="container">
  <div class="cont-left">
  <form name="pay" method="POST" onsubmit="return validate();">
    <div class="left">
      <label>SURNAME:</label>
        <input type="text" name="surname" id="inputsurname">
      </div>
       <div clas="right">
         <label>FIRSTNAME:</label>
    <input type="text" name="firstname" id="inputname">
  </div>
     <div class="card">
       <label>ENTER YOUR CARD DETAILS:</label>
      <input type="card" name="card" placeholder="xxxx-xxxx-xxxx-xxxx"  id="inputcardnum">
      </div>
      <div class="mmyy">
        <p>EXPIRES ON:</p>
        <input type="text" name="month" placeholder="MM" id="inputmm">
          <input type="text" name="year" placeholder="YY" id="inputYY">
      </div>
    <div class="clearboth"></div>
  </div>
  <div class="cont-right">

      <div class="border">SECURITY CODE:</div>
        <div class="float-right"><label> CVV2 :</label><input type="CVV" name="cvv" id="cvv"></div>
          <button type="submit" name="pay">PAY</button>
  </form>

  </div>

</div>
</body>
</html>
