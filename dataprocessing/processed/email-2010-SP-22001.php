#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 220 - SURV_CONC_OPR_RES (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>220</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>CHANDRAKANTHA_L</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0913</td><td>GUIDO, MARGARITA</td><td>220-topic-02<BR>220-topic-04<BR>220-topic-05<BR>220-topic-06<BR>220-topic-07<BR>220-topic-08<BR>220-topic-09<BR>220-topic-10</td></tr><tr><td>0166</td><td>HALL, JONATHAN</td><td>Absent on the assessment test.</td></tr><tr><td>8039</td><td>HAUGHTON, SHAUGHNESSY</td><td>220-topic-02<BR>220-topic-05<BR>220-topic-06<BR>220-topic-07<BR>220-topic-08<BR>220-topic-09<BR>220-topic-10</td></tr><tr><td>4053</td><td>KIM, KIMOK</td><td>Absent on the assessment test.</td></tr><tr><td>7697</td><td>KREDATUS, BRIAN</td><td>220-topic-01<BR>220-topic-02<BR>220-topic-05<BR>220-topic-07<BR>220-topic-08<BR>220-topic-09<BR>220-topic-10</td></tr><tr><td>8792</td><td>LEANDRO_JR, NICHOLAS</td><td>220-topic-01<BR>220-topic-02<BR>220-topic-04<BR>220-topic-05<BR>220-topic-06<BR>220-topic-07<BR>220-topic-08<BR>220-topic-09<BR>220-topic-10</td></tr><tr><td>7773</td><td>LONDONO, ANDRES</td><td>220-topic-02<BR>220-topic-07<BR>220-topic-08<BR>220-topic-09</td></tr><tr><td>9646</td><td>MEJIA, LUIS</td><td>220-topic-01<BR>220-topic-02<BR>220-topic-04<BR>220-topic-05<BR>220-topic-06<BR>220-topic-07<BR>220-topic-08<BR>220-topic-09<BR>220-topic-10</td></tr><tr><td>2854</td><td>PERRONE, MICHAEL</td><td>220-topic-02<BR>220-topic-05<BR>220-topic-06<BR>220-topic-07<BR>220-topic-08<BR>220-topic-09<BR>220-topic-10</td></tr><tr><td>8289</td><td>UPCHURCH, PAIJAH</td><td>Absent on the assessment test.</td></tr><tr><td>7590</td><td>WONG, KIN</td><td>220-topic-02<BR>220-topic-09</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 220-topic-01 </td><td>(KREDATUS, BRIAN (7697))<BR>(LEANDRO_JR, NICHOLAS (8792))<BR>(MEJIA, LUIS (9646))</td></tr><tr><td> 220-topic-02 </td><td>(GUIDO, MARGARITA (0913))<BR>(HAUGHTON, SHAUGHNESSY (8039))<BR>(KREDATUS, BRIAN (7697))<BR>(LEANDRO_JR, NICHOLAS (8792))<BR>(LONDONO, ANDRES (7773))<BR>(MEJIA, LUIS (9646))<BR>(PERRONE, MICHAEL (2854))<BR>(WONG, KIN (7590))</td></tr><tr><td> 220-topic-03 </td><td>Everyone passed.</td></tr><tr><td> 220-topic-04 </td><td>(GUIDO, MARGARITA (0913))<BR>(LEANDRO_JR, NICHOLAS (8792))<BR>(MEJIA, LUIS (9646))</td></tr><tr><td> 220-topic-05 </td><td>(GUIDO, MARGARITA (0913))<BR>(HAUGHTON, SHAUGHNESSY (8039))<BR>(KREDATUS, BRIAN (7697))<BR>(LEANDRO_JR, NICHOLAS (8792))<BR>(MEJIA, LUIS (9646))<BR>(PERRONE, MICHAEL (2854))</td></tr><tr><td> 220-topic-06 </td><td>(GUIDO, MARGARITA (0913))<BR>(HAUGHTON, SHAUGHNESSY (8039))<BR>(LEANDRO_JR, NICHOLAS (8792))<BR>(MEJIA, LUIS (9646))<BR>(PERRONE, MICHAEL (2854))</td></tr><tr><td> 220-topic-07 </td><td>(GUIDO, MARGARITA (0913))<BR>(HAUGHTON, SHAUGHNESSY (8039))<BR>(KREDATUS, BRIAN (7697))<BR>(LEANDRO_JR, NICHOLAS (8792))<BR>(LONDONO, ANDRES (7773))<BR>(MEJIA, LUIS (9646))<BR>(PERRONE, MICHAEL (2854))</td></tr><tr><td> 220-topic-08 </td><td>(GUIDO, MARGARITA (0913))<BR>(HAUGHTON, SHAUGHNESSY (8039))<BR>(KREDATUS, BRIAN (7697))<BR>(LEANDRO_JR, NICHOLAS (8792))<BR>(LONDONO, ANDRES (7773))<BR>(MEJIA, LUIS (9646))<BR>(PERRONE, MICHAEL (2854))</td></tr><tr><td> 220-topic-09 </td><td>(GUIDO, MARGARITA (0913))<BR>(HAUGHTON, SHAUGHNESSY (8039))<BR>(KREDATUS, BRIAN (7697))<BR>(LEANDRO_JR, NICHOLAS (8792))<BR>(LONDONO, ANDRES (7773))<BR>(MEJIA, LUIS (9646))<BR>(PERRONE, MICHAEL (2854))<BR>(WONG, KIN (7590))</td></tr><tr><td> 220-topic-10 </td><td>(GUIDO, MARGARITA (0913))<BR>(HAUGHTON, SHAUGHNESSY (8039))<BR>(KREDATUS, BRIAN (7697))<BR>(LEANDRO_JR, NICHOLAS (8792))<BR>(MEJIA, LUIS (9646))<BR>(PERRONE, MICHAEL (2854))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>