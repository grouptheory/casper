#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 141 - PRE-CALCULUS (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>141</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>08</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>GEORGATOS_K</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>2061</td><td>ALAMO, MICHELLE</td><td>Passed everything.</td></tr><tr><td>7262</td><td>ALVAREZ, BRIAN</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>9224</td><td>BAEZ, ROSEMARY</td><td>141-topic-01<BR>141-topic-03<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>6624</td><td>CASTELLANO, ELIANA</td><td>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>2946</td><td>DEVOE, CYNTHIA</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>2719</td><td>DOMINGUEZ, EMILY</td><td>Passed everything.</td></tr><tr><td>8266</td><td>FELIX, THYBEL</td><td>141-topic-08<BR>141-topic-09</td></tr><tr><td>9803</td><td>FRAZIER, JESSICA</td><td>141-topic-01<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>2019</td><td>FREDERICKS, DEBORAH</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>1178</td><td>GONZALEZ, YULISSA</td><td>141-topic-10</td></tr><tr><td>6275</td><td>GREGORY, NAUDIA</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>1166</td><td>HIMME, MELISSA</td><td>141-topic-01<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>4657</td><td>HOLMES-COLON, CRYSTALRAE</td><td>141-topic-02<BR>141-topic-03<BR>141-topic-05<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>8944</td><td>IBNE, ERFAN</td><td>141-topic-04<BR>141-topic-05<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>4047</td><td>JACKSON, KALAMESHA</td><td>Absent on the assessment test.</td></tr><tr><td>2928</td><td>JAQUEZ, MIOZOTY</td><td>Passed everything.</td></tr><tr><td>6657</td><td>JOSEPH, BRUNO</td><td>141-topic-01<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>7224</td><td>LEONG, BRINA</td><td>141-topic-01<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08</td></tr><tr><td>7747</td><td>LIN, DAVID</td><td>141-topic-05<BR>141-topic-08<BR>141-topic-10</td></tr><tr><td>7655</td><td>NARVAEZ, DIANA</td><td>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>0300</td><td>OBANDO, ADRIANA</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>2667</td><td>PEREZ, YSNALDO</td><td>141-topic-07<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>8866</td><td>PETRICK, STANISLAV</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>6720</td><td>REID-KNIGHT, LASHANA</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>5719</td><td>RUAN, FENG_YANG</td><td>141-topic-01<BR>141-topic-04<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>6078</td><td>SCHULTERBRANDT, MARK</td><td>141-topic-02<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>9269</td><td>SUAREZ, ERIDANIA</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 141-topic-01 </td><td>(ALVAREZ, BRIAN (7262))<BR>(BAEZ, ROSEMARY (9224))<BR>(DEVOE, CYNTHIA (2946))<BR>(FRAZIER, JESSICA (9803))<BR>(FREDERICKS, DEBORAH (2019))<BR>(GREGORY, NAUDIA (6275))<BR>(HIMME, MELISSA (1166))<BR>(JOSEPH, BRUNO (6657))<BR>(LEONG, BRINA (7224))<BR>(OBANDO, ADRIANA (0300))<BR>(PETRICK, STANISLAV (8866))<BR>(REID-KNIGHT, LASHANA (6720))<BR>(RUAN, FENG_YANG (5719))<BR>(SUAREZ, ERIDANIA (9269))</td></tr><tr><td> 141-topic-02 </td><td>(ALVAREZ, BRIAN (7262))<BR>(DEVOE, CYNTHIA (2946))<BR>(FREDERICKS, DEBORAH (2019))<BR>(GREGORY, NAUDIA (6275))<BR>(HOLMES-COLON, CRYSTALRAE (4657))<BR>(NARVAEZ, DIANA (7655))<BR>(OBANDO, ADRIANA (0300))<BR>(PETRICK, STANISLAV (8866))<BR>(REID-KNIGHT, LASHANA (6720))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(SUAREZ, ERIDANIA (9269))</td></tr><tr><td> 141-topic-03 </td><td>(BAEZ, ROSEMARY (9224))<BR>(DEVOE, CYNTHIA (2946))<BR>(FREDERICKS, DEBORAH (2019))<BR>(GREGORY, NAUDIA (6275))<BR>(HOLMES-COLON, CRYSTALRAE (4657))<BR>(JOSEPH, BRUNO (6657))<BR>(REID-KNIGHT, LASHANA (6720))</td></tr><tr><td> 141-topic-04 </td><td>(DEVOE, CYNTHIA (2946))<BR>(FREDERICKS, DEBORAH (2019))<BR>(GREGORY, NAUDIA (6275))<BR>(HIMME, MELISSA (1166))<BR>(IBNE, ERFAN (8944))<BR>(JOSEPH, BRUNO (6657))<BR>(LEONG, BRINA (7224))<BR>(NARVAEZ, DIANA (7655))<BR>(OBANDO, ADRIANA (0300))<BR>(PETRICK, STANISLAV (8866))<BR>(REID-KNIGHT, LASHANA (6720))<BR>(RUAN, FENG_YANG (5719))<BR>(SUAREZ, ERIDANIA (9269))</td></tr><tr><td> 141-topic-05 </td><td>(CASTELLANO, ELIANA (6624))<BR>(DEVOE, CYNTHIA (2946))<BR>(FRAZIER, JESSICA (9803))<BR>(FREDERICKS, DEBORAH (2019))<BR>(GREGORY, NAUDIA (6275))<BR>(HIMME, MELISSA (1166))<BR>(HOLMES-COLON, CRYSTALRAE (4657))<BR>(IBNE, ERFAN (8944))<BR>(JOSEPH, BRUNO (6657))<BR>(LEONG, BRINA (7224))<BR>(LIN, DAVID (7747))<BR>(NARVAEZ, DIANA (7655))<BR>(OBANDO, ADRIANA (0300))<BR>(PETRICK, STANISLAV (8866))<BR>(REID-KNIGHT, LASHANA (6720))<BR>(SCHULTERBRANDT, MARK (6078))</td></tr><tr><td> 141-topic-06 </td><td>(CASTELLANO, ELIANA (6624))<BR>(DEVOE, CYNTHIA (2946))<BR>(FRAZIER, JESSICA (9803))<BR>(FREDERICKS, DEBORAH (2019))<BR>(GREGORY, NAUDIA (6275))<BR>(HIMME, MELISSA (1166))<BR>(JOSEPH, BRUNO (6657))<BR>(LEONG, BRINA (7224))<BR>(NARVAEZ, DIANA (7655))<BR>(OBANDO, ADRIANA (0300))<BR>(REID-KNIGHT, LASHANA (6720))<BR>(SCHULTERBRANDT, MARK (6078))</td></tr><tr><td> 141-topic-07 </td><td>(ALVAREZ, BRIAN (7262))<BR>(BAEZ, ROSEMARY (9224))<BR>(CASTELLANO, ELIANA (6624))<BR>(DEVOE, CYNTHIA (2946))<BR>(FRAZIER, JESSICA (9803))<BR>(FREDERICKS, DEBORAH (2019))<BR>(GREGORY, NAUDIA (6275))<BR>(HIMME, MELISSA (1166))<BR>(HOLMES-COLON, CRYSTALRAE (4657))<BR>(IBNE, ERFAN (8944))<BR>(JOSEPH, BRUNO (6657))<BR>(LEONG, BRINA (7224))<BR>(NARVAEZ, DIANA (7655))<BR>(PEREZ, YSNALDO (2667))<BR>(PETRICK, STANISLAV (8866))<BR>(REID-KNIGHT, LASHANA (6720))<BR>(SCHULTERBRANDT, MARK (6078))</td></tr><tr><td> 141-topic-08 </td><td>(ALVAREZ, BRIAN (7262))<BR>(BAEZ, ROSEMARY (9224))<BR>(CASTELLANO, ELIANA (6624))<BR>(DEVOE, CYNTHIA (2946))<BR>(FELIX, THYBEL (8266))<BR>(FRAZIER, JESSICA (9803))<BR>(FREDERICKS, DEBORAH (2019))<BR>(GREGORY, NAUDIA (6275))<BR>(HIMME, MELISSA (1166))<BR>(HOLMES-COLON, CRYSTALRAE (4657))<BR>(IBNE, ERFAN (8944))<BR>(JOSEPH, BRUNO (6657))<BR>(LEONG, BRINA (7224))<BR>(LIN, DAVID (7747))<BR>(NARVAEZ, DIANA (7655))<BR>(OBANDO, ADRIANA (0300))<BR>(PEREZ, YSNALDO (2667))<BR>(PETRICK, STANISLAV (8866))<BR>(REID-KNIGHT, LASHANA (6720))<BR>(RUAN, FENG_YANG (5719))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(SUAREZ, ERIDANIA (9269))</td></tr><tr><td> 141-topic-09 </td><td>(ALVAREZ, BRIAN (7262))<BR>(BAEZ, ROSEMARY (9224))<BR>(CASTELLANO, ELIANA (6624))<BR>(DEVOE, CYNTHIA (2946))<BR>(FELIX, THYBEL (8266))<BR>(FRAZIER, JESSICA (9803))<BR>(FREDERICKS, DEBORAH (2019))<BR>(GREGORY, NAUDIA (6275))<BR>(HIMME, MELISSA (1166))<BR>(HOLMES-COLON, CRYSTALRAE (4657))<BR>(IBNE, ERFAN (8944))<BR>(JOSEPH, BRUNO (6657))<BR>(NARVAEZ, DIANA (7655))<BR>(OBANDO, ADRIANA (0300))<BR>(PEREZ, YSNALDO (2667))<BR>(PETRICK, STANISLAV (8866))<BR>(REID-KNIGHT, LASHANA (6720))<BR>(RUAN, FENG_YANG (5719))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(SUAREZ, ERIDANIA (9269))</td></tr><tr><td> 141-topic-10 </td><td>(ALVAREZ, BRIAN (7262))<BR>(CASTELLANO, ELIANA (6624))<BR>(DEVOE, CYNTHIA (2946))<BR>(FRAZIER, JESSICA (9803))<BR>(FREDERICKS, DEBORAH (2019))<BR>(GONZALEZ, YULISSA (1178))<BR>(GREGORY, NAUDIA (6275))<BR>(HIMME, MELISSA (1166))<BR>(HOLMES-COLON, CRYSTALRAE (4657))<BR>(IBNE, ERFAN (8944))<BR>(JOSEPH, BRUNO (6657))<BR>(LIN, DAVID (7747))<BR>(NARVAEZ, DIANA (7655))<BR>(OBANDO, ADRIANA (0300))<BR>(REID-KNIGHT, LASHANA (6720))<BR>(SUAREZ, ERIDANIA (9269))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
