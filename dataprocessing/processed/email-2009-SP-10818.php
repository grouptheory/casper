#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>18</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'></td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9169</td><td>BOOKER, SHAKEY</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-5</td></tr><tr><td>2970</td><td>CASTILLO, JAMIE</td><td>Absent on the assessment test.</td></tr><tr><td>8088</td><td>CEPEDA, NADINE</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>5655</td><td>DELEON, IRAIMA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>4347</td><td>DURAN, ANTHONY</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>8054</td><td>DUVERNE, TATIANA</td><td>108-topic-2<BR>108-topic-5</td></tr><tr><td>7191</td><td>ESTRELLA, JEIMY</td><td>Absent on the assessment test.</td></tr><tr><td>6430</td><td>FAYE, QUINTIN</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>4058</td><td>FREZZELL, VELMA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>9601</td><td>HART, JADE</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>4691</td><td>JOHNSON, QUANESSA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>5607</td><td>KEY, ASIA</td><td>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>4481</td><td>KOCH, CHLOE</td><td>Absent on the assessment test.</td></tr><tr><td>7232</td><td>MENDEZ, MASIEL</td><td>108-topic-5</td></tr><tr><td>8429</td><td>MIGALLEN, ELIEN</td><td>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>1503</td><td>PABARUE, ANJANIE</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>6005</td><td>PANTOJA, LAUREN</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>1522</td><td>TABARES, JOEL</td><td>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>5736</td><td>VAULTZ, BIJOU</td><td>Absent on the assessment test.</td></tr><tr><td>0359</td><td>WILLIAMS, AMAR</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-1 </td><td>(BOOKER, SHAKEY (9169))<BR>(CEPEDA, NADINE (8088))<BR>(DELEON, IRAIMA (5655))<BR>(DURAN, ANTHONY (4347))<BR>(FAYE, QUINTIN (6430))<BR>(FREZZELL, VELMA (4058))<BR>(HART, JADE (9601))<BR>(JOHNSON, QUANESSA (4691))<BR>(PABARUE, ANJANIE (1503))<BR>(PANTOJA, LAUREN (6005))Absent on the assessment test.</td></tr><tr><td> 108-topic-2 </td><td>(BOOKER, SHAKEY (9169))<BR>(CEPEDA, NADINE (8088))<BR>(DELEON, IRAIMA (5655))<BR>(DURAN, ANTHONY (4347))<BR>(DUVERNE, TATIANA (8054))<BR>(FAYE, QUINTIN (6430))<BR>(FREZZELL, VELMA (4058))<BR>(HART, JADE (9601))<BR>(JOHNSON, QUANESSA (4691))<BR>(KEY, ASIA (5607))<BR>(MIGALLEN, ELIEN (8429))<BR>(PABARUE, ANJANIE (1503))<BR>(PANTOJA, LAUREN (6005))<BR>(TABARES, JOEL (1522))Absent on the assessment test.</td></tr><tr><td> 108-topic-3 </td><td>(BOOKER, SHAKEY (9169))<BR>(DELEON, IRAIMA (5655))<BR>(DURAN, ANTHONY (4347))<BR>(FAYE, QUINTIN (6430))<BR>(FREZZELL, VELMA (4058))<BR>(KEY, ASIA (5607))<BR>(PABARUE, ANJANIE (1503))<BR>(PANTOJA, LAUREN (6005))Absent on the assessment test.</td></tr><tr><td> 108-topic-4 </td><td>(CEPEDA, NADINE (8088))<BR>(DELEON, IRAIMA (5655))<BR>(DURAN, ANTHONY (4347))<BR>(FAYE, QUINTIN (6430))<BR>(FREZZELL, VELMA (4058))<BR>(HART, JADE (9601))<BR>(JOHNSON, QUANESSA (4691))<BR>(KEY, ASIA (5607))<BR>(MIGALLEN, ELIEN (8429))<BR>(PABARUE, ANJANIE (1503))<BR>(PANTOJA, LAUREN (6005))<BR>(TABARES, JOEL (1522))Absent on the assessment test.</td></tr><tr><td> 108-topic-5 </td><td>(BOOKER, SHAKEY (9169))<BR>(CEPEDA, NADINE (8088))<BR>(DELEON, IRAIMA (5655))<BR>(DURAN, ANTHONY (4347))<BR>(DUVERNE, TATIANA (8054))<BR>(FAYE, QUINTIN (6430))<BR>(FREZZELL, VELMA (4058))<BR>(HART, JADE (9601))<BR>(JOHNSON, QUANESSA (4691))<BR>(KEY, ASIA (5607))<BR>(MENDEZ, MASIEL (7232))<BR>(MIGALLEN, ELIEN (8429))<BR>(PABARUE, ANJANIE (1503))<BR>(PANTOJA, LAUREN (6005))<BR>(TABARES, JOEL (1522))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
