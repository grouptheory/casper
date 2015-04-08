#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 400 - QUANT_PROB_CRJ (2008 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>400</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2008</td></tr><tr><td align='center'>Prof.</td> <td align='center'>GRAFF_SAMUEL</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6455</td><td>BAEZ, AMY</td><td>400-Topic-5</td></tr><tr><td>2882</td><td>DIAZ, ANDREW</td><td>Passed everything.</td></tr><tr><td>6759</td><td>GONZALEZ, VIRGINIA</td><td>Passed everything.</td></tr><tr><td>5106</td><td>GORINI, MICHAEL</td><td>Passed everything.</td></tr><tr><td>6910</td><td>HASSAN, NABILA</td><td>400-Topic-5</td></tr><tr><td>1204</td><td>IVANKOVSKIY, YEVGENIY</td><td>Passed everything.</td></tr><tr><td>7688</td><td>KARIMZADEH, MICHAEL</td><td>Passed everything.</td></tr><tr><td>7573</td><td>LE, MINH</td><td>Passed everything.</td></tr><tr><td>7189</td><td>MARKEY, SEAN</td><td>Passed everything.</td></tr><tr><td>1843</td><td>PERALTA, ADONNIS</td><td>Passed everything.</td></tr><tr><td>0478</td><td>ROMAN, ROBERT</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 400-Topic-1 </td><td>Everyone passed.</td></tr><tr><td> 400-Topic-2 </td><td>Everyone passed.</td></tr><tr><td> 400-Topic-3 </td><td>Everyone passed.</td></tr><tr><td> 400-Topic-4 </td><td>Everyone passed.</td></tr><tr><td> 400-Topic-5 </td><td>(BAEZ, AMY (6455))<BR>(HASSAN, NABILA (6910))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
