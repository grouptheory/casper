#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>13</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>GREEN_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9445</td><td>ASTORGA, THEO</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>2000</td><td>BLACKWELL, STEPHEN</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>4890</td><td>BRANDAO, NICOLE</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>8145</td><td>BURROUGHS-JOHNSON, SONJA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>5774</td><td>BUTLER, JASMINE</td><td>Absent on the assessment test.</td></tr><tr><td>6912</td><td>COOK, SARAH</td><td>103-topic-1<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>0570</td><td>CORREA, ANGELICA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>4993</td><td>DELUNA, HELEN</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>6837</td><td>EARLY, RAQUELLE</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>7230</td><td>FLORES, JOEL</td><td>103-topic-10<BR>103-topic-3<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>7519</td><td>KHATUN, ROSNA</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-4</td></tr><tr><td>6333</td><td>LOZANO, DAISY</td><td>103-topic-2<BR>103-topic-5<BR>103-topic-6<BR>103-topic-8</td></tr><tr><td>5133</td><td>MARTINEZ, ISSIBELL</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>8294</td><td>MASSIAH, CALVIN</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>7303</td><td>MELENDEZ, PEDRO</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>3150</td><td>PAULINO, JHOELDI</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>4883</td><td>PERRONE, MATTHEW</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>0899</td><td>RAMOS, CARLOS</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>7201</td><td>REED, ASIA</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>7652</td><td>SAHAI, SHEENA</td><td>103-topic-10<BR>103-topic-6<BR>103-topic-8</td></tr><tr><td>4343</td><td>WESTBROOK, EDWIN</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-1 </td><td>(ASTORGA, THEO (9445))<BR>(BLACKWELL, STEPHEN (2000))<BR>(BRANDAO, NICOLE (4890))<BR>(BURROUGHS-JOHNSON, SONJA (8145))<BR>(COOK, SARAH (6912))<BR>(CORREA, ANGELICA (0570))<BR>(DELUNA, HELEN (4993))<BR>(EARLY, RAQUELLE (6837))<BR>(KHATUN, ROSNA (7519))<BR>(MARTINEZ, ISSIBELL (5133))<BR>(MASSIAH, CALVIN (8294))<BR>(MELENDEZ, PEDRO (7303))<BR>(PAULINO, JHOELDI (3150))<BR>(PERRONE, MATTHEW (4883))<BR>(RAMOS, CARLOS (0899))<BR>(REED, ASIA (7201))<BR>(WESTBROOK, EDWIN (4343))</td></tr><tr><td> 103-topic-10 </td><td>(ASTORGA, THEO (9445))<BR>(BURROUGHS-JOHNSON, SONJA (8145))<BR>(CORREA, ANGELICA (0570))<BR>(DELUNA, HELEN (4993))<BR>(EARLY, RAQUELLE (6837))<BR>(FLORES, JOEL (7230))<BR>(MARTINEZ, ISSIBELL (5133))<BR>(MASSIAH, CALVIN (8294))<BR>(MELENDEZ, PEDRO (7303))<BR>(PAULINO, JHOELDI (3150))<BR>(PERRONE, MATTHEW (4883))<BR>(SAHAI, SHEENA (7652))</td></tr><tr><td> 103-topic-2 </td><td>(ASTORGA, THEO (9445))<BR>(BLACKWELL, STEPHEN (2000))<BR>(BRANDAO, NICOLE (4890))<BR>(BURROUGHS-JOHNSON, SONJA (8145))<BR>(CORREA, ANGELICA (0570))<BR>(DELUNA, HELEN (4993))<BR>(EARLY, RAQUELLE (6837))<BR>(KHATUN, ROSNA (7519))<BR>(LOZANO, DAISY (6333))<BR>(MARTINEZ, ISSIBELL (5133))<BR>(MASSIAH, CALVIN (8294))<BR>(MELENDEZ, PEDRO (7303))<BR>(PAULINO, JHOELDI (3150))<BR>(PERRONE, MATTHEW (4883))<BR>(RAMOS, CARLOS (0899))<BR>(REED, ASIA (7201))<BR>(WESTBROOK, EDWIN (4343))</td></tr><tr><td> 103-topic-3 </td><td>(ASTORGA, THEO (9445))<BR>(BLACKWELL, STEPHEN (2000))<BR>(BURROUGHS-JOHNSON, SONJA (8145))<BR>(COOK, SARAH (6912))<BR>(CORREA, ANGELICA (0570))<BR>(DELUNA, HELEN (4993))<BR>(EARLY, RAQUELLE (6837))<BR>(FLORES, JOEL (7230))<BR>(MARTINEZ, ISSIBELL (5133))<BR>(MASSIAH, CALVIN (8294))<BR>(MELENDEZ, PEDRO (7303))<BR>(PAULINO, JHOELDI (3150))<BR>(PERRONE, MATTHEW (4883))<BR>(RAMOS, CARLOS (0899))<BR>(REED, ASIA (7201))<BR>(WESTBROOK, EDWIN (4343))</td></tr><tr><td> 103-topic-4 </td><td>(ASTORGA, THEO (9445))<BR>(BRANDAO, NICOLE (4890))<BR>(BURROUGHS-JOHNSON, SONJA (8145))<BR>(COOK, SARAH (6912))<BR>(DELUNA, HELEN (4993))<BR>(EARLY, RAQUELLE (6837))<BR>(KHATUN, ROSNA (7519))<BR>(MARTINEZ, ISSIBELL (5133))<BR>(MASSIAH, CALVIN (8294))<BR>(MELENDEZ, PEDRO (7303))<BR>(PAULINO, JHOELDI (3150))<BR>(PERRONE, MATTHEW (4883))<BR>(RAMOS, CARLOS (0899))<BR>(REED, ASIA (7201))<BR>(WESTBROOK, EDWIN (4343))</td></tr><tr><td> 103-topic-5 </td><td>(ASTORGA, THEO (9445))<BR>(BRANDAO, NICOLE (4890))<BR>(BURROUGHS-JOHNSON, SONJA (8145))<BR>(CORREA, ANGELICA (0570))<BR>(DELUNA, HELEN (4993))<BR>(EARLY, RAQUELLE (6837))<BR>(LOZANO, DAISY (6333))<BR>(MARTINEZ, ISSIBELL (5133))<BR>(MASSIAH, CALVIN (8294))<BR>(MELENDEZ, PEDRO (7303))<BR>(PERRONE, MATTHEW (4883))<BR>(RAMOS, CARLOS (0899))</td></tr><tr><td> 103-topic-6 </td><td>(ASTORGA, THEO (9445))<BR>(BLACKWELL, STEPHEN (2000))<BR>(BRANDAO, NICOLE (4890))<BR>(BURROUGHS-JOHNSON, SONJA (8145))<BR>(COOK, SARAH (6912))<BR>(CORREA, ANGELICA (0570))<BR>(DELUNA, HELEN (4993))<BR>(EARLY, RAQUELLE (6837))<BR>(FLORES, JOEL (7230))<BR>(LOZANO, DAISY (6333))<BR>(MARTINEZ, ISSIBELL (5133))<BR>(MASSIAH, CALVIN (8294))<BR>(MELENDEZ, PEDRO (7303))<BR>(PAULINO, JHOELDI (3150))<BR>(PERRONE, MATTHEW (4883))<BR>(REED, ASIA (7201))<BR>(SAHAI, SHEENA (7652))<BR>(WESTBROOK, EDWIN (4343))</td></tr><tr><td> 103-topic-7 </td><td>(ASTORGA, THEO (9445))<BR>(BLACKWELL, STEPHEN (2000))<BR>(BRANDAO, NICOLE (4890))<BR>(BURROUGHS-JOHNSON, SONJA (8145))<BR>(COOK, SARAH (6912))<BR>(CORREA, ANGELICA (0570))<BR>(DELUNA, HELEN (4993))<BR>(EARLY, RAQUELLE (6837))<BR>(FLORES, JOEL (7230))<BR>(MARTINEZ, ISSIBELL (5133))<BR>(MASSIAH, CALVIN (8294))<BR>(MELENDEZ, PEDRO (7303))<BR>(PAULINO, JHOELDI (3150))<BR>(PERRONE, MATTHEW (4883))<BR>(REED, ASIA (7201))<BR>(WESTBROOK, EDWIN (4343))</td></tr><tr><td> 103-topic-8 </td><td>(ASTORGA, THEO (9445))<BR>(BLACKWELL, STEPHEN (2000))<BR>(BRANDAO, NICOLE (4890))<BR>(BURROUGHS-JOHNSON, SONJA (8145))<BR>(COOK, SARAH (6912))<BR>(CORREA, ANGELICA (0570))<BR>(DELUNA, HELEN (4993))<BR>(EARLY, RAQUELLE (6837))<BR>(FLORES, JOEL (7230))<BR>(LOZANO, DAISY (6333))<BR>(MARTINEZ, ISSIBELL (5133))<BR>(MASSIAH, CALVIN (8294))<BR>(MELENDEZ, PEDRO (7303))<BR>(PAULINO, JHOELDI (3150))<BR>(PERRONE, MATTHEW (4883))<BR>(RAMOS, CARLOS (0899))<BR>(REED, ASIA (7201))<BR>(SAHAI, SHEENA (7652))<BR>(WESTBROOK, EDWIN (4343))</td></tr><tr><td> 103-topic-9 </td><td>(BURROUGHS-JOHNSON, SONJA (8145))<BR>(DELUNA, HELEN (4993))<BR>(FLORES, JOEL (7230))<BR>(MARTINEZ, ISSIBELL (5133))<BR>(MASSIAH, CALVIN (8294))<BR>(MELENDEZ, PEDRO (7303))<BR>(PAULINO, JHOELDI (3150))<BR>(RAMOS, CARLOS (0899))<BR>(WESTBROOK, EDWIN (4343))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>