#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 272 - OBJECT_ORIENTED_PROG (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>272</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>BAKIRAS_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1788</td><td>BALLETTA, ROMINA</td><td>272-topic-01<BR>272-topic-03<BR>272-topic-04</td></tr><tr><td>7973</td><td>BONILLA, DANIEL</td><td>Passed everything.</td></tr><tr><td>1999</td><td>JIMENEZ, DANNY</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>6657</td><td>JOSEPH, BRUNO</td><td>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>0961</td><td>LARA, ABRAHAM</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>6537</td><td>MONTALVAN, JACQUELINE</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>1059</td><td>STANISLAVOVA, SILVIYA</td><td>Passed everything.</td></tr><tr><td>5169</td><td>SYKU, ANILA</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04</td></tr><tr><td>5430</td><td>WONG, WAI-KWAN</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>5173</td><td>YAU, ALLEN</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>6048</td><td>ZAPATA, KATHERY</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 272-topic-01 </td><td>(BALLETTA, ROMINA (1788))<BR>(JIMENEZ, DANNY (1999))<BR>(LARA, ABRAHAM (0961))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(SYKU, ANILA (5169))<BR>(WONG, WAI-KWAN (5430))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-02 </td><td>(JIMENEZ, DANNY (1999))<BR>(JOSEPH, BRUNO (6657))<BR>(LARA, ABRAHAM (0961))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(SYKU, ANILA (5169))<BR>(WONG, WAI-KWAN (5430))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-03 </td><td>(BALLETTA, ROMINA (1788))<BR>(JIMENEZ, DANNY (1999))<BR>(JOSEPH, BRUNO (6657))<BR>(LARA, ABRAHAM (0961))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(SYKU, ANILA (5169))<BR>(WONG, WAI-KWAN (5430))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-04 </td><td>(BALLETTA, ROMINA (1788))<BR>(JIMENEZ, DANNY (1999))<BR>(JOSEPH, BRUNO (6657))<BR>(LARA, ABRAHAM (0961))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(SYKU, ANILA (5169))<BR>(WONG, WAI-KWAN (5430))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-05 </td><td>(JIMENEZ, DANNY (1999))<BR>(JOSEPH, BRUNO (6657))<BR>(LARA, ABRAHAM (0961))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(WONG, WAI-KWAN (5430))<BR>(YAU, ALLEN (5173))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
