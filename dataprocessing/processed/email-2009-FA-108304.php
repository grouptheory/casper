#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>304</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>CARELA_N</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>5050</td><td>KING, HASSAN</td><td>Absent on the assessment test.</td></tr><tr><td>7359</td><td>MCCROY, RACHEL</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>5769</td><td>MORALES, LUIS</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-9</td></tr><tr><td>6897</td><td>WILLIAMS, DAVID</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7<BR>108-topic-8</td></tr><tr><td>7432</td><td>YUEN, KENNETH</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-1 </td><td>(MCCROY, RACHEL (7359))<BR>(MORALES, LUIS (5769))<BR>(WILLIAMS, DAVID (6897))Absent on the assessment test.</td></tr><tr><td> 108-topic-10 </td><td>(MCCROY, RACHEL (7359))<BR>(MORALES, LUIS (5769))<BR>(WILLIAMS, DAVID (6897))Absent on the assessment test.</td></tr><tr><td> 108-topic-2 </td><td>(MORALES, LUIS (5769))Absent on the assessment test.</td></tr><tr><td> 108-topic-3 </td><td>(MORALES, LUIS (5769))<BR>(WILLIAMS, DAVID (6897))Absent on the assessment test.</td></tr><tr><td> 108-topic-4 </td><td>(MCCROY, RACHEL (7359))<BR>(MORALES, LUIS (5769))<BR>(WILLIAMS, DAVID (6897))Absent on the assessment test.</td></tr><tr><td> 108-topic-5 </td><td>(MCCROY, RACHEL (7359))<BR>(MORALES, LUIS (5769))<BR>(WILLIAMS, DAVID (6897))Absent on the assessment test.</td></tr><tr><td> 108-topic-6 </td><td>(MCCROY, RACHEL (7359))Absent on the assessment test.</td></tr><tr><td> 108-topic-7 </td><td>(WILLIAMS, DAVID (6897))Absent on the assessment test.</td></tr><tr><td> 108-topic-8 </td><td>(WILLIAMS, DAVID (6897))Absent on the assessment test.</td></tr><tr><td> 108-topic-9 </td><td>(MORALES, LUIS (5769))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
