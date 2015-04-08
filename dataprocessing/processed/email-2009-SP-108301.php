#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>301</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'></td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1541</td><td>CORONA, YAVIL</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>5185</td><td>COX, MEISHAN</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>1678</td><td>CRONIN, CHRISTINE</td><td>108-topic-2<BR>108-topic-3<BR>108-topic-5</td></tr><tr><td>0281</td><td>GURINO, ANGELA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>6279</td><td>JOSEPH, DANICA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>6373</td><td>LA_SALLE, DAWN</td><td>Absent on the assessment test.</td></tr><tr><td>5692</td><td>LEI, XIUXIAN</td><td>Absent on the assessment test.</td></tr><tr><td>4713</td><td>MANBODH, STEPHANIE</td><td>Absent on the assessment test.</td></tr><tr><td>3952</td><td>MAURICE, JOHAN</td><td>Absent on the assessment test.</td></tr><tr><td>2641</td><td>PEREZ, JHOANNY</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-5</td></tr><tr><td>2045</td><td>SANTIAGO, SANTOS</td><td>Absent on the assessment test.</td></tr><tr><td>6071</td><td>TAHA, ANA</td><td>108-topic-5</td></tr><tr><td>5981</td><td>TASH, BRITTANY</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-1 </td><td>(CORONA, YAVIL (1541))<BR>(COX, MEISHAN (5185))<BR>(GURINO, ANGELA (0281))<BR>(JOSEPH, DANICA (6279))<BR>(PEREZ, JHOANNY (2641))Absent on the assessment test.</td></tr><tr><td> 108-topic-2 </td><td>(CORONA, YAVIL (1541))<BR>(COX, MEISHAN (5185))<BR>(CRONIN, CHRISTINE (1678))<BR>(GURINO, ANGELA (0281))<BR>(JOSEPH, DANICA (6279))<BR>(PEREZ, JHOANNY (2641))Absent on the assessment test.</td></tr><tr><td> 108-topic-3 </td><td>(CORONA, YAVIL (1541))<BR>(CRONIN, CHRISTINE (1678))<BR>(GURINO, ANGELA (0281))<BR>(JOSEPH, DANICA (6279))<BR>(PEREZ, JHOANNY (2641))Absent on the assessment test.</td></tr><tr><td> 108-topic-4 </td><td>(CORONA, YAVIL (1541))<BR>(COX, MEISHAN (5185))<BR>(GURINO, ANGELA (0281))<BR>(JOSEPH, DANICA (6279))Absent on the assessment test.</td></tr><tr><td> 108-topic-5 </td><td>(CORONA, YAVIL (1541))<BR>(COX, MEISHAN (5185))<BR>(CRONIN, CHRISTINE (1678))<BR>(GURINO, ANGELA (0281))<BR>(JOSEPH, DANICA (6279))<BR>(PEREZ, JHOANNY (2641))<BR>(TAHA, ANA (6071))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
