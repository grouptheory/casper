#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MC_ARDLE_H</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0199</td><td>AIGLE, TRISTON</td><td>104-topic-1<BR>104-topic-4</td></tr><tr><td>1809</td><td>ARTHUR, KERRIAN</td><td>104-topic-4</td></tr><tr><td>2170</td><td>BREA, CHRISTIAN</td><td>Passed everything.</td></tr><tr><td>3970</td><td>CASON, CHELSEA</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>5893</td><td>CHIRIBOGA, CHARLY</td><td>104-topic-3</td></tr><tr><td>2200</td><td>COLON, CLARENCE</td><td>104-topic-2</td></tr><tr><td>3422</td><td>FERNANDEZ, SAMANTHA</td><td>Passed everything.</td></tr><tr><td>9676</td><td>FIDO, JOANNA</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>4767</td><td>FIGUEROA, JUAN</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>1284</td><td>FRANCO-LEE, SAMANTHA</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>8396</td><td>FROST, SHARHONE</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>8884</td><td>GARCIA, JOSE</td><td>104-topic-1<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>2985</td><td>GARCIA, LAURA</td><td>104-topic-4</td></tr><tr><td>4626</td><td>GONZALEZ, CHRISTOPHER</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>0514</td><td>HANS, ALANA</td><td>104-topic-2</td></tr><tr><td>1959</td><td>HINTON, JASMINE</td><td>Absent on the assessment test.</td></tr><tr><td>6485</td><td>MACIAS, MITCHELL</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>7339</td><td>MADERA, DHIANNE</td><td>Passed everything.</td></tr><tr><td>2082</td><td>MARSHALL, JEREMY</td><td>104-topic-2<BR>104-topic-3</td></tr><tr><td>9242</td><td>NUNEZ, HANS</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>9420</td><td>QUARTE, RYAN</td><td>104-topic-2<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>3113</td><td>RIVERA, ROBERT</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>0293</td><td>RODRIGUEZ, YEIRELINE</td><td>Absent on the assessment test.</td></tr><tr><td>4223</td><td>ROSADO, JANET</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>6442</td><td>SEPULVEDA, RICHARD</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>1437</td><td>VALERIE, ALEAH</td><td>Absent on the assessment test.</td></tr><tr><td>1934</td><td>WILLIAMS, GABRIELLA</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(AIGLE, TRISTON (0199))<BR>(GARCIA, JOSE (8884))Absent on the assessment test.</td></tr><tr><td> 104-topic-2 </td><td>(COLON, CLARENCE (2200))<BR>(FIDO, JOANNA (9676))<BR>(FRANCO-LEE, SAMANTHA (1284))<BR>(FROST, SHARHONE (8396))<BR>(HANS, ALANA (0514))<BR>(MACIAS, MITCHELL (6485))<BR>(MARSHALL, JEREMY (2082))<BR>(QUARTE, RYAN (9420))<BR>(ROSADO, JANET (4223))<BR>(SEPULVEDA, RICHARD (6442))Absent on the assessment test.</td></tr><tr><td> 104-topic-3 </td><td>(CASON, CHELSEA (3970))<BR>(CHIRIBOGA, CHARLY (5893))<BR>(FIDO, JOANNA (9676))<BR>(FIGUEROA, JUAN (4767))<BR>(FROST, SHARHONE (8396))<BR>(GARCIA, JOSE (8884))<BR>(GONZALEZ, CHRISTOPHER (4626))<BR>(MACIAS, MITCHELL (6485))<BR>(MARSHALL, JEREMY (2082))<BR>(NUNEZ, HANS (9242))<BR>(RIVERA, ROBERT (3113))<BR>(ROSADO, JANET (4223))<BR>(SEPULVEDA, RICHARD (6442))Absent on the assessment test.</td></tr><tr><td> 104-topic-4 </td><td>(AIGLE, TRISTON (0199))<BR>(ARTHUR, KERRIAN (1809))<BR>(CASON, CHELSEA (3970))<BR>(FIDO, JOANNA (9676))<BR>(FIGUEROA, JUAN (4767))<BR>(FRANCO-LEE, SAMANTHA (1284))<BR>(FROST, SHARHONE (8396))<BR>(GARCIA, JOSE (8884))<BR>(GARCIA, LAURA (2985))<BR>(GONZALEZ, CHRISTOPHER (4626))<BR>(MACIAS, MITCHELL (6485))<BR>(NUNEZ, HANS (9242))<BR>(QUARTE, RYAN (9420))<BR>(RIVERA, ROBERT (3113))<BR>(ROSADO, JANET (4223))<BR>(SEPULVEDA, RICHARD (6442))Absent on the assessment test.</td></tr><tr><td> 104-topic-5 </td><td>(FROST, SHARHONE (8396))<BR>(QUARTE, RYAN (9420))<BR>(SEPULVEDA, RICHARD (6442))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>