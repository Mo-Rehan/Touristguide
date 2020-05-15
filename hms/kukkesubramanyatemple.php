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
  <title>KUKKE SUBRAMANYA TEMPLE</title>
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
  <h1 class="heading">KUKKE SUBRAMANYA TEMPLE</h1>
  <br>
  <img class="image" src="kukkesubramanyatemple.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Kukke Subramanya (Tulu and Kannada: Kukke Subrahmaṇya) is a Hindu temple located in the village of Subramanya, Karnataka. In this temple Kartikeya is worshipped as Subramanya,lord of all serpents. The epics relate that
       the divine serpent Vasuki and other serpents found refuge under Subramanya when threatened by the Garuda.</strong></p>
    <p>Location : Sullia, on banks of river Kumaradhara</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Kukke+Shri+Subrahmanya+Temple/@12.6636984,75.613774,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba86e1d5dd42e71:0xc10058eb047ed110!8m2!3d12.6637167!4d75.615856" class="myButton">
    LOCATION </a>
</body>

</html>
