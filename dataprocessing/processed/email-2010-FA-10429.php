#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>29</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MCHUGH_F</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0840</td><td>ALICEA, GABRIEL</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>0212</td><td>BAUER, STEVEN</td><td>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>2259</td><td>BENAVIDES, LUIS</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3837</td><td>CORRIELUS, MARITSA</td><td>104-topic-05<BR>104-topic-06<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5753</td><td>DAVIS, JAIME</td><td>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5404</td><td>DIMURO, THOMAS</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5965</td><td>DONNARUMMA, KATELYN</td><td>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08</td></tr><tr><td>8143</td><td>GOLUB, BRIAN</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5742</td><td>HENDRICKSON, AGATHA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>9790</td><td>HERNANDEZ, MARC</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08</td></tr><tr><td>1473</td><td>LEMPICKA, PAULINA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2576</td><td>MCFERNAN, MADELINE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9703</td><td>MORELL, HUASCAR</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>0511</td><td>MURPHY, CHRISTOPHER</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9430</td><td>MURPHY, SHAUNA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5431</td><td>REYES, JANELLE</td><td>Passed everything.</td></tr><tr><td>8958</td><td>SPINELLI, DANIELLE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>0105</td><td>TORRES, KATHERINE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5245</td><td>VELJOVIC, EMINA</td><td>Passed everything.</td></tr><tr><td>5659</td><td>VENTURA, INGRID</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>0476</td><td>VILLAVICENCIO, AVIANNY</td><td>Passed everything.</td></tr><tr><td>1768</td><td>WILLIAMS, KIARA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>9987</td><td>YOON, TAE_KYUNG</td><td>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(ALICEA, GABRIEL (0840))<BR>(BENAVIDES, LUIS (2259))<BR>(DIMURO, THOMAS (5404))<BR>(GOLUB, BRIAN (8143))<BR>(HENDRICKSON, AGATHA (5742))<BR>(HERNANDEZ, MARC (9790))<BR>(LEMPICKA, PAULINA (1473))<BR>(MCFERNAN, MADELINE (2576))<BR>(MORELL, HUASCAR (9703))<BR>(MURPHY, CHRISTOPHER (0511))<BR>(MURPHY, SHAUNA (9430))<BR>(SPINELLI, DANIELLE (8958))<BR>(TORRES, KATHERINE (0105))<BR>(VENTURA, INGRID (5659))<BR>(WILLIAMS, KIARA (1768))</td></tr><tr><td> 104-topic-02 </td><td>(DONNARUMMA, KATELYN (5965))<BR>(GOLUB, BRIAN (8143))<BR>(HENDRICKSON, AGATHA (5742))<BR>(LEMPICKA, PAULINA (1473))<BR>(MCFERNAN, MADELINE (2576))<BR>(MORELL, HUASCAR (9703))<BR>(MURPHY, SHAUNA (9430))<BR>(SPINELLI, DANIELLE (8958))<BR>(TORRES, KATHERINE (0105))<BR>(WILLIAMS, KIARA (1768))<BR>(YOON, TAE_KYUNG (9987))</td></tr><tr><td> 104-topic-03 </td><td>(BAUER, STEVEN (0212))<BR>(DIMURO, THOMAS (5404))<BR>(GOLUB, BRIAN (8143))<BR>(LEMPICKA, PAULINA (1473))<BR>(MORELL, HUASCAR (9703))<BR>(MURPHY, CHRISTOPHER (0511))<BR>(SPINELLI, DANIELLE (8958))<BR>(TORRES, KATHERINE (0105))<BR>(VENTURA, INGRID (5659))<BR>(WILLIAMS, KIARA (1768))</td></tr><tr><td> 104-topic-04 </td><td>(ALICEA, GABRIEL (0840))<BR>(BAUER, STEVEN (0212))<BR>(BENAVIDES, LUIS (2259))<BR>(DIMURO, THOMAS (5404))<BR>(HENDRICKSON, AGATHA (5742))<BR>(HERNANDEZ, MARC (9790))<BR>(LEMPICKA, PAULINA (1473))<BR>(MCFERNAN, MADELINE (2576))<BR>(MORELL, HUASCAR (9703))<BR>(MURPHY, CHRISTOPHER (0511))<BR>(SPINELLI, DANIELLE (8958))<BR>(TORRES, KATHERINE (0105))<BR>(VENTURA, INGRID (5659))<BR>(WILLIAMS, KIARA (1768))<BR>(YOON, TAE_KYUNG (9987))</td></tr><tr><td> 104-topic-05 </td><td>(ALICEA, GABRIEL (0840))<BR>(BAUER, STEVEN (0212))<BR>(BENAVIDES, LUIS (2259))<BR>(CORRIELUS, MARITSA (3837))<BR>(DIMURO, THOMAS (5404))<BR>(DONNARUMMA, KATELYN (5965))<BR>(GOLUB, BRIAN (8143))<BR>(HERNANDEZ, MARC (9790))<BR>(LEMPICKA, PAULINA (1473))<BR>(MCFERNAN, MADELINE (2576))<BR>(MORELL, HUASCAR (9703))<BR>(MURPHY, CHRISTOPHER (0511))<BR>(MURPHY, SHAUNA (9430))<BR>(SPINELLI, DANIELLE (8958))<BR>(TORRES, KATHERINE (0105))<BR>(VENTURA, INGRID (5659))<BR>(WILLIAMS, KIARA (1768))<BR>(YOON, TAE_KYUNG (9987))</td></tr><tr><td> 104-topic-06 </td><td>(ALICEA, GABRIEL (0840))<BR>(BAUER, STEVEN (0212))<BR>(CORRIELUS, MARITSA (3837))<BR>(DAVIS, JAIME (5753))<BR>(DIMURO, THOMAS (5404))<BR>(DONNARUMMA, KATELYN (5965))<BR>(GOLUB, BRIAN (8143))<BR>(HENDRICKSON, AGATHA (5742))<BR>(HERNANDEZ, MARC (9790))<BR>(LEMPICKA, PAULINA (1473))<BR>(MCFERNAN, MADELINE (2576))<BR>(MORELL, HUASCAR (9703))<BR>(MURPHY, CHRISTOPHER (0511))<BR>(MURPHY, SHAUNA (9430))<BR>(SPINELLI, DANIELLE (8958))<BR>(TORRES, KATHERINE (0105))<BR>(VENTURA, INGRID (5659))<BR>(WILLIAMS, KIARA (1768))<BR>(YOON, TAE_KYUNG (9987))</td></tr><tr><td> 104-topic-07 </td><td>(ALICEA, GABRIEL (0840))<BR>(BAUER, STEVEN (0212))<BR>(BENAVIDES, LUIS (2259))<BR>(DAVIS, JAIME (5753))<BR>(DIMURO, THOMAS (5404))<BR>(DONNARUMMA, KATELYN (5965))<BR>(GOLUB, BRIAN (8143))<BR>(HENDRICKSON, AGATHA (5742))<BR>(HERNANDEZ, MARC (9790))<BR>(LEMPICKA, PAULINA (1473))<BR>(MCFERNAN, MADELINE (2576))<BR>(MORELL, HUASCAR (9703))<BR>(MURPHY, CHRISTOPHER (0511))<BR>(MURPHY, SHAUNA (9430))<BR>(SPINELLI, DANIELLE (8958))<BR>(TORRES, KATHERINE (0105))<BR>(VENTURA, INGRID (5659))<BR>(WILLIAMS, KIARA (1768))<BR>(YOON, TAE_KYUNG (9987))</td></tr><tr><td> 104-topic-08 </td><td>(ALICEA, GABRIEL (0840))<BR>(DAVIS, JAIME (5753))<BR>(DIMURO, THOMAS (5404))<BR>(DONNARUMMA, KATELYN (5965))<BR>(HERNANDEZ, MARC (9790))<BR>(MORELL, HUASCAR (9703))<BR>(MURPHY, CHRISTOPHER (0511))<BR>(TORRES, KATHERINE (0105))<BR>(VENTURA, INGRID (5659))</td></tr><tr><td> 104-topic-09 </td><td>(ALICEA, GABRIEL (0840))<BR>(BENAVIDES, LUIS (2259))<BR>(CORRIELUS, MARITSA (3837))<BR>(DAVIS, JAIME (5753))<BR>(DIMURO, THOMAS (5404))<BR>(LEMPICKA, PAULINA (1473))<BR>(MCFERNAN, MADELINE (2576))<BR>(MORELL, HUASCAR (9703))<BR>(MURPHY, CHRISTOPHER (0511))<BR>(SPINELLI, DANIELLE (8958))<BR>(TORRES, KATHERINE (0105))</td></tr><tr><td> 104-topic-10 </td><td>(ALICEA, GABRIEL (0840))<BR>(BAUER, STEVEN (0212))<BR>(BENAVIDES, LUIS (2259))<BR>(CORRIELUS, MARITSA (3837))<BR>(DAVIS, JAIME (5753))<BR>(DIMURO, THOMAS (5404))<BR>(GOLUB, BRIAN (8143))<BR>(HENDRICKSON, AGATHA (5742))<BR>(LEMPICKA, PAULINA (1473))<BR>(MCFERNAN, MADELINE (2576))<BR>(MORELL, HUASCAR (9703))<BR>(MURPHY, CHRISTOPHER (0511))<BR>(MURPHY, SHAUNA (9430))<BR>(SPINELLI, DANIELLE (8958))<BR>(TORRES, KATHERINE (0105))<BR>(VENTURA, INGRID (5659))<BR>(WILLIAMS, KIARA (1768))<BR>(YOON, TAE_KYUNG (9987))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
