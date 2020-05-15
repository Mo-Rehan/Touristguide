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
  <title>MILITARY MAHADEVA TEMPLE</title>
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
  <h1 class="heading">MILITARY MAHADEVA TEMPLE</h1>
  <br>
  <img class="image" src="militarymahadavtemple.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>The foundation stone of Military Mahadev Temple was laid on January 18, 1954. The temple was opened to public on
      January 24, 1955 by Lieutenant General S.M. Shrinagesh, General Officer and Commander-in-Chief Southern Command.</strong></p>
    <p>LOCATION: Congress Road (NH- 4A), Velguem, Camp, Belgaum, Karnataka</p>

  </div>

  <br>

  <a href="https://www.google.com/maps/place/Military+Mahadev+Temple/@15.846212,74.5030554,16.75z/data=!4m5!3m4!1s0x3bbf669eb3db0cc3:0xfcdcb589688a591c!8m2!3d15.846171!4d74.5047407 " class="myButton">
    LOCATION</a>
</body>

</html>
