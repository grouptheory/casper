#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 271 - INTRO_COMPUTANDPROG (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>271</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>04</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>2772</td><td>DOMINGUEZ, ANA</td><td>Absent on the assessment test.</td></tr><tr><td>8314</td><td>FRANCIS, TONYO</td><td>271-topic-2<BR>271-topic-5</td></tr><tr><td>8183</td><td>KHOSRAVANLOU, KATHY</td><td>Absent on the assessment test.</td></tr><tr><td>3057</td><td>LIU, WENHUI</td><td>Passed everything.</td></tr><tr><td>3030</td><td>SANTAELLA, JENNIFER</td><td>271-topic-2<BR>271-topic-3<BR>271-topic-4<BR>271-topic-5</td></tr><tr><td>4612</td><td>SAWYER-DYMSKI, JAMAAL</td><td>Absent on the assessment test.</td></tr><tr><td>5473</td><td>SOLTYS, ANDRIY</td><td>271-topic-1<BR>271-topic-4</td></tr><tr><td>4429</td><td>WHITE, SHAKARA</td><td>271-topic-2</td></tr><tr><td>6303</td><td>WONG, JEFFREY</td><td>271-topic-1<BR>271-topic-2<BR>271-topic-3<BR>271-topic-5</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 271-topic-1 </td><td>(SOLTYS, ANDRIY (5473))<BR>(WONG, JEFFREY (6303))</td></tr><tr><td> 271-topic-2 </td><td>(FRANCIS, TONYO (8314))<BR>(SANTAELLA, JENNIFER (3030))<BR>(WHITE, SHAKARA (4429))<BR>(WONG, JEFFREY (6303))</td></tr><tr><td> 271-topic-3 </td><td>(SANTAELLA, JENNIFER (3030))<BR>(WONG, JEFFREY (6303))</td></tr><tr><td> 271-topic-4 </td><td>(SANTAELLA, JENNIFER (3030))<BR>(SOLTYS, ANDRIY (5473))</td></tr><tr><td> 271-topic-5 </td><td>(FRANCIS, TONYO (8314))<BR>(SANTAELLA, JENNIFER (3030))<BR>(WONG, JEFFREY (6303))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
