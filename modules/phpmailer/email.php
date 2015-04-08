<?
include("class.phpmailer.php");
include("class.smtp.php");

function send_email($email_arg, 
		    $name_arg, 
		    $subject_arg, 
		    $body_arg, 
		    $altbody_arg) {

$mail=new PHPMailer();
$mail->IsSMTP();

$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username = "casper.system@gmail.com"; // SMTP username
$mail->Password = "c45p3r7h3fr13ndlygh057"; // SMTP password
$webmaster_email = "casper.system@gmail.com"; //Reply to this email ID

$email = $email_arg;
$name = $name_arg;

$mail->From = $webmaster_email;
$mail->FromName = "CASPER System";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"DO NOT REPLY TO THIS EMAIL");
$mail->WordWrap = 50; // set word wrap

//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
//$mail->IsHTML(true); // send as HTML

$mail->Subject = $subject_arg;
$mail->Body = $body_arg; // HTML
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 

// $mail->AltBody = $altbody_arg;

if(!$mail->Send())
  {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }
 else
   {
     //     echo "Message has been sent";
   }
}

?>

