#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 141 - PRE-CALCULUS (2006 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>141</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2006</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MANTHARAM_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7086</td><td>ABRAMS, HOLLY</td><td>Passed everything.</td></tr><tr><td>2268</td><td>ALVAREZ, NATALIE</td><td>Passed everything.</td></tr><tr><td>3189</td><td>APARICIO, ELIZABETH</td><td>Passed everything.</td></tr><tr><td>0408</td><td>CHIN, MONICA</td><td>Passed everything.</td></tr><tr><td>5862</td><td>COYOC, JULIE</td><td>Passed everything.</td></tr><tr><td>8201</td><td>FLEARY, KRISTINA</td><td>Passed everything.</td></tr><tr><td>3126</td><td>GU, JIALING</td><td>Passed everything.</td></tr><tr><td>4386</td><td>ISKAROS, JOHN</td><td>Passed everything.</td></tr><tr><td>0690</td><td>LARA, LENA</td><td>Passed everything.</td></tr><tr><td>5180</td><td>MAYER, ALEXANDRA</td><td>Passed everything.</td></tr><tr><td>5531</td><td>MORALES, CASSIE</td><td>Passed everything.</td></tr><tr><td>0872</td><td>NGAI, DANNY</td><td>Passed everything.</td></tr><tr><td>5802</td><td>PONS, ADAM</td><td>Passed everything.</td></tr><tr><td>6147</td><td>SALEM, OSAMAH</td><td>Passed everything.</td></tr><tr><td>4742</td><td>SCHUPBACH, ARTHUR</td><td>Passed everything.</td></tr><tr><td>5772</td><td>SHALODI, JEHAD</td><td>Passed everything.</td></tr><tr><td>8606</td><td>SINGLETON, JENNIFER</td><td>Passed everything.</td></tr><tr><td>4870</td><td>VALDEZ, JOEAMY</td><td>Passed everything.</td></tr><tr><td>5251</td><td>VARGAS, CHRISTINE</td><td>Passed everything.</td></tr><tr><td>1466</td><td>WAIGUCHU, THERESA</td><td>Passed everything.</td></tr><tr><td>8334</td><td>WROBEL, MALGORZATA</td><td>Passed everything.</td></tr><tr><td>4238</td><td>YAN, JONATHAN</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> Exponential functions and their graphs, compound interest </td><td>Everyone passed.</td></tr><tr><td> Function definition, notation, vertical line test </td><td>Everyone passed.</td></tr><tr><td> Polynomial functions and their graphs </td><td>Everyone passed.</td></tr><tr><td> Solving for variable in basic equations: linear, nonlinear, fractional exponents </td><td>Everyone passed.</td></tr><tr><td> Solving quadratic equations by factoring, completing the square, quadratic formula, discriminant </td><td>Everyone passed.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
