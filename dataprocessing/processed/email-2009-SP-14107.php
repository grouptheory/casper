#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 141 - PRE-CALCULUS (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>141</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>07</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>WIESCHENBERG_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>5042</td><td>ARANDA, CARLOS</td><td>141-topic-2<BR>141-topic-4</td></tr><tr><td>7465</td><td>BARSKY, YEVGENY</td><td>141-topic-2<BR>141-topic-4<BR>141-topic-5</td></tr><tr><td>6319</td><td>BENITEZ, LAURA</td><td>141-topic-2<BR>141-topic-4</td></tr><tr><td>4102</td><td>DOMINGUEZ, EHREN</td><td>141-topic-1<BR>141-topic-2</td></tr><tr><td>9497</td><td>FAIELLA, TONI</td><td>141-topic-2<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5</td></tr><tr><td>5264</td><td>FENG, DONG_DONG</td><td>141-topic-2<BR>141-topic-4</td></tr><tr><td>4183</td><td>GARCIA, MELINDA</td><td>141-topic-2<BR>141-topic-4<BR>141-topic-5</td></tr><tr><td>7409</td><td>JONES, RONALD</td><td>141-topic-2<BR>141-topic-4</td></tr><tr><td>8467</td><td>KLANINA, ILANA</td><td>141-topic-2</td></tr><tr><td>1776</td><td>KOBRYNSKI, DAMIAN</td><td>141-topic-2<BR>141-topic-3<BR>141-topic-4</td></tr><tr><td>0412</td><td>KUKLIS, DIMITRIS</td><td>141-topic-2<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5</td></tr><tr><td>7716</td><td>LOPEZ, ANDREA</td><td>141-topic-2<BR>141-topic-5</td></tr><tr><td>5849</td><td>MATTESICH, MARIO</td><td>141-topic-1<BR>141-topic-2<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5</td></tr><tr><td>1682</td><td>QUERO, KRYSBEL</td><td>141-topic-2<BR>141-topic-4</td></tr><tr><td>8604</td><td>RUSSELL, RAPHAEL</td><td>141-topic-4<BR>141-topic-5</td></tr><tr><td>4208</td><td>SAENZ, YESSICA</td><td>141-topic-4<BR>141-topic-5</td></tr><tr><td>3142</td><td>SANCHEZ, LOU</td><td>141-topic-2<BR>141-topic-4</td></tr><tr><td>0816</td><td>SCOTT, TIFFANY</td><td>141-topic-2<BR>141-topic-4<BR>141-topic-5</td></tr><tr><td>3380</td><td>SHERIN, PATRICIA</td><td>Passed everything.</td></tr><tr><td>6159</td><td>SINGH, PAMELA</td><td>141-topic-2<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5</td></tr><tr><td>2830</td><td>WAT, GARY</td><td>Absent on the assessment test.</td></tr><tr><td>4429</td><td>WOESTEHOFF, KATHLEEN</td><td>141-topic-1<BR>141-topic-2<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5</td></tr><tr><td>4397</td><td>YANES, ELIZABETH</td><td>141-topic-2<BR>141-topic-3<BR>141-topic-4</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 141-topic-1 </td><td>(DOMINGUEZ, EHREN (4102))<BR>(MATTESICH, MARIO (5849))<BR>(WOESTEHOFF, KATHLEEN (4429))</td></tr><tr><td> 141-topic-2 </td><td>(ARANDA, CARLOS (5042))<BR>(BARSKY, YEVGENY (7465))<BR>(BENITEZ, LAURA (6319))<BR>(DOMINGUEZ, EHREN (4102))<BR>(FAIELLA, TONI (9497))<BR>(FENG, DONG_DONG (5264))<BR>(GARCIA, MELINDA (4183))<BR>(JONES, RONALD (7409))<BR>(KLANINA, ILANA (8467))<BR>(KOBRYNSKI, DAMIAN (1776))<BR>(KUKLIS, DIMITRIS (0412))<BR>(LOPEZ, ANDREA (7716))<BR>(MATTESICH, MARIO (5849))<BR>(QUERO, KRYSBEL (1682))<BR>(SANCHEZ, LOU (3142))<BR>(SCOTT, TIFFANY (0816))<BR>(SINGH, PAMELA (6159))<BR>(WOESTEHOFF, KATHLEEN (4429))<BR>(YANES, ELIZABETH (4397))</td></tr><tr><td> 141-topic-3 </td><td>(FAIELLA, TONI (9497))<BR>(KOBRYNSKI, DAMIAN (1776))<BR>(KUKLIS, DIMITRIS (0412))<BR>(MATTESICH, MARIO (5849))<BR>(SINGH, PAMELA (6159))<BR>(WOESTEHOFF, KATHLEEN (4429))<BR>(YANES, ELIZABETH (4397))</td></tr><tr><td> 141-topic-4 </td><td>(ARANDA, CARLOS (5042))<BR>(BARSKY, YEVGENY (7465))<BR>(BENITEZ, LAURA (6319))<BR>(FAIELLA, TONI (9497))<BR>(FENG, DONG_DONG (5264))<BR>(GARCIA, MELINDA (4183))<BR>(JONES, RONALD (7409))<BR>(KOBRYNSKI, DAMIAN (1776))<BR>(KUKLIS, DIMITRIS (0412))<BR>(MATTESICH, MARIO (5849))<BR>(QUERO, KRYSBEL (1682))<BR>(RUSSELL, RAPHAEL (8604))<BR>(SAENZ, YESSICA (4208))<BR>(SANCHEZ, LOU (3142))<BR>(SCOTT, TIFFANY (0816))<BR>(SINGH, PAMELA (6159))<BR>(WOESTEHOFF, KATHLEEN (4429))<BR>(YANES, ELIZABETH (4397))</td></tr><tr><td> 141-topic-5 </td><td>(BARSKY, YEVGENY (7465))<BR>(FAIELLA, TONI (9497))<BR>(GARCIA, MELINDA (4183))<BR>(KUKLIS, DIMITRIS (0412))<BR>(LOPEZ, ANDREA (7716))<BR>(MATTESICH, MARIO (5849))<BR>(RUSSELL, RAPHAEL (8604))<BR>(SAENZ, YESSICA (4208))<BR>(SCOTT, TIFFANY (0816))<BR>(SINGH, PAMELA (6159))<BR>(WOESTEHOFF, KATHLEEN (4429))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>