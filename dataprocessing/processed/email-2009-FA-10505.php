#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>05</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SHAMUILOVA_R</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>2200</td><td>BALYASNY, MONICA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8<BR>105-topic-9</td></tr><tr><td>5072</td><td>BENNETT, KEITH</td><td>105-topic-10<BR>105-topic-2<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>9924</td><td>BOURDIERD, RAFAEL</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>1390</td><td>CANO, KATHERINE</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>9011</td><td>DALE, TRACY-ANN</td><td>105-topic-4<BR>105-topic-5</td></tr><tr><td>3825</td><td>DAVE, KHUSBU</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-4<BR>105-topic-6</td></tr><tr><td>3483</td><td>DICAMILLO, THOMAS</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>3211</td><td>FRECK, PAUL</td><td>Absent on the assessment test.</td></tr><tr><td>5003</td><td>GARCIA, EDWARD</td><td>105-topic-5<BR>105-topic-7</td></tr><tr><td>1876</td><td>GOMEZ, LIZBETH</td><td>Absent on the assessment test.</td></tr><tr><td>1829</td><td>GUCCIONE, NICHOLAS</td><td>105-topic-10<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>3398</td><td>HECTOR, DEBORAH</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>0754</td><td>HIDALGO, CINDY</td><td>105-topic-10<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>4470</td><td>JIMENEZ, JOSHUA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>4497</td><td>KERR, KELLY</td><td>105-topic-10<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>8335</td><td>LIU, JIANHUA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-8</td></tr><tr><td>9536</td><td>MADORSKY, DMITRY</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>4324</td><td>MERCEDES, MARCY</td><td>105-topic-10<BR>105-topic-5<BR>105-topic-7</td></tr><tr><td>3221</td><td>OLIVO, YULIANI</td><td>105-topic-5<BR>105-topic-6</td></tr><tr><td>4189</td><td>PENA, COVALKY</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>6401</td><td>PORTER, DANIELLE</td><td>Absent on the assessment test.</td></tr><tr><td>5610</td><td>REID, LATANYA</td><td>Passed everything.</td></tr><tr><td>3355</td><td>REILLY, SEAN</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-7</td></tr><tr><td>4673</td><td>RESTREPO, MARIANO</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>7280</td><td>RODRIGUES, CANDACY</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>4682</td><td>ROSA, NIKO</td><td>105-topic-1<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>7322</td><td>RYMAN, KERRI</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8<BR>105-topic-9</td></tr><tr><td>1139</td><td>SANTANA, RAFAEL</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>2826</td><td>SOSA, CHASITY</td><td>105-topic-2<BR>105-topic-5<BR>105-topic-7<BR>105-topic-8<BR>105-topic-9</td></tr><tr><td>8302</td><td>ST_VICTOR, CARL</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>5876</td><td>ZAVALETA, JANE</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>5291</td><td>ZELAYA, STEPHANIE</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-1 </td><td>(BALYASNY, MONICA (2200))<BR>(BOURDIERD, RAFAEL (9924))<BR>(CANO, KATHERINE (1390))<BR>(DAVE, KHUSBU (3825))<BR>(DICAMILLO, THOMAS (3483))<BR>(HECTOR, DEBORAH (3398))<BR>(JIMENEZ, JOSHUA (4470))<BR>(LIU, JIANHUA (8335))<BR>(MADORSKY, DMITRY (9536))<BR>(PENA, COVALKY (4189))<BR>(REILLY, SEAN (3355))<BR>(RESTREPO, MARIANO (4673))<BR>(RODRIGUES, CANDACY (7280))<BR>(ROSA, NIKO (4682))<BR>(RYMAN, KERRI (7322))<BR>(SANTANA, RAFAEL (1139))<BR>(ST_VICTOR, CARL (8302))<BR>(ZAVALETA, JANE (5876))Absent on the assessment test.</td></tr><tr><td> 105-topic-10 </td><td>(BALYASNY, MONICA (2200))<BR>(BENNETT, KEITH (5072))<BR>(BOURDIERD, RAFAEL (9924))<BR>(CANO, KATHERINE (1390))<BR>(DAVE, KHUSBU (3825))<BR>(DICAMILLO, THOMAS (3483))<BR>(GUCCIONE, NICHOLAS (1829))<BR>(HECTOR, DEBORAH (3398))<BR>(HIDALGO, CINDY (0754))<BR>(JIMENEZ, JOSHUA (4470))<BR>(KERR, KELLY (4497))<BR>(LIU, JIANHUA (8335))<BR>(MADORSKY, DMITRY (9536))<BR>(MERCEDES, MARCY (4324))<BR>(PENA, COVALKY (4189))<BR>(REILLY, SEAN (3355))<BR>(RODRIGUES, CANDACY (7280))<BR>(RYMAN, KERRI (7322))<BR>(SANTANA, RAFAEL (1139))<BR>(ST_VICTOR, CARL (8302))<BR>(ZAVALETA, JANE (5876))Absent on the assessment test.</td></tr><tr><td> 105-topic-2 </td><td>(BALYASNY, MONICA (2200))<BR>(BENNETT, KEITH (5072))<BR>(BOURDIERD, RAFAEL (9924))<BR>(LIU, JIANHUA (8335))<BR>(MADORSKY, DMITRY (9536))<BR>(REILLY, SEAN (3355))<BR>(RESTREPO, MARIANO (4673))<BR>(RODRIGUES, CANDACY (7280))<BR>(RYMAN, KERRI (7322))<BR>(SOSA, CHASITY (2826))Absent on the assessment test.</td></tr><tr><td> 105-topic-3 </td><td>(BALYASNY, MONICA (2200))<BR>(BOURDIERD, RAFAEL (9924))<BR>(DICAMILLO, THOMAS (3483))<BR>(GUCCIONE, NICHOLAS (1829))<BR>(RESTREPO, MARIANO (4673))<BR>(RYMAN, KERRI (7322))<BR>(ZAVALETA, JANE (5876))Absent on the assessment test.</td></tr><tr><td> 105-topic-4 </td><td>(BALYASNY, MONICA (2200))<BR>(CANO, KATHERINE (1390))<BR>(DALE, TRACY-ANN (9011))<BR>(DAVE, KHUSBU (3825))<BR>(JIMENEZ, JOSHUA (4470))<BR>(LIU, JIANHUA (8335))<BR>(MADORSKY, DMITRY (9536))<BR>(ROSA, NIKO (4682))<BR>(RYMAN, KERRI (7322))<BR>(ST_VICTOR, CARL (8302))<BR>(ZAVALETA, JANE (5876))Absent on the assessment test.</td></tr><tr><td> 105-topic-5 </td><td>(BALYASNY, MONICA (2200))<BR>(BENNETT, KEITH (5072))<BR>(BOURDIERD, RAFAEL (9924))<BR>(CANO, KATHERINE (1390))<BR>(DALE, TRACY-ANN (9011))<BR>(DICAMILLO, THOMAS (3483))<BR>(GARCIA, EDWARD (5003))<BR>(GUCCIONE, NICHOLAS (1829))<BR>(HECTOR, DEBORAH (3398))<BR>(HIDALGO, CINDY (0754))<BR>(JIMENEZ, JOSHUA (4470))<BR>(KERR, KELLY (4497))<BR>(LIU, JIANHUA (8335))<BR>(MADORSKY, DMITRY (9536))<BR>(MERCEDES, MARCY (4324))<BR>(OLIVO, YULIANI (3221))<BR>(PENA, COVALKY (4189))<BR>(RESTREPO, MARIANO (4673))<BR>(RODRIGUES, CANDACY (7280))<BR>(ROSA, NIKO (4682))<BR>(RYMAN, KERRI (7322))<BR>(SANTANA, RAFAEL (1139))<BR>(SOSA, CHASITY (2826))<BR>(ST_VICTOR, CARL (8302))<BR>(ZAVALETA, JANE (5876))Absent on the assessment test.</td></tr><tr><td> 105-topic-6 </td><td>(BALYASNY, MONICA (2200))<BR>(BENNETT, KEITH (5072))<BR>(BOURDIERD, RAFAEL (9924))<BR>(CANO, KATHERINE (1390))<BR>(DAVE, KHUSBU (3825))<BR>(DICAMILLO, THOMAS (3483))<BR>(GUCCIONE, NICHOLAS (1829))<BR>(HECTOR, DEBORAH (3398))<BR>(HIDALGO, CINDY (0754))<BR>(JIMENEZ, JOSHUA (4470))<BR>(KERR, KELLY (4497))<BR>(LIU, JIANHUA (8335))<BR>(MADORSKY, DMITRY (9536))<BR>(OLIVO, YULIANI (3221))<BR>(PENA, COVALKY (4189))<BR>(RESTREPO, MARIANO (4673))<BR>(RODRIGUES, CANDACY (7280))<BR>(RYMAN, KERRI (7322))<BR>(SANTANA, RAFAEL (1139))<BR>(ST_VICTOR, CARL (8302))<BR>(ZAVALETA, JANE (5876))Absent on the assessment test.</td></tr><tr><td> 105-topic-7 </td><td>(BALYASNY, MONICA (2200))<BR>(BOURDIERD, RAFAEL (9924))<BR>(CANO, KATHERINE (1390))<BR>(DICAMILLO, THOMAS (3483))<BR>(GARCIA, EDWARD (5003))<BR>(MADORSKY, DMITRY (9536))<BR>(MERCEDES, MARCY (4324))<BR>(PENA, COVALKY (4189))<BR>(REILLY, SEAN (3355))<BR>(RESTREPO, MARIANO (4673))<BR>(RYMAN, KERRI (7322))<BR>(SOSA, CHASITY (2826))Absent on the assessment test.</td></tr><tr><td> 105-topic-8 </td><td>(BALYASNY, MONICA (2200))<BR>(LIU, JIANHUA (8335))<BR>(RYMAN, KERRI (7322))<BR>(SOSA, CHASITY (2826))Absent on the assessment test.</td></tr><tr><td> 105-topic-9 </td><td>(BALYASNY, MONICA (2200))<BR>(CANO, KATHERINE (1390))<BR>(MADORSKY, DMITRY (9536))<BR>(RYMAN, KERRI (7322))<BR>(SOSA, CHASITY (2826))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
