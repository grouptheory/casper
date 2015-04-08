#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 271 - INTRO_COMPUTANDPROG (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>271</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8681</td><td>ALAM, SAQEB</td><td>271-topic-02</td></tr><tr><td>5475</td><td>ALVARADO, KEVIN</td><td>Absent on the assessment test.</td></tr><tr><td>6742</td><td>AYALA, STACY</td><td>271-topic-03</td></tr><tr><td>1788</td><td>BALLETTA, ROMINA</td><td>271-topic-02</td></tr><tr><td>8182</td><td>BOADA, EVA</td><td>Passed everything.</td></tr><tr><td>9924</td><td>BOURDIERD, RAFAEL</td><td>271-topic-02</td></tr><tr><td>7536</td><td>CHO, MIRIM</td><td>271-topic-04<BR>271-topic-05</td></tr><tr><td>7264</td><td>CORTEZ, VERONICA</td><td>Passed everything.</td></tr><tr><td>3245</td><td>EDWARDS, SEAN</td><td>271-topic-01<BR>271-topic-02</td></tr><tr><td>7176</td><td>LEUNG, JESSICA</td><td>Passed everything.</td></tr><tr><td>7267</td><td>LIANG, QINGXIANG</td><td>271-topic-03<BR>271-topic-04<BR>271-topic-05</td></tr><tr><td>8973</td><td>MALDONADO, BELKIS</td><td>Absent on the assessment test.</td></tr><tr><td>2902</td><td>MALDONADO, MIGUEL</td><td>Passed everything.</td></tr><tr><td>1007</td><td>PAGAN, FRANCES</td><td>271-topic-02</td></tr><tr><td>1568</td><td>RAHMAN, SHAH</td><td>Absent on the assessment test.</td></tr><tr><td>4391</td><td>RICHARDSON, JUSTIN</td><td>Passed everything.</td></tr><tr><td>6120</td><td>ROBERTS, KAREEM</td><td>271-topic-02<BR>271-topic-03</td></tr><tr><td>4026</td><td>RODRIGUEZ, ETHAN</td><td>Passed everything.</td></tr><tr><td>0377</td><td>ROSA, CHRISTIAN</td><td>Absent on the assessment test.</td></tr><tr><td>8715</td><td>ROWNICKI, ARTUR_MARCIN</td><td>Passed everything.</td></tr><tr><td>5544</td><td>TANIS, DULAN</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 271-topic-01 </td><td>(EDWARDS, SEAN (3245))</td></tr><tr><td> 271-topic-02 </td><td>(ALAM, SAQEB (8681))<BR>(BALLETTA, ROMINA (1788))<BR>(BOURDIERD, RAFAEL (9924))<BR>(EDWARDS, SEAN (3245))<BR>(PAGAN, FRANCES (1007))<BR>(ROBERTS, KAREEM (6120))</td></tr><tr><td> 271-topic-03 </td><td>(AYALA, STACY (6742))<BR>(LIANG, QINGXIANG (7267))<BR>(ROBERTS, KAREEM (6120))</td></tr><tr><td> 271-topic-04 </td><td>(CHO, MIRIM (7536))<BR>(LIANG, QINGXIANG (7267))</td></tr><tr><td> 271-topic-05 </td><td>(CHO, MIRIM (7536))<BR>(LIANG, QINGXIANG (7267))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
