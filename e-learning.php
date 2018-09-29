<?php require 'studentsession.php';
?>


<!DOCTYPE>
<html>
    <head>
      <title>CiTHUB >> ADMISSION FORM</title>
        <link rel="stylesheet"  type="text/css"  href="e-learninga.css">
      	<link rel="shortcut icon" href="favico.ico" type="image/x-icon">
        <script>
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
        </script>
    </head>
<body>
    <div class="navs">
      <div class="open" onclick="openNav()"><img src ="menu.png"></div>
<a href="home.php">SIGN OUT</a>
<a href="home.php">e-PORTAL</a>
<a href="home.php">CiTHUB - WEB</a>
<a href="home.php">CREATE POST</a>
<a href="home.php">HOME</a>
      <marquee>WELCOME!!! KINDLY FILL THE FORM BELOW CORRECTLY! CORRECTIONS AFTER SUBMISSION ATTRACTS PENALTY FEES - MGT</marquee>
<div class="clearboth"></div>
  </div>


  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php echo " <div align='center'><img src='passimg/" .$passport ."' . class='profimg'></div>";?>
        <h2><?php echo $firstname;?></h2>
        <a href="home.php?username=<?php echo  $firstname; ?>">HOME</a>
      <a href="profile.php?username=<?php echo  $firstname; ?>">View Profile</a>
      <a href="editprofile.php?username=<?php echo  $firstname; ?>>">Edit Profile</a>
        <a href="changeprofpic.php?username=<?php echo  $firstname; ?>">CHANGE PROFILE PICTURE</a>
      <a href="signout.php?"> Sign Out</a>|
    </div>
  </div>


  <div class="posts"></div>
  <div id="main">
  <div class="cmt"><h2>LATEST GIST'S</h2></div>
    <div class="dashboard">
      <table>
<tr>
      <td>
        >><a href="readpost.php?post_id">POST TOPICS WILL APPEAR HERE!!POST TOPICS WILL APPEAR HERE!!</a>
      </td>
    </tr>
    <tr>
      <td>
      >><a href="readpost.php?post_id">POST TOPICS WILL APPEAR HERE!!POST TOPICS WILL APPEAR HERE!!</a>
    </td>
      </tr>

      <tr>
        <td>
        >><a href="readpost.php?post_id">POST TOPICS WILL APPEAR HERE!!POST TOPICS WILL APPEAR HERE!!</a>
      </td>
        </tr>
        <tr>
          <td>
          >><a href="readpost.php?post_id">POST TOPICS WILL APPEAR HERE!!POST TOPICS WILL APPEAR HERE!!</a>
        </td>
          </tr>
          <tr>
            <td>
            >><a href="readpost.php?post_id">POST TOPICS WILL APPEAR HERE!!POST TOPICS WILL APPEAR HERE!!</a>
          </td>
            </tr>
            <!--   <tr>
                <td>
                >><a href="readpost.php?post_id">POST TOPICS WILL APPEAR HERE!!POST TOPICS WILL APPEAR HERE!!</a>
              </td>
            </tr> DOESN'T NEED TO BE REPEATED IF YOU USE WHILE LOOP TO DISPLAY POST FROM DATABASE -->
    </table>

</div>

</body>
</html>
