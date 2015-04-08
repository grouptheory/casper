#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 271 - INTRO_COMPUTANDPROG (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>271</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>03</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8375</td><td>CANON, STEVEN</td><td>271-topic-2<BR>271-topic-5</td></tr><tr><td>4947</td><td>CARMIGNANI, ISAAC</td><td>271-topic-1</td></tr><tr><td>1853</td><td>CARRASCO, JESUS</td><td>271-topic-4<BR>271-topic-5</td></tr><tr><td>4213</td><td>CHOW, JEFFREY</td><td>271-topic-4<BR>271-topic-5</td></tr><tr><td>9031</td><td>DESCUL, JASON</td><td>Absent on the assessment test.</td></tr><tr><td>9363</td><td>HANNON, MICHAEL</td><td>271-topic-1<BR>271-topic-2<BR>271-topic-5</td></tr><tr><td>2140</td><td>MANDZIK, MICHAEL</td><td>Absent on the assessment test.</td></tr><tr><td>1864</td><td>MATATOV, SAFANYA</td><td>Passed everything.</td></tr><tr><td>0114</td><td>MCPHERSON, EVITA</td><td>271-topic-3</td></tr><tr><td>6497</td><td>MELENDEZ, IVAN</td><td>271-topic-2<BR>271-topic-3</td></tr><tr><td>6745</td><td>NONCENT, JENNIFER</td><td>Absent on the assessment test.</td></tr><tr><td>4264</td><td>NUDELMAN, ARIK</td><td>Passed everything.</td></tr><tr><td>9747</td><td>PASZEK, PATRYK</td><td>271-topic-2<BR>271-topic-4</td></tr><tr><td>0703</td><td>PENG, ANDY</td><td>271-topic-2<BR>271-topic-3<BR>271-topic-4<BR>271-topic-5</td></tr><tr><td>5374</td><td>RIBAS, MARTIN</td><td>271-topic-1<BR>271-topic-2<BR>271-topic-4</td></tr><tr><td>8697</td><td>RIVERA, GIOVANNI</td><td>Absent on the assessment test.</td></tr><tr><td>2366</td><td>RODRIGUEZ, JACOB</td><td>271-topic-4</td></tr><tr><td>0130</td><td>STEPHENS, RAVENANGEL</td><td>271-topic-4<BR>271-topic-5</td></tr><tr><td>6910</td><td>WONG, GREGORY</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 271-topic-1 </td><td>(CARMIGNANI, ISAAC (4947))<BR>(HANNON, MICHAEL (9363))<BR>(RIBAS, MARTIN (5374))</td></tr><tr><td> 271-topic-2 </td><td>(CANON, STEVEN (8375))<BR>(HANNON, MICHAEL (9363))<BR>(MELENDEZ, IVAN (6497))<BR>(PASZEK, PATRYK (9747))<BR>(PENG, ANDY (0703))<BR>(RIBAS, MARTIN (5374))</td></tr><tr><td> 271-topic-3 </td><td>(MCPHERSON, EVITA (0114))<BR>(MELENDEZ, IVAN (6497))<BR>(PENG, ANDY (0703))</td></tr><tr><td> 271-topic-4 </td><td>(CARRASCO, JESUS (1853))<BR>(CHOW, JEFFREY (4213))<BR>(PASZEK, PATRYK (9747))<BR>(PENG, ANDY (0703))<BR>(RIBAS, MARTIN (5374))<BR>(RODRIGUEZ, JACOB (2366))<BR>(STEPHENS, RAVENANGEL (0130))</td></tr><tr><td> 271-topic-5 </td><td>(CANON, STEVEN (8375))<BR>(CARRASCO, JESUS (1853))<BR>(CHOW, JEFFREY (4213))<BR>(HANNON, MICHAEL (9363))<BR>(PENG, ANDY (0703))<BR>(STEPHENS, RAVENANGEL (0130))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
