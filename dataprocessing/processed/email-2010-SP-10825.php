#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>25</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>PINA_J</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7348</td><td>CAROLAN, JOSEPH</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7642</td><td>CASSIANO, CODY</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>9096</td><td>CRUZ, MICHELLE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-09</td></tr><tr><td>5932</td><td>CUMMINGS, CHRISTOPHER</td><td>Absent on the assessment test.</td></tr><tr><td>4945</td><td>DAVINGER, ARIELLE</td><td>108-topic-04<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>6209</td><td>DERRICK, DANIEL</td><td>Absent on the assessment test.</td></tr><tr><td>2637</td><td>DOMNICH, EUGENE</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-09</td></tr><tr><td>4730</td><td>GARCIA, SUSAN</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>3822</td><td>GORIS, JOSE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6774</td><td>GREENE, LAVAR</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>1954</td><td>HERNANDEZ, SEBASTIAN</td><td>108-topic-03<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7772</td><td>JACKSON, JANET</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>4601</td><td>MINCHALA, TANNYA</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>0889</td><td>NABIRALI, ALANA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06</td></tr><tr><td>6509</td><td>NETSKA, JOHN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>0623</td><td>OKONJI, FELICIA</td><td>108-topic-03<BR>108-topic-04</td></tr><tr><td>1101</td><td>OLSEN, RYAN</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>5726</td><td>PADELL, JOSEPH</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>4680</td><td>PAMPHILE, RUDOLPH</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>1190</td><td>RANA, AMRIT</td><td>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>6527</td><td>RICHARDS, MONIQUE</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>5599</td><td>RODRIGUEZ, FRANCESCA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>0378</td><td>RODRIGUEZ, SAMUEL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7333</td><td>SCHUSTER, JARED</td><td>108-topic-04<BR>108-topic-05</td></tr><tr><td>9184</td><td>SEPULVEDA, CHRISTOPHER</td><td>108-topic-06<BR>108-topic-10</td></tr><tr><td>4965</td><td>SEVERO, NATALIA</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>6961</td><td>TOBON, ASHLEY</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>4949</td><td>VALDEZ, FERNANDO</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>9098</td><td>VASQUEZ, DHARLYN</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>4223</td><td>WERDANN, DANIELLE</td><td>Passed everything.</td></tr><tr><td>3857</td><td>WHITE, MICAH</td><td>108-topic-04</td></tr><tr><td>1005</td><td>YOU, AH_REUM</td><td>108-topic-03<BR>108-topic-06<BR>108-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(CAROLAN, JOSEPH (7348))<BR>(CASSIANO, CODY (7642))<BR>(CRUZ, MICHELLE (9096))<BR>(DOMNICH, EUGENE (2637))<BR>(GARCIA, SUSAN (4730))<BR>(GORIS, JOSE (3822))<BR>(GREENE, LAVAR (6774))<BR>(JACKSON, JANET (7772))<BR>(NABIRALI, ALANA (0889))<BR>(NETSKA, JOHN (6509))<BR>(PADELL, JOSEPH (5726))<BR>(PAMPHILE, RUDOLPH (4680))<BR>(RODRIGUEZ, FRANCESCA (5599))<BR>(RODRIGUEZ, SAMUEL (0378))<BR>(SEVERO, NATALIA (4965))<BR>(TOBON, ASHLEY (6961))<BR>(VALDEZ, FERNANDO (4949))</td></tr><tr><td> 108-topic-02 </td><td>(GARCIA, SUSAN (4730))<BR>(JACKSON, JANET (7772))<BR>(MINCHALA, TANNYA (4601))<BR>(OLSEN, RYAN (1101))<BR>(RANA, AMRIT (1190))<BR>(RICHARDS, MONIQUE (6527))<BR>(RODRIGUEZ, FRANCESCA (5599))<BR>(VALDEZ, FERNANDO (4949))</td></tr><tr><td> 108-topic-03 </td><td>(CAROLAN, JOSEPH (7348))<BR>(CRUZ, MICHELLE (9096))<BR>(GARCIA, SUSAN (4730))<BR>(GORIS, JOSE (3822))<BR>(GREENE, LAVAR (6774))<BR>(HERNANDEZ, SEBASTIAN (1954))<BR>(JACKSON, JANET (7772))<BR>(MINCHALA, TANNYA (4601))<BR>(NABIRALI, ALANA (0889))<BR>(NETSKA, JOHN (6509))<BR>(OKONJI, FELICIA (0623))<BR>(OLSEN, RYAN (1101))<BR>(PADELL, JOSEPH (5726))<BR>(PAMPHILE, RUDOLPH (4680))<BR>(RICHARDS, MONIQUE (6527))<BR>(RODRIGUEZ, FRANCESCA (5599))<BR>(RODRIGUEZ, SAMUEL (0378))<BR>(TOBON, ASHLEY (6961))<BR>(VALDEZ, FERNANDO (4949))<BR>(YOU, AH_REUM (1005))</td></tr><tr><td> 108-topic-04 </td><td>(CAROLAN, JOSEPH (7348))<BR>(CASSIANO, CODY (7642))<BR>(CRUZ, MICHELLE (9096))<BR>(DAVINGER, ARIELLE (4945))<BR>(DOMNICH, EUGENE (2637))<BR>(GARCIA, SUSAN (4730))<BR>(GREENE, LAVAR (6774))<BR>(JACKSON, JANET (7772))<BR>(MINCHALA, TANNYA (4601))<BR>(NABIRALI, ALANA (0889))<BR>(NETSKA, JOHN (6509))<BR>(OKONJI, FELICIA (0623))<BR>(OLSEN, RYAN (1101))<BR>(PADELL, JOSEPH (5726))<BR>(PAMPHILE, RUDOLPH (4680))<BR>(RANA, AMRIT (1190))<BR>(RICHARDS, MONIQUE (6527))<BR>(RODRIGUEZ, FRANCESCA (5599))<BR>(RODRIGUEZ, SAMUEL (0378))<BR>(SCHUSTER, JARED (7333))<BR>(SEVERO, NATALIA (4965))<BR>(VALDEZ, FERNANDO (4949))<BR>(VASQUEZ, DHARLYN (9098))<BR>(WHITE, MICAH (3857))</td></tr><tr><td> 108-topic-05 </td><td>(CRUZ, MICHELLE (9096))<BR>(DOMNICH, EUGENE (2637))<BR>(GARCIA, SUSAN (4730))<BR>(GREENE, LAVAR (6774))<BR>(HERNANDEZ, SEBASTIAN (1954))<BR>(JACKSON, JANET (7772))<BR>(OLSEN, RYAN (1101))<BR>(PADELL, JOSEPH (5726))<BR>(PAMPHILE, RUDOLPH (4680))<BR>(RANA, AMRIT (1190))<BR>(RODRIGUEZ, FRANCESCA (5599))<BR>(SCHUSTER, JARED (7333))<BR>(SEVERO, NATALIA (4965))<BR>(VALDEZ, FERNANDO (4949))<BR>(VASQUEZ, DHARLYN (9098))</td></tr><tr><td> 108-topic-06 </td><td>(CASSIANO, CODY (7642))<BR>(DAVINGER, ARIELLE (4945))<BR>(DOMNICH, EUGENE (2637))<BR>(GARCIA, SUSAN (4730))<BR>(GREENE, LAVAR (6774))<BR>(HERNANDEZ, SEBASTIAN (1954))<BR>(JACKSON, JANET (7772))<BR>(NABIRALI, ALANA (0889))<BR>(NETSKA, JOHN (6509))<BR>(OLSEN, RYAN (1101))<BR>(PADELL, JOSEPH (5726))<BR>(PAMPHILE, RUDOLPH (4680))<BR>(RANA, AMRIT (1190))<BR>(RICHARDS, MONIQUE (6527))<BR>(SEPULVEDA, CHRISTOPHER (9184))<BR>(SEVERO, NATALIA (4965))<BR>(TOBON, ASHLEY (6961))<BR>(VALDEZ, FERNANDO (4949))<BR>(VASQUEZ, DHARLYN (9098))<BR>(YOU, AH_REUM (1005))</td></tr><tr><td> 108-topic-07 </td><td>(CASSIANO, CODY (7642))<BR>(GARCIA, SUSAN (4730))<BR>(GORIS, JOSE (3822))<BR>(HERNANDEZ, SEBASTIAN (1954))<BR>(RICHARDS, MONIQUE (6527))<BR>(VASQUEZ, DHARLYN (9098))</td></tr><tr><td> 108-topic-08 </td><td>(DOMNICH, EUGENE (2637))<BR>(GARCIA, SUSAN (4730))<BR>(GREENE, LAVAR (6774))<BR>(RODRIGUEZ, FRANCESCA (5599))<BR>(VALDEZ, FERNANDO (4949))</td></tr><tr><td> 108-topic-09 </td><td>(CAROLAN, JOSEPH (7348))<BR>(CRUZ, MICHELLE (9096))<BR>(DAVINGER, ARIELLE (4945))<BR>(DOMNICH, EUGENE (2637))<BR>(GORIS, JOSE (3822))<BR>(HERNANDEZ, SEBASTIAN (1954))<BR>(NETSKA, JOHN (6509))<BR>(OLSEN, RYAN (1101))<BR>(PAMPHILE, RUDOLPH (4680))<BR>(RODRIGUEZ, SAMUEL (0378))</td></tr><tr><td> 108-topic-10 </td><td>(CAROLAN, JOSEPH (7348))<BR>(CASSIANO, CODY (7642))<BR>(GARCIA, SUSAN (4730))<BR>(GORIS, JOSE (3822))<BR>(GREENE, LAVAR (6774))<BR>(HERNANDEZ, SEBASTIAN (1954))<BR>(JACKSON, JANET (7772))<BR>(MINCHALA, TANNYA (4601))<BR>(OLSEN, RYAN (1101))<BR>(PADELL, JOSEPH (5726))<BR>(PAMPHILE, RUDOLPH (4680))<BR>(RICHARDS, MONIQUE (6527))<BR>(RODRIGUEZ, FRANCESCA (5599))<BR>(RODRIGUEZ, SAMUEL (0378))<BR>(SEPULVEDA, CHRISTOPHER (9184))<BR>(SEVERO, NATALIA (4965))<BR>(TOBON, ASHLEY (6961))<BR>(VALDEZ, FERNANDO (4949))<BR>(VASQUEZ, DHARLYN (9098))<BR>(YOU, AH_REUM (1005))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
