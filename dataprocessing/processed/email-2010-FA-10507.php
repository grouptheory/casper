#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>07</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MARTINEZ_D</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6221</td><td>ADAMES, STACY</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>6826</td><td>AHMED, SYLVA</td><td>Passed everything.</td></tr><tr><td>5470</td><td>ALAM, MASUKUL</td><td>105-topic-05<BR>105-topic-06<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>1986</td><td>ALLWOOD, LOIS</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>5535</td><td>CHENG, WAI</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>5262</td><td>DEPINTO, NICHOLAS</td><td>Passed everything.</td></tr><tr><td>1701</td><td>DOUSE, MELISSA</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>2788</td><td>FRANCO, MARIANO</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>0290</td><td>GALANG, FRANCIS</td><td>105-topic-06<BR>105-topic-10</td></tr><tr><td>1235</td><td>GARLAND-SMITH, JALISSA</td><td>105-topic-05<BR>105-topic-06<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>0573</td><td>GIBSON, DOMONIC</td><td>105-topic-03<BR>105-topic-04<BR>105-topic-06<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>8822</td><td>HOSSAIN, ZAKIR</td><td>Passed everything.</td></tr><tr><td>5468</td><td>JONES, MOUSSIROU</td><td>105-topic-01<BR>105-topic-05<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>5445</td><td>KANHAI, RAM</td><td>105-topic-09<BR>105-topic-10</td></tr><tr><td>6735</td><td>LEE, KYUNG</td><td>105-topic-02<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>6107</td><td>LUCEY, SEAN</td><td>105-topic-01<BR>105-topic-04<BR>105-topic-06<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>1827</td><td>MALDONADO, STEPHANIE</td><td>Passed everything.</td></tr><tr><td>5409</td><td>MANNA, AVISHKAR</td><td>105-topic-04<BR>105-topic-05<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>0750</td><td>MASSIMI, MALCOLM</td><td>105-topic-02<BR>105-topic-05<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>4291</td><td>MONTENEGRO, DIANA</td><td>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>2592</td><td>MOONEY, CHRISTOPHER</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>0629</td><td>MORGAN, MERVIN</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>0965</td><td>NEMETH, STEFAN</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>2313</td><td>NUNEZ, JASON</td><td>Absent on the assessment test.</td></tr><tr><td>0028</td><td>ORLANDO, MICHAEL</td><td>105-topic-05<BR>105-topic-06</td></tr><tr><td>8171</td><td>ORTIZ, MICHELLE</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-06<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>4557</td><td>PEREZ, TATIANA</td><td>105-topic-01<BR>105-topic-06</td></tr><tr><td>2519</td><td>PROKOP, ANNA</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>9702</td><td>SHEEHAN, DAVID</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-05<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>7784</td><td>SIMONI, KLODIAN</td><td>105-topic-01<BR>105-topic-04<BR>105-topic-05<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>5592</td><td>SUAREZ, MONICA</td><td>105-topic-02<BR>105-topic-05<BR>105-topic-06<BR>105-topic-08</td></tr><tr><td>5672</td><td>VLASATY, ANDREW</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>7064</td><td>WEEKS, IAN</td><td>105-topic-01<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>4213</td><td>WILLIS, CHRISTOPHER</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-06</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-01 </td><td>(ADAMES, STACY (6221))<BR>(ALLWOOD, LOIS (1986))<BR>(CHENG, WAI (5535))<BR>(DOUSE, MELISSA (1701))<BR>(FRANCO, MARIANO (2788))<BR>(JONES, MOUSSIROU (5468))<BR>(LUCEY, SEAN (6107))<BR>(MOONEY, CHRISTOPHER (2592))<BR>(MORGAN, MERVIN (0629))<BR>(NEMETH, STEFAN (0965))<BR>(ORTIZ, MICHELLE (8171))<BR>(PEREZ, TATIANA (4557))<BR>(PROKOP, ANNA (2519))<BR>(SHEEHAN, DAVID (9702))<BR>(SIMONI, KLODIAN (7784))<BR>(VLASATY, ANDREW (5672))<BR>(WEEKS, IAN (7064))<BR>(WILLIS, CHRISTOPHER (4213))</td></tr><tr><td> 105-topic-02 </td><td>(ADAMES, STACY (6221))<BR>(ALLWOOD, LOIS (1986))<BR>(DOUSE, MELISSA (1701))<BR>(LEE, KYUNG (6735))<BR>(MASSIMI, MALCOLM (0750))<BR>(MONTENEGRO, DIANA (4291))<BR>(MOONEY, CHRISTOPHER (2592))<BR>(MORGAN, MERVIN (0629))<BR>(NEMETH, STEFAN (0965))<BR>(SHEEHAN, DAVID (9702))<BR>(SUAREZ, MONICA (5592))<BR>(VLASATY, ANDREW (5672))</td></tr><tr><td> 105-topic-03 </td><td>(ADAMES, STACY (6221))<BR>(ALLWOOD, LOIS (1986))<BR>(CHENG, WAI (5535))<BR>(DOUSE, MELISSA (1701))<BR>(FRANCO, MARIANO (2788))<BR>(GIBSON, DOMONIC (0573))<BR>(LEE, KYUNG (6735))<BR>(MONTENEGRO, DIANA (4291))<BR>(MORGAN, MERVIN (0629))<BR>(ORTIZ, MICHELLE (8171))<BR>(PROKOP, ANNA (2519))<BR>(WILLIS, CHRISTOPHER (4213))</td></tr><tr><td> 105-topic-04 </td><td>(ADAMES, STACY (6221))<BR>(ALLWOOD, LOIS (1986))<BR>(DOUSE, MELISSA (1701))<BR>(GIBSON, DOMONIC (0573))<BR>(LUCEY, SEAN (6107))<BR>(MANNA, AVISHKAR (5409))<BR>(MONTENEGRO, DIANA (4291))<BR>(MOONEY, CHRISTOPHER (2592))<BR>(MORGAN, MERVIN (0629))<BR>(NEMETH, STEFAN (0965))<BR>(ORTIZ, MICHELLE (8171))<BR>(PROKOP, ANNA (2519))<BR>(SIMONI, KLODIAN (7784))<BR>(VLASATY, ANDREW (5672))<BR>(WEEKS, IAN (7064))</td></tr><tr><td> 105-topic-05 </td><td>(ADAMES, STACY (6221))<BR>(ALAM, MASUKUL (5470))<BR>(ALLWOOD, LOIS (1986))<BR>(CHENG, WAI (5535))<BR>(DOUSE, MELISSA (1701))<BR>(FRANCO, MARIANO (2788))<BR>(GARLAND-SMITH, JALISSA (1235))<BR>(JONES, MOUSSIROU (5468))<BR>(LEE, KYUNG (6735))<BR>(MANNA, AVISHKAR (5409))<BR>(MASSIMI, MALCOLM (0750))<BR>(MONTENEGRO, DIANA (4291))<BR>(MOONEY, CHRISTOPHER (2592))<BR>(MORGAN, MERVIN (0629))<BR>(NEMETH, STEFAN (0965))<BR>(ORLANDO, MICHAEL (0028))<BR>(SHEEHAN, DAVID (9702))<BR>(SIMONI, KLODIAN (7784))<BR>(SUAREZ, MONICA (5592))<BR>(VLASATY, ANDREW (5672))<BR>(WEEKS, IAN (7064))</td></tr><tr><td> 105-topic-06 </td><td>(ADAMES, STACY (6221))<BR>(ALAM, MASUKUL (5470))<BR>(ALLWOOD, LOIS (1986))<BR>(CHENG, WAI (5535))<BR>(DOUSE, MELISSA (1701))<BR>(FRANCO, MARIANO (2788))<BR>(GALANG, FRANCIS (0290))<BR>(GARLAND-SMITH, JALISSA (1235))<BR>(GIBSON, DOMONIC (0573))<BR>(JONES, MOUSSIROU (5468))<BR>(LEE, KYUNG (6735))<BR>(LUCEY, SEAN (6107))<BR>(MONTENEGRO, DIANA (4291))<BR>(MOONEY, CHRISTOPHER (2592))<BR>(MORGAN, MERVIN (0629))<BR>(NEMETH, STEFAN (0965))<BR>(ORLANDO, MICHAEL (0028))<BR>(ORTIZ, MICHELLE (8171))<BR>(PEREZ, TATIANA (4557))<BR>(PROKOP, ANNA (2519))<BR>(SHEEHAN, DAVID (9702))<BR>(SUAREZ, MONICA (5592))<BR>(VLASATY, ANDREW (5672))<BR>(WEEKS, IAN (7064))<BR>(WILLIS, CHRISTOPHER (4213))</td></tr><tr><td> 105-topic-07 </td><td>(ADAMES, STACY (6221))<BR>(ALLWOOD, LOIS (1986))<BR>(DOUSE, MELISSA (1701))<BR>(LEE, KYUNG (6735))<BR>(MOONEY, CHRISTOPHER (2592))<BR>(MORGAN, MERVIN (0629))<BR>(SIMONI, KLODIAN (7784))</td></tr><tr><td> 105-topic-08 </td><td>(ADAMES, STACY (6221))<BR>(ALLWOOD, LOIS (1986))<BR>(CHENG, WAI (5535))<BR>(GARLAND-SMITH, JALISSA (1235))<BR>(LEE, KYUNG (6735))<BR>(MANNA, AVISHKAR (5409))<BR>(MASSIMI, MALCOLM (0750))<BR>(MONTENEGRO, DIANA (4291))<BR>(MORGAN, MERVIN (0629))<BR>(SUAREZ, MONICA (5592))<BR>(VLASATY, ANDREW (5672))</td></tr><tr><td> 105-topic-09 </td><td>(ADAMES, STACY (6221))<BR>(ALAM, MASUKUL (5470))<BR>(ALLWOOD, LOIS (1986))<BR>(DOUSE, MELISSA (1701))<BR>(GIBSON, DOMONIC (0573))<BR>(KANHAI, RAM (5445))<BR>(LEE, KYUNG (6735))<BR>(LUCEY, SEAN (6107))<BR>(MASSIMI, MALCOLM (0750))<BR>(MOONEY, CHRISTOPHER (2592))<BR>(ORTIZ, MICHELLE (8171))<BR>(VLASATY, ANDREW (5672))<BR>(WEEKS, IAN (7064))</td></tr><tr><td> 105-topic-10 </td><td>(ADAMES, STACY (6221))<BR>(ALAM, MASUKUL (5470))<BR>(ALLWOOD, LOIS (1986))<BR>(CHENG, WAI (5535))<BR>(DOUSE, MELISSA (1701))<BR>(FRANCO, MARIANO (2788))<BR>(GALANG, FRANCIS (0290))<BR>(GARLAND-SMITH, JALISSA (1235))<BR>(GIBSON, DOMONIC (0573))<BR>(JONES, MOUSSIROU (5468))<BR>(KANHAI, RAM (5445))<BR>(LEE, KYUNG (6735))<BR>(LUCEY, SEAN (6107))<BR>(MANNA, AVISHKAR (5409))<BR>(MASSIMI, MALCOLM (0750))<BR>(MONTENEGRO, DIANA (4291))<BR>(MOONEY, CHRISTOPHER (2592))<BR>(MORGAN, MERVIN (0629))<BR>(NEMETH, STEFAN (0965))<BR>(ORTIZ, MICHELLE (8171))<BR>(PROKOP, ANNA (2519))<BR>(SHEEHAN, DAVID (9702))<BR>(SIMONI, KLODIAN (7784))<BR>(VLASATY, ANDREW (5672))<BR>(WEEKS, IAN (7064))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>