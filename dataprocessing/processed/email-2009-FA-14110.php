#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 141 - PRE-CALCULUS (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>141</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>10</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MANTHARAM_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>2040</td><td>ARIAS, LESLIE</td><td>141-topic-10<BR>141-topic-2<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>0194</td><td>AZULPHART, DEBORAH</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-4<BR>141-topic-6<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>3960</td><td>CHAMBERS, MATTHEW</td><td>141-topic-10<BR>141-topic-2<BR>141-topic-3<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>9368</td><td>CRUZ, FRANCIS</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-3<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>0096</td><td>DAM, GLORIA</td><td>141-topic-10<BR>141-topic-6</td></tr><tr><td>1386</td><td>DUKE, TAMIKA</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>5084</td><td>ESPINAL, GERSON</td><td>Absent on the assessment test.</td></tr><tr><td>6257</td><td>FARRAJ, ZAHIA</td><td>141-topic-1<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>7536</td><td>FELIX, EBONY</td><td>141-topic-10<BR>141-topic-4<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>8195</td><td>FRANCO, EWELINA</td><td>141-topic-10<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>4911</td><td>GARCIA, MIGUEL</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-6<BR>141-topic-7<BR>141-topic-9</td></tr><tr><td>4347</td><td>IP, SHIRLEY</td><td>Absent on the assessment test.</td></tr><tr><td>1205</td><td>JUNG, HEE_TAE</td><td>141-topic-1<BR>141-topic-5<BR>141-topic-6<BR>141-topic-9</td></tr><tr><td>8958</td><td>LEE, HYUN_WOO</td><td>141-topic-10<BR>141-topic-9</td></tr><tr><td>7883</td><td>LIN, SHUYI</td><td>141-topic-8</td></tr><tr><td>1040</td><td>MARTINEZ, ALEXIS</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-3<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>4212</td><td>MELLA, DIANA</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-6<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>5515</td><td>NAVARO, MALINDA</td><td>141-topic-9</td></tr><tr><td>8206</td><td>PALAMEDI, LEONARDO</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>2828</td><td>PARRIS, PECOLIA</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>9964</td><td>PENG, ZHEN_NI</td><td>141-topic-10<BR>141-topic-6</td></tr><tr><td>9849</td><td>POTAPOVA, ANNA</td><td>141-topic-10</td></tr><tr><td>3785</td><td>REUTER, MICHAEL</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>6917</td><td>STANISLAVOVA, MARINELA</td><td>141-topic-1<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>9142</td><td>THOOHO, BRYAN</td><td>141-topic-1<BR>141-topic-5<BR>141-topic-9</td></tr><tr><td>2480</td><td>VALDEBENITO, LISETTE</td><td>141-topic-10<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><tr><td>4135</td><td>WILLIAMS, ANNIFA</td><td>141-topic-1<BR>141-topic-10<BR>141-topic-2<BR>141-topic-3<BR>141-topic-4<BR>141-topic-5<BR>141-topic-6<BR>141-topic-7<BR>141-topic-8<BR>141-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 141-topic-1 </td><td>(AZULPHART, DEBORAH (0194))<BR>(CRUZ, FRANCIS (9368))<BR>(DUKE, TAMIKA (1386))<BR>(FARRAJ, ZAHIA (6257))<BR>(GARCIA, MIGUEL (4911))<BR>(JUNG, HEE_TAE (1205))<BR>(MARTINEZ, ALEXIS (1040))<BR>(MELLA, DIANA (4212))<BR>(PALAMEDI, LEONARDO (8206))<BR>(PARRIS, PECOLIA (2828))<BR>(REUTER, MICHAEL (3785))<BR>(STANISLAVOVA, MARINELA (6917))<BR>(THOOHO, BRYAN (9142))<BR>(WILLIAMS, ANNIFA (4135))</td></tr><tr><td> 141-topic-10 </td><td>(ARIAS, LESLIE (2040))<BR>(AZULPHART, DEBORAH (0194))<BR>(CHAMBERS, MATTHEW (3960))<BR>(CRUZ, FRANCIS (9368))<BR>(DAM, GLORIA (0096))<BR>(DUKE, TAMIKA (1386))<BR>(FELIX, EBONY (7536))<BR>(FRANCO, EWELINA (8195))<BR>(GARCIA, MIGUEL (4911))<BR>(LEE, HYUN_WOO (8958))<BR>(MARTINEZ, ALEXIS (1040))<BR>(MELLA, DIANA (4212))<BR>(PALAMEDI, LEONARDO (8206))<BR>(PARRIS, PECOLIA (2828))<BR>(PENG, ZHEN_NI (9964))<BR>(POTAPOVA, ANNA (9849))<BR>(REUTER, MICHAEL (3785))<BR>(VALDEBENITO, LISETTE (2480))<BR>(WILLIAMS, ANNIFA (4135))</td></tr><tr><td> 141-topic-2 </td><td>(ARIAS, LESLIE (2040))<BR>(CHAMBERS, MATTHEW (3960))<BR>(CRUZ, FRANCIS (9368))<BR>(DUKE, TAMIKA (1386))<BR>(MARTINEZ, ALEXIS (1040))<BR>(PALAMEDI, LEONARDO (8206))<BR>(PARRIS, PECOLIA (2828))<BR>(WILLIAMS, ANNIFA (4135))</td></tr><tr><td> 141-topic-3 </td><td>(CHAMBERS, MATTHEW (3960))<BR>(CRUZ, FRANCIS (9368))<BR>(MARTINEZ, ALEXIS (1040))<BR>(STANISLAVOVA, MARINELA (6917))<BR>(WILLIAMS, ANNIFA (4135))</td></tr><tr><td> 141-topic-4 </td><td>(ARIAS, LESLIE (2040))<BR>(AZULPHART, DEBORAH (0194))<BR>(DUKE, TAMIKA (1386))<BR>(FARRAJ, ZAHIA (6257))<BR>(FELIX, EBONY (7536))<BR>(FRANCO, EWELINA (8195))<BR>(PALAMEDI, LEONARDO (8206))<BR>(PARRIS, PECOLIA (2828))<BR>(STANISLAVOVA, MARINELA (6917))<BR>(WILLIAMS, ANNIFA (4135))</td></tr><tr><td> 141-topic-5 </td><td>(ARIAS, LESLIE (2040))<BR>(CRUZ, FRANCIS (9368))<BR>(DUKE, TAMIKA (1386))<BR>(FARRAJ, ZAHIA (6257))<BR>(FRANCO, EWELINA (8195))<BR>(JUNG, HEE_TAE (1205))<BR>(MARTINEZ, ALEXIS (1040))<BR>(PALAMEDI, LEONARDO (8206))<BR>(PARRIS, PECOLIA (2828))<BR>(STANISLAVOVA, MARINELA (6917))<BR>(THOOHO, BRYAN (9142))<BR>(VALDEBENITO, LISETTE (2480))<BR>(WILLIAMS, ANNIFA (4135))</td></tr><tr><td> 141-topic-6 </td><td>(ARIAS, LESLIE (2040))<BR>(AZULPHART, DEBORAH (0194))<BR>(CHAMBERS, MATTHEW (3960))<BR>(CRUZ, FRANCIS (9368))<BR>(DAM, GLORIA (0096))<BR>(DUKE, TAMIKA (1386))<BR>(FARRAJ, ZAHIA (6257))<BR>(FELIX, EBONY (7536))<BR>(FRANCO, EWELINA (8195))<BR>(GARCIA, MIGUEL (4911))<BR>(JUNG, HEE_TAE (1205))<BR>(MARTINEZ, ALEXIS (1040))<BR>(MELLA, DIANA (4212))<BR>(PALAMEDI, LEONARDO (8206))<BR>(PARRIS, PECOLIA (2828))<BR>(PENG, ZHEN_NI (9964))<BR>(STANISLAVOVA, MARINELA (6917))<BR>(VALDEBENITO, LISETTE (2480))<BR>(WILLIAMS, ANNIFA (4135))</td></tr><tr><td> 141-topic-7 </td><td>(ARIAS, LESLIE (2040))<BR>(CHAMBERS, MATTHEW (3960))<BR>(CRUZ, FRANCIS (9368))<BR>(DUKE, TAMIKA (1386))<BR>(FARRAJ, ZAHIA (6257))<BR>(FELIX, EBONY (7536))<BR>(FRANCO, EWELINA (8195))<BR>(GARCIA, MIGUEL (4911))<BR>(MARTINEZ, ALEXIS (1040))<BR>(PALAMEDI, LEONARDO (8206))<BR>(PARRIS, PECOLIA (2828))<BR>(STANISLAVOVA, MARINELA (6917))<BR>(VALDEBENITO, LISETTE (2480))<BR>(WILLIAMS, ANNIFA (4135))</td></tr><tr><td> 141-topic-8 </td><td>(ARIAS, LESLIE (2040))<BR>(AZULPHART, DEBORAH (0194))<BR>(CHAMBERS, MATTHEW (3960))<BR>(CRUZ, FRANCIS (9368))<BR>(DUKE, TAMIKA (1386))<BR>(FARRAJ, ZAHIA (6257))<BR>(FELIX, EBONY (7536))<BR>(FRANCO, EWELINA (8195))<BR>(LIN, SHUYI (7883))<BR>(MARTINEZ, ALEXIS (1040))<BR>(MELLA, DIANA (4212))<BR>(PALAMEDI, LEONARDO (8206))<BR>(PARRIS, PECOLIA (2828))<BR>(REUTER, MICHAEL (3785))<BR>(STANISLAVOVA, MARINELA (6917))<BR>(VALDEBENITO, LISETTE (2480))<BR>(WILLIAMS, ANNIFA (4135))</td></tr><tr><td> 141-topic-9 </td><td>(ARIAS, LESLIE (2040))<BR>(AZULPHART, DEBORAH (0194))<BR>(CHAMBERS, MATTHEW (3960))<BR>(CRUZ, FRANCIS (9368))<BR>(DUKE, TAMIKA (1386))<BR>(FARRAJ, ZAHIA (6257))<BR>(FELIX, EBONY (7536))<BR>(FRANCO, EWELINA (8195))<BR>(GARCIA, MIGUEL (4911))<BR>(JUNG, HEE_TAE (1205))<BR>(LEE, HYUN_WOO (8958))<BR>(MARTINEZ, ALEXIS (1040))<BR>(MELLA, DIANA (4212))<BR>(NAVARO, MALINDA (5515))<BR>(PALAMEDI, LEONARDO (8206))<BR>(PARRIS, PECOLIA (2828))<BR>(REUTER, MICHAEL (3785))<BR>(STANISLAVOVA, MARINELA (6917))<BR>(THOOHO, BRYAN (9142))<BR>(VALDEBENITO, LISETTE (2480))<BR>(WILLIAMS, ANNIFA (4135))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
