#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>17</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>BIESTER_G</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>2323</td><td>ALMONTE, ELBA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>4269</td><td>BAPTISTE, NICOLE</td><td>105-topic-10<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>5757</td><td>BAUTISTA, ALEX</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>0945</td><td>COLLADO, LENNY</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>4369</td><td>DAUTI, BRUNO</td><td>105-topic-10<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>8838</td><td>DEJESUS, STEFANIE</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>2857</td><td>GONZALEZ, MELISSA</td><td>105-topic-10<BR>105-topic-2<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>7528</td><td>HALL, ISHMAEL</td><td>105-topic-2<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>2530</td><td>JIMENEZ, GRISELDI</td><td>105-topic-10<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8<BR>105-topic-9</td></tr><tr><td>7131</td><td>JOHNSON, LATASHA</td><td>105-topic-10<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>0080</td><td>KHATUN, SHAMIMA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-8<BR>105-topic-9</td></tr><tr><td>7065</td><td>LORENZI, JOSEPH</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>8720</td><td>MANZANET, ELI</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>0896</td><td>MAYNARD, TIFFANY</td><td>Absent on the assessment test.</td></tr><tr><td>3434</td><td>MELO, QUIARA</td><td>Absent on the assessment test.</td></tr><tr><td>0973</td><td>MENDEZ, ELISSA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>4329</td><td>MOREL, DENISSE</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8<BR>105-topic-9</td></tr><tr><td>1210</td><td>NERI, ELISBET</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>2058</td><td>OLDHAM, NICOLE</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>8304</td><td>PAVLECKA, ANDREA</td><td>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>7678</td><td>QUINONEZ, ADRIAN</td><td>Absent on the assessment test.</td></tr><tr><td>1339</td><td>RAMIREZ, HECTOR</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>1084</td><td>RIVERA, IVANA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-4<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>5781</td><td>SALINAS, JOHANA</td><td>Absent on the assessment test.</td></tr><tr><td>6078</td><td>SCHULTERBRANDT, MARK</td><td>105-topic-10<BR>105-topic-5<BR>105-topic-7</td></tr><tr><td>6708</td><td>SIMON, CAROLYN</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>8724</td><td>TORRES, RAPHAEL</td><td>105-topic-10<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>6249</td><td>VALERIUS, JULIANNA</td><td>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>8650</td><td>WALKER, MARTERRA</td><td>105-topic-10<BR>105-topic-2<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-1 </td><td>(ALMONTE, ELBA (2323))<BR>(BAUTISTA, ALEX (5757))<BR>(COLLADO, LENNY (0945))<BR>(DEJESUS, STEFANIE (8838))<BR>(KHATUN, SHAMIMA (0080))<BR>(LORENZI, JOSEPH (7065))<BR>(MANZANET, ELI (8720))<BR>(MENDEZ, ELISSA (0973))<BR>(MOREL, DENISSE (4329))<BR>(NERI, ELISBET (1210))<BR>(OLDHAM, NICOLE (2058))<BR>(RAMIREZ, HECTOR (1339))<BR>(RIVERA, IVANA (1084))<BR>(SIMON, CAROLYN (6708))</td></tr><tr><td> 105-topic-10 </td><td>(ALMONTE, ELBA (2323))<BR>(BAPTISTE, NICOLE (4269))<BR>(BAUTISTA, ALEX (5757))<BR>(COLLADO, LENNY (0945))<BR>(DAUTI, BRUNO (4369))<BR>(DEJESUS, STEFANIE (8838))<BR>(GONZALEZ, MELISSA (2857))<BR>(JIMENEZ, GRISELDI (2530))<BR>(JOHNSON, LATASHA (7131))<BR>(KHATUN, SHAMIMA (0080))<BR>(LORENZI, JOSEPH (7065))<BR>(MANZANET, ELI (8720))<BR>(MENDEZ, ELISSA (0973))<BR>(MOREL, DENISSE (4329))<BR>(NERI, ELISBET (1210))<BR>(OLDHAM, NICOLE (2058))<BR>(PAVLECKA, ANDREA (8304))<BR>(RAMIREZ, HECTOR (1339))<BR>(RIVERA, IVANA (1084))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(SIMON, CAROLYN (6708))<BR>(TORRES, RAPHAEL (8724))<BR>(VALERIUS, JULIANNA (6249))<BR>(WALKER, MARTERRA (8650))</td></tr><tr><td> 105-topic-2 </td><td>(ALMONTE, ELBA (2323))<BR>(BAUTISTA, ALEX (5757))<BR>(COLLADO, LENNY (0945))<BR>(GONZALEZ, MELISSA (2857))<BR>(HALL, ISHMAEL (7528))<BR>(KHATUN, SHAMIMA (0080))<BR>(MOREL, DENISSE (4329))<BR>(NERI, ELISBET (1210))<BR>(OLDHAM, NICOLE (2058))<BR>(PAVLECKA, ANDREA (8304))<BR>(VALERIUS, JULIANNA (6249))<BR>(WALKER, MARTERRA (8650))</td></tr><tr><td> 105-topic-3 </td><td>(ALMONTE, ELBA (2323))<BR>(BAUTISTA, ALEX (5757))<BR>(JIMENEZ, GRISELDI (2530))<BR>(KHATUN, SHAMIMA (0080))<BR>(LORENZI, JOSEPH (7065))<BR>(MANZANET, ELI (8720))<BR>(MOREL, DENISSE (4329))<BR>(PAVLECKA, ANDREA (8304))<BR>(RAMIREZ, HECTOR (1339))<BR>(SIMON, CAROLYN (6708))<BR>(VALERIUS, JULIANNA (6249))</td></tr><tr><td> 105-topic-4 </td><td>(ALMONTE, ELBA (2323))<BR>(COLLADO, LENNY (0945))<BR>(DAUTI, BRUNO (4369))<BR>(DEJESUS, STEFANIE (8838))<BR>(JIMENEZ, GRISELDI (2530))<BR>(KHATUN, SHAMIMA (0080))<BR>(LORENZI, JOSEPH (7065))<BR>(MOREL, DENISSE (4329))<BR>(OLDHAM, NICOLE (2058))<BR>(PAVLECKA, ANDREA (8304))<BR>(RAMIREZ, HECTOR (1339))<BR>(RIVERA, IVANA (1084))<BR>(TORRES, RAPHAEL (8724))</td></tr><tr><td> 105-topic-5 </td><td>(ALMONTE, ELBA (2323))<BR>(BAPTISTE, NICOLE (4269))<BR>(BAUTISTA, ALEX (5757))<BR>(COLLADO, LENNY (0945))<BR>(DAUTI, BRUNO (4369))<BR>(DEJESUS, STEFANIE (8838))<BR>(GONZALEZ, MELISSA (2857))<BR>(HALL, ISHMAEL (7528))<BR>(JIMENEZ, GRISELDI (2530))<BR>(JOHNSON, LATASHA (7131))<BR>(KHATUN, SHAMIMA (0080))<BR>(LORENZI, JOSEPH (7065))<BR>(MANZANET, ELI (8720))<BR>(MENDEZ, ELISSA (0973))<BR>(MOREL, DENISSE (4329))<BR>(NERI, ELISBET (1210))<BR>(OLDHAM, NICOLE (2058))<BR>(PAVLECKA, ANDREA (8304))<BR>(RAMIREZ, HECTOR (1339))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(SIMON, CAROLYN (6708))<BR>(TORRES, RAPHAEL (8724))<BR>(WALKER, MARTERRA (8650))</td></tr><tr><td> 105-topic-6 </td><td>(ALMONTE, ELBA (2323))<BR>(BAPTISTE, NICOLE (4269))<BR>(BAUTISTA, ALEX (5757))<BR>(COLLADO, LENNY (0945))<BR>(DAUTI, BRUNO (4369))<BR>(DEJESUS, STEFANIE (8838))<BR>(GONZALEZ, MELISSA (2857))<BR>(HALL, ISHMAEL (7528))<BR>(JIMENEZ, GRISELDI (2530))<BR>(JOHNSON, LATASHA (7131))<BR>(KHATUN, SHAMIMA (0080))<BR>(LORENZI, JOSEPH (7065))<BR>(MANZANET, ELI (8720))<BR>(MENDEZ, ELISSA (0973))<BR>(MOREL, DENISSE (4329))<BR>(NERI, ELISBET (1210))<BR>(OLDHAM, NICOLE (2058))<BR>(PAVLECKA, ANDREA (8304))<BR>(RAMIREZ, HECTOR (1339))<BR>(RIVERA, IVANA (1084))<BR>(SIMON, CAROLYN (6708))<BR>(TORRES, RAPHAEL (8724))<BR>(VALERIUS, JULIANNA (6249))<BR>(WALKER, MARTERRA (8650))</td></tr><tr><td> 105-topic-7 </td><td>(ALMONTE, ELBA (2323))<BR>(BAPTISTE, NICOLE (4269))<BR>(BAUTISTA, ALEX (5757))<BR>(COLLADO, LENNY (0945))<BR>(DAUTI, BRUNO (4369))<BR>(DEJESUS, STEFANIE (8838))<BR>(JIMENEZ, GRISELDI (2530))<BR>(JOHNSON, LATASHA (7131))<BR>(MANZANET, ELI (8720))<BR>(MENDEZ, ELISSA (0973))<BR>(MOREL, DENISSE (4329))<BR>(NERI, ELISBET (1210))<BR>(OLDHAM, NICOLE (2058))<BR>(PAVLECKA, ANDREA (8304))<BR>(RAMIREZ, HECTOR (1339))<BR>(RIVERA, IVANA (1084))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(SIMON, CAROLYN (6708))<BR>(TORRES, RAPHAEL (8724))<BR>(VALERIUS, JULIANNA (6249))<BR>(WALKER, MARTERRA (8650))</td></tr><tr><td> 105-topic-8 </td><td>(BAUTISTA, ALEX (5757))<BR>(JIMENEZ, GRISELDI (2530))<BR>(KHATUN, SHAMIMA (0080))<BR>(MOREL, DENISSE (4329))</td></tr><tr><td> 105-topic-9 </td><td>(BAPTISTE, NICOLE (4269))<BR>(DEJESUS, STEFANIE (8838))<BR>(JIMENEZ, GRISELDI (2530))<BR>(KHATUN, SHAMIMA (0080))<BR>(MOREL, DENISSE (4329))<BR>(OLDHAM, NICOLE (2058))<BR>(PAVLECKA, ANDREA (8304))<BR>(RIVERA, IVANA (1084))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>