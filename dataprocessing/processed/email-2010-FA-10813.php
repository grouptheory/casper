#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>13</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>TOPLAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>4192</td><td>ABRAHAM, TIFFANY</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>5988</td><td>ACOSTA, EMILY</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>9081</td><td>ARCE, SAMANTHA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2402</td><td>ARROYO, CANDACE</td><td>Passed everything.</td></tr><tr><td>4223</td><td>AUCANCELA, LESLIE</td><td>Passed everything.</td></tr><tr><td>1998</td><td>BENCOSME, JEANCARLOS</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>5308</td><td>BERMUDEZ, KRYSTAL</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>7524</td><td>BITTNER, JENNIFER</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>5857</td><td>CESAR, ELIZABETH</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>2614</td><td>CHASTO, LUBA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>8770</td><td>COX, SHANESHIA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2031</td><td>CUMBERBATCH, JENNIFER</td><td>Passed everything.</td></tr><tr><td>1024</td><td>DIAZ, MARITZA</td><td>Passed everything.</td></tr><tr><td>9582</td><td>FABRE, ELVIN</td><td>Passed everything.</td></tr><tr><td>5409</td><td>GRANT, KAREN</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>2420</td><td>GUTIERREZ, VERNISE</td><td>Passed everything.</td></tr><tr><td>9841</td><td>HARO, ANDREA</td><td>Passed everything.</td></tr><tr><td>8818</td><td>JACKSON, KENYA</td><td>Absent on the assessment test.</td></tr><tr><td>4851</td><td>JEAN-LOUIS, JOHANNE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7917</td><td>JOSEPH, JESSICA</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>0890</td><td>KING, KASSIE</td><td>Passed everything.</td></tr><tr><td>5648</td><td>LARSSON, MAXX</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>8820</td><td>MARSHALL, JAMES</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>0802</td><td>MCCURRY, PATRICK</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>1765</td><td>MESA, ANTHONY</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>8360</td><td>MONTEMARANO, ROCCO</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>0785</td><td>NIKOCEVIC, MEDINA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>9738</td><td>PEREZ, JAIRO</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>5432</td><td>RINCON, JOSEFA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>0697</td><td>SUNGU, TOLGA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6508</td><td>TEJADA, GLENNYS</td><td>Absent on the assessment test.</td></tr><tr><td>7718</td><td>VALETTE, JENNIFER</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2142</td><td>VERTILUS, LESLY</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>1048</td><td>WIMBUSH, TARONA</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(ARCE, SAMANTHA (9081))<BR>(BERMUDEZ, KRYSTAL (5308))<BR>(BITTNER, JENNIFER (7524))<BR>(CESAR, ELIZABETH (5857))<BR>(CHASTO, LUBA (2614))<BR>(COX, SHANESHIA (8770))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(LARSSON, MAXX (5648))<BR>(MCCURRY, PATRICK (0802))<BR>(MESA, ANTHONY (1765))<BR>(MONTEMARANO, ROCCO (8360))<BR>(NIKOCEVIC, MEDINA (0785))<BR>(RINCON, JOSEFA (5432))<BR>(SUNGU, TOLGA (0697))<BR>(VALETTE, JENNIFER (7718))<BR>(VERTILUS, LESLY (2142))Absent on the assessment test.</td></tr><tr><td> 108-topic-02 </td><td>(ARCE, SAMANTHA (9081))<BR>(BERMUDEZ, KRYSTAL (5308))<BR>(BITTNER, JENNIFER (7524))<BR>(CESAR, ELIZABETH (5857))<BR>(CHASTO, LUBA (2614))<BR>(COX, SHANESHIA (8770))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(JOSEPH, JESSICA (7917))<BR>(MARSHALL, JAMES (8820))<BR>(MCCURRY, PATRICK (0802))<BR>(MESA, ANTHONY (1765))<BR>(NIKOCEVIC, MEDINA (0785))<BR>(RINCON, JOSEFA (5432))<BR>(VALETTE, JENNIFER (7718))Absent on the assessment test.</td></tr><tr><td> 108-topic-03 </td><td>(ABRAHAM, TIFFANY (4192))<BR>(ARCE, SAMANTHA (9081))<BR>(BENCOSME, JEANCARLOS (1998))<BR>(BERMUDEZ, KRYSTAL (5308))<BR>(BITTNER, JENNIFER (7524))<BR>(CESAR, ELIZABETH (5857))<BR>(CHASTO, LUBA (2614))<BR>(COX, SHANESHIA (8770))<BR>(GRANT, KAREN (5409))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(JOSEPH, JESSICA (7917))<BR>(LARSSON, MAXX (5648))<BR>(MARSHALL, JAMES (8820))<BR>(MCCURRY, PATRICK (0802))<BR>(MESA, ANTHONY (1765))<BR>(MONTEMARANO, ROCCO (8360))<BR>(NIKOCEVIC, MEDINA (0785))<BR>(PEREZ, JAIRO (9738))<BR>(RINCON, JOSEFA (5432))<BR>(SUNGU, TOLGA (0697))<BR>(VALETTE, JENNIFER (7718))<BR>(VERTILUS, LESLY (2142))Absent on the assessment test.</td></tr><tr><td> 108-topic-04 </td><td>(ABRAHAM, TIFFANY (4192))<BR>(ACOSTA, EMILY (5988))<BR>(ARCE, SAMANTHA (9081))<BR>(BENCOSME, JEANCARLOS (1998))<BR>(BERMUDEZ, KRYSTAL (5308))<BR>(BITTNER, JENNIFER (7524))<BR>(CESAR, ELIZABETH (5857))<BR>(CHASTO, LUBA (2614))<BR>(COX, SHANESHIA (8770))<BR>(GRANT, KAREN (5409))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(JOSEPH, JESSICA (7917))<BR>(LARSSON, MAXX (5648))<BR>(MARSHALL, JAMES (8820))<BR>(MCCURRY, PATRICK (0802))<BR>(MESA, ANTHONY (1765))<BR>(NIKOCEVIC, MEDINA (0785))<BR>(PEREZ, JAIRO (9738))<BR>(RINCON, JOSEFA (5432))<BR>(SUNGU, TOLGA (0697))<BR>(VALETTE, JENNIFER (7718))<BR>(VERTILUS, LESLY (2142))Absent on the assessment test.</td></tr><tr><td> 108-topic-05 </td><td>(ACOSTA, EMILY (5988))<BR>(BENCOSME, JEANCARLOS (1998))<BR>(BERMUDEZ, KRYSTAL (5308))<BR>(BITTNER, JENNIFER (7524))<BR>(CHASTO, LUBA (2614))<BR>(GRANT, KAREN (5409))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(JOSEPH, JESSICA (7917))<BR>(LARSSON, MAXX (5648))<BR>(MARSHALL, JAMES (8820))<BR>(MESA, ANTHONY (1765))<BR>(MONTEMARANO, ROCCO (8360))<BR>(NIKOCEVIC, MEDINA (0785))<BR>(RINCON, JOSEFA (5432))<BR>(SUNGU, TOLGA (0697))<BR>(VERTILUS, LESLY (2142))Absent on the assessment test.</td></tr><tr><td> 108-topic-06 </td><td>(ABRAHAM, TIFFANY (4192))<BR>(ARCE, SAMANTHA (9081))<BR>(BERMUDEZ, KRYSTAL (5308))<BR>(BITTNER, JENNIFER (7524))<BR>(CESAR, ELIZABETH (5857))<BR>(CHASTO, LUBA (2614))<BR>(COX, SHANESHIA (8770))<BR>(JOSEPH, JESSICA (7917))<BR>(LARSSON, MAXX (5648))<BR>(MARSHALL, JAMES (8820))<BR>(MESA, ANTHONY (1765))<BR>(MONTEMARANO, ROCCO (8360))<BR>(NIKOCEVIC, MEDINA (0785))<BR>(RINCON, JOSEFA (5432))<BR>(SUNGU, TOLGA (0697))<BR>(VALETTE, JENNIFER (7718))Absent on the assessment test.</td></tr><tr><td> 108-topic-07 </td><td>(CESAR, ELIZABETH (5857))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(JOSEPH, JESSICA (7917))<BR>(LARSSON, MAXX (5648))<BR>(MARSHALL, JAMES (8820))<BR>(MESA, ANTHONY (1765))<BR>(MONTEMARANO, ROCCO (8360))Absent on the assessment test.</td></tr><tr><td> 108-topic-08 </td><td>(CESAR, ELIZABETH (5857))<BR>(LARSSON, MAXX (5648))<BR>(MONTEMARANO, ROCCO (8360))<BR>(RINCON, JOSEFA (5432))<BR>(VALETTE, JENNIFER (7718))Absent on the assessment test.</td></tr><tr><td> 108-topic-09 </td><td>(ABRAHAM, TIFFANY (4192))<BR>(ARCE, SAMANTHA (9081))<BR>(COX, SHANESHIA (8770))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(JOSEPH, JESSICA (7917))<BR>(LARSSON, MAXX (5648))<BR>(MARSHALL, JAMES (8820))<BR>(MESA, ANTHONY (1765))<BR>(MONTEMARANO, ROCCO (8360))<BR>(SUNGU, TOLGA (0697))<BR>(VALETTE, JENNIFER (7718))Absent on the assessment test.</td></tr><tr><td> 108-topic-10 </td><td>(ACOSTA, EMILY (5988))<BR>(ARCE, SAMANTHA (9081))<BR>(BERMUDEZ, KRYSTAL (5308))<BR>(BITTNER, JENNIFER (7524))<BR>(CESAR, ELIZABETH (5857))<BR>(CHASTO, LUBA (2614))<BR>(COX, SHANESHIA (8770))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(JOSEPH, JESSICA (7917))<BR>(LARSSON, MAXX (5648))<BR>(MARSHALL, JAMES (8820))<BR>(MCCURRY, PATRICK (0802))<BR>(MESA, ANTHONY (1765))<BR>(MONTEMARANO, ROCCO (8360))<BR>(NIKOCEVIC, MEDINA (0785))<BR>(PEREZ, JAIRO (9738))<BR>(RINCON, JOSEFA (5432))<BR>(SUNGU, TOLGA (0697))<BR>(VALETTE, JENNIFER (7718))<BR>(VERTILUS, LESLY (2142))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
