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
  <title>STATUE OF UNITY</title>
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
  <h1 class="heading">STATUE OF UNITY</h1>
  <br>
  <img class="image" src="statueofunity.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>The Statue of Unity is a colossal statue of Indian statesman and independence activist Sardar Vallabhbhai Patel (1875–1950), who was the first Deputy Prime Minister and Home minister of independent India
      and the chief adherent of Mahatma Gandhi during the non-violent Indian Independence movement. Patel was highly respected for his leadership in uniting the 552 princely states of India to form the single Union of India.
       It is located in the state of Gujarat, India.</strong></p>
    <p>Location	narmada valley Kevadiya colony, Narmada district, Gujarat, India</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Statue+of+Unity+(Sardar+Vallabhai+Patel's+Statue)/@21.838006,73.7168448,17z/data=!3m1!4b1!4m5!3m4!1s0x39601db4575a4e1d:0x44247dcf4560f5f0!8m2!3d21.838006!4d73.7190335"
    class="myButton">
    LOCATION</a>
</body>

</html>
