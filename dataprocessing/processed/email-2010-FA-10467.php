#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>67</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>CHEN_T</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1711</td><td>AGUILAR, SUANNEY</td><td>104-topic-03<BR>104-topic-07</td></tr><tr><td>7433</td><td>AKLU, ANITA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5359</td><td>ASHMAN, KEISHA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>0354</td><td>BERNARD, NATASHA</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>1425</td><td>CABALLERO, VANESSA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5643</td><td>COELLO, JASMIN</td><td>Passed everything.</td></tr><tr><td>8958</td><td>FERNANDEZ, LILIBETH</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08</td></tr><tr><td>8323</td><td>GARCES, NEIVA</td><td>104-topic-06</td></tr><tr><td>7631</td><td>GURUNG, BHARAT</td><td>Passed everything.</td></tr><tr><td>1110</td><td>HAMILTON, BRIAN</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>1385</td><td>HOSSAIN, MARZANA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>9237</td><td>JEREMY, CARRIE</td><td>Passed everything.</td></tr><tr><td>9837</td><td>KORNEGAY, JHAVON</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-06<BR>104-topic-10</td></tr><tr><td>3946</td><td>LOYOLA, GLOLISET</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9332</td><td>MARATOS, MARIA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>4203</td><td>MARKGJONAJ, NICHOLAS</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6215</td><td>MOLINA, ULICE</td><td>Passed everything.</td></tr><tr><td>9883</td><td>PAULINO, CRISMEILYN</td><td>Passed everything.</td></tr><tr><td>8311</td><td>PEREZ, MIRIAM</td><td>104-topic-01<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>3519</td><td>PREDDIE, SHAUNA-GAYE</td><td>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5557</td><td>RAMOS, ALEX</td><td>Passed everything.</td></tr><tr><td>9896</td><td>RIVERA, FREDERICK</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5730</td><td>RODRIGUEZ, ANGELICA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4996</td><td>SABANDO, ANTHONY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5614</td><td>SANCE, WOODLYNN</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>0539</td><td>SHIRIAN, NICOLE</td><td>Passed everything.</td></tr><tr><td>5594</td><td>SIMON, NATASHA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>5107</td><td>ZANDANI, DEAN</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(AKLU, ANITA (7433))<BR>(ASHMAN, KEISHA (5359))<BR>(BERNARD, NATASHA (0354))<BR>(CABALLERO, VANESSA (1425))<BR>(FERNANDEZ, LILIBETH (8958))<BR>(HAMILTON, BRIAN (1110))<BR>(HOSSAIN, MARZANA (1385))<BR>(KORNEGAY, JHAVON (9837))<BR>(LOYOLA, GLOLISET (3946))<BR>(MARATOS, MARIA (9332))<BR>(MARKGJONAJ, NICHOLAS (4203))<BR>(PEREZ, MIRIAM (8311))<BR>(RIVERA, FREDERICK (9896))<BR>(RODRIGUEZ, ANGELICA (5730))<BR>(SABANDO, ANTHONY (4996))<BR>(SANCE, WOODLYNN (5614))<BR>(SIMON, NATASHA (5594))<BR>(ZANDANI, DEAN (5107))</td></tr><tr><td> 104-topic-02 </td><td>(ASHMAN, KEISHA (5359))<BR>(CABALLERO, VANESSA (1425))<BR>(FERNANDEZ, LILIBETH (8958))<BR>(HAMILTON, BRIAN (1110))<BR>(HOSSAIN, MARZANA (1385))<BR>(LOYOLA, GLOLISET (3946))<BR>(MARKGJONAJ, NICHOLAS (4203))<BR>(PREDDIE, SHAUNA-GAYE (3519))<BR>(RIVERA, FREDERICK (9896))<BR>(RODRIGUEZ, ANGELICA (5730))<BR>(SABANDO, ANTHONY (4996))</td></tr><tr><td> 104-topic-03 </td><td>(AGUILAR, SUANNEY (1711))<BR>(AKLU, ANITA (7433))<BR>(ASHMAN, KEISHA (5359))<BR>(CABALLERO, VANESSA (1425))<BR>(HAMILTON, BRIAN (1110))<BR>(HOSSAIN, MARZANA (1385))<BR>(LOYOLA, GLOLISET (3946))<BR>(MARATOS, MARIA (9332))<BR>(MARKGJONAJ, NICHOLAS (4203))<BR>(RODRIGUEZ, ANGELICA (5730))<BR>(SABANDO, ANTHONY (4996))<BR>(SANCE, WOODLYNN (5614))<BR>(SIMON, NATASHA (5594))<BR>(ZANDANI, DEAN (5107))</td></tr><tr><td> 104-topic-04 </td><td>(ASHMAN, KEISHA (5359))<BR>(CABALLERO, VANESSA (1425))<BR>(FERNANDEZ, LILIBETH (8958))<BR>(HAMILTON, BRIAN (1110))<BR>(HOSSAIN, MARZANA (1385))<BR>(KORNEGAY, JHAVON (9837))<BR>(LOYOLA, GLOLISET (3946))<BR>(MARKGJONAJ, NICHOLAS (4203))<BR>(SANCE, WOODLYNN (5614))<BR>(SIMON, NATASHA (5594))<BR>(ZANDANI, DEAN (5107))</td></tr><tr><td> 104-topic-05 </td><td>(ASHMAN, KEISHA (5359))<BR>(BERNARD, NATASHA (0354))<BR>(CABALLERO, VANESSA (1425))<BR>(FERNANDEZ, LILIBETH (8958))<BR>(HAMILTON, BRIAN (1110))<BR>(LOYOLA, GLOLISET (3946))<BR>(MARATOS, MARIA (9332))<BR>(MARKGJONAJ, NICHOLAS (4203))<BR>(PREDDIE, SHAUNA-GAYE (3519))<BR>(RODRIGUEZ, ANGELICA (5730))<BR>(SABANDO, ANTHONY (4996))<BR>(SANCE, WOODLYNN (5614))<BR>(SIMON, NATASHA (5594))<BR>(ZANDANI, DEAN (5107))</td></tr><tr><td> 104-topic-06 </td><td>(AKLU, ANITA (7433))<BR>(ASHMAN, KEISHA (5359))<BR>(BERNARD, NATASHA (0354))<BR>(CABALLERO, VANESSA (1425))<BR>(FERNANDEZ, LILIBETH (8958))<BR>(GARCES, NEIVA (8323))<BR>(HAMILTON, BRIAN (1110))<BR>(HOSSAIN, MARZANA (1385))<BR>(KORNEGAY, JHAVON (9837))<BR>(LOYOLA, GLOLISET (3946))<BR>(MARATOS, MARIA (9332))<BR>(MARKGJONAJ, NICHOLAS (4203))<BR>(PREDDIE, SHAUNA-GAYE (3519))<BR>(RIVERA, FREDERICK (9896))<BR>(RODRIGUEZ, ANGELICA (5730))<BR>(SABANDO, ANTHONY (4996))<BR>(SANCE, WOODLYNN (5614))<BR>(SIMON, NATASHA (5594))<BR>(ZANDANI, DEAN (5107))</td></tr><tr><td> 104-topic-07 </td><td>(AGUILAR, SUANNEY (1711))<BR>(AKLU, ANITA (7433))<BR>(ASHMAN, KEISHA (5359))<BR>(BERNARD, NATASHA (0354))<BR>(CABALLERO, VANESSA (1425))<BR>(FERNANDEZ, LILIBETH (8958))<BR>(HAMILTON, BRIAN (1110))<BR>(HOSSAIN, MARZANA (1385))<BR>(LOYOLA, GLOLISET (3946))<BR>(MARATOS, MARIA (9332))<BR>(MARKGJONAJ, NICHOLAS (4203))<BR>(PEREZ, MIRIAM (8311))<BR>(PREDDIE, SHAUNA-GAYE (3519))<BR>(RIVERA, FREDERICK (9896))<BR>(RODRIGUEZ, ANGELICA (5730))<BR>(SABANDO, ANTHONY (4996))<BR>(SANCE, WOODLYNN (5614))<BR>(SIMON, NATASHA (5594))<BR>(ZANDANI, DEAN (5107))</td></tr><tr><td> 104-topic-08 </td><td>(AKLU, ANITA (7433))<BR>(ASHMAN, KEISHA (5359))<BR>(BERNARD, NATASHA (0354))<BR>(FERNANDEZ, LILIBETH (8958))<BR>(HAMILTON, BRIAN (1110))<BR>(MARATOS, MARIA (9332))<BR>(MARKGJONAJ, NICHOLAS (4203))<BR>(SANCE, WOODLYNN (5614))<BR>(SIMON, NATASHA (5594))</td></tr><tr><td> 104-topic-09 </td><td>(AKLU, ANITA (7433))<BR>(ASHMAN, KEISHA (5359))<BR>(LOYOLA, GLOLISET (3946))<BR>(MARKGJONAJ, NICHOLAS (4203))<BR>(PREDDIE, SHAUNA-GAYE (3519))<BR>(RODRIGUEZ, ANGELICA (5730))<BR>(SABANDO, ANTHONY (4996))<BR>(ZANDANI, DEAN (5107))</td></tr><tr><td> 104-topic-10 </td><td>(AKLU, ANITA (7433))<BR>(ASHMAN, KEISHA (5359))<BR>(BERNARD, NATASHA (0354))<BR>(CABALLERO, VANESSA (1425))<BR>(HAMILTON, BRIAN (1110))<BR>(HOSSAIN, MARZANA (1385))<BR>(KORNEGAY, JHAVON (9837))<BR>(LOYOLA, GLOLISET (3946))<BR>(MARATOS, MARIA (9332))<BR>(MARKGJONAJ, NICHOLAS (4203))<BR>(PEREZ, MIRIAM (8311))<BR>(PREDDIE, SHAUNA-GAYE (3519))<BR>(RIVERA, FREDERICK (9896))<BR>(RODRIGUEZ, ANGELICA (5730))<BR>(SABANDO, ANTHONY (4996))<BR>(SANCE, WOODLYNN (5614))<BR>(SIMON, NATASHA (5594))<BR>(ZANDANI, DEAN (5107))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
