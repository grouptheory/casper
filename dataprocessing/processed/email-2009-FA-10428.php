#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>28</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SAMUEL_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7445</td><td>AN, JEONG</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>3488</td><td>BUSTAMANTE, KATHERINE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-6</td></tr><tr><td>9113</td><td>CAVA, MATTHEW</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>0700</td><td>CHUNG, DAVID</td><td>Absent on the assessment test.</td></tr><tr><td>0400</td><td>CIACCIO, MICHAEL</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>5507</td><td>FINN, TIMOTHY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-7</td></tr><tr><td>9980</td><td>FLETCHER, JIZELL</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>5636</td><td>JU, YOUNGCHUL</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-9</td></tr><tr><td>4253</td><td>KHOMENKO, VIKTORIYA</td><td>104-topic-1<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>3287</td><td>LALL, RICARDO</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>2446</td><td>LORA, ELIANA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>5263</td><td>MALDONADO, EVA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>9784</td><td>MARATTA, MICHAEL</td><td>Absent on the assessment test.</td></tr><tr><td>5364</td><td>MENA, NELSON</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>8077</td><td>MONTALVO, JOSEPH</td><td>104-topic-10<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>8367</td><td>MORALES, KEVIN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>0149</td><td>MORONTA, DIORIS</td><td>Absent on the assessment test.</td></tr><tr><td>8334</td><td>NAPOLI, JONATHAN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>1101</td><td>OLSEN, RYAN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>6285</td><td>PAGAN, JULISSA</td><td>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>8058</td><td>RAMIREZ, DIANA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>1731</td><td>RIVERA, ASHLEY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-9</td></tr><tr><td>7570</td><td>RODRIGUEZ, FRANKLYN</td><td>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>8309</td><td>SALAS, ENDERSON</td><td>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>6012</td><td>VENEGAS, DANIELA</td><td>Absent on the assessment test.</td></tr><tr><td>8249</td><td>ZEMSKOV, KIRILL</td><td>104-topic-1<BR>104-topic-5<BR>104-topic-6</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(AN, JEONG (7445))<BR>(BUSTAMANTE, KATHERINE (3488))<BR>(CAVA, MATTHEW (9113))<BR>(CIACCIO, MICHAEL (0400))<BR>(FINN, TIMOTHY (5507))<BR>(FLETCHER, JIZELL (9980))<BR>(JU, YOUNGCHUL (5636))<BR>(KHOMENKO, VIKTORIYA (4253))<BR>(LALL, RICARDO (3287))<BR>(LORA, ELIANA (2446))<BR>(MALDONADO, EVA (5263))<BR>(MENA, NELSON (5364))<BR>(MORALES, KEVIN (8367))<BR>(NAPOLI, JONATHAN (8334))<BR>(OLSEN, RYAN (1101))<BR>(RAMIREZ, DIANA (8058))<BR>(RIVERA, ASHLEY (1731))<BR>(ZEMSKOV, KIRILL (8249))</td></tr><tr><td> 104-topic-10 </td><td>(AN, JEONG (7445))<BR>(BUSTAMANTE, KATHERINE (3488))<BR>(CAVA, MATTHEW (9113))<BR>(CIACCIO, MICHAEL (0400))<BR>(FINN, TIMOTHY (5507))<BR>(FLETCHER, JIZELL (9980))<BR>(JU, YOUNGCHUL (5636))<BR>(LALL, RICARDO (3287))<BR>(LORA, ELIANA (2446))<BR>(MALDONADO, EVA (5263))<BR>(MENA, NELSON (5364))<BR>(MONTALVO, JOSEPH (8077))<BR>(MORALES, KEVIN (8367))<BR>(NAPOLI, JONATHAN (8334))<BR>(OLSEN, RYAN (1101))<BR>(PAGAN, JULISSA (6285))<BR>(RAMIREZ, DIANA (8058))<BR>(RIVERA, ASHLEY (1731))<BR>(RODRIGUEZ, FRANKLYN (7570))<BR>(SALAS, ENDERSON (8309))</td></tr><tr><td> 104-topic-2 </td><td>(AN, JEONG (7445))<BR>(CAVA, MATTHEW (9113))<BR>(FLETCHER, JIZELL (9980))<BR>(LALL, RICARDO (3287))<BR>(MALDONADO, EVA (5263))<BR>(MENA, NELSON (5364))<BR>(MORALES, KEVIN (8367))<BR>(NAPOLI, JONATHAN (8334))<BR>(OLSEN, RYAN (1101))<BR>(PAGAN, JULISSA (6285))</td></tr><tr><td> 104-topic-3 </td><td>(BUSTAMANTE, KATHERINE (3488))<BR>(CAVA, MATTHEW (9113))<BR>(CIACCIO, MICHAEL (0400))<BR>(FINN, TIMOTHY (5507))<BR>(JU, YOUNGCHUL (5636))<BR>(LALL, RICARDO (3287))<BR>(LORA, ELIANA (2446))<BR>(MALDONADO, EVA (5263))<BR>(NAPOLI, JONATHAN (8334))<BR>(OLSEN, RYAN (1101))<BR>(PAGAN, JULISSA (6285))<BR>(RAMIREZ, DIANA (8058))<BR>(RIVERA, ASHLEY (1731))<BR>(RODRIGUEZ, FRANKLYN (7570))<BR>(SALAS, ENDERSON (8309))</td></tr><tr><td> 104-topic-4 </td><td>(AN, JEONG (7445))<BR>(CAVA, MATTHEW (9113))<BR>(CIACCIO, MICHAEL (0400))<BR>(FINN, TIMOTHY (5507))<BR>(FLETCHER, JIZELL (9980))<BR>(JU, YOUNGCHUL (5636))<BR>(LALL, RICARDO (3287))<BR>(LORA, ELIANA (2446))<BR>(MALDONADO, EVA (5263))<BR>(MENA, NELSON (5364))<BR>(MORALES, KEVIN (8367))<BR>(NAPOLI, JONATHAN (8334))<BR>(OLSEN, RYAN (1101))<BR>(PAGAN, JULISSA (6285))<BR>(RAMIREZ, DIANA (8058))<BR>(RIVERA, ASHLEY (1731))<BR>(RODRIGUEZ, FRANKLYN (7570))<BR>(SALAS, ENDERSON (8309))</td></tr><tr><td> 104-topic-5 </td><td>(AN, JEONG (7445))<BR>(CAVA, MATTHEW (9113))<BR>(CIACCIO, MICHAEL (0400))<BR>(FINN, TIMOTHY (5507))<BR>(FLETCHER, JIZELL (9980))<BR>(JU, YOUNGCHUL (5636))<BR>(KHOMENKO, VIKTORIYA (4253))<BR>(LALL, RICARDO (3287))<BR>(LORA, ELIANA (2446))<BR>(MENA, NELSON (5364))<BR>(MORALES, KEVIN (8367))<BR>(NAPOLI, JONATHAN (8334))<BR>(OLSEN, RYAN (1101))<BR>(PAGAN, JULISSA (6285))<BR>(RAMIREZ, DIANA (8058))<BR>(RIVERA, ASHLEY (1731))<BR>(SALAS, ENDERSON (8309))<BR>(ZEMSKOV, KIRILL (8249))</td></tr><tr><td> 104-topic-6 </td><td>(AN, JEONG (7445))<BR>(BUSTAMANTE, KATHERINE (3488))<BR>(CAVA, MATTHEW (9113))<BR>(CIACCIO, MICHAEL (0400))<BR>(FLETCHER, JIZELL (9980))<BR>(KHOMENKO, VIKTORIYA (4253))<BR>(LALL, RICARDO (3287))<BR>(LORA, ELIANA (2446))<BR>(MALDONADO, EVA (5263))<BR>(MENA, NELSON (5364))<BR>(MONTALVO, JOSEPH (8077))<BR>(MORALES, KEVIN (8367))<BR>(NAPOLI, JONATHAN (8334))<BR>(OLSEN, RYAN (1101))<BR>(PAGAN, JULISSA (6285))<BR>(RAMIREZ, DIANA (8058))<BR>(RIVERA, ASHLEY (1731))<BR>(RODRIGUEZ, FRANKLYN (7570))<BR>(SALAS, ENDERSON (8309))<BR>(ZEMSKOV, KIRILL (8249))</td></tr><tr><td> 104-topic-7 </td><td>(AN, JEONG (7445))<BR>(CAVA, MATTHEW (9113))<BR>(FINN, TIMOTHY (5507))<BR>(FLETCHER, JIZELL (9980))<BR>(KHOMENKO, VIKTORIYA (4253))<BR>(LALL, RICARDO (3287))<BR>(LORA, ELIANA (2446))<BR>(MALDONADO, EVA (5263))<BR>(MENA, NELSON (5364))<BR>(MONTALVO, JOSEPH (8077))<BR>(MORALES, KEVIN (8367))<BR>(NAPOLI, JONATHAN (8334))<BR>(OLSEN, RYAN (1101))<BR>(PAGAN, JULISSA (6285))<BR>(RAMIREZ, DIANA (8058))<BR>(RODRIGUEZ, FRANKLYN (7570))<BR>(SALAS, ENDERSON (8309))</td></tr><tr><td> 104-topic-8 </td><td>(CAVA, MATTHEW (9113))<BR>(CIACCIO, MICHAEL (0400))<BR>(FLETCHER, JIZELL (9980))<BR>(LALL, RICARDO (3287))<BR>(MALDONADO, EVA (5263))<BR>(MENA, NELSON (5364))<BR>(MORALES, KEVIN (8367))<BR>(OLSEN, RYAN (1101))<BR>(PAGAN, JULISSA (6285))<BR>(RAMIREZ, DIANA (8058))</td></tr><tr><td> 104-topic-9 </td><td>(CIACCIO, MICHAEL (0400))<BR>(FLETCHER, JIZELL (9980))<BR>(JU, YOUNGCHUL (5636))<BR>(LALL, RICARDO (3287))<BR>(MALDONADO, EVA (5263))<BR>(MORALES, KEVIN (8367))<BR>(NAPOLI, JONATHAN (8334))<BR>(RAMIREZ, DIANA (8058))<BR>(RIVERA, ASHLEY (1731))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
