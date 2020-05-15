
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
  <title>VISVESVARAYA INDUSTRIAL AND TECHNOLOGICAL MUSEUM</title>
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
      cursor: pointer;9
      color: #ffffff;
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

    .image{
      border: solid ;
    }
  </style>
</head>

<body>
<?php include('header_new.php');?>
  <h1 class="heading">VISVESVARAYA INDUSTRIAL AND TECHNOLOGICAL MUSEUM</h1>
  <br>
  <img class="image" src="visvesvarayamuseum.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>The Visvesvaraya Industrial and Technological Museum,, Bangalore, India, a constituent unit of the National Council of Science Museums, Ministry of Culture, Government of India,
       was established in memory of Bharat Ratna Sir M Visvesvaraya.</strong></p>
    <p>Location : Kasturba road, Bangalore, India</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Visvesvaraya+Industrial+%26+Technological+Museum/@12.975873,77.5961246,18.08z/data=!4m5!3m4!1s0x3bae15df82222aab:0x7fd53f96474af8a7!8m2!3d12.9752264!4d77.5963449" class="myButton">
    LOCATION </a>
</body>

</html>
