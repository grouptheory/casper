#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>50</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>FARRAJ_R</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9459</td><td>ADAO, CHRISTOPHER</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-09</td></tr><tr><td>6391</td><td>ALBERT, JONISA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>2529</td><td>CASTRO, DANIELA</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>4982</td><td>CHAUDHARY, ABDUL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04</td></tr><tr><td>1258</td><td>CHERILUS, DUNISE</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>7879</td><td>CRISOSTOMO, JULIO</td><td>108-topic-04</td></tr><tr><td>2017</td><td>CRUZ, ROBERTO</td><td>Passed everything.</td></tr><tr><td>0449</td><td>DAVILA, FREDDY</td><td>108-topic-03<BR>108-topic-04</td></tr><tr><td>6253</td><td>DE_BARTOLO, MATTHEW</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-09</td></tr><tr><td>8757</td><td>DIAZ, CONSTANCE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>4937</td><td>DURAN, ESTEPHANI</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>3600</td><td>ELEZOVIC, MICHAEL</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>8634</td><td>EPPS, NICOLE</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>6199</td><td>FALCON, JONATHAN</td><td>Passed everything.</td></tr><tr><td>6309</td><td>GARCIA, RAFAEL</td><td>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6236</td><td>GEORGE, TRACEY</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>5185</td><td>HO, JIMMIE</td><td>108-topic-04<BR>108-topic-09</td></tr><tr><td>5003</td><td>HUSSA, VASIN</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>5322</td><td>LI, KELLY</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>2630</td><td>LI, SHARON</td><td>108-topic-01<BR>108-topic-04</td></tr><tr><td>7869</td><td>LIU, JENNIFER</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04</td></tr><tr><td>9637</td><td>MARTINEZ, JUSTIN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>5082</td><td>MAZEWSKI, OSKAR</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>0805</td><td>MORILLO, NOEMI</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>8029</td><td>MULLIGAN, CHASE</td><td>108-topic-04<BR>108-topic-05</td></tr><tr><td>0002</td><td>OVALLE, FRANCHINY</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>8483</td><td>PEREZ, CHRISTOPHER</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>9175</td><td>RODRIGUEZ, ELVIS</td><td>108-topic-03<BR>108-topic-09</td></tr><tr><td>5292</td><td>SANTANA, ARLEEN</td><td>108-topic-04<BR>108-topic-05</td></tr><tr><td>3879</td><td>TEJEDA, RAYMOND</td><td>108-topic-04<BR>108-topic-05</td></tr><tr><td>9263</td><td>TENF, EMMANUEL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7051</td><td>TROLLINGER, WHITNEY</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>4934</td><td>WATKINS, KAREEMA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(ADAO, CHRISTOPHER (9459))<BR>(ALBERT, JONISA (6391))<BR>(CHAUDHARY, ABDUL (4982))<BR>(DIAZ, CONSTANCE (8757))<BR>(HUSSA, VASIN (5003))<BR>(LI, SHARON (2630))<BR>(LIU, JENNIFER (7869))<BR>(MARTINEZ, JUSTIN (9637))<BR>(MAZEWSKI, OSKAR (5082))<BR>(OVALLE, FRANCHINY (0002))<BR>(TENF, EMMANUEL (9263))<BR>(WATKINS, KAREEMA (4934))</td></tr><tr><td> 108-topic-02 </td><td>(ADAO, CHRISTOPHER (9459))<BR>(DIAZ, CONSTANCE (8757))<BR>(MAZEWSKI, OSKAR (5082))<BR>(TROLLINGER, WHITNEY (7051))</td></tr><tr><td> 108-topic-03 </td><td>(ADAO, CHRISTOPHER (9459))<BR>(ALBERT, JONISA (6391))<BR>(CHAUDHARY, ABDUL (4982))<BR>(CHERILUS, DUNISE (1258))<BR>(DAVILA, FREDDY (0449))<BR>(DE_BARTOLO, MATTHEW (6253))<BR>(DIAZ, CONSTANCE (8757))<BR>(DURAN, ESTEPHANI (4937))<BR>(ELEZOVIC, MICHAEL (3600))<BR>(EPPS, NICOLE (8634))<BR>(GEORGE, TRACEY (6236))<BR>(LIU, JENNIFER (7869))<BR>(MARTINEZ, JUSTIN (9637))<BR>(MAZEWSKI, OSKAR (5082))<BR>(MORILLO, NOEMI (0805))<BR>(OVALLE, FRANCHINY (0002))<BR>(PEREZ, CHRISTOPHER (8483))<BR>(RODRIGUEZ, ELVIS (9175))<BR>(TENF, EMMANUEL (9263))<BR>(TROLLINGER, WHITNEY (7051))<BR>(WATKINS, KAREEMA (4934))</td></tr><tr><td> 108-topic-04 </td><td>(ADAO, CHRISTOPHER (9459))<BR>(ALBERT, JONISA (6391))<BR>(CASTRO, DANIELA (2529))<BR>(CHAUDHARY, ABDUL (4982))<BR>(CHERILUS, DUNISE (1258))<BR>(CRISOSTOMO, JULIO (7879))<BR>(DAVILA, FREDDY (0449))<BR>(DE_BARTOLO, MATTHEW (6253))<BR>(DIAZ, CONSTANCE (8757))<BR>(DURAN, ESTEPHANI (4937))<BR>(ELEZOVIC, MICHAEL (3600))<BR>(EPPS, NICOLE (8634))<BR>(GEORGE, TRACEY (6236))<BR>(HO, JIMMIE (5185))<BR>(HUSSA, VASIN (5003))<BR>(LI, KELLY (5322))<BR>(LI, SHARON (2630))<BR>(LIU, JENNIFER (7869))<BR>(MARTINEZ, JUSTIN (9637))<BR>(MAZEWSKI, OSKAR (5082))<BR>(MORILLO, NOEMI (0805))<BR>(MULLIGAN, CHASE (8029))<BR>(OVALLE, FRANCHINY (0002))<BR>(PEREZ, CHRISTOPHER (8483))<BR>(SANTANA, ARLEEN (5292))<BR>(TEJEDA, RAYMOND (3879))<BR>(TENF, EMMANUEL (9263))<BR>(WATKINS, KAREEMA (4934))</td></tr><tr><td> 108-topic-05 </td><td>(ADAO, CHRISTOPHER (9459))<BR>(ALBERT, JONISA (6391))<BR>(CASTRO, DANIELA (2529))<BR>(DIAZ, CONSTANCE (8757))<BR>(DURAN, ESTEPHANI (4937))<BR>(ELEZOVIC, MICHAEL (3600))<BR>(EPPS, NICOLE (8634))<BR>(GEORGE, TRACEY (6236))<BR>(HUSSA, VASIN (5003))<BR>(LI, KELLY (5322))<BR>(MAZEWSKI, OSKAR (5082))<BR>(MORILLO, NOEMI (0805))<BR>(MULLIGAN, CHASE (8029))<BR>(OVALLE, FRANCHINY (0002))<BR>(PEREZ, CHRISTOPHER (8483))<BR>(SANTANA, ARLEEN (5292))<BR>(TEJEDA, RAYMOND (3879))<BR>(TENF, EMMANUEL (9263))<BR>(TROLLINGER, WHITNEY (7051))</td></tr><tr><td> 108-topic-06 </td><td>(EPPS, NICOLE (8634))<BR>(TENF, EMMANUEL (9263))<BR>(TROLLINGER, WHITNEY (7051))</td></tr><tr><td> 108-topic-07 </td><td>(ADAO, CHRISTOPHER (9459))<BR>(ALBERT, JONISA (6391))<BR>(GARCIA, RAFAEL (6309))<BR>(MORILLO, NOEMI (0805))<BR>(OVALLE, FRANCHINY (0002))</td></tr><tr><td> 108-topic-08 </td><td>(DIAZ, CONSTANCE (8757))<BR>(MORILLO, NOEMI (0805))<BR>(TENF, EMMANUEL (9263))</td></tr><tr><td> 108-topic-09 </td><td>(ADAO, CHRISTOPHER (9459))<BR>(DE_BARTOLO, MATTHEW (6253))<BR>(DIAZ, CONSTANCE (8757))<BR>(GARCIA, RAFAEL (6309))<BR>(HO, JIMMIE (5185))<BR>(RODRIGUEZ, ELVIS (9175))<BR>(TENF, EMMANUEL (9263))</td></tr><tr><td> 108-topic-10 </td><td>(ALBERT, JONISA (6391))<BR>(CASTRO, DANIELA (2529))<BR>(CHERILUS, DUNISE (1258))<BR>(DIAZ, CONSTANCE (8757))<BR>(DURAN, ESTEPHANI (4937))<BR>(ELEZOVIC, MICHAEL (3600))<BR>(EPPS, NICOLE (8634))<BR>(GARCIA, RAFAEL (6309))<BR>(GEORGE, TRACEY (6236))<BR>(HUSSA, VASIN (5003))<BR>(LI, KELLY (5322))<BR>(MARTINEZ, JUSTIN (9637))<BR>(MAZEWSKI, OSKAR (5082))<BR>(MORILLO, NOEMI (0805))<BR>(OVALLE, FRANCHINY (0002))<BR>(PEREZ, CHRISTOPHER (8483))<BR>(TENF, EMMANUEL (9263))<BR>(TROLLINGER, WHITNEY (7051))<BR>(WATKINS, KAREEMA (4934))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>