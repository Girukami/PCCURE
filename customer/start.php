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
  <h1 class="w3-margin w3-jumbo">PC CURE</h1>
  <p class="w3-xlarge">Repair your PC now!</p>
  <a href="login.php"><button class="w3-button w3-white w3-padding-large w3-large w3-margin-top" style="border-radius: 50px;">Get Started</button></a>
</header>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>PC CURE</h1>
      <h5 class="w3-padding-32">We strongly believe in providing great service, proficient recommendation, and reasonable price for our customers.</h5>

      <p class="w3-text-grey">Description.</p>
    </div>

    <div class="w3-third w3-center">
      
    </div>
  </div>
</div>


<!-- Second Grid -->
<section id="services" class="wr-twothrird">
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <link rel="stylesheet" href="main.css">
  <div class="w3-content">
    <div class="w3-third w3-center">
    </div>

    <div class="w3-twothird">
      <h1>Services we Offer</h1>
      <h5 class="w3-padding-32 justified  ">Your swag will be mine ;></h5>

      <p class="w3-text-grey justified">Welcome to Swag Nation, your one-stop destination for all things stylish and trendy! We're passionate about curating the latest and hottest fashion trends, from streetwear to chic accessories, 
        to help you express your unique style with confidence. Dive into our collection and discover a world of fashion-forward choices that reflect your personality and elevate your wardrobe. 
        Join the Swag Nation today and unleash your inner fashionista!"</p>
</div>
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
                    <p>customerservice@pccure.site</p>
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
