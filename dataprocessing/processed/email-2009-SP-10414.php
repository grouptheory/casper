#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>14</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>BINNS_KENNETH</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9213</td><td>BEJARAN, ORISEL</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>5914</td><td>BLANCHARD, ERNST</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3</td></tr><tr><td>2734</td><td>CAMILO, MARIA</td><td>104-topic-4</td></tr><tr><td>4280</td><td>DORVILLE, JECKSON</td><td>Passed everything.</td></tr><tr><td>2031</td><td>FAYETTE, HENDRICK</td><td>Absent on the assessment test.</td></tr><tr><td>9780</td><td>FERNANDEZ, ILEANY</td><td>Absent on the assessment test.</td></tr><tr><td>7178</td><td>GARCIA, SHARISSE</td><td>104-topic-4</td></tr><tr><td>6644</td><td>HICIANO, YADIRA</td><td>104-topic-1<BR>104-topic-4</td></tr><tr><td>1011</td><td>HOOKS, QUENEE</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>2094</td><td>LABREW, LATOYA</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>3709</td><td>LEIVA, DANIELLE</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>6463</td><td>MAYE, RANDOLPH</td><td>Absent on the assessment test.</td></tr><tr><td>3164</td><td>NEWMAN, SAJEEDA</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>3475</td><td>NUEVA, ROSALBA</td><td>104-topic-1<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>5516</td><td>POLANCO, PEDRO</td><td>104-topic-1<BR>104-topic-4</td></tr><tr><td>5007</td><td>PUELLO, JENNIFER</td><td>104-topic-2<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>9224</td><td>ROBERTSON, ROCHELLE</td><td>Passed everything.</td></tr><tr><td>1021</td><td>ROBINSON, LEILA</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>4945</td><td>THOMAS, ANTHONY</td><td>104-topic-3</td></tr><tr><td>2847</td><td>TORRES, MARLENE</td><td>Absent on the assessment test.</td></tr><tr><td>9221</td><td>VILLAGRA, GENESIS</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(BLANCHARD, ERNST (5914))<BR>(HICIANO, YADIRA (6644))<BR>(HOOKS, QUENEE (1011))<BR>(NUEVA, ROSALBA (3475))<BR>(POLANCO, PEDRO (5516))Absent on the assessment test.</td></tr><tr><td> 104-topic-2 </td><td>(BEJARAN, ORISEL (9213))<BR>(BLANCHARD, ERNST (5914))<BR>(HOOKS, QUENEE (1011))<BR>(LEIVA, DANIELLE (3709))<BR>(NEWMAN, SAJEEDA (3164))<BR>(PUELLO, JENNIFER (5007))<BR>(ROBINSON, LEILA (1021))Absent on the assessment test.</td></tr><tr><td> 104-topic-3 </td><td>(BLANCHARD, ERNST (5914))<BR>(HOOKS, QUENEE (1011))<BR>(LABREW, LATOYA (2094))<BR>(LEIVA, DANIELLE (3709))<BR>(NEWMAN, SAJEEDA (3164))<BR>(NUEVA, ROSALBA (3475))<BR>(ROBINSON, LEILA (1021))<BR>(THOMAS, ANTHONY (4945))Absent on the assessment test.</td></tr><tr><td> 104-topic-4 </td><td>(BEJARAN, ORISEL (9213))<BR>(CAMILO, MARIA (2734))<BR>(GARCIA, SHARISSE (7178))<BR>(HICIANO, YADIRA (6644))<BR>(HOOKS, QUENEE (1011))<BR>(LABREW, LATOYA (2094))<BR>(LEIVA, DANIELLE (3709))<BR>(NEWMAN, SAJEEDA (3164))<BR>(NUEVA, ROSALBA (3475))<BR>(POLANCO, PEDRO (5516))<BR>(PUELLO, JENNIFER (5007))<BR>(ROBINSON, LEILA (1021))Absent on the assessment test.</td></tr><tr><td> 104-topic-5 </td><td>(HOOKS, QUENEE (1011))<BR>(NEWMAN, SAJEEDA (3164))<BR>(PUELLO, JENNIFER (5007))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>