#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>11</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>BINNS_KENNETH</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1271</td><td>KNOLL, ALLISSON</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-5</td></tr><tr><td>6447</td><td>PEREZ, ELIZABETH</td><td>103-topic-1<BR>103-topic-2</td></tr><tr><td>0642</td><td>RIVAS, LEOMAR</td><td>Absent on the assessment test.</td></tr><tr><td>1163</td><td>TALENS, OLGA</td><td>103-topic-1<BR>103-topic-3<BR>103-topic-5</td></tr><tr><td>6760</td><td>TEJEDA, CARLOS</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-5</td></tr><tr><td>2232</td><td>WILLIAMS, CRYSTAL</td><td>103-topic-1<BR>103-topic-2</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-1 </td><td>(KNOLL, ALLISSON (1271))<BR>(PEREZ, ELIZABETH (6447))<BR>(TALENS, OLGA (1163))<BR>(TEJEDA, CARLOS (6760))<BR>(WILLIAMS, CRYSTAL (2232))</td></tr><tr><td> 103-topic-2 </td><td>(KNOLL, ALLISSON (1271))<BR>(PEREZ, ELIZABETH (6447))<BR>(TEJEDA, CARLOS (6760))<BR>(WILLIAMS, CRYSTAL (2232))</td></tr><tr><td> 103-topic-3 </td><td>(KNOLL, ALLISSON (1271))<BR>(TALENS, OLGA (1163))<BR>(TEJEDA, CARLOS (6760))</td></tr><tr><td> 103-topic-4 </td><td>Everyone passed.</td></tr><tr><td> 103-topic-5 </td><td>(KNOLL, ALLISSON (1271))<BR>(TALENS, OLGA (1163))<BR>(TEJEDA, CARLOS (6760))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
