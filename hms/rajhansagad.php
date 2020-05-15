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
  <title>RAJHANSA GAD</title>
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
  <h1 class="heading">RAJHANSA GAD</h1>

  <br>
  <img class="image" src="rajhansagad.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Yellur is a village and Gram panchayat in the Belgaum district, state of Karnataka, India. It is situated at the foot of a small hillock locally called Yellurgad (Rajhans Gad), 6 km (3.7 mi) to the south of the city of Belgaum. It is a village with multiple temples dedicated to Brahmalling, Kalmeshwar, Lakshmi, Dattatreya, Parameshwara, Hanuman and Changaleshwari. The jatra in honour of the goddess is held during Chaitra, when about 20,000 people participate.</strong></p>

  </div>

  <br>

  <a href="https://www.google.com/maps/place/Rajhansagad,+Karnataka+590005/@15.7436213,74.5217587,16z/data=!4m5!3m4!1s0x3bbf68e0d4492335:0x51463ee21f224d4e!8m2!3d15.7431732!4d74.5250889" class="myButton">
    LOCATION </a>
</body>

</html>
