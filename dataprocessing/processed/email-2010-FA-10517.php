#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>17</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>BIESTER_G</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6816</td><td>AZAROV, PAVLO</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>8960</td><td>BOLGER, MATTHEW</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>6722</td><td>CALDERON, JULIO</td><td>105-topic-06</td></tr><tr><td>2307</td><td>CAVALLO, FRANCESCO</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>7397</td><td>CHAMBERLAIN, BRANDYN</td><td>105-topic-06<BR>105-topic-10</td></tr><tr><td>8614</td><td>DAVIS, MELITSA</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>8060</td><td>DI_GIUSEPPE, MARISA</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-04<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>8397</td><td>DOMINGO, JOHN</td><td>105-topic-01<BR>105-topic-04<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>2998</td><td>ELBROODY, DENA</td><td>105-topic-01<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>6965</td><td>ETIENNE, RUBEN</td><td>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>6103</td><td>FORBES, KAREN</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>5616</td><td>GALVIN, PETER</td><td>105-topic-01<BR>105-topic-04<BR>105-topic-06</td></tr><tr><td>0451</td><td>GUERRERO, MOISES</td><td>Passed everything.</td></tr><tr><td>1626</td><td>GUZMAN, VALERIE</td><td>Passed everything.</td></tr><tr><td>0816</td><td>HANSEN, NICOLE</td><td>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>9865</td><td>JORDAN, JESSICA</td><td>105-topic-01<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>3704</td><td>KATEHIS, CATHERINE</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>1778</td><td>KATZ, DANIEL</td><td>105-topic-06<BR>105-topic-10</td></tr><tr><td>1284</td><td>LERER, ANNA</td><td>105-topic-05<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>5424</td><td>POPOVA, OLGA</td><td>Passed everything.</td></tr><tr><td>8097</td><td>RAMOS, STEPHANY</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>1344</td><td>SAKIC, DINO</td><td>Passed everything.</td></tr><tr><td>4748</td><td>SHABANI, FITIM</td><td>Passed everything.</td></tr><tr><td>9572</td><td>SMITH, LEAH</td><td>Passed everything.</td></tr><tr><td>8269</td><td>SOFSKY, CHRISTOPHER</td><td>Passed everything.</td></tr><tr><td>5693</td><td>ST.CYR, JESSICA</td><td>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>5062</td><td>TAYLOR, SHANELL</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>9715</td><td>TEEHAN, ROBERT</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>7966</td><td>WEERATNE, ROBERT</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-01 </td><td>(AZAROV, PAVLO (6816))<BR>(BOLGER, MATTHEW (8960))<BR>(CAVALLO, FRANCESCO (2307))<BR>(DAVIS, MELITSA (8614))<BR>(DI_GIUSEPPE, MARISA (8060))<BR>(DOMINGO, JOHN (8397))<BR>(ELBROODY, DENA (2998))<BR>(FORBES, KAREN (6103))<BR>(GALVIN, PETER (5616))<BR>(JORDAN, JESSICA (9865))<BR>(KATEHIS, CATHERINE (3704))<BR>(RAMOS, STEPHANY (8097))<BR>(TAYLOR, SHANELL (5062))<BR>(TEEHAN, ROBERT (9715))<BR>(WEERATNE, ROBERT (7966))</td></tr><tr><td> 105-topic-02 </td><td>(CAVALLO, FRANCESCO (2307))<BR>(DAVIS, MELITSA (8614))<BR>(DI_GIUSEPPE, MARISA (8060))<BR>(FORBES, KAREN (6103))<BR>(KATEHIS, CATHERINE (3704))<BR>(RAMOS, STEPHANY (8097))<BR>(ST.CYR, JESSICA (5693))<BR>(TEEHAN, ROBERT (9715))<BR>(WEERATNE, ROBERT (7966))</td></tr><tr><td> 105-topic-03 </td><td>(AZAROV, PAVLO (6816))<BR>(BOLGER, MATTHEW (8960))<BR>(CAVALLO, FRANCESCO (2307))<BR>(DAVIS, MELITSA (8614))<BR>(FORBES, KAREN (6103))<BR>(KATEHIS, CATHERINE (3704))<BR>(TAYLOR, SHANELL (5062))<BR>(WEERATNE, ROBERT (7966))</td></tr><tr><td> 105-topic-04 </td><td>(AZAROV, PAVLO (6816))<BR>(BOLGER, MATTHEW (8960))<BR>(DAVIS, MELITSA (8614))<BR>(DI_GIUSEPPE, MARISA (8060))<BR>(DOMINGO, JOHN (8397))<BR>(FORBES, KAREN (6103))<BR>(GALVIN, PETER (5616))<BR>(KATEHIS, CATHERINE (3704))<BR>(RAMOS, STEPHANY (8097))<BR>(ST.CYR, JESSICA (5693))<BR>(TAYLOR, SHANELL (5062))<BR>(WEERATNE, ROBERT (7966))</td></tr><tr><td> 105-topic-05 </td><td>(AZAROV, PAVLO (6816))<BR>(CAVALLO, FRANCESCO (2307))<BR>(ELBROODY, DENA (2998))<BR>(FORBES, KAREN (6103))<BR>(KATEHIS, CATHERINE (3704))<BR>(LERER, ANNA (1284))<BR>(RAMOS, STEPHANY (8097))<BR>(ST.CYR, JESSICA (5693))<BR>(TAYLOR, SHANELL (5062))<BR>(TEEHAN, ROBERT (9715))<BR>(WEERATNE, ROBERT (7966))</td></tr><tr><td> 105-topic-06 </td><td>(BOLGER, MATTHEW (8960))<BR>(CALDERON, JULIO (6722))<BR>(CAVALLO, FRANCESCO (2307))<BR>(CHAMBERLAIN, BRANDYN (7397))<BR>(DAVIS, MELITSA (8614))<BR>(DI_GIUSEPPE, MARISA (8060))<BR>(DOMINGO, JOHN (8397))<BR>(ELBROODY, DENA (2998))<BR>(ETIENNE, RUBEN (6965))<BR>(FORBES, KAREN (6103))<BR>(GALVIN, PETER (5616))<BR>(HANSEN, NICOLE (0816))<BR>(JORDAN, JESSICA (9865))<BR>(KATEHIS, CATHERINE (3704))<BR>(KATZ, DANIEL (1778))<BR>(RAMOS, STEPHANY (8097))<BR>(ST.CYR, JESSICA (5693))<BR>(TAYLOR, SHANELL (5062))<BR>(TEEHAN, ROBERT (9715))<BR>(WEERATNE, ROBERT (7966))</td></tr><tr><td> 105-topic-07 </td><td>(AZAROV, PAVLO (6816))<BR>(BOLGER, MATTHEW (8960))<BR>(CAVALLO, FRANCESCO (2307))<BR>(DAVIS, MELITSA (8614))<BR>(DI_GIUSEPPE, MARISA (8060))<BR>(DOMINGO, JOHN (8397))<BR>(ELBROODY, DENA (2998))<BR>(ETIENNE, RUBEN (6965))<BR>(FORBES, KAREN (6103))<BR>(HANSEN, NICOLE (0816))<BR>(JORDAN, JESSICA (9865))<BR>(KATEHIS, CATHERINE (3704))<BR>(LERER, ANNA (1284))<BR>(RAMOS, STEPHANY (8097))<BR>(ST.CYR, JESSICA (5693))<BR>(TAYLOR, SHANELL (5062))<BR>(TEEHAN, ROBERT (9715))<BR>(WEERATNE, ROBERT (7966))</td></tr><tr><td> 105-topic-08 </td><td>(ELBROODY, DENA (2998))<BR>(FORBES, KAREN (6103))<BR>(KATEHIS, CATHERINE (3704))<BR>(RAMOS, STEPHANY (8097))<BR>(ST.CYR, JESSICA (5693))<BR>(TAYLOR, SHANELL (5062))<BR>(TEEHAN, ROBERT (9715))<BR>(WEERATNE, ROBERT (7966))</td></tr><tr><td> 105-topic-09 </td><td>(DAVIS, MELITSA (8614))<BR>(FORBES, KAREN (6103))<BR>(KATEHIS, CATHERINE (3704))<BR>(LERER, ANNA (1284))<BR>(RAMOS, STEPHANY (8097))<BR>(ST.CYR, JESSICA (5693))<BR>(TAYLOR, SHANELL (5062))<BR>(TEEHAN, ROBERT (9715))<BR>(WEERATNE, ROBERT (7966))</td></tr><tr><td> 105-topic-10 </td><td>(AZAROV, PAVLO (6816))<BR>(BOLGER, MATTHEW (8960))<BR>(CAVALLO, FRANCESCO (2307))<BR>(CHAMBERLAIN, BRANDYN (7397))<BR>(DAVIS, MELITSA (8614))<BR>(DI_GIUSEPPE, MARISA (8060))<BR>(DOMINGO, JOHN (8397))<BR>(ELBROODY, DENA (2998))<BR>(ETIENNE, RUBEN (6965))<BR>(FORBES, KAREN (6103))<BR>(HANSEN, NICOLE (0816))<BR>(JORDAN, JESSICA (9865))<BR>(KATEHIS, CATHERINE (3704))<BR>(KATZ, DANIEL (1778))<BR>(LERER, ANNA (1284))<BR>(RAMOS, STEPHANY (8097))<BR>(ST.CYR, JESSICA (5693))<BR>(TAYLOR, SHANELL (5062))<BR>(TEEHAN, ROBERT (9715))<BR>(WEERATNE, ROBERT (7966))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>