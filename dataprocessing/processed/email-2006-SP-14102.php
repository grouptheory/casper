#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "grouptheory@gmail.com";
// $email = "";
$name = "AMON, JENNIFER";
$subject = "Tutoring to prepare for 141 - PRE-CALCULUS this semester";
$body = "<br>Dear AMON, JENNIFER (),<br>Based on the Entrance Assessment Test for 141 - PRE-CALCULUS we <i>strongly</i> recommend that you schedule tutoring in the following topics <i>immediately</i>:<br><ul><li> Basic equations: linear, nonlinear, fractional exponents, solving for variable in terms of others, modeling</ul>The Math Tutoring Center can be reached at by calling 212-237-XXXX.If you have any questions or concerns, please contact your instructor Prof. CONTE.";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
