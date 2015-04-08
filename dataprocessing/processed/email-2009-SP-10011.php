#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 100 - INT_BASIC_MATH_SK (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>100</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>11</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KOLA_BHAVANI</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1802</td><td>DINGLE, DAVID</td><td>Absent on the assessment test.</td></tr><tr><td>1533</td><td>GALLOWAY, SHEQUANA</td><td>100-topic-1</td></tr><tr><td>5904</td><td>HENRIQUEZ, PERLA</td><td>100-topic-1</td></tr><tr><td>7138</td><td>KELLY, JONATHAN</td><td>Absent on the assessment test.</td></tr><tr><td>6237</td><td>LOMBARDI, DAVID</td><td>100-topic-1<BR>100-topic-3</td></tr><tr><td>2473</td><td>MARTINEZ, NAYASHA</td><td>Absent on the assessment test.</td></tr><tr><td>9578</td><td>PENA, ANGELA</td><td>100-topic-1<BR>100-topic-5</td></tr><tr><td>7351</td><td>RICHARDS, CASSANDRA</td><td>Absent on the assessment test.</td></tr><tr><td>8890</td><td>ROBINSON, TIMMARA</td><td>100-topic-1<BR>100-topic-5</td></tr><tr><td>9434</td><td>ROBLES, FRANKCELY</td><td>100-topic-4</td></tr><tr><td>8932</td><td>VILLA, JESSENIA</td><td>100-topic-4</td></tr><tr><td>6515</td><td>YAURI, JOSEPH</td><td>100-topic-1<BR>100-topic-3</td></tr><tr><td>3585</td><td>ZIDAN, RAMI</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 100-topic-1 </td><td>(GALLOWAY, SHEQUANA (1533))<BR>(HENRIQUEZ, PERLA (5904))<BR>(LOMBARDI, DAVID (6237))<BR>(PENA, ANGELA (9578))<BR>(ROBINSON, TIMMARA (8890))<BR>(YAURI, JOSEPH (6515))</td></tr><tr><td> 100-topic-2 </td><td>Everyone passed.</td></tr><tr><td> 100-topic-3 </td><td>(LOMBARDI, DAVID (6237))<BR>(YAURI, JOSEPH (6515))</td></tr><tr><td> 100-topic-4 </td><td>(ROBLES, FRANKCELY (9434))<BR>(VILLA, JESSENIA (8932))</td></tr><tr><td> 100-topic-5 </td><td>(PENA, ANGELA (9578))<BR>(ROBINSON, TIMMARA (8890))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
