#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 141 - PRE-CALCULUS (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>141</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>GARRETT_K</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9407</td><td>AZAM, TEHMINA</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-3<BR>141-topic-4<BR>141-topic-6<BR>141-topic-9</td></tr><tr><td>7615</td><td>BAEZ, OSCAR</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>8303</td><td>BLANDING, DEBORAH</td><td>141-topic-1<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>8421</td><td>BROWN, BRENDAN</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-4<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>0977</td><td>CHEN, LONG</td><td>141-topic-6<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>5624</td><td>CHEN, YOU_NAN</td><td>141-topic-10<BR>141-topic-6</td></tr><tr><td>0390</td><td>FLORES, MARK</td><td>Absent on the assessment test.</td></tr><tr><td>1757</td><td>GARCIA, ISAAC</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-4<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>4013</td><td>GUSITA, ALEXANDRA</td><td>141-topic-2<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>4250</td><td>LAMA, MICHELLE</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-4<BR>141-topic-6<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>9574</td><td>MAW, MELISSA</td><td>141-topic-1<BR>141-topic-7<BR>141-topic-8</td></tr><tr><td>8340</td><td>MAYA, GIOVANNY</td><td>141-topic-1<BR>141-topic-5<BR>141-topic-6<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>1032</td><td>MORALES, LIZBETH</td><td>141-topic-10<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>0230</td><td>PADILLA, EMMAH</td><td>141-topic-10<BR>141-topic-2<BR>141-topic-4<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>3601</td><td>PERALTA, BRIGETTE</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-3<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>6165</td><td>PETERSON, MICHAEL</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>4063</td><td>QUINTEROS, ELLIOT</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>3938</td><td>RODRIGUEZ, JOCELYN</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>2265</td><td>ROMAN, KRISTIE</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>9607</td><td>SANCHEZ, DILAURA</td><td>Absent on the assessment test.</td></tr><tr><td>1480</td><td>TREVINO, LIZETTE</td><td>141-topic-1<BR>141-topic-4<BR>141-topic-6<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>5721</td><td>TWOMLEY, JOHN</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-6<BR>141-topic-8</td></tr><tr><td>0936</td><td>VEGA, JONATHAN</td><td>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>0305</td><td>WAGNER, DOMENICK</td><td>141-topic-1<BR>141-topic-6<BR>141-topic-9</td></tr><tr><td>1613</td><td>YU, ERIC</td><td>141-topic-10<BR>141-topic-2<BR>141-topic-5<BR>141-topic-6<BR>141-topic-8<BR>141-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 141-topic-1 </td><td>(AZAM, TEHMINA (9407))<BR>(BAEZ, OSCAR (7615))<BR>(BLANDING, DEBORAH (8303))<BR>(BROWN, BRENDAN (8421))<BR>(GARCIA, ISAAC (1757))<BR>(LAMA, MICHELLE (4250))<BR>(MAW, MELISSA (9574))<BR>(MAYA, GIOVANNY (8340))<BR>(PERALTA, BRIGETTE (3601))<BR>(PETERSON, MICHAEL (6165))<BR>(QUINTEROS, ELLIOT (4063))<BR>(RODRIGUEZ, JOCELYN (3938))<BR>(ROMAN, KRISTIE (2265))<BR>(TREVINO, LIZETTE (1480))<BR>(TWOMLEY, JOHN (5721))<BR>(WAGNER, DOMENICK (0305))</td></tr><tr><td> 141-topic-10 </td><td>(AZAM, TEHMINA (9407))<BR>(BAEZ, OSCAR (7615))<BR>(BROWN, BRENDAN (8421))<BR>(CHEN, YOU_NAN (5624))<BR>(GARCIA, ISAAC (1757))<BR>(LAMA, MICHELLE (4250))<BR>(MORALES, LIZBETH (1032))<BR>(PADILLA, EMMAH (0230))<BR>(PERALTA, BRIGETTE (3601))<BR>(PETERSON, MICHAEL (6165))<BR>(QUINTEROS, ELLIOT (4063))<BR>(RODRIGUEZ, JOCELYN (3938))<BR>(ROMAN, KRISTIE (2265))<BR>(TWOMLEY, JOHN (5721))<BR>(YU, ERIC (1613))</td></tr><tr><td> 141-topic-2 </td><td>(BAEZ, OSCAR (7615))<BR>(GARCIA, ISAAC (1757))<BR>(GUSITA, ALEXANDRA (4013))<BR>(PADILLA, EMMAH (0230))<BR>(PERALTA, BRIGETTE (3601))<BR>(QUINTEROS, ELLIOT (4063))<BR>(RODRIGUEZ, JOCELYN (3938))<BR>(ROMAN, KRISTIE (2265))<BR>(YU, ERIC (1613))</td></tr><tr><td> 141-topic-3 </td><td>(AZAM, TEHMINA (9407))<BR>(BAEZ, OSCAR (7615))<BR>(PERALTA, BRIGETTE (3601))<BR>(RODRIGUEZ, JOCELYN (3938))<BR>(ROMAN, KRISTIE (2265))</td></tr><tr><td> 141-topic-4 </td><td>(AZAM, TEHMINA (9407))<BR>(BAEZ, OSCAR (7615))<BR>(BROWN, BRENDAN (8421))<BR>(GARCIA, ISAAC (1757))<BR>(GUSITA, ALEXANDRA (4013))<BR>(LAMA, MICHELLE (4250))<BR>(PADILLA, EMMAH (0230))<BR>(QUINTEROS, ELLIOT (4063))<BR>(RODRIGUEZ, JOCELYN (3938))<BR>(ROMAN, KRISTIE (2265))<BR>(TREVINO, LIZETTE (1480))</td></tr><tr><td> 141-topic-5 </td><td>(BAEZ, OSCAR (7615))<BR>(GUSITA, ALEXANDRA (4013))<BR>(MAYA, GIOVANNY (8340))<BR>(PERALTA, BRIGETTE (3601))<BR>(PETERSON, MICHAEL (6165))<BR>(QUINTEROS, ELLIOT (4063))<BR>(RODRIGUEZ, JOCELYN (3938))<BR>(ROMAN, KRISTIE (2265))<BR>(YU, ERIC (1613))</td></tr><tr><td> 141-topic-6 </td><td>(AZAM, TEHMINA (9407))<BR>(BAEZ, OSCAR (7615))<BR>(BLANDING, DEBORAH (8303))<BR>(BROWN, BRENDAN (8421))<BR>(CHEN, LONG (0977))<BR>(CHEN, YOU_NAN (5624))<BR>(GARCIA, ISAAC (1757))<BR>(GUSITA, ALEXANDRA (4013))<BR>(LAMA, MICHELLE (4250))<BR>(MAYA, GIOVANNY (8340))<BR>(PADILLA, EMMAH (0230))<BR>(PERALTA, BRIGETTE (3601))<BR>(PETERSON, MICHAEL (6165))<BR>(QUINTEROS, ELLIOT (4063))<BR>(RODRIGUEZ, JOCELYN (3938))<BR>(ROMAN, KRISTIE (2265))<BR>(TREVINO, LIZETTE (1480))<BR>(TWOMLEY, JOHN (5721))<BR>(VEGA, JONATHAN (0936))<BR>(WAGNER, DOMENICK (0305))<BR>(YU, ERIC (1613))</td></tr><tr><td> 141-topic-7 </td><td>(BAEZ, OSCAR (7615))<BR>(BLANDING, DEBORAH (8303))<BR>(BROWN, BRENDAN (8421))<BR>(GARCIA, ISAAC (1757))<BR>(GUSITA, ALEXANDRA (4013))<BR>(MAW, MELISSA (9574))<BR>(PADILLA, EMMAH (0230))<BR>(PERALTA, BRIGETTE (3601))<BR>(PETERSON, MICHAEL (6165))<BR>(QUINTEROS, ELLIOT (4063))<BR>(RODRIGUEZ, JOCELYN (3938))<BR>(ROMAN, KRISTIE (2265))<BR>(VEGA, JONATHAN (0936))</td></tr><tr><td> 141-topic-8 </td><td>(BAEZ, OSCAR (7615))<BR>(BLANDING, DEBORAH (8303))<BR>(BROWN, BRENDAN (8421))<BR>(CHEN, LONG (0977))<BR>(GARCIA, ISAAC (1757))<BR>(GUSITA, ALEXANDRA (4013))<BR>(LAMA, MICHELLE (4250))<BR>(MAW, MELISSA (9574))<BR>(MAYA, GIOVANNY (8340))<BR>(MORALES, LIZBETH (1032))<BR>(PADILLA, EMMAH (0230))<BR>(PERALTA, BRIGETTE (3601))<BR>(PETERSON, MICHAEL (6165))<BR>(QUINTEROS, ELLIOT (4063))<BR>(RODRIGUEZ, JOCELYN (3938))<BR>(ROMAN, KRISTIE (2265))<BR>(TREVINO, LIZETTE (1480))<BR>(TWOMLEY, JOHN (5721))<BR>(VEGA, JONATHAN (0936))<BR>(YU, ERIC (1613))</td></tr><tr><td> 141-topic-9 </td><td>(AZAM, TEHMINA (9407))<BR>(BAEZ, OSCAR (7615))<BR>(BLANDING, DEBORAH (8303))<BR>(BROWN, BRENDAN (8421))<BR>(CHEN, LONG (0977))<BR>(GARCIA, ISAAC (1757))<BR>(GUSITA, ALEXANDRA (4013))<BR>(LAMA, MICHELLE (4250))<BR>(MAYA, GIOVANNY (8340))<BR>(MORALES, LIZBETH (1032))<BR>(PADILLA, EMMAH (0230))<BR>(PERALTA, BRIGETTE (3601))<BR>(PETERSON, MICHAEL (6165))<BR>(QUINTEROS, ELLIOT (4063))<BR>(RODRIGUEZ, JOCELYN (3938))<BR>(ROMAN, KRISTIE (2265))<BR>(TREVINO, LIZETTE (1480))<BR>(VEGA, JONATHAN (0936))<BR>(WAGNER, DOMENICK (0305))<BR>(YU, ERIC (1613))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
