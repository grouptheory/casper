#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>21</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>PERRY-STOVAL_R</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>4777</td><td>ASANOVIC, SAMIRA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6143</td><td>BAILO, GENNARO</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>6785</td><td>BARONGI, ARIANA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>0526</td><td>BENIQUEZ, CECELY</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>6124</td><td>BENNETT, CHERISSE</td><td>Absent on the assessment test.</td></tr><tr><td>4056</td><td>BRACEY, MAJENTA</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>1729</td><td>BRUNI, VICTORIA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>7822</td><td>CHARLES, MICHAEL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>3825</td><td>DAVE, KHUSBU</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>7931</td><td>GAVIN, CHRISTOPHER</td><td>Absent on the assessment test.</td></tr><tr><td>8915</td><td>GEORGE, RASHIDA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6341</td><td>GUILAMO, ASHLEY</td><td>108-topic-01<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>6440</td><td>GUZMAN, DARIAN</td><td>Absent on the assessment test.</td></tr><tr><td>5571</td><td>KADER, KAREN</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>8113</td><td>KOLENOVIC, ANEC</td><td>Absent on the assessment test.</td></tr><tr><td>1857</td><td>KOVACH, ANDREW</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08</td></tr><tr><td>6515</td><td>LITHGOW, LUIS</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>8285</td><td>LONERGAN, SHANE</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-06</td></tr><tr><td>6820</td><td>LOUIS, LLOYD</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>3651</td><td>LU, JIAN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>2575</td><td>MELORE, STEVEN</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-09</td></tr><tr><td>7867</td><td>MOHAMMED, KHALIYAH</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2607</td><td>MURPHY, PRISCILLA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>9839</td><td>PARKER, MICHAEL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>5929</td><td>PIERRE, STACEY</td><td>Absent on the assessment test.</td></tr><tr><td>8080</td><td>POWELL, AMANDA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>4212</td><td>SMILEY, KRYSTELLE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>2071</td><td>SOLER, MARLENY</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>3109</td><td>TORRES, JENSSE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>9283</td><td>TSANG, MICHELLE</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>3385</td><td>VICTORIN, TAKIRA</td><td>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>4176</td><td>VIRAFUENTES, ASUNCION</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>5291</td><td>ZELAYA, STEPHANIE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(ASANOVIC, SAMIRA (4777))<BR>(BARONGI, ARIANA (6785))<BR>(BRUNI, VICTORIA (1729))<BR>(CHARLES, MICHAEL (7822))<BR>(DAVE, KHUSBU (3825))<BR>(GEORGE, RASHIDA (8915))<BR>(GUILAMO, ASHLEY (6341))<BR>(KADER, KAREN (5571))<BR>(LITHGOW, LUIS (6515))<BR>(LU, JIAN (3651))<BR>(MELORE, STEVEN (2575))<BR>(MOHAMMED, KHALIYAH (7867))<BR>(MURPHY, PRISCILLA (2607))<BR>(PARKER, MICHAEL (9839))<BR>(POWELL, AMANDA (8080))<BR>(SMILEY, KRYSTELLE (4212))<BR>(TORRES, JENSSE (3109))<BR>(TSANG, MICHELLE (9283))<BR>(VIRAFUENTES, ASUNCION (4176))<BR>(ZELAYA, STEPHANIE (5291))</td></tr><tr><td> 108-topic-02 </td><td>(BAILO, GENNARO (6143))<BR>(BENIQUEZ, CECELY (0526))<BR>(DAVE, KHUSBU (3825))<BR>(GEORGE, RASHIDA (8915))<BR>(KADER, KAREN (5571))<BR>(MELORE, STEVEN (2575))<BR>(MURPHY, PRISCILLA (2607))<BR>(SMILEY, KRYSTELLE (4212))<BR>(VICTORIN, TAKIRA (3385))</td></tr><tr><td> 108-topic-03 </td><td>(ASANOVIC, SAMIRA (4777))<BR>(BAILO, GENNARO (6143))<BR>(BARONGI, ARIANA (6785))<BR>(BENIQUEZ, CECELY (0526))<BR>(BRACEY, MAJENTA (4056))<BR>(BRUNI, VICTORIA (1729))<BR>(CHARLES, MICHAEL (7822))<BR>(DAVE, KHUSBU (3825))<BR>(GEORGE, RASHIDA (8915))<BR>(KADER, KAREN (5571))<BR>(KOVACH, ANDREW (1857))<BR>(LITHGOW, LUIS (6515))<BR>(LONERGAN, SHANE (8285))<BR>(LOUIS, LLOYD (6820))<BR>(LU, JIAN (3651))<BR>(MELORE, STEVEN (2575))<BR>(MOHAMMED, KHALIYAH (7867))<BR>(MURPHY, PRISCILLA (2607))<BR>(PARKER, MICHAEL (9839))<BR>(POWELL, AMANDA (8080))<BR>(SMILEY, KRYSTELLE (4212))<BR>(SOLER, MARLENY (2071))<BR>(TORRES, JENSSE (3109))<BR>(VIRAFUENTES, ASUNCION (4176))<BR>(ZELAYA, STEPHANIE (5291))</td></tr><tr><td> 108-topic-04 </td><td>(ASANOVIC, SAMIRA (4777))<BR>(BARONGI, ARIANA (6785))<BR>(BENIQUEZ, CECELY (0526))<BR>(BRACEY, MAJENTA (4056))<BR>(BRUNI, VICTORIA (1729))<BR>(CHARLES, MICHAEL (7822))<BR>(DAVE, KHUSBU (3825))<BR>(GEORGE, RASHIDA (8915))<BR>(KADER, KAREN (5571))<BR>(KOVACH, ANDREW (1857))<BR>(LITHGOW, LUIS (6515))<BR>(LONERGAN, SHANE (8285))<BR>(LOUIS, LLOYD (6820))<BR>(LU, JIAN (3651))<BR>(MELORE, STEVEN (2575))<BR>(MOHAMMED, KHALIYAH (7867))<BR>(MURPHY, PRISCILLA (2607))<BR>(PARKER, MICHAEL (9839))<BR>(SMILEY, KRYSTELLE (4212))<BR>(SOLER, MARLENY (2071))<BR>(TORRES, JENSSE (3109))<BR>(TSANG, MICHELLE (9283))<BR>(VICTORIN, TAKIRA (3385))<BR>(ZELAYA, STEPHANIE (5291))</td></tr><tr><td> 108-topic-05 </td><td>(ASANOVIC, SAMIRA (4777))<BR>(BAILO, GENNARO (6143))<BR>(BENIQUEZ, CECELY (0526))<BR>(CHARLES, MICHAEL (7822))<BR>(DAVE, KHUSBU (3825))<BR>(GEORGE, RASHIDA (8915))<BR>(KADER, KAREN (5571))<BR>(KOVACH, ANDREW (1857))<BR>(LITHGOW, LUIS (6515))<BR>(LOUIS, LLOYD (6820))<BR>(MOHAMMED, KHALIYAH (7867))<BR>(MURPHY, PRISCILLA (2607))<BR>(PARKER, MICHAEL (9839))<BR>(SMILEY, KRYSTELLE (4212))<BR>(SOLER, MARLENY (2071))<BR>(TORRES, JENSSE (3109))<BR>(TSANG, MICHELLE (9283))<BR>(VICTORIN, TAKIRA (3385))<BR>(VIRAFUENTES, ASUNCION (4176))</td></tr><tr><td> 108-topic-06 </td><td>(ASANOVIC, SAMIRA (4777))<BR>(BAILO, GENNARO (6143))<BR>(BARONGI, ARIANA (6785))<BR>(BENIQUEZ, CECELY (0526))<BR>(BRACEY, MAJENTA (4056))<BR>(CHARLES, MICHAEL (7822))<BR>(DAVE, KHUSBU (3825))<BR>(GEORGE, RASHIDA (8915))<BR>(KADER, KAREN (5571))<BR>(LONERGAN, SHANE (8285))<BR>(LU, JIAN (3651))<BR>(MOHAMMED, KHALIYAH (7867))<BR>(MURPHY, PRISCILLA (2607))<BR>(POWELL, AMANDA (8080))<BR>(SMILEY, KRYSTELLE (4212))<BR>(TORRES, JENSSE (3109))<BR>(VICTORIN, TAKIRA (3385))<BR>(ZELAYA, STEPHANIE (5291))</td></tr><tr><td> 108-topic-07 </td><td>(ASANOVIC, SAMIRA (4777))<BR>(BENIQUEZ, CECELY (0526))<BR>(GEORGE, RASHIDA (8915))<BR>(GUILAMO, ASHLEY (6341))<BR>(LITHGOW, LUIS (6515))<BR>(LOUIS, LLOYD (6820))<BR>(PARKER, MICHAEL (9839))<BR>(POWELL, AMANDA (8080))</td></tr><tr><td> 108-topic-08 </td><td>(BENIQUEZ, CECELY (0526))<BR>(GUILAMO, ASHLEY (6341))<BR>(KOVACH, ANDREW (1857))<BR>(MURPHY, PRISCILLA (2607))<BR>(VICTORIN, TAKIRA (3385))</td></tr><tr><td> 108-topic-09 </td><td>(ASANOVIC, SAMIRA (4777))<BR>(BARONGI, ARIANA (6785))<BR>(BRACEY, MAJENTA (4056))<BR>(GEORGE, RASHIDA (8915))<BR>(MELORE, STEVEN (2575))<BR>(MOHAMMED, KHALIYAH (7867))<BR>(PARKER, MICHAEL (9839))<BR>(VIRAFUENTES, ASUNCION (4176))</td></tr><tr><td> 108-topic-10 </td><td>(ASANOVIC, SAMIRA (4777))<BR>(BAILO, GENNARO (6143))<BR>(BARONGI, ARIANA (6785))<BR>(BENIQUEZ, CECELY (0526))<BR>(BRUNI, VICTORIA (1729))<BR>(GEORGE, RASHIDA (8915))<BR>(GUILAMO, ASHLEY (6341))<BR>(KADER, KAREN (5571))<BR>(LITHGOW, LUIS (6515))<BR>(LOUIS, LLOYD (6820))<BR>(LU, JIAN (3651))<BR>(MOHAMMED, KHALIYAH (7867))<BR>(MURPHY, PRISCILLA (2607))<BR>(PARKER, MICHAEL (9839))<BR>(POWELL, AMANDA (8080))<BR>(SMILEY, KRYSTELLE (4212))<BR>(SOLER, MARLENY (2071))<BR>(VICTORIN, TAKIRA (3385))<BR>(VIRAFUENTES, ASUNCION (4176))<BR>(ZELAYA, STEPHANIE (5291))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
