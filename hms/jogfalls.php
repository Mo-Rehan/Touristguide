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
  <title>JOG FALLS</title>
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
  <h1 class="heading">JOG FALLS</h1>
  <br>
  <img class="image" src="jogfalls.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Jog Falls located near Jog Village. Falling point of water is located in Siddapura, Uttara Kannada and the view point in Sagara Karnataka. Jog Falls is also known as Gerusoppe falls, Joga jalapatha and Jogada gundi in the regional
        Kannada language.
        It is the second highest plunge waterfalls in India. It is a segmented waterfall which depends on rain and season becomes a plunge waterfall.
        The falls are major attractions for tourists and is ranked 13th in the world by the waterfall database.</strong></p>
    <p>Longest drop 254 meters (829 feet)</p>
    <p>Average width 472 meters (1550 feet)</p>
    <p>Watercourse Sharavati River</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Jog+Falls+View+Point+%26+Parking/@14.2278564,74.7996006,15.13z/data=!4m5!3m4!1s0x3bbc0dbcfaccf7ab:0xe1c8583cdc6c7385!8m2!3d14.2260994!4d74.8074545" class="myButton">
    LOCATION</a>
</body>

</html>
