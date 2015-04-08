#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 100 - INT_BASIC_MATH_SK (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>100</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>05</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SHAMUILOVA_RITA</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7024</td><td>BAXTER, CHANEL</td><td>100-topic-2<BR>100-topic-4</td></tr><tr><td>3554</td><td>GOMEZ, ROXSANA</td><td>Absent on the assessment test.</td></tr><tr><td>6950</td><td>LLANGARI, JENNIFER</td><td>100-topic-2<BR>100-topic-4<BR>100-topic-5</td></tr><tr><td>5655</td><td>MAU, JOYCE</td><td>100-topic-4<BR>100-topic-5</td></tr><tr><td>1185</td><td>PARDO, AMANDALYNN</td><td>100-topic-2<BR>100-topic-4<BR>100-topic-5</td></tr><tr><td>9269</td><td>SUAREZ, ERIDANIA</td><td>100-topic-2<BR>100-topic-4</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 100-topic-1 </td><td>Everyone passed.</td></tr><tr><td> 100-topic-2 </td><td>(BAXTER, CHANEL (7024))<BR>(LLANGARI, JENNIFER (6950))<BR>(PARDO, AMANDALYNN (1185))<BR>(SUAREZ, ERIDANIA (9269))</td></tr><tr><td> 100-topic-3 </td><td>Everyone passed.</td></tr><tr><td> 100-topic-4 </td><td>(BAXTER, CHANEL (7024))<BR>(LLANGARI, JENNIFER (6950))<BR>(MAU, JOYCE (5655))<BR>(PARDO, AMANDALYNN (1185))<BR>(SUAREZ, ERIDANIA (9269))</td></tr><tr><td> 100-topic-5 </td><td>(LLANGARI, JENNIFER (6950))<BR>(MAU, JOYCE (5655))<BR>(PARDO, AMANDALYNN (1185))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
