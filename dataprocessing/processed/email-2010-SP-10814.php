#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>14</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>ANDREU_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3018</td><td>ALI, ARIF</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>6858</td><td>ALVAREZ, GILBERT</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>8133</td><td>ANCONE, BRITTANY</td><td>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>3778</td><td>BAPTISTE, ALICIA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-08</td></tr><tr><td>6435</td><td>BITTS, DANIEL</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>6406</td><td>BODDEN, TANIA</td><td>Absent on the assessment test.</td></tr><tr><td>0529</td><td>BROWN, THOMAS</td><td>108-topic-03<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>1399</td><td>BURNETT, DONNA</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>1953</td><td>DAVIS, JOHNNIE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>4592</td><td>FIGUEROA, CHERISSE</td><td>Absent on the assessment test.</td></tr><tr><td>3261</td><td>FRIAS, CHRISTELIS</td><td>Absent on the assessment test.</td></tr><tr><td>7635</td><td>GATES, PAUL</td><td>Absent on the assessment test.</td></tr><tr><td>3611</td><td>GUERRERO, GLADYS</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>4150</td><td>HASBUN, JEROMY</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>5635</td><td>HERNANDEZ, KATHERINE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>7409</td><td>JONES, RONALD</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>8404</td><td>LEE, SUNG</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>9369</td><td>NOLASCO, CRISTHIAN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>1273</td><td>OSBORNE, SARAI</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2469</td><td>PAULO-MOLINA, AIDA</td><td>Absent on the assessment test.</td></tr><tr><td>4171</td><td>PIAZZA, THOMAS</td><td>Absent on the assessment test.</td></tr><tr><td>3438</td><td>PINILLA, JUAN_CARLOS</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>6418</td><td>SOOKHAI, VIDYA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08</td></tr><tr><td>4708</td><td>TAVAREZ, GENESIS</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>1651</td><td>VARGAS, BIENVENIDO</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>9500</td><td>VICTORY, DIMITRIUS</td><td>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08</td></tr><tr><td>3520</td><td>VILLANUEVA, CATHERINE</td><td>108-topic-03<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7879</td><td>WONE, NDEYE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(ALI, ARIF (3018))<BR>(ALVAREZ, GILBERT (6858))<BR>(BAPTISTE, ALICIA (3778))<BR>(DAVIS, JOHNNIE (1953))<BR>(GUERRERO, GLADYS (3611))<BR>(HASBUN, JEROMY (4150))<BR>(HERNANDEZ, KATHERINE (5635))<BR>(NOLASCO, CRISTHIAN (9369))<BR>(OSBORNE, SARAI (1273))<BR>(PINILLA, JUAN_CARLOS (3438))<BR>(SOOKHAI, VIDYA (6418))<BR>(TAVAREZ, GENESIS (4708))<BR>(VARGAS, BIENVENIDO (1651))<BR>(WONE, NDEYE (7879))</td></tr><tr><td> 108-topic-02 </td><td>(ALI, ARIF (3018))<BR>(BITTS, DANIEL (6435))<BR>(DAVIS, JOHNNIE (1953))<BR>(GUERRERO, GLADYS (3611))<BR>(HASBUN, JEROMY (4150))<BR>(LEE, SUNG (8404))<BR>(PINILLA, JUAN_CARLOS (3438))<BR>(SOOKHAI, VIDYA (6418))<BR>(TAVAREZ, GENESIS (4708))<BR>(VICTORY, DIMITRIUS (9500))<BR>(WONE, NDEYE (7879))</td></tr><tr><td> 108-topic-03 </td><td>(ALI, ARIF (3018))<BR>(ALVAREZ, GILBERT (6858))<BR>(BAPTISTE, ALICIA (3778))<BR>(BITTS, DANIEL (6435))<BR>(BROWN, THOMAS (0529))<BR>(BURNETT, DONNA (1399))<BR>(DAVIS, JOHNNIE (1953))<BR>(HASBUN, JEROMY (4150))<BR>(HERNANDEZ, KATHERINE (5635))<BR>(JONES, RONALD (7409))<BR>(LEE, SUNG (8404))<BR>(NOLASCO, CRISTHIAN (9369))<BR>(OSBORNE, SARAI (1273))<BR>(PINILLA, JUAN_CARLOS (3438))<BR>(TAVAREZ, GENESIS (4708))<BR>(VARGAS, BIENVENIDO (1651))<BR>(VILLANUEVA, CATHERINE (3520))<BR>(WONE, NDEYE (7879))</td></tr><tr><td> 108-topic-04 </td><td>(ALI, ARIF (3018))<BR>(ALVAREZ, GILBERT (6858))<BR>(BAPTISTE, ALICIA (3778))<BR>(BITTS, DANIEL (6435))<BR>(BURNETT, DONNA (1399))<BR>(DAVIS, JOHNNIE (1953))<BR>(GUERRERO, GLADYS (3611))<BR>(HASBUN, JEROMY (4150))<BR>(HERNANDEZ, KATHERINE (5635))<BR>(JONES, RONALD (7409))<BR>(NOLASCO, CRISTHIAN (9369))<BR>(OSBORNE, SARAI (1273))<BR>(PINILLA, JUAN_CARLOS (3438))<BR>(SOOKHAI, VIDYA (6418))<BR>(TAVAREZ, GENESIS (4708))<BR>(VARGAS, BIENVENIDO (1651))<BR>(VICTORY, DIMITRIUS (9500))<BR>(WONE, NDEYE (7879))</td></tr><tr><td> 108-topic-05 </td><td>(ALI, ARIF (3018))<BR>(ALVAREZ, GILBERT (6858))<BR>(BITTS, DANIEL (6435))<BR>(BROWN, THOMAS (0529))<BR>(BURNETT, DONNA (1399))<BR>(DAVIS, JOHNNIE (1953))<BR>(GUERRERO, GLADYS (3611))<BR>(HASBUN, JEROMY (4150))<BR>(HERNANDEZ, KATHERINE (5635))<BR>(JONES, RONALD (7409))<BR>(LEE, SUNG (8404))<BR>(NOLASCO, CRISTHIAN (9369))<BR>(OSBORNE, SARAI (1273))<BR>(PINILLA, JUAN_CARLOS (3438))<BR>(SOOKHAI, VIDYA (6418))<BR>(VARGAS, BIENVENIDO (1651))<BR>(VICTORY, DIMITRIUS (9500))<BR>(VILLANUEVA, CATHERINE (3520))<BR>(WONE, NDEYE (7879))</td></tr><tr><td> 108-topic-06 </td><td>(ALI, ARIF (3018))<BR>(ALVAREZ, GILBERT (6858))<BR>(ANCONE, BRITTANY (8133))<BR>(BITTS, DANIEL (6435))<BR>(BROWN, THOMAS (0529))<BR>(BURNETT, DONNA (1399))<BR>(DAVIS, JOHNNIE (1953))<BR>(HASBUN, JEROMY (4150))<BR>(HERNANDEZ, KATHERINE (5635))<BR>(NOLASCO, CRISTHIAN (9369))<BR>(PINILLA, JUAN_CARLOS (3438))<BR>(VARGAS, BIENVENIDO (1651))<BR>(VILLANUEVA, CATHERINE (3520))<BR>(WONE, NDEYE (7879))</td></tr><tr><td> 108-topic-07 </td><td>(ALI, ARIF (3018))<BR>(ALVAREZ, GILBERT (6858))<BR>(ANCONE, BRITTANY (8133))<BR>(DAVIS, JOHNNIE (1953))<BR>(GUERRERO, GLADYS (3611))<BR>(HASBUN, JEROMY (4150))<BR>(NOLASCO, CRISTHIAN (9369))<BR>(TAVAREZ, GENESIS (4708))<BR>(VARGAS, BIENVENIDO (1651))<BR>(VILLANUEVA, CATHERINE (3520))</td></tr><tr><td> 108-topic-08 </td><td>(ANCONE, BRITTANY (8133))<BR>(BAPTISTE, ALICIA (3778))<BR>(HASBUN, JEROMY (4150))<BR>(SOOKHAI, VIDYA (6418))<BR>(VARGAS, BIENVENIDO (1651))<BR>(VICTORY, DIMITRIUS (9500))<BR>(VILLANUEVA, CATHERINE (3520))</td></tr><tr><td> 108-topic-09 </td><td>(ANCONE, BRITTANY (8133))<BR>(BROWN, THOMAS (0529))<BR>(DAVIS, JOHNNIE (1953))<BR>(LEE, SUNG (8404))<BR>(NOLASCO, CRISTHIAN (9369))<BR>(OSBORNE, SARAI (1273))<BR>(VILLANUEVA, CATHERINE (3520))</td></tr><tr><td> 108-topic-10 </td><td>(ALI, ARIF (3018))<BR>(ALVAREZ, GILBERT (6858))<BR>(ANCONE, BRITTANY (8133))<BR>(BITTS, DANIEL (6435))<BR>(DAVIS, JOHNNIE (1953))<BR>(GUERRERO, GLADYS (3611))<BR>(HASBUN, JEROMY (4150))<BR>(HERNANDEZ, KATHERINE (5635))<BR>(JONES, RONALD (7409))<BR>(LEE, SUNG (8404))<BR>(NOLASCO, CRISTHIAN (9369))<BR>(OSBORNE, SARAI (1273))<BR>(PINILLA, JUAN_CARLOS (3438))<BR>(TAVAREZ, GENESIS (4708))<BR>(VARGAS, BIENVENIDO (1651))<BR>(VILLANUEVA, CATHERINE (3520))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>