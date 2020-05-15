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
  <title>ANSHI WATERFALLS</title>
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
  <h1 class="heading">ANSHI WATERFALLS</h1>
  <br>
  <img class="image" src="ansi.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Anshi waterfall is a beautiful fall located near Karwar and is majestic especially in monsoons. The place is surrounded by dense jungle
      and very close to SH 34 and serves as a pleasant pit stop for travellers or commuters passing by.</strong></p>
    <p>This waterfalls is very near to Karwar. </p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Anshi+Water+falls/@14.9316197,74.3588376,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbef2350c53244d:0x6cf0891192527cd8!8m2!3d14.9316197!4d74.3610263" class="myButton">
    LOCATION </a>
</body>

</html>
