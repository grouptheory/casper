#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>05</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>HERSH_H</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0038</td><td>CASTRO, YOLENNY</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-4</td></tr><tr><td>7233</td><td>COOPER, RONALD</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>5290</td><td>CORDONES, MARGARET</td><td>104-topic-1<BR>104-topic-5</td></tr><tr><td>6148</td><td>CORMAN, KYLE</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>8583</td><td>DIAZ, MARIA</td><td>104-topic-2<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>6718</td><td>EDWARDS, JULIE</td><td>104-topic-2</td></tr><tr><td>6825</td><td>ESTEVEZ, JENNIFER</td><td>104-topic-3</td></tr><tr><td>6841</td><td>GARCIA, WALTER</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>2823</td><td>HARRISON, TENNISHA</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-4</td></tr><tr><td>8486</td><td>ISAAC, SEKOYA</td><td>104-topic-4</td></tr><tr><td>4307</td><td>LEVINE, LAUREN</td><td>Absent on the assessment test.</td></tr><tr><td>7903</td><td>MANCUSO, SABRINA</td><td>104-topic-1<BR>104-topic-4</td></tr><tr><td>1986</td><td>MCCULLOUGH, JASMINE</td><td>104-topic-1<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>9846</td><td>MORALES, BESSY</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>3542</td><td>OFORI-ATTA, PEGGY</td><td>104-topic-3</td></tr><tr><td>0858</td><td>REBOLLEDO, MITHAT</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>9107</td><td>RODRIGUEZ, CYNTHIA</td><td>104-topic-1</td></tr><tr><td>2105</td><td>RUFFIN, SHAMAEL</td><td>Absent on the assessment test.</td></tr><tr><td>4443</td><td>SANKAR, NELISSA</td><td>Absent on the assessment test.</td></tr><tr><td>4865</td><td>SAVIANO, MICHAEL</td><td>104-topic-1<BR>104-topic-3</td></tr><tr><td>9899</td><td>SCARPELLI, JESSE</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>6715</td><td>STEED, KIMAYA</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>1011</td><td>STROM, DEANNA</td><td>Absent on the assessment test.</td></tr><tr><td>5869</td><td>THEN, DORIS</td><td>Absent on the assessment test.</td></tr><tr><td>2480</td><td>VALDEBENITO, LISETTE</td><td>Passed everything.</td></tr><tr><td>0907</td><td>WADE, ALANAH</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>2299</td><td>WANG, MICHAEL</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(CASTRO, YOLENNY (0038))<BR>(CORDONES, MARGARET (5290))<BR>(HARRISON, TENNISHA (2823))<BR>(MANCUSO, SABRINA (7903))<BR>(MCCULLOUGH, JASMINE (1986))<BR>(RODRIGUEZ, CYNTHIA (9107))<BR>(SAVIANO, MICHAEL (4865))<BR>(WADE, ALANAH (0907))Absent on the assessment test.</td></tr><tr><td> 104-topic-2 </td><td>(CASTRO, YOLENNY (0038))<BR>(COOPER, RONALD (7233))<BR>(CORMAN, KYLE (6148))<BR>(DIAZ, MARIA (8583))<BR>(EDWARDS, JULIE (6718))<BR>(GARCIA, WALTER (6841))<BR>(HARRISON, TENNISHA (2823))<BR>(REBOLLEDO, MITHAT (0858))<BR>(SCARPELLI, JESSE (9899))<BR>(STEED, KIMAYA (6715))<BR>(WADE, ALANAH (0907))Absent on the assessment test.</td></tr><tr><td> 104-topic-3 </td><td>(ESTEVEZ, JENNIFER (6825))<BR>(GARCIA, WALTER (6841))<BR>(MCCULLOUGH, JASMINE (1986))<BR>(MORALES, BESSY (9846))<BR>(OFORI-ATTA, PEGGY (3542))<BR>(SAVIANO, MICHAEL (4865))<BR>(STEED, KIMAYA (6715))<BR>(WADE, ALANAH (0907))Absent on the assessment test.</td></tr><tr><td> 104-topic-4 </td><td>(CASTRO, YOLENNY (0038))<BR>(COOPER, RONALD (7233))<BR>(CORMAN, KYLE (6148))<BR>(DIAZ, MARIA (8583))<BR>(GARCIA, WALTER (6841))<BR>(HARRISON, TENNISHA (2823))<BR>(ISAAC, SEKOYA (8486))<BR>(MANCUSO, SABRINA (7903))<BR>(MCCULLOUGH, JASMINE (1986))<BR>(MORALES, BESSY (9846))<BR>(REBOLLEDO, MITHAT (0858))<BR>(SCARPELLI, JESSE (9899))<BR>(STEED, KIMAYA (6715))<BR>(WADE, ALANAH (0907))Absent on the assessment test.</td></tr><tr><td> 104-topic-5 </td><td>(CORDONES, MARGARET (5290))<BR>(DIAZ, MARIA (8583))<BR>(MCCULLOUGH, JASMINE (1986))<BR>(WADE, ALANAH (0907))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
