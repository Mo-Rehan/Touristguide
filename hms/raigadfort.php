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
  <title>RAIGAD FORT</title>
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
  <h1 class="heading">RAIGAD FORT </h1>
  <br>
  <img class="image" src="raigadfort.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Raigad  is a hill fort situated in Mahad, Raigad district of Maharashtra, India. </strong></p>
    <p>The fort rises 820 metres (2,700 ft) above the sea level and is located in the Sahyadri mountain range. There are approximately 1737 steps leading to the fort.
       The Raigad Ropeway, an aerial tramway exists to reach the top of the fort in 10 minutes.</p>

  </div>

  <br>

  <a href="https://www.google.com/maps/place/Raigad+Fort/@18.2346858,73.4442557,17z/data=!3m1!4b1!4m5!3m4!1s0x3be8283eb38b1ce5:0xfc31826ad34a5b70!8m2!3d18.2346858!4d73.4464444" class="myButton">
    LOCATION </a>
</body>

</html>
