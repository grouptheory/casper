#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>27</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>YUSSIF_KAMIL</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6378</td><td>CORVINO, DANIELLA</td><td>103-topic-1<BR>103-topic-5</td></tr><tr><td>2466</td><td>GONZALES, LAURA</td><td>Passed everything.</td></tr><tr><td>1303</td><td>MARTINEZ, KATHYA</td><td>103-topic-5</td></tr><tr><td>3685</td><td>MEDINA, KATHY</td><td>Absent on the assessment test.</td></tr><tr><td>7788</td><td>RODRIGUEZ, ARIELLE</td><td>103-topic-3<BR>103-topic-5</td></tr><tr><td>4181</td><td>SALOME, KAYLA</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5</td></tr><tr><td>6746</td><td>VILLANUEVA, ARMANGI</td><td>103-topic-2<BR>103-topic-4<BR>103-topic-5</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-1 </td><td>(CORVINO, DANIELLA (6378))<BR>(SALOME, KAYLA (4181))</td></tr><tr><td> 103-topic-2 </td><td>(SALOME, KAYLA (4181))<BR>(VILLANUEVA, ARMANGI (6746))</td></tr><tr><td> 103-topic-3 </td><td>(RODRIGUEZ, ARIELLE (7788))<BR>(SALOME, KAYLA (4181))</td></tr><tr><td> 103-topic-4 </td><td>(SALOME, KAYLA (4181))<BR>(VILLANUEVA, ARMANGI (6746))</td></tr><tr><td> 103-topic-5 </td><td>(CORVINO, DANIELLA (6378))<BR>(MARTINEZ, KATHYA (1303))<BR>(RODRIGUEZ, ARIELLE (7788))<BR>(SALOME, KAYLA (4181))<BR>(VILLANUEVA, ARMANGI (6746))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
