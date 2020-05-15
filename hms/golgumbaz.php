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
  <title>GOL GUMBAZ</title>
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
  <h1 class="heading">GOL GUMBAZ</h1>
  <br>
  <img class="image" src="golgumbaz.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Gol Gumbaz at Bijapur is the mausoleum of king Mohammed Adil Shah, Sultan of Bijapur. Construction of the tomb,
       located in Vijayapura (formerly Bijapur), Karnataka, India, was started in 1626 and completed in 1656. </p>
    <p>Location	Vijayapur, Karnataka, India</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Gol+Gumbaz/@16.8302623,75.7339265,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc65574c0cdafa3:0xd964a78d4d2e25a6!8m2!3d16.8302623!4d75.7361152"
    class="myButton">
    LOCATION</a>
</body>

</html>
