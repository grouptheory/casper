#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>26</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>POLLAK_D</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1395</td><td>BATISTA, JEANETTE</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>0541</td><td>BONHOMME, MIRLANDE</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>4010</td><td>BRZOSKO, MARTYNA</td><td>Passed everything.</td></tr><tr><td>1893</td><td>CARRION, LAUREN</td><td>104-topic-1<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>2357</td><td>DORRIAN, DANA</td><td>Absent on the assessment test.</td></tr><tr><td>3941</td><td>DORSEY, SHONTE</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>1334</td><td>DREW, AUDREY</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>0651</td><td>ELHANAFI, SALLY</td><td>Absent on the assessment test.</td></tr><tr><td>5367</td><td>GABRIEL, TIAWANDA</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-4</td></tr><tr><td>2645</td><td>JACOBO, STEPHANIE</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>4694</td><td>JORQUERA, JESENIA</td><td>104-topic-1<BR>104-topic-4</td></tr><tr><td>6874</td><td>KUBIC, BRANDON</td><td>Absent on the assessment test.</td></tr><tr><td>3893</td><td>LACARI, JUDITH</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>9547</td><td>LEON, DAVID</td><td>Passed everything.</td></tr><tr><td>9815</td><td>LEWIS, TAMEKA</td><td>Absent on the assessment test.</td></tr><tr><td>4808</td><td>MARQUEZ, JONATHAN</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-4</td></tr><tr><td>4908</td><td>PAIZANO, DANIA</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>6351</td><td>PARK, SEOLHEE</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>9396</td><td>PARRILLA, EMILY</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>2019</td><td>PERALTA, GLORIVI</td><td>104-topic-4<BR>104-topic-5</td></tr><tr><td>9796</td><td>RAMIREZ, OSCAR</td><td>Absent on the assessment test.</td></tr><tr><td>4420</td><td>RUIZ, LUZ</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>2425</td><td>SUAREZ, AILYN</td><td>104-topic-4</td></tr><tr><td>2810</td><td>TENECELA, MARISOL</td><td>104-topic-4</td></tr><tr><td>1282</td><td>VALDEZ, MELODY</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>6552</td><td>YOUNGBLOOD, LISAMARIE</td><td>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>9932</td><td>ZORRILLA, CATHERINE</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(CARRION, LAUREN (1893))<BR>(GABRIEL, TIAWANDA (5367))<BR>(JORQUERA, JESENIA (4694))<BR>(LACARI, JUDITH (3893))<BR>(MARQUEZ, JONATHAN (4808))<BR>(PARRILLA, EMILY (9396))<BR>(RUIZ, LUZ (4420))<BR>(ZORRILLA, CATHERINE (9932))</td></tr><tr><td> 104-topic-2 </td><td>(BATISTA, JEANETTE (1395))<BR>(BONHOMME, MIRLANDE (0541))<BR>(DORSEY, SHONTE (3941))<BR>(DREW, AUDREY (1334))<BR>(GABRIEL, TIAWANDA (5367))<BR>(JACOBO, STEPHANIE (2645))<BR>(LACARI, JUDITH (3893))<BR>(MARQUEZ, JONATHAN (4808))<BR>(PAIZANO, DANIA (4908))<BR>(PARK, SEOLHEE (6351))<BR>(PARRILLA, EMILY (9396))<BR>(RUIZ, LUZ (4420))<BR>(YOUNGBLOOD, LISAMARIE (6552))<BR>(ZORRILLA, CATHERINE (9932))</td></tr><tr><td> 104-topic-3 </td><td>(BATISTA, JEANETTE (1395))<BR>(BONHOMME, MIRLANDE (0541))<BR>(DORSEY, SHONTE (3941))<BR>(DREW, AUDREY (1334))<BR>(PAIZANO, DANIA (4908))<BR>(PARK, SEOLHEE (6351))<BR>(PARRILLA, EMILY (9396))<BR>(RUIZ, LUZ (4420))<BR>(VALDEZ, MELODY (1282))<BR>(YOUNGBLOOD, LISAMARIE (6552))<BR>(ZORRILLA, CATHERINE (9932))</td></tr><tr><td> 104-topic-4 </td><td>(BATISTA, JEANETTE (1395))<BR>(BONHOMME, MIRLANDE (0541))<BR>(CARRION, LAUREN (1893))<BR>(DORSEY, SHONTE (3941))<BR>(DREW, AUDREY (1334))<BR>(GABRIEL, TIAWANDA (5367))<BR>(JACOBO, STEPHANIE (2645))<BR>(JORQUERA, JESENIA (4694))<BR>(LACARI, JUDITH (3893))<BR>(MARQUEZ, JONATHAN (4808))<BR>(PAIZANO, DANIA (4908))<BR>(PARK, SEOLHEE (6351))<BR>(PARRILLA, EMILY (9396))<BR>(PERALTA, GLORIVI (2019))<BR>(RUIZ, LUZ (4420))<BR>(SUAREZ, AILYN (2425))<BR>(TENECELA, MARISOL (2810))<BR>(VALDEZ, MELODY (1282))<BR>(YOUNGBLOOD, LISAMARIE (6552))</td></tr><tr><td> 104-topic-5 </td><td>(CARRION, LAUREN (1893))<BR>(DORSEY, SHONTE (3941))<BR>(LACARI, JUDITH (3893))<BR>(PERALTA, GLORIVI (2019))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
