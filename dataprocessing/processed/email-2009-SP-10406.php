#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>06</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>TREMBINSKA_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3753</td><td>ALIX, SMILL</td><td>104-topic-4</td></tr><tr><td>4012</td><td>ALLETTE, TYRELL</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>9585</td><td>CACACE, CELESTE</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>8682</td><td>CARPIO, ANGELA</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>8994</td><td>CEBALLOS, JOHN</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>0934</td><td>CHAVIRA, ROCIO</td><td>104-topic-1<BR>104-topic-4</td></tr><tr><td>3009</td><td>DAVID, MELODY</td><td>Absent on the assessment test.</td></tr><tr><td>2231</td><td>FANA, CINTHYA</td><td>104-topic-4</td></tr><tr><td>2576</td><td>FERDOUS, NAZMUL</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>8244</td><td>GUGLIELMO, ANTHONY</td><td>104-topic-1<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>4013</td><td>GUSITA, ALEXANDRA</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>6440</td><td>GUZMAN, DARIAN</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>7980</td><td>HENRY, WHITNEY</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>3168</td><td>LASALA, FRANK</td><td>104-topic-1<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>8979</td><td>LEON, BRIAN</td><td>104-topic-2<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>9731</td><td>LOCIEL, LESLIE</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>3397</td><td>MADERA, FRANCISCO</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>0813</td><td>MBADIWE, FRANCIS</td><td>Absent on the assessment test.</td></tr><tr><td>1027</td><td>MCCOY, KENESHIA</td><td>Absent on the assessment test.</td></tr><tr><td>9117</td><td>MORICO, GABRIELA</td><td>104-topic-4</td></tr><tr><td>2558</td><td>POMALES, ASHLEY</td><td>104-topic-1<BR>104-topic-4</td></tr><tr><td>1925</td><td>QUERY, CARMEN</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>3807</td><td>RAYMOND, VANESSA</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>9184</td><td>REYES, JENNIFER</td><td>Absent on the assessment test.</td></tr><tr><td>9184</td><td>SEPULVEDA, CHRISTOPHER</td><td>104-topic-1<BR>104-topic-4</td></tr><tr><td>5153</td><td>SOTO, JOHN</td><td>104-topic-4</td></tr><tr><td>2677</td><td>SWINEY, BRUCE</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(CARPIO, ANGELA (8682))<BR>(CHAVIRA, ROCIO (0934))<BR>(GUGLIELMO, ANTHONY (8244))<BR>(LASALA, FRANK (3168))<BR>(POMALES, ASHLEY (2558))<BR>(RAYMOND, VANESSA (3807))<BR>(SEPULVEDA, CHRISTOPHER (9184))<BR>(SWINEY, BRUCE (2677))</td></tr><tr><td> 104-topic-2 </td><td>(ALLETTE, TYRELL (4012))<BR>(CARPIO, ANGELA (8682))<BR>(CEBALLOS, JOHN (8994))<BR>(FERDOUS, NAZMUL (2576))<BR>(GUSITA, ALEXANDRA (4013))<BR>(GUZMAN, DARIAN (6440))<BR>(HENRY, WHITNEY (7980))<BR>(LEON, BRIAN (8979))<BR>(LOCIEL, LESLIE (9731))<BR>(MADERA, FRANCISCO (3397))<BR>(QUERY, CARMEN (1925))<BR>(RAYMOND, VANESSA (3807))<BR>(SWINEY, BRUCE (2677))</td></tr><tr><td> 104-topic-3 </td><td>(ALLETTE, TYRELL (4012))<BR>(CACACE, CELESTE (9585))<BR>(CARPIO, ANGELA (8682))<BR>(CEBALLOS, JOHN (8994))<BR>(FERDOUS, NAZMUL (2576))<BR>(HENRY, WHITNEY (7980))<BR>(LASALA, FRANK (3168))<BR>(LOCIEL, LESLIE (9731))<BR>(QUERY, CARMEN (1925))<BR>(RAYMOND, VANESSA (3807))<BR>(SWINEY, BRUCE (2677))</td></tr><tr><td> 104-topic-4 </td><td>(ALIX, SMILL (3753))<BR>(ALLETTE, TYRELL (4012))<BR>(CACACE, CELESTE (9585))<BR>(CARPIO, ANGELA (8682))<BR>(CEBALLOS, JOHN (8994))<BR>(CHAVIRA, ROCIO (0934))<BR>(FANA, CINTHYA (2231))<BR>(FERDOUS, NAZMUL (2576))<BR>(GUGLIELMO, ANTHONY (8244))<BR>(GUSITA, ALEXANDRA (4013))<BR>(GUZMAN, DARIAN (6440))<BR>(HENRY, WHITNEY (7980))<BR>(LASALA, FRANK (3168))<BR>(LEON, BRIAN (8979))<BR>(LOCIEL, LESLIE (9731))<BR>(MADERA, FRANCISCO (3397))<BR>(MORICO, GABRIELA (9117))<BR>(POMALES, ASHLEY (2558))<BR>(QUERY, CARMEN (1925))<BR>(RAYMOND, VANESSA (3807))<BR>(SEPULVEDA, CHRISTOPHER (9184))<BR>(SOTO, JOHN (5153))<BR>(SWINEY, BRUCE (2677))</td></tr><tr><td> 104-topic-5 </td><td>(GUGLIELMO, ANTHONY (8244))<BR>(LEON, BRIAN (8979))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>