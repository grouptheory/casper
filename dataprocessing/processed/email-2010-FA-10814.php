#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>14</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>ANDREU_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7874</td><td>AQUINO, JONATHAN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7257</td><td>BARRETO, JEREMY</td><td>108-topic-03<BR>108-topic-06</td></tr><tr><td>6800</td><td>BATISTA, YONATHAN</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>8308</td><td>BERNAL, JOSE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>3660</td><td>CASTRO, ARIEL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>2409</td><td>CHOUCAIR, MUSTAFA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07</td></tr><tr><td>4369</td><td>DAUTI, BRUNO</td><td>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6837</td><td>EARLY, RAQUELLE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>6584</td><td>EWA, BEBUO</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>5908</td><td>GONZALEZ, LYNOSHKA</td><td>108-topic-01<BR>108-topic-06</td></tr><tr><td>8474</td><td>GUALPA, ILIANA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>7013</td><td>HERZOG, HENRY</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>5089</td><td>JOHNSON, EMELIA</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>5997</td><td>JUN, ALEXANDER</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-06</td></tr><tr><td>5998</td><td>KRONYAK, DENNIS</td><td>Passed everything.</td></tr><tr><td>8697</td><td>MALIK, NAQASH</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>8191</td><td>MARTE, ARLENY</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>9252</td><td>MELENDEZ, JOSE</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>0778</td><td>MESA, MARIA</td><td>Passed everything.</td></tr><tr><td>1082</td><td>MIRASHI, ELIZABETA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>5140</td><td>MUNIVE, LUIS</td><td>108-topic-03<BR>108-topic-06</td></tr><tr><td>2871</td><td>NEWMAN, HEATHER</td><td>Passed everything.</td></tr><tr><td>7178</td><td>O'LEARY, RYAN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>9985</td><td>OLANIYI, SEGUN</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>7205</td><td>PLACENCIA, KIMBERLY</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>5783</td><td>POLEZHAEVA, ALENA</td><td>Passed everything.</td></tr><tr><td>9471</td><td>POORAN, THANESHWAR</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>1176</td><td>SALVATORE, MIKE</td><td>Passed everything.</td></tr><tr><td>0627</td><td>SCHECHER, ANDREW</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09</td></tr><tr><td>5884</td><td>SENATUS, DAPHLYNE</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>4598</td><td>SINGH, SANDEEP</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>8543</td><td>TADROS, ANDREW</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>1222</td><td>TARAKHOVSKIY, YEVGENIY</td><td>Passed everything.</td></tr><tr><td>1305</td><td>WOO, YONG_HA</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(AQUINO, JONATHAN (7874))<BR>(BATISTA, YONATHAN (6800))<BR>(BERNAL, JOSE (8308))<BR>(CASTRO, ARIEL (3660))<BR>(CHOUCAIR, MUSTAFA (2409))<BR>(EARLY, RAQUELLE (6837))<BR>(GONZALEZ, LYNOSHKA (5908))<BR>(GUALPA, ILIANA (8474))<BR>(HERZOG, HENRY (7013))<BR>(JOHNSON, EMELIA (5089))<BR>(JUN, ALEXANDER (5997))<BR>(MALIK, NAQASH (8697))<BR>(MIRASHI, ELIZABETA (1082))<BR>(O'LEARY, RYAN (7178))<BR>(OLANIYI, SEGUN (9985))<BR>(PLACENCIA, KIMBERLY (7205))<BR>(TADROS, ANDREW (8543))</td></tr><tr><td> 108-topic-02 </td><td>(BATISTA, YONATHAN (6800))<BR>(EARLY, RAQUELLE (6837))<BR>(MALIK, NAQASH (8697))<BR>(MARTE, ARLENY (8191))<BR>(MELENDEZ, JOSE (9252))<BR>(OLANIYI, SEGUN (9985))<BR>(SCHECHER, ANDREW (0627))</td></tr><tr><td> 108-topic-03 </td><td>(AQUINO, JONATHAN (7874))<BR>(BARRETO, JEREMY (7257))<BR>(BATISTA, YONATHAN (6800))<BR>(BERNAL, JOSE (8308))<BR>(CASTRO, ARIEL (3660))<BR>(CHOUCAIR, MUSTAFA (2409))<BR>(EARLY, RAQUELLE (6837))<BR>(EWA, BEBUO (6584))<BR>(GUALPA, ILIANA (8474))<BR>(HERZOG, HENRY (7013))<BR>(JUN, ALEXANDER (5997))<BR>(MARTE, ARLENY (8191))<BR>(MELENDEZ, JOSE (9252))<BR>(MIRASHI, ELIZABETA (1082))<BR>(MUNIVE, LUIS (5140))<BR>(O'LEARY, RYAN (7178))<BR>(OLANIYI, SEGUN (9985))<BR>(POORAN, THANESHWAR (9471))<BR>(SCHECHER, ANDREW (0627))<BR>(SENATUS, DAPHLYNE (5884))<BR>(TADROS, ANDREW (8543))</td></tr><tr><td> 108-topic-04 </td><td>(AQUINO, JONATHAN (7874))<BR>(BATISTA, YONATHAN (6800))<BR>(BERNAL, JOSE (8308))<BR>(CASTRO, ARIEL (3660))<BR>(CHOUCAIR, MUSTAFA (2409))<BR>(EARLY, RAQUELLE (6837))<BR>(EWA, BEBUO (6584))<BR>(GUALPA, ILIANA (8474))<BR>(HERZOG, HENRY (7013))<BR>(JOHNSON, EMELIA (5089))<BR>(MALIK, NAQASH (8697))<BR>(MARTE, ARLENY (8191))<BR>(MELENDEZ, JOSE (9252))<BR>(MIRASHI, ELIZABETA (1082))<BR>(OLANIYI, SEGUN (9985))<BR>(PLACENCIA, KIMBERLY (7205))<BR>(POORAN, THANESHWAR (9471))<BR>(SCHECHER, ANDREW (0627))<BR>(SENATUS, DAPHLYNE (5884))<BR>(SINGH, SANDEEP (4598))<BR>(TADROS, ANDREW (8543))</td></tr><tr><td> 108-topic-05 </td><td>(AQUINO, JONATHAN (7874))<BR>(BATISTA, YONATHAN (6800))<BR>(BERNAL, JOSE (8308))<BR>(CASTRO, ARIEL (3660))<BR>(CHOUCAIR, MUSTAFA (2409))<BR>(EWA, BEBUO (6584))<BR>(HERZOG, HENRY (7013))<BR>(MALIK, NAQASH (8697))<BR>(MARTE, ARLENY (8191))<BR>(MELENDEZ, JOSE (9252))<BR>(MIRASHI, ELIZABETA (1082))<BR>(O'LEARY, RYAN (7178))<BR>(OLANIYI, SEGUN (9985))<BR>(PLACENCIA, KIMBERLY (7205))<BR>(POORAN, THANESHWAR (9471))<BR>(SCHECHER, ANDREW (0627))<BR>(SENATUS, DAPHLYNE (5884))<BR>(SINGH, SANDEEP (4598))<BR>(TADROS, ANDREW (8543))</td></tr><tr><td> 108-topic-06 </td><td>(BARRETO, JEREMY (7257))<BR>(BATISTA, YONATHAN (6800))<BR>(CASTRO, ARIEL (3660))<BR>(CHOUCAIR, MUSTAFA (2409))<BR>(DAUTI, BRUNO (4369))<BR>(EARLY, RAQUELLE (6837))<BR>(EWA, BEBUO (6584))<BR>(GONZALEZ, LYNOSHKA (5908))<BR>(JOHNSON, EMELIA (5089))<BR>(JUN, ALEXANDER (5997))<BR>(MALIK, NAQASH (8697))<BR>(MARTE, ARLENY (8191))<BR>(MELENDEZ, JOSE (9252))<BR>(MUNIVE, LUIS (5140))<BR>(OLANIYI, SEGUN (9985))<BR>(POORAN, THANESHWAR (9471))<BR>(SCHECHER, ANDREW (0627))<BR>(SENATUS, DAPHLYNE (5884))<BR>(SINGH, SANDEEP (4598))<BR>(TADROS, ANDREW (8543))</td></tr><tr><td> 108-topic-07 </td><td>(BATISTA, YONATHAN (6800))<BR>(CHOUCAIR, MUSTAFA (2409))<BR>(JOHNSON, EMELIA (5089))<BR>(SCHECHER, ANDREW (0627))</td></tr><tr><td> 108-topic-08 </td><td>(AQUINO, JONATHAN (7874))<BR>(GUALPA, ILIANA (8474))<BR>(MALIK, NAQASH (8697))</td></tr><tr><td> 108-topic-09 </td><td>(AQUINO, JONATHAN (7874))<BR>(DAUTI, BRUNO (4369))<BR>(HERZOG, HENRY (7013))<BR>(MALIK, NAQASH (8697))<BR>(MARTE, ARLENY (8191))<BR>(MELENDEZ, JOSE (9252))<BR>(MIRASHI, ELIZABETA (1082))<BR>(PLACENCIA, KIMBERLY (7205))<BR>(SCHECHER, ANDREW (0627))<BR>(SENATUS, DAPHLYNE (5884))</td></tr><tr><td> 108-topic-10 </td><td>(AQUINO, JONATHAN (7874))<BR>(BATISTA, YONATHAN (6800))<BR>(BERNAL, JOSE (8308))<BR>(CASTRO, ARIEL (3660))<BR>(DAUTI, BRUNO (4369))<BR>(EARLY, RAQUELLE (6837))<BR>(GUALPA, ILIANA (8474))<BR>(HERZOG, HENRY (7013))<BR>(JOHNSON, EMELIA (5089))<BR>(MALIK, NAQASH (8697))<BR>(MARTE, ARLENY (8191))<BR>(MIRASHI, ELIZABETA (1082))<BR>(O'LEARY, RYAN (7178))<BR>(OLANIYI, SEGUN (9985))<BR>(PLACENCIA, KIMBERLY (7205))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>