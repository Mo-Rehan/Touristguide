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
      position:absolute;
      z-index:-1;
      width:100%;
      height:auto;
      margin:0;

        }
      .tables{
        text-align: center;
      }
      .img1-lg-4{
        border: solid;
        width: 350px;
		opacity: .8;

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
			<h1>SELECT TRAVEL DESTINITION STATE</h1>
			</div>
			<img class="background" src="b2.jpg">
			<br><br><br><br>

        <div class="tables" >

          <a href="kadist.php"><img class="img1-lg-4"src="kar.jpg"></a>
        <a href="goadis.php"><img class="img1-lg-4"src="goa.jpg"></a>
        <a href="delhiplaces.php"><img class="img1-lg-4" src="delhi.jpg"></a>
        </div>
        
		<br>
		<br>
        <div class="tables">
          <a href="mhdis.php"><img class="img1-lg-4"src="maha.jpg"></a>
          <a href="updis.php"><img class="img1-lg-4"src="up.png"></a>
          <a href="gujaratdis.php"><img class="img1-lg-4" src="guj.jpg"></a>
        </div>
		<br>
		<br>
  </body>
</html>
