#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>08</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>TREMBINSKA_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9106</td><td>BIONDO, KIRSTY</td><td>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>8399</td><td>BORROME, KATHERINE</td><td>Absent on the assessment test.</td></tr><tr><td>6686</td><td>BRERETON, MICHAEL</td><td>104-topic-04<BR>104-topic-05<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5289</td><td>CASTELLANOS, RAMON</td><td>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9216</td><td>CID, JACQUELINE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2663</td><td>DURAN, SHEILYN</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6837</td><td>EARLY, RAQUELLE</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>0284</td><td>FERGUSON, ANDREW</td><td>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>0528</td><td>FURNARI, PAUL</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4421</td><td>GONZAGA, ADAM</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1930</td><td>GONZALEZ, MELISSA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>2136</td><td>HERNANDEZ, SHIRLEY</td><td>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>8925</td><td>JONES, FELICIA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3648</td><td>LINDSEY, TYRELL</td><td>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5329</td><td>LUGO, BRIANA</td><td>Absent on the assessment test.</td></tr><tr><td>5896</td><td>MAYERS, SHAKIRA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>1506</td><td>MAYES, JESSICA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>3356</td><td>MILLER, MATTHEW</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9172</td><td>MORRIS, WAYNE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3978</td><td>NARZIEV, AKMAL</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>4537</td><td>PIGOTT, JESUS</td><td>Passed everything.</td></tr><tr><td>2951</td><td>SABOVIC, DZENAN</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5751</td><td>SHAH, BHUMI</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>6779</td><td>TOKHADZE, TATU</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(CID, JACQUELINE (9216))<BR>(DURAN, SHEILYN (2663))<BR>(EARLY, RAQUELLE (6837))<BR>(FURNARI, PAUL (0528))<BR>(GONZAGA, ADAM (4421))<BR>(GONZALEZ, MELISSA (1930))<BR>(JONES, FELICIA (8925))<BR>(MAYERS, SHAKIRA (5896))<BR>(MAYES, JESSICA (1506))<BR>(MILLER, MATTHEW (3356))<BR>(MORRIS, WAYNE (9172))<BR>(NARZIEV, AKMAL (3978))<BR>(SABOVIC, DZENAN (2951))<BR>(SHAH, BHUMI (5751))<BR>(TOKHADZE, TATU (6779))</td></tr><tr><td> 104-topic-02 </td><td>(BIONDO, KIRSTY (9106))<BR>(CID, JACQUELINE (9216))<BR>(DURAN, SHEILYN (2663))<BR>(FERGUSON, ANDREW (0284))<BR>(FURNARI, PAUL (0528))<BR>(HERNANDEZ, SHIRLEY (2136))<BR>(JONES, FELICIA (8925))<BR>(LINDSEY, TYRELL (3648))<BR>(MAYES, JESSICA (1506))<BR>(MORRIS, WAYNE (9172))<BR>(NARZIEV, AKMAL (3978))<BR>(SABOVIC, DZENAN (2951))<BR>(SHAH, BHUMI (5751))</td></tr><tr><td> 104-topic-03 </td><td>(CASTELLANOS, RAMON (5289))<BR>(CID, JACQUELINE (9216))<BR>(FERGUSON, ANDREW (0284))<BR>(GONZALEZ, MELISSA (1930))<BR>(JONES, FELICIA (8925))<BR>(MAYERS, SHAKIRA (5896))<BR>(MILLER, MATTHEW (3356))<BR>(NARZIEV, AKMAL (3978))<BR>(SABOVIC, DZENAN (2951))<BR>(SHAH, BHUMI (5751))</td></tr><tr><td> 104-topic-04 </td><td>(BIONDO, KIRSTY (9106))<BR>(BRERETON, MICHAEL (6686))<BR>(CASTELLANOS, RAMON (5289))<BR>(DURAN, SHEILYN (2663))<BR>(EARLY, RAQUELLE (6837))<BR>(FERGUSON, ANDREW (0284))<BR>(FURNARI, PAUL (0528))<BR>(GONZAGA, ADAM (4421))<BR>(GONZALEZ, MELISSA (1930))<BR>(HERNANDEZ, SHIRLEY (2136))<BR>(JONES, FELICIA (8925))<BR>(LINDSEY, TYRELL (3648))<BR>(MAYES, JESSICA (1506))<BR>(MILLER, MATTHEW (3356))<BR>(MORRIS, WAYNE (9172))<BR>(NARZIEV, AKMAL (3978))<BR>(SHAH, BHUMI (5751))<BR>(TOKHADZE, TATU (6779))</td></tr><tr><td> 104-topic-05 </td><td>(BIONDO, KIRSTY (9106))<BR>(BRERETON, MICHAEL (6686))<BR>(CASTELLANOS, RAMON (5289))<BR>(CID, JACQUELINE (9216))<BR>(DURAN, SHEILYN (2663))<BR>(FERGUSON, ANDREW (0284))<BR>(FURNARI, PAUL (0528))<BR>(GONZAGA, ADAM (4421))<BR>(GONZALEZ, MELISSA (1930))<BR>(HERNANDEZ, SHIRLEY (2136))<BR>(JONES, FELICIA (8925))<BR>(LINDSEY, TYRELL (3648))<BR>(MAYERS, SHAKIRA (5896))<BR>(MAYES, JESSICA (1506))<BR>(MILLER, MATTHEW (3356))<BR>(MORRIS, WAYNE (9172))<BR>(NARZIEV, AKMAL (3978))<BR>(SABOVIC, DZENAN (2951))<BR>(SHAH, BHUMI (5751))<BR>(TOKHADZE, TATU (6779))</td></tr><tr><td> 104-topic-06 </td><td>(BIONDO, KIRSTY (9106))<BR>(CASTELLANOS, RAMON (5289))<BR>(CID, JACQUELINE (9216))<BR>(DURAN, SHEILYN (2663))<BR>(EARLY, RAQUELLE (6837))<BR>(FERGUSON, ANDREW (0284))<BR>(FURNARI, PAUL (0528))<BR>(GONZAGA, ADAM (4421))<BR>(GONZALEZ, MELISSA (1930))<BR>(HERNANDEZ, SHIRLEY (2136))<BR>(JONES, FELICIA (8925))<BR>(LINDSEY, TYRELL (3648))<BR>(MAYERS, SHAKIRA (5896))<BR>(MAYES, JESSICA (1506))<BR>(MILLER, MATTHEW (3356))<BR>(MORRIS, WAYNE (9172))<BR>(NARZIEV, AKMAL (3978))<BR>(SABOVIC, DZENAN (2951))<BR>(SHAH, BHUMI (5751))<BR>(TOKHADZE, TATU (6779))</td></tr><tr><td> 104-topic-07 </td><td>(BIONDO, KIRSTY (9106))<BR>(CASTELLANOS, RAMON (5289))<BR>(CID, JACQUELINE (9216))<BR>(DURAN, SHEILYN (2663))<BR>(EARLY, RAQUELLE (6837))<BR>(FERGUSON, ANDREW (0284))<BR>(FURNARI, PAUL (0528))<BR>(GONZAGA, ADAM (4421))<BR>(GONZALEZ, MELISSA (1930))<BR>(HERNANDEZ, SHIRLEY (2136))<BR>(JONES, FELICIA (8925))<BR>(LINDSEY, TYRELL (3648))<BR>(MAYERS, SHAKIRA (5896))<BR>(MAYES, JESSICA (1506))<BR>(MILLER, MATTHEW (3356))<BR>(MORRIS, WAYNE (9172))<BR>(NARZIEV, AKMAL (3978))<BR>(SABOVIC, DZENAN (2951))<BR>(SHAH, BHUMI (5751))<BR>(TOKHADZE, TATU (6779))</td></tr><tr><td> 104-topic-08 </td><td>(BIONDO, KIRSTY (9106))<BR>(FURNARI, PAUL (0528))<BR>(GONZAGA, ADAM (4421))<BR>(GONZALEZ, MELISSA (1930))<BR>(HERNANDEZ, SHIRLEY (2136))<BR>(JONES, FELICIA (8925))<BR>(LINDSEY, TYRELL (3648))<BR>(MAYES, JESSICA (1506))<BR>(SHAH, BHUMI (5751))<BR>(TOKHADZE, TATU (6779))</td></tr><tr><td> 104-topic-09 </td><td>(BRERETON, MICHAEL (6686))<BR>(CASTELLANOS, RAMON (5289))<BR>(CID, JACQUELINE (9216))<BR>(DURAN, SHEILYN (2663))<BR>(FURNARI, PAUL (0528))<BR>(GONZAGA, ADAM (4421))<BR>(JONES, FELICIA (8925))<BR>(LINDSEY, TYRELL (3648))<BR>(MILLER, MATTHEW (3356))<BR>(MORRIS, WAYNE (9172))<BR>(TOKHADZE, TATU (6779))</td></tr><tr><td> 104-topic-10 </td><td>(BIONDO, KIRSTY (9106))<BR>(BRERETON, MICHAEL (6686))<BR>(CASTELLANOS, RAMON (5289))<BR>(CID, JACQUELINE (9216))<BR>(DURAN, SHEILYN (2663))<BR>(EARLY, RAQUELLE (6837))<BR>(FERGUSON, ANDREW (0284))<BR>(FURNARI, PAUL (0528))<BR>(GONZAGA, ADAM (4421))<BR>(GONZALEZ, MELISSA (1930))<BR>(HERNANDEZ, SHIRLEY (2136))<BR>(JONES, FELICIA (8925))<BR>(LINDSEY, TYRELL (3648))<BR>(MAYERS, SHAKIRA (5896))<BR>(MAYES, JESSICA (1506))<BR>(MILLER, MATTHEW (3356))<BR>(MORRIS, WAYNE (9172))<BR>(NARZIEV, AKMAL (3978))<BR>(SABOVIC, DZENAN (2951))<BR>(SHAH, BHUMI (5751))<BR>(TOKHADZE, TATU (6779))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
