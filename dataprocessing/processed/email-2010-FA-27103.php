#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 271 - INTRO_COMPUTANDPROG (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>271</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>03</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KAN_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1388</td><td>ALVAYERO, EVELYN</td><td>271-topic-03<BR>271-topic-04</td></tr><tr><td>3157</td><td>AMANKWAH, RICHARD</td><td>271-topic-01</td></tr><tr><td>0764</td><td>AMBARSOM, TATIANA</td><td>Passed everything.</td></tr><tr><td>0752</td><td>BELL, CAESAR</td><td>Passed everything.</td></tr><tr><td>7051</td><td>CHEUNG, LOUISE</td><td>271-topic-02<BR>271-topic-03<BR>271-topic-04</td></tr><tr><td>4978</td><td>ESSERTIER, TYLER</td><td>271-topic-02</td></tr><tr><td>7076</td><td>GUARACHI, RODRIGO</td><td>Passed everything.</td></tr><tr><td>5073</td><td>LAAFAR, REDOUANE</td><td>Passed everything.</td></tr><tr><td>9733</td><td>LOKENAUTH, MATTHEW</td><td>Passed everything.</td></tr><tr><td>2752</td><td>MARK, TIMOTHY</td><td>Passed everything.</td></tr><tr><td>2046</td><td>MARTINEZ, ENID</td><td>Passed everything.</td></tr><tr><td>4018</td><td>MATOS_ORTEGA, CRISTOPHER</td><td>271-topic-02<BR>271-topic-04</td></tr><tr><td>5558</td><td>MOORE, ROBERT</td><td>Passed everything.</td></tr><tr><td>4051</td><td>PALAIA, THOMAS</td><td>Passed everything.</td></tr><tr><td>5961</td><td>PEREZ, SHERRY</td><td>271-topic-02<BR>271-topic-03<BR>271-topic-04</td></tr><tr><td>3123</td><td>QUILES, BENNY</td><td>Passed everything.</td></tr><tr><td>4226</td><td>REID, JESSUP</td><td>Passed everything.</td></tr><tr><td>4045</td><td>THOMAS, DANEA</td><td>271-topic-05</td></tr><tr><td>9132</td><td>VASILETS, ELIJAH</td><td>271-topic-01</td></tr><tr><td>5624</td><td>VENTURINI, LAURA-ANN</td><td>271-topic-02<BR>271-topic-04</td></tr><tr><td>0320</td><td>WONG, SHELON</td><td>Passed everything.</td></tr><tr><td>8732</td><td>YEE, ALAN</td><td>271-topic-03</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 271-topic-01 </td><td>(AMANKWAH, RICHARD (3157))<BR>(VASILETS, ELIJAH (9132))</td></tr><tr><td> 271-topic-02 </td><td>(CHEUNG, LOUISE (7051))<BR>(ESSERTIER, TYLER (4978))<BR>(MATOS_ORTEGA, CRISTOPHER (4018))<BR>(PEREZ, SHERRY (5961))<BR>(VENTURINI, LAURA-ANN (5624))</td></tr><tr><td> 271-topic-03 </td><td>(ALVAYERO, EVELYN (1388))<BR>(CHEUNG, LOUISE (7051))<BR>(PEREZ, SHERRY (5961))<BR>(YEE, ALAN (8732))</td></tr><tr><td> 271-topic-04 </td><td>(ALVAYERO, EVELYN (1388))<BR>(CHEUNG, LOUISE (7051))<BR>(MATOS_ORTEGA, CRISTOPHER (4018))<BR>(PEREZ, SHERRY (5961))<BR>(VENTURINI, LAURA-ANN (5624))</td></tr><tr><td> 271-topic-05 </td><td>(THOMAS, DANEA (4045))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
