#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>05</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>ADEPO_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3312</td><td>ANDERSON, ANDREA</td><td>Absent on the assessment test.</td></tr><tr><td>8133</td><td>BELLANTONI, DOMENICA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>8502</td><td>BLACKETT, NEISA</td><td>Absent on the assessment test.</td></tr><tr><td>7350</td><td>BONILLA_NERIS, KADUBEL</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>3334</td><td>CALDERON, JEFFREY</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7764</td><td>CHISOLM, KAISHAMIA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>3278</td><td>D'AMICO, DANIEL</td><td>Absent on the assessment test.</td></tr><tr><td>7925</td><td>DAVILA, HERMINIA</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-07</td></tr><tr><td>6353</td><td>DHANESSAR, KUMAR</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>8757</td><td>DIAZ, CONSTANCE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>9009</td><td>DUNABOYINA, JOSHUA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>4557</td><td>GARCIA, MERCELINDA</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6559</td><td>GJONGECAJ, BLEDAR</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>3904</td><td>GONZALEZ, KATARINA</td><td>108-topic-04<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>3050</td><td>GUEVARA, ZULY</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6919</td><td>HERNANDEZ, ARIELIS</td><td>Absent on the assessment test.</td></tr><tr><td>4949</td><td>HYDE, RONALD</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7856</td><td>JEFFRIES, MICHAEL</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>2643</td><td>JIMENEZ, JOSE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2361</td><td>KOLENOVIC, EMIL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6838</td><td>LAWRENCE, GLEN</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07</td></tr><tr><td>2082</td><td>MARSHALL, JEREMY</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07</td></tr><tr><td>2579</td><td>MCCOMBS, TYTIANA</td><td>Absent on the assessment test.</td></tr><tr><td>9737</td><td>NO, CHAE_WON</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7085</td><td>PARK, JAMES</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>9420</td><td>QUARTE, RYAN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>8776</td><td>REDA, AREF</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>1026</td><td>REYNOSO, RAFAEL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>5638</td><td>RODRIGUEZ, NICHOLAS</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7825</td><td>ROSADO, MICHAEL</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-08</td></tr><tr><td>3313</td><td>STANDIFER, ERICA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>1275</td><td>THOMAS, SHERAE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6869</td><td>TYLER, HILMA</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(BELLANTONI, DOMENICA (8133))<BR>(CALDERON, JEFFREY (3334))<BR>(CHISOLM, KAISHAMIA (7764))<BR>(DHANESSAR, KUMAR (6353))<BR>(DIAZ, CONSTANCE (8757))<BR>(DUNABOYINA, JOSHUA (9009))<BR>(GJONGECAJ, BLEDAR (6559))<BR>(GUEVARA, ZULY (3050))<BR>(HYDE, RONALD (4949))<BR>(JEFFRIES, MICHAEL (7856))<BR>(JIMENEZ, JOSE (2643))<BR>(KOLENOVIC, EMIL (2361))<BR>(MARSHALL, JEREMY (2082))<BR>(PARK, JAMES (7085))<BR>(QUARTE, RYAN (9420))<BR>(REDA, AREF (8776))<BR>(REYNOSO, RAFAEL (1026))<BR>(RODRIGUEZ, NICHOLAS (5638))<BR>(ROSADO, MICHAEL (7825))<BR>(STANDIFER, ERICA (3313))<BR>(THOMAS, SHERAE (1275))Absent on the assessment test.</td></tr><tr><td> 108-topic-02 </td><td>(BONILLA_NERIS, KADUBEL (7350))<BR>(CALDERON, JEFFREY (3334))<BR>(DIAZ, CONSTANCE (8757))<BR>(GJONGECAJ, BLEDAR (6559))<BR>(HYDE, RONALD (4949))<BR>(JEFFRIES, MICHAEL (7856))<BR>(LAWRENCE, GLEN (6838))<BR>(MARSHALL, JEREMY (2082))<BR>(REDA, AREF (8776))<BR>(RODRIGUEZ, NICHOLAS (5638))<BR>(ROSADO, MICHAEL (7825))<BR>(THOMAS, SHERAE (1275))Absent on the assessment test.</td></tr><tr><td> 108-topic-03 </td><td>(BELLANTONI, DOMENICA (8133))<BR>(BONILLA_NERIS, KADUBEL (7350))<BR>(CALDERON, JEFFREY (3334))<BR>(CHISOLM, KAISHAMIA (7764))<BR>(DHANESSAR, KUMAR (6353))<BR>(DIAZ, CONSTANCE (8757))<BR>(DUNABOYINA, JOSHUA (9009))<BR>(GARCIA, MERCELINDA (4557))<BR>(GJONGECAJ, BLEDAR (6559))<BR>(GUEVARA, ZULY (3050))<BR>(HYDE, RONALD (4949))<BR>(JEFFRIES, MICHAEL (7856))<BR>(JIMENEZ, JOSE (2643))<BR>(KOLENOVIC, EMIL (2361))<BR>(LAWRENCE, GLEN (6838))<BR>(MARSHALL, JEREMY (2082))<BR>(NO, CHAE_WON (9737))<BR>(PARK, JAMES (7085))<BR>(QUARTE, RYAN (9420))<BR>(REDA, AREF (8776))<BR>(REYNOSO, RAFAEL (1026))<BR>(RODRIGUEZ, NICHOLAS (5638))<BR>(ROSADO, MICHAEL (7825))<BR>(STANDIFER, ERICA (3313))<BR>(THOMAS, SHERAE (1275))Absent on the assessment test.</td></tr><tr><td> 108-topic-04 </td><td>(BELLANTONI, DOMENICA (8133))<BR>(BONILLA_NERIS, KADUBEL (7350))<BR>(CALDERON, JEFFREY (3334))<BR>(CHISOLM, KAISHAMIA (7764))<BR>(DAVILA, HERMINIA (7925))<BR>(DHANESSAR, KUMAR (6353))<BR>(DIAZ, CONSTANCE (8757))<BR>(DUNABOYINA, JOSHUA (9009))<BR>(GARCIA, MERCELINDA (4557))<BR>(GJONGECAJ, BLEDAR (6559))<BR>(GONZALEZ, KATARINA (3904))<BR>(GUEVARA, ZULY (3050))<BR>(HYDE, RONALD (4949))<BR>(JEFFRIES, MICHAEL (7856))<BR>(JIMENEZ, JOSE (2643))<BR>(KOLENOVIC, EMIL (2361))<BR>(LAWRENCE, GLEN (6838))<BR>(MARSHALL, JEREMY (2082))<BR>(NO, CHAE_WON (9737))<BR>(QUARTE, RYAN (9420))<BR>(REDA, AREF (8776))<BR>(RODRIGUEZ, NICHOLAS (5638))<BR>(ROSADO, MICHAEL (7825))<BR>(STANDIFER, ERICA (3313))<BR>(THOMAS, SHERAE (1275))Absent on the assessment test.</td></tr><tr><td> 108-topic-05 </td><td>(CALDERON, JEFFREY (3334))<BR>(DAVILA, HERMINIA (7925))<BR>(DHANESSAR, KUMAR (6353))<BR>(DIAZ, CONSTANCE (8757))<BR>(DUNABOYINA, JOSHUA (9009))<BR>(GARCIA, MERCELINDA (4557))<BR>(GJONGECAJ, BLEDAR (6559))<BR>(HYDE, RONALD (4949))<BR>(JEFFRIES, MICHAEL (7856))<BR>(KOLENOVIC, EMIL (2361))<BR>(LAWRENCE, GLEN (6838))<BR>(MARSHALL, JEREMY (2082))<BR>(NO, CHAE_WON (9737))<BR>(PARK, JAMES (7085))<BR>(QUARTE, RYAN (9420))<BR>(REDA, AREF (8776))<BR>(REYNOSO, RAFAEL (1026))<BR>(STANDIFER, ERICA (3313))<BR>(THOMAS, SHERAE (1275))Absent on the assessment test.</td></tr><tr><td> 108-topic-06 </td><td>(BELLANTONI, DOMENICA (8133))<BR>(CALDERON, JEFFREY (3334))<BR>(DUNABOYINA, JOSHUA (9009))<BR>(GJONGECAJ, BLEDAR (6559))<BR>(GUEVARA, ZULY (3050))<BR>(HYDE, RONALD (4949))<BR>(JEFFRIES, MICHAEL (7856))<BR>(JIMENEZ, JOSE (2643))<BR>(KOLENOVIC, EMIL (2361))<BR>(LAWRENCE, GLEN (6838))<BR>(MARSHALL, JEREMY (2082))<BR>(NO, CHAE_WON (9737))<BR>(QUARTE, RYAN (9420))<BR>(REDA, AREF (8776))<BR>(REYNOSO, RAFAEL (1026))<BR>(RODRIGUEZ, NICHOLAS (5638))<BR>(ROSADO, MICHAEL (7825))<BR>(THOMAS, SHERAE (1275))Absent on the assessment test.</td></tr><tr><td> 108-topic-07 </td><td>(BELLANTONI, DOMENICA (8133))<BR>(DAVILA, HERMINIA (7925))<BR>(DHANESSAR, KUMAR (6353))<BR>(GARCIA, MERCELINDA (4557))<BR>(GJONGECAJ, BLEDAR (6559))<BR>(GONZALEZ, KATARINA (3904))<BR>(GUEVARA, ZULY (3050))<BR>(LAWRENCE, GLEN (6838))<BR>(MARSHALL, JEREMY (2082))<BR>(QUARTE, RYAN (9420))<BR>(REDA, AREF (8776))<BR>(STANDIFER, ERICA (3313))<BR>(THOMAS, SHERAE (1275))Absent on the assessment test.</td></tr><tr><td> 108-topic-08 </td><td>(CALDERON, JEFFREY (3334))<BR>(DIAZ, CONSTANCE (8757))<BR>(GUEVARA, ZULY (3050))<BR>(QUARTE, RYAN (9420))<BR>(REDA, AREF (8776))<BR>(ROSADO, MICHAEL (7825))<BR>(THOMAS, SHERAE (1275))Absent on the assessment test.</td></tr><tr><td> 108-topic-09 </td><td>(CALDERON, JEFFREY (3334))<BR>(CHISOLM, KAISHAMIA (7764))<BR>(DIAZ, CONSTANCE (8757))<BR>(GARCIA, MERCELINDA (4557))<BR>(GUEVARA, ZULY (3050))<BR>(HYDE, RONALD (4949))<BR>(JIMENEZ, JOSE (2643))<BR>(KOLENOVIC, EMIL (2361))<BR>(NO, CHAE_WON (9737))<BR>(QUARTE, RYAN (9420))<BR>(REDA, AREF (8776))<BR>(RODRIGUEZ, NICHOLAS (5638))<BR>(STANDIFER, ERICA (3313))<BR>(THOMAS, SHERAE (1275))Absent on the assessment test.</td></tr><tr><td> 108-topic-10 </td><td>(BELLANTONI, DOMENICA (8133))<BR>(BONILLA_NERIS, KADUBEL (7350))<BR>(CALDERON, JEFFREY (3334))<BR>(CHISOLM, KAISHAMIA (7764))<BR>(DHANESSAR, KUMAR (6353))<BR>(DIAZ, CONSTANCE (8757))<BR>(DUNABOYINA, JOSHUA (9009))<BR>(GARCIA, MERCELINDA (4557))<BR>(GJONGECAJ, BLEDAR (6559))<BR>(GONZALEZ, KATARINA (3904))<BR>(GUEVARA, ZULY (3050))<BR>(HYDE, RONALD (4949))<BR>(JEFFRIES, MICHAEL (7856))<BR>(JIMENEZ, JOSE (2643))<BR>(KOLENOVIC, EMIL (2361))<BR>(NO, CHAE_WON (9737))<BR>(PARK, JAMES (7085))<BR>(QUARTE, RYAN (9420))<BR>(REDA, AREF (8776))<BR>(REYNOSO, RAFAEL (1026))<BR>(RODRIGUEZ, NICHOLAS (5638))<BR>(STANDIFER, ERICA (3313))<BR>(THOMAS, SHERAE (1275))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
