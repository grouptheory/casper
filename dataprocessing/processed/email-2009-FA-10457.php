#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>57</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MCGILL_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>2117</td><td>ANGELES, ORQUIDEA</td><td>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>2881</td><td>CALDERON, NICOLE</td><td>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>6130</td><td>CARNEIRO, TIMOTHY</td><td>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>9003</td><td>CEKIC, ALMEDINA</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-6</td></tr><tr><td>5337</td><td>COBAR, VIVIANA</td><td>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>4386</td><td>ECHEVERRY, KEVIN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6</td></tr><tr><td>3473</td><td>FABIAN, YAREIMI</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>1618</td><td>FLETCHER, RHONDA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>7641</td><td>GROCE, MICHAEL</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>5076</td><td>GRULLON, SHANEL</td><td>104-topic-10<BR>104-topic-2</td></tr><tr><td>9752</td><td>GUZMAN, KATHLEEN</td><td>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-9</td></tr><tr><td>2547</td><td>HOJILLA, MARK</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>2765</td><td>JALAGANIA, SHALVA</td><td>104-topic-3<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>0563</td><td>LOPEZ, EMIL</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-5<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>5382</td><td>LUI, DAVID</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>8818</td><td>MALDONADO, KAILEY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>8752</td><td>MEDINA, CHRISTAN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>4248</td><td>ORTEGA, BIANCA</td><td>104-topic-10<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>0826</td><td>PEREZ, NINA</td><td>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-5<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>2919</td><td>RAMOS, RAMON</td><td>104-topic-1<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>2207</td><td>RHODES, ALEXIS</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>8076</td><td>RIVERA, MICHAEL</td><td>104-topic-1<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>8310</td><td>SACKEY, NAA_CHOE_CHOE</td><td>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>9265</td><td>SUTHERLAND, KELEISHA</td><td>104-topic-10<BR>104-topic-3<BR>104-topic-6<BR>104-topic-9</td></tr><tr><td>0523</td><td>VAZQUEZ, SAMANTHA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-6</td></tr><tr><td>2544</td><td>VELIZ, CRISTIAN</td><td>104-topic-10<BR>104-topic-2<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(CEKIC, ALMEDINA (9003))<BR>(ECHEVERRY, KEVIN (4386))<BR>(FABIAN, YAREIMI (3473))<BR>(FLETCHER, RHONDA (1618))<BR>(GROCE, MICHAEL (7641))<BR>(HOJILLA, MARK (2547))<BR>(LOPEZ, EMIL (0563))<BR>(LUI, DAVID (5382))<BR>(MALDONADO, KAILEY (8818))<BR>(MEDINA, CHRISTAN (8752))<BR>(RAMOS, RAMON (2919))<BR>(RHODES, ALEXIS (2207))<BR>(RIVERA, MICHAEL (8076))<BR>(VAZQUEZ, SAMANTHA (0523))</td></tr><tr><td> 104-topic-10 </td><td>(ANGELES, ORQUIDEA (2117))<BR>(CALDERON, NICOLE (2881))<BR>(CARNEIRO, TIMOTHY (6130))<BR>(COBAR, VIVIANA (5337))<BR>(ECHEVERRY, KEVIN (4386))<BR>(FLETCHER, RHONDA (1618))<BR>(GROCE, MICHAEL (7641))<BR>(GRULLON, SHANEL (5076))<BR>(GUZMAN, KATHLEEN (9752))<BR>(HOJILLA, MARK (2547))<BR>(LOPEZ, EMIL (0563))<BR>(LUI, DAVID (5382))<BR>(MALDONADO, KAILEY (8818))<BR>(MEDINA, CHRISTAN (8752))<BR>(ORTEGA, BIANCA (4248))<BR>(PEREZ, NINA (0826))<BR>(RHODES, ALEXIS (2207))<BR>(SACKEY, NAA_CHOE_CHOE (8310))<BR>(SUTHERLAND, KELEISHA (9265))<BR>(VAZQUEZ, SAMANTHA (0523))<BR>(VELIZ, CRISTIAN (2544))</td></tr><tr><td> 104-topic-2 </td><td>(CALDERON, NICOLE (2881))<BR>(CEKIC, ALMEDINA (9003))<BR>(FABIAN, YAREIMI (3473))<BR>(GROCE, MICHAEL (7641))<BR>(GRULLON, SHANEL (5076))<BR>(LOPEZ, EMIL (0563))<BR>(MALDONADO, KAILEY (8818))<BR>(MEDINA, CHRISTAN (8752))<BR>(PEREZ, NINA (0826))<BR>(RHODES, ALEXIS (2207))<BR>(VELIZ, CRISTIAN (2544))</td></tr><tr><td> 104-topic-3 </td><td>(CARNEIRO, TIMOTHY (6130))<BR>(CEKIC, ALMEDINA (9003))<BR>(COBAR, VIVIANA (5337))<BR>(FLETCHER, RHONDA (1618))<BR>(GROCE, MICHAEL (7641))<BR>(HOJILLA, MARK (2547))<BR>(JALAGANIA, SHALVA (2765))<BR>(LOPEZ, EMIL (0563))<BR>(MEDINA, CHRISTAN (8752))<BR>(PEREZ, NINA (0826))<BR>(RAMOS, RAMON (2919))<BR>(RHODES, ALEXIS (2207))<BR>(SUTHERLAND, KELEISHA (9265))</td></tr><tr><td> 104-topic-4 </td><td>(CALDERON, NICOLE (2881))<BR>(CARNEIRO, TIMOTHY (6130))<BR>(COBAR, VIVIANA (5337))<BR>(ECHEVERRY, KEVIN (4386))<BR>(FLETCHER, RHONDA (1618))<BR>(GROCE, MICHAEL (7641))<BR>(HOJILLA, MARK (2547))<BR>(LUI, DAVID (5382))<BR>(MALDONADO, KAILEY (8818))<BR>(MEDINA, CHRISTAN (8752))<BR>(RAMOS, RAMON (2919))<BR>(RHODES, ALEXIS (2207))<BR>(RIVERA, MICHAEL (8076))<BR>(SACKEY, NAA_CHOE_CHOE (8310))</td></tr><tr><td> 104-topic-5 </td><td>(ANGELES, ORQUIDEA (2117))<BR>(CALDERON, NICOLE (2881))<BR>(COBAR, VIVIANA (5337))<BR>(ECHEVERRY, KEVIN (4386))<BR>(FABIAN, YAREIMI (3473))<BR>(FLETCHER, RHONDA (1618))<BR>(GROCE, MICHAEL (7641))<BR>(GUZMAN, KATHLEEN (9752))<BR>(HOJILLA, MARK (2547))<BR>(JALAGANIA, SHALVA (2765))<BR>(LOPEZ, EMIL (0563))<BR>(LUI, DAVID (5382))<BR>(MALDONADO, KAILEY (8818))<BR>(MEDINA, CHRISTAN (8752))<BR>(PEREZ, NINA (0826))<BR>(RAMOS, RAMON (2919))<BR>(RHODES, ALEXIS (2207))<BR>(RIVERA, MICHAEL (8076))<BR>(SACKEY, NAA_CHOE_CHOE (8310))<BR>(VELIZ, CRISTIAN (2544))</td></tr><tr><td> 104-topic-6 </td><td>(ANGELES, ORQUIDEA (2117))<BR>(CALDERON, NICOLE (2881))<BR>(CEKIC, ALMEDINA (9003))<BR>(COBAR, VIVIANA (5337))<BR>(ECHEVERRY, KEVIN (4386))<BR>(FABIAN, YAREIMI (3473))<BR>(FLETCHER, RHONDA (1618))<BR>(GROCE, MICHAEL (7641))<BR>(GUZMAN, KATHLEEN (9752))<BR>(HOJILLA, MARK (2547))<BR>(JALAGANIA, SHALVA (2765))<BR>(LUI, DAVID (5382))<BR>(MALDONADO, KAILEY (8818))<BR>(MEDINA, CHRISTAN (8752))<BR>(ORTEGA, BIANCA (4248))<BR>(RAMOS, RAMON (2919))<BR>(RHODES, ALEXIS (2207))<BR>(RIVERA, MICHAEL (8076))<BR>(SACKEY, NAA_CHOE_CHOE (8310))<BR>(SUTHERLAND, KELEISHA (9265))<BR>(VAZQUEZ, SAMANTHA (0523))<BR>(VELIZ, CRISTIAN (2544))</td></tr><tr><td> 104-topic-7 </td><td>(ANGELES, ORQUIDEA (2117))<BR>(CALDERON, NICOLE (2881))<BR>(COBAR, VIVIANA (5337))<BR>(FABIAN, YAREIMI (3473))<BR>(FLETCHER, RHONDA (1618))<BR>(GROCE, MICHAEL (7641))<BR>(HOJILLA, MARK (2547))<BR>(JALAGANIA, SHALVA (2765))<BR>(LOPEZ, EMIL (0563))<BR>(LUI, DAVID (5382))<BR>(MALDONADO, KAILEY (8818))<BR>(MEDINA, CHRISTAN (8752))<BR>(ORTEGA, BIANCA (4248))<BR>(PEREZ, NINA (0826))<BR>(RAMOS, RAMON (2919))<BR>(RHODES, ALEXIS (2207))<BR>(RIVERA, MICHAEL (8076))<BR>(SACKEY, NAA_CHOE_CHOE (8310))<BR>(VELIZ, CRISTIAN (2544))</td></tr><tr><td> 104-topic-8 </td><td>(CARNEIRO, TIMOTHY (6130))<BR>(FABIAN, YAREIMI (3473))<BR>(GROCE, MICHAEL (7641))<BR>(LOPEZ, EMIL (0563))<BR>(LUI, DAVID (5382))<BR>(MEDINA, CHRISTAN (8752))<BR>(PEREZ, NINA (0826))<BR>(RAMOS, RAMON (2919))</td></tr><tr><td> 104-topic-9 </td><td>(CALDERON, NICOLE (2881))<BR>(CARNEIRO, TIMOTHY (6130))<BR>(FLETCHER, RHONDA (1618))<BR>(GROCE, MICHAEL (7641))<BR>(GUZMAN, KATHLEEN (9752))<BR>(HOJILLA, MARK (2547))<BR>(LOPEZ, EMIL (0563))<BR>(MEDINA, CHRISTAN (8752))<BR>(RAMOS, RAMON (2919))<BR>(SUTHERLAND, KELEISHA (9265))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>