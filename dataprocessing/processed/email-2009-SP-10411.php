#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>11</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>FREMPONG_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6746</td><td>CELLA, PETER</td><td>Absent on the assessment test.</td></tr><tr><td>4670</td><td>DEL_VALLE, NELSON</td><td>Absent on the assessment test.</td></tr><tr><td>1435</td><td>ESPINOSA, CHRISTIAN</td><td>Absent on the assessment test.</td></tr><tr><td>0768</td><td>FRANCO, MARIA</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>2871</td><td>GANDHI, SHEENA</td><td>Passed everything.</td></tr><tr><td>9982</td><td>GEORGE, EDWIN</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>0606</td><td>JOHNSON, JERMAINE</td><td>Absent on the assessment test.</td></tr><tr><td>8869</td><td>LEE, PETER</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>0265</td><td>MIAN, HUMA</td><td>Absent on the assessment test.</td></tr><tr><td>0671</td><td>VALERIO, VERONICA</td><td>104-topic-4<BR>104-topic-5</td></tr><tr><td>5126</td><td>VARGAS, JULESSA</td><td>Absent on the assessment test.</td></tr><tr><td>3870</td><td>VAZQUEZ, KATHERINE</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>Absent on the assessment test.</td></tr><tr><td> 104-topic-2 </td><td>(FRANCO, MARIA (0768))<BR>(GEORGE, EDWIN (9982))<BR>(LEE, PETER (8869))Absent on the assessment test.</td></tr><tr><td> 104-topic-3 </td><td>(LEE, PETER (8869))Absent on the assessment test.</td></tr><tr><td> 104-topic-4 </td><td>(FRANCO, MARIA (0768))<BR>(GEORGE, EDWIN (9982))<BR>(LEE, PETER (8869))<BR>(VALERIO, VERONICA (0671))Absent on the assessment test.</td></tr><tr><td> 104-topic-5 </td><td>(LEE, PETER (8869))<BR>(VALERIO, VERONICA (0671))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
