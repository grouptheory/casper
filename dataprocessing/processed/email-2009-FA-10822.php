#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>22</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>POLLAK_D</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7879</td><td>BARCIA, HENNESSY</td><td>Absent on the assessment test.</td></tr><tr><td>4351</td><td>BEGUM, POPY</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>1128</td><td>BONILLA, STEEFANEE</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>4190</td><td>CAMARINES, MELANIE</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4</td></tr><tr><td>5438</td><td>CARABALLO, LIDHANESYS</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>5633</td><td>CHAMBERS, NIKISHA</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>3851</td><td>CORTORREAL, PAMELA</td><td>Absent on the assessment test.</td></tr><tr><td>1475</td><td>GOMEZ, STACEY</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>7497</td><td>GRIFFIN, PARKER</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>3351</td><td>HURTADO, JUAN</td><td>Absent on the assessment test.</td></tr><tr><td>8977</td><td>ITURRES, HUBERT</td><td>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>8516</td><td>JONES, JONATHAN</td><td>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>2345</td><td>KUCZYNSKI, ADAM</td><td>108-topic-10<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>9815</td><td>LEE, JAMES</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7</td></tr><tr><td>6685</td><td>LEWIS, KEVIN</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>3978</td><td>LOPEZ, KRISTEN</td><td>108-topic-3<BR>108-topic-5</td></tr><tr><td>6938</td><td>MARTINEZ, JANE</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8</td></tr><tr><td>4683</td><td>MERLOS, JULISSA</td><td>Absent on the assessment test.</td></tr><tr><td>5850</td><td>MORRISON, ALICIA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7</td></tr><tr><td>0612</td><td>ORIVE, ALEXANDER</td><td>Absent on the assessment test.</td></tr><tr><td>3951</td><td>PENA, LILLIAN</td><td>108-topic-4<BR>108-topic-5</td></tr><tr><td>0729</td><td>PERDOMO, JENNIFER</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>0184</td><td>PERRINO, NICOLE</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>6636</td><td>PICHARDO, JOSE</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>8515</td><td>PROSPER, BIANCA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>8432</td><td>RAMOS, NICOLE</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7</td></tr><tr><td>1831</td><td>ROSA, JOSE</td><td>Absent on the assessment test.</td></tr><tr><td>1347</td><td>ROSARIO, GENESIS</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-8</td></tr><tr><td>3419</td><td>SANDOVAL, WILLIAM</td><td>108-topic-2<BR>108-topic-3<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>8318</td><td>SZYPULA, PATRYK</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>2817</td><td>URUCHIMA, SAMANTHA</td><td>108-topic-10<BR>108-topic-4</td></tr><tr><td>1390</td><td>VALDES, KRISTINA</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4</td></tr><tr><td>4270</td><td>WU, TONY</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-9</td></tr><tr><td>1086</td><td>ZAREMBA, ARIEL</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-1 </td><td>(BEGUM, POPY (4351))<BR>(BONILLA, STEEFANEE (1128))<BR>(CAMARINES, MELANIE (4190))<BR>(CARABALLO, LIDHANESYS (5438))<BR>(CHAMBERS, NIKISHA (5633))<BR>(GRIFFIN, PARKER (7497))<BR>(LEE, JAMES (9815))<BR>(LEWIS, KEVIN (6685))<BR>(MARTINEZ, JANE (6938))<BR>(MORRISON, ALICIA (5850))<BR>(PERDOMO, JENNIFER (0729))<BR>(PERRINO, NICOLE (0184))<BR>(PICHARDO, JOSE (6636))<BR>(PROSPER, BIANCA (8515))<BR>(ROSARIO, GENESIS (1347))<BR>(SZYPULA, PATRYK (8318))<BR>(VALDES, KRISTINA (1390))<BR>(WU, TONY (4270))<BR>(ZAREMBA, ARIEL (1086))</td></tr><tr><td> 108-topic-10 </td><td>(BEGUM, POPY (4351))<BR>(CARABALLO, LIDHANESYS (5438))<BR>(GOMEZ, STACEY (1475))<BR>(GRIFFIN, PARKER (7497))<BR>(KUCZYNSKI, ADAM (2345))<BR>(LEE, JAMES (9815))<BR>(LEWIS, KEVIN (6685))<BR>(MARTINEZ, JANE (6938))<BR>(MORRISON, ALICIA (5850))<BR>(PERDOMO, JENNIFER (0729))<BR>(PERRINO, NICOLE (0184))<BR>(PROSPER, BIANCA (8515))<BR>(RAMOS, NICOLE (8432))<BR>(ROSARIO, GENESIS (1347))<BR>(SZYPULA, PATRYK (8318))<BR>(URUCHIMA, SAMANTHA (2817))<BR>(ZAREMBA, ARIEL (1086))</td></tr><tr><td> 108-topic-2 </td><td>(GRIFFIN, PARKER (7497))<BR>(SANDOVAL, WILLIAM (3419))</td></tr><tr><td> 108-topic-3 </td><td>(BEGUM, POPY (4351))<BR>(BONILLA, STEEFANEE (1128))<BR>(CAMARINES, MELANIE (4190))<BR>(CHAMBERS, NIKISHA (5633))<BR>(GOMEZ, STACEY (1475))<BR>(GRIFFIN, PARKER (7497))<BR>(ITURRES, HUBERT (8977))<BR>(JONES, JONATHAN (8516))<BR>(LEE, JAMES (9815))<BR>(LEWIS, KEVIN (6685))<BR>(LOPEZ, KRISTEN (3978))<BR>(MARTINEZ, JANE (6938))<BR>(PERDOMO, JENNIFER (0729))<BR>(PERRINO, NICOLE (0184))<BR>(PICHARDO, JOSE (6636))<BR>(PROSPER, BIANCA (8515))<BR>(RAMOS, NICOLE (8432))<BR>(ROSARIO, GENESIS (1347))<BR>(SANDOVAL, WILLIAM (3419))<BR>(SZYPULA, PATRYK (8318))<BR>(VALDES, KRISTINA (1390))<BR>(WU, TONY (4270))<BR>(ZAREMBA, ARIEL (1086))</td></tr><tr><td> 108-topic-4 </td><td>(BEGUM, POPY (4351))<BR>(BONILLA, STEEFANEE (1128))<BR>(CAMARINES, MELANIE (4190))<BR>(CARABALLO, LIDHANESYS (5438))<BR>(CHAMBERS, NIKISHA (5633))<BR>(GOMEZ, STACEY (1475))<BR>(GRIFFIN, PARKER (7497))<BR>(ITURRES, HUBERT (8977))<BR>(JONES, JONATHAN (8516))<BR>(KUCZYNSKI, ADAM (2345))<BR>(LEE, JAMES (9815))<BR>(LEWIS, KEVIN (6685))<BR>(MARTINEZ, JANE (6938))<BR>(MORRISON, ALICIA (5850))<BR>(PENA, LILLIAN (3951))<BR>(PERDOMO, JENNIFER (0729))<BR>(PERRINO, NICOLE (0184))<BR>(PICHARDO, JOSE (6636))<BR>(PROSPER, BIANCA (8515))<BR>(RAMOS, NICOLE (8432))<BR>(ROSARIO, GENESIS (1347))<BR>(SZYPULA, PATRYK (8318))<BR>(URUCHIMA, SAMANTHA (2817))<BR>(VALDES, KRISTINA (1390))<BR>(WU, TONY (4270))<BR>(ZAREMBA, ARIEL (1086))</td></tr><tr><td> 108-topic-5 </td><td>(BONILLA, STEEFANEE (1128))<BR>(CARABALLO, LIDHANESYS (5438))<BR>(CHAMBERS, NIKISHA (5633))<BR>(GOMEZ, STACEY (1475))<BR>(GRIFFIN, PARKER (7497))<BR>(ITURRES, HUBERT (8977))<BR>(JONES, JONATHAN (8516))<BR>(KUCZYNSKI, ADAM (2345))<BR>(LEE, JAMES (9815))<BR>(LEWIS, KEVIN (6685))<BR>(LOPEZ, KRISTEN (3978))<BR>(MARTINEZ, JANE (6938))<BR>(MORRISON, ALICIA (5850))<BR>(PENA, LILLIAN (3951))<BR>(PERDOMO, JENNIFER (0729))<BR>(PERRINO, NICOLE (0184))<BR>(PICHARDO, JOSE (6636))<BR>(PROSPER, BIANCA (8515))<BR>(RAMOS, NICOLE (8432))<BR>(ROSARIO, GENESIS (1347))<BR>(SANDOVAL, WILLIAM (3419))<BR>(SZYPULA, PATRYK (8318))<BR>(WU, TONY (4270))<BR>(ZAREMBA, ARIEL (1086))</td></tr><tr><td> 108-topic-6 </td><td>(BEGUM, POPY (4351))<BR>(CARABALLO, LIDHANESYS (5438))<BR>(GRIFFIN, PARKER (7497))<BR>(ITURRES, HUBERT (8977))<BR>(LEE, JAMES (9815))<BR>(LEWIS, KEVIN (6685))<BR>(MARTINEZ, JANE (6938))<BR>(PERRINO, NICOLE (0184))<BR>(SANDOVAL, WILLIAM (3419))<BR>(WU, TONY (4270))</td></tr><tr><td> 108-topic-7 </td><td>(CARABALLO, LIDHANESYS (5438))<BR>(CHAMBERS, NIKISHA (5633))<BR>(JONES, JONATHAN (8516))<BR>(LEE, JAMES (9815))<BR>(LEWIS, KEVIN (6685))<BR>(MORRISON, ALICIA (5850))<BR>(RAMOS, NICOLE (8432))</td></tr><tr><td> 108-topic-8 </td><td>(BEGUM, POPY (4351))<BR>(GOMEZ, STACEY (1475))<BR>(GRIFFIN, PARKER (7497))<BR>(MARTINEZ, JANE (6938))<BR>(ROSARIO, GENESIS (1347))</td></tr><tr><td> 108-topic-9 </td><td>(BEGUM, POPY (4351))<BR>(CARABALLO, LIDHANESYS (5438))<BR>(CHAMBERS, NIKISHA (5633))<BR>(GOMEZ, STACEY (1475))<BR>(GRIFFIN, PARKER (7497))<BR>(JONES, JONATHAN (8516))<BR>(LEWIS, KEVIN (6685))<BR>(WU, TONY (4270))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
