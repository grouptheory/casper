#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 243 - CALCULUS_3 (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>243</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>HOENIG_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>5088</td><td>ESPOSITO, STEVE</td><td>243-topic-01<BR>243-topic-02<BR>243-topic-03<BR>243-topic-04<BR>243-topic-06<BR>243-topic-08<BR>243-topic-09<BR>243-topic-10</td></tr><tr><td>1132</td><td>FRANK, SARAH</td><td>243-topic-02<BR>243-topic-03<BR>243-topic-04<BR>243-topic-06<BR>243-topic-08<BR>243-topic-09<BR>243-topic-10</td></tr><tr><td>3047</td><td>GOMONT, JEAN_RAYMOND</td><td>Absent on the assessment test.</td></tr><tr><td>6760</td><td>PASCAL, BRYANT</td><td>243-topic-01<BR>243-topic-02<BR>243-topic-03<BR>243-topic-08<BR>243-topic-09<BR>243-topic-10</td></tr><tr><td>3362</td><td>RAHMAN, MD</td><td>Absent on the assessment test.</td></tr><tr><td>2440</td><td>TEUBL, JENNIFER</td><td>243-topic-01</td></tr><tr><td>9879</td><td>TEXEIRA, CARLOS</td><td>243-topic-01<BR>243-topic-02<BR>243-topic-06<BR>243-topic-08<BR>243-topic-09<BR>243-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 243-topic-01 </td><td>(ESPOSITO, STEVE (5088))<BR>(PASCAL, BRYANT (6760))<BR>(TEUBL, JENNIFER (2440))<BR>(TEXEIRA, CARLOS (9879))</td></tr><tr><td> 243-topic-02 </td><td>(ESPOSITO, STEVE (5088))<BR>(FRANK, SARAH (1132))<BR>(PASCAL, BRYANT (6760))<BR>(TEXEIRA, CARLOS (9879))</td></tr><tr><td> 243-topic-03 </td><td>(ESPOSITO, STEVE (5088))<BR>(FRANK, SARAH (1132))<BR>(PASCAL, BRYANT (6760))</td></tr><tr><td> 243-topic-04 </td><td>(ESPOSITO, STEVE (5088))<BR>(FRANK, SARAH (1132))</td></tr><tr><td> 243-topic-05 </td><td>Everyone passed.</td></tr><tr><td> 243-topic-06 </td><td>(ESPOSITO, STEVE (5088))<BR>(FRANK, SARAH (1132))<BR>(TEXEIRA, CARLOS (9879))</td></tr><tr><td> 243-topic-07 </td><td>Everyone passed.</td></tr><tr><td> 243-topic-08 </td><td>(ESPOSITO, STEVE (5088))<BR>(FRANK, SARAH (1132))<BR>(PASCAL, BRYANT (6760))<BR>(TEXEIRA, CARLOS (9879))</td></tr><tr><td> 243-topic-09 </td><td>(ESPOSITO, STEVE (5088))<BR>(FRANK, SARAH (1132))<BR>(PASCAL, BRYANT (6760))<BR>(TEXEIRA, CARLOS (9879))</td></tr><tr><td> 243-topic-10 </td><td>(ESPOSITO, STEVE (5088))<BR>(FRANK, SARAH (1132))<BR>(PASCAL, BRYANT (6760))<BR>(TEXEIRA, CARLOS (9879))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
