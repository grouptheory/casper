#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 141 - PRE-CALCULUS (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>141</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>04</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>GARRETT_K</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>5475</td><td>ALVARADO, KEVIN</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-6<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>0933</td><td>BARTLETT, BRITTNEY</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>3922</td><td>CHIECO, JAMES</td><td>141-topic-1<BR>141-topic-2<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>4439</td><td>DAVIES, JESSICA</td><td>141-topic-10<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>8254</td><td>DAY, KELLI</td><td>141-topic-10<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>0237</td><td>DELACRUZ, RAFAEL</td><td>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>7739</td><td>EATON-WHITE, LEETTE</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>5979</td><td>GRAVES, KIM</td><td>Absent on the assessment test.</td></tr><tr><td>2056</td><td>HACKER, KESHIA</td><td>141-topic-5<BR>141-topic-6<BR>141-topic-9</td></tr><tr><td>9383</td><td>HICHEZ, EDGAR</td><td>141-topic-10<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>0584</td><td>HUSSAIN, ALI</td><td>141-topic-10<BR>141-topic-5<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>7409</td><td>JONES, RONALD</td><td>141-topic-2<BR>141-topic-4Absent on the assessment test.</td></tr><tr><td>9043</td><td>KOSZYK, DARIA</td><td>141-topic-10<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>3102</td><td>LEE, YUNA</td><td>Absent on the assessment test.</td></tr><tr><td>9284</td><td>LONG, QUINTIN</td><td>141-topic-5<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>0326</td><td>PEREZ, SEBASTIAN</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-4<BR>141-topic-5<BR>141-topic-7</td></tr><tr><td>5981</td><td>PERNICE, ADAM</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>2825</td><td>PERSAUD, FELICIA</td><td>141-topic-8<BR>141-topic-9</td></tr><tr><td>6307</td><td>RAYSOR, KRYSTAL</td><td>Absent on the assessment test.</td></tr><tr><td>2333</td><td>ROMAN, ROSALYN</td><td>141-topic-10<BR>141-topic-2<BR>141-topic-3<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>3333</td><td>ROMERO, PAUL</td><td>Absent on the assessment test.</td></tr><tr><td>5224</td><td>SALAZAR, JOSELYN</td><td>141-topic-10<BR>141-topic-4<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>0757</td><td>SANCHEZ, ROSALINA</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-4<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>8141</td><td>SOOKNANAN, JAY</td><td>141-topic-10<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>4040</td><td>VILLALBA, PABLO</td><td>141-topic-1<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8</td></tr><tr><td>9561</td><td>WILLIAMS, JASON</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 141-topic-1 </td><td>(ALVARADO, KEVIN (5475))<BR>(BARTLETT, BRITTNEY (0933))<BR>(CHIECO, JAMES (3922))<BR>(EATON-WHITE, LEETTE (7739))<BR>(PEREZ, SEBASTIAN (0326))<BR>(PERNICE, ADAM (5981))<BR>(SANCHEZ, ROSALINA (0757))<BR>(VILLALBA, PABLO (4040))Absent on the assessment test.</td></tr><tr><td> 141-topic-10 </td><td>(ALVARADO, KEVIN (5475))<BR>(BARTLETT, BRITTNEY (0933))<BR>(DAVIES, JESSICA (4439))<BR>(DAY, KELLI (8254))<BR>(EATON-WHITE, LEETTE (7739))<BR>(HICHEZ, EDGAR (9383))<BR>(HUSSAIN, ALI (0584))<BR>(KOSZYK, DARIA (9043))<BR>(PEREZ, SEBASTIAN (0326))<BR>(PERNICE, ADAM (5981))<BR>(ROMAN, ROSALYN (2333))<BR>(SALAZAR, JOSELYN (5224))<BR>(SANCHEZ, ROSALINA (0757))<BR>(SOOKNANAN, JAY (8141))Absent on the assessment test.</td></tr><tr><td> 141-topic-2 </td><td>(ALVARADO, KEVIN (5475))<BR>(CHIECO, JAMES (3922))<BR>(EATON-WHITE, LEETTE (7739))<BR>(JONES, RONALD (7409))<BR>(ROMAN, ROSALYN (2333))Absent on the assessment test.</td></tr><tr><td> 141-topic-3 </td><td>(EATON-WHITE, LEETTE (7739))<BR>(ROMAN, ROSALYN (2333))Absent on the assessment test.</td></tr><tr><td> 141-topic-4 </td><td>(EATON-WHITE, LEETTE (7739))<BR>(JONES, RONALD (7409))<BR>(PEREZ, SEBASTIAN (0326))<BR>(PERNICE, ADAM (5981))<BR>(SALAZAR, JOSELYN (5224))<BR>(SANCHEZ, ROSALINA (0757))<BR>(VILLALBA, PABLO (4040))Absent on the assessment test.</td></tr><tr><td> 141-topic-5 </td><td>(BARTLETT, BRITTNEY (0933))<BR>(DAVIES, JESSICA (4439))<BR>(EATON-WHITE, LEETTE (7739))<BR>(HACKER, KESHIA (2056))<BR>(HUSSAIN, ALI (0584))<BR>(LONG, QUINTIN (9284))<BR>(PEREZ, SEBASTIAN (0326))<BR>(PERNICE, ADAM (5981))<BR>(ROMAN, ROSALYN (2333))<BR>(VILLALBA, PABLO (4040))Absent on the assessment test.</td></tr><tr><td> 141-topic-6 </td><td>(ALVARADO, KEVIN (5475))<BR>(BARTLETT, BRITTNEY (0933))<BR>(DAVIES, JESSICA (4439))<BR>(DAY, KELLI (8254))<BR>(DELACRUZ, RAFAEL (0237))<BR>(EATON-WHITE, LEETTE (7739))<BR>(HACKER, KESHIA (2056))<BR>(HICHEZ, EDGAR (9383))<BR>(PERNICE, ADAM (5981))<BR>(ROMAN, ROSALYN (2333))<BR>(SALAZAR, JOSELYN (5224))<BR>(VILLALBA, PABLO (4040))Absent on the assessment test.</td></tr><tr><td> 141-topic-7 </td><td>(BARTLETT, BRITTNEY (0933))<BR>(CHIECO, JAMES (3922))<BR>(DAVIES, JESSICA (4439))<BR>(DAY, KELLI (8254))<BR>(DELACRUZ, RAFAEL (0237))<BR>(EATON-WHITE, LEETTE (7739))<BR>(HICHEZ, EDGAR (9383))<BR>(KOSZYK, DARIA (9043))<BR>(LONG, QUINTIN (9284))<BR>(PEREZ, SEBASTIAN (0326))<BR>(PERNICE, ADAM (5981))<BR>(ROMAN, ROSALYN (2333))<BR>(SALAZAR, JOSELYN (5224))<BR>(VILLALBA, PABLO (4040))Absent on the assessment test.</td></tr><tr><td> 141-topic-8 </td><td>(ALVARADO, KEVIN (5475))<BR>(BARTLETT, BRITTNEY (0933))<BR>(CHIECO, JAMES (3922))<BR>(DAVIES, JESSICA (4439))<BR>(DAY, KELLI (8254))<BR>(DELACRUZ, RAFAEL (0237))<BR>(EATON-WHITE, LEETTE (7739))<BR>(HICHEZ, EDGAR (9383))<BR>(HUSSAIN, ALI (0584))<BR>(KOSZYK, DARIA (9043))<BR>(LONG, QUINTIN (9284))<BR>(PERNICE, ADAM (5981))<BR>(PERSAUD, FELICIA (2825))<BR>(ROMAN, ROSALYN (2333))<BR>(SALAZAR, JOSELYN (5224))<BR>(SANCHEZ, ROSALINA (0757))<BR>(SOOKNANAN, JAY (8141))<BR>(VILLALBA, PABLO (4040))Absent on the assessment test.</td></tr><tr><td> 141-topic-9 </td><td>(ALVARADO, KEVIN (5475))<BR>(BARTLETT, BRITTNEY (0933))<BR>(CHIECO, JAMES (3922))<BR>(DAVIES, JESSICA (4439))<BR>(DAY, KELLI (8254))<BR>(DELACRUZ, RAFAEL (0237))<BR>(EATON-WHITE, LEETTE (7739))<BR>(HACKER, KESHIA (2056))<BR>(HICHEZ, EDGAR (9383))<BR>(HUSSAIN, ALI (0584))<BR>(KOSZYK, DARIA (9043))<BR>(LONG, QUINTIN (9284))<BR>(PERNICE, ADAM (5981))<BR>(PERSAUD, FELICIA (2825))<BR>(ROMAN, ROSALYN (2333))<BR>(SALAZAR, JOSELYN (5224))<BR>(SANCHEZ, ROSALINA (0757))<BR>(SOOKNANAN, JAY (8141))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>