#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>23</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>ARONOFF_R</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6991</td><td>BAEZ, SHIRLEY</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>8885</td><td>BEACH, GLENN</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8</td></tr><tr><td>6082</td><td>BOWERS, CYNTHIA</td><td>Absent on the assessment test.</td></tr><tr><td>2350</td><td>CARTHORNE, DANIELLE</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>2295</td><td>CHONG, MA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-6</td></tr><tr><td>7352</td><td>CHOUDRY, ADEELA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6<BR>108-topic-9</td></tr><tr><td>0402</td><td>CHUNG, HERMAN</td><td>Passed everything.</td></tr><tr><td>5924</td><td>DE_SOUZA, TRAVIS</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7</td></tr><tr><td>7660</td><td>DURAN, KARINA</td><td>Absent on the assessment test.</td></tr><tr><td>0066</td><td>ESPITIA, SHAWN</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>0514</td><td>HANS, ALANA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>0330</td><td>HARLEY, KIANA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7</td></tr><tr><td>9911</td><td>KWONG, MARY</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>1969</td><td>LIU, DONG_LUN</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>3385</td><td>LOWE, CORI</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-5</td></tr><tr><td>6888</td><td>NG, WINNIE</td><td>108-topic-4<BR>108-topic-5</td></tr><tr><td>4965</td><td>OSORIO, ALMA</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6</td></tr><tr><td>3100</td><td>PADILLA, JESSICA</td><td>Absent on the assessment test.</td></tr><tr><td>1580</td><td>PARKER, DYANDRA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>2667</td><td>PEREZ, YSNALDO</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6<BR>108-topic-9</td></tr><tr><td>5931</td><td>PIENCZYKOWSKI, ANGELINA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-9</td></tr><tr><td>3323</td><td>PINALES, ARELIS</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8</td></tr><tr><td>0091</td><td>POVIS, GLORIA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6<BR>108-topic-9</td></tr><tr><td>9897</td><td>RICE, ANTHONY</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>1403</td><td>ROBLES, LETICIA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>0419</td><td>ROUGIER, NIAL</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>5113</td><td>RYBUSHKINA, OLGA</td><td>108-topic-3<BR>108-topic-4<BR>108-topic-6</td></tr><tr><td>9208</td><td>SALDANA, RANDY</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>6988</td><td>SOOKHOO, STEVEN</td><td>108-topic-3<BR>108-topic-6</td></tr><tr><td>1437</td><td>VALERIE, ALEAH</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>3941</td><td>VELASCO, NINOSKA</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>0562</td><td>VIRUET, FELYNE</td><td>108-topic-10<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-8<BR>108-topic-9</td></tr><tr><td>5003</td><td>YARBROUGH, JASMINE</td><td>108-topic-1<BR>108-topic-2<BR>108-topic-4<BR>108-topic-5<BR>108-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-1 </td><td>(BAEZ, SHIRLEY (6991))<BR>(CARTHORNE, DANIELLE (2350))<BR>(CHONG, MA (2295))<BR>(CHOUDRY, ADEELA (7352))<BR>(ESPITIA, SHAWN (0066))<BR>(HANS, ALANA (0514))<BR>(HARLEY, KIANA (0330))<BR>(KWONG, MARY (9911))<BR>(LIU, DONG_LUN (1969))<BR>(LOWE, CORI (3385))<BR>(PARKER, DYANDRA (1580))<BR>(PEREZ, YSNALDO (2667))<BR>(PIENCZYKOWSKI, ANGELINA (5931))<BR>(PINALES, ARELIS (3323))<BR>(POVIS, GLORIA (0091))<BR>(RICE, ANTHONY (9897))<BR>(ROBLES, LETICIA (1403))<BR>(ROUGIER, NIAL (0419))<BR>(SALDANA, RANDY (9208))<BR>(VALERIE, ALEAH (1437))<BR>(VELASCO, NINOSKA (3941))<BR>(YARBROUGH, JASMINE (5003))</td></tr><tr><td> 108-topic-10 </td><td>(BAEZ, SHIRLEY (6991))<BR>(BEACH, GLENN (8885))<BR>(CARTHORNE, DANIELLE (2350))<BR>(CHONG, MA (2295))<BR>(CHOUDRY, ADEELA (7352))<BR>(DE_SOUZA, TRAVIS (5924))<BR>(ESPITIA, SHAWN (0066))<BR>(HANS, ALANA (0514))<BR>(HARLEY, KIANA (0330))<BR>(LIU, DONG_LUN (1969))<BR>(LOWE, CORI (3385))<BR>(OSORIO, ALMA (4965))<BR>(PARKER, DYANDRA (1580))<BR>(PINALES, ARELIS (3323))<BR>(POVIS, GLORIA (0091))<BR>(RICE, ANTHONY (9897))<BR>(ROBLES, LETICIA (1403))<BR>(ROUGIER, NIAL (0419))<BR>(SALDANA, RANDY (9208))<BR>(VALERIE, ALEAH (1437))<BR>(VIRUET, FELYNE (0562))</td></tr><tr><td> 108-topic-2 </td><td>(CHONG, MA (2295))<BR>(HARLEY, KIANA (0330))<BR>(KWONG, MARY (9911))<BR>(LOWE, CORI (3385))<BR>(PIENCZYKOWSKI, ANGELINA (5931))<BR>(PINALES, ARELIS (3323))<BR>(RICE, ANTHONY (9897))<BR>(ROBLES, LETICIA (1403))<BR>(VELASCO, NINOSKA (3941))<BR>(YARBROUGH, JASMINE (5003))</td></tr><tr><td> 108-topic-3 </td><td>(BAEZ, SHIRLEY (6991))<BR>(BEACH, GLENN (8885))<BR>(CARTHORNE, DANIELLE (2350))<BR>(CHONG, MA (2295))<BR>(CHOUDRY, ADEELA (7352))<BR>(DE_SOUZA, TRAVIS (5924))<BR>(ESPITIA, SHAWN (0066))<BR>(HANS, ALANA (0514))<BR>(HARLEY, KIANA (0330))<BR>(KWONG, MARY (9911))<BR>(LIU, DONG_LUN (1969))<BR>(OSORIO, ALMA (4965))<BR>(PARKER, DYANDRA (1580))<BR>(PEREZ, YSNALDO (2667))<BR>(PIENCZYKOWSKI, ANGELINA (5931))<BR>(PINALES, ARELIS (3323))<BR>(POVIS, GLORIA (0091))<BR>(RICE, ANTHONY (9897))<BR>(ROUGIER, NIAL (0419))<BR>(RYBUSHKINA, OLGA (5113))<BR>(SALDANA, RANDY (9208))<BR>(SOOKHOO, STEVEN (6988))<BR>(VALERIE, ALEAH (1437))<BR>(VELASCO, NINOSKA (3941))</td></tr><tr><td> 108-topic-4 </td><td>(BAEZ, SHIRLEY (6991))<BR>(BEACH, GLENN (8885))<BR>(CHOUDRY, ADEELA (7352))<BR>(DE_SOUZA, TRAVIS (5924))<BR>(ESPITIA, SHAWN (0066))<BR>(HANS, ALANA (0514))<BR>(HARLEY, KIANA (0330))<BR>(KWONG, MARY (9911))<BR>(NG, WINNIE (6888))<BR>(OSORIO, ALMA (4965))<BR>(PARKER, DYANDRA (1580))<BR>(PEREZ, YSNALDO (2667))<BR>(PIENCZYKOWSKI, ANGELINA (5931))<BR>(PINALES, ARELIS (3323))<BR>(POVIS, GLORIA (0091))<BR>(RICE, ANTHONY (9897))<BR>(ROBLES, LETICIA (1403))<BR>(ROUGIER, NIAL (0419))<BR>(RYBUSHKINA, OLGA (5113))<BR>(VALERIE, ALEAH (1437))<BR>(VELASCO, NINOSKA (3941))<BR>(VIRUET, FELYNE (0562))<BR>(YARBROUGH, JASMINE (5003))</td></tr><tr><td> 108-topic-5 </td><td>(BAEZ, SHIRLEY (6991))<BR>(BEACH, GLENN (8885))<BR>(CARTHORNE, DANIELLE (2350))<BR>(DE_SOUZA, TRAVIS (5924))<BR>(HANS, ALANA (0514))<BR>(HARLEY, KIANA (0330))<BR>(KWONG, MARY (9911))<BR>(LIU, DONG_LUN (1969))<BR>(LOWE, CORI (3385))<BR>(NG, WINNIE (6888))<BR>(PARKER, DYANDRA (1580))<BR>(PIENCZYKOWSKI, ANGELINA (5931))<BR>(PINALES, ARELIS (3323))<BR>(ROBLES, LETICIA (1403))<BR>(ROUGIER, NIAL (0419))<BR>(SALDANA, RANDY (9208))<BR>(VALERIE, ALEAH (1437))<BR>(VELASCO, NINOSKA (3941))<BR>(VIRUET, FELYNE (0562))<BR>(YARBROUGH, JASMINE (5003))</td></tr><tr><td> 108-topic-6 </td><td>(BAEZ, SHIRLEY (6991))<BR>(BEACH, GLENN (8885))<BR>(CARTHORNE, DANIELLE (2350))<BR>(CHONG, MA (2295))<BR>(CHOUDRY, ADEELA (7352))<BR>(DE_SOUZA, TRAVIS (5924))<BR>(ESPITIA, SHAWN (0066))<BR>(HANS, ALANA (0514))<BR>(HARLEY, KIANA (0330))<BR>(KWONG, MARY (9911))<BR>(LIU, DONG_LUN (1969))<BR>(OSORIO, ALMA (4965))<BR>(PEREZ, YSNALDO (2667))<BR>(PIENCZYKOWSKI, ANGELINA (5931))<BR>(PINALES, ARELIS (3323))<BR>(POVIS, GLORIA (0091))<BR>(RICE, ANTHONY (9897))<BR>(ROBLES, LETICIA (1403))<BR>(ROUGIER, NIAL (0419))<BR>(RYBUSHKINA, OLGA (5113))<BR>(SALDANA, RANDY (9208))<BR>(SOOKHOO, STEVEN (6988))<BR>(VALERIE, ALEAH (1437))<BR>(VELASCO, NINOSKA (3941))<BR>(VIRUET, FELYNE (0562))</td></tr><tr><td> 108-topic-7 </td><td>(BAEZ, SHIRLEY (6991))<BR>(CARTHORNE, DANIELLE (2350))<BR>(DE_SOUZA, TRAVIS (5924))<BR>(ESPITIA, SHAWN (0066))<BR>(HARLEY, KIANA (0330))<BR>(RICE, ANTHONY (9897))<BR>(ROBLES, LETICIA (1403))<BR>(ROUGIER, NIAL (0419))<BR>(SALDANA, RANDY (9208))</td></tr><tr><td> 108-topic-8 </td><td>(BEACH, GLENN (8885))<BR>(CARTHORNE, DANIELLE (2350))<BR>(PINALES, ARELIS (3323))<BR>(RICE, ANTHONY (9897))<BR>(ROBLES, LETICIA (1403))<BR>(VIRUET, FELYNE (0562))</td></tr><tr><td> 108-topic-9 </td><td>(BAEZ, SHIRLEY (6991))<BR>(CARTHORNE, DANIELLE (2350))<BR>(CHOUDRY, ADEELA (7352))<BR>(ESPITIA, SHAWN (0066))<BR>(PEREZ, YSNALDO (2667))<BR>(PIENCZYKOWSKI, ANGELINA (5931))<BR>(POVIS, GLORIA (0091))<BR>(RICE, ANTHONY (9897))<BR>(ROBLES, LETICIA (1403))<BR>(ROUGIER, NIAL (0419))<BR>(SALDANA, RANDY (9208))<BR>(VIRUET, FELYNE (0562))<BR>(YARBROUGH, JASMINE (5003))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>