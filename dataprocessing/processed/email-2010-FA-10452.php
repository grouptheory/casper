#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>52</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MCGILL_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7793</td><td>ALEXANDRE, THIRZA</td><td>Passed everything.</td></tr><tr><td>4137</td><td>ANTOINE, PETER</td><td>Passed everything.</td></tr><tr><td>7163</td><td>CASTILLO, JOEL</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3990</td><td>COLLINS, RYAN</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05</td></tr><tr><td>3191</td><td>CUADRO, KEVIN</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>0265</td><td>EGUAJIE, RICHARD</td><td>Passed everything.</td></tr><tr><td>8547</td><td>GAVARRETE, SINDI</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08</td></tr><tr><td>5154</td><td>HERAS, JEAN_CARLOS</td><td>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>8239</td><td>JOHNSON, ANTONIA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1879</td><td>MARTINEZ, MICHAEL</td><td>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>2893</td><td>OKWUDILI, STANLEY</td><td>Passed everything.</td></tr><tr><td>9052</td><td>RAHMAN, SALEHA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3562</td><td>RENDON, PATRICIA</td><td>104-topic-03<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>1195</td><td>RIVERA, PATRICIA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2483</td><td>ROMERO, GABRIEL</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5953</td><td>SANTA, NICHOLAS</td><td>Passed everything.</td></tr><tr><td>7498</td><td>SHULER, DENISE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6424</td><td>THEODORE, KIMBERLY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4703</td><td>ZORALI, SENIZ</td><td>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(CASTILLO, JOEL (7163))<BR>(COLLINS, RYAN (3990))<BR>(CUADRO, KEVIN (3191))<BR>(GAVARRETE, SINDI (8547))<BR>(JOHNSON, ANTONIA (8239))<BR>(RAHMAN, SALEHA (9052))<BR>(RIVERA, PATRICIA (1195))<BR>(ROMERO, GABRIEL (2483))<BR>(SHULER, DENISE (7498))<BR>(THEODORE, KIMBERLY (6424))</td></tr><tr><td> 104-topic-02 </td><td>(GAVARRETE, SINDI (8547))<BR>(SHULER, DENISE (7498))<BR>(THEODORE, KIMBERLY (6424))<BR>(ZORALI, SENIZ (4703))</td></tr><tr><td> 104-topic-03 </td><td>(CUADRO, KEVIN (3191))<BR>(HERAS, JEAN_CARLOS (5154))<BR>(JOHNSON, ANTONIA (8239))<BR>(RAHMAN, SALEHA (9052))<BR>(RENDON, PATRICIA (3562))<BR>(RIVERA, PATRICIA (1195))<BR>(SHULER, DENISE (7498))<BR>(THEODORE, KIMBERLY (6424))<BR>(ZORALI, SENIZ (4703))</td></tr><tr><td> 104-topic-04 </td><td>(COLLINS, RYAN (3990))<BR>(HERAS, JEAN_CARLOS (5154))<BR>(MARTINEZ, MICHAEL (1879))<BR>(RAHMAN, SALEHA (9052))<BR>(SHULER, DENISE (7498))<BR>(ZORALI, SENIZ (4703))</td></tr><tr><td> 104-topic-05 </td><td>(CASTILLO, JOEL (7163))<BR>(COLLINS, RYAN (3990))<BR>(CUADRO, KEVIN (3191))<BR>(GAVARRETE, SINDI (8547))<BR>(HERAS, JEAN_CARLOS (5154))<BR>(JOHNSON, ANTONIA (8239))<BR>(MARTINEZ, MICHAEL (1879))<BR>(RAHMAN, SALEHA (9052))<BR>(RIVERA, PATRICIA (1195))<BR>(ROMERO, GABRIEL (2483))<BR>(SHULER, DENISE (7498))<BR>(THEODORE, KIMBERLY (6424))</td></tr><tr><td> 104-topic-06 </td><td>(CASTILLO, JOEL (7163))<BR>(CUADRO, KEVIN (3191))<BR>(GAVARRETE, SINDI (8547))<BR>(HERAS, JEAN_CARLOS (5154))<BR>(JOHNSON, ANTONIA (8239))<BR>(MARTINEZ, MICHAEL (1879))<BR>(RAHMAN, SALEHA (9052))<BR>(RENDON, PATRICIA (3562))<BR>(RIVERA, PATRICIA (1195))<BR>(SHULER, DENISE (7498))<BR>(THEODORE, KIMBERLY (6424))<BR>(ZORALI, SENIZ (4703))</td></tr><tr><td> 104-topic-07 </td><td>(CASTILLO, JOEL (7163))<BR>(CUADRO, KEVIN (3191))<BR>(GAVARRETE, SINDI (8547))<BR>(HERAS, JEAN_CARLOS (5154))<BR>(JOHNSON, ANTONIA (8239))<BR>(MARTINEZ, MICHAEL (1879))<BR>(RAHMAN, SALEHA (9052))<BR>(RENDON, PATRICIA (3562))<BR>(RIVERA, PATRICIA (1195))<BR>(ROMERO, GABRIEL (2483))<BR>(SHULER, DENISE (7498))<BR>(THEODORE, KIMBERLY (6424))<BR>(ZORALI, SENIZ (4703))</td></tr><tr><td> 104-topic-08 </td><td>(CASTILLO, JOEL (7163))<BR>(CUADRO, KEVIN (3191))<BR>(GAVARRETE, SINDI (8547))<BR>(HERAS, JEAN_CARLOS (5154))<BR>(JOHNSON, ANTONIA (8239))<BR>(MARTINEZ, MICHAEL (1879))<BR>(RAHMAN, SALEHA (9052))<BR>(RIVERA, PATRICIA (1195))<BR>(SHULER, DENISE (7498))<BR>(THEODORE, KIMBERLY (6424))<BR>(ZORALI, SENIZ (4703))</td></tr><tr><td> 104-topic-09 </td><td>(CASTILLO, JOEL (7163))<BR>(CUADRO, KEVIN (3191))<BR>(HERAS, JEAN_CARLOS (5154))<BR>(JOHNSON, ANTONIA (8239))<BR>(RAHMAN, SALEHA (9052))<BR>(RIVERA, PATRICIA (1195))<BR>(SHULER, DENISE (7498))<BR>(THEODORE, KIMBERLY (6424))<BR>(ZORALI, SENIZ (4703))</td></tr><tr><td> 104-topic-10 </td><td>(CASTILLO, JOEL (7163))<BR>(CUADRO, KEVIN (3191))<BR>(HERAS, JEAN_CARLOS (5154))<BR>(JOHNSON, ANTONIA (8239))<BR>(MARTINEZ, MICHAEL (1879))<BR>(RAHMAN, SALEHA (9052))<BR>(RENDON, PATRICIA (3562))<BR>(RIVERA, PATRICIA (1195))<BR>(ROMERO, GABRIEL (2483))<BR>(SHULER, DENISE (7498))<BR>(THEODORE, KIMBERLY (6424))<BR>(ZORALI, SENIZ (4703))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
