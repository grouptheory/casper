#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>PEIKES_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8696</td><td>ANCHETA, TIMOTHY</td><td>105-topic-2</td></tr><tr><td>1380</td><td>ARROYO, CHRISTIAN</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4</td></tr><tr><td>1128</td><td>BONILLA, STEEFANEE</td><td>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>0791</td><td>BRYANT, TYRONE</td><td>Absent on the assessment test.</td></tr><tr><td>5946</td><td>BUTCHER, BERTRAND</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>3412</td><td>CARROLL, ELIAJAH</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-5</td></tr><tr><td>7642</td><td>CASSIANO, CODY</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-4</td></tr><tr><td>5289</td><td>CASTELLANOS, RAMON</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>8603</td><td>DIAZ, DIANA</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>0974</td><td>DIMSUYU, DENIZ</td><td>105-topic-2<BR>105-topic-3<BR>105-topic-5</td></tr><tr><td>3996</td><td>DUARTE, AILEEN</td><td>105-topic-5</td></tr><tr><td>7151</td><td>FIELMAN, BRIAN</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>5683</td><td>FOWLER, VALERIE</td><td>Absent on the assessment test.</td></tr><tr><td>0038</td><td>GRAWUNDER, WILLIAM</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>3040</td><td>GUZMAN, ANAMARIA</td><td>Absent on the assessment test.</td></tr><tr><td>5217</td><td>HARTWELL, NICOLE</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>5573</td><td>HERNANDEZ, MARIELLI</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>2369</td><td>INOA, FRANKLYN</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>9715</td><td>JACKSON, CARLA</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>0700</td><td>KHAN, AKLIMA</td><td>105-topic-1<BR>105-topic-3<BR>105-topic-5</td></tr><tr><td>5622</td><td>LAGMAY, EUGENE</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4</td></tr><tr><td>5739</td><td>LIN, ALLEN</td><td>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>9309</td><td>MARTINEZ, RAPHY</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-5</td></tr><tr><td>1052</td><td>MERCERON, MARTINE</td><td>Absent on the assessment test.</td></tr><tr><td>5280</td><td>PALAZZOLO, MICHELLE</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>9075</td><td>PEACOCK, DAVID</td><td>105-topic-2</td></tr><tr><td>6527</td><td>RICHARDS, MONIQUE</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>4175</td><td>ROSARIO, ARLETY</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>7089</td><td>SANCHEZ, JUANOSCAR</td><td>105-topic-2<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>5158</td><td>SEMPER, CHIVAUGHN</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>2350</td><td>SOLORZANO, RICARDO</td><td>Absent on the assessment test.</td></tr><tr><td>6395</td><td>TOLEDO, NATALIE</td><td>105-topic-2<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>0270</td><td>VALLEJOS, EVELYN</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5</td></tr><tr><td>7175</td><td>WILLIAMS, AKESIA</td><td>105-topic-4<BR>105-topic-5</td></tr><tr><td>8256</td><td>YOUNG, JOHN</td><td>Absent on the assessment test.</td></tr><tr><td>8759</td><td>ZENO, JAMIE</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-1 </td><td>(ARROYO, CHRISTIAN (1380))<BR>(BUTCHER, BERTRAND (5946))<BR>(CARROLL, ELIAJAH (3412))<BR>(CASSIANO, CODY (7642))<BR>(CASTELLANOS, RAMON (5289))<BR>(DIAZ, DIANA (8603))<BR>(FIELMAN, BRIAN (7151))<BR>(GRAWUNDER, WILLIAM (0038))<BR>(HARTWELL, NICOLE (5217))<BR>(HERNANDEZ, MARIELLI (5573))<BR>(INOA, FRANKLYN (2369))<BR>(JACKSON, CARLA (9715))<BR>(KHAN, AKLIMA (0700))<BR>(LAGMAY, EUGENE (5622))<BR>(MARTINEZ, RAPHY (9309))<BR>(PALAZZOLO, MICHELLE (5280))<BR>(RICHARDS, MONIQUE (6527))<BR>(ROSARIO, ARLETY (4175))<BR>(SEMPER, CHIVAUGHN (5158))<BR>(VALLEJOS, EVELYN (0270))Absent on the assessment test.</td></tr><tr><td> 105-topic-2 </td><td>(ANCHETA, TIMOTHY (8696))<BR>(ARROYO, CHRISTIAN (1380))<BR>(BONILLA, STEEFANEE (1128))<BR>(BUTCHER, BERTRAND (5946))<BR>(CARROLL, ELIAJAH (3412))<BR>(CASSIANO, CODY (7642))<BR>(CASTELLANOS, RAMON (5289))<BR>(DIAZ, DIANA (8603))<BR>(DIMSUYU, DENIZ (0974))<BR>(FIELMAN, BRIAN (7151))<BR>(GRAWUNDER, WILLIAM (0038))<BR>(HARTWELL, NICOLE (5217))<BR>(HERNANDEZ, MARIELLI (5573))<BR>(INOA, FRANKLYN (2369))<BR>(JACKSON, CARLA (9715))<BR>(LAGMAY, EUGENE (5622))<BR>(LIN, ALLEN (5739))<BR>(MARTINEZ, RAPHY (9309))<BR>(PALAZZOLO, MICHELLE (5280))<BR>(PEACOCK, DAVID (9075))<BR>(RICHARDS, MONIQUE (6527))<BR>(ROSARIO, ARLETY (4175))<BR>(SANCHEZ, JUANOSCAR (7089))<BR>(SEMPER, CHIVAUGHN (5158))<BR>(TOLEDO, NATALIE (6395))<BR>(VALLEJOS, EVELYN (0270))Absent on the assessment test.</td></tr><tr><td> 105-topic-3 </td><td>(ARROYO, CHRISTIAN (1380))<BR>(BONILLA, STEEFANEE (1128))<BR>(BUTCHER, BERTRAND (5946))<BR>(CARROLL, ELIAJAH (3412))<BR>(CASTELLANOS, RAMON (5289))<BR>(DIMSUYU, DENIZ (0974))<BR>(FIELMAN, BRIAN (7151))<BR>(GRAWUNDER, WILLIAM (0038))<BR>(HARTWELL, NICOLE (5217))<BR>(INOA, FRANKLYN (2369))<BR>(KHAN, AKLIMA (0700))<BR>(LAGMAY, EUGENE (5622))<BR>(LIN, ALLEN (5739))<BR>(PALAZZOLO, MICHELLE (5280))<BR>(RICHARDS, MONIQUE (6527))<BR>(ROSARIO, ARLETY (4175))<BR>(VALLEJOS, EVELYN (0270))Absent on the assessment test.</td></tr><tr><td> 105-topic-4 </td><td>(ARROYO, CHRISTIAN (1380))<BR>(BONILLA, STEEFANEE (1128))<BR>(BUTCHER, BERTRAND (5946))<BR>(CASSIANO, CODY (7642))<BR>(CASTELLANOS, RAMON (5289))<BR>(DIAZ, DIANA (8603))<BR>(FIELMAN, BRIAN (7151))<BR>(GRAWUNDER, WILLIAM (0038))<BR>(HARTWELL, NICOLE (5217))<BR>(HERNANDEZ, MARIELLI (5573))<BR>(INOA, FRANKLYN (2369))<BR>(JACKSON, CARLA (9715))<BR>(LAGMAY, EUGENE (5622))<BR>(LIN, ALLEN (5739))<BR>(PALAZZOLO, MICHELLE (5280))<BR>(RICHARDS, MONIQUE (6527))<BR>(ROSARIO, ARLETY (4175))<BR>(SANCHEZ, JUANOSCAR (7089))<BR>(SEMPER, CHIVAUGHN (5158))<BR>(TOLEDO, NATALIE (6395))<BR>(VALLEJOS, EVELYN (0270))<BR>(WILLIAMS, AKESIA (7175))Absent on the assessment test.</td></tr><tr><td> 105-topic-5 </td><td>(BONILLA, STEEFANEE (1128))<BR>(BUTCHER, BERTRAND (5946))<BR>(CARROLL, ELIAJAH (3412))<BR>(CASTELLANOS, RAMON (5289))<BR>(DIAZ, DIANA (8603))<BR>(DIMSUYU, DENIZ (0974))<BR>(DUARTE, AILEEN (3996))<BR>(FIELMAN, BRIAN (7151))<BR>(GRAWUNDER, WILLIAM (0038))<BR>(HARTWELL, NICOLE (5217))<BR>(HERNANDEZ, MARIELLI (5573))<BR>(INOA, FRANKLYN (2369))<BR>(JACKSON, CARLA (9715))<BR>(KHAN, AKLIMA (0700))<BR>(LIN, ALLEN (5739))<BR>(MARTINEZ, RAPHY (9309))<BR>(PALAZZOLO, MICHELLE (5280))<BR>(RICHARDS, MONIQUE (6527))<BR>(ROSARIO, ARLETY (4175))<BR>(SANCHEZ, JUANOSCAR (7089))<BR>(SEMPER, CHIVAUGHN (5158))<BR>(TOLEDO, NATALIE (6395))<BR>(VALLEJOS, EVELYN (0270))<BR>(WILLIAMS, AKESIA (7175))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>