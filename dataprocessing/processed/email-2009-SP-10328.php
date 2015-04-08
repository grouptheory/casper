#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>28</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>VAN_WAGENEN_LINDSEY</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9361</td><td>HERNANDEZ, AMANDA</td><td>103-topic-3<BR>103-topic-4</td></tr><tr><td>5731</td><td>HERNANDEZ, MANUEL</td><td>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5</td></tr><tr><td>2052</td><td>JONES, TIASHA</td><td>103-topic-2<BR>103-topic-3<BR>103-topic-4</td></tr><tr><td>7352</td><td>MORALES, CHRISTIAN</td><td>Absent on the assessment test.</td></tr><tr><td>6557</td><td>SMITH, SHANTELL</td><td>103-topic-3</td></tr><tr><td>5156</td><td>VIRAY, SHEILA</td><td>103-topic-1<BR>103-topic-3<BR>103-topic-4</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-1 </td><td>(VIRAY, SHEILA (5156))</td></tr><tr><td> 103-topic-2 </td><td>(HERNANDEZ, MANUEL (5731))<BR>(JONES, TIASHA (2052))</td></tr><tr><td> 103-topic-3 </td><td>(HERNANDEZ, AMANDA (9361))<BR>(HERNANDEZ, MANUEL (5731))<BR>(JONES, TIASHA (2052))<BR>(SMITH, SHANTELL (6557))<BR>(VIRAY, SHEILA (5156))</td></tr><tr><td> 103-topic-4 </td><td>(HERNANDEZ, AMANDA (9361))<BR>(HERNANDEZ, MANUEL (5731))<BR>(JONES, TIASHA (2052))<BR>(VIRAY, SHEILA (5156))</td></tr><tr><td> 103-topic-5 </td><td>(HERNANDEZ, MANUEL (5731))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
