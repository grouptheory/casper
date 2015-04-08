#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 141 - PRE-CALCULUS (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>141</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>14</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'></td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1251</td><td>DOMINGUEZ, RAFAEL</td><td>141-topic-3</td></tr><tr><td>8326</td><td>DUARTE, ALICE</td><td>141-topic-3</td></tr><tr><td>6178</td><td>FRANCIS, BRIAN</td><td>Absent on the assessment test.</td></tr><tr><td>7489</td><td>HERNANDEZ, JORGE</td><td>141-topic-3<BR>141-topic-5</td></tr><tr><td>0417</td><td>MINAYACORREA, FAUSTO</td><td>Absent on the assessment test.</td></tr><tr><td>5752</td><td>MOLINA, ERICA</td><td>141-topic-2<BR>141-topic-3<BR>141-topic-5</td></tr><tr><td>1948</td><td>RAVAL, VIBHA</td><td>141-topic-3</td></tr><tr><td>5993</td><td>SHIRER, SHIRLEY</td><td>Absent on the assessment test.</td></tr><tr><td>9593</td><td>WILLIAMS, JOI</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 141-topic-1 </td><td>Everyone passed.</td></tr><tr><td> 141-topic-2 </td><td>(MOLINA, ERICA (5752))</td></tr><tr><td> 141-topic-3 </td><td>(DOMINGUEZ, RAFAEL (1251))<BR>(DUARTE, ALICE (8326))<BR>(HERNANDEZ, JORGE (7489))<BR>(MOLINA, ERICA (5752))<BR>(RAVAL, VIBHA (1948))</td></tr><tr><td> 141-topic-4 </td><td>Everyone passed.</td></tr><tr><td> 141-topic-5 </td><td>(HERNANDEZ, JORGE (7489))<BR>(MOLINA, ERICA (5752))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
