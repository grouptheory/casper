#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 241 - CALCULUS_1 (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>241</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>03</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MILLER_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>4692</td><td>DEJESUS, SHADE</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>7062</td><td>ESTEVEZ, MARIELVA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>2477</td><td>FLAGIELLO, ANGELO</td><td>241-topic-01<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>0790</td><td>GAETA, MARC</td><td>241-topic-01<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>4850</td><td>GRIER, ANGELA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>8066</td><td>HIDALGO, LYNETTE</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>0584</td><td>HUSSAIN, ALI</td><td>241-topic-04<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>0497</td><td>INGRAM, SANIKA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>8386</td><td>JIMENEZ, JOANNA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>7325</td><td>KARAN, ARLETT</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>8398</td><td>LENNON, CHRISTINA</td><td>Absent on the assessment test.</td></tr><tr><td>5653</td><td>LEROY, MARLA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5933</td><td>LEWIS, DAVIN</td><td>241-topic-07<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>0386</td><td>LINARES, DIORI</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>7495</td><td>LOPEZ, ZUSSY</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>3220</td><td>MEDINA, TERESA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>3995</td><td>MOHAN, CHRISTINE</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>9769</td><td>MOUNDRAS, JESSICA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-10</td></tr><tr><td>8306</td><td>NGUYEN, DANIEL</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>1306</td><td>RAMOS, DAMASO</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>2670</td><td>RODRIGUEZ, DENISE</td><td>241-topic-01<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>1071</td><td>SELIWONCHIC, ANNA</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5426</td><td>SMITH, ANDREW</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>1682</td><td>TES, TUAN</td><td>Absent on the assessment test.</td></tr><tr><td>2795</td><td>TORRES, CINDELL</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>1480</td><td>TREVINO, LIZETTE</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>1652</td><td>XIE, ZHIMIN</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 241-topic-01 </td><td>(DEJESUS, SHADE (4692))<BR>(ESTEVEZ, MARIELVA (7062))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAETA, MARC (0790))<BR>(GRIER, ANGELA (4850))<BR>(HIDALGO, LYNETTE (8066))<BR>(INGRAM, SANIKA (0497))<BR>(JIMENEZ, JOANNA (8386))<BR>(KARAN, ARLETT (7325))<BR>(LEROY, MARLA (5653))<BR>(LINARES, DIORI (0386))<BR>(LOPEZ, ZUSSY (7495))<BR>(MEDINA, TERESA (3220))<BR>(MOHAN, CHRISTINE (3995))<BR>(MOUNDRAS, JESSICA (9769))<BR>(NGUYEN, DANIEL (8306))<BR>(RAMOS, DAMASO (1306))<BR>(RODRIGUEZ, DENISE (2670))<BR>(SELIWONCHIC, ANNA (1071))<BR>(SMITH, ANDREW (5426))<BR>(TORRES, CINDELL (2795))<BR>(TREVINO, LIZETTE (1480))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-02 </td><td>(DEJESUS, SHADE (4692))<BR>(ESTEVEZ, MARIELVA (7062))<BR>(GRIER, ANGELA (4850))<BR>(INGRAM, SANIKA (0497))<BR>(JIMENEZ, JOANNA (8386))<BR>(KARAN, ARLETT (7325))<BR>(LEROY, MARLA (5653))<BR>(LINARES, DIORI (0386))<BR>(LOPEZ, ZUSSY (7495))<BR>(MEDINA, TERESA (3220))<BR>(MOHAN, CHRISTINE (3995))<BR>(MOUNDRAS, JESSICA (9769))<BR>(NGUYEN, DANIEL (8306))<BR>(RAMOS, DAMASO (1306))<BR>(TORRES, CINDELL (2795))<BR>(TREVINO, LIZETTE (1480))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-03 </td><td>(DEJESUS, SHADE (4692))<BR>(ESTEVEZ, MARIELVA (7062))<BR>(GRIER, ANGELA (4850))<BR>(HIDALGO, LYNETTE (8066))<BR>(KARAN, ARLETT (7325))<BR>(LEROY, MARLA (5653))<BR>(LOPEZ, ZUSSY (7495))<BR>(MOUNDRAS, JESSICA (9769))<BR>(RAMOS, DAMASO (1306))<BR>(SELIWONCHIC, ANNA (1071))<BR>(SMITH, ANDREW (5426))<BR>(TORRES, CINDELL (2795))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-04 </td><td>(FLAGIELLO, ANGELO (2477))<BR>(GAETA, MARC (0790))<BR>(HIDALGO, LYNETTE (8066))<BR>(HUSSAIN, ALI (0584))<BR>(INGRAM, SANIKA (0497))<BR>(LEROY, MARLA (5653))<BR>(LINARES, DIORI (0386))<BR>(LOPEZ, ZUSSY (7495))<BR>(MOUNDRAS, JESSICA (9769))<BR>(NGUYEN, DANIEL (8306))<BR>(RODRIGUEZ, DENISE (2670))<BR>(SELIWONCHIC, ANNA (1071))<BR>(TORRES, CINDELL (2795))<BR>(TREVINO, LIZETTE (1480))</td></tr><tr><td> 241-topic-05 </td><td>(DEJESUS, SHADE (4692))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAETA, MARC (0790))<BR>(GRIER, ANGELA (4850))<BR>(HIDALGO, LYNETTE (8066))<BR>(INGRAM, SANIKA (0497))<BR>(JIMENEZ, JOANNA (8386))<BR>(KARAN, ARLETT (7325))<BR>(LEROY, MARLA (5653))<BR>(LINARES, DIORI (0386))<BR>(LOPEZ, ZUSSY (7495))<BR>(MEDINA, TERESA (3220))<BR>(MOHAN, CHRISTINE (3995))<BR>(MOUNDRAS, JESSICA (9769))<BR>(NGUYEN, DANIEL (8306))<BR>(RAMOS, DAMASO (1306))<BR>(RODRIGUEZ, DENISE (2670))<BR>(SELIWONCHIC, ANNA (1071))<BR>(SMITH, ANDREW (5426))<BR>(TORRES, CINDELL (2795))<BR>(TREVINO, LIZETTE (1480))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-06 </td><td>(DEJESUS, SHADE (4692))<BR>(ESTEVEZ, MARIELVA (7062))<BR>(GAETA, MARC (0790))<BR>(GRIER, ANGELA (4850))<BR>(HIDALGO, LYNETTE (8066))<BR>(INGRAM, SANIKA (0497))<BR>(JIMENEZ, JOANNA (8386))<BR>(KARAN, ARLETT (7325))<BR>(LEROY, MARLA (5653))<BR>(LINARES, DIORI (0386))<BR>(LOPEZ, ZUSSY (7495))<BR>(MEDINA, TERESA (3220))<BR>(MOHAN, CHRISTINE (3995))<BR>(MOUNDRAS, JESSICA (9769))<BR>(NGUYEN, DANIEL (8306))<BR>(RAMOS, DAMASO (1306))<BR>(RODRIGUEZ, DENISE (2670))<BR>(SELIWONCHIC, ANNA (1071))<BR>(SMITH, ANDREW (5426))<BR>(TORRES, CINDELL (2795))<BR>(TREVINO, LIZETTE (1480))</td></tr><tr><td> 241-topic-07 </td><td>(DEJESUS, SHADE (4692))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GRIER, ANGELA (4850))<BR>(HIDALGO, LYNETTE (8066))<BR>(HUSSAIN, ALI (0584))<BR>(INGRAM, SANIKA (0497))<BR>(JIMENEZ, JOANNA (8386))<BR>(KARAN, ARLETT (7325))<BR>(LEROY, MARLA (5653))<BR>(LEWIS, DAVIN (5933))<BR>(LINARES, DIORI (0386))<BR>(LOPEZ, ZUSSY (7495))<BR>(MEDINA, TERESA (3220))<BR>(MOUNDRAS, JESSICA (9769))<BR>(RAMOS, DAMASO (1306))<BR>(SMITH, ANDREW (5426))<BR>(TORRES, CINDELL (2795))<BR>(TREVINO, LIZETTE (1480))</td></tr><tr><td> 241-topic-08 </td><td>(DEJESUS, SHADE (4692))<BR>(ESTEVEZ, MARIELVA (7062))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAETA, MARC (0790))<BR>(GRIER, ANGELA (4850))<BR>(HIDALGO, LYNETTE (8066))<BR>(HUSSAIN, ALI (0584))<BR>(INGRAM, SANIKA (0497))<BR>(JIMENEZ, JOANNA (8386))<BR>(KARAN, ARLETT (7325))<BR>(LEROY, MARLA (5653))<BR>(LINARES, DIORI (0386))<BR>(LOPEZ, ZUSSY (7495))<BR>(MEDINA, TERESA (3220))<BR>(MOHAN, CHRISTINE (3995))<BR>(MOUNDRAS, JESSICA (9769))<BR>(NGUYEN, DANIEL (8306))<BR>(RAMOS, DAMASO (1306))<BR>(RODRIGUEZ, DENISE (2670))<BR>(SELIWONCHIC, ANNA (1071))<BR>(SMITH, ANDREW (5426))<BR>(TORRES, CINDELL (2795))<BR>(TREVINO, LIZETTE (1480))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-09 </td><td>(DEJESUS, SHADE (4692))<BR>(ESTEVEZ, MARIELVA (7062))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAETA, MARC (0790))<BR>(GRIER, ANGELA (4850))<BR>(HIDALGO, LYNETTE (8066))<BR>(HUSSAIN, ALI (0584))<BR>(INGRAM, SANIKA (0497))<BR>(JIMENEZ, JOANNA (8386))<BR>(KARAN, ARLETT (7325))<BR>(LEROY, MARLA (5653))<BR>(LEWIS, DAVIN (5933))<BR>(LINARES, DIORI (0386))<BR>(LOPEZ, ZUSSY (7495))<BR>(MEDINA, TERESA (3220))<BR>(MOHAN, CHRISTINE (3995))<BR>(NGUYEN, DANIEL (8306))<BR>(RAMOS, DAMASO (1306))<BR>(RODRIGUEZ, DENISE (2670))<BR>(SELIWONCHIC, ANNA (1071))<BR>(SMITH, ANDREW (5426))<BR>(TORRES, CINDELL (2795))<BR>(TREVINO, LIZETTE (1480))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-10 </td><td>(DEJESUS, SHADE (4692))<BR>(ESTEVEZ, MARIELVA (7062))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAETA, MARC (0790))<BR>(GRIER, ANGELA (4850))<BR>(HIDALGO, LYNETTE (8066))<BR>(HUSSAIN, ALI (0584))<BR>(INGRAM, SANIKA (0497))<BR>(JIMENEZ, JOANNA (8386))<BR>(KARAN, ARLETT (7325))<BR>(LEROY, MARLA (5653))<BR>(LEWIS, DAVIN (5933))<BR>(LINARES, DIORI (0386))<BR>(LOPEZ, ZUSSY (7495))<BR>(MEDINA, TERESA (3220))<BR>(MOHAN, CHRISTINE (3995))<BR>(MOUNDRAS, JESSICA (9769))<BR>(NGUYEN, DANIEL (8306))<BR>(RAMOS, DAMASO (1306))<BR>(RODRIGUEZ, DENISE (2670))<BR>(SELIWONCHIC, ANNA (1071))<BR>(SMITH, ANDREW (5426))<BR>(TORRES, CINDELL (2795))<BR>(TREVINO, LIZETTE (1480))<BR>(XIE, ZHIMIN (1652))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>