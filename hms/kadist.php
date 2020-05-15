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
  <title>Tourist Guide India</title>
  <style media="screen">
    .background {
      position: absolute;
      z-index: -1;
      width: 100%;
      height: auto;
      margin: 0;

    }

    .tables {
      text-align: center;
    }

    .img1-lg-4 {
      border: solid;
      width: 400px;
      < !---height: 500px;
      -->
    }

    .img2-lg-4 {
      border: solid;
      width: 400px;

    }

    .img3-lg-4 {
      border: solid;
      width: 400px;
    }

    h1{
   text-align : center;

   }
   .h1{
   font-size:20px;
   }
   body{

   background-color: #D4D7DD;

   }
  </style>
</head>


<body>
<?php include('header_new.php');?>
  <div class= "h1">
    <h1>SELECT TRAVEL DESTINATION DISTRICT</h1>
  </div>
  <img class="background" src="b1.jpg">
  <br><br><br><br><br>
  <div class="tables">
    <a href="blg.php"><img class="img1-lg-4" src="bgm.jpg"></a>
    <a href="uttarkannada.php"><img class="img2-lg-4" src="ukannada.jpg"></a>
    <a href="banglore.php"><img class="img3-lg-4" src="blor.jpg"></a>
  </div>

  <br><br>
  <div class="tables">
    <a href="ballari.php"><img class="img1-lg-4" src="bllary.jpg"></a>
    <a href="bijapur.php"><img class="img2-lg-4" src="vijapur.jpg"></a>
    <a href="dakshinakannada.php"><img class="img3-lg-4" src="dkannada.jpg"></a>
  </div>
  <br><br>
  <img class="background" src="b1.jpg">
  <div class="tables">
    <a href="hassan.php"><img class="img1-lg-4" src="hassan.jpg"></a>
    <a href="mysore.php"><img class="img2-lg-4" src="mysore.jpg"></a>
    <a href="kodagu.php"><img class="img3-lg-4" src="kodagu.jpg"></a>
  </div>
  <br><br>
</body>

</html>
