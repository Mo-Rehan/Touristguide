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
  <title>ABBEY FALLS</title>
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
  <h1 class="heading">ABBEY FALLS</h1>
  <br>
  <img class="image" src="abbeyfalls.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Abbey Falls (also spelled Abbi Falls and Abbe Falls) is in Kodagu, in the Western Ghats in Karnataka. It is located 8 km from the Madikeri, 122 km from Mysore, 144 km from Mangalore and 268 km from Bangalore.[1]
The river is part of the early reaches of the river Kaveri. Flow is much higher during the monsoon season.
The waterfall is located between private coffee plantations with stocky coffee bushes and spice estates with trees entwined with pepper vines. A hanging bridge constructed just opposite the falls.</strong></p>
    <p>Location	Kodagu, Karnataka</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Abbey+Falls+Madikeri/@12.4580576,75.7144508,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba5ac0000000001:0x63626c39067b8931!8m2!3d12.4580576!4d75.7166395"class="myButton">
    LOCATION</a>
</body>

</html>
