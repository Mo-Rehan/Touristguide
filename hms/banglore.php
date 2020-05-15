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

    .photo1{
      width: 395px;
      height:350px;
    }

    .photo2 {
      width: 395px;
      height:325px;
    }

    .photo3 {
      width: 400px;
      height:350px;


    }

    .img1 {
      position: relative;
      left: 50px;
      border: solid;
      width: 400px;
      background-color: #D4D7DD
    }
    .img2{
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
      text-allign:center;
    }


  </style>
</head>


<body>
<?php include('header_new.php');?>
  <div class="h1">
    <h1>SELECT TRAVEL DESTINITION PLACE</h1>
  </div>
  <img class="background" src="b1.jpg">
  <br><br>
  <table>
    <tr>
      <td>
        <div class="img1">
		
          <a href="lalbaghbotanicalgarden.php"><img class="photo1" src="lalbaghbotanicalgarden.jpg"></a>
          <h2>LALBAGH BOTANICAL GARDEN</h2>
        </div>
        </td>
        <td><div class="img2">
          <a href="visvesvarayamuseum.php"><img class="photo2" src="visvesvarayamuseum.jpg"></a>
          <h2>VISVESVARAYA INDUSTRIAL AND TECHNOLOGICAL MUSEUM</h2>
        </div>
      </td>

    </tr>
  </table>
  <br><br>
</body>

</html>
