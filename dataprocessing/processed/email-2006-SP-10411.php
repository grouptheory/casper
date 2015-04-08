#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2006 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>11</td></tr><tr><td align='center'>Year</td> <td align='center'>2006</td></tr><tr><td align='center'>Prof.</td> <td align='center'>PAIDOUSSIS_F</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1460</td><td>BENCOSME, ANGELICA</td><td>Passed everything.</td></tr><tr><td>7234</td><td>CANDO, DANNA</td><td>Passed everything.</td></tr><tr><td>6062</td><td>GEORGE, ALVIN</td><td>Passed everything.</td></tr><tr><td>5105</td><td>GUILLEN, KATHERINE</td><td>Passed everything.</td></tr><tr><td>3425</td><td>HARRIS, EVERTON</td><td>Passed everything.</td></tr><tr><td>9779</td><td>JARVIS, RONALD</td><td>Passed everything.</td></tr><tr><td>6462</td><td>JAVED, SABAH</td><td>Passed everything.</td></tr><tr><td>5151</td><td>LOPEZ, MIGUEL</td><td>Passed everything.</td></tr><tr><td>8680</td><td>PERALTA, KAREN</td><td>Passed everything.</td></tr><tr><td>4878</td><td>RIVERA, STEPHANIE</td><td>Passed everything.</td></tr><tr><td>9044</td><td>RODRIGUEZ, MARISOL</td><td>Passed everything.</td></tr><tr><td>9557</td><td>ROSSO, HAROLD</td><td>Passed everything.</td></tr><tr><td>5940</td><td>ROYAL, KADREYSA</td><td>Passed everything.</td></tr><tr><td>4855</td><td>RUSSELL, RASHEEDA</td><td>Passed everything.</td></tr><tr><td>6147</td><td>SALEM, OSAMAH</td><td>Passed everything.</td></tr><tr><td>3330</td><td>SANABRIA, CHRISTIAN</td><td>Passed everything.</td></tr><tr><td>4984</td><td>TAMARAY, JAMIE_LYNN</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
