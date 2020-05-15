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
  <title>QUTUB MINAR </title>

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
  <h1 class="heading">QUTUB MINAR</h1>
  <br>
  <img class="image" src="qutubminar.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>The Qutb Minar, also spelled as Qutab Minar or Qutub Minar, is a minaret that forms part of the Qutb complex, a UNESCO World Heritage Site in the Mehrauli area of Delhi, India.</strong></p>
    <p>Height	73 metres (240 ft). Qutb Minar is a 73-metre (239.5 feet) tall tapering tower of five storeys, with a 14.3 metres (47 feet) base diameter, reducing to 2.7 metres (9 feet)
      at the top of the peak.[4] It contains a spiral staircase of 379 steps.</p>

  </div>

  <br>

  <a href="https://www.google.com/maps/place/Qutub+Minar/@28.5244754,77.1833319,17z/data=!3m1!4b1!4m5!3m4!1s0x390d1e0667819b4f:0x834995f160759db8!8m2!3d28.5244754!4d77.1855206" class="myButton">
    LOCATION </a>
</body>

</html>
