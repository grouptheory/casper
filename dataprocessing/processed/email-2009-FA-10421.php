#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>21</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>LINN_G</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1429</td><td>ALONGE, KRISTIN</td><td>Absent on the assessment test.</td></tr><tr><td>6882</td><td>AMADOR, JAMES</td><td>104-topic-10<BR>104-topic-5<BR>104-topic-7</td></tr><tr><td>1919</td><td>BOAMAH, VICTOR</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>3766</td><td>CEBALLOS, MARIAH</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>0165</td><td>CRAIG, TIFFANY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>2384</td><td>DA_COSTA_SOARES, SAFIE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>7392</td><td>EHRESMANN, JENNIFER</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>7294</td><td>ESTREMERA, ZYOMARA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>2031</td><td>FAYETTE, HENDRICK</td><td>104-topic-10<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>1725</td><td>FONSECA, CECILY</td><td>104-topic-10<BR>104-topic-3<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>9580</td><td>GARCIA, STEPHANIE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-5<BR>104-topic-6<BR>104-topic-9</td></tr><tr><td>6698</td><td>GENAO, PAMELA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>6548</td><td>JIMENEZ, SELINETT</td><td>Absent on the assessment test.</td></tr><tr><td>3983</td><td>KAPIAMBA, EVARISTE</td><td>Absent on the assessment test.</td></tr><tr><td>6257</td><td>LAFAURIE, DONALDO</td><td>104-topic-10<BR>104-topic-5<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>7996</td><td>LI, MAGGIE</td><td>Absent on the assessment test.</td></tr><tr><td>4933</td><td>LORA, ZOE</td><td>Absent on the assessment test.</td></tr><tr><td>1839</td><td>MARCANO, HERMAN</td><td>Absent on the assessment test.</td></tr><tr><td>5453</td><td>MONDELLO, ANTHONY</td><td>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-7</td></tr><tr><td>3698</td><td>RANDALL, JAMES</td><td>Absent on the assessment test.</td></tr><tr><td>3017</td><td>RICHARDSON, CHANAY</td><td>Absent on the assessment test.</td></tr><tr><td>5576</td><td>ROBLES, JESSICA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>0166</td><td>SHAHBAIN, MOHAMED</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>1421</td><td>SHAMIN, IBTEHAJ</td><td>Absent on the assessment test.</td></tr><tr><td>2729</td><td>VALDEZ, HECTOR</td><td>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(BOAMAH, VICTOR (1919))<BR>(CEBALLOS, MARIAH (3766))<BR>(CRAIG, TIFFANY (0165))<BR>(DA_COSTA_SOARES, SAFIE (2384))<BR>(EHRESMANN, JENNIFER (7392))<BR>(ESTREMERA, ZYOMARA (7294))<BR>(GARCIA, STEPHANIE (9580))<BR>(GENAO, PAMELA (6698))<BR>(ROBLES, JESSICA (5576))<BR>(SHAHBAIN, MOHAMED (0166))</td></tr><tr><td> 104-topic-10 </td><td>(AMADOR, JAMES (6882))<BR>(BOAMAH, VICTOR (1919))<BR>(CEBALLOS, MARIAH (3766))<BR>(CRAIG, TIFFANY (0165))<BR>(DA_COSTA_SOARES, SAFIE (2384))<BR>(EHRESMANN, JENNIFER (7392))<BR>(ESTREMERA, ZYOMARA (7294))<BR>(FAYETTE, HENDRICK (2031))<BR>(FONSECA, CECILY (1725))<BR>(GARCIA, STEPHANIE (9580))<BR>(GENAO, PAMELA (6698))<BR>(LAFAURIE, DONALDO (6257))<BR>(MONDELLO, ANTHONY (5453))<BR>(ROBLES, JESSICA (5576))<BR>(SHAHBAIN, MOHAMED (0166))<BR>(VALDEZ, HECTOR (2729))</td></tr><tr><td> 104-topic-2 </td><td>(CEBALLOS, MARIAH (3766))<BR>(CRAIG, TIFFANY (0165))<BR>(ESTREMERA, ZYOMARA (7294))<BR>(GARCIA, STEPHANIE (9580))<BR>(GENAO, PAMELA (6698))<BR>(ROBLES, JESSICA (5576))<BR>(SHAHBAIN, MOHAMED (0166))<BR>(VALDEZ, HECTOR (2729))</td></tr><tr><td> 104-topic-3 </td><td>(EHRESMANN, JENNIFER (7392))<BR>(FONSECA, CECILY (1725))<BR>(GENAO, PAMELA (6698))<BR>(SHAHBAIN, MOHAMED (0166))<BR>(VALDEZ, HECTOR (2729))</td></tr><tr><td> 104-topic-4 </td><td>(BOAMAH, VICTOR (1919))<BR>(CRAIG, TIFFANY (0165))<BR>(GENAO, PAMELA (6698))<BR>(MONDELLO, ANTHONY (5453))</td></tr><tr><td> 104-topic-5 </td><td>(AMADOR, JAMES (6882))<BR>(BOAMAH, VICTOR (1919))<BR>(CEBALLOS, MARIAH (3766))<BR>(CRAIG, TIFFANY (0165))<BR>(DA_COSTA_SOARES, SAFIE (2384))<BR>(EHRESMANN, JENNIFER (7392))<BR>(ESTREMERA, ZYOMARA (7294))<BR>(FONSECA, CECILY (1725))<BR>(GARCIA, STEPHANIE (9580))<BR>(GENAO, PAMELA (6698))<BR>(LAFAURIE, DONALDO (6257))<BR>(MONDELLO, ANTHONY (5453))<BR>(ROBLES, JESSICA (5576))<BR>(SHAHBAIN, MOHAMED (0166))<BR>(VALDEZ, HECTOR (2729))</td></tr><tr><td> 104-topic-6 </td><td>(BOAMAH, VICTOR (1919))<BR>(CEBALLOS, MARIAH (3766))<BR>(CRAIG, TIFFANY (0165))<BR>(DA_COSTA_SOARES, SAFIE (2384))<BR>(EHRESMANN, JENNIFER (7392))<BR>(ESTREMERA, ZYOMARA (7294))<BR>(FAYETTE, HENDRICK (2031))<BR>(FONSECA, CECILY (1725))<BR>(GARCIA, STEPHANIE (9580))<BR>(GENAO, PAMELA (6698))<BR>(ROBLES, JESSICA (5576))<BR>(SHAHBAIN, MOHAMED (0166))<BR>(VALDEZ, HECTOR (2729))</td></tr><tr><td> 104-topic-7 </td><td>(AMADOR, JAMES (6882))<BR>(BOAMAH, VICTOR (1919))<BR>(CEBALLOS, MARIAH (3766))<BR>(CRAIG, TIFFANY (0165))<BR>(DA_COSTA_SOARES, SAFIE (2384))<BR>(EHRESMANN, JENNIFER (7392))<BR>(ESTREMERA, ZYOMARA (7294))<BR>(FAYETTE, HENDRICK (2031))<BR>(FONSECA, CECILY (1725))<BR>(GENAO, PAMELA (6698))<BR>(LAFAURIE, DONALDO (6257))<BR>(MONDELLO, ANTHONY (5453))<BR>(ROBLES, JESSICA (5576))<BR>(SHAHBAIN, MOHAMED (0166))<BR>(VALDEZ, HECTOR (2729))</td></tr><tr><td> 104-topic-8 </td><td>(BOAMAH, VICTOR (1919))<BR>(CRAIG, TIFFANY (0165))<BR>(ESTREMERA, ZYOMARA (7294))<BR>(FONSECA, CECILY (1725))<BR>(GENAO, PAMELA (6698))<BR>(LAFAURIE, DONALDO (6257))<BR>(ROBLES, JESSICA (5576))<BR>(SHAHBAIN, MOHAMED (0166))<BR>(VALDEZ, HECTOR (2729))</td></tr><tr><td> 104-topic-9 </td><td>(CRAIG, TIFFANY (0165))<BR>(DA_COSTA_SOARES, SAFIE (2384))<BR>(ESTREMERA, ZYOMARA (7294))<BR>(GARCIA, STEPHANIE (9580))<BR>(GENAO, PAMELA (6698))<BR>(ROBLES, JESSICA (5576))<BR>(VALDEZ, HECTOR (2729))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>