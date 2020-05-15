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
  <title>LALBAGH BOTANICAL GARDEN</title>
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
  <h1 class="heading">LALBAGH BOTANICAL GARDEN</h1>
  <br>
  <img class="image" src="lalbaghbotanicalgarden.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Lalbagh Botanical Garden is located in Southern Bengaluru and is one of the prime most tourist attractions in India.
      It was commissioned by Hyder Ali, the ruler of Mysore in the year 1760 and finally implemented by his son Tipu Sultan.  The glass house was modeled after gardens in Sira, which was commissioned by Dilawar Khan.
      Sira is about 120kms from the city and is in Tumkur district, Karnataka.</strong></p>

  </div>

  <br>

  <a href="https://www.google.com/maps/place/Lalbagh+Botanical+Garden/@12.9507432,77.5825886,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae15c191f2d31d:0x8e110b99df2fbe22!8m2!3d12.9507432!4d77.5847773" class="myButton">
    LOCATION </a>
</body>

</html>
