#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 271 - INTRO_COMPUTANDPROG (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>271</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6653</td><td>ABRIL, CHARLES</td><td>271-topic-02</td></tr><tr><td>0423</td><td>DOUMAS, DEMETRIOS</td><td>Passed everything.</td></tr><tr><td>9672</td><td>LISTON, SEAN</td><td>271-topic-02</td></tr><tr><td>2234</td><td>LOUIS, STANLEY</td><td>Absent on the assessment test.</td></tr><tr><td>1873</td><td>PIGUAVE, ERIKAT</td><td>271-topic-04</td></tr><tr><td>2965</td><td>RIVAS, ENRIQUE</td><td>271-topic-02</td></tr><tr><td>4218</td><td>ZENKE, VINCENT</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 271-topic-01 </td><td>Everyone passed.</td></tr><tr><td> 271-topic-02 </td><td>(ABRIL, CHARLES (6653))<BR>(LISTON, SEAN (9672))<BR>(RIVAS, ENRIQUE (2965))</td></tr><tr><td> 271-topic-03 </td><td>Everyone passed.</td></tr><tr><td> 271-topic-04 </td><td>(PIGUAVE, ERIKAT (1873))</td></tr><tr><td> 271-topic-05 </td><td>Everyone passed.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
