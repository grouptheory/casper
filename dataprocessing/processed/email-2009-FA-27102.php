#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 271 - INTRO_COMPUTANDPROG (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>271</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3153</td><td>CANESSA, MIGUEL</td><td>271-topic-2<BR>271-topic-5</td></tr><tr><td>6651</td><td>HETNARINE, ULITA</td><td>271-topic-1<BR>271-topic-2<BR>271-topic-3<BR>271-topic-4</td></tr><tr><td>0954</td><td>JONES, DEANDRA</td><td>271-topic-2<BR>271-topic-5</td></tr><tr><td>0961</td><td>LARA, ABRAHAM</td><td>271-topic-2</td></tr><tr><td>9066</td><td>LORENZO, EMMANUEL</td><td>271-topic-1<BR>271-topic-4</td></tr><tr><td>3910</td><td>MAIORINO, STEVEN</td><td>271-topic-5</td></tr><tr><td>3803</td><td>MARSTON, SASHA</td><td>271-topic-2<BR>271-topic-5</td></tr><tr><td>5955</td><td>ROSADO, ANGELICA</td><td>271-topic-2<BR>271-topic-3<BR>271-topic-4<BR>271-topic-5</td></tr><tr><td>9779</td><td>SINBERG, ASHTON</td><td>271-topic-2<BR>271-topic-5</td></tr><tr><td>1289</td><td>WIGGINS, JOY</td><td>271-topic-2</td></tr><tr><td>2401</td><td>WOODHOUSE, PAUL</td><td>271-topic-2</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 271-topic-1 </td><td>(HETNARINE, ULITA (6651))<BR>(LORENZO, EMMANUEL (9066))</td></tr><tr><td> 271-topic-2 </td><td>(CANESSA, MIGUEL (3153))<BR>(HETNARINE, ULITA (6651))<BR>(JONES, DEANDRA (0954))<BR>(LARA, ABRAHAM (0961))<BR>(MARSTON, SASHA (3803))<BR>(ROSADO, ANGELICA (5955))<BR>(SINBERG, ASHTON (9779))<BR>(WIGGINS, JOY (1289))<BR>(WOODHOUSE, PAUL (2401))</td></tr><tr><td> 271-topic-3 </td><td>(HETNARINE, ULITA (6651))<BR>(ROSADO, ANGELICA (5955))</td></tr><tr><td> 271-topic-4 </td><td>(HETNARINE, ULITA (6651))<BR>(LORENZO, EMMANUEL (9066))<BR>(ROSADO, ANGELICA (5955))</td></tr><tr><td> 271-topic-5 </td><td>(CANESSA, MIGUEL (3153))<BR>(JONES, DEANDRA (0954))<BR>(MAIORINO, STEVEN (3910))<BR>(MARSTON, SASHA (3803))<BR>(ROSADO, ANGELICA (5955))<BR>(SINBERG, ASHTON (9779))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
