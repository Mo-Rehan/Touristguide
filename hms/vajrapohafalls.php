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
  <title>VAJRA POHA WATERFALLS</title>
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
  <h1 class="heading">VAJRA POHA WATERFALLS</h1>
  <br>
  <img class="image" src="vajrapohafalls.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong> Vajrapoha Falls (also Vajrapoya waterfalls), a waterfall in the Belgaum district of Karnataka in India, is
       situated about in the mountainous forest 8.5 kilometres (5.3 mi) in south west direction from the village of Jamboti.</strong></p>
    <p>Height: 150ft water falls</p>
    <p>Best season after the monsoon season (June–October).</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Vajra+Poha+Water+Falls./@15.6221814,74.3362925,12z/data=!4m8!1m2!2m1!1sVAJRAPOHA+WATERFALLS!3m4!1s0x0:0xe08a1e17417c78d8!8m2!3d15.6221896!4d74.3362856" class="myButton">
    LOCATION</a>
</body>

</html>
