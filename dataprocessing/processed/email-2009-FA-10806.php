#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>06</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SHAH</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3132</td><td>BERNACET, JOHNNIE</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-5<BR>108-topic-7<BR>108-topic-8</td></tr><tr><td>4212</td><td>BIRNBAUM, DAVID</td><td>108-topic-4<BR>108-topic-5</td></tr><tr><td>4536</td><td>COQ, STEEVEN</td><td>108-topic-10</td></tr><tr><td>3125</td><td>DAVIS, SHERRY</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>7224</td><td>DEMETRIUS, RECORDO</td><td>108-topic-10<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>6315</td><td>DIAZ, JANIL</td><td>Passed everything.</td></tr><tr><td>4967</td><td>DOMINGUEZ, REYNA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7</td></tr><tr><td>1677</td><td>EVANS, SHAKYRA</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>8679</td><td>FERREIRAS, JILLIAN</td><td>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6</td></tr><tr><td>9742</td><td>FLAIM, NICHOLAS</td><td>108-topic-1<BR>108-topic-4</td></tr><tr><td>6068</td><td>FLORES, KATHERINE</td><td>108-topic-4</td></tr><tr><td>0811</td><td>FRANCES, JOSEPH</td><td>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8</td></tr><tr><td>5846</td><td>FRIAS, GREGORY</td><td>Absent on the assessment test.</td></tr><tr><td>8431</td><td>IGLESIAS, GUILLERMO</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>6331</td><td>JAMES, JEAN-CLAUDE</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-5</td></tr><tr><td>0277</td><td>KING, RACHEL</td><td>108-topic-10<BR>108-topic-9</td></tr><tr><td>3397</td><td>MALDONADO, JOSE</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-9</td></tr><tr><td>3846</td><td>MAYORGA, GABRIEL</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8</td></tr><tr><td>8689</td><td>PAN, MEI</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6</td></tr><tr><td>2166</td><td>PELLEGRINO, MICHAEL</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-4</td></tr><tr><td>9130</td><td>PYLE, PATRICK</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>5873</td><td>RUDOLPH, ASHANTA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>5638</td><td>RUSSOTTI, ROBERT</td><td>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-9</td></tr><tr><td>3292</td><td>SANCHEZ, EULENIA</td><td>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-9</td></tr><tr><td>1336</td><td>SERRANO, CATALINA</td><td>Absent on the assessment test.</td></tr><tr><td>8292</td><td>SHIKHMAN, ARTHUR</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-9</td></tr><tr><td>3315</td><td>SHUMILOVA, MAYA</td><td>Absent on the assessment test.</td></tr><tr><td>6159</td><td>SINGH, PAMELA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8</td></tr><tr><td>8792</td><td>SYLAJ, BURBUQE</td><td>Absent on the assessment test.</td></tr><tr><td>1800</td><td>VILLALONA, PALOMA</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-6</td></tr><tr><td>7761</td><td>WEBER, CATHRYN</td><td>108-topic-10<BR>108-topic-4<BR>108-topic-5<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>9707</td><td>WENDIN, MATTHEW</td><td>108-topic-10<BR>108-topic-4<BR>108-topic-7</td></tr><tr><td>4544</td><td>ZARAMA, ISAAC</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-1 </td><td>(DAVIS, SHERRY (3125))<BR>(DOMINGUEZ, REYNA (4967))<BR>(FLAIM, NICHOLAS (9742))<BR>(IGLESIAS, GUILLERMO (8431))<BR>(PELLEGRINO, MICHAEL (2166))<BR>(PYLE, PATRICK (9130))<BR>(RUDOLPH, ASHANTA (5873))<BR>(SHIKHMAN, ARTHUR (8292))<BR>(SINGH, PAMELA (6159))</td></tr><tr><td> 108-topic-10 </td><td>(BERNACET, JOHNNIE (3132))<BR>(COQ, STEEVEN (4536))<BR>(DAVIS, SHERRY (3125))<BR>(DEMETRIUS, RECORDO (7224))<BR>(EVANS, SHAKYRA (1677))<BR>(IGLESIAS, GUILLERMO (8431))<BR>(JAMES, JEAN-CLAUDE (6331))<BR>(KING, RACHEL (0277))<BR>(MALDONADO, JOSE (3397))<BR>(MAYORGA, GABRIEL (3846))<BR>(PAN, MEI (8689))<BR>(PELLEGRINO, MICHAEL (2166))<BR>(RUDOLPH, ASHANTA (5873))<BR>(SHIKHMAN, ARTHUR (8292))<BR>(SINGH, PAMELA (6159))<BR>(VILLALONA, PALOMA (1800))<BR>(WEBER, CATHRYN (7761))<BR>(WENDIN, MATTHEW (9707))<BR>(ZARAMA, ISAAC (4544))</td></tr><tr><td> 108-topic-2 </td><td>(DEMETRIUS, RECORDO (7224))<BR>(DOMINGUEZ, REYNA (4967))<BR>(FERREIRAS, JILLIAN (8679))<BR>(PYLE, PATRICK (9130))<BR>(RUDOLPH, ASHANTA (5873))<BR>(SHIKHMAN, ARTHUR (8292))</td></tr><tr><td> 108-topic-3 </td><td>(BERNACET, JOHNNIE (3132))<BR>(DAVIS, SHERRY (3125))<BR>(DOMINGUEZ, REYNA (4967))<BR>(EVANS, SHAKYRA (1677))<BR>(FERREIRAS, JILLIAN (8679))<BR>(FRANCES, JOSEPH (0811))<BR>(IGLESIAS, GUILLERMO (8431))<BR>(JAMES, JEAN-CLAUDE (6331))<BR>(MALDONADO, JOSE (3397))<BR>(MAYORGA, GABRIEL (3846))<BR>(PAN, MEI (8689))<BR>(RUDOLPH, ASHANTA (5873))<BR>(RUSSOTTI, ROBERT (5638))<BR>(SANCHEZ, EULENIA (3292))<BR>(SHIKHMAN, ARTHUR (8292))<BR>(SINGH, PAMELA (6159))<BR>(VILLALONA, PALOMA (1800))<BR>(ZARAMA, ISAAC (4544))</td></tr><tr><td> 108-topic-4 </td><td>(BIRNBAUM, DAVID (4212))<BR>(DAVIS, SHERRY (3125))<BR>(DEMETRIUS, RECORDO (7224))<BR>(DOMINGUEZ, REYNA (4967))<BR>(EVANS, SHAKYRA (1677))<BR>(FERREIRAS, JILLIAN (8679))<BR>(FLAIM, NICHOLAS (9742))<BR>(FLORES, KATHERINE (6068))<BR>(FRANCES, JOSEPH (0811))<BR>(IGLESIAS, GUILLERMO (8431))<BR>(MALDONADO, JOSE (3397))<BR>(MAYORGA, GABRIEL (3846))<BR>(PAN, MEI (8689))<BR>(PELLEGRINO, MICHAEL (2166))<BR>(PYLE, PATRICK (9130))<BR>(RUDOLPH, ASHANTA (5873))<BR>(RUSSOTTI, ROBERT (5638))<BR>(SANCHEZ, EULENIA (3292))<BR>(SINGH, PAMELA (6159))<BR>(WEBER, CATHRYN (7761))<BR>(WENDIN, MATTHEW (9707))<BR>(ZARAMA, ISAAC (4544))</td></tr><tr><td> 108-topic-5 </td><td>(BERNACET, JOHNNIE (3132))<BR>(BIRNBAUM, DAVID (4212))<BR>(DAVIS, SHERRY (3125))<BR>(DEMETRIUS, RECORDO (7224))<BR>(DOMINGUEZ, REYNA (4967))<BR>(EVANS, SHAKYRA (1677))<BR>(FRANCES, JOSEPH (0811))<BR>(IGLESIAS, GUILLERMO (8431))<BR>(JAMES, JEAN-CLAUDE (6331))<BR>(MALDONADO, JOSE (3397))<BR>(MAYORGA, GABRIEL (3846))<BR>(PYLE, PATRICK (9130))<BR>(RUDOLPH, ASHANTA (5873))<BR>(RUSSOTTI, ROBERT (5638))<BR>(SANCHEZ, EULENIA (3292))<BR>(SINGH, PAMELA (6159))<BR>(WEBER, CATHRYN (7761))<BR>(ZARAMA, ISAAC (4544))</td></tr><tr><td> 108-topic-6 </td><td>(DEMETRIUS, RECORDO (7224))<BR>(DOMINGUEZ, REYNA (4967))<BR>(EVANS, SHAKYRA (1677))<BR>(FERREIRAS, JILLIAN (8679))<BR>(FRANCES, JOSEPH (0811))<BR>(MAYORGA, GABRIEL (3846))<BR>(PAN, MEI (8689))<BR>(PYLE, PATRICK (9130))<BR>(RUDOLPH, ASHANTA (5873))<BR>(SINGH, PAMELA (6159))<BR>(VILLALONA, PALOMA (1800))<BR>(ZARAMA, ISAAC (4544))</td></tr><tr><td> 108-topic-7 </td><td>(BERNACET, JOHNNIE (3132))<BR>(DAVIS, SHERRY (3125))<BR>(DOMINGUEZ, REYNA (4967))<BR>(FRANCES, JOSEPH (0811))<BR>(RUDOLPH, ASHANTA (5873))<BR>(WENDIN, MATTHEW (9707))</td></tr><tr><td> 108-topic-8 </td><td>(BERNACET, JOHNNIE (3132))<BR>(FRANCES, JOSEPH (0811))<BR>(MAYORGA, GABRIEL (3846))<BR>(PYLE, PATRICK (9130))<BR>(RUDOLPH, ASHANTA (5873))<BR>(SINGH, PAMELA (6159))<BR>(WEBER, CATHRYN (7761))<BR>(ZARAMA, ISAAC (4544))</td></tr><tr><td> 108-topic-9 </td><td>(DAVIS, SHERRY (3125))<BR>(KING, RACHEL (0277))<BR>(MALDONADO, JOSE (3397))<BR>(PYLE, PATRICK (9130))<BR>(RUDOLPH, ASHANTA (5873))<BR>(RUSSOTTI, ROBERT (5638))<BR>(SANCHEZ, EULENIA (3292))<BR>(SHIKHMAN, ARTHUR (8292))<BR>(WEBER, CATHRYN (7761))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
