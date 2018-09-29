<!DOCTYPE>
<html>
    <head>
      <title>CiTHUB</title>
      <link rel="stylesheet" type="text/css" href="ahome.css">
      	<link rel="shortcut icon" href="favico.ico" type="image/x-icon">
      <script src="contact.js"></script>
    </head>
<body>
    <div class="topnav">
      <div class="nav-left">
        <img src="mapoly.jpg" class="logo">
      </div>
        <!-- <img src="mapoly.jpg" width="150px" height="150px"> -->
        <div class="nav-right">
          <div id="abc">
          <!-- Popup Div Starts Here -->
          <div id="popupContact">
          <!-- Contact Us Form -->
          <div class="pop">
          <form action="mailto:adesanyafolorunso1@gmail.com" id="form" method="post" name="form">
          <img id="close" src="close2.png" onclick ="div_hide()">

        <div class="contact">
          <h2>Contact Us</h2>
        </div>

          <hr>

          <input id="name" name="name" placeholder="Name" type="text">
          <input id="email" name="email" placeholder="Email" type="text">
          <textarea id="msg" name="message" placeholder="Message"></textarea>
          <a href="javascript:%20check_empty()" id="submit">Send</a>
          </form>
        </div>
          </div>
          <!-- Popup Div Ends Here -->
          </div>
                		<a id="popup" onclick="div_show()">CONTACT</a>
                  <a href="#"> School News</a>
        </div>
        <div class="clearboth"></div>
    </div>

  <div class="sec-nav">
    <div class="secnav-list">
          <a href="#">HOME</a>
            <a href="#about">ABOUT US</a>


          <div class="dropdown">
            <a href="#">SCHOOLS
              <div class="dropdown-content">
              <a href="#">SCHOOL OF SCIENCE & TECHNOLOGY</a>
              <a href="#">SCHOOL OF ENGINEERING</a>
               <a href="#">SHCOOL OF ARTS &DESIGN</a>
               <a href="#">SHCOOL OF COMMUNCATION TECHNOLOGY</a>
               <a href="#">SCHOOL OF BUSINESS AND MANAGEMENT STUDIES</a>
             </div>
            </a>
          </div>

          <div class="dropdown">
            <a href="#">PUBLICATIONS
              <div class="dropdown-content">
              <a href="#">WEBSITE TO BE LAUNCHED SOON</a>
              <a href="#">PORTAL UNDERGOING UPGRADE</a>
               <a href="#">RESULTS RELEASED</a>
             </div>
            </a>
          </div>


          <div class="dropdown">
            <a href="#">CENTERS
              <div class="dropdown-content">
              <a href="#">CENTER FOR DIPLOMA STUDIES</a>
              <a href="#">CENTER FOR PART-TIME</a>
               <a href="#">E-LIBRARY</a>
               <a href="#">CENTER FOR ENTREPRENUERAL STUDIES</a>
             </div>
            </a>
          </div>

          <div class="dropdown">
            <a href="#">ADDMISIONS
              <div class="dropdown-content">
              <a href="e-portal-freshstudents.php">ADMISSIONS INTO 100 LEVEL</a>
               <a href="#">DIRECT ENTRY</a>
               <a href="#">POST GRADUATE STUDIES</a>
             </div>
            </a>
          </div>
          <a href="e-portal.cithub.php">e-PORTAL</a>
    </div>
  </div>
  <!-- HEADER SECTION STOPS HERE -->



      <!-- SLIDER STARTS HERE!!!!  -->

  <div class="slider">

          <div class="myslides" id="captionText">
            <img src="b2.jpg" class="slide-img">
            <div class="caption-slider">adsdgfdfgdhd</div>
          </div>

          <div class="myslides" id="captionText">
            <img src="s2.jpg" class="slide-img">
          </div>

          <div class="myslides" id="captionText">
          <img src="s1.jpg" class="slide-img">
          </div>

        <div class="myslides" id="captionText">
          <img src="g6.jpg" class="slide-img">
        </div>

        <div class="myslides" id="captionText">
          <img src="g1.jpg" class="slide-img">
        </div>

          <a class="prev" onclick="plusSlides(-1)"> < </a>
      		<a class="next" onclick="plusSlides(1)"> > </a>

          <div style="text-align:center" class="dot-cover">
          <span class="dots" onclick="currentSlide(1)"></span>
          <span class="dots" onclick="currentSlide(2)"></span>
          <span class="dots" onclick="currentSlide(3)"></span>
          <span class="dots" onclick="currentSlide(4)"></span>
        </div>
  </div>


  <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n){
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName('myslides');
    var dots = document.getElementsByClassName('demo');
    var captionText = document.getElementById('caption');
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].classname = dots[i].classname.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].classname += " active";
    captionText.innetHTML = dots[slideIndex-1].alt;
  }
  </script>
        <!-- SLIDER ENDS HERE!!!  -->
        <div class="info">

          <div class="info-one">
            <img src="mapoly.jpg" class="info-icon">
          </div>
            <div class="info-two">
        <img src="mapoly.jpg" class="info-icon">
            </div>
              <div class="info-three">
                <img src="mapoly.jpg" class="info-icon">
              </div>
                  <div class="info-four">
                    <img src="mapoly.jpg" class="info-icon">
                  </div>
                      <div class="info-five">
                        <img src="mapoly.jpg" class="info-icon">
                      </div>
            <div class="clearboth"></div>
        </div>

            <!-- ABOUT AREA -->
  <div class="cover">
      <div class="about-us" id="about">
        <h2>CREATIVEDEVs INFORMATION  AND TECHNOLOGY HUB</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="prev-button">READ MORE</button>
      </div>

        <div class="c-vc">

          <div class="c-vc-left">
            <img src="abbeyweb.jpg" class="c-img"></br>
            <p><b>AZEEZ ABIODUN SOLOMON</b>
            </br>Lead Software Developer, Fullstack Web Developer
              </p>
          </div>
                  <div class="c-vc-center">
                    <img src="wolepython.jpg" class="c-img">
                    <p><b>OLUWOLE MAJIYAGBE</b>
                    Lead Software Developer, Python Expert, Mobile App Expert</p>
                  </div>

          <div class="c-vc-right">
            <img src="s2.jpg" class="c-img">
            <p>Lorem iLorem ipsum dolor sit amet, consectetur
              adipisicing elit, sed do eiusmod.</p>
          </div>
        </div>
      <div class="clearboth"></div>
  </div>
