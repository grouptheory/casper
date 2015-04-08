#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>PEIKES_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1927</td><td>AGUILAR, MARIBEL</td><td>Absent on the assessment test.</td></tr><tr><td>0669</td><td>CHARLES, BENJE</td><td>Absent on the assessment test.</td></tr><tr><td>7021</td><td>CHOWDHURY, SAFAWANA</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-4</td></tr><tr><td>7878</td><td>COSTA, ANA</td><td>104-topic-4</td></tr><tr><td>7388</td><td>DILLARD, ANGELA</td><td>Absent on the assessment test.</td></tr><tr><td>5350</td><td>FICHERA, MELISSA</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4</td></tr><tr><td>5982</td><td>GIL, ERIKA</td><td>104-topic-4</td></tr><tr><td>9751</td><td>GONZALEZ, ELIZABETH</td><td>Absent on the assessment test.</td></tr><tr><td>4803</td><td>JACKSON, STEPHANIE</td><td>Absent on the assessment test.</td></tr><tr><td>3880</td><td>JACOBS, JANEL</td><td>Passed everything.</td></tr><tr><td>2488</td><td>LEGRAND, LATOYA</td><td>104-topic-4</td></tr><tr><td>9905</td><td>NAWAZ, TEHMOOR</td><td>104-topic-4</td></tr><tr><td>1751</td><td>NEAGLE, FABIAN</td><td>Absent on the assessment test.</td></tr><tr><td>8531</td><td>NG, STEPHEN</td><td>104-topic-1</td></tr><tr><td>9498</td><td>RAHIM, SANYA</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>9372</td><td>RAMTEERATH, NIRAV</td><td>Absent on the assessment test.</td></tr><tr><td>3744</td><td>RIVERA, MARCOS</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>3081</td><td>RODRIGUEZ, CRYSTAL</td><td>104-topic-3<BR>104-topic-4</td></tr><tr><td>6663</td><td>RODRIGUEZ, MARIA</td><td>104-topic-3<BR>104-topic-4</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(CHOWDHURY, SAFAWANA (7021))<BR>(FICHERA, MELISSA (5350))<BR>(NG, STEPHEN (8531))<BR>(RIVERA, MARCOS (3744))</td></tr><tr><td> 104-topic-2 </td><td>(CHOWDHURY, SAFAWANA (7021))<BR>(FICHERA, MELISSA (5350))<BR>(RAHIM, SANYA (9498))<BR>(RIVERA, MARCOS (3744))</td></tr><tr><td> 104-topic-3 </td><td>(FICHERA, MELISSA (5350))<BR>(RIVERA, MARCOS (3744))<BR>(RODRIGUEZ, CRYSTAL (3081))<BR>(RODRIGUEZ, MARIA (6663))</td></tr><tr><td> 104-topic-4 </td><td>(CHOWDHURY, SAFAWANA (7021))<BR>(COSTA, ANA (7878))<BR>(FICHERA, MELISSA (5350))<BR>(GIL, ERIKA (5982))<BR>(LEGRAND, LATOYA (2488))<BR>(NAWAZ, TEHMOOR (9905))<BR>(RAHIM, SANYA (9498))<BR>(RIVERA, MARCOS (3744))<BR>(RODRIGUEZ, CRYSTAL (3081))<BR>(RODRIGUEZ, MARIA (6663))</td></tr><tr><td> 104-topic-5 </td><td>(RIVERA, MARCOS (3744))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
