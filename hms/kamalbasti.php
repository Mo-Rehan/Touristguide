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
  <title>KAMAL BASTI</title>
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
  <h1 class="heading">KAMAL BASTI</h1>
  <br>
  <img class="image" src="kamalbasti.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong> Kamal Basti is a 10th century Jain Temple built under the reign of Ralta Dynasty.
      The temple was built earlier in 1204 AD by Bichirja, a minister of Kartavirya IV.</strong></p>
    <p>It is located just 2kms away from the Belgaum Railway Station. The temple is located in the fort and is hardly at a 5-minute walk from the entrance.</p>

  </div>

  <br>

  <a href="https://www.google.com/maps/place/Kamal+Basti/@15.8593795,74.5221677,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbf66b8b6303af7:0x874f56d0e6ae787d!8m2!3d15.8593795!4d74.5243564" class="myButton">
    LOCATION</a>
</body>

</html>
