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
  <title>NETRAVALI WATERFALLS</title>
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
  <h1 class="heading">NETRAVALI WATERFALLS</h1>
  <br>
  <img class="image" src="netravaliwaterfalls.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Jump to Mainapi Waterfall - Mainapi is the smaller of the two waterfalls at Netravali, more pristine and secluded. A trek of about 2 hours takes you to the waterfalls.</strong></p>
    <p>Located in Sanguem Taluka in Eastern Goa. Area : 211.05 km2
Major attractions : black panther, giant squirrel, slender loris, great pied hornbills
Best time to visit : October to March</p>
       <p>There’s 2-3 water fall But we visited Savari waterfall and best time to visit in early monsoon season</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Mainapi+Waterfall/@15.0827328,74.257064,13z/data=!4m12!1m6!3m5!1s0x3bbef975b9423405:0x14dc8e3dbf6730ac!2sNetravali+Waterfall!8m2!3d15.0860958!4d74.2924516!3m4!1s0x0:0xff92384d84e4b09e!8m2!3d15.0696113!4d74.2567044" class="myButton">
    LOCATION </a>
</body>

</html>
