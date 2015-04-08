#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN  -  ( )";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'></td></tr><tr><td align='center'>Semester</td> <td align='center'></td></tr><tr><td align='center'>Section</td> <td align='center'></td></tr><tr><td align='center'>Year</td> <td align='center'></td></tr><tr><td align='center'>Prof.</td> <td align='center'></td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
