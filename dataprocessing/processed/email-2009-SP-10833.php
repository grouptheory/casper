#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>33</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>WELZ_G</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1173</td><td>ACEVEDO, GERMAN</td><td>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>2035</td><td>ALVARADO, STEPHANIE</td><td>108-topic-2<BR>108-topic-5</td></tr><tr><td>9930</td><td>ARZU, KARINA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>4510</td><td>BASUNI, NORHAN</td><td>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>1842</td><td>CURCIO, MICHELE</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>2715</td><td>DACQUAVIVA, REGINA</td><td>Absent on the assessment test.</td></tr><tr><td>9880</td><td>DUNN, MICHAEL</td><td>108-topic-2<BR>108-topic-5</td></tr><tr><td>6292</td><td>DURDEN, JANEE</td><td>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>8053</td><td>GREENE, DANIELLE</td><td>108-topic-2<BR>108-topic-5</td></tr><tr><td>0124</td><td>GUEVARA, ALANNA</td><td>Absent on the assessment test.</td></tr><tr><td>9607</td><td>HASSAN, REEM</td><td>Absent on the assessment test.</td></tr><tr><td>9595</td><td>HOUSTON, TASHA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>6917</td><td>JENKINS, WILLETTE</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>4814</td><td>JULIAO, DENISSE</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>4788</td><td>LITTMAN, NICOLE</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-5</td></tr><tr><td>2167</td><td>MOLINA, JASMINE</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-5</td></tr><tr><td>7495</td><td>OTERO, GINA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>1411</td><td>PONCE, DENISE</td><td>Absent on the assessment test.</td></tr><tr><td>1323</td><td>RODRIGUEZ, FARRAH</td><td>108-topic-2<BR>108-topic-3<BR>108-topic-5</td></tr><tr><td>9805</td><td>ROFFMAN, JASON</td><td>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>4952</td><td>ROSERO, JOAO</td><td>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>2001</td><td>RUBIN, ANNETTE</td><td>108-topic-2<BR>108-topic-5</td></tr><tr><td>7157</td><td>SERRANO-PEREZ, JENNY</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>9127</td><td>SHAHID, SAHAR</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>3871</td><td>SHAMBO, GARNETT</td><td>Absent on the assessment test.</td></tr><tr><td>1762</td><td>SILVA, SABRINA</td><td>Absent on the assessment test.</td></tr><tr><td>1159</td><td>SIMON, IGOR</td><td>108-topic-2<BR>108-topic-5</td></tr><tr><td>7696</td><td>SULLIVAN, MICHAEL</td><td>108-topic-2<BR>108-topic-5</td></tr><tr><td>5526</td><td>TOLLI, STEPHANIE</td><td>108-topic-2<BR>108-topic-5</td></tr><tr><td>0181</td><td>TUTHILL, SHAWN</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>1886</td><td>VEGA, JOSE</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-5</td></tr><tr><td>2344</td><td>WALSH, SEAN</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-5</td></tr><tr><td>2914</td><td>WASHINGTON, ERIC</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-1 </td><td>(ARZU, KARINA (9930))<BR>(CURCIO, MICHELE (1842))<BR>(HOUSTON, TASHA (9595))<BR>(JENKINS, WILLETTE (6917))<BR>(JULIAO, DENISSE (4814))<BR>(LITTMAN, NICOLE (4788))<BR>(MOLINA, JASMINE (2167))<BR>(OTERO, GINA (7495))<BR>(SERRANO-PEREZ, JENNY (7157))<BR>(SHAHID, SAHAR (9127))<BR>(TUTHILL, SHAWN (0181))<BR>(VEGA, JOSE (1886))<BR>(WALSH, SEAN (2344))<BR>(WASHINGTON, ERIC (2914))</td></tr><tr><td> 108-topic-2 </td><td>(ACEVEDO, GERMAN (1173))<BR>(ALVARADO, STEPHANIE (2035))<BR>(ARZU, KARINA (9930))<BR>(BASUNI, NORHAN (4510))<BR>(CURCIO, MICHELE (1842))<BR>(DUNN, MICHAEL (9880))<BR>(DURDEN, JANEE (6292))<BR>(GREENE, DANIELLE (8053))<BR>(HOUSTON, TASHA (9595))<BR>(JENKINS, WILLETTE (6917))<BR>(JULIAO, DENISSE (4814))<BR>(LITTMAN, NICOLE (4788))<BR>(MOLINA, JASMINE (2167))<BR>(OTERO, GINA (7495))<BR>(RODRIGUEZ, FARRAH (1323))<BR>(ROFFMAN, JASON (9805))<BR>(ROSERO, JOAO (4952))<BR>(RUBIN, ANNETTE (2001))<BR>(SERRANO-PEREZ, JENNY (7157))<BR>(SHAHID, SAHAR (9127))<BR>(SIMON, IGOR (1159))<BR>(SULLIVAN, MICHAEL (7696))<BR>(TOLLI, STEPHANIE (5526))<BR>(TUTHILL, SHAWN (0181))<BR>(VEGA, JOSE (1886))<BR>(WALSH, SEAN (2344))<BR>(WASHINGTON, ERIC (2914))</td></tr><tr><td> 108-topic-3 </td><td>(ARZU, KARINA (9930))<BR>(BASUNI, NORHAN (4510))<BR>(CURCIO, MICHELE (1842))<BR>(HOUSTON, TASHA (9595))<BR>(JENKINS, WILLETTE (6917))<BR>(JULIAO, DENISSE (4814))<BR>(MOLINA, JASMINE (2167))<BR>(OTERO, GINA (7495))<BR>(RODRIGUEZ, FARRAH (1323))<BR>(ROFFMAN, JASON (9805))<BR>(VEGA, JOSE (1886))</td></tr><tr><td> 108-topic-4 </td><td>(ACEVEDO, GERMAN (1173))<BR>(ARZU, KARINA (9930))<BR>(BASUNI, NORHAN (4510))<BR>(CURCIO, MICHELE (1842))<BR>(DURDEN, JANEE (6292))<BR>(HOUSTON, TASHA (9595))<BR>(JENKINS, WILLETTE (6917))<BR>(JULIAO, DENISSE (4814))<BR>(OTERO, GINA (7495))<BR>(ROFFMAN, JASON (9805))<BR>(ROSERO, JOAO (4952))<BR>(SERRANO-PEREZ, JENNY (7157))<BR>(SHAHID, SAHAR (9127))<BR>(TUTHILL, SHAWN (0181))<BR>(WASHINGTON, ERIC (2914))</td></tr><tr><td> 108-topic-5 </td><td>(ACEVEDO, GERMAN (1173))<BR>(ALVARADO, STEPHANIE (2035))<BR>(ARZU, KARINA (9930))<BR>(BASUNI, NORHAN (4510))<BR>(CURCIO, MICHELE (1842))<BR>(DUNN, MICHAEL (9880))<BR>(DURDEN, JANEE (6292))<BR>(GREENE, DANIELLE (8053))<BR>(HOUSTON, TASHA (9595))<BR>(JENKINS, WILLETTE (6917))<BR>(JULIAO, DENISSE (4814))<BR>(LITTMAN, NICOLE (4788))<BR>(MOLINA, JASMINE (2167))<BR>(OTERO, GINA (7495))<BR>(RODRIGUEZ, FARRAH (1323))<BR>(ROFFMAN, JASON (9805))<BR>(ROSERO, JOAO (4952))<BR>(RUBIN, ANNETTE (2001))<BR>(SERRANO-PEREZ, JENNY (7157))<BR>(SHAHID, SAHAR (9127))<BR>(SIMON, IGOR (1159))<BR>(SULLIVAN, MICHAEL (7696))<BR>(TOLLI, STEPHANIE (5526))<BR>(TUTHILL, SHAWN (0181))<BR>(VEGA, JOSE (1886))<BR>(WALSH, SEAN (2344))<BR>(WASHINGTON, ERIC (2914))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
