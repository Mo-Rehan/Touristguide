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
  <title>MURDESHWAR TEMPLE</title>
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
  <h1 class="heading">MURDESHWAR TEMPLE</h1>
  <br>
  <img class="image" src="murdeshwara.jpg" height="50%" width="50%">

  <br>

  <div class="para">
    <p><strong>Murdeshwar is a town in Bhatkala Taluk of Uttara Kannada district in the state of Karnataka, India.
       The town is located 13 kms from the taluk headquarters of Bhatkala. Murdeshwar is famous for the world's second tallest Shiva statue,
        the town lies on the coast of the Arabian Sea and is also famous for the Murdeshwar Temple.
         Murdeshwar has a railway station on the Mangaluru-Mumbai Konkan railway route.</strong></p>
    <p>Location : Murdeshwar in	Uttara Kannada District in Karnataka</p>
  </div>

  <br>

  <a href="https://www.google.com/maps/place/Murdeshwar+Temple/@14.093819,74.482642,17z/data=!3m1!4b1!4m5!3m4!1s0x3bbe83aa243855eb:0xc6ed0cbef654fdcb!8m2!3d14.093819!4d74.4848307" class="myButton">
    LOCATION </a>
</body>

</html>
