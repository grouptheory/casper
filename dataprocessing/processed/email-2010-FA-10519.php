#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>19</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>TAMARI_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>5833</td><td>AQUINO, ELYSSA</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>1916</td><td>ARIZA, XOCHITL</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>8500</td><td>BANTING, DARREN</td><td>105-topic-01<BR>105-topic-04<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>9682</td><td>BLACKWOOD, LAURA</td><td>105-topic-01<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>0528</td><td>CAMPBELL, CHRISANN</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>4940</td><td>CANCHARI, MARIA</td><td>105-topic-01<BR>105-topic-05<BR>105-topic-06<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>3113</td><td>CHANSON, AUGUSLEEN</td><td>105-topic-01<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07</td></tr><tr><td>3508</td><td>CHEN, ZHONG</td><td>105-topic-01<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07</td></tr><tr><td>2124</td><td>CORETTE, JOSEPH</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>2515</td><td>DIOR, STEFANIE</td><td>105-topic-04<BR>105-topic-05<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>5398</td><td>FARO, RICHARD</td><td>Passed everything.</td></tr><tr><td>4401</td><td>GIRALDO, JULIANA</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>7273</td><td>GONZALEZ, LUIS</td><td>105-topic-01<BR>105-topic-06<BR>105-topic-07</td></tr><tr><td>2532</td><td>GRAHAM, JHEANELLE</td><td>Passed everything.</td></tr><tr><td>3238</td><td>JURSKA, CASSANDRA</td><td>105-topic-04<BR>105-topic-10</td></tr><tr><td>9754</td><td>KHANUKAYEV, MIKHAIL</td><td>105-topic-06<BR>105-topic-07</td></tr><tr><td>2696</td><td>KOWNACKI, LUKASZ</td><td>105-topic-01<BR>105-topic-05<BR>105-topic-06</td></tr><tr><td>7036</td><td>LOPEZ, EDGAR</td><td>Passed everything.</td></tr><tr><td>8699</td><td>MARTINES, WILSON</td><td>Passed everything.</td></tr><tr><td>5167</td><td>MENDEZ, AMY</td><td>Absent on the assessment test.</td></tr><tr><td>9628</td><td>MIRRA, ANTHONY</td><td>105-topic-02<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>8231</td><td>PARKS, SHANELLE</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>1326</td><td>PETERSON, YVETTE</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>5636</td><td>PROUT, JAHNOCCA</td><td>Passed everything.</td></tr><tr><td>1818</td><td>REYES, PIERINA</td><td>105-topic-02<BR>105-topic-05<BR>105-topic-06</td></tr><tr><td>9376</td><td>RICHARDSON, VANESSA</td><td>Passed everything.</td></tr><tr><td>9612</td><td>ROTHBERG, HAILEY</td><td>105-topic-02<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>3057</td><td>SUN, DIANA</td><td>105-topic-01<BR>105-topic-05<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>1557</td><td>SURPRIS_JR., CRANAC</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>1267</td><td>SURUJBHAN, GIRISH</td><td>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>7555</td><td>SURUJDEO, AMANDA</td><td>105-topic-04<BR>105-topic-06<BR>105-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-01 </td><td>(AQUINO, ELYSSA (5833))<BR>(ARIZA, XOCHITL (1916))<BR>(BANTING, DARREN (8500))<BR>(BLACKWOOD, LAURA (9682))<BR>(CAMPBELL, CHRISANN (0528))<BR>(CANCHARI, MARIA (4940))<BR>(CHANSON, AUGUSLEEN (3113))<BR>(CHEN, ZHONG (3508))<BR>(CORETTE, JOSEPH (2124))<BR>(GIRALDO, JULIANA (4401))<BR>(GONZALEZ, LUIS (7273))<BR>(KOWNACKI, LUKASZ (2696))<BR>(PARKS, SHANELLE (8231))<BR>(PETERSON, YVETTE (1326))<BR>(SUN, DIANA (3057))<BR>(SURPRIS_JR., CRANAC (1557))</td></tr><tr><td> 105-topic-02 </td><td>(GIRALDO, JULIANA (4401))<BR>(MIRRA, ANTHONY (9628))<BR>(PETERSON, YVETTE (1326))<BR>(REYES, PIERINA (1818))<BR>(ROTHBERG, HAILEY (9612))<BR>(SURPRIS_JR., CRANAC (1557))</td></tr><tr><td> 105-topic-03 </td><td>(AQUINO, ELYSSA (5833))<BR>(ARIZA, XOCHITL (1916))<BR>(CAMPBELL, CHRISANN (0528))<BR>(CORETTE, JOSEPH (2124))<BR>(GIRALDO, JULIANA (4401))<BR>(PARKS, SHANELLE (8231))<BR>(PETERSON, YVETTE (1326))<BR>(ROTHBERG, HAILEY (9612))</td></tr><tr><td> 105-topic-04 </td><td>(AQUINO, ELYSSA (5833))<BR>(ARIZA, XOCHITL (1916))<BR>(BANTING, DARREN (8500))<BR>(CAMPBELL, CHRISANN (0528))<BR>(CHANSON, AUGUSLEEN (3113))<BR>(CHEN, ZHONG (3508))<BR>(DIOR, STEFANIE (2515))<BR>(GIRALDO, JULIANA (4401))<BR>(JURSKA, CASSANDRA (3238))<BR>(PARKS, SHANELLE (8231))<BR>(PETERSON, YVETTE (1326))<BR>(SURUJBHAN, GIRISH (1267))<BR>(SURUJDEO, AMANDA (7555))</td></tr><tr><td> 105-topic-05 </td><td>(AQUINO, ELYSSA (5833))<BR>(BLACKWOOD, LAURA (9682))<BR>(CAMPBELL, CHRISANN (0528))<BR>(CANCHARI, MARIA (4940))<BR>(CHANSON, AUGUSLEEN (3113))<BR>(CHEN, ZHONG (3508))<BR>(CORETTE, JOSEPH (2124))<BR>(DIOR, STEFANIE (2515))<BR>(GIRALDO, JULIANA (4401))<BR>(KOWNACKI, LUKASZ (2696))<BR>(MIRRA, ANTHONY (9628))<BR>(PARKS, SHANELLE (8231))<BR>(PETERSON, YVETTE (1326))<BR>(REYES, PIERINA (1818))<BR>(ROTHBERG, HAILEY (9612))<BR>(SUN, DIANA (3057))<BR>(SURUJBHAN, GIRISH (1267))</td></tr><tr><td> 105-topic-06 </td><td>(AQUINO, ELYSSA (5833))<BR>(ARIZA, XOCHITL (1916))<BR>(BANTING, DARREN (8500))<BR>(BLACKWOOD, LAURA (9682))<BR>(CAMPBELL, CHRISANN (0528))<BR>(CANCHARI, MARIA (4940))<BR>(CHANSON, AUGUSLEEN (3113))<BR>(CHEN, ZHONG (3508))<BR>(CORETTE, JOSEPH (2124))<BR>(GIRALDO, JULIANA (4401))<BR>(GONZALEZ, LUIS (7273))<BR>(KHANUKAYEV, MIKHAIL (9754))<BR>(KOWNACKI, LUKASZ (2696))<BR>(MIRRA, ANTHONY (9628))<BR>(PARKS, SHANELLE (8231))<BR>(PETERSON, YVETTE (1326))<BR>(REYES, PIERINA (1818))<BR>(ROTHBERG, HAILEY (9612))<BR>(SUN, DIANA (3057))<BR>(SURPRIS_JR., CRANAC (1557))<BR>(SURUJBHAN, GIRISH (1267))<BR>(SURUJDEO, AMANDA (7555))</td></tr><tr><td> 105-topic-07 </td><td>(AQUINO, ELYSSA (5833))<BR>(ARIZA, XOCHITL (1916))<BR>(BANTING, DARREN (8500))<BR>(BLACKWOOD, LAURA (9682))<BR>(CAMPBELL, CHRISANN (0528))<BR>(CHANSON, AUGUSLEEN (3113))<BR>(CHEN, ZHONG (3508))<BR>(CORETTE, JOSEPH (2124))<BR>(DIOR, STEFANIE (2515))<BR>(GIRALDO, JULIANA (4401))<BR>(GONZALEZ, LUIS (7273))<BR>(KHANUKAYEV, MIKHAIL (9754))<BR>(MIRRA, ANTHONY (9628))<BR>(PARKS, SHANELLE (8231))<BR>(PETERSON, YVETTE (1326))<BR>(ROTHBERG, HAILEY (9612))<BR>(SURPRIS_JR., CRANAC (1557))</td></tr><tr><td> 105-topic-08 </td><td>(AQUINO, ELYSSA (5833))<BR>(ARIZA, XOCHITL (1916))<BR>(CAMPBELL, CHRISANN (0528))<BR>(GIRALDO, JULIANA (4401))<BR>(PARKS, SHANELLE (8231))<BR>(PETERSON, YVETTE (1326))<BR>(ROTHBERG, HAILEY (9612))</td></tr><tr><td> 105-topic-09 </td><td>(AQUINO, ELYSSA (5833))<BR>(CAMPBELL, CHRISANN (0528))<BR>(CANCHARI, MARIA (4940))<BR>(GIRALDO, JULIANA (4401))<BR>(MIRRA, ANTHONY (9628))<BR>(PETERSON, YVETTE (1326))</td></tr><tr><td> 105-topic-10 </td><td>(AQUINO, ELYSSA (5833))<BR>(ARIZA, XOCHITL (1916))<BR>(BANTING, DARREN (8500))<BR>(BLACKWOOD, LAURA (9682))<BR>(CAMPBELL, CHRISANN (0528))<BR>(CANCHARI, MARIA (4940))<BR>(CORETTE, JOSEPH (2124))<BR>(DIOR, STEFANIE (2515))<BR>(GIRALDO, JULIANA (4401))<BR>(JURSKA, CASSANDRA (3238))<BR>(MIRRA, ANTHONY (9628))<BR>(PARKS, SHANELLE (8231))<BR>(PETERSON, YVETTE (1326))<BR>(ROTHBERG, HAILEY (9612))<BR>(SUN, DIANA (3057))<BR>(SURPRIS_JR., CRANAC (1557))<BR>(SURUJBHAN, GIRISH (1267))<BR>(SURUJDEO, AMANDA (7555))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
