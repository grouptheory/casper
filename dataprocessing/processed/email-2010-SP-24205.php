#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 242 - CALCULUS_2 (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>242</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>05</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SEAMAN_C</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8682</td><td>CARPIO, ANGELA</td><td>242-topic-01<BR>242-topic-02<BR>242-topic-03<BR>242-topic-04<BR>242-topic-05<BR>242-topic-06<BR>242-topic-07<BR>242-topic-08<BR>242-topic-09<BR>242-topic-10</td></tr><tr><td>3240</td><td>CORDON, LUISA</td><td>242-topic-01<BR>242-topic-02<BR>242-topic-03<BR>242-topic-06<BR>242-topic-08<BR>242-topic-09<BR>242-topic-10</td></tr><tr><td>3866</td><td>CZELOWALNIK, MELISSA</td><td>242-topic-01<BR>242-topic-02<BR>242-topic-03<BR>242-topic-06<BR>242-topic-07<BR>242-topic-08<BR>242-topic-09<BR>242-topic-10</td></tr><tr><td>2467</td><td>FERNANDEZ, ROBERTO</td><td>242-topic-01<BR>242-topic-02<BR>242-topic-06<BR>242-topic-08<BR>242-topic-10</td></tr><tr><td>2401</td><td>HOO, CHRISTINE</td><td>242-topic-01<BR>242-topic-02<BR>242-topic-03<BR>242-topic-04<BR>242-topic-06<BR>242-topic-07<BR>242-topic-08<BR>242-topic-09<BR>242-topic-10</td></tr><tr><td>3165</td><td>LEE, HYEOSU</td><td>Absent on the assessment test.</td></tr><tr><td>0114</td><td>MCPHERSON, EVITA</td><td>242-topic-01<BR>242-topic-02<BR>242-topic-03<BR>242-topic-04<BR>242-topic-05<BR>242-topic-06<BR>242-topic-08<BR>242-topic-09<BR>242-topic-10</td></tr><tr><td>5147</td><td>RANCHINSKIY, VASIL</td><td>242-topic-01<BR>242-topic-02<BR>242-topic-03<BR>242-topic-04<BR>242-topic-05<BR>242-topic-06<BR>242-topic-07<BR>242-topic-08<BR>242-topic-09<BR>242-topic-10</td></tr><tr><td>1255</td><td>SYDNEY, ANTHONY</td><td>242-topic-01<BR>242-topic-02<BR>242-topic-03<BR>242-topic-04<BR>242-topic-05<BR>242-topic-06<BR>242-topic-07<BR>242-topic-08<BR>242-topic-09<BR>242-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 242-topic-01 </td><td>(CARPIO, ANGELA (8682))<BR>(CORDON, LUISA (3240))<BR>(CZELOWALNIK, MELISSA (3866))<BR>(FERNANDEZ, ROBERTO (2467))<BR>(HOO, CHRISTINE (2401))<BR>(MCPHERSON, EVITA (0114))<BR>(RANCHINSKIY, VASIL (5147))<BR>(SYDNEY, ANTHONY (1255))</td></tr><tr><td> 242-topic-02 </td><td>(CARPIO, ANGELA (8682))<BR>(CORDON, LUISA (3240))<BR>(CZELOWALNIK, MELISSA (3866))<BR>(FERNANDEZ, ROBERTO (2467))<BR>(HOO, CHRISTINE (2401))<BR>(MCPHERSON, EVITA (0114))<BR>(RANCHINSKIY, VASIL (5147))<BR>(SYDNEY, ANTHONY (1255))</td></tr><tr><td> 242-topic-03 </td><td>(CARPIO, ANGELA (8682))<BR>(CORDON, LUISA (3240))<BR>(CZELOWALNIK, MELISSA (3866))<BR>(HOO, CHRISTINE (2401))<BR>(MCPHERSON, EVITA (0114))<BR>(RANCHINSKIY, VASIL (5147))<BR>(SYDNEY, ANTHONY (1255))</td></tr><tr><td> 242-topic-04 </td><td>(CARPIO, ANGELA (8682))<BR>(HOO, CHRISTINE (2401))<BR>(MCPHERSON, EVITA (0114))<BR>(RANCHINSKIY, VASIL (5147))<BR>(SYDNEY, ANTHONY (1255))</td></tr><tr><td> 242-topic-05 </td><td>(CARPIO, ANGELA (8682))<BR>(MCPHERSON, EVITA (0114))<BR>(RANCHINSKIY, VASIL (5147))<BR>(SYDNEY, ANTHONY (1255))</td></tr><tr><td> 242-topic-06 </td><td>(CARPIO, ANGELA (8682))<BR>(CORDON, LUISA (3240))<BR>(CZELOWALNIK, MELISSA (3866))<BR>(FERNANDEZ, ROBERTO (2467))<BR>(HOO, CHRISTINE (2401))<BR>(MCPHERSON, EVITA (0114))<BR>(RANCHINSKIY, VASIL (5147))<BR>(SYDNEY, ANTHONY (1255))</td></tr><tr><td> 242-topic-07 </td><td>(CARPIO, ANGELA (8682))<BR>(CZELOWALNIK, MELISSA (3866))<BR>(HOO, CHRISTINE (2401))<BR>(RANCHINSKIY, VASIL (5147))<BR>(SYDNEY, ANTHONY (1255))</td></tr><tr><td> 242-topic-08 </td><td>(CARPIO, ANGELA (8682))<BR>(CORDON, LUISA (3240))<BR>(CZELOWALNIK, MELISSA (3866))<BR>(FERNANDEZ, ROBERTO (2467))<BR>(HOO, CHRISTINE (2401))<BR>(MCPHERSON, EVITA (0114))<BR>(RANCHINSKIY, VASIL (5147))<BR>(SYDNEY, ANTHONY (1255))</td></tr><tr><td> 242-topic-09 </td><td>(CARPIO, ANGELA (8682))<BR>(CORDON, LUISA (3240))<BR>(CZELOWALNIK, MELISSA (3866))<BR>(HOO, CHRISTINE (2401))<BR>(MCPHERSON, EVITA (0114))<BR>(RANCHINSKIY, VASIL (5147))<BR>(SYDNEY, ANTHONY (1255))</td></tr><tr><td> 242-topic-10 </td><td>(CARPIO, ANGELA (8682))<BR>(CORDON, LUISA (3240))<BR>(CZELOWALNIK, MELISSA (3866))<BR>(FERNANDEZ, ROBERTO (2467))<BR>(HOO, CHRISTINE (2401))<BR>(MCPHERSON, EVITA (0114))<BR>(RANCHINSKIY, VASIL (5147))<BR>(SYDNEY, ANTHONY (1255))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>