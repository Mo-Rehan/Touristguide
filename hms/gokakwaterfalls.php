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
  <title>GOKAK WATERFALLS</title>
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
  <h1 class="heading">GOKAK WATERFALLS</h1>
  <br>
  <img class="image" src="gokakwaterfalls.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>The Gokak Falls is a waterfall located on the Ghataprabha River in Belagavi district of Karnataka, India. The waterfall is six kilometers away from Gokak town.</strong></p>
    <p>Total height 52 metres (171 feet)</p>
    <p> Longest drop 52 metres (171 feet)</p>
    <p>Average width 177 metres (581 feet)</p>
    <p>Watercourse Ghataprabha River.</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Gokak+Water+Falls/@16.1924049,74.7681074,15z/data=!3m1!4b1!4m5!3m4!1s0x3bc0ba9f1259fdb9:0x98e520c744fea600!8m2!3d16.192405!4d74.7768622 " class="myButton">
    LOCATION</a>
</body>

</html>
