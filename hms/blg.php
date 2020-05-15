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

    tables {
      text-align: center;
    }

    .photo1 {
      width: 395px;
      height: 350px;
    }

    .photo2 {
      width: 395px;
      height: 350px;
    }

    .photo3 {
      width: 395px;
      height: 350px;

    }

    .img1 {
      position: relative;
      left: 50px;
      border: solid;
      width: 400px;
      background-color: #D4D7DD
    }

    .img2 {
      position: relative;
      left: 50px;
      border: solid;
      width: 400px;
      background-color: #D4D7DD
    }

    .img3 {
      position: relative;
      left: 50px;
      border: solid;
      width: 400px;
      background-color: #D4D7DD
    }

    h1 {
      text-align: center;
    }

    .h1 {
      font-size: 20px;
    }

    body {
      background-color: #D4D7DD;
    }
    h2{
      position: relative;
      left: 80px;
    }
  
  </style>
</head>


<body>
<?php include('header_new.php');?>
  <div class="h1">
    <h1>SELECT TRAVEL DESTINITION PLACE</h1>
  </div>
  <img class="background" src="b1.jpg">
  <br>

  <table>
    <tr>
      <td>
        <div class="img1">
          <a href="anshiwaterfalls.php"><img class="photo1" src="ansi.jpg"></a>
          <h2>ANSHI WATERFALLS</h2>
        </div>
      </td>
      <td>
        <div class="img2">
          <a href="belgaumfort.php"><img class="photo2" src="belgaumfort.jpg"></a>
          <h2>BELGAUM FORT</h2>
        </div>
      </td>
      <td>
        <div class="img3">
          <a href="chikalefalls.php"><img class="photo3" src="chikalefalls.jpg"></a>
          <h2>CHIKALE FALLS</h2>
        </div>
      </td>

    </tr>
  </table>
  <img class="background" src="b1.jpg">
  <table>
    <tr>
      <td>
        <div class="img1">
          <a href="gokakwaterfalls.php"><img class="photo1" src="gokakwaterfalls.jpg"></a>
          <h2>GOKAK WATERFALLS</h2>
        </div>
      </td>
      <td>
        <div class="img2">
          <a href="jambotifall.php"><img class="photo2" src="jam.JPEG"></a>
          <h2>JAMBOTI FALLS</h2>
        </div>
      </td>
      <td>
        <div class="img3">
          <a href="kamalbasti.php"><img class="photo3" src="kamalbasti.jpg"></a>
          <h2>KAMAL BASTI</h2>
        </div>
      </td>
  </table>
  <img class="background" src="b1.jpg">
  <table>

    <tr>
      <td>
        <div class="img1">
          <a href="militarymahadevatemple.php"><img class="photo1" src="militarymahadavtemple.jpg"></a>
          <h2>MILITARY MAHADEVA </h2>
        </div>
      </td>
      <td>
        <div class="img2">
          <a href="rajhansagad.php"><img class="photo2" src="rajhansagad.jpg"></a>
          <h2>RAJHANSA GAD</h2>
        </div>
      </td>
      <td>
        <div class="img3">
          <a href="sural.php"><img class="photo3" src="sural.jpg"></a>
          <h2>SURAL</h2>
        </div>
      </td>
    </tr>
    </table>
<img class="background" src="b1.jpg">
    <table>
    <tr>
      <td>
        <div class="img1">
          <a href="vajrapohafalls.php"><img class="photo1" src="vajrapohafalls.jpg"></a>
          <h2>VAJARAPOHA FALLS</h2>
        </div>
      </td>
    </tr>
  </table>

  <br><br>
</body>

</html>