<!-- ABOUT AREA ENDS HERE!!! -->

<!-- NEWS AREA STARTS HERE!! -->
  <div class="footer-area">

    <div class="footer-area-left">
      <img src="php.png" class="footer-logo">
      <h2>CREATIVEDEVs INFORMATION AND TECHNOLOGY HUB</h2>

    <p>Our rich history is the foundation for our values. Join us to make your college experience unforgettable.</p>
      <p>&copy <a href="home.php">CITHUB</a> Powered by <a href="#">FOLLYWEB</a></p>
    </div>

    <div class="footer-area-center">
      <h4>QUICK LINKS</h4>
      <p><a href="#">Inagural</a></p>
        <p><a href="#">ICT UNIT</a></p>
          <p><a href="#">E-LIBRARY</a></p>
            <p><a href="#">STUDENTS MARKET</a></p>
              <p><a href="#">RECTOR'S OFFICE</a></p>
                <p><a href="#">BURSAR'S OFFICE</a></p>
                  <p><a href="#">DIRECCTORS</a></p>
                    <p><a href="#">HODS</a></p>
                      <p><a href="#">SUG OFFICIALS</a></p>

    </div>

    <div class="footer-area-right">
      <h4>NEWSLETTER</h4>
      <p>Get the latest CITHUB news delivered to your inbox.</p>
        <form method="post">
          <input type="email" name="email" placeholder="Yours Email Here" required/>
          <button type="submit" class="newsletter">SUBMIT</button>
        </form>
    <div class="social-cont">    <img src="facebook.png" class="social">  <img src="igicon.png" class="social"> <img src="twitter.png" class="social"> <img src="whatsapp.png" class="social"> <img src="google.png" class="social"></div>
    </div>
    <div class="clearboth"></div>
  </div>
    <div class="footer">
          <p>&copy 2018 <a href="home.php">CITHUB</a> Powered by <a href="#">FOLLYWEB</a></p>
          <a href="#top" id="#top"><img src="arrow1.png"></a>
    </div>
  </body>
</html>
