#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>17</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>FREMPONG_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6435</td><td>BITTS, DANIEL</td><td>104-topic-1<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>1655</td><td>BROWN, KASHEIBA</td><td>104-topic-1<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>3658</td><td>CHARLIER, PATRICK</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>2289</td><td>DEDAJ, KLAUDIA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>8583</td><td>DIAZ, MARIA</td><td>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>9619</td><td>FERGUSON, ALIZEE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>8360</td><td>GALIMI, NICHOLAS</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>1548</td><td>GAMVRIAS, KONSTANTINOS</td><td>Absent on the assessment test.</td></tr><tr><td>2366</td><td>GOMEZ, ARIEL</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>0604</td><td>GRAZIDE, MARCO</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>3231</td><td>HAN, JO</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>2471</td><td>HENRIQUEZ, GERALDINE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>2964</td><td>HERNANDEZ, ASHLEY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>7838</td><td>HERNANDEZ, JERRY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>8355</td><td>JAMIESON, JONATHAN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>3329</td><td>LOPEZ, MARIA</td><td>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>6164</td><td>MAROUTSIS, ALEXANDER</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>2117</td><td>MENENDEZ, LIZ</td><td>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>0006</td><td>MULVANEY, ASHLEY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>2951</td><td>SABOVIC, DZENAN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>4851</td><td>SHIVBARAN, MALINDA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>2206</td><td>SINGH, RATTAN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>4592</td><td>TICALI, NICHOLAS</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>5468</td><td>ZHANG, YINI</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(BITTS, DANIEL (6435))<BR>(BROWN, KASHEIBA (1655))<BR>(CHARLIER, PATRICK (3658))<BR>(DEDAJ, KLAUDIA (2289))<BR>(FERGUSON, ALIZEE (9619))<BR>(GALIMI, NICHOLAS (8360))<BR>(GOMEZ, ARIEL (2366))<BR>(GRAZIDE, MARCO (0604))<BR>(HAN, JO (3231))<BR>(HENRIQUEZ, GERALDINE (2471))<BR>(HERNANDEZ, ASHLEY (2964))<BR>(HERNANDEZ, JERRY (7838))<BR>(JAMIESON, JONATHAN (8355))<BR>(MAROUTSIS, ALEXANDER (6164))<BR>(MULVANEY, ASHLEY (0006))<BR>(SABOVIC, DZENAN (2951))<BR>(SHIVBARAN, MALINDA (4851))<BR>(SINGH, RATTAN (2206))<BR>(TICALI, NICHOLAS (4592))Absent on the assessment test.</td></tr><tr><td> 104-topic-10 </td><td>(CHARLIER, PATRICK (3658))<BR>(DEDAJ, KLAUDIA (2289))<BR>(DIAZ, MARIA (8583))<BR>(FERGUSON, ALIZEE (9619))<BR>(GALIMI, NICHOLAS (8360))<BR>(GRAZIDE, MARCO (0604))<BR>(HAN, JO (3231))<BR>(HENRIQUEZ, GERALDINE (2471))<BR>(HERNANDEZ, ASHLEY (2964))<BR>(HERNANDEZ, JERRY (7838))<BR>(JAMIESON, JONATHAN (8355))<BR>(LOPEZ, MARIA (3329))<BR>(MAROUTSIS, ALEXANDER (6164))<BR>(MULVANEY, ASHLEY (0006))<BR>(SABOVIC, DZENAN (2951))<BR>(SHIVBARAN, MALINDA (4851))<BR>(SINGH, RATTAN (2206))<BR>(TICALI, NICHOLAS (4592))Absent on the assessment test.</td></tr><tr><td> 104-topic-2 </td><td>(DEDAJ, KLAUDIA (2289))<BR>(DIAZ, MARIA (8583))<BR>(GALIMI, NICHOLAS (8360))<BR>(GOMEZ, ARIEL (2366))<BR>(HENRIQUEZ, GERALDINE (2471))<BR>(HERNANDEZ, ASHLEY (2964))<BR>(LOPEZ, MARIA (3329))<BR>(SABOVIC, DZENAN (2951))<BR>(SHIVBARAN, MALINDA (4851))Absent on the assessment test.</td></tr><tr><td> 104-topic-3 </td><td>(DEDAJ, KLAUDIA (2289))<BR>(GALIMI, NICHOLAS (8360))<BR>(GOMEZ, ARIEL (2366))<BR>(HERNANDEZ, ASHLEY (2964))<BR>(HERNANDEZ, JERRY (7838))<BR>(JAMIESON, JONATHAN (8355))<BR>(MAROUTSIS, ALEXANDER (6164))<BR>(SABOVIC, DZENAN (2951))<BR>(TICALI, NICHOLAS (4592))Absent on the assessment test.</td></tr><tr><td> 104-topic-4 </td><td>(DEDAJ, KLAUDIA (2289))<BR>(DIAZ, MARIA (8583))<BR>(GOMEZ, ARIEL (2366))<BR>(GRAZIDE, MARCO (0604))<BR>(HAN, JO (3231))<BR>(HENRIQUEZ, GERALDINE (2471))<BR>(HERNANDEZ, ASHLEY (2964))<BR>(HERNANDEZ, JERRY (7838))<BR>(JAMIESON, JONATHAN (8355))<BR>(LOPEZ, MARIA (3329))<BR>(MAROUTSIS, ALEXANDER (6164))<BR>(SHIVBARAN, MALINDA (4851))<BR>(TICALI, NICHOLAS (4592))Absent on the assessment test.</td></tr><tr><td> 104-topic-5 </td><td>(BITTS, DANIEL (6435))<BR>(BROWN, KASHEIBA (1655))<BR>(CHARLIER, PATRICK (3658))<BR>(DEDAJ, KLAUDIA (2289))<BR>(DIAZ, MARIA (8583))<BR>(FERGUSON, ALIZEE (9619))<BR>(GALIMI, NICHOLAS (8360))<BR>(GOMEZ, ARIEL (2366))<BR>(GRAZIDE, MARCO (0604))<BR>(HAN, JO (3231))<BR>(HENRIQUEZ, GERALDINE (2471))<BR>(HERNANDEZ, ASHLEY (2964))<BR>(HERNANDEZ, JERRY (7838))<BR>(LOPEZ, MARIA (3329))<BR>(MAROUTSIS, ALEXANDER (6164))<BR>(MENENDEZ, LIZ (2117))<BR>(MULVANEY, ASHLEY (0006))<BR>(SABOVIC, DZENAN (2951))<BR>(SINGH, RATTAN (2206))<BR>(TICALI, NICHOLAS (4592))Absent on the assessment test.</td></tr><tr><td> 104-topic-6 </td><td>(BITTS, DANIEL (6435))<BR>(BROWN, KASHEIBA (1655))<BR>(CHARLIER, PATRICK (3658))<BR>(DEDAJ, KLAUDIA (2289))<BR>(DIAZ, MARIA (8583))<BR>(FERGUSON, ALIZEE (9619))<BR>(GALIMI, NICHOLAS (8360))<BR>(GOMEZ, ARIEL (2366))<BR>(GRAZIDE, MARCO (0604))<BR>(HAN, JO (3231))<BR>(HENRIQUEZ, GERALDINE (2471))<BR>(HERNANDEZ, ASHLEY (2964))<BR>(HERNANDEZ, JERRY (7838))<BR>(JAMIESON, JONATHAN (8355))<BR>(LOPEZ, MARIA (3329))<BR>(MAROUTSIS, ALEXANDER (6164))<BR>(MENENDEZ, LIZ (2117))<BR>(MULVANEY, ASHLEY (0006))<BR>(SABOVIC, DZENAN (2951))<BR>(SHIVBARAN, MALINDA (4851))<BR>(SINGH, RATTAN (2206))<BR>(TICALI, NICHOLAS (4592))Absent on the assessment test.</td></tr><tr><td> 104-topic-7 </td><td>(BITTS, DANIEL (6435))<BR>(BROWN, KASHEIBA (1655))<BR>(CHARLIER, PATRICK (3658))<BR>(DEDAJ, KLAUDIA (2289))<BR>(DIAZ, MARIA (8583))<BR>(FERGUSON, ALIZEE (9619))<BR>(GALIMI, NICHOLAS (8360))<BR>(GOMEZ, ARIEL (2366))<BR>(GRAZIDE, MARCO (0604))<BR>(HAN, JO (3231))<BR>(HENRIQUEZ, GERALDINE (2471))<BR>(HERNANDEZ, ASHLEY (2964))<BR>(HERNANDEZ, JERRY (7838))<BR>(JAMIESON, JONATHAN (8355))<BR>(LOPEZ, MARIA (3329))<BR>(MAROUTSIS, ALEXANDER (6164))<BR>(MENENDEZ, LIZ (2117))<BR>(MULVANEY, ASHLEY (0006))<BR>(SABOVIC, DZENAN (2951))<BR>(SHIVBARAN, MALINDA (4851))<BR>(SINGH, RATTAN (2206))<BR>(TICALI, NICHOLAS (4592))Absent on the assessment test.</td></tr><tr><td> 104-topic-8 </td><td>(BROWN, KASHEIBA (1655))<BR>(CHARLIER, PATRICK (3658))<BR>(DEDAJ, KLAUDIA (2289))<BR>(DIAZ, MARIA (8583))<BR>(FERGUSON, ALIZEE (9619))<BR>(HERNANDEZ, ASHLEY (2964))<BR>(MULVANEY, ASHLEY (0006))<BR>(TICALI, NICHOLAS (4592))Absent on the assessment test.</td></tr><tr><td> 104-topic-9 </td><td>(CHARLIER, PATRICK (3658))<BR>(DEDAJ, KLAUDIA (2289))<BR>(GOMEZ, ARIEL (2366))<BR>(GRAZIDE, MARCO (0604))<BR>(HENRIQUEZ, GERALDINE (2471))<BR>(HERNANDEZ, ASHLEY (2964))<BR>(LOPEZ, MARIA (3329))<BR>(MAROUTSIS, ALEXANDER (6164))<BR>(MULVANEY, ASHLEY (0006))<BR>(TICALI, NICHOLAS (4592))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
