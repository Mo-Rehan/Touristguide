<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
$qid=intval($_GET['id']);



//updating Admin Remark
if(isset($_POST['update']))
		  {
			$adminremark=$_POST['adminremark'];
  $location=$_POST['location'];
			
$sqll=mysqli_query($con,"select * from tblcontactus where id='$qid'");
while($row=mysqli_fetch_array($sqll))
{

 
 $receip=$row['fullname'];
 
			  
	////////////////////////////////MAILER FUNTION//////////////////////////////


 require 'PHPMailerAutoload.php';
  require 'pass.php';



/////////////////////CHECKING THE CONDITION///////////////////

if($location)
{

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';
  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASSWORD;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('EMAIL','TEXT MESSAGE');

$mail->addAddress("$receip"); // Add a recipient
             // Name is optional
$mail->addReplyTo(EMAILl);
$mail->addReplyTo(EMAIL2);
     // Add attachments
	 
$mail->addAttachment("$location");


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Regarding The Contact Form';
$mail->Body    = $_POST['adminremark'];
$mail->AltBody = $_POST['adminremark'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' ;//. $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

$isread=1;
$query=mysqli_query($con,"update tblcontactus set  AdminRemark='$adminremark',IsRead='$isread' where id='$qid'");
if($query){
echo "<script>alert('Admin Remark updated successfully.');</script>";
echo "<script>window.location.href ='read-query.php'</script>";
}

}


/////////////////////////////////END///////////////////////

else{

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';
  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASSWORD;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL,'TOURIST GUIDE');


$mail->addAddress("$receip"); // Add a recipient
             // Name is optional
$mail->addReplyTo(EMAILl);
$mail->addReplyTo(EMAIL2);
     // Add attachments
	 
	
	 
//$mail->addAttachment("$location")


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Regarding The Contact Form';
$mail->Body    = $_POST['adminremark'];
$mail->AltBody = $_POST['adminremark'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' ;//. $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


$isread=1;
$query=mysqli_query($con,"update tblcontactus set  AdminRemark='$adminremark',IsRead='$isread' where id='$qid'");
if($query){
echo "<script>alert('Admin Remark updated successfully.');</script>";
echo "<script>window.location.href ='read-query.php'</script>";
}


}
	
	
}
	
	
	}		  
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Query Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Query Details</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Query Details</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Query Details</span></h5>
									<table class="table table-hover" id="sample-table-1">
		
										<tbody>
<?php
$qid=intval($_GET['id']);
$sql=mysqli_query($con,"select * from tblcontactus where id='$qid'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<th>User E-mail</th>
												<td><?php echo $row['fullname'];?></td>
											</tr>

											<tr>
												<th>Google Maps Link</th>
												<td><?php echo $row['email'];?></td>
											</tr>
											<tr>
												<th>Conatact Numner</th>
												<td><?php echo $row['contactno'];?></td>
											</tr>
											<tr>
												<th>Description</th>
												<td><?php echo $row['message'];?></td>
												</tr>

<?php if($row['AdminRemark']==""){?>	
<form name="query" method="post">
	<tr>
												<th>Admin Remark</th>
												<td><textarea name="adminremark" class="form-control" required="true"></textarea></td>
												</tr>
												
												<tr>
												<th>Path of file</th>
												<td><textarea name="location" class="form-control"></textarea></td>
												</tr>
												
												
												
												<tr>
													<td>&nbsp;</td>
													<td>	
														<button type="submit" class="btn btn-primary pull-left" name="update">
		Update <i class="fa fa-arrow-circle-right"></i>
								</button>

													</td>
												</tr>

</form>												
													<?php } else {?>										
	
	<tr>
												<th>Admin Remark</th>
												<td><?php echo $row['AdminRemark'];?></td>
												</tr>

<tr>
												<th>Last Updatation Date</th>
												<td><?php echo $row['LastupdationDate'];?></td>
												</tr>
											
											<?php 
											 }} ?>
											
											
										</tbody>
									</table>
								</div>
							</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php //include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		
	</body>
</html>
