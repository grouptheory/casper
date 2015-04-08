#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "grouptheory@gmail.com";
// $email = "natalie.bedoya@jjay.cuny.edu";
$name = "BEDOYA, NATALIE";
$subject = "Tutoring to prepare for 272 - OBJECT_ORIENTED_PROG this semester";
$body = "<br>Dear BEDOYA, NATALIE (natalie.bedoya@jjay.cuny.edu),<br>Based on the Entrance Assessment Test for 272 - OBJECT_ORIENTED_PROG we <i>strongly</i> recommend that you schedule tutoring in the following topics <i>immediately</i>:<br><ul><li> 272-Topic-1<BR><li> 272-Topic-2<BR><li> 272-Topic-3<BR><li> 272-Topic-4<BR><li> 272-Topic-5</ul>The Math Tutoring Center can be reached at by calling 212-237-XXXX.If you have any questions or concerns, please contact your instructor Prof. BAKIRAS.";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
