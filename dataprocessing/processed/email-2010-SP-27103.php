#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 271 - INTRO_COMPUTANDPROG (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>271</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>03</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>5255</td><td>AGUILAR, STEVE</td><td>271-topic-02</td></tr><tr><td>7000</td><td>COX, DAMIAN</td><td>Passed everything.</td></tr><tr><td>2467</td><td>FERNANDEZ, ROBERTO</td><td>Passed everything.</td></tr><tr><td>0791</td><td>LALLA, CRAIG</td><td>Absent on the assessment test.</td></tr><tr><td>1466</td><td>MARTINEZ, JOSE</td><td>Absent on the assessment test.</td></tr><tr><td>6447</td><td>RIVERA, OSWALDO</td><td>Passed everything.</td></tr><tr><td>3716</td><td>ROBINSON, ENDIA</td><td>271-topic-01<BR>271-topic-02<BR>271-topic-03<BR>271-topic-04</td></tr><tr><td>7079</td><td>RODRIGUEZ, WILLIAM</td><td>271-topic-02<BR>271-topic-04</td></tr><tr><td>4462</td><td>SANCHEZ, CECILIA</td><td>271-topic-02</td></tr><tr><td>5169</td><td>SYKU, ANILA</td><td>271-topic-03</td></tr><tr><td>6048</td><td>ZAPATA, KATHERY</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 271-topic-01 </td><td>(ROBINSON, ENDIA (3716))</td></tr><tr><td> 271-topic-02 </td><td>(AGUILAR, STEVE (5255))<BR>(ROBINSON, ENDIA (3716))<BR>(RODRIGUEZ, WILLIAM (7079))<BR>(SANCHEZ, CECILIA (4462))</td></tr><tr><td> 271-topic-03 </td><td>(ROBINSON, ENDIA (3716))<BR>(SYKU, ANILA (5169))</td></tr><tr><td> 271-topic-04 </td><td>(ROBINSON, ENDIA (3716))<BR>(RODRIGUEZ, WILLIAM (7079))</td></tr><tr><td> 271-topic-05 </td><td>Everyone passed.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
