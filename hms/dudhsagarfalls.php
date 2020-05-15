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
  <title>DUDHASAGAR WATERFALLS</title>
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
  <h1 class="heading">DUDHASAGAR WATERFALLS</h1>
  <br>
  <img class="image" src="dudhsagarfalls.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Dudhsagar Falls (literally Sea of Milk) is a four-tiered waterfall located on the Mandovi River in the Indian state of Goa.
       It is 60 km from Panaji by road and is located on the Madgaon-Belagavi rail route about 46 km east of Madgaon
       and 80 km south of Belagavi. Dudhsagar Falls is amongst India's tallest waterfalls with a height of 310 m (1017 feet) and
        an average width of 30 metres (100 feet). </strong></p>
    <p>Watercourse	Mandovi River</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Dudhsagar+Falls/@15.3144375,74.3121186,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbfa618142b8b43:0xfd9448e7283b0225!8m2!3d15.3144375!4d74.3143073" class="myButton">
    LOCATION</a>
</body>

</html>
