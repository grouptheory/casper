#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>301</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>ANDREU_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7371</td><td>APOLINARIO, JOHANNA</td><td>Absent on the assessment test.</td></tr><tr><td>1902</td><td>BAICAN, GHEORGHE</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-6</td></tr><tr><td>8766</td><td>BENJAMIN, GEORGE</td><td>Absent on the assessment test.</td></tr><tr><td>3457</td><td>BLAND, ANDREA</td><td>Absent on the assessment test.</td></tr><tr><td>9559</td><td>CHEEKS, SARICKA</td><td>Absent on the assessment test.</td></tr><tr><td>5310</td><td>COLETTI, AXEL</td><td>Absent on the assessment test.</td></tr><tr><td>2043</td><td>COLON, HEIDI</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>8603</td><td>DIAZ, DIANA</td><td>Absent on the assessment test.</td></tr><tr><td>7541</td><td>DIAZ, RICHARD</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4</td></tr><tr><td>8364</td><td>FERNANDEZ, LIANA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7</td></tr><tr><td>0625</td><td>HERNANDEZ, JUAN</td><td>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>3909</td><td>JACKSON, KATIMA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>2713</td><td>KORYAKOVTSEV, MIKHAIL</td><td>Absent on the assessment test.</td></tr><tr><td>8797</td><td>MANSO, MERCEDES</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-4<BR>108-topic-5<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>0265</td><td>MIAN, HUMA</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-9</td></tr><tr><td>5235</td><td>MOREIRA, GLENN</td><td>Absent on the assessment test.</td></tr><tr><td>1353</td><td>MUJO, ALEKSANDER</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4</td></tr><tr><td>0302</td><td>NERIS, LISANNY</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8</td></tr><tr><td>2622</td><td>PAVLYKOV, YURIY</td><td>Absent on the assessment test.</td></tr><tr><td>2963</td><td>PEREZ, EDWIN</td><td>Absent on the assessment test.</td></tr><tr><td>0103</td><td>SAUNDERS, SHARAI</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7</td></tr><tr><td>1188</td><td>STROTHER, JESSICA</td><td>Absent on the assessment test.</td></tr><tr><td>3173</td><td>TARAS, STEVEN</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-1 </td><td>(BAICAN, GHEORGHE (1902))<BR>(COLON, HEIDI (2043))<BR>(DIAZ, RICHARD (7541))<BR>(FERNANDEZ, LIANA (8364))<BR>(JACKSON, KATIMA (3909))<BR>(MANSO, MERCEDES (8797))<BR>(MIAN, HUMA (0265))<BR>(MUJO, ALEKSANDER (1353))<BR>(NERIS, LISANNY (0302))<BR>(SAUNDERS, SHARAI (0103))Absent on the assessment test.</td></tr><tr><td> 108-topic-10 </td><td>(BAICAN, GHEORGHE (1902))<BR>(COLON, HEIDI (2043))<BR>(FERNANDEZ, LIANA (8364))<BR>(JACKSON, KATIMA (3909))<BR>(MANSO, MERCEDES (8797))<BR>(NERIS, LISANNY (0302))<BR>(SAUNDERS, SHARAI (0103))Absent on the assessment test.</td></tr><tr><td> 108-topic-2 </td><td>(COLON, HEIDI (2043))<BR>(NERIS, LISANNY (0302))Absent on the assessment test.</td></tr><tr><td> 108-topic-3 </td><td>(BAICAN, GHEORGHE (1902))<BR>(COLON, HEIDI (2043))<BR>(DIAZ, RICHARD (7541))<BR>(FERNANDEZ, LIANA (8364))<BR>(HERNANDEZ, JUAN (0625))<BR>(JACKSON, KATIMA (3909))<BR>(MIAN, HUMA (0265))<BR>(MUJO, ALEKSANDER (1353))<BR>(NERIS, LISANNY (0302))<BR>(SAUNDERS, SHARAI (0103))Absent on the assessment test.</td></tr><tr><td> 108-topic-4 </td><td>(COLON, HEIDI (2043))<BR>(DIAZ, RICHARD (7541))<BR>(FERNANDEZ, LIANA (8364))<BR>(HERNANDEZ, JUAN (0625))<BR>(JACKSON, KATIMA (3909))<BR>(MANSO, MERCEDES (8797))<BR>(MIAN, HUMA (0265))<BR>(MUJO, ALEKSANDER (1353))<BR>(NERIS, LISANNY (0302))<BR>(SAUNDERS, SHARAI (0103))Absent on the assessment test.</td></tr><tr><td> 108-topic-5 </td><td>(COLON, HEIDI (2043))<BR>(FERNANDEZ, LIANA (8364))<BR>(HERNANDEZ, JUAN (0625))<BR>(JACKSON, KATIMA (3909))<BR>(MANSO, MERCEDES (8797))<BR>(MIAN, HUMA (0265))<BR>(NERIS, LISANNY (0302))<BR>(SAUNDERS, SHARAI (0103))Absent on the assessment test.</td></tr><tr><td> 108-topic-6 </td><td>(BAICAN, GHEORGHE (1902))<BR>(COLON, HEIDI (2043))<BR>(FERNANDEZ, LIANA (8364))<BR>(HERNANDEZ, JUAN (0625))<BR>(JACKSON, KATIMA (3909))<BR>(MIAN, HUMA (0265))<BR>(NERIS, LISANNY (0302))Absent on the assessment test.</td></tr><tr><td> 108-topic-7 </td><td>(FERNANDEZ, LIANA (8364))<BR>(JACKSON, KATIMA (3909))<BR>(NERIS, LISANNY (0302))<BR>(SAUNDERS, SHARAI (0103))Absent on the assessment test.</td></tr><tr><td> 108-topic-8 </td><td>(COLON, HEIDI (2043))<BR>(MANSO, MERCEDES (8797))<BR>(NERIS, LISANNY (0302))Absent on the assessment test.</td></tr><tr><td> 108-topic-9 </td><td>(COLON, HEIDI (2043))<BR>(JACKSON, KATIMA (3909))<BR>(MANSO, MERCEDES (8797))<BR>(MIAN, HUMA (0265))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>