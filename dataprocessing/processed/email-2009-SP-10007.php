#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 100 - INT_BASIC_MATH_SK (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>100</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>07</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>WELZ_G</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0852</td><td>ALMONTE, GLORIMER</td><td>100-topic-3<BR>100-topic-4</td></tr><tr><td>0449</td><td>BAEZ, KATHERINE</td><td>Absent on the assessment test.</td></tr><tr><td>0760</td><td>BARBOSA, STEPHANIE</td><td>100-topic-2<BR>100-topic-4</td></tr><tr><td>0175</td><td>BIANCO, ERICA</td><td>100-topic-3</td></tr><tr><td>7230</td><td>FLORES, JOEL</td><td>100-topic-3<BR>100-topic-4</td></tr><tr><td>1759</td><td>GAGO, JESSICA</td><td>100-topic-2<BR>100-topic-3<BR>100-topic-4<BR>100-topic-5</td></tr><tr><td>6819</td><td>GJOKA, IRENE</td><td>Absent on the assessment test.</td></tr><tr><td>0141</td><td>HARRIS, EMMANUEL</td><td>100-topic-2<BR>100-topic-3<BR>100-topic-4<BR>100-topic-5</td></tr><tr><td>8888</td><td>HOLM, SHEDIA</td><td>100-topic-2<BR>100-topic-3<BR>100-topic-4<BR>100-topic-5</td></tr><tr><td>7542</td><td>LEPLATTE, JULIEN</td><td>100-topic-3<BR>100-topic-4</td></tr><tr><td>9369</td><td>LUKIN, ANVAR</td><td>100-topic-2<BR>100-topic-3<BR>100-topic-4</td></tr><tr><td>7542</td><td>MOHAMED, KELVIN</td><td>100-topic-1<BR>100-topic-2<BR>100-topic-4</td></tr><tr><td>3232</td><td>OLIVIERI, LEANA</td><td>100-topic-2<BR>100-topic-3<BR>100-topic-4<BR>100-topic-5</td></tr><tr><td>5274</td><td>PILGRIM, COLISHA</td><td>100-topic-1<BR>100-topic-2<BR>100-topic-3<BR>100-topic-4</td></tr><tr><td>4575</td><td>REMLI, DEHBIA</td><td>100-topic-2<BR>100-topic-3<BR>100-topic-4</td></tr><tr><td>3728</td><td>RODRIGUEZ, LILLIAN</td><td>100-topic-1<BR>100-topic-2<BR>100-topic-3<BR>100-topic-4<BR>100-topic-5</td></tr><tr><td>3107</td><td>SANTIAGO, EDWARD</td><td>Absent on the assessment test.</td></tr><tr><td>4680</td><td>SARAZIN, YANOSKA</td><td>100-topic-2<BR>100-topic-4</td></tr><tr><td>7154</td><td>WALTON, WHITNEY</td><td>100-topic-1<BR>100-topic-2<BR>100-topic-3<BR>100-topic-4</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 100-topic-1 </td><td>(MOHAMED, KELVIN (7542))<BR>(PILGRIM, COLISHA (5274))<BR>(RODRIGUEZ, LILLIAN (3728))<BR>(WALTON, WHITNEY (7154))</td></tr><tr><td> 100-topic-2 </td><td>(BARBOSA, STEPHANIE (0760))<BR>(GAGO, JESSICA (1759))<BR>(HARRIS, EMMANUEL (0141))<BR>(HOLM, SHEDIA (8888))<BR>(LUKIN, ANVAR (9369))<BR>(MOHAMED, KELVIN (7542))<BR>(OLIVIERI, LEANA (3232))<BR>(PILGRIM, COLISHA (5274))<BR>(REMLI, DEHBIA (4575))<BR>(RODRIGUEZ, LILLIAN (3728))<BR>(SARAZIN, YANOSKA (4680))<BR>(WALTON, WHITNEY (7154))</td></tr><tr><td> 100-topic-3 </td><td>(ALMONTE, GLORIMER (0852))<BR>(BIANCO, ERICA (0175))<BR>(FLORES, JOEL (7230))<BR>(GAGO, JESSICA (1759))<BR>(HARRIS, EMMANUEL (0141))<BR>(HOLM, SHEDIA (8888))<BR>(LEPLATTE, JULIEN (7542))<BR>(LUKIN, ANVAR (9369))<BR>(OLIVIERI, LEANA (3232))<BR>(PILGRIM, COLISHA (5274))<BR>(REMLI, DEHBIA (4575))<BR>(RODRIGUEZ, LILLIAN (3728))<BR>(WALTON, WHITNEY (7154))</td></tr><tr><td> 100-topic-4 </td><td>(ALMONTE, GLORIMER (0852))<BR>(BARBOSA, STEPHANIE (0760))<BR>(FLORES, JOEL (7230))<BR>(GAGO, JESSICA (1759))<BR>(HARRIS, EMMANUEL (0141))<BR>(HOLM, SHEDIA (8888))<BR>(LEPLATTE, JULIEN (7542))<BR>(LUKIN, ANVAR (9369))<BR>(MOHAMED, KELVIN (7542))<BR>(OLIVIERI, LEANA (3232))<BR>(PILGRIM, COLISHA (5274))<BR>(REMLI, DEHBIA (4575))<BR>(RODRIGUEZ, LILLIAN (3728))<BR>(SARAZIN, YANOSKA (4680))<BR>(WALTON, WHITNEY (7154))</td></tr><tr><td> 100-topic-5 </td><td>(GAGO, JESSICA (1759))<BR>(HARRIS, EMMANUEL (0141))<BR>(HOLM, SHEDIA (8888))<BR>(OLIVIERI, LEANA (3232))<BR>(RODRIGUEZ, LILLIAN (3728))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
