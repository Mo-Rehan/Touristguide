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
  <title>SINHAGAD</title>
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
  <h1 class="heading">SINHAGAD</h1>
  <br>
  <img class="image" src="sinhagad.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Sinhagad is a hill fortress located at around 35 km southwest of the city of Pune, India. Some of the information available at this fort suggests that the fort could have been built 2000 years ago.
      The caves and the carvings in the Kaundinyeshwar temple stand as proofs for the same.</strong></p>

  </div>

  <br>

  <a href="https://www.google.com/maps/place/Sinhagad/@18.3565029,73.7507276,15z/data=!4m13!1m7!3m6!1s0x3bc293dc45cca0fb:0x58e4642c4c2dd223!2sSinhagad!3b1!8m2!3d18.3565029!4d73.7507276!3m4!1s0x3bc293dc45cca0fb:0x58e4642c4c2dd223!8m2!3d18.3565029!4d73.7507276" class="myButton">
    LOCATION </a>
</body>

</html>
