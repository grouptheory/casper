#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>50</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>ARONOFF_R</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0760</td><td>BARBOSA, STEPHANIE</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-5<BR>103-topic-8</td></tr><tr><td>0650</td><td>BRYANT, DALLAS</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>7050</td><td>CARRION, SAMANTHA</td><td>Absent on the assessment test.</td></tr><tr><td>5355</td><td>CASTELLANOS, CHRISTOPHER</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>8894</td><td>CHEN, CONNIE</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>8323</td><td>GARCES, NEIVA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>2087</td><td>GUILLERMO, NANCY</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>8117</td><td>LAZORJA, FLORINDA</td><td>103-topic-10<BR>103-topic-2<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>4163</td><td>LEE, EDWARD</td><td>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>0071</td><td>MARCONI, CARMINE</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-4<BR>103-topic-6<BR>103-topic-8</td></tr><tr><td>9408</td><td>MARTINEZ, NATASHA</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>4347</td><td>MATOS, CARLOS</td><td>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>8660</td><td>MERCED, GRACIELA</td><td>103-topic-10<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>5849</td><td>MESCAIN, NICHOLAS</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>2682</td><td>MORERA, JASMINE</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-6<BR>103-topic-8</td></tr><tr><td>3185</td><td>PITRE, JONATHAN</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>7451</td><td>REYES, ESPERANZA</td><td>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>0036</td><td>RUVIERA, FRANCISCO</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>4680</td><td>SARAZIN, YANOSKA</td><td>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>0414</td><td>WHITE, JR_DERRICK</td><td>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5Absent on the assessment test.</td></tr><tr><td>1372</td><td>ZAPATA, TIFFANY</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-1 </td><td>(BARBOSA, STEPHANIE (0760))<BR>(BRYANT, DALLAS (0650))<BR>(CASTELLANOS, CHRISTOPHER (5355))<BR>(CHEN, CONNIE (8894))<BR>(GARCES, NEIVA (8323))<BR>(GUILLERMO, NANCY (2087))<BR>(MARCONI, CARMINE (0071))<BR>(MARTINEZ, NATASHA (9408))<BR>(MESCAIN, NICHOLAS (5849))<BR>(MORERA, JASMINE (2682))<BR>(PITRE, JONATHAN (3185))<BR>(RUVIERA, FRANCISCO (0036))<BR>(ZAPATA, TIFFANY (1372))</td></tr><tr><td> 103-topic-10 </td><td>(BARBOSA, STEPHANIE (0760))<BR>(CHEN, CONNIE (8894))<BR>(GARCES, NEIVA (8323))<BR>(GUILLERMO, NANCY (2087))<BR>(LAZORJA, FLORINDA (8117))<BR>(LEE, EDWARD (4163))<BR>(MARCONI, CARMINE (0071))<BR>(MERCED, GRACIELA (8660))<BR>(MESCAIN, NICHOLAS (5849))<BR>(MORERA, JASMINE (2682))<BR>(PITRE, JONATHAN (3185))<BR>(REYES, ESPERANZA (7451))<BR>(RUVIERA, FRANCISCO (0036))</td></tr><tr><td> 103-topic-2 </td><td>(BARBOSA, STEPHANIE (0760))<BR>(BRYANT, DALLAS (0650))<BR>(CASTELLANOS, CHRISTOPHER (5355))<BR>(CHEN, CONNIE (8894))<BR>(GARCES, NEIVA (8323))<BR>(GUILLERMO, NANCY (2087))<BR>(LAZORJA, FLORINDA (8117))<BR>(LEE, EDWARD (4163))<BR>(MARTINEZ, NATASHA (9408))<BR>(MATOS, CARLOS (4347))<BR>(MESCAIN, NICHOLAS (5849))<BR>(PITRE, JONATHAN (3185))<BR>(REYES, ESPERANZA (7451))<BR>(RUVIERA, FRANCISCO (0036))<BR>(WHITE, JR_DERRICK (0414))<BR>(ZAPATA, TIFFANY (1372))</td></tr><tr><td> 103-topic-3 </td><td>(BARBOSA, STEPHANIE (0760))<BR>(BRYANT, DALLAS (0650))<BR>(CASTELLANOS, CHRISTOPHER (5355))<BR>(CHEN, CONNIE (8894))<BR>(GARCES, NEIVA (8323))<BR>(GUILLERMO, NANCY (2087))<BR>(LEE, EDWARD (4163))<BR>(MARTINEZ, NATASHA (9408))<BR>(MATOS, CARLOS (4347))<BR>(MESCAIN, NICHOLAS (5849))<BR>(PITRE, JONATHAN (3185))<BR>(REYES, ESPERANZA (7451))<BR>(RUVIERA, FRANCISCO (0036))<BR>(SARAZIN, YANOSKA (4680))<BR>(WHITE, JR_DERRICK (0414))<BR>(ZAPATA, TIFFANY (1372))</td></tr><tr><td> 103-topic-4 </td><td>(BRYANT, DALLAS (0650))<BR>(CASTELLANOS, CHRISTOPHER (5355))<BR>(CHEN, CONNIE (8894))<BR>(GARCES, NEIVA (8323))<BR>(GUILLERMO, NANCY (2087))<BR>(LAZORJA, FLORINDA (8117))<BR>(MARCONI, CARMINE (0071))<BR>(MARTINEZ, NATASHA (9408))<BR>(MATOS, CARLOS (4347))<BR>(MESCAIN, NICHOLAS (5849))<BR>(PITRE, JONATHAN (3185))<BR>(REYES, ESPERANZA (7451))<BR>(RUVIERA, FRANCISCO (0036))<BR>(SARAZIN, YANOSKA (4680))<BR>(WHITE, JR_DERRICK (0414))<BR>(ZAPATA, TIFFANY (1372))</td></tr><tr><td> 103-topic-5 </td><td>(BARBOSA, STEPHANIE (0760))<BR>(BRYANT, DALLAS (0650))<BR>(GARCES, NEIVA (8323))<BR>(GUILLERMO, NANCY (2087))<BR>(MESCAIN, NICHOLAS (5849))<BR>(PITRE, JONATHAN (3185))<BR>(REYES, ESPERANZA (7451))<BR>(RUVIERA, FRANCISCO (0036))<BR>(SARAZIN, YANOSKA (4680))<BR>(WHITE, JR_DERRICK (0414))<BR>(ZAPATA, TIFFANY (1372))</td></tr><tr><td> 103-topic-6 </td><td>(BRYANT, DALLAS (0650))<BR>(CASTELLANOS, CHRISTOPHER (5355))<BR>(GARCES, NEIVA (8323))<BR>(GUILLERMO, NANCY (2087))<BR>(LAZORJA, FLORINDA (8117))<BR>(LEE, EDWARD (4163))<BR>(MARCONI, CARMINE (0071))<BR>(MARTINEZ, NATASHA (9408))<BR>(MATOS, CARLOS (4347))<BR>(MERCED, GRACIELA (8660))<BR>(MESCAIN, NICHOLAS (5849))<BR>(MORERA, JASMINE (2682))<BR>(PITRE, JONATHAN (3185))<BR>(REYES, ESPERANZA (7451))<BR>(RUVIERA, FRANCISCO (0036))<BR>(ZAPATA, TIFFANY (1372))</td></tr><tr><td> 103-topic-7 </td><td>(BRYANT, DALLAS (0650))<BR>(CASTELLANOS, CHRISTOPHER (5355))<BR>(CHEN, CONNIE (8894))<BR>(GARCES, NEIVA (8323))<BR>(GUILLERMO, NANCY (2087))<BR>(LAZORJA, FLORINDA (8117))<BR>(LEE, EDWARD (4163))<BR>(MARTINEZ, NATASHA (9408))<BR>(MATOS, CARLOS (4347))<BR>(MERCED, GRACIELA (8660))<BR>(MESCAIN, NICHOLAS (5849))<BR>(PITRE, JONATHAN (3185))<BR>(REYES, ESPERANZA (7451))<BR>(RUVIERA, FRANCISCO (0036))<BR>(SARAZIN, YANOSKA (4680))<BR>(ZAPATA, TIFFANY (1372))</td></tr><tr><td> 103-topic-8 </td><td>(BARBOSA, STEPHANIE (0760))<BR>(BRYANT, DALLAS (0650))<BR>(CASTELLANOS, CHRISTOPHER (5355))<BR>(CHEN, CONNIE (8894))<BR>(GARCES, NEIVA (8323))<BR>(GUILLERMO, NANCY (2087))<BR>(LAZORJA, FLORINDA (8117))<BR>(LEE, EDWARD (4163))<BR>(MARCONI, CARMINE (0071))<BR>(MARTINEZ, NATASHA (9408))<BR>(MATOS, CARLOS (4347))<BR>(MERCED, GRACIELA (8660))<BR>(MESCAIN, NICHOLAS (5849))<BR>(MORERA, JASMINE (2682))<BR>(PITRE, JONATHAN (3185))<BR>(REYES, ESPERANZA (7451))<BR>(RUVIERA, FRANCISCO (0036))<BR>(SARAZIN, YANOSKA (4680))<BR>(ZAPATA, TIFFANY (1372))</td></tr><tr><td> 103-topic-9 </td><td>(BRYANT, DALLAS (0650))<BR>(CHEN, CONNIE (8894))<BR>(GARCES, NEIVA (8323))<BR>(GUILLERMO, NANCY (2087))<BR>(MERCED, GRACIELA (8660))<BR>(PITRE, JONATHAN (3185))<BR>(REYES, ESPERANZA (7451))<BR>(RUVIERA, FRANCISCO (0036))<BR>(SARAZIN, YANOSKA (4680))<BR>(ZAPATA, TIFFANY (1372))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
