#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>301</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>WILLIAMS_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8057</td><td>BROWN, RONNETTE</td><td>Absent on the assessment test.</td></tr><tr><td>3153</td><td>CANESSA, MIGUEL</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9931</td><td>CHEVALIER, JONATHAN</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9451</td><td>CIORCIOG, OVIDIU</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>0608</td><td>CODRINGTON, TRACEY-ANN</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2744</td><td>COOPER, BRENDA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>0482</td><td>ECHEVARRIA, JESSICA</td><td>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>7151</td><td>FIELMAN, BRIAN</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>7937</td><td>FIGUEROA-GARCIA, STEPHANIE</td><td>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07</td></tr><tr><td>1916</td><td>GARCIA, ALYSHA</td><td>Absent on the assessment test.</td></tr><tr><td>8240</td><td>GOMEZ, BELKYS</td><td>Absent on the assessment test.</td></tr><tr><td>0161</td><td>GOMEZ, FANNY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9265</td><td>HADIRE, ASSIA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2928</td><td>JAQUEZ, MIOZOTY</td><td>Absent on the assessment test.</td></tr><tr><td>5730</td><td>JOHN-LEWIS, KARINE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>8012</td><td>KARTAL, ELA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4442</td><td>KERSEY, STANLEY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2467</td><td>LEZAMA, MARCIA</td><td>Absent on the assessment test.</td></tr><tr><td>9529</td><td>MENTORE, RON</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2599</td><td>MORALES, GIOVANIE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>2682</td><td>MORERA, JASMINE</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-10</td></tr><tr><td>5661</td><td>PHAN, THUYET</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-10</td></tr><tr><td>8258</td><td>RIOS, DIANA</td><td>Absent on the assessment test.</td></tr><tr><td>2519</td><td>VALENTIN, TIFFANY</td><td>Absent on the assessment test.</td></tr><tr><td>6703</td><td>VILLACORTA, KIMONA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4839</td><td>WILLIAMS, CLYDE</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(CANESSA, MIGUEL (3153))<BR>(CHEVALIER, JONATHAN (9931))<BR>(CIORCIOG, OVIDIU (9451))<BR>(CODRINGTON, TRACEY-ANN (0608))<BR>(COOPER, BRENDA (2744))<BR>(FIELMAN, BRIAN (7151))<BR>(GOMEZ, FANNY (0161))<BR>(HADIRE, ASSIA (9265))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(KARTAL, ELA (8012))<BR>(KERSEY, STANLEY (4442))<BR>(MENTORE, RON (9529))<BR>(MORALES, GIOVANIE (2599))<BR>(MORERA, JASMINE (2682))<BR>(PHAN, THUYET (5661))<BR>(VILLACORTA, KIMONA (6703))Absent on the assessment test.</td></tr><tr><td> 104-topic-02 </td><td>(CANESSA, MIGUEL (3153))<BR>(CHEVALIER, JONATHAN (9931))<BR>(COOPER, BRENDA (2744))<BR>(FIELMAN, BRIAN (7151))<BR>(FIGUEROA-GARCIA, STEPHANIE (7937))<BR>(GOMEZ, FANNY (0161))<BR>(HADIRE, ASSIA (9265))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(KERSEY, STANLEY (4442))<BR>(MENTORE, RON (9529))<BR>(MORALES, GIOVANIE (2599))Absent on the assessment test.</td></tr><tr><td> 104-topic-03 </td><td>(CANESSA, MIGUEL (3153))<BR>(CHEVALIER, JONATHAN (9931))<BR>(CODRINGTON, TRACEY-ANN (0608))<BR>(COOPER, BRENDA (2744))<BR>(GOMEZ, FANNY (0161))<BR>(HADIRE, ASSIA (9265))<BR>(KARTAL, ELA (8012))<BR>(KERSEY, STANLEY (4442))<BR>(MENTORE, RON (9529))<BR>(MORERA, JASMINE (2682))<BR>(VILLACORTA, KIMONA (6703))Absent on the assessment test.</td></tr><tr><td> 104-topic-04 </td><td>(CANESSA, MIGUEL (3153))<BR>(CHEVALIER, JONATHAN (9931))<BR>(CODRINGTON, TRACEY-ANN (0608))<BR>(COOPER, BRENDA (2744))<BR>(ECHEVARRIA, JESSICA (0482))<BR>(FIELMAN, BRIAN (7151))<BR>(GOMEZ, FANNY (0161))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(KARTAL, ELA (8012))<BR>(KERSEY, STANLEY (4442))<BR>(MENTORE, RON (9529))<BR>(MORALES, GIOVANIE (2599))<BR>(MORERA, JASMINE (2682))<BR>(VILLACORTA, KIMONA (6703))Absent on the assessment test.</td></tr><tr><td> 104-topic-05 </td><td>(CANESSA, MIGUEL (3153))<BR>(CHEVALIER, JONATHAN (9931))<BR>(CIORCIOG, OVIDIU (9451))<BR>(CODRINGTON, TRACEY-ANN (0608))<BR>(COOPER, BRENDA (2744))<BR>(ECHEVARRIA, JESSICA (0482))<BR>(FIELMAN, BRIAN (7151))<BR>(FIGUEROA-GARCIA, STEPHANIE (7937))<BR>(GOMEZ, FANNY (0161))<BR>(HADIRE, ASSIA (9265))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(KARTAL, ELA (8012))<BR>(KERSEY, STANLEY (4442))<BR>(MENTORE, RON (9529))<BR>(MORALES, GIOVANIE (2599))<BR>(MORERA, JASMINE (2682))<BR>(PHAN, THUYET (5661))<BR>(VILLACORTA, KIMONA (6703))Absent on the assessment test.</td></tr><tr><td> 104-topic-06 </td><td>(CANESSA, MIGUEL (3153))<BR>(CHEVALIER, JONATHAN (9931))<BR>(CIORCIOG, OVIDIU (9451))<BR>(COOPER, BRENDA (2744))<BR>(ECHEVARRIA, JESSICA (0482))<BR>(FIELMAN, BRIAN (7151))<BR>(FIGUEROA-GARCIA, STEPHANIE (7937))<BR>(GOMEZ, FANNY (0161))<BR>(HADIRE, ASSIA (9265))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(KARTAL, ELA (8012))<BR>(KERSEY, STANLEY (4442))<BR>(MENTORE, RON (9529))<BR>(MORALES, GIOVANIE (2599))<BR>(MORERA, JASMINE (2682))<BR>(PHAN, THUYET (5661))<BR>(VILLACORTA, KIMONA (6703))Absent on the assessment test.</td></tr><tr><td> 104-topic-07 </td><td>(CANESSA, MIGUEL (3153))<BR>(CIORCIOG, OVIDIU (9451))<BR>(CODRINGTON, TRACEY-ANN (0608))<BR>(COOPER, BRENDA (2744))<BR>(ECHEVARRIA, JESSICA (0482))<BR>(FIGUEROA-GARCIA, STEPHANIE (7937))<BR>(GOMEZ, FANNY (0161))<BR>(HADIRE, ASSIA (9265))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(KARTAL, ELA (8012))<BR>(KERSEY, STANLEY (4442))<BR>(MENTORE, RON (9529))<BR>(MORALES, GIOVANIE (2599))<BR>(VILLACORTA, KIMONA (6703))Absent on the assessment test.</td></tr><tr><td> 104-topic-08 </td><td>(COOPER, BRENDA (2744))<BR>(ECHEVARRIA, JESSICA (0482))<BR>(FIELMAN, BRIAN (7151))<BR>(GOMEZ, FANNY (0161))<BR>(HADIRE, ASSIA (9265))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(KARTAL, ELA (8012))<BR>(KERSEY, STANLEY (4442))<BR>(MENTORE, RON (9529))Absent on the assessment test.</td></tr><tr><td> 104-topic-09 </td><td>(CANESSA, MIGUEL (3153))<BR>(CHEVALIER, JONATHAN (9931))<BR>(CIORCIOG, OVIDIU (9451))<BR>(CODRINGTON, TRACEY-ANN (0608))<BR>(COOPER, BRENDA (2744))<BR>(ECHEVARRIA, JESSICA (0482))<BR>(FIELMAN, BRIAN (7151))<BR>(GOMEZ, FANNY (0161))<BR>(HADIRE, ASSIA (9265))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(KARTAL, ELA (8012))<BR>(KERSEY, STANLEY (4442))<BR>(MENTORE, RON (9529))<BR>(VILLACORTA, KIMONA (6703))Absent on the assessment test.</td></tr><tr><td> 104-topic-10 </td><td>(CANESSA, MIGUEL (3153))<BR>(CHEVALIER, JONATHAN (9931))<BR>(CIORCIOG, OVIDIU (9451))<BR>(CODRINGTON, TRACEY-ANN (0608))<BR>(COOPER, BRENDA (2744))<BR>(ECHEVARRIA, JESSICA (0482))<BR>(FIELMAN, BRIAN (7151))<BR>(GOMEZ, FANNY (0161))<BR>(HADIRE, ASSIA (9265))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(KARTAL, ELA (8012))<BR>(KERSEY, STANLEY (4442))<BR>(MENTORE, RON (9529))<BR>(MORALES, GIOVANIE (2599))<BR>(MORERA, JASMINE (2682))<BR>(PHAN, THUYET (5661))<BR>(VILLACORTA, KIMONA (6703))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
