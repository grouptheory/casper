#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>12</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>TREMBINSKA_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9224</td><td>BAEZ, ROSEMARY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5018</td><td>CARTER, LETITIA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4986</td><td>CELESTINO, JOSEPHINE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5445</td><td>CLARKE, LATISHA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>6912</td><td>COOK, SARAH</td><td>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>3900</td><td>DIAZ, FRANCISCO</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>2105</td><td>FRANCIS, KRYSTAL</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9141</td><td>GARCIA, RICARDO</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2582</td><td>GOMEZ, ROSIBELI</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>6604</td><td>GROYSMAN, IGOR</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>7365</td><td>GUERRERO, CENIA</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>6225</td><td>HENRY, ASFAW</td><td>104-topic-02<BR>104-topic-04<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6026</td><td>HERBERT, CYNTHIA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2191</td><td>KENTON_II, RUSSELL</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1853</td><td>LOPEZ, JUAN</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1033</td><td>MARTINEZ, MICHELLE</td><td>Absent on the assessment test.</td></tr><tr><td>4782</td><td>NIKOVIC, KUJTESA</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>5640</td><td>OSBORNE, BRITTNEY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6220</td><td>PAHNKE, PAULA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5515</td><td>PENA, ALBERTO</td><td>Absent on the assessment test.</td></tr><tr><td>7039</td><td>REYES, KATIOSCA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1707</td><td>RODRIGUEZ, JANICE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6125</td><td>SANCHEZ, KARLA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>3892</td><td>SHABAZZ, FAIZ</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3176</td><td>THOMPSON, NICOLE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3243</td><td>VARGAS, JENNIFER</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>0377</td><td>VASQUEZ, GABRIEL</td><td>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(BAEZ, ROSEMARY (9224))<BR>(CARTER, LETITIA (5018))<BR>(CELESTINO, JOSEPHINE (4986))<BR>(CLARKE, LATISHA (5445))<BR>(DIAZ, FRANCISCO (3900))<BR>(FRANCIS, KRYSTAL (2105))<BR>(GARCIA, RICARDO (9141))<BR>(GOMEZ, ROSIBELI (2582))<BR>(GROYSMAN, IGOR (6604))<BR>(GUERRERO, CENIA (7365))<BR>(HERBERT, CYNTHIA (6026))<BR>(KENTON_II, RUSSELL (2191))<BR>(LOPEZ, JUAN (1853))<BR>(NIKOVIC, KUJTESA (4782))<BR>(OSBORNE, BRITTNEY (5640))<BR>(PAHNKE, PAULA (6220))<BR>(REYES, KATIOSCA (7039))<BR>(RODRIGUEZ, JANICE (1707))<BR>(SANCHEZ, KARLA (6125))<BR>(SHABAZZ, FAIZ (3892))<BR>(THOMPSON, NICOLE (3176))<BR>(VARGAS, JENNIFER (3243))</td></tr><tr><td> 104-topic-02 </td><td>(BAEZ, ROSEMARY (9224))<BR>(CARTER, LETITIA (5018))<BR>(CELESTINO, JOSEPHINE (4986))<BR>(CLARKE, LATISHA (5445))<BR>(GARCIA, RICARDO (9141))<BR>(GOMEZ, ROSIBELI (2582))<BR>(HENRY, ASFAW (6225))<BR>(HERBERT, CYNTHIA (6026))<BR>(KENTON_II, RUSSELL (2191))<BR>(OSBORNE, BRITTNEY (5640))<BR>(PAHNKE, PAULA (6220))<BR>(RODRIGUEZ, JANICE (1707))<BR>(SANCHEZ, KARLA (6125))<BR>(SHABAZZ, FAIZ (3892))<BR>(THOMPSON, NICOLE (3176))<BR>(VARGAS, JENNIFER (3243))<BR>(VASQUEZ, GABRIEL (0377))</td></tr><tr><td> 104-topic-03 </td><td>(BAEZ, ROSEMARY (9224))<BR>(CARTER, LETITIA (5018))<BR>(CLARKE, LATISHA (5445))<BR>(DIAZ, FRANCISCO (3900))<BR>(FRANCIS, KRYSTAL (2105))<BR>(GARCIA, RICARDO (9141))<BR>(HERBERT, CYNTHIA (6026))<BR>(KENTON_II, RUSSELL (2191))<BR>(OSBORNE, BRITTNEY (5640))<BR>(PAHNKE, PAULA (6220))<BR>(REYES, KATIOSCA (7039))<BR>(RODRIGUEZ, JANICE (1707))<BR>(SANCHEZ, KARLA (6125))<BR>(SHABAZZ, FAIZ (3892))<BR>(THOMPSON, NICOLE (3176))</td></tr><tr><td> 104-topic-04 </td><td>(CARTER, LETITIA (5018))<BR>(CLARKE, LATISHA (5445))<BR>(GARCIA, RICARDO (9141))<BR>(GOMEZ, ROSIBELI (2582))<BR>(GUERRERO, CENIA (7365))<BR>(HENRY, ASFAW (6225))<BR>(HERBERT, CYNTHIA (6026))<BR>(KENTON_II, RUSSELL (2191))<BR>(NIKOVIC, KUJTESA (4782))<BR>(OSBORNE, BRITTNEY (5640))<BR>(PAHNKE, PAULA (6220))<BR>(RODRIGUEZ, JANICE (1707))<BR>(SHABAZZ, FAIZ (3892))<BR>(THOMPSON, NICOLE (3176))<BR>(VARGAS, JENNIFER (3243))<BR>(VASQUEZ, GABRIEL (0377))</td></tr><tr><td> 104-topic-05 </td><td>(BAEZ, ROSEMARY (9224))<BR>(CARTER, LETITIA (5018))<BR>(CELESTINO, JOSEPHINE (4986))<BR>(CLARKE, LATISHA (5445))<BR>(COOK, SARAH (6912))<BR>(DIAZ, FRANCISCO (3900))<BR>(FRANCIS, KRYSTAL (2105))<BR>(GARCIA, RICARDO (9141))<BR>(GOMEZ, ROSIBELI (2582))<BR>(GROYSMAN, IGOR (6604))<BR>(GUERRERO, CENIA (7365))<BR>(HERBERT, CYNTHIA (6026))<BR>(KENTON_II, RUSSELL (2191))<BR>(LOPEZ, JUAN (1853))<BR>(NIKOVIC, KUJTESA (4782))<BR>(OSBORNE, BRITTNEY (5640))<BR>(PAHNKE, PAULA (6220))<BR>(REYES, KATIOSCA (7039))<BR>(RODRIGUEZ, JANICE (1707))<BR>(SANCHEZ, KARLA (6125))<BR>(SHABAZZ, FAIZ (3892))<BR>(THOMPSON, NICOLE (3176))<BR>(VARGAS, JENNIFER (3243))<BR>(VASQUEZ, GABRIEL (0377))</td></tr><tr><td> 104-topic-06 </td><td>(BAEZ, ROSEMARY (9224))<BR>(CARTER, LETITIA (5018))<BR>(CELESTINO, JOSEPHINE (4986))<BR>(CLARKE, LATISHA (5445))<BR>(COOK, SARAH (6912))<BR>(DIAZ, FRANCISCO (3900))<BR>(FRANCIS, KRYSTAL (2105))<BR>(GARCIA, RICARDO (9141))<BR>(GOMEZ, ROSIBELI (2582))<BR>(GROYSMAN, IGOR (6604))<BR>(GUERRERO, CENIA (7365))<BR>(HENRY, ASFAW (6225))<BR>(HERBERT, CYNTHIA (6026))<BR>(KENTON_II, RUSSELL (2191))<BR>(LOPEZ, JUAN (1853))<BR>(NIKOVIC, KUJTESA (4782))<BR>(OSBORNE, BRITTNEY (5640))<BR>(PAHNKE, PAULA (6220))<BR>(REYES, KATIOSCA (7039))<BR>(RODRIGUEZ, JANICE (1707))<BR>(SANCHEZ, KARLA (6125))<BR>(SHABAZZ, FAIZ (3892))<BR>(THOMPSON, NICOLE (3176))<BR>(VARGAS, JENNIFER (3243))<BR>(VASQUEZ, GABRIEL (0377))</td></tr><tr><td> 104-topic-07 </td><td>(BAEZ, ROSEMARY (9224))<BR>(CARTER, LETITIA (5018))<BR>(CELESTINO, JOSEPHINE (4986))<BR>(CLARKE, LATISHA (5445))<BR>(COOK, SARAH (6912))<BR>(DIAZ, FRANCISCO (3900))<BR>(FRANCIS, KRYSTAL (2105))<BR>(GARCIA, RICARDO (9141))<BR>(GOMEZ, ROSIBELI (2582))<BR>(GROYSMAN, IGOR (6604))<BR>(GUERRERO, CENIA (7365))<BR>(HENRY, ASFAW (6225))<BR>(HERBERT, CYNTHIA (6026))<BR>(KENTON_II, RUSSELL (2191))<BR>(LOPEZ, JUAN (1853))<BR>(OSBORNE, BRITTNEY (5640))<BR>(PAHNKE, PAULA (6220))<BR>(REYES, KATIOSCA (7039))<BR>(RODRIGUEZ, JANICE (1707))<BR>(SANCHEZ, KARLA (6125))<BR>(SHABAZZ, FAIZ (3892))<BR>(THOMPSON, NICOLE (3176))<BR>(VARGAS, JENNIFER (3243))<BR>(VASQUEZ, GABRIEL (0377))</td></tr><tr><td> 104-topic-08 </td><td>(BAEZ, ROSEMARY (9224))<BR>(CARTER, LETITIA (5018))<BR>(FRANCIS, KRYSTAL (2105))<BR>(GARCIA, RICARDO (9141))<BR>(GUERRERO, CENIA (7365))<BR>(HENRY, ASFAW (6225))<BR>(HERBERT, CYNTHIA (6026))<BR>(NIKOVIC, KUJTESA (4782))<BR>(PAHNKE, PAULA (6220))<BR>(RODRIGUEZ, JANICE (1707))<BR>(SANCHEZ, KARLA (6125))<BR>(THOMPSON, NICOLE (3176))<BR>(VARGAS, JENNIFER (3243))</td></tr><tr><td> 104-topic-09 </td><td>(BAEZ, ROSEMARY (9224))<BR>(CARTER, LETITIA (5018))<BR>(FRANCIS, KRYSTAL (2105))<BR>(GARCIA, RICARDO (9141))<BR>(GROYSMAN, IGOR (6604))<BR>(HENRY, ASFAW (6225))<BR>(HERBERT, CYNTHIA (6026))<BR>(KENTON_II, RUSSELL (2191))<BR>(LOPEZ, JUAN (1853))<BR>(OSBORNE, BRITTNEY (5640))<BR>(PAHNKE, PAULA (6220))<BR>(REYES, KATIOSCA (7039))<BR>(RODRIGUEZ, JANICE (1707))<BR>(SHABAZZ, FAIZ (3892))<BR>(THOMPSON, NICOLE (3176))</td></tr><tr><td> 104-topic-10 </td><td>(BAEZ, ROSEMARY (9224))<BR>(CARTER, LETITIA (5018))<BR>(CELESTINO, JOSEPHINE (4986))<BR>(CLARKE, LATISHA (5445))<BR>(COOK, SARAH (6912))<BR>(DIAZ, FRANCISCO (3900))<BR>(FRANCIS, KRYSTAL (2105))<BR>(GARCIA, RICARDO (9141))<BR>(GOMEZ, ROSIBELI (2582))<BR>(GROYSMAN, IGOR (6604))<BR>(GUERRERO, CENIA (7365))<BR>(HENRY, ASFAW (6225))<BR>(HERBERT, CYNTHIA (6026))<BR>(KENTON_II, RUSSELL (2191))<BR>(LOPEZ, JUAN (1853))<BR>(NIKOVIC, KUJTESA (4782))<BR>(OSBORNE, BRITTNEY (5640))<BR>(PAHNKE, PAULA (6220))<BR>(REYES, KATIOSCA (7039))<BR>(RODRIGUEZ, JANICE (1707))<BR>(SANCHEZ, KARLA (6125))<BR>(SHABAZZ, FAIZ (3892))<BR>(THOMPSON, NICOLE (3176))<BR>(VARGAS, JENNIFER (3243))<BR>(VASQUEZ, GABRIEL (0377))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>