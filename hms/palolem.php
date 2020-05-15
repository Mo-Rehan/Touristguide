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
  <title>PALOLEM BEACH</title>
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
  <h1 class="heading">PALOLEM BEACH</h1>
  <br>
  <img class="image" src="palolembeach.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Palolem Beach is situated in Canacona in southern Goa, India. The beach attracts many international tourists, mainly during the winter season between November and March.
       It is considered to be one of the region's most beautiful beaches.</strong></p>
    <p>Location : Palolem Beach is located at 15°00′36″N 74°01′24″E, within 2.5 kilometres of the market town of Chaudi in South Goa,
       and about 40 minutes from Margao, the district headquarters of South Goa.</p>
       <p>Palolem Beach is located at 15°00′36″N 74°01′24″E, within 2.5 kilometres of the market
          town of Chaudi in South Goa, and about 40 minutes from Margao, the district headquarters of South Goa.</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Palolem+Beach/@15.0092734,74.0149598,16z/data=!4m13!1m7!3m6!1s0x3bbe4551d05b02bb:0x1e1bc67d4b0fbbf5!2sPalolem+Beach!3b1!8m2!3d15.0099648!4d74.0232186!3m4!1s0x3bbe45510094f17f:0xbc60914310c9b124!8m2!3d15.0111852!4d74.0218395" class="myButton">
    LOCATION </a>
</body>

</html>
