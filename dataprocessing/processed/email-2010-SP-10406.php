#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>06</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>TREMBINSKA_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1442</td><td>BARDHI, BESARTA</td><td>Absent on the assessment test.</td></tr><tr><td>1944</td><td>BARNES, ASA-MENA</td><td>104-topic-03</td></tr><tr><td>6093</td><td>BRADLEY, JONATHAN</td><td>Absent on the assessment test.</td></tr><tr><td>2449</td><td>BUKHARI, UMULNISA</td><td>Absent on the assessment test.</td></tr><tr><td>5003</td><td>CALDWELL, JOHNATHAN</td><td>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-10</td></tr><tr><td>2462</td><td>COBENA, HUMBERTO</td><td>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4974</td><td>DE_LA_NUEZ, KEYLA</td><td>104-topic-06<BR>104-topic-08</td></tr><tr><td>0619</td><td>FELICIANO, DANIEL</td><td>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>9043</td><td>GREENE, EBONY</td><td>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3682</td><td>GRULLON, RAYSA</td><td>104-topic-06<BR>104-topic-10</td></tr><tr><td>2274</td><td>HABIB, NAZIAT</td><td>Absent on the assessment test.</td></tr><tr><td>4217</td><td>HARVEY, FAITH</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-06<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1931</td><td>HIRAYAMA, CHIHIRO</td><td>104-topic-02<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1325</td><td>ISLAM, MOHAMMED</td><td>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09</td></tr><tr><td>0951</td><td>JOHNSON, RACHEL</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>7621</td><td>JOHNSTON, ANDRE</td><td>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6838</td><td>JORDAN, JULIANA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6469</td><td>KATZ, REBECCA</td><td>104-topic-03<BR>104-topic-06<BR>104-topic-07</td></tr><tr><td>9403</td><td>LANZARONE, JOSEPH</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1418</td><td>MIRUKU, FATDRIT</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>8343</td><td>OLIVO, LIANNY</td><td>Absent on the assessment test.</td></tr><tr><td>2990</td><td>ORTIZ, MARYLOU</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2994</td><td>PEREZ, BIANCA</td><td>104-topic-02<BR>104-topic-06<BR>104-topic-08<BR>104-topic-09</td></tr><tr><td>8483</td><td>PEREZ, CHRISTOPHER</td><td>104-topic-07<BR>104-topic-08<BR>104-topic-09</td></tr><tr><td>2499</td><td>RODRIGUEZ, STEPHANIE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>3881</td><td>SMALL, KEMIE</td><td>104-topic-03<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08</td></tr><tr><td>3189</td><td>TAVAREZ, ALBERTO</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(HARVEY, FAITH (4217))<BR>(JOHNSON, RACHEL (0951))<BR>(JORDAN, JULIANA (6838))<BR>(LANZARONE, JOSEPH (9403))<BR>(MIRUKU, FATDRIT (1418))<BR>(ORTIZ, MARYLOU (2990))<BR>(RODRIGUEZ, STEPHANIE (2499))<BR>(TAVAREZ, ALBERTO (3189))</td></tr><tr><td> 104-topic-02 </td><td>(HARVEY, FAITH (4217))<BR>(HIRAYAMA, CHIHIRO (1931))<BR>(JOHNSON, RACHEL (0951))<BR>(JORDAN, JULIANA (6838))<BR>(LANZARONE, JOSEPH (9403))<BR>(MIRUKU, FATDRIT (1418))<BR>(PEREZ, BIANCA (2994))<BR>(RODRIGUEZ, STEPHANIE (2499))<BR>(TAVAREZ, ALBERTO (3189))</td></tr><tr><td> 104-topic-03 </td><td>(BARNES, ASA-MENA (1944))<BR>(CALDWELL, JOHNATHAN (5003))<BR>(COBENA, HUMBERTO (2462))<BR>(JOHNSTON, ANDRE (7621))<BR>(JORDAN, JULIANA (6838))<BR>(KATZ, REBECCA (6469))<BR>(ORTIZ, MARYLOU (2990))<BR>(RODRIGUEZ, STEPHANIE (2499))<BR>(SMALL, KEMIE (3881))<BR>(TAVAREZ, ALBERTO (3189))</td></tr><tr><td> 104-topic-04 </td><td>(COBENA, HUMBERTO (2462))<BR>(FELICIANO, DANIEL (0619))<BR>(JOHNSTON, ANDRE (7621))<BR>(JORDAN, JULIANA (6838))<BR>(LANZARONE, JOSEPH (9403))<BR>(TAVAREZ, ALBERTO (3189))</td></tr><tr><td> 104-topic-05 </td><td>(CALDWELL, JOHNATHAN (5003))<BR>(COBENA, HUMBERTO (2462))<BR>(FELICIANO, DANIEL (0619))<BR>(JOHNSON, RACHEL (0951))<BR>(JOHNSTON, ANDRE (7621))<BR>(JORDAN, JULIANA (6838))<BR>(LANZARONE, JOSEPH (9403))<BR>(ORTIZ, MARYLOU (2990))<BR>(RODRIGUEZ, STEPHANIE (2499))<BR>(TAVAREZ, ALBERTO (3189))</td></tr><tr><td> 104-topic-06 </td><td>(CALDWELL, JOHNATHAN (5003))<BR>(COBENA, HUMBERTO (2462))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(FELICIANO, DANIEL (0619))<BR>(GREENE, EBONY (9043))<BR>(GRULLON, RAYSA (3682))<BR>(HARVEY, FAITH (4217))<BR>(HIRAYAMA, CHIHIRO (1931))<BR>(ISLAM, MOHAMMED (1325))<BR>(JOHNSON, RACHEL (0951))<BR>(JOHNSTON, ANDRE (7621))<BR>(JORDAN, JULIANA (6838))<BR>(KATZ, REBECCA (6469))<BR>(LANZARONE, JOSEPH (9403))<BR>(ORTIZ, MARYLOU (2990))<BR>(PEREZ, BIANCA (2994))<BR>(RODRIGUEZ, STEPHANIE (2499))<BR>(SMALL, KEMIE (3881))<BR>(TAVAREZ, ALBERTO (3189))</td></tr><tr><td> 104-topic-07 </td><td>(COBENA, HUMBERTO (2462))<BR>(FELICIANO, DANIEL (0619))<BR>(GREENE, EBONY (9043))<BR>(HIRAYAMA, CHIHIRO (1931))<BR>(ISLAM, MOHAMMED (1325))<BR>(JOHNSON, RACHEL (0951))<BR>(JOHNSTON, ANDRE (7621))<BR>(JORDAN, JULIANA (6838))<BR>(KATZ, REBECCA (6469))<BR>(MIRUKU, FATDRIT (1418))<BR>(ORTIZ, MARYLOU (2990))<BR>(PEREZ, CHRISTOPHER (8483))<BR>(RODRIGUEZ, STEPHANIE (2499))<BR>(SMALL, KEMIE (3881))<BR>(TAVAREZ, ALBERTO (3189))</td></tr><tr><td> 104-topic-08 </td><td>(COBENA, HUMBERTO (2462))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(HARVEY, FAITH (4217))<BR>(ISLAM, MOHAMMED (1325))<BR>(JOHNSON, RACHEL (0951))<BR>(JOHNSTON, ANDRE (7621))<BR>(JORDAN, JULIANA (6838))<BR>(LANZARONE, JOSEPH (9403))<BR>(ORTIZ, MARYLOU (2990))<BR>(PEREZ, BIANCA (2994))<BR>(PEREZ, CHRISTOPHER (8483))<BR>(RODRIGUEZ, STEPHANIE (2499))<BR>(SMALL, KEMIE (3881))<BR>(TAVAREZ, ALBERTO (3189))</td></tr><tr><td> 104-topic-09 </td><td>(COBENA, HUMBERTO (2462))<BR>(GREENE, EBONY (9043))<BR>(HARVEY, FAITH (4217))<BR>(HIRAYAMA, CHIHIRO (1931))<BR>(ISLAM, MOHAMMED (1325))<BR>(JOHNSTON, ANDRE (7621))<BR>(JORDAN, JULIANA (6838))<BR>(LANZARONE, JOSEPH (9403))<BR>(ORTIZ, MARYLOU (2990))<BR>(PEREZ, BIANCA (2994))<BR>(PEREZ, CHRISTOPHER (8483))<BR>(TAVAREZ, ALBERTO (3189))</td></tr><tr><td> 104-topic-10 </td><td>(CALDWELL, JOHNATHAN (5003))<BR>(COBENA, HUMBERTO (2462))<BR>(FELICIANO, DANIEL (0619))<BR>(GREENE, EBONY (9043))<BR>(GRULLON, RAYSA (3682))<BR>(HARVEY, FAITH (4217))<BR>(HIRAYAMA, CHIHIRO (1931))<BR>(JOHNSON, RACHEL (0951))<BR>(JOHNSTON, ANDRE (7621))<BR>(JORDAN, JULIANA (6838))<BR>(LANZARONE, JOSEPH (9403))<BR>(MIRUKU, FATDRIT (1418))<BR>(ORTIZ, MARYLOU (2990))<BR>(RODRIGUEZ, STEPHANIE (2499))<BR>(TAVAREZ, ALBERTO (3189))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>