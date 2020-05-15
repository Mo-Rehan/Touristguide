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
  <title>HAMPI</title>
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
  <h1 class="heading">HAMPI</h1>
  <br>
  <img class="image" src="hampi.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Hampi is situated on the banks of the Tungabhadra River in the eastern part of central Karnataka near the state border with Andhra Pradesh. It is 376 kilometres (234 mi) from Bangalore, 385 kilometres (239 mi) from Hyderabad and 266
        kilometres (165 mi) from Belgaum. The closest railway station is in Hosapete (Hospet), 13 kilometres (8.1 mi) away and the closest airport is 32 kilometres (20 mi) at Jindal in Toranagallu which has connectivity to Bangalore and Hyderabad.
        Also overnight buses and trains connect Hampi with Goa, Secunderabad and Bangalore.[10] It is 140 kilometres (87 mi) southeast of the Badami and Aihole archaeological sites.</p>
    <p>LOCATION: 	Ballari district, Karnataka, India</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Hampi+Archeological+Ruins/@15.3356606,76.4605664,16.75z/data=!4m13!1m7!3m6!1s0x3bb77fd95d4be823:0x6e52e05076df36b8!2sHampi,+Karnataka+583239!3b1!8m2!3d15.3350132!4d76.460024!3m4!1s0x3bb77fd958fa57ed:0x6cf1440d1bf92de2!8m2!3d15.3349762!4d76.4619228"
    class="myButton">
    LOCATION</a>
</body>

</html>
