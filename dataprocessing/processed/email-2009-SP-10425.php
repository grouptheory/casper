#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>25</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>POLLAK_D</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>4545</td><td>ARNEAUD, LORRAINE</td><td>Absent on the assessment test.</td></tr><tr><td>7887</td><td>CANTILLO, LUIS</td><td>104-topic-4</td></tr><tr><td>1218</td><td>DUONG, CALVIN</td><td>Passed everything.</td></tr><tr><td>9673</td><td>FONTENOT, DOMINIQUE</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>0086</td><td>GUZMAN, MADELINE</td><td>Passed everything.</td></tr><tr><td>5944</td><td>HARRINARINE, SARAH</td><td>Passed everything.</td></tr><tr><td>1034</td><td>HEIMER, STEVEN</td><td>Passed everything.</td></tr><tr><td>0059</td><td>HUSSAIN, RAMLA</td><td>104-topic-4<BR>104-topic-5</td></tr><tr><td>3739</td><td>JOHNSON, TIMITRA</td><td>104-topic-1</td></tr><tr><td>9507</td><td>KAVALLARIS, ERIC</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>8307</td><td>KOLENOVIC, SADMIRA</td><td>104-topic-4</td></tr><tr><td>1993</td><td>LI, ANNIE</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>7593</td><td>MONTALVO, STEPHANIE</td><td>Passed everything.</td></tr><tr><td>7801</td><td>MORELL, SALOMON</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>1878</td><td>NELSON, CRYSTAL</td><td>Absent on the assessment test.</td></tr><tr><td>1676</td><td>O'BRIEN, MARISSA</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>7119</td><td>REINHART, AMY</td><td>104-topic-2<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>8744</td><td>ROJAS, JOHN</td><td>Absent on the assessment test.</td></tr><tr><td>7861</td><td>SANCHEZ, JASMIL</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>2113</td><td>SANTOS, KARINA</td><td>Absent on the assessment test.</td></tr><tr><td>3881</td><td>SMALL, KEMIE</td><td>104-topic-3</td></tr><tr><td>1163</td><td>SMITH, CHRISTOPHER</td><td>Absent on the assessment test.</td></tr><tr><td>7558</td><td>SOMALINGAM, RAMPRASAD</td><td>Absent on the assessment test.</td></tr><tr><td>9432</td><td>VALENTIN, DEVON</td><td>104-topic-2<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>1179</td><td>VALLADARES, VICKY</td><td>104-topic-4</td></tr><tr><td>5572</td><td>WILSON, KERDISHA</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>8357</td><td>YUN, MICHAEL</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-4</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(JOHNSON, TIMITRA (3739))<BR>(KAVALLARIS, ERIC (9507))<BR>(O'BRIEN, MARISSA (1676))<BR>(YUN, MICHAEL (8357))</td></tr><tr><td> 104-topic-2 </td><td>(FONTENOT, DOMINIQUE (9673))<BR>(KAVALLARIS, ERIC (9507))<BR>(MORELL, SALOMON (7801))<BR>(O'BRIEN, MARISSA (1676))<BR>(REINHART, AMY (7119))<BR>(SANCHEZ, JASMIL (7861))<BR>(VALENTIN, DEVON (9432))<BR>(YUN, MICHAEL (8357))</td></tr><tr><td> 104-topic-3 </td><td>(FONTENOT, DOMINIQUE (9673))<BR>(KAVALLARIS, ERIC (9507))<BR>(LI, ANNIE (1993))<BR>(SANCHEZ, JASMIL (7861))<BR>(SMALL, KEMIE (3881))<BR>(WILSON, KERDISHA (5572))</td></tr><tr><td> 104-topic-4 </td><td>(CANTILLO, LUIS (7887))<BR>(FONTENOT, DOMINIQUE (9673))<BR>(HUSSAIN, RAMLA (0059))<BR>(KAVALLARIS, ERIC (9507))<BR>(KOLENOVIC, SADMIRA (8307))<BR>(LI, ANNIE (1993))<BR>(MORELL, SALOMON (7801))<BR>(O'BRIEN, MARISSA (1676))<BR>(REINHART, AMY (7119))<BR>(SANCHEZ, JASMIL (7861))<BR>(VALENTIN, DEVON (9432))<BR>(VALLADARES, VICKY (1179))<BR>(WILSON, KERDISHA (5572))<BR>(YUN, MICHAEL (8357))</td></tr><tr><td> 104-topic-5 </td><td>(FONTENOT, DOMINIQUE (9673))<BR>(HUSSAIN, RAMLA (0059))<BR>(O'BRIEN, MARISSA (1676))<BR>(REINHART, AMY (7119))<BR>(VALENTIN, DEVON (9432))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
