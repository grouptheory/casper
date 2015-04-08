#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 271 - INTRO_COMPUTANDPROG (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>271</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1380</td><td>ARROYO, CHRISTIAN</td><td>271-topic-01</td></tr><tr><td>3231</td><td>BUSTILLOS, ALEX</td><td>Passed everything.</td></tr><tr><td>1200</td><td>BYUN, SAMUEL</td><td>271-topic-02<BR>271-topic-04<BR>271-topic-05</td></tr><tr><td>1191</td><td>CARIDI, JESSICA</td><td>271-topic-02<BR>271-topic-03<BR>271-topic-04</td></tr><tr><td>8894</td><td>CHEN, CONNIE</td><td>271-topic-04<BR>271-topic-05</td></tr><tr><td>8678</td><td>FERRARA, WILLIAM</td><td>Passed everything.</td></tr><tr><td>5727</td><td>GIOVANNY, DARWIN</td><td>271-topic-02<BR>271-topic-03<BR>271-topic-04</td></tr><tr><td>8620</td><td>HINDS, RASHIDA</td><td>Passed everything.</td></tr><tr><td>3430</td><td>ISRA, SHAWN</td><td>271-topic-03<BR>271-topic-04</td></tr><tr><td>9232</td><td>LORQUET, LIONEL</td><td>271-topic-02<BR>271-topic-03<BR>271-topic-04</td></tr><tr><td>7495</td><td>MEHMETAJ, BLEDAR</td><td>Passed everything.</td></tr><tr><td>3118</td><td>MORA_USUGA, RICARDO</td><td>Passed everything.</td></tr><tr><td>8854</td><td>OEI, CHRISTINE</td><td>271-topic-05</td></tr><tr><td>8619</td><td>RIVERA, JOSE</td><td>271-topic-02<BR>271-topic-03<BR>271-topic-04</td></tr><tr><td>3406</td><td>TRACY, RICARDO</td><td>271-topic-04</td></tr><tr><td>9546</td><td>VITAL, ABIGAIL</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 271-topic-01 </td><td>(ARROYO, CHRISTIAN (1380))</td></tr><tr><td> 271-topic-02 </td><td>(BYUN, SAMUEL (1200))<BR>(CARIDI, JESSICA (1191))<BR>(GIOVANNY, DARWIN (5727))<BR>(LORQUET, LIONEL (9232))<BR>(RIVERA, JOSE (8619))</td></tr><tr><td> 271-topic-03 </td><td>(CARIDI, JESSICA (1191))<BR>(GIOVANNY, DARWIN (5727))<BR>(ISRA, SHAWN (3430))<BR>(LORQUET, LIONEL (9232))<BR>(RIVERA, JOSE (8619))</td></tr><tr><td> 271-topic-04 </td><td>(BYUN, SAMUEL (1200))<BR>(CARIDI, JESSICA (1191))<BR>(CHEN, CONNIE (8894))<BR>(GIOVANNY, DARWIN (5727))<BR>(ISRA, SHAWN (3430))<BR>(LORQUET, LIONEL (9232))<BR>(RIVERA, JOSE (8619))<BR>(TRACY, RICARDO (3406))</td></tr><tr><td> 271-topic-05 </td><td>(BYUN, SAMUEL (1200))<BR>(CHEN, CONNIE (8894))<BR>(OEI, CHRISTINE (8854))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
