#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>PEIKES_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6686</td><td>BRERETON, MICHAEL</td><td>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>5848</td><td>BRITO, DORIS</td><td>Absent on the assessment test.</td></tr><tr><td>0045</td><td>BRITO, MIKE</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>3969</td><td>CHOWDHURY, SALMAN</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>3502</td><td>CINTRON, SHAVVON</td><td>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>7708</td><td>FIGUEROA, NORA-ALICIA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-4<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>7871</td><td>GONTA, SERGEY</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>1992</td><td>GONZALEZ, CHRISTOPHER</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>3913</td><td>HORNE, NICHOLAS</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>1054</td><td>JOHNSON, NICHOLAS</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>8138</td><td>MADER, TYLER</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>9706</td><td>MARTE, JESSICA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>4274</td><td>MATEOS, JESSICA</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-6<BR>103-topic-8</td></tr><tr><td>4816</td><td>MCCORMICK, ANTHONY</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>0439</td><td>MENDEZ, AGUSTIN</td><td>Absent on the assessment test.</td></tr><tr><td>3049</td><td>MILLER, DANIEL</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>4746</td><td>PLACANICA, VINCENT</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>4647</td><td>RAMOS, RICHARD</td><td>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>3088</td><td>RODRIGUEZ, KIMBERLY</td><td>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>0377</td><td>VASQUEZ, GABRIEL</td><td>103-topic-2<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>6561</td><td>VELEZ, CORETTA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-1 </td><td>(BRITO, MIKE (0045))<BR>(CHOWDHURY, SALMAN (3969))<BR>(FIGUEROA, NORA-ALICIA (7708))<BR>(GONTA, SERGEY (7871))<BR>(GONZALEZ, CHRISTOPHER (1992))<BR>(HORNE, NICHOLAS (3913))<BR>(JOHNSON, NICHOLAS (1054))<BR>(MADER, TYLER (8138))<BR>(MARTE, JESSICA (9706))<BR>(MATEOS, JESSICA (4274))<BR>(MCCORMICK, ANTHONY (4816))<BR>(MILLER, DANIEL (3049))<BR>(PLACANICA, VINCENT (4746))<BR>(VELEZ, CORETTA (6561))</td></tr><tr><td> 103-topic-10 </td><td>(BRERETON, MICHAEL (6686))<BR>(FIGUEROA, NORA-ALICIA (7708))<BR>(GONTA, SERGEY (7871))<BR>(GONZALEZ, CHRISTOPHER (1992))<BR>(JOHNSON, NICHOLAS (1054))<BR>(MADER, TYLER (8138))<BR>(MARTE, JESSICA (9706))<BR>(MCCORMICK, ANTHONY (4816))<BR>(PLACANICA, VINCENT (4746))<BR>(RAMOS, RICHARD (4647))<BR>(RODRIGUEZ, KIMBERLY (3088))<BR>(VELEZ, CORETTA (6561))</td></tr><tr><td> 103-topic-2 </td><td>(BRERETON, MICHAEL (6686))<BR>(BRITO, MIKE (0045))<BR>(CHOWDHURY, SALMAN (3969))<BR>(FIGUEROA, NORA-ALICIA (7708))<BR>(GONZALEZ, CHRISTOPHER (1992))<BR>(HORNE, NICHOLAS (3913))<BR>(JOHNSON, NICHOLAS (1054))<BR>(MADER, TYLER (8138))<BR>(MARTE, JESSICA (9706))<BR>(MATEOS, JESSICA (4274))<BR>(MCCORMICK, ANTHONY (4816))<BR>(MILLER, DANIEL (3049))<BR>(PLACANICA, VINCENT (4746))<BR>(RAMOS, RICHARD (4647))<BR>(RODRIGUEZ, KIMBERLY (3088))<BR>(VASQUEZ, GABRIEL (0377))<BR>(VELEZ, CORETTA (6561))</td></tr><tr><td> 103-topic-3 </td><td>(BRERETON, MICHAEL (6686))<BR>(CHOWDHURY, SALMAN (3969))<BR>(CINTRON, SHAVVON (3502))<BR>(GONTA, SERGEY (7871))<BR>(GONZALEZ, CHRISTOPHER (1992))<BR>(HORNE, NICHOLAS (3913))<BR>(JOHNSON, NICHOLAS (1054))<BR>(MADER, TYLER (8138))<BR>(MARTE, JESSICA (9706))<BR>(MATEOS, JESSICA (4274))<BR>(MCCORMICK, ANTHONY (4816))<BR>(PLACANICA, VINCENT (4746))<BR>(RAMOS, RICHARD (4647))<BR>(RODRIGUEZ, KIMBERLY (3088))<BR>(VELEZ, CORETTA (6561))</td></tr><tr><td> 103-topic-4 </td><td>(BRERETON, MICHAEL (6686))<BR>(CINTRON, SHAVVON (3502))<BR>(FIGUEROA, NORA-ALICIA (7708))<BR>(GONTA, SERGEY (7871))<BR>(HORNE, NICHOLAS (3913))<BR>(JOHNSON, NICHOLAS (1054))<BR>(MADER, TYLER (8138))<BR>(MARTE, JESSICA (9706))<BR>(MCCORMICK, ANTHONY (4816))<BR>(RAMOS, RICHARD (4647))<BR>(RODRIGUEZ, KIMBERLY (3088))<BR>(VASQUEZ, GABRIEL (0377))<BR>(VELEZ, CORETTA (6561))</td></tr><tr><td> 103-topic-5 </td><td>(CHOWDHURY, SALMAN (3969))<BR>(CINTRON, SHAVVON (3502))<BR>(GONZALEZ, CHRISTOPHER (1992))<BR>(HORNE, NICHOLAS (3913))<BR>(JOHNSON, NICHOLAS (1054))<BR>(MARTE, JESSICA (9706))<BR>(MCCORMICK, ANTHONY (4816))<BR>(MILLER, DANIEL (3049))<BR>(PLACANICA, VINCENT (4746))<BR>(RAMOS, RICHARD (4647))<BR>(RODRIGUEZ, KIMBERLY (3088))<BR>(VELEZ, CORETTA (6561))</td></tr><tr><td> 103-topic-6 </td><td>(BRITO, MIKE (0045))<BR>(CHOWDHURY, SALMAN (3969))<BR>(GONTA, SERGEY (7871))<BR>(GONZALEZ, CHRISTOPHER (1992))<BR>(HORNE, NICHOLAS (3913))<BR>(JOHNSON, NICHOLAS (1054))<BR>(MADER, TYLER (8138))<BR>(MARTE, JESSICA (9706))<BR>(MATEOS, JESSICA (4274))<BR>(MCCORMICK, ANTHONY (4816))<BR>(MILLER, DANIEL (3049))<BR>(PLACANICA, VINCENT (4746))<BR>(RODRIGUEZ, KIMBERLY (3088))<BR>(VASQUEZ, GABRIEL (0377))<BR>(VELEZ, CORETTA (6561))</td></tr><tr><td> 103-topic-7 </td><td>(BRITO, MIKE (0045))<BR>(CHOWDHURY, SALMAN (3969))<BR>(CINTRON, SHAVVON (3502))<BR>(FIGUEROA, NORA-ALICIA (7708))<BR>(GONTA, SERGEY (7871))<BR>(GONZALEZ, CHRISTOPHER (1992))<BR>(HORNE, NICHOLAS (3913))<BR>(JOHNSON, NICHOLAS (1054))<BR>(MADER, TYLER (8138))<BR>(MARTE, JESSICA (9706))<BR>(MCCORMICK, ANTHONY (4816))<BR>(MILLER, DANIEL (3049))<BR>(PLACANICA, VINCENT (4746))<BR>(RAMOS, RICHARD (4647))<BR>(RODRIGUEZ, KIMBERLY (3088))<BR>(VASQUEZ, GABRIEL (0377))<BR>(VELEZ, CORETTA (6561))</td></tr><tr><td> 103-topic-8 </td><td>(BRERETON, MICHAEL (6686))<BR>(BRITO, MIKE (0045))<BR>(CHOWDHURY, SALMAN (3969))<BR>(CINTRON, SHAVVON (3502))<BR>(FIGUEROA, NORA-ALICIA (7708))<BR>(GONTA, SERGEY (7871))<BR>(GONZALEZ, CHRISTOPHER (1992))<BR>(HORNE, NICHOLAS (3913))<BR>(JOHNSON, NICHOLAS (1054))<BR>(MADER, TYLER (8138))<BR>(MARTE, JESSICA (9706))<BR>(MATEOS, JESSICA (4274))<BR>(MCCORMICK, ANTHONY (4816))<BR>(MILLER, DANIEL (3049))<BR>(PLACANICA, VINCENT (4746))<BR>(RAMOS, RICHARD (4647))<BR>(RODRIGUEZ, KIMBERLY (3088))<BR>(VASQUEZ, GABRIEL (0377))<BR>(VELEZ, CORETTA (6561))</td></tr><tr><td> 103-topic-9 </td><td>(BRERETON, MICHAEL (6686))<BR>(BRITO, MIKE (0045))<BR>(CHOWDHURY, SALMAN (3969))<BR>(JOHNSON, NICHOLAS (1054))<BR>(MARTE, JESSICA (9706))<BR>(RAMOS, RICHARD (4647))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
