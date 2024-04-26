<!DOCTYPE html>
<html lang="en">
<head>
<title>PC CURE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../style/main.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

  .justified{
    text-align: justify;
  }
/* Updated Styles */
.header {
    background-color: #ffffff; 
    color: #fff; /* White text color */
}
.w3-bar {
    background-color: #ffffff; /* Black color for navbar */
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.column {
  float: left;
  width: 33.33%;
  padding: 100px;
}

.row::after{
  content: "";
  display: table;
  clear: both;
}

.about-section {
  padding: 40px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.team-container {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.team-member {
  flex: 1;
  max-width: 300px;
  margin: 20px;
  text-align: center;
}

.team-member img {
  width: 100%;
  max-width: 200px;
  border-radius: 50%;
}

.title {
  color: grey;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="#services" class="w3-bar-item w3-button w3-padding-large w3-white">Services</a>
    <a href="#aboutus" class="w3-bar-item w3-button w3-padding-large w3-white">About Us</a>
    <a href="#reachus" class="w3-bar-item w3-button w3-padding-large w3-white">Reach Us</a>
  </div>

  <!-- Navbar on small screens -->
  <!-- <div id="navDemo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div> -->
</div>



<header class="w3-container header w3-center" style="padding:128px 16px; background-image: url(../MainBG.jpg); background-size: cover; background-position: center;">
  <h1 class="w3-margin w3-jumbo"><strong>PC CURE</strong></h1>
  <p class="w3-xlarge">Repair your PC now!</p>
  <a href="login.php"><button class="w3-button w3-white w3-padding-large w3-large w3-margin-top" style="border-radius: 50px;""><b style="color:#425A9E">GET STARTED</b></button></a>
</header>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>PC CURE</h1>
      <h5 class="w3-padding-32">We strongly believe in providing great service, proficient recommendation, and reasonable price for our customers.</h5>
    </div>

    <div class="w3-third w3-center">
      
    </div>
  </div>
</div>


<!-- Second Grid -->
<section id="services" class="wr-twothrird">
  <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-third w3-center">
      </div>

      <div class="w3-twothird">
        <h1>WHAT WE DO</h1>
        <h5 class="w3-padding-32 justified  "></h5>
        <div class="slideshow-container w3-center">

          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="../images/1.jpg" style="width:100%">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="../images/2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="../images/3.jpeg" style="width:100%">
            <div class="text">Caption Three</div>
          </div>

          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        <p class="w3-text-grey justified"></p>
      </div>
      <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
      </script>
    </div>
  </div>
  </div>
</section>

<section id="aboutus">


<div class="w3-container w3-black w3-center w3-padding-64">
    <div class="about-section">
      <h1>ABOUT US</h1>
      <p class="justified" style="text-align:center"> We are PCCURE, composed of 3 computer enthusiast built to help fellow gamers, workers, and rookies in cleaning, optimizing, and building a PC for All around tasks.</p>
    </div>
    <h1> </h1>
    <h1 style="text-align:center">Meet the Team</h1>

    <div class="row">
        <!-- Team member 1 -->
        <div class="column">
            <div class="card">
                <img src="../images/Jongks.jpg" alt="John Gil" style="width:100%">
                <div class="container">
                    <h2>John Gil M. Eclipse</h2>
                    <p class="title">Programmer</p>
                    <p>When life offers you potatoes, make frenchfries.</p>
                    <p>jgm.eclipse@gmail.com</p>
                </div>
            </div>
        </div>
        <!-- Team member 2 -->
        <div class="column">
            <div class="card">
                <img src="../images/Shari.jpg" alt="R-Shariff" style="width:100%">
                <div class="container">
                    <h2>R-Shariff A. Asula</h2>
                    <p class="title">CEO & Founder</p>
                    <p>"Nanakorobi yaoki"</p>
                    <p>Stumble 7 times, then stand up 8</p>
                    <p>asularsharif@gmail.com</p>
                </div>
            </div>
        </div>
        <!-- Team member 3 -->
        <div class="column">
            <div class="card">
                <img src="../images/Boss2.jpg" alt="Benkhair" style="width:100%">
                <div class="container">
                    <h2>Benkhair Najir</h2>
                    <p class="title">Computer Servicing Technician</p>
                    <p>Life isn't about waiting for the storm to pass, but about learning to dance in the thunder.</p>
                    <p>benkhairnajir2001@gmail.com</p>
                </div>
            </div>
        </div>

    </div>
</div>
</section>

<!-- Footer -->
<section id="reachus">

<footer class="w3-container w3-padding-64 w3-center w3-opacity">

  <div class="w3-xlarge w3-padding-32">
  <i class="fa fa-facebook-official w3-hover-opacity" id="facebookIcon"></i>
  <i class="fa fa-instagram w3-hover-opacity" id="instagramIcon"></i>
  <i class="fa fa-twitter w3-hover-opacity" id="twitterIcon"></i>
    <script>
      document.getElementById('facebookIcon').onclick = function() {
        window.open('https://www.facebook.com/', '_blank'); // Change the URL to your Facebook page
      };
      
      document.getElementById('instagramIcon').onclick = function() {
        window.open('https://www.instagram.com/', '_blank'); // Change the URL to your Instagram page
      };

      document.getElementById('twitterIcon').onclick = function() {
        window.open('https://twitter.com/', '_blank'); // Change the URL to your Twitter page
      };
    </script>
    <p>customerservice@pccure.site</p>
 </div>
 <p>© Copyright 2024 <a>PCCURE</a></p>
</footer>
  
</section>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
