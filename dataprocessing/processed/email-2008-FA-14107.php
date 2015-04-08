#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "grouptheory@gmail.com";
// $email = "alicia.bazata@jjay.cuny.edu";
$name = "BAZATA, ALICIA";
$subject = "Tutoring to prepare for 141 - PRE-CALCULUS this semester";
$body = "<br>Dear BAZATA, ALICIA (alicia.bazata@jjay.cuny.edu),<br>Based on the Entrance Assessment Test for 141 - PRE-CALCULUS we <i>strongly</i> recommend that you schedule tutoring in the following topics <i>immediately</i>:<br><ul><li> 141-Topic-5</ul>The Math Tutoring Center can be reached at by calling 212-237-XXXX.If you have any questions or concerns, please contact your instructor Prof. GARRETT.";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
