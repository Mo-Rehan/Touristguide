<?php


session_start();

include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>BELGAUM FORT</title>
  <style>
    body {
      text-align: center;
        background-color: #D4D7DD;
    }

    .heading {
      font-family: 'Noto Serif', serif;
    }

    .myButton {
      box-shadow: 0px 0px 0px 2px #9fb4f2;
      background: linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
      background-color: #7892c2;
      border-radius: 10px;
      border: 1px solid #4e6096;
      display: inline-block;
      cursor: pointer;
      9 color: #ffffff;
      font-family: Georgia;
      font-size: 19px;
      padding: 12px 37px;
      text-decoration: none;
      text-shadow: 0px 1px 22px #283966;
    }

    .myButton:hover {
      background: linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
      background-color: #476e9e;
    }

    .myButton:active {
      position: relative;
      top: 1px;
    }

    .para {
      font-size: 20px;
      line-height: 2;
    }

    .image {
      border: solid;
    }
  </style>
</head>

<body>
<?php include('header_new.php');?>
  <h1 class="heading">BELGAUM FORT</h1>
  <br>
  <img class="image" src="belgaumfort.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Belagavi Fort or Belgaum Fort is in the city of Belagavi, in the Belagavi district, in Karnataka state, India.
       It was begun by Jaya Raya, also called Bichi Raja, an ally of the Ratta Dynasty, in the year 1204 AD.
       It has undergone several renovations over the centuries under dynastic rulers of the region.</strong></p>
    <p>Built	13th century.Built by	Original by Ratta Dynasty and fortified by Yakub Ali Khan of the Bijapur Sultanate</p>

  </div>

  <br>

  <a href="https://www.google.com/maps/place/Belgaum+Fort/@15.8462113,74.4881486,14z/data=!4m8!1m2!2m1!1sbelgaum+fort!3m4!1s0x3bbf66c735eb779f:0x21627145ed9b9a0!8m2!3d15.8593795!4d74.5243564 " class="myButton">
    LOCATION</a>
</body>

</html>
