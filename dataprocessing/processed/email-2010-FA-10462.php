#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>62</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>Karabulut_C</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8289</td><td>ATES, JEFFREY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6285</td><td>BALDERA, SHAKIRA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1831</td><td>BRADY, ROGELIO</td><td>Passed everything.</td></tr><tr><td>2359</td><td>ESSON, TASHIA</td><td>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>0625</td><td>GARCIA, ADRIANNE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2947</td><td>HANEFIOGLU, DIDE</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3713</td><td>HENRIQUEZ, IRVING</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>8555</td><td>JIMENEZ, REGINNA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>9694</td><td>JOHN, NICHOLAS</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5782</td><td>MARCOS, WENDY</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>8294</td><td>MASSIAH, CALVIN</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4035</td><td>MENCIA, SADIE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>0462</td><td>MINCHEW, JESSICA</td><td>Passed everything.</td></tr><tr><td>4153</td><td>NAM, MONIQUE</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>8720</td><td>OCASIO, AARON</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5957</td><td>PIERRE, CONALD</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>2259</td><td>SALERNO, NICHOLAS</td><td>Passed everything.</td></tr><tr><td>3264</td><td>TRIPODI, SAMANTHA</td><td>104-topic-02<BR>104-topic-05<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>4267</td><td>VASQUEZ, JUSTIN</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>0153</td><td>VAZQUEZ, ALEXIS</td><td>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9029</td><td>ZAWISLEWSKI, BRYAN</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(ATES, JEFFREY (8289))<BR>(BALDERA, SHAKIRA (6285))<BR>(GARCIA, ADRIANNE (0625))<BR>(HANEFIOGLU, DIDE (2947))<BR>(HENRIQUEZ, IRVING (3713))<BR>(JIMENEZ, REGINNA (8555))<BR>(JOHN, NICHOLAS (9694))<BR>(MARCOS, WENDY (5782))<BR>(MASSIAH, CALVIN (8294))<BR>(MENCIA, SADIE (4035))<BR>(NAM, MONIQUE (4153))<BR>(OCASIO, AARON (8720))<BR>(PIERRE, CONALD (5957))<BR>(VASQUEZ, JUSTIN (4267))<BR>(ZAWISLEWSKI, BRYAN (9029))</td></tr><tr><td> 104-topic-02 </td><td>(ATES, JEFFREY (8289))<BR>(BALDERA, SHAKIRA (6285))<BR>(GARCIA, ADRIANNE (0625))<BR>(HENRIQUEZ, IRVING (3713))<BR>(JIMENEZ, REGINNA (8555))<BR>(JOHN, NICHOLAS (9694))<BR>(MASSIAH, CALVIN (8294))<BR>(MENCIA, SADIE (4035))<BR>(OCASIO, AARON (8720))<BR>(PIERRE, CONALD (5957))<BR>(TRIPODI, SAMANTHA (3264))<BR>(VAZQUEZ, ALEXIS (0153))</td></tr><tr><td> 104-topic-03 </td><td>(ATES, JEFFREY (8289))<BR>(BALDERA, SHAKIRA (6285))<BR>(GARCIA, ADRIANNE (0625))<BR>(MARCOS, WENDY (5782))<BR>(MASSIAH, CALVIN (8294))<BR>(NAM, MONIQUE (4153))<BR>(OCASIO, AARON (8720))<BR>(PIERRE, CONALD (5957))</td></tr><tr><td> 104-topic-04 </td><td>(ATES, JEFFREY (8289))<BR>(BALDERA, SHAKIRA (6285))<BR>(GARCIA, ADRIANNE (0625))<BR>(HANEFIOGLU, DIDE (2947))<BR>(HENRIQUEZ, IRVING (3713))<BR>(JOHN, NICHOLAS (9694))<BR>(MASSIAH, CALVIN (8294))<BR>(MENCIA, SADIE (4035))<BR>(NAM, MONIQUE (4153))<BR>(PIERRE, CONALD (5957))<BR>(VASQUEZ, JUSTIN (4267))</td></tr><tr><td> 104-topic-05 </td><td>(ATES, JEFFREY (8289))<BR>(BALDERA, SHAKIRA (6285))<BR>(GARCIA, ADRIANNE (0625))<BR>(HENRIQUEZ, IRVING (3713))<BR>(JIMENEZ, REGINNA (8555))<BR>(JOHN, NICHOLAS (9694))<BR>(MARCOS, WENDY (5782))<BR>(MASSIAH, CALVIN (8294))<BR>(MENCIA, SADIE (4035))<BR>(NAM, MONIQUE (4153))<BR>(OCASIO, AARON (8720))<BR>(PIERRE, CONALD (5957))<BR>(TRIPODI, SAMANTHA (3264))<BR>(VASQUEZ, JUSTIN (4267))<BR>(VAZQUEZ, ALEXIS (0153))<BR>(ZAWISLEWSKI, BRYAN (9029))</td></tr><tr><td> 104-topic-06 </td><td>(ATES, JEFFREY (8289))<BR>(BALDERA, SHAKIRA (6285))<BR>(ESSON, TASHIA (2359))<BR>(GARCIA, ADRIANNE (0625))<BR>(HENRIQUEZ, IRVING (3713))<BR>(JIMENEZ, REGINNA (8555))<BR>(JOHN, NICHOLAS (9694))<BR>(MARCOS, WENDY (5782))<BR>(MASSIAH, CALVIN (8294))<BR>(MENCIA, SADIE (4035))<BR>(NAM, MONIQUE (4153))<BR>(OCASIO, AARON (8720))<BR>(PIERRE, CONALD (5957))<BR>(VASQUEZ, JUSTIN (4267))<BR>(VAZQUEZ, ALEXIS (0153))<BR>(ZAWISLEWSKI, BRYAN (9029))</td></tr><tr><td> 104-topic-07 </td><td>(BALDERA, SHAKIRA (6285))<BR>(ESSON, TASHIA (2359))<BR>(GARCIA, ADRIANNE (0625))<BR>(HANEFIOGLU, DIDE (2947))<BR>(HENRIQUEZ, IRVING (3713))<BR>(JIMENEZ, REGINNA (8555))<BR>(JOHN, NICHOLAS (9694))<BR>(MARCOS, WENDY (5782))<BR>(MASSIAH, CALVIN (8294))<BR>(MENCIA, SADIE (4035))<BR>(NAM, MONIQUE (4153))<BR>(OCASIO, AARON (8720))<BR>(PIERRE, CONALD (5957))<BR>(TRIPODI, SAMANTHA (3264))<BR>(VASQUEZ, JUSTIN (4267))<BR>(VAZQUEZ, ALEXIS (0153))<BR>(ZAWISLEWSKI, BRYAN (9029))</td></tr><tr><td> 104-topic-08 </td><td>(ESSON, TASHIA (2359))<BR>(GARCIA, ADRIANNE (0625))<BR>(MARCOS, WENDY (5782))<BR>(MENCIA, SADIE (4035))<BR>(NAM, MONIQUE (4153))<BR>(VASQUEZ, JUSTIN (4267))</td></tr><tr><td> 104-topic-09 </td><td>(ATES, JEFFREY (8289))<BR>(BALDERA, SHAKIRA (6285))<BR>(GARCIA, ADRIANNE (0625))<BR>(HANEFIOGLU, DIDE (2947))<BR>(HENRIQUEZ, IRVING (3713))<BR>(MARCOS, WENDY (5782))<BR>(MASSIAH, CALVIN (8294))<BR>(NAM, MONIQUE (4153))<BR>(VAZQUEZ, ALEXIS (0153))</td></tr><tr><td> 104-topic-10 </td><td>(ATES, JEFFREY (8289))<BR>(BALDERA, SHAKIRA (6285))<BR>(ESSON, TASHIA (2359))<BR>(GARCIA, ADRIANNE (0625))<BR>(HANEFIOGLU, DIDE (2947))<BR>(HENRIQUEZ, IRVING (3713))<BR>(JIMENEZ, REGINNA (8555))<BR>(JOHN, NICHOLAS (9694))<BR>(MARCOS, WENDY (5782))<BR>(MASSIAH, CALVIN (8294))<BR>(MENCIA, SADIE (4035))<BR>(NAM, MONIQUE (4153))<BR>(OCASIO, AARON (8720))<BR>(PIERRE, CONALD (5957))<BR>(TRIPODI, SAMANTHA (3264))<BR>(VASQUEZ, JUSTIN (4267))<BR>(VAZQUEZ, ALEXIS (0153))<BR>(ZAWISLEWSKI, BRYAN (9029))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
