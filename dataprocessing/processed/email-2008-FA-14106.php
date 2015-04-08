#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "grouptheory@gmail.com";
// $email = "peter.chong@jjay.cuny.edu";
$name = "CHONG, PETER";
$subject = "Tutoring to prepare for 141 - PRE-CALCULUS this semester";
$body = "<br>Dear CHONG, PETER (peter.chong@jjay.cuny.edu),<br>Based on the Entrance Assessment Test for 141 - PRE-CALCULUS we <i>strongly</i> recommend that you schedule tutoring in the following topics <i>immediately</i>:<br><ul><li> 141-Topic-1<BR><li> 141-Topic-2<BR><li> 141-Topic-3<BR><li> 141-Topic-4<BR><li> 141-Topic-5</ul>The Math Tutoring Center can be reached at by calling 212-237-XXXX.If you have any questions or concerns, please contact your instructor Prof. GARRETT.";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
