#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 272 - OBJECT_ORIENTED_PROG (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>272</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>BAKIRAS_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8865</td><td>FIESTA, VICTOR</td><td>272-topic-1<BR>272-topic-2<BR>272-topic-3<BR>272-topic-4<BR>272-topic-5</td></tr><tr><td>0491</td><td>O'RILEY, KEVIN</td><td>272-topic-1<BR>272-topic-2<BR>272-topic-3<BR>272-topic-4<BR>272-topic-5</td></tr><tr><td>3030</td><td>PATTERSON, TIFFANY</td><td>272-topic-1<BR>272-topic-2<BR>272-topic-3<BR>272-topic-4<BR>272-topic-5</td></tr><tr><td>6078</td><td>SCHULTERBRANDT, MARK</td><td>272-topic-1<BR>272-topic-2<BR>272-topic-3<BR>272-topic-4<BR>272-topic-5</td></tr><tr><td>1425</td><td>VERNET, PAUL</td><td>272-topic-1<BR>272-topic-2<BR>272-topic-3<BR>272-topic-4<BR>272-topic-5</td></tr><tr><td>5173</td><td>YAU, ALLEN</td><td>272-topic-1<BR>272-topic-2<BR>272-topic-3<BR>272-topic-4<BR>272-topic-5</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 272-topic-1 </td><td>(FIESTA, VICTOR (8865))<BR>(O'RILEY, KEVIN (0491))<BR>(PATTERSON, TIFFANY (3030))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(VERNET, PAUL (1425))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-2 </td><td>(FIESTA, VICTOR (8865))<BR>(O'RILEY, KEVIN (0491))<BR>(PATTERSON, TIFFANY (3030))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(VERNET, PAUL (1425))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-3 </td><td>(FIESTA, VICTOR (8865))<BR>(O'RILEY, KEVIN (0491))<BR>(PATTERSON, TIFFANY (3030))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(VERNET, PAUL (1425))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-4 </td><td>(FIESTA, VICTOR (8865))<BR>(O'RILEY, KEVIN (0491))<BR>(PATTERSON, TIFFANY (3030))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(VERNET, PAUL (1425))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-5 </td><td>(FIESTA, VICTOR (8865))<BR>(O'RILEY, KEVIN (0491))<BR>(PATTERSON, TIFFANY (3030))<BR>(SCHULTERBRANDT, MARK (6078))<BR>(VERNET, PAUL (1425))<BR>(YAU, ALLEN (5173))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
