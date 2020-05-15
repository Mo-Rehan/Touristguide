<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }

  .header-right {
    float: none;
  }
}









.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color:#2980b9;;
  color: black;
}

.flip-card-back {
  background-color:  #bbb;
  color: white;
  transform: rotateY(180deg);
}

.middl-left{

  float: left;
  margin-right: 50px;
}
.middle-left{
  width: 60%;
  margin: 100px auto;
  text-align: left;
  line-height: 2;
}
.background {
      position:absolute;
      z-index:-1;
      width:100%;
      height:auto;
      margin:0;
		background-size:cover;
		background-repeat: no-repeat;
        }

</style>
</head>
<body>
	<img class="background" src="3.jpg">
<div class="header">
  <a href="#default" class="logo">Tourist Guide</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
        <a href="hms/user-login.php">Login</a>
	<a href="hms/admin/index.php">Admin</a>
	


  </div>
</div>

<div style="padding-left:20px">

 <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<center>
<h2>THE ULTIMATE TOURIST GUIDE </h2>
<p>FOR TRAVELLERS</p>
</center>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="1.JPEG" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="3.JPEG" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="2.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>










</div>

<br>
<br>
<center>

<img src="line2.png"  style="width:100%;height:100px;">


<div class="middle-left" >
  <img class="middl-left" src="india.jpg" width="400px" height="350px">
  <h3>In India tourism industry is developing at a fast rate, with tourist attractions like the Statue of Unity and Taj Mahal, India has become a global tourism checkpoint.
With the involvement of software engineering we have enhanced  this experience.We have made a tourism guide community website where tourist can search for a tourism spot and also add places for others to visit.
</h3>
</div>

<br>
<center>
<h1>
<font color="black">
DESIGNED AND DEVELOPED BY
</font>
</h1>
</center>

<table>
  <tr>
    <th><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>PREMRAJ KANGRALKAR </h1>
      <p>III SEM CSE</p>
    </div>
    <div class="flip-card-back">
        <img src="raj.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
  </div>
</div></th>
    <th><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>ANISH JADHAV</h1>
      <p>III SEM CSE</p>
    </div>
    <div class="flip-card-back">
      <img src="anish.jpeg" alt="Avatar" style="width:300px;height:300px;">
    </div>
  </div>
</div></th>
    <th><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>MOHAMMED REHAN DESHNOOR</h1>
      <p>III SEM CSE</p>

    </div>
    <div class="flip-card-back">
      <img src="rehan.jpeg" alt="Avatar" style="width:300px;height:300px;">

    </div>
  </div>
</div></th>
	<th><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>PRATEEK PRABHU</h1>
      <p>III SEM CSE</p>
    </div>
    <div class="flip-card-back">
      <img src="prateek.jpeg" alt="Avatar" style="width:300px;height:300px;">
    </div>
  </div>
</div></th>
  </tr>
  <tr>
  </table>



<h1></h1>
<h3></h3>

<br>
<br>

<br>
<center>
<h1>
GUIDED BY
</h1>
</center>
<br>
<br>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>Dr. S. KOTRAPPA </h1>

    </div>
    <div class="flip-card-back">
      <img src="kotrappa.png" alt="Avatar" style="width:300px;height:400px;">

      <p></p>
    </div>
  </div>
</div>
<h1></h1>
<h3></h3>


<style>
.footer {
    left: 0;
   bottom: 0;
   width: 100%;
   height: 48px;
   background-color: grey;
   color: white;
   }
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="footer">
   <h3>THE ULTIMATE TOURIST GUIDE  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="link.png"  style="width:20px;height:20px;">
	  <img src="fb.png"  style="width:20px;height:20px;">

</div>







</body>
</html>
