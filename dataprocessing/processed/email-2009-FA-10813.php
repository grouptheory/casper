#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>13</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>TOPLAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>4495</td><td>AKSNES, CARSON</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>6681</td><td>AREIZAGA, BRANDON</td><td>Absent on the assessment test.</td></tr><tr><td>3340</td><td>BALRUP, JULIAN</td><td>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8</td></tr><tr><td>3543</td><td>BUSCH, JASON</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>1583</td><td>CAZLEY, ASHER</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>0934</td><td>CHAVIRA, ROCIO</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-7<BR>108-topic-8</td></tr><tr><td>6471</td><td>CORNETTO, AMANDA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>7824</td><td>DERISI, NICHOLAS</td><td>108-topic-10<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>9233</td><td>DOMINGUEZ, RITCHIE</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-9</td></tr><tr><td>2100</td><td>GREGORY, GERENA</td><td>108-topic-1<BR>108-topic-6</td></tr><tr><td>9552</td><td>HODZIC, MIRSADA</td><td>Absent on the assessment test.</td></tr><tr><td>5649</td><td>JENNINGS, ANASTASIA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>2664</td><td>KAEWUSSDANGKUL, GEORGE</td><td>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>3634</td><td>KNIGHT, ALICIA</td><td>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-9</td></tr><tr><td>8977</td><td>LEVIN, ZAKARY</td><td>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>7893</td><td>MARSHALL, AMIFIKA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-8</td></tr><tr><td>8371</td><td>MARTINVIGNOLES, CLAUDIA</td><td>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8</td></tr><tr><td>2141</td><td>MORALES, ALEX</td><td>Absent on the assessment test.</td></tr><tr><td>1465</td><td>MORARESCU, CRISTIAN</td><td>Absent on the assessment test.</td></tr><tr><td>5478</td><td>MULLINGS, FELICIA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>9899</td><td>NAVARRETE, CYNTHIA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>6210</td><td>NUNEZ, CHARLIE</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8</td></tr><tr><td>6031</td><td>PAPERMAN, HARRISON</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4</td></tr><tr><td>8770</td><td>RICH, CHRISTIAN</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>2811</td><td>RODRIGUEZ, ELIANA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4</td></tr><tr><td>4230</td><td>SANON, BARBARA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>1275</td><td>SENZAMICI, ANTHONY</td><td>Absent on the assessment test.</td></tr><tr><td>3184</td><td>SOSA, DAVID</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-9</td></tr><tr><td>7924</td><td>TUCKER, CHIQUAYA</td><td>Absent on the assessment test.</td></tr><tr><td>1357</td><td>VARGAS, ARIANNE</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8</td></tr><tr><td>3607</td><td>VIVAR, GABRIELA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>5671</td><td>ZHOU, EVA</td><td>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-1 </td><td>(AKSNES, CARSON (4495))<BR>(BUSCH, JASON (3543))<BR>(CAZLEY, ASHER (1583))<BR>(CORNETTO, AMANDA (6471))<BR>(DOMINGUEZ, RITCHIE (9233))<BR>(GREGORY, GERENA (2100))<BR>(JENNINGS, ANASTASIA (5649))<BR>(MARSHALL, AMIFIKA (7893))<BR>(MULLINGS, FELICIA (5478))<BR>(NAVARRETE, CYNTHIA (9899))<BR>(NUNEZ, CHARLIE (6210))<BR>(PAPERMAN, HARRISON (6031))<BR>(RICH, CHRISTIAN (8770))<BR>(RODRIGUEZ, ELIANA (2811))<BR>(SANON, BARBARA (4230))<BR>(SOSA, DAVID (3184))<BR>(VARGAS, ARIANNE (1357))<BR>(VIVAR, GABRIELA (3607))</td></tr><tr><td> 108-topic-10 </td><td>(AKSNES, CARSON (4495))<BR>(BALRUP, JULIAN (3340))<BR>(BUSCH, JASON (3543))<BR>(CHAVIRA, ROCIO (0934))<BR>(CORNETTO, AMANDA (6471))<BR>(DERISI, NICHOLAS (7824))<BR>(DOMINGUEZ, RITCHIE (9233))<BR>(JENNINGS, ANASTASIA (5649))<BR>(KNIGHT, ALICIA (3634))<BR>(LEVIN, ZAKARY (8977))<BR>(MARSHALL, AMIFIKA (7893))<BR>(MARTINVIGNOLES, CLAUDIA (8371))<BR>(MULLINGS, FELICIA (5478))<BR>(NAVARRETE, CYNTHIA (9899))<BR>(NUNEZ, CHARLIE (6210))<BR>(RODRIGUEZ, ELIANA (2811))<BR>(SANON, BARBARA (4230))<BR>(VARGAS, ARIANNE (1357))<BR>(VIVAR, GABRIELA (3607))</td></tr><tr><td> 108-topic-2 </td><td>(BALRUP, JULIAN (3340))<BR>(BUSCH, JASON (3543))<BR>(CAZLEY, ASHER (1583))<BR>(DERISI, NICHOLAS (7824))<BR>(JENNINGS, ANASTASIA (5649))<BR>(KAEWUSSDANGKUL, GEORGE (2664))<BR>(KNIGHT, ALICIA (3634))<BR>(LEVIN, ZAKARY (8977))<BR>(MARSHALL, AMIFIKA (7893))<BR>(MARTINVIGNOLES, CLAUDIA (8371))<BR>(MULLINGS, FELICIA (5478))<BR>(NAVARRETE, CYNTHIA (9899))<BR>(NUNEZ, CHARLIE (6210))<BR>(PAPERMAN, HARRISON (6031))<BR>(RICH, CHRISTIAN (8770))<BR>(SANON, BARBARA (4230))<BR>(VARGAS, ARIANNE (1357))<BR>(VIVAR, GABRIELA (3607))</td></tr><tr><td> 108-topic-3 </td><td>(AKSNES, CARSON (4495))<BR>(BALRUP, JULIAN (3340))<BR>(BUSCH, JASON (3543))<BR>(CAZLEY, ASHER (1583))<BR>(CHAVIRA, ROCIO (0934))<BR>(CORNETTO, AMANDA (6471))<BR>(DOMINGUEZ, RITCHIE (9233))<BR>(JENNINGS, ANASTASIA (5649))<BR>(KAEWUSSDANGKUL, GEORGE (2664))<BR>(KNIGHT, ALICIA (3634))<BR>(LEVIN, ZAKARY (8977))<BR>(MARSHALL, AMIFIKA (7893))<BR>(MARTINVIGNOLES, CLAUDIA (8371))<BR>(MULLINGS, FELICIA (5478))<BR>(NAVARRETE, CYNTHIA (9899))<BR>(NUNEZ, CHARLIE (6210))<BR>(PAPERMAN, HARRISON (6031))<BR>(RICH, CHRISTIAN (8770))<BR>(RODRIGUEZ, ELIANA (2811))<BR>(SANON, BARBARA (4230))<BR>(SOSA, DAVID (3184))<BR>(VARGAS, ARIANNE (1357))<BR>(VIVAR, GABRIELA (3607))<BR>(ZHOU, EVA (5671))</td></tr><tr><td> 108-topic-4 </td><td>(AKSNES, CARSON (4495))<BR>(BALRUP, JULIAN (3340))<BR>(BUSCH, JASON (3543))<BR>(CAZLEY, ASHER (1583))<BR>(CHAVIRA, ROCIO (0934))<BR>(CORNETTO, AMANDA (6471))<BR>(DERISI, NICHOLAS (7824))<BR>(DOMINGUEZ, RITCHIE (9233))<BR>(JENNINGS, ANASTASIA (5649))<BR>(KAEWUSSDANGKUL, GEORGE (2664))<BR>(KNIGHT, ALICIA (3634))<BR>(LEVIN, ZAKARY (8977))<BR>(MARSHALL, AMIFIKA (7893))<BR>(MARTINVIGNOLES, CLAUDIA (8371))<BR>(MULLINGS, FELICIA (5478))<BR>(NAVARRETE, CYNTHIA (9899))<BR>(PAPERMAN, HARRISON (6031))<BR>(RICH, CHRISTIAN (8770))<BR>(RODRIGUEZ, ELIANA (2811))<BR>(ZHOU, EVA (5671))</td></tr><tr><td> 108-topic-5 </td><td>(BALRUP, JULIAN (3340))<BR>(BUSCH, JASON (3543))<BR>(CAZLEY, ASHER (1583))<BR>(CORNETTO, AMANDA (6471))<BR>(DERISI, NICHOLAS (7824))<BR>(DOMINGUEZ, RITCHIE (9233))<BR>(JENNINGS, ANASTASIA (5649))<BR>(KAEWUSSDANGKUL, GEORGE (2664))<BR>(KNIGHT, ALICIA (3634))<BR>(LEVIN, ZAKARY (8977))<BR>(MARSHALL, AMIFIKA (7893))<BR>(MARTINVIGNOLES, CLAUDIA (8371))<BR>(MULLINGS, FELICIA (5478))<BR>(NAVARRETE, CYNTHIA (9899))<BR>(SANON, BARBARA (4230))<BR>(VARGAS, ARIANNE (1357))<BR>(VIVAR, GABRIELA (3607))<BR>(ZHOU, EVA (5671))</td></tr><tr><td> 108-topic-6 </td><td>(AKSNES, CARSON (4495))<BR>(BALRUP, JULIAN (3340))<BR>(BUSCH, JASON (3543))<BR>(CAZLEY, ASHER (1583))<BR>(CORNETTO, AMANDA (6471))<BR>(DERISI, NICHOLAS (7824))<BR>(DOMINGUEZ, RITCHIE (9233))<BR>(GREGORY, GERENA (2100))<BR>(KNIGHT, ALICIA (3634))<BR>(LEVIN, ZAKARY (8977))<BR>(MARTINVIGNOLES, CLAUDIA (8371))<BR>(NAVARRETE, CYNTHIA (9899))<BR>(NUNEZ, CHARLIE (6210))<BR>(RICH, CHRISTIAN (8770))<BR>(SANON, BARBARA (4230))<BR>(VARGAS, ARIANNE (1357))<BR>(VIVAR, GABRIELA (3607))<BR>(ZHOU, EVA (5671))</td></tr><tr><td> 108-topic-7 </td><td>(AKSNES, CARSON (4495))<BR>(BALRUP, JULIAN (3340))<BR>(BUSCH, JASON (3543))<BR>(CHAVIRA, ROCIO (0934))<BR>(DERISI, NICHOLAS (7824))<BR>(NUNEZ, CHARLIE (6210))<BR>(RICH, CHRISTIAN (8770))<BR>(VARGAS, ARIANNE (1357))<BR>(VIVAR, GABRIELA (3607))</td></tr><tr><td> 108-topic-8 </td><td>(BALRUP, JULIAN (3340))<BR>(BUSCH, JASON (3543))<BR>(CHAVIRA, ROCIO (0934))<BR>(CORNETTO, AMANDA (6471))<BR>(MARSHALL, AMIFIKA (7893))<BR>(MARTINVIGNOLES, CLAUDIA (8371))<BR>(NUNEZ, CHARLIE (6210))<BR>(RICH, CHRISTIAN (8770))<BR>(VARGAS, ARIANNE (1357))<BR>(VIVAR, GABRIELA (3607))</td></tr><tr><td> 108-topic-9 </td><td>(AKSNES, CARSON (4495))<BR>(BUSCH, JASON (3543))<BR>(CORNETTO, AMANDA (6471))<BR>(DERISI, NICHOLAS (7824))<BR>(DOMINGUEZ, RITCHIE (9233))<BR>(KNIGHT, ALICIA (3634))<BR>(RICH, CHRISTIAN (8770))<BR>(SOSA, DAVID (3184))<BR>(VIVAR, GABRIELA (3607))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>