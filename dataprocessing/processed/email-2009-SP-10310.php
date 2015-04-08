#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>10</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>NARTEY_L</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>2858</td><td>DEPP, STACY</td><td>103-topic-2</td></tr><tr><td>3259</td><td>GREEN, MARQUIS</td><td>103-topic-2</td></tr><tr><td>7251</td><td>MAYSONET, JOSE</td><td>Absent on the assessment test.</td></tr><tr><td>6516</td><td>SMITH, SHEENA</td><td>103-topic-4</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-1 </td><td>Everyone passed.</td></tr><tr><td> 103-topic-2 </td><td>(DEPP, STACY (2858))<BR>(GREEN, MARQUIS (3259))</td></tr><tr><td> 103-topic-3 </td><td>Everyone passed.</td></tr><tr><td> 103-topic-4 </td><td>(SMITH, SHEENA (6516))</td></tr><tr><td> 103-topic-5 </td><td>Everyone passed.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
