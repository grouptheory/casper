#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 377 - COMPUTER_ALGORITHMS (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>377</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MANTHARAM_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1746</td><td>BATISTA, WILLIAM</td><td>377-topic-1<BR>377-topic-2<BR>377-topic-3<BR>377-topic-4<BR>377-topic-5</td></tr><tr><td>6053</td><td>BHUNUT, KEVIN</td><td>377-topic-2<BR>377-topic-4<BR>377-topic-5</td></tr><tr><td>5410</td><td>BOWNS, MARCUS</td><td>377-topic-2<BR>377-topic-3<BR>377-topic-4<BR>377-topic-5</td></tr><tr><td>6940</td><td>COLLINS, HARRY</td><td>377-topic-1<BR>377-topic-2<BR>377-topic-3<BR>377-topic-4<BR>377-topic-5</td></tr><tr><td>6414</td><td>GOMEZ, JULIO</td><td>Absent on the assessment test.</td></tr><tr><td>6759</td><td>GONZALEZ, VIRGINIA</td><td>377-topic-1<BR>377-topic-2<BR>377-topic-3<BR>377-topic-4<BR>377-topic-5</td></tr><tr><td>6493</td><td>GROCHAL, TOMASZ</td><td>Absent on the assessment test.</td></tr><tr><td>9758</td><td>JAQUEZ, JESSICA</td><td>377-topic-1<BR>377-topic-2<BR>377-topic-3<BR>377-topic-4<BR>377-topic-5</td></tr><tr><td>8794</td><td>KHAN, NAJIB</td><td>377-topic-1<BR>377-topic-2<BR>377-topic-3<BR>377-topic-4<BR>377-topic-5</td></tr><tr><td>4788</td><td>PASSANDO, NICHOLAS</td><td>377-topic-1<BR>377-topic-2<BR>377-topic-3<BR>377-topic-4<BR>377-topic-5</td></tr><tr><td>9502</td><td>ROBAN, DESIREE_ANN</td><td>Absent on the assessment test.</td></tr><tr><td>0248</td><td>SUKHOO, ANDY</td><td>377-topic-2<BR>377-topic-3<BR>377-topic-4<BR>377-topic-5</td></tr><tr><td>9200</td><td>VASQUEZ, BONITA</td><td>377-topic-1<BR>377-topic-2<BR>377-topic-3<BR>377-topic-4<BR>377-topic-5</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 377-topic-1 </td><td>(BATISTA, WILLIAM (1746))<BR>(COLLINS, HARRY (6940))<BR>(GONZALEZ, VIRGINIA (6759))<BR>(JAQUEZ, JESSICA (9758))<BR>(KHAN, NAJIB (8794))<BR>(PASSANDO, NICHOLAS (4788))<BR>(VASQUEZ, BONITA (9200))</td></tr><tr><td> 377-topic-2 </td><td>(BATISTA, WILLIAM (1746))<BR>(BHUNUT, KEVIN (6053))<BR>(BOWNS, MARCUS (5410))<BR>(COLLINS, HARRY (6940))<BR>(GONZALEZ, VIRGINIA (6759))<BR>(JAQUEZ, JESSICA (9758))<BR>(KHAN, NAJIB (8794))<BR>(PASSANDO, NICHOLAS (4788))<BR>(SUKHOO, ANDY (0248))<BR>(VASQUEZ, BONITA (9200))</td></tr><tr><td> 377-topic-3 </td><td>(BATISTA, WILLIAM (1746))<BR>(BOWNS, MARCUS (5410))<BR>(COLLINS, HARRY (6940))<BR>(GONZALEZ, VIRGINIA (6759))<BR>(JAQUEZ, JESSICA (9758))<BR>(KHAN, NAJIB (8794))<BR>(PASSANDO, NICHOLAS (4788))<BR>(SUKHOO, ANDY (0248))<BR>(VASQUEZ, BONITA (9200))</td></tr><tr><td> 377-topic-4 </td><td>(BATISTA, WILLIAM (1746))<BR>(BHUNUT, KEVIN (6053))<BR>(BOWNS, MARCUS (5410))<BR>(COLLINS, HARRY (6940))<BR>(GONZALEZ, VIRGINIA (6759))<BR>(JAQUEZ, JESSICA (9758))<BR>(KHAN, NAJIB (8794))<BR>(PASSANDO, NICHOLAS (4788))<BR>(SUKHOO, ANDY (0248))<BR>(VASQUEZ, BONITA (9200))</td></tr><tr><td> 377-topic-5 </td><td>(BATISTA, WILLIAM (1746))<BR>(BHUNUT, KEVIN (6053))<BR>(BOWNS, MARCUS (5410))<BR>(COLLINS, HARRY (6940))<BR>(GONZALEZ, VIRGINIA (6759))<BR>(JAQUEZ, JESSICA (9758))<BR>(KHAN, NAJIB (8794))<BR>(PASSANDO, NICHOLAS (4788))<BR>(SUKHOO, ANDY (0248))<BR>(VASQUEZ, BONITA (9200))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>