#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>08</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>BEN_ZID_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3195</td><td>CONQUEST, ANDRE</td><td>Absent on the assessment test.</td></tr><tr><td>3527</td><td>ESPINOSA, HENRY</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>8077</td><td>GUADELOUPE, DAVID</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>8848</td><td>HUAYTA, ANTHONY</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>7193</td><td>IRIZARRY, KRYSTAL</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>4851</td><td>JEAN-LOUIS, JOHANNE</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-3<BR>103-topic-4<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>5299</td><td>LIN, YU</td><td>Absent on the assessment test.</td></tr><tr><td>6837</td><td>MARTINEZ, JAYMELIZ</td><td>Absent on the assessment test.</td></tr><tr><td>5775</td><td>MILLS, ALYSSA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>0453</td><td>NAPOLITANO, VINCENT</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>5436</td><td>PERSAUD, NIRMALA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>7872</td><td>RIVERA, TATIANA</td><td>Absent on the assessment test.</td></tr><tr><td>3860</td><td>RODRIGUEZ, CAROLINA</td><td>103-topic-2<BR>103-topic-5<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>1759</td><td>ROSADO, ERIC</td><td>103-topic-4<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>7766</td><td>SANTOS, SAMANTHA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>8705</td><td>SAWYER, LLOYD</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>8677</td><td>SINGH, BRIAN</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-4<BR>103-topic-5<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>2125</td><td>TEJEDA, VICTOR</td><td>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-9</td></tr><tr><td>8083</td><td>VELE, ANDREW</td><td>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-1 </td><td>(ESPINOSA, HENRY (3527))<BR>(GUADELOUPE, DAVID (8077))<BR>(HUAYTA, ANTHONY (8848))<BR>(IRIZARRY, KRYSTAL (7193))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(MILLS, ALYSSA (5775))<BR>(NAPOLITANO, VINCENT (0453))<BR>(PERSAUD, NIRMALA (5436))<BR>(SANTOS, SAMANTHA (7766))<BR>(SAWYER, LLOYD (8705))<BR>(SINGH, BRIAN (8677))</td></tr><tr><td> 103-topic-10 </td><td>(GUADELOUPE, DAVID (8077))<BR>(HUAYTA, ANTHONY (8848))<BR>(IRIZARRY, KRYSTAL (7193))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(MILLS, ALYSSA (5775))<BR>(NAPOLITANO, VINCENT (0453))<BR>(PERSAUD, NIRMALA (5436))<BR>(SANTOS, SAMANTHA (7766))<BR>(SAWYER, LLOYD (8705))<BR>(TEJEDA, VICTOR (2125))<BR>(VELE, ANDREW (8083))</td></tr><tr><td> 103-topic-2 </td><td>(ESPINOSA, HENRY (3527))<BR>(HUAYTA, ANTHONY (8848))<BR>(IRIZARRY, KRYSTAL (7193))<BR>(PERSAUD, NIRMALA (5436))<BR>(RODRIGUEZ, CAROLINA (3860))<BR>(SANTOS, SAMANTHA (7766))<BR>(SAWYER, LLOYD (8705))<BR>(SINGH, BRIAN (8677))<BR>(TEJEDA, VICTOR (2125))<BR>(VELE, ANDREW (8083))</td></tr><tr><td> 103-topic-3 </td><td>(ESPINOSA, HENRY (3527))<BR>(GUADELOUPE, DAVID (8077))<BR>(HUAYTA, ANTHONY (8848))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(SANTOS, SAMANTHA (7766))<BR>(SAWYER, LLOYD (8705))<BR>(TEJEDA, VICTOR (2125))<BR>(VELE, ANDREW (8083))</td></tr><tr><td> 103-topic-4 </td><td>(ESPINOSA, HENRY (3527))<BR>(GUADELOUPE, DAVID (8077))<BR>(HUAYTA, ANTHONY (8848))<BR>(IRIZARRY, KRYSTAL (7193))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(MILLS, ALYSSA (5775))<BR>(NAPOLITANO, VINCENT (0453))<BR>(PERSAUD, NIRMALA (5436))<BR>(ROSADO, ERIC (1759))<BR>(SANTOS, SAMANTHA (7766))<BR>(SINGH, BRIAN (8677))<BR>(TEJEDA, VICTOR (2125))<BR>(VELE, ANDREW (8083))</td></tr><tr><td> 103-topic-5 </td><td>(ESPINOSA, HENRY (3527))<BR>(GUADELOUPE, DAVID (8077))<BR>(HUAYTA, ANTHONY (8848))<BR>(IRIZARRY, KRYSTAL (7193))<BR>(NAPOLITANO, VINCENT (0453))<BR>(RODRIGUEZ, CAROLINA (3860))<BR>(SAWYER, LLOYD (8705))<BR>(SINGH, BRIAN (8677))<BR>(TEJEDA, VICTOR (2125))<BR>(VELE, ANDREW (8083))</td></tr><tr><td> 103-topic-6 </td><td>(ESPINOSA, HENRY (3527))<BR>(GUADELOUPE, DAVID (8077))<BR>(HUAYTA, ANTHONY (8848))<BR>(IRIZARRY, KRYSTAL (7193))<BR>(MILLS, ALYSSA (5775))<BR>(NAPOLITANO, VINCENT (0453))<BR>(PERSAUD, NIRMALA (5436))<BR>(SANTOS, SAMANTHA (7766))<BR>(SAWYER, LLOYD (8705))<BR>(TEJEDA, VICTOR (2125))<BR>(VELE, ANDREW (8083))</td></tr><tr><td> 103-topic-7 </td><td>(ESPINOSA, HENRY (3527))<BR>(GUADELOUPE, DAVID (8077))<BR>(HUAYTA, ANTHONY (8848))<BR>(IRIZARRY, KRYSTAL (7193))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(MILLS, ALYSSA (5775))<BR>(NAPOLITANO, VINCENT (0453))<BR>(PERSAUD, NIRMALA (5436))<BR>(RODRIGUEZ, CAROLINA (3860))<BR>(ROSADO, ERIC (1759))<BR>(SANTOS, SAMANTHA (7766))<BR>(SAWYER, LLOYD (8705))<BR>(SINGH, BRIAN (8677))<BR>(TEJEDA, VICTOR (2125))<BR>(VELE, ANDREW (8083))</td></tr><tr><td> 103-topic-8 </td><td>(ESPINOSA, HENRY (3527))<BR>(GUADELOUPE, DAVID (8077))<BR>(HUAYTA, ANTHONY (8848))<BR>(IRIZARRY, KRYSTAL (7193))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(MILLS, ALYSSA (5775))<BR>(NAPOLITANO, VINCENT (0453))<BR>(PERSAUD, NIRMALA (5436))<BR>(RODRIGUEZ, CAROLINA (3860))<BR>(ROSADO, ERIC (1759))<BR>(SANTOS, SAMANTHA (7766))<BR>(SAWYER, LLOYD (8705))<BR>(SINGH, BRIAN (8677))<BR>(VELE, ANDREW (8083))</td></tr><tr><td> 103-topic-9 </td><td>(ESPINOSA, HENRY (3527))<BR>(GUADELOUPE, DAVID (8077))<BR>(HUAYTA, ANTHONY (8848))<BR>(IRIZARRY, KRYSTAL (7193))<BR>(JEAN-LOUIS, JOHANNE (4851))<BR>(MILLS, ALYSSA (5775))<BR>(SANTOS, SAMANTHA (7766))<BR>(SAWYER, LLOYD (8705))<BR>(TEJEDA, VICTOR (2125))<BR>(VELE, ANDREW (8083))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>