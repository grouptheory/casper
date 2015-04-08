#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>13</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MILLER_EMERSON</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6082</td><td>BOWERS, CYNTHIA</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>7030</td><td>CABRERA, ANTHONY</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>4938</td><td>CRUZ-CHAN, KENNETH</td><td>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>1897</td><td>DIN, DOMINIC</td><td>104-topic-1</td></tr><tr><td>6436</td><td>GERENA, RUTH</td><td>104-topic-1<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>6288</td><td>GOODMAN, TYARA</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>8464</td><td>GUZMAN, CARLOS</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>2071</td><td>JOHNSON, JEROME</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>4777</td><td>MAHABUB, SAEDE</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>1764</td><td>MOORE, STEPHANIE</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>1619</td><td>MORRIS, TONIENNE</td><td>104-topic-3</td></tr><tr><td>4455</td><td>RITOE, RAMONA</td><td>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>8292</td><td>SHIKHMAN, ARTHUR</td><td>Absent on the assessment test.</td></tr><tr><td>5497</td><td>SZEMRAJ, KATARZYNA</td><td>Absent on the assessment test.</td></tr><tr><td>3368</td><td>VAKNIN, SHAY</td><td>104-topic-4</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(DIN, DOMINIC (1897))<BR>(GERENA, RUTH (6436))</td></tr><tr><td> 104-topic-2 </td><td>(BOWERS, CYNTHIA (6082))<BR>(CABRERA, ANTHONY (7030))<BR>(GOODMAN, TYARA (6288))<BR>(GUZMAN, CARLOS (8464))<BR>(JOHNSON, JEROME (2071))<BR>(MOORE, STEPHANIE (1764))</td></tr><tr><td> 104-topic-3 </td><td>(CABRERA, ANTHONY (7030))<BR>(CRUZ-CHAN, KENNETH (4938))<BR>(GERENA, RUTH (6436))<BR>(MAHABUB, SAEDE (4777))<BR>(MOORE, STEPHANIE (1764))<BR>(MORRIS, TONIENNE (1619))<BR>(RITOE, RAMONA (4455))</td></tr><tr><td> 104-topic-4 </td><td>(BOWERS, CYNTHIA (6082))<BR>(CABRERA, ANTHONY (7030))<BR>(CRUZ-CHAN, KENNETH (4938))<BR>(GERENA, RUTH (6436))<BR>(GOODMAN, TYARA (6288))<BR>(GUZMAN, CARLOS (8464))<BR>(JOHNSON, JEROME (2071))<BR>(MAHABUB, SAEDE (4777))<BR>(MOORE, STEPHANIE (1764))<BR>(RITOE, RAMONA (4455))<BR>(VAKNIN, SHAY (3368))</td></tr><tr><td> 104-topic-5 </td><td>(CRUZ-CHAN, KENNETH (4938))<BR>(MOORE, STEPHANIE (1764))<BR>(RITOE, RAMONA (4455))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
