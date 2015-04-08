#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>18</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>ARONOFF_ROBERTA</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0377</td><td>CANEIRO, ERICA</td><td>Passed everything.</td></tr><tr><td>1918</td><td>CHEN, TIANYING</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-4</td></tr><tr><td>8113</td><td>CHEUNG, LYNN</td><td>Absent on the assessment test.</td></tr><tr><td>0384</td><td>CHOE, SANDRA</td><td>Absent on the assessment test.</td></tr><tr><td>8000</td><td>CYRUS, SHANELLE</td><td>Passed everything.</td></tr><tr><td>7114</td><td>DOMINICCI, KEVIN</td><td>Passed everything.</td></tr><tr><td>9985</td><td>EDMOND, AL</td><td>Passed everything.</td></tr><tr><td>8445</td><td>FANJUL, ROMMEL</td><td>Passed everything.</td></tr><tr><td>7987</td><td>FEJOS, ATTILA</td><td>Passed everything.</td></tr><tr><td>7250</td><td>GAMBRELL, DESIREE</td><td>Passed everything.</td></tr><tr><td>7668</td><td>GOMEZ, YUSEF</td><td>Passed everything.</td></tr><tr><td>0251</td><td>JIMENEZ, CATHERINE</td><td>Passed everything.</td></tr><tr><td>5630</td><td>KARKOSKA, JAMES</td><td>Passed everything.</td></tr><tr><td>4082</td><td>KAUR, HARBINDER</td><td>Passed everything.</td></tr><tr><td>1603</td><td>LAM, JACKSON</td><td>Passed everything.</td></tr><tr><td>8115</td><td>LANTIGUA, NIOVER</td><td>Passed everything.</td></tr><tr><td>7075</td><td>LYNCH, STEVEN</td><td>Passed everything.</td></tr><tr><td>1050</td><td>MATEO, NELIS</td><td>Passed everything.</td></tr><tr><td>7790</td><td>MCKIGNEY, LAUREN</td><td>Passed everything.</td></tr><tr><td>3995</td><td>MOHAN, CHRISTINE</td><td>Passed everything.</td></tr><tr><td>9853</td><td>MORAN, EVEN</td><td>Passed everything.</td></tr><tr><td>3519</td><td>PERRY, JASMIN</td><td>Passed everything.</td></tr><tr><td>7748</td><td>REID, DERRICK</td><td>Passed everything.</td></tr><tr><td>6886</td><td>SANCHEZ, ALEX</td><td>Passed everything.</td></tr><tr><td>3315</td><td>SHUMILOVA, MAYA</td><td>Passed everything.</td></tr><tr><td>3472</td><td>TABARU, AYSE</td><td>Passed everything.</td></tr><tr><td>4002</td><td>VILLAMAR, VERONICA</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(CHEN, TIANYING (1918))</td></tr><tr><td> 104-topic-2 </td><td>(CHEN, TIANYING (1918))</td></tr><tr><td> 104-topic-3 </td><td>Everyone passed.</td></tr><tr><td> 104-topic-4 </td><td>(CHEN, TIANYING (1918))</td></tr><tr><td> 104-topic-5 </td><td>Everyone passed.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
