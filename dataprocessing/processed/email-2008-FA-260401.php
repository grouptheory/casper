#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 260 - DATA_PROCESSING (2008 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>260</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>401</td></tr><tr><td align='center'>Year</td> <td align='center'>2008</td></tr><tr><td align='center'>Prof.</td> <td align='center'></td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3642</td><td>ADDISON, LYNCHELL</td><td>Absent on the assessment test.</td></tr><tr><td>9909</td><td>BEIHL, CHRISTOPHER</td><td>Absent on the assessment test.</td></tr><tr><td>3047</td><td>BELGRAVE, SHANTEL</td><td>Absent on the assessment test.</td></tr><tr><td>0140</td><td>CASTILLO, MIOZOTI</td><td>260-topic-1</td></tr><tr><td>2393</td><td>COLLADO, ELIZABETH</td><td>260-topic-1</td></tr><tr><td>4223</td><td>FELIZ, CHARLY</td><td>260-topic-2</td></tr><tr><td>2957</td><td>FELIZ, JEYSON</td><td>260-topic-3</td></tr><tr><td>4369</td><td>FERNANDEZ, NIORKA</td><td>Passed everything.</td></tr><tr><td>4730</td><td>GARCIA, SUSAN</td><td>Absent on the assessment test.</td></tr><tr><td>0409</td><td>GENAO, CHRISTIAN</td><td>260-topic-4</td></tr><tr><td>1436</td><td>GONZALEZ, ALEXANDER</td><td>260-topic-4</td></tr><tr><td>6456</td><td>LOU, MAY</td><td>260-topic-4</td></tr><tr><td>6674</td><td>NEWTON, JOHNATHAN</td><td>260-topic-4</td></tr><tr><td>2092</td><td>PARRA, ANDRES</td><td>260-topic-4</td></tr><tr><td>4421</td><td>RALAT, FATIMA</td><td>260-topic-2</td></tr><tr><td>7108</td><td>RODRIGUEZ, JESSICA</td><td>260-topic-2<BR>260-topic-4</td></tr><tr><td>8574</td><td>ROMAN, JENNIFER</td><td>260-topic-5</td></tr><tr><td>6521</td><td>SALOMON, KARL</td><td>260-topic-4</td></tr><tr><td>0816</td><td>SCOTT, TIFFANY</td><td>Absent on the assessment test.</td></tr><tr><td>0919</td><td>VIEUX, CHRISTINA</td><td>260-topic-2<BR>260-topic-3<BR>260-topic-4<BR>260-topic-5</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 260-topic-1 </td><td>(CASTILLO, MIOZOTI (0140))<BR>(COLLADO, ELIZABETH (2393))</td></tr><tr><td> 260-topic-2 </td><td>(FELIZ, CHARLY (4223))<BR>(RALAT, FATIMA (4421))<BR>(RODRIGUEZ, JESSICA (7108))<BR>(VIEUX, CHRISTINA (0919))</td></tr><tr><td> 260-topic-3 </td><td>(FELIZ, JEYSON (2957))<BR>(VIEUX, CHRISTINA (0919))</td></tr><tr><td> 260-topic-4 </td><td>(GENAO, CHRISTIAN (0409))<BR>(GONZALEZ, ALEXANDER (1436))<BR>(LOU, MAY (6456))<BR>(NEWTON, JOHNATHAN (6674))<BR>(PARRA, ANDRES (2092))<BR>(RODRIGUEZ, JESSICA (7108))<BR>(SALOMON, KARL (6521))<BR>(VIEUX, CHRISTINA (0919))</td></tr><tr><td> 260-topic-5 </td><td>(ROMAN, JENNIFER (8574))<BR>(VIEUX, CHRISTINA (0919))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
