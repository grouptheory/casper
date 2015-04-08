#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 277 - COMP:STRA_DEC-MAK (2008 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>277</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2008</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KUGAN_THURAI</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8183</td><td>CHRISTIAN, CECIL</td><td>Passed everything.</td></tr><tr><td>2987</td><td>DAUMAN, ALEXANDER</td><td>Passed everything.</td></tr><tr><td>1132</td><td>DOBRIN, SARAH</td><td>Passed everything.</td></tr><tr><td>7481</td><td>HANSON, ALEXANDRA</td><td>Passed everything.</td></tr><tr><td>6910</td><td>HASSAN, NABILA</td><td>Passed everything.</td></tr><tr><td>1204</td><td>IVANKOVSKIY, YEVGENIY</td><td>Passed everything.</td></tr><tr><td>7688</td><td>KARIMZADEH, MICHAEL</td><td>Passed everything.</td></tr><tr><td>1455</td><td>KIM, JEONG_YEON</td><td>Passed everything.</td></tr><tr><td>2026</td><td>PENG, KEVIN</td><td>Passed everything.</td></tr><tr><td>2997</td><td>SALWACH, IWONA</td><td>Passed everything.</td></tr><tr><td>5254</td><td>SUS, JEREMY</td><td>Passed everything.</td></tr><tr><td>6680</td><td>TARASKA, MAGDALENA</td><td>Passed everything.</td></tr><tr><td>6055</td><td>WATSON, TIFFANY</td><td>Passed everything.</td></tr><tr><td>1595</td><td>YUAN, YIKO</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 277-Topic-1 </td><td>Everyone passed.</td></tr><tr><td> 277-Topic-2 </td><td>Everyone passed.</td></tr><tr><td> 277-Topic-3 </td><td>Everyone passed.</td></tr><tr><td> 277-Topic-4 </td><td>Everyone passed.</td></tr><tr><td> 277-Topic-5 </td><td>Everyone passed.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
