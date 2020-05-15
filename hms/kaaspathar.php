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
  <title>KAAS PATHAR</title>

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
  <h1 class="heading">KAAS PATHAR</h1>
  <br>
  <img class="image" src="kaaspathar.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>The Kaas Plateau, also known as the Kaas Pathar, is a plateau situated 25 kilometres west from Satara city in Maharashtra, </strong></p>
    <p>Kaas plateau is a plateau located near Satara. It is situated high hill plateaus and grasslands turns into a 'valley of flowers' during monsoon season, particularly from August to early October. Kaas Plateau has more than 150 or more types of flowers, shrubs and grasses. The orchids bloom here for a period of 3–4 weeks during this season.
       Kaas plateau is a World Natural Heritage site, part of the Sahyadri Sub-cluster.</p>

  </div>

  <br>

  <a href="https://www.google.com/maps/place/Kaas+Plateau+of+Flowers/@17.7190441,73.814008,15.5z/data=!4m5!3m4!1s0x3bc2156bb1b31937:0xa05920673b65bbde!8m2!3d17.7208314!4d73.8237159" class="myButton">
    LOCATION </a>
</body>

</html>
