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
  <title>SURAL WATERFALLS</title>
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
      font-size: 30px;

      line-height: 2;
    }

    .image{
      border: solid ;
    }
  </style>
</head>

<body>
<?php include('header_new.php');?>
  <h1 class="heading">SURAL WATERFALLS</h1>
  <br>
  <img class="image" src="sural.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Sural Falls located about 50 kms from Belagavi. The falls snuggled amongst the beautiful Western Ghats.
      Sural attracts tourists all the year round for trekking and just sight seeing as well.The trek begins at Kalsa runs through the rocky bed
      of Kalsa stream and crosses the majestic Kalsa waterfall before reaching the Sural Falls. The trek culminates on reaching the Sural
      Valley after crossing the picturesque waterfall.Best Season: Monsoons. Trekking can be done all the year round.</strong></p>
    <p>Location :Surla Waterfalls, surla village, SH31, near Kalsa waterfall, Karnataka 591345 </p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Surla+waterfalls/@15.6590098,74.1842516,13.75z/data=!4m8!1m2!2m1!1ssural!3m4!1s0x0:0xaf2ef88fa2219d97!8m2!3d15.6750335!4d74.1859531" class="myButton">
    LOCATION </a>
</body>

</html>
