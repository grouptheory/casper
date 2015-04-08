#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 141 - PRE-CALCULUS (2006 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>141</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>06</td></tr><tr><td align='center'>Year</td> <td align='center'>2006</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MANTHARAM_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1420</td><td>AIME, CLAUDINE</td><td>Passed everything.</td></tr><tr><td>8589</td><td>CABALLERO, MARTIN</td><td>Passed everything.</td></tr><tr><td>3831</td><td>CREQUE, CLIFFTON</td><td>Passed everything.</td></tr><tr><td>8097</td><td>DIRLIK, FUNDA</td><td>Passed everything.</td></tr><tr><td>9101</td><td>DONG, DENNIS</td><td>Passed everything.</td></tr><tr><td>7330</td><td>EACK, JUSTIN</td><td>Passed everything.</td></tr><tr><td>7253</td><td>ESPINOSA, EDGAR</td><td>Passed everything.</td></tr><tr><td>7206</td><td>GRIFFITHS, NICOLE</td><td>Passed everything.</td></tr><tr><td>9372</td><td>GRINGUT, ROMAN</td><td>Passed everything.</td></tr><tr><td>2130</td><td>HENTON, DAAIYAH</td><td>Passed everything.</td></tr><tr><td>6426</td><td>JIMENEZ, MIGUEL</td><td>Passed everything.</td></tr><tr><td>2037</td><td>LIPEL, EUGENE</td><td>Passed everything.</td></tr><tr><td>4579</td><td>LUKASIEWICZ, ELAAN</td><td>Passed everything.</td></tr><tr><td>9672</td><td>MCCLEAN, ASCHELLE</td><td>Passed everything.</td></tr><tr><td>6861</td><td>PAIK, DANIEL</td><td>Passed everything.</td></tr><tr><td>4595</td><td>PERSAUD, AMRITA</td><td>Passed everything.</td></tr><tr><td>6280</td><td>RICHARD, KAREN</td><td>Passed everything.</td></tr><tr><td>1915</td><td>RODRIGUEZ, FRANCIS</td><td>Passed everything.</td></tr><tr><td>4494</td><td>SANTANA, YAHAIRA</td><td>Passed everything.</td></tr><tr><td>3072</td><td>ST.JOHN, BAYNE-ALEXANDE</td><td>Passed everything.</td></tr><tr><td>1233</td><td>VARGAS, CAROLINA</td><td>Passed everything.</td></tr><tr><td>5795</td><td>VILLAFANE, REINOLD</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> Exponential functions and their graphs, compound interest </td><td>Everyone passed.</td></tr><tr><td> Function definition, notation, vertical line test </td><td>Everyone passed.</td></tr><tr><td> Polynomial functions and their graphs </td><td>Everyone passed.</td></tr><tr><td> Solving for variable in basic equations: linear, nonlinear, fractional exponents </td><td>Everyone passed.</td></tr><tr><td> Solving quadratic equations by factoring, completing the square, quadratic formula, discriminant </td><td>Everyone passed.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
