#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>GIORDANO_J</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>5230</td><td>AMES, JUSTIN</td><td>Absent on the assessment test.</td></tr><tr><td>4872</td><td>BALGOBIN, PHYLICIA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>8936</td><td>CANTALINO, PASQUALE</td><td>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-8</td></tr><tr><td>3516</td><td>COMO, MICHAEL</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>7536</td><td>CRUZ, LUZ</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5<BR>105-topic-7</td></tr><tr><td>3696</td><td>DISLA, LUISFREDO</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>8427</td><td>ENSMANN, PAUL</td><td>105-topic-1<BR>105-topic-6</td></tr><tr><td>9013</td><td>GARCIA, JASMINE</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>7637</td><td>GILGURD, JULIA</td><td>Absent on the assessment test.</td></tr><tr><td>9801</td><td>HARRIS, LATOYA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-4<BR>105-topic-5<BR>105-topic-7</td></tr><tr><td>2270</td><td>HEREDIA, KATELYN</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>4311</td><td>HIGGINS_DODD, RYAN</td><td>105-topic-1<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>8113</td><td>KOLENOVIC, ANEC</td><td>105-topic-1<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>0251</td><td>LAWRENCE, AYANA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>2612</td><td>LEUNG, JUSTIN</td><td>105-topic-6<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>0792</td><td>LIN, JARON</td><td>105-topic-5<BR>105-topic-6</td></tr><tr><td>5043</td><td>MACZUGA, PAWEL</td><td>105-topic-10<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-9</td></tr><tr><td>3090</td><td>MAKOWSKI, ADRIAN</td><td>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>2082</td><td>MARSHALL, JEREMY</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>5081</td><td>MASBOOB, MARY</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>8410</td><td>MORAN, RONY</td><td>105-topic-1<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>5606</td><td>MURICHI, JOHN</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>8021</td><td>NINO, ALICE</td><td>105-topic-1<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>2313</td><td>NUNEZ, JASON</td><td>Absent on the assessment test.</td></tr><tr><td>0123</td><td>REAVES, PATRICIA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>7006</td><td>RODGERS, ZAKEIA</td><td>105-topic-10<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>1400</td><td>RUGOVA, KUSHTRIM</td><td>105-topic-1<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>1157</td><td>SHAO, CHENG</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>1505</td><td>THOMAS-FRANCIS, MICHAEL</td><td>105-topic-1<BR>105-topic-3<BR>105-topic-4<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>9582</td><td>VENDRYES, STEVEN</td><td>105-topic-10<BR>105-topic-3<BR>105-topic-4<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>3479</td><td>WORRELL, DANIEL</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-7<BR>105-topic-8<BR>105-topic-9</td></tr><tr><td>3562</td><td>ZHUO, LINGJIE</td><td>105-topic-10<BR>105-topic-3<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-1 </td><td>(BALGOBIN, PHYLICIA (4872))<BR>(COMO, MICHAEL (3516))<BR>(CRUZ, LUZ (7536))<BR>(DISLA, LUISFREDO (3696))<BR>(ENSMANN, PAUL (8427))<BR>(GARCIA, JASMINE (9013))<BR>(HARRIS, LATOYA (9801))<BR>(HEREDIA, KATELYN (2270))<BR>(HIGGINS_DODD, RYAN (4311))<BR>(KOLENOVIC, ANEC (8113))<BR>(LAWRENCE, AYANA (0251))<BR>(MARSHALL, JEREMY (2082))<BR>(MASBOOB, MARY (5081))<BR>(MORAN, RONY (8410))<BR>(MURICHI, JOHN (5606))<BR>(NINO, ALICE (8021))<BR>(REAVES, PATRICIA (0123))<BR>(RUGOVA, KUSHTRIM (1400))<BR>(SHAO, CHENG (1157))<BR>(THOMAS-FRANCIS, MICHAEL (1505))<BR>(WORRELL, DANIEL (3479))</td></tr><tr><td> 105-topic-10 </td><td>(BALGOBIN, PHYLICIA (4872))<BR>(CANTALINO, PASQUALE (8936))<BR>(COMO, MICHAEL (3516))<BR>(CRUZ, LUZ (7536))<BR>(DISLA, LUISFREDO (3696))<BR>(GARCIA, JASMINE (9013))<BR>(HARRIS, LATOYA (9801))<BR>(HEREDIA, KATELYN (2270))<BR>(LAWRENCE, AYANA (0251))<BR>(MACZUGA, PAWEL (5043))<BR>(MARSHALL, JEREMY (2082))<BR>(MURICHI, JOHN (5606))<BR>(REAVES, PATRICIA (0123))<BR>(RODGERS, ZAKEIA (7006))<BR>(SHAO, CHENG (1157))<BR>(VENDRYES, STEVEN (9582))<BR>(WORRELL, DANIEL (3479))<BR>(ZHUO, LINGJIE (3562))</td></tr><tr><td> 105-topic-2 </td><td>(CANTALINO, PASQUALE (8936))<BR>(CRUZ, LUZ (7536))<BR>(DISLA, LUISFREDO (3696))<BR>(LAWRENCE, AYANA (0251))<BR>(MARSHALL, JEREMY (2082))<BR>(MASBOOB, MARY (5081))<BR>(MURICHI, JOHN (5606))<BR>(REAVES, PATRICIA (0123))</td></tr><tr><td> 105-topic-3 </td><td>(BALGOBIN, PHYLICIA (4872))<BR>(CANTALINO, PASQUALE (8936))<BR>(COMO, MICHAEL (3516))<BR>(HEREDIA, KATELYN (2270))<BR>(MACZUGA, PAWEL (5043))<BR>(MAKOWSKI, ADRIAN (3090))<BR>(MARSHALL, JEREMY (2082))<BR>(MASBOOB, MARY (5081))<BR>(MURICHI, JOHN (5606))<BR>(REAVES, PATRICIA (0123))<BR>(THOMAS-FRANCIS, MICHAEL (1505))<BR>(VENDRYES, STEVEN (9582))<BR>(WORRELL, DANIEL (3479))<BR>(ZHUO, LINGJIE (3562))</td></tr><tr><td> 105-topic-4 </td><td>(CANTALINO, PASQUALE (8936))<BR>(COMO, MICHAEL (3516))<BR>(CRUZ, LUZ (7536))<BR>(DISLA, LUISFREDO (3696))<BR>(HARRIS, LATOYA (9801))<BR>(HEREDIA, KATELYN (2270))<BR>(HIGGINS_DODD, RYAN (4311))<BR>(KOLENOVIC, ANEC (8113))<BR>(MARSHALL, JEREMY (2082))<BR>(REAVES, PATRICIA (0123))<BR>(RODGERS, ZAKEIA (7006))<BR>(RUGOVA, KUSHTRIM (1400))<BR>(THOMAS-FRANCIS, MICHAEL (1505))<BR>(VENDRYES, STEVEN (9582))<BR>(WORRELL, DANIEL (3479))</td></tr><tr><td> 105-topic-5 </td><td>(BALGOBIN, PHYLICIA (4872))<BR>(CANTALINO, PASQUALE (8936))<BR>(COMO, MICHAEL (3516))<BR>(CRUZ, LUZ (7536))<BR>(DISLA, LUISFREDO (3696))<BR>(GARCIA, JASMINE (9013))<BR>(HARRIS, LATOYA (9801))<BR>(HEREDIA, KATELYN (2270))<BR>(HIGGINS_DODD, RYAN (4311))<BR>(KOLENOVIC, ANEC (8113))<BR>(LAWRENCE, AYANA (0251))<BR>(LIN, JARON (0792))<BR>(MACZUGA, PAWEL (5043))<BR>(MAKOWSKI, ADRIAN (3090))<BR>(MARSHALL, JEREMY (2082))<BR>(MASBOOB, MARY (5081))<BR>(MURICHI, JOHN (5606))<BR>(NINO, ALICE (8021))<BR>(REAVES, PATRICIA (0123))<BR>(RODGERS, ZAKEIA (7006))<BR>(RUGOVA, KUSHTRIM (1400))<BR>(SHAO, CHENG (1157))<BR>(WORRELL, DANIEL (3479))<BR>(ZHUO, LINGJIE (3562))</td></tr><tr><td> 105-topic-6 </td><td>(BALGOBIN, PHYLICIA (4872))<BR>(COMO, MICHAEL (3516))<BR>(DISLA, LUISFREDO (3696))<BR>(ENSMANN, PAUL (8427))<BR>(GARCIA, JASMINE (9013))<BR>(HEREDIA, KATELYN (2270))<BR>(HIGGINS_DODD, RYAN (4311))<BR>(KOLENOVIC, ANEC (8113))<BR>(LAWRENCE, AYANA (0251))<BR>(LEUNG, JUSTIN (2612))<BR>(LIN, JARON (0792))<BR>(MACZUGA, PAWEL (5043))<BR>(MAKOWSKI, ADRIAN (3090))<BR>(MARSHALL, JEREMY (2082))<BR>(MASBOOB, MARY (5081))<BR>(MORAN, RONY (8410))<BR>(MURICHI, JOHN (5606))<BR>(NINO, ALICE (8021))<BR>(REAVES, PATRICIA (0123))<BR>(RODGERS, ZAKEIA (7006))<BR>(RUGOVA, KUSHTRIM (1400))<BR>(SHAO, CHENG (1157))<BR>(THOMAS-FRANCIS, MICHAEL (1505))<BR>(VENDRYES, STEVEN (9582))<BR>(ZHUO, LINGJIE (3562))</td></tr><tr><td> 105-topic-7 </td><td>(BALGOBIN, PHYLICIA (4872))<BR>(COMO, MICHAEL (3516))<BR>(CRUZ, LUZ (7536))<BR>(DISLA, LUISFREDO (3696))<BR>(GARCIA, JASMINE (9013))<BR>(HARRIS, LATOYA (9801))<BR>(HEREDIA, KATELYN (2270))<BR>(HIGGINS_DODD, RYAN (4311))<BR>(KOLENOVIC, ANEC (8113))<BR>(LEUNG, JUSTIN (2612))<BR>(MAKOWSKI, ADRIAN (3090))<BR>(MARSHALL, JEREMY (2082))<BR>(MASBOOB, MARY (5081))<BR>(MORAN, RONY (8410))<BR>(MURICHI, JOHN (5606))<BR>(REAVES, PATRICIA (0123))<BR>(RODGERS, ZAKEIA (7006))<BR>(RUGOVA, KUSHTRIM (1400))<BR>(SHAO, CHENG (1157))<BR>(THOMAS-FRANCIS, MICHAEL (1505))<BR>(VENDRYES, STEVEN (9582))<BR>(WORRELL, DANIEL (3479))<BR>(ZHUO, LINGJIE (3562))</td></tr><tr><td> 105-topic-8 </td><td>(CANTALINO, PASQUALE (8936))<BR>(DISLA, LUISFREDO (3696))<BR>(LEUNG, JUSTIN (2612))<BR>(MAKOWSKI, ADRIAN (3090))<BR>(VENDRYES, STEVEN (9582))<BR>(WORRELL, DANIEL (3479))</td></tr><tr><td> 105-topic-9 </td><td>(MACZUGA, PAWEL (5043))<BR>(MASBOOB, MARY (5081))<BR>(RODGERS, ZAKEIA (7006))<BR>(WORRELL, DANIEL (3479))<BR>(ZHUO, LINGJIE (3562))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
