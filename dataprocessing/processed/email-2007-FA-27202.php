#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 272 - OBJECT_ORIENTED_PROG (2007 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>272</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2007</td></tr><tr><td align='center'>Prof.</td> <td align='center'>CHEN_WEIFENG</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>5469</td><td>BAK, RYSZARD</td><td>C++ Functions</td></tr><tr><td>8233</td><td>BHOGE, SUNITA</td><td>C++ Input and Output</td></tr><tr><td>1926</td><td>BONCAMPER, NICHOLAS</td><td>C++ Loops, Decisions</td></tr><tr><td>8949</td><td>EDWARDS, MAURICE</td><td>C++ Arrays<BR>C++ Functions<BR>C++ Input and Output<BR>C++ Loops, Decisions<BR>C++ Pointers</td></tr><tr><td>9758</td><td>JAQUEZ, JESSICA</td><td>Passed everything.</td></tr><tr><td>6153</td><td>KOUZOUNAS, NICHOLAS</td><td>Passed everything.</td></tr><tr><td>9023</td><td>LOPEZ, ANACAONA</td><td>Passed everything.</td></tr><tr><td>7849</td><td>MCMULLEN, JACOB</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> C++ Arrays </td><td>(EDWARDS, MAURICE (8949))</td></tr><tr><td> C++ Functions </td><td>(BAK, RYSZARD (5469))<BR>(EDWARDS, MAURICE (8949))</td></tr><tr><td> C++ Input and Output </td><td>(BHOGE, SUNITA (8233))<BR>(EDWARDS, MAURICE (8949))</td></tr><tr><td> C++ Loops, Decisions </td><td>(BONCAMPER, NICHOLAS (1926))<BR>(EDWARDS, MAURICE (8949))</td></tr><tr><td> C++ Pointers </td><td>(EDWARDS, MAURICE (8949))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
