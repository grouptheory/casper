#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>12</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>FARRAJ_R</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0218</td><td>BURGOS, YENDRY</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-05<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>1043</td><td>CEN, JUAN</td><td>108-topic-04<BR>108-topic-05</td></tr><tr><td>3400</td><td>CHARLES, KEISHA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>0059</td><td>CIMINELLI, ROBERT</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>5314</td><td>DAVIS, JOSHUA</td><td>108-topic-03</td></tr><tr><td>0276</td><td>DIAZ, AMANDA</td><td>Absent on the assessment test.</td></tr><tr><td>2357</td><td>DORRIAN, DANA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>6804</td><td>ESCOBAR, EDWIN</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6716</td><td>FELIPE, EDWIN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>1240</td><td>GEORGE, CHELSEA</td><td>108-topic-03<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>6640</td><td>GONZALEZ, MERCEDES</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>0247</td><td>GRAMAJO, ANDREA</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>7313</td><td>GUILLEN, SOLTIER</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>8355</td><td>JAMIESON, JONATHAN</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>6164</td><td>JULIANO, ANGELA</td><td>108-topic-01<BR>108-topic-05<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>7240</td><td>LASCANO, GABRIELLA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>3102</td><td>LEE, YUNA</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>0905</td><td>MACMASTER, DELWING</td><td>108-topic-01</td></tr><tr><td>1876</td><td>MOLINA, CRISTINA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2952</td><td>MUNOZ, PEDRO</td><td>Absent on the assessment test.</td></tr><tr><td>7329</td><td>MYAGKOV, DENNIS</td><td>108-topic-04<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>5891</td><td>PAN, JIAHONG</td><td>108-topic-01</td></tr><tr><td>2343</td><td>PERROTTA, CAITLIN</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>6637</td><td>RODRIGUEZ, ELVIS</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09</td></tr><tr><td>3273</td><td>RODRIGUEZ, HARRY</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>0804</td><td>ROMERO, LINDA</td><td>108-topic-03<BR>108-topic-07</td></tr><tr><td>6916</td><td>RYAN, DEVIN</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>3338</td><td>SANTOS, ANA</td><td>108-topic-02<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>3603</td><td>SIMONIELLO, MICHAEL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06</td></tr><tr><td>7003</td><td>SULLIVAN, ROBERT</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>4906</td><td>TUNG, LINDA</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>2665</td><td>TYBURCZY, NICHOLAS</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>1048</td><td>WIMBUSH, TARONA</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(BURGOS, YENDRY (0218))<BR>(CHARLES, KEISHA (3400))<BR>(DORRIAN, DANA (2357))<BR>(FELIPE, EDWIN (6716))<BR>(GONZALEZ, MERCEDES (6640))<BR>(GRAMAJO, ANDREA (0247))<BR>(GUILLEN, SOLTIER (7313))<BR>(JAMIESON, JONATHAN (8355))<BR>(JULIANO, ANGELA (6164))<BR>(LASCANO, GABRIELLA (7240))<BR>(MACMASTER, DELWING (0905))<BR>(MOLINA, CRISTINA (1876))<BR>(PAN, JIAHONG (5891))<BR>(RODRIGUEZ, HARRY (3273))<BR>(RYAN, DEVIN (6916))<BR>(SIMONIELLO, MICHAEL (3603))<BR>(SULLIVAN, ROBERT (7003))<BR>(TUNG, LINDA (4906))<BR>(TYBURCZY, NICHOLAS (2665))Absent on the assessment test.</td></tr><tr><td> 108-topic-02 </td><td>(CIMINELLI, ROBERT (0059))<BR>(DORRIAN, DANA (2357))<BR>(GUILLEN, SOLTIER (7313))<BR>(MOLINA, CRISTINA (1876))<BR>(PERROTTA, CAITLIN (2343))<BR>(RODRIGUEZ, ELVIS (6637))<BR>(SANTOS, ANA (3338))<BR>(SULLIVAN, ROBERT (7003))Absent on the assessment test.</td></tr><tr><td> 108-topic-03 </td><td>(BURGOS, YENDRY (0218))<BR>(CHARLES, KEISHA (3400))<BR>(CIMINELLI, ROBERT (0059))<BR>(DAVIS, JOSHUA (5314))<BR>(FELIPE, EDWIN (6716))<BR>(GEORGE, CHELSEA (1240))<BR>(GONZALEZ, MERCEDES (6640))<BR>(LASCANO, GABRIELLA (7240))<BR>(LEE, YUNA (3102))<BR>(PERROTTA, CAITLIN (2343))<BR>(RODRIGUEZ, ELVIS (6637))<BR>(RODRIGUEZ, HARRY (3273))<BR>(ROMERO, LINDA (0804))<BR>(SIMONIELLO, MICHAEL (3603))<BR>(SULLIVAN, ROBERT (7003))<BR>(TYBURCZY, NICHOLAS (2665))Absent on the assessment test.</td></tr><tr><td> 108-topic-04 </td><td>(CEN, JUAN (1043))<BR>(CHARLES, KEISHA (3400))<BR>(CIMINELLI, ROBERT (0059))<BR>(DORRIAN, DANA (2357))<BR>(ESCOBAR, EDWIN (6804))<BR>(FELIPE, EDWIN (6716))<BR>(GONZALEZ, MERCEDES (6640))<BR>(GRAMAJO, ANDREA (0247))<BR>(GUILLEN, SOLTIER (7313))<BR>(JAMIESON, JONATHAN (8355))<BR>(LASCANO, GABRIELLA (7240))<BR>(LEE, YUNA (3102))<BR>(MOLINA, CRISTINA (1876))<BR>(MYAGKOV, DENNIS (7329))<BR>(PERROTTA, CAITLIN (2343))<BR>(RODRIGUEZ, ELVIS (6637))<BR>(RODRIGUEZ, HARRY (3273))<BR>(RYAN, DEVIN (6916))<BR>(SIMONIELLO, MICHAEL (3603))<BR>(SULLIVAN, ROBERT (7003))<BR>(TUNG, LINDA (4906))<BR>(TYBURCZY, NICHOLAS (2665))Absent on the assessment test.</td></tr><tr><td> 108-topic-05 </td><td>(BURGOS, YENDRY (0218))<BR>(CEN, JUAN (1043))<BR>(CHARLES, KEISHA (3400))<BR>(CIMINELLI, ROBERT (0059))<BR>(DORRIAN, DANA (2357))<BR>(ESCOBAR, EDWIN (6804))<BR>(FELIPE, EDWIN (6716))<BR>(GEORGE, CHELSEA (1240))<BR>(GONZALEZ, MERCEDES (6640))<BR>(GRAMAJO, ANDREA (0247))<BR>(GUILLEN, SOLTIER (7313))<BR>(JAMIESON, JONATHAN (8355))<BR>(JULIANO, ANGELA (6164))<BR>(LASCANO, GABRIELLA (7240))<BR>(LEE, YUNA (3102))<BR>(MOLINA, CRISTINA (1876))<BR>(PERROTTA, CAITLIN (2343))<BR>(RODRIGUEZ, ELVIS (6637))<BR>(RODRIGUEZ, HARRY (3273))<BR>(RYAN, DEVIN (6916))<BR>(SANTOS, ANA (3338))<BR>(SULLIVAN, ROBERT (7003))<BR>(TYBURCZY, NICHOLAS (2665))Absent on the assessment test.</td></tr><tr><td> 108-topic-06 </td><td>(ESCOBAR, EDWIN (6804))<BR>(GONZALEZ, MERCEDES (6640))<BR>(GRAMAJO, ANDREA (0247))<BR>(GUILLEN, SOLTIER (7313))<BR>(LEE, YUNA (3102))<BR>(MOLINA, CRISTINA (1876))<BR>(MYAGKOV, DENNIS (7329))<BR>(RODRIGUEZ, ELVIS (6637))<BR>(RYAN, DEVIN (6916))<BR>(SANTOS, ANA (3338))<BR>(SIMONIELLO, MICHAEL (3603))Absent on the assessment test.</td></tr><tr><td> 108-topic-07 </td><td>(ESCOBAR, EDWIN (6804))<BR>(LASCANO, GABRIELLA (7240))<BR>(RODRIGUEZ, ELVIS (6637))<BR>(ROMERO, LINDA (0804))Absent on the assessment test.</td></tr><tr><td> 108-topic-08 </td><td>(BURGOS, YENDRY (0218))<BR>(JULIANO, ANGELA (6164))<BR>(LASCANO, GABRIELLA (7240))<BR>(MOLINA, CRISTINA (1876))<BR>(RODRIGUEZ, HARRY (3273))<BR>(TYBURCZY, NICHOLAS (2665))Absent on the assessment test.</td></tr><tr><td> 108-topic-09 </td><td>(ESCOBAR, EDWIN (6804))<BR>(GONZALEZ, MERCEDES (6640))<BR>(LEE, YUNA (3102))<BR>(MOLINA, CRISTINA (1876))<BR>(MYAGKOV, DENNIS (7329))<BR>(RODRIGUEZ, ELVIS (6637))<BR>(RYAN, DEVIN (6916))<BR>(SULLIVAN, ROBERT (7003))Absent on the assessment test.</td></tr><tr><td> 108-topic-10 </td><td>(BURGOS, YENDRY (0218))<BR>(CHARLES, KEISHA (3400))<BR>(ESCOBAR, EDWIN (6804))<BR>(GEORGE, CHELSEA (1240))<BR>(GONZALEZ, MERCEDES (6640))<BR>(GUILLEN, SOLTIER (7313))<BR>(JULIANO, ANGELA (6164))<BR>(LASCANO, GABRIELLA (7240))<BR>(LEE, YUNA (3102))<BR>(MOLINA, CRISTINA (1876))<BR>(PERROTTA, CAITLIN (2343))<BR>(RODRIGUEZ, HARRY (3273))<BR>(SULLIVAN, ROBERT (7003))<BR>(TUNG, LINDA (4906))<BR>(TYBURCZY, NICHOLAS (2665))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
