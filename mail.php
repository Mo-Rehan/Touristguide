<?php 
if (!isset($_POST["submit"])) { ?>
 
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
   To: <input type="text" name="email"><br>
   From: <input type="text" name="from_email"><br>
   Subject: <input type="text" name="subject"><br>
   Message: <textarea rows="10" cols="20" name="message"></textarea><br>
   <input type="submit" name="submit" value="Send Email">
  </form>
<?php



} else {
 
  require 'PHPMailerAutoload.php';
  require 'pass.php';

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

$mail->setFrom('TEXT MESSAGE');



$mail->addAddress($_POST['email']); 



    // Add a recipient
              // Name is optional
$mail->addReplyTo(EMAILl);
     // Add attachments
	 
//$mail->addAttachment('pic/image.jpg','new.jpg');    // Optional name

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['subject'];
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}






?>