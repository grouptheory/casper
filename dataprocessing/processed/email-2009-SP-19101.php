#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 191 - INTENSIVE_MATH (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>191</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>STERN_LISETTE</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3138</td><td>CORDERO, ELI</td><td>191-topic-2<BR>191-topic-3<BR>191-topic-4<BR>191-topic-5</td></tr><tr><td>5915</td><td>LOPEZ, ANDREINA</td><td>Absent on the assessment test.</td></tr><tr><td>1617</td><td>RABAH, CHRISTINE</td><td>191-topic-4</td></tr><tr><td>7684</td><td>ROSADO, SUSAN</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 191-topic-1 </td><td>Absent on the assessment test.</td></tr><tr><td> 191-topic-2 </td><td>(CORDERO, ELI (3138))Absent on the assessment test.</td></tr><tr><td> 191-topic-3 </td><td>(CORDERO, ELI (3138))Absent on the assessment test.</td></tr><tr><td> 191-topic-4 </td><td>(CORDERO, ELI (3138))<BR>(RABAH, CHRISTINE (1617))Absent on the assessment test.</td></tr><tr><td> 191-topic-5 </td><td>(CORDERO, ELI (3138))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
