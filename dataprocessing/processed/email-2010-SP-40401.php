#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 404 - INTERN_MIS (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>404</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>GRAFF_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1106</td><td>BURGOS, ANEUDYS</td><td>404-topic-01<BR>404-topic-02<BR>404-topic-04<BR>404-topic-05</td></tr><tr><td>0850</td><td>CRISP, DJONIQUE</td><td>404-topic-01<BR>404-topic-02<BR>404-topic-03<BR>404-topic-04<BR>404-topic-05</td></tr><tr><td>2547</td><td>DAWES, FRANKLIN</td><td>404-topic-01<BR>404-topic-04<BR>404-topic-05</td></tr><tr><td>9758</td><td>JAQUEZ, JESSICA</td><td>404-topic-01<BR>404-topic-02<BR>404-topic-04<BR>404-topic-05</td></tr><tr><td>8794</td><td>KHAN, NAJIB</td><td>Absent on the assessment test.</td></tr><tr><td>3101</td><td>LEON, PEDRO</td><td>404-topic-01<BR>404-topic-02<BR>404-topic-03<BR>404-topic-04<BR>404-topic-05</td></tr><tr><td>0371</td><td>LOPEZ, FELIX</td><td>Absent on the assessment test.</td></tr><tr><td>2439</td><td>MADAR, FERENC</td><td>404-topic-01<BR>404-topic-02<BR>404-topic-04<BR>404-topic-05</td></tr><tr><td>9200</td><td>VASQUEZ, BONITA</td><td>404-topic-01<BR>404-topic-02<BR>404-topic-04<BR>404-topic-05</td></tr><tr><td>1595</td><td>YUAN, YIKO</td><td>404-topic-01<BR>404-topic-02<BR>404-topic-04<BR>404-topic-05</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 404-topic-01 </td><td>(BURGOS, ANEUDYS (1106))<BR>(CRISP, DJONIQUE (0850))<BR>(DAWES, FRANKLIN (2547))<BR>(JAQUEZ, JESSICA (9758))<BR>(LEON, PEDRO (3101))<BR>(MADAR, FERENC (2439))<BR>(VASQUEZ, BONITA (9200))<BR>(YUAN, YIKO (1595))</td></tr><tr><td> 404-topic-02 </td><td>(BURGOS, ANEUDYS (1106))<BR>(CRISP, DJONIQUE (0850))<BR>(JAQUEZ, JESSICA (9758))<BR>(LEON, PEDRO (3101))<BR>(MADAR, FERENC (2439))<BR>(VASQUEZ, BONITA (9200))<BR>(YUAN, YIKO (1595))</td></tr><tr><td> 404-topic-03 </td><td>(CRISP, DJONIQUE (0850))<BR>(LEON, PEDRO (3101))</td></tr><tr><td> 404-topic-04 </td><td>(BURGOS, ANEUDYS (1106))<BR>(CRISP, DJONIQUE (0850))<BR>(DAWES, FRANKLIN (2547))<BR>(JAQUEZ, JESSICA (9758))<BR>(LEON, PEDRO (3101))<BR>(MADAR, FERENC (2439))<BR>(VASQUEZ, BONITA (9200))<BR>(YUAN, YIKO (1595))</td></tr><tr><td> 404-topic-05 </td><td>(BURGOS, ANEUDYS (1106))<BR>(CRISP, DJONIQUE (0850))<BR>(DAWES, FRANKLIN (2547))<BR>(JAQUEZ, JESSICA (9758))<BR>(LEON, PEDRO (3101))<BR>(MADAR, FERENC (2439))<BR>(VASQUEZ, BONITA (9200))<BR>(YUAN, YIKO (1595))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
