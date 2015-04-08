#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>09</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MELHEM_AHMAD</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>4980</td><td>BICKNESE, ANTHONY</td><td>Passed everything.</td></tr><tr><td>2036</td><td>CABRAL, AMY</td><td>Passed everything.</td></tr><tr><td>0977</td><td>CARRION, CRYSTAL</td><td>Passed everything.</td></tr><tr><td>9064</td><td>CHAN, YEE</td><td>Passed everything.</td></tr><tr><td>5753</td><td>DAVIS, JAIME</td><td>Passed everything.</td></tr><tr><td>2637</td><td>DOMNICH, EUGENE</td><td>Passed everything.</td></tr><tr><td>9928</td><td>EGHAFONA, ANDRINE</td><td>Passed everything.</td></tr><tr><td>3442</td><td>ENCARNACION, YESSICA</td><td>Passed everything.</td></tr><tr><td>6698</td><td>FERNANDEZ, PAMELA</td><td>Passed everything.</td></tr><tr><td>5527</td><td>FRANCO, ASHLEY</td><td>Passed everything.</td></tr><tr><td>7630</td><td>HENRIQUEZ, STEPHANIE</td><td>Passed everything.</td></tr><tr><td>0734</td><td>LYMAN, FRANKIE</td><td>Passed everything.</td></tr><tr><td>8518</td><td>MANZI, CHRISTIE</td><td>Passed everything.</td></tr><tr><td>8371</td><td>MARTINVIGNOLES, CLAUDIA</td><td>Passed everything.</td></tr><tr><td>4453</td><td>MBABA, UKEME</td><td>Passed everything.</td></tr><tr><td>9861</td><td>MERCADO, MELISSA</td><td>Passed everything.</td></tr><tr><td>0668</td><td>MISOULIS, JOHN</td><td>Passed everything.</td></tr><tr><td>1366</td><td>NUNEZ, JENNIFER</td><td>Passed everything.</td></tr><tr><td>7797</td><td>PEREZ, RONALD</td><td>Passed everything.</td></tr><tr><td>4531</td><td>RAMLAKHAN, AZIM</td><td>Passed everything.</td></tr><tr><td>4852</td><td>REID, DANIEL</td><td>Passed everything.</td></tr><tr><td>1172</td><td>RUDAS, JESSICA</td><td>Passed everything.</td></tr><tr><td>1421</td><td>SHAMIN, IBTEHAJ</td><td>Passed everything.</td></tr><tr><td>3145</td><td>SMALL, TRENT</td><td>Passed everything.</td></tr><tr><td>9124</td><td>SORIANO, KRISTIAN</td><td>Passed everything.</td></tr><tr><td>1147</td><td>SOSA, PAUL</td><td>Passed everything.</td></tr><tr><td>6878</td><td>STYKES, JONATHAN</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>Everyone passed.</td></tr><tr><td> 104-topic-2 </td><td>Everyone passed.</td></tr><tr><td> 104-topic-3 </td><td>Everyone passed.</td></tr><tr><td> 104-topic-4 </td><td>Everyone passed.</td></tr><tr><td> 104-topic-5 </td><td>Everyone passed.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
