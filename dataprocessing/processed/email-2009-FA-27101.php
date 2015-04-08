#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 271 - INTRO_COMPUTANDPROG (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>271</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8040</td><td>CERCADO, VANESSA</td><td>271-topic-2<BR>271-topic-3<BR>271-topic-5</td></tr><tr><td>8579</td><td>FEIKER, ASHLEY</td><td>271-topic-2<BR>271-topic-5</td></tr><tr><td>2433</td><td>FLORES, JONATHAN</td><td>271-topic-4<BR>271-topic-5</td></tr><tr><td>0878</td><td>GONZALEZ, FRANK</td><td>271-topic-2<BR>271-topic-4<BR>271-topic-5</td></tr><tr><td>3433</td><td>GUTIERREZ, IVAN</td><td>271-topic-4</td></tr><tr><td>3913</td><td>HAGLEY, BRENT</td><td>271-topic-2<BR>271-topic-5</td></tr><tr><td>1776</td><td>KOBRYNSKI, DAMIAN</td><td>271-topic-5</td></tr><tr><td>8210</td><td>MCGOVERN, MELISSA</td><td>271-topic-2<BR>271-topic-3<BR>271-topic-5</td></tr><tr><td>6537</td><td>MONTALVAN, JACQUELINE</td><td>271-topic-2</td></tr><tr><td>6319</td><td>PIEDRA, EDDY</td><td>271-topic-5</td></tr><tr><td>0081</td><td>RUIZ, DANIEL</td><td>271-topic-5</td></tr><tr><td>2378</td><td>RYAN, THOMAS</td><td>Passed everything.</td></tr><tr><td>2631</td><td>ZULQURNAIN, TANZEELA</td><td>271-topic-2</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 271-topic-1 </td><td>Everyone passed.</td></tr><tr><td> 271-topic-2 </td><td>(CERCADO, VANESSA (8040))<BR>(FEIKER, ASHLEY (8579))<BR>(GONZALEZ, FRANK (0878))<BR>(HAGLEY, BRENT (3913))<BR>(MCGOVERN, MELISSA (8210))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(ZULQURNAIN, TANZEELA (2631))</td></tr><tr><td> 271-topic-3 </td><td>(CERCADO, VANESSA (8040))<BR>(MCGOVERN, MELISSA (8210))</td></tr><tr><td> 271-topic-4 </td><td>(FLORES, JONATHAN (2433))<BR>(GONZALEZ, FRANK (0878))<BR>(GUTIERREZ, IVAN (3433))</td></tr><tr><td> 271-topic-5 </td><td>(CERCADO, VANESSA (8040))<BR>(FEIKER, ASHLEY (8579))<BR>(FLORES, JONATHAN (2433))<BR>(GONZALEZ, FRANK (0878))<BR>(HAGLEY, BRENT (3913))<BR>(KOBRYNSKI, DAMIAN (1776))<BR>(MCGOVERN, MELISSA (8210))<BR>(PIEDRA, EDDY (6319))<BR>(RUIZ, DANIEL (0081))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
