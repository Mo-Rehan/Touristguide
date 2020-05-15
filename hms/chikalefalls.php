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
  <title>CHIKALE WATERFALLS</title>
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
  <h1 class="heading">CHIKALE WATERFALLS</h1>
  <br>
  <img class="image" src="chikalefalls.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>The roaring sound of the waterfalls can be heard from a distance. An easy trek of 2. 5 km amidst the misty fog and beautiful landscape leads to the waterfalls. Chikhale falls can also be reached from Parwad with a difficult trekking trail.
      Chikhale Falls is also one of the most famous trekking routes of Karnataka. </strong></p>
    <p>Peeranwadi – Jamboti – Take left to Chikhale Village (Sign board)
      From there another 3 kms is Chikhale village.
      After about 500 mtrs park your vehicle and then trek for about 2.5 kms to reach the spot from where the Chikale falls is visible.</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Chikhale+Waterfalls/@15.6679348,74.2343532,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbf75e16e3e71f9:0x5f6b5b3c29a2d975!8m2!3d15.6679348!4d74.2365419" class="myButton">
    LOCATION</a>
</body>

</html>
