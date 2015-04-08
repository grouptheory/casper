#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 375 - OPERATING_SYSTEMS (2008 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>375</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2008</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KIM_JINWOO</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8949</td><td>EDWARDS, MAURICE</td><td>375-Topic-1</td></tr><tr><td>7599</td><td>ENRIGHT, ROBERT</td><td>Absent on the assessment test.</td></tr><tr><td>6759</td><td>GONZALEZ, VIRGINIA</td><td>375-Topic-1<BR>375-Topic-2<BR>375-Topic-3<BR>375-Topic-4<BR>375-Topic-5</td></tr><tr><td>6910</td><td>HASSAN, NABILA</td><td>Absent on the assessment test.</td></tr><tr><td>1204</td><td>IVANKOVSKIY, YEVGENIY</td><td>Passed everything.</td></tr><tr><td>9758</td><td>JAQUEZ, JESSICA</td><td>Passed everything.</td></tr><tr><td>6153</td><td>KOUZOUNAS, NICHOLAS</td><td>Passed everything.</td></tr><tr><td>3101</td><td>LEON, PEDRO</td><td>Passed everything.</td></tr><tr><td>2544</td><td>LOPEZ, WALDO</td><td>Passed everything.</td></tr><tr><td>4832</td><td>MAYA, JOHN</td><td>Passed everything.</td></tr><tr><td>9134</td><td>MOUSTAFA, AYMAN</td><td>Passed everything.</td></tr><tr><td>8118</td><td>PERALTA, COLLEEN</td><td>Passed everything.</td></tr><tr><td>1859</td><td>PEREZ, ESTEFANY</td><td>Passed everything.</td></tr><tr><td>1766</td><td>ROBERSON, ERVIN</td><td>Passed everything.</td></tr><tr><td>5947</td><td>SCHAPER, CARRIE</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 375-Topic-1 </td><td>(EDWARDS, MAURICE (8949))<BR>(GONZALEZ, VIRGINIA (6759))</td></tr><tr><td> 375-Topic-2 </td><td>(GONZALEZ, VIRGINIA (6759))</td></tr><tr><td> 375-Topic-3 </td><td>(GONZALEZ, VIRGINIA (6759))</td></tr><tr><td> 375-Topic-4 </td><td>(GONZALEZ, VIRGINIA (6759))</td></tr><tr><td> 375-Topic-5 </td><td>(GONZALEZ, VIRGINIA (6759))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
