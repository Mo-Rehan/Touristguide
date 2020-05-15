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
  <title>GOMMATESHWARA STATUE</title>
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
  <h1 class="heading">GOMMATESHWARA STATUE</h1>
  <br>
  <img class="image" src="gommateshwarastatue.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Gommateshwara Statue is a 57-foot (17 m) high monolithic statue located on Vindyagiri at Shravanbelagola in the Indian state of Karnataka. Vindyagiri Hill is one of the two hills in Shravanabelagola; the other is Chandragiri,
       which is also a seat of several ancient Jain centers, much older than Gommateshwara statue.</strong></p>
    <p>Location	Shravanbelagola, Hassan district, Karnataka, India</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Bhagawan+Bahubali+Statue/@12.8539697,76.4824675,17z/data=!3m1!4b1!4m5!3m4!1s0x3baff512307d73e7:0x10717ab22d6e0493!8m2!3d12.8539697!4d76.4846562"
    class="myButton">
    LOCATION</a>
</body>

</html>
