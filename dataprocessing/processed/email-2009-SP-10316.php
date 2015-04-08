#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>16</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>ANDREU_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7464</td><td>CHAI, MONICA</td><td>103-topic-2<BR>103-topic-3<BR>103-topic-5</td></tr><tr><td>3426</td><td>FELICIANO, RADAMES</td><td>Absent on the assessment test.</td></tr><tr><td>3368</td><td>FUENTES, MELINDA</td><td>103-topic-1<BR>103-topic-4</td></tr><tr><td>8164</td><td>KOSCIOLEK, CHRISTOPHER</td><td>103-topic-2<BR>103-topic-4<BR>103-topic-5</td></tr><tr><td>0787</td><td>MARSENAT, JUNIA</td><td>103-topic-4</td></tr><tr><td>3036</td><td>MUNOZ, COSME</td><td>103-topic-3<BR>103-topic-4</td></tr><tr><td>9832</td><td>OGANDO, NELCIDA</td><td>Absent on the assessment test.</td></tr><tr><td>4923</td><td>PELLEGRINO, MICHAEL</td><td>103-topic-2<BR>103-topic-3<BR>103-topic-4</td></tr><tr><td>5760</td><td>PENNIX, QUINCY</td><td>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5</td></tr><tr><td>2994</td><td>RODRIGUEZ, ANA</td><td>103-topic-1<BR>103-topic-4<BR>103-topic-5</td></tr><tr><td>4360</td><td>SAVCHUK, KATERINA</td><td>103-topic-1<BR>103-topic-5</td></tr><tr><td>2908</td><td>STRAKER, COURTNEY</td><td>103-topic-2<BR>103-topic-4</td></tr><tr><td>9222</td><td>TOURAY, MARIAM</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-1 </td><td>(FUENTES, MELINDA (3368))<BR>(RODRIGUEZ, ANA (2994))<BR>(SAVCHUK, KATERINA (4360))Absent on the assessment test.</td></tr><tr><td> 103-topic-2 </td><td>(CHAI, MONICA (7464))<BR>(KOSCIOLEK, CHRISTOPHER (8164))<BR>(PELLEGRINO, MICHAEL (4923))<BR>(PENNIX, QUINCY (5760))<BR>(STRAKER, COURTNEY (2908))Absent on the assessment test.</td></tr><tr><td> 103-topic-3 </td><td>(CHAI, MONICA (7464))<BR>(MUNOZ, COSME (3036))<BR>(PELLEGRINO, MICHAEL (4923))<BR>(PENNIX, QUINCY (5760))Absent on the assessment test.</td></tr><tr><td> 103-topic-4 </td><td>(FUENTES, MELINDA (3368))<BR>(KOSCIOLEK, CHRISTOPHER (8164))<BR>(MARSENAT, JUNIA (0787))<BR>(MUNOZ, COSME (3036))<BR>(PELLEGRINO, MICHAEL (4923))<BR>(PENNIX, QUINCY (5760))<BR>(RODRIGUEZ, ANA (2994))<BR>(STRAKER, COURTNEY (2908))Absent on the assessment test.</td></tr><tr><td> 103-topic-5 </td><td>(CHAI, MONICA (7464))<BR>(KOSCIOLEK, CHRISTOPHER (8164))<BR>(PENNIX, QUINCY (5760))<BR>(RODRIGUEZ, ANA (2994))<BR>(SAVCHUK, KATERINA (4360))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
