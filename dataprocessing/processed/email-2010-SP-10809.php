#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>09</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>GARRETT_K</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>4813</td><td>BARRETT, NATALIE</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>4542</td><td>BARRIOS, JOSHUA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>8936</td><td>CANTALINO, PASQUALE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>6674</td><td>CASTILLO, JAY</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>5857</td><td>CESAR, ELIZABETH</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>6236</td><td>CHOPRA, AMIT</td><td>108-topic-05</td></tr><tr><td>0861</td><td>CUOMO, VINCENT</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>3911</td><td>D'ERASMO, STEPHANIE</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>7396</td><td>DIXON, MARGARET</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>9899</td><td>FINAMORE, TIFFANIE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-09</td></tr><tr><td>0008</td><td>GEIGER, SEAN</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>4412</td><td>GORDON, KALIFA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>3398</td><td>HECTOR, DEBORAH</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>8818</td><td>HOCALAR, ESIN</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>4979</td><td>KHAN, FARAH</td><td>108-topic-03<BR>108-topic-05</td></tr><tr><td>9673</td><td>LOPEZ, DENNIS</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>9017</td><td>LORA, MONICA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04</td></tr><tr><td>1118</td><td>MALDONADO, STEVE</td><td>108-topic-03<BR>108-topic-10</td></tr><tr><td>1205</td><td>MARCELIN, MELYSSA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>8347</td><td>MATEO, JUSTIN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>8072</td><td>MAURA, MARIO</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-07</td></tr><tr><td>3574</td><td>MOLINA, CYNTHIA</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08</td></tr><tr><td>1651</td><td>MONTI, VICTORIA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>1817</td><td>PEREZ, KRYSTAL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>5173</td><td>POLYNICE, ARNAUD</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>3048</td><td>RIOS, MILDRED</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>7006</td><td>RODGERS, ZAKEIA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>1876</td><td>ROQUE, GWENDOLYN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>3050</td><td>SALAZAR, JAZMINE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>5377</td><td>SARWAR, LILA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>8964</td><td>SINGH, MANISHA</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>4970</td><td>YIP, VERONICA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06</td></tr><tr><td>3582</td><td>ZHENG, YAN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(BARRIOS, JOSHUA (4542))<BR>(CANTALINO, PASQUALE (8936))<BR>(CESAR, ELIZABETH (5857))<BR>(CUOMO, VINCENT (0861))<BR>(DIXON, MARGARET (7396))<BR>(FINAMORE, TIFFANIE (9899))<BR>(GORDON, KALIFA (4412))<BR>(HECTOR, DEBORAH (3398))<BR>(LOPEZ, DENNIS (9673))<BR>(LORA, MONICA (9017))<BR>(MARCELIN, MELYSSA (1205))<BR>(MATEO, JUSTIN (8347))<BR>(MONTI, VICTORIA (1651))<BR>(PEREZ, KRYSTAL (1817))<BR>(POLYNICE, ARNAUD (5173))<BR>(RODGERS, ZAKEIA (7006))<BR>(ROQUE, GWENDOLYN (1876))<BR>(SALAZAR, JAZMINE (3050))<BR>(SARWAR, LILA (5377))<BR>(YIP, VERONICA (4970))<BR>(ZHENG, YAN (3582))</td></tr><tr><td> 108-topic-02 </td><td>(CANTALINO, PASQUALE (8936))<BR>(CASTILLO, JAY (6674))<BR>(CESAR, ELIZABETH (5857))<BR>(CUOMO, VINCENT (0861))<BR>(DIXON, MARGARET (7396))<BR>(FINAMORE, TIFFANIE (9899))<BR>(GEIGER, SEAN (0008))<BR>(HECTOR, DEBORAH (3398))<BR>(MARCELIN, MELYSSA (1205))<BR>(MOLINA, CYNTHIA (3574))<BR>(POLYNICE, ARNAUD (5173))<BR>(RIOS, MILDRED (3048))<BR>(SARWAR, LILA (5377))<BR>(YIP, VERONICA (4970))</td></tr><tr><td> 108-topic-03 </td><td>(BARRETT, NATALIE (4813))<BR>(BARRIOS, JOSHUA (4542))<BR>(CANTALINO, PASQUALE (8936))<BR>(CASTILLO, JAY (6674))<BR>(CESAR, ELIZABETH (5857))<BR>(CUOMO, VINCENT (0861))<BR>(D'ERASMO, STEPHANIE (3911))<BR>(DIXON, MARGARET (7396))<BR>(FINAMORE, TIFFANIE (9899))<BR>(GEIGER, SEAN (0008))<BR>(GORDON, KALIFA (4412))<BR>(HECTOR, DEBORAH (3398))<BR>(HOCALAR, ESIN (8818))<BR>(KHAN, FARAH (4979))<BR>(LORA, MONICA (9017))<BR>(MALDONADO, STEVE (1118))<BR>(MATEO, JUSTIN (8347))<BR>(MOLINA, CYNTHIA (3574))<BR>(MONTI, VICTORIA (1651))<BR>(PEREZ, KRYSTAL (1817))<BR>(POLYNICE, ARNAUD (5173))<BR>(RIOS, MILDRED (3048))<BR>(RODGERS, ZAKEIA (7006))<BR>(ROQUE, GWENDOLYN (1876))<BR>(SALAZAR, JAZMINE (3050))<BR>(SARWAR, LILA (5377))<BR>(SINGH, MANISHA (8964))<BR>(YIP, VERONICA (4970))<BR>(ZHENG, YAN (3582))</td></tr><tr><td> 108-topic-04 </td><td>(BARRETT, NATALIE (4813))<BR>(BARRIOS, JOSHUA (4542))<BR>(CANTALINO, PASQUALE (8936))<BR>(CASTILLO, JAY (6674))<BR>(CESAR, ELIZABETH (5857))<BR>(CUOMO, VINCENT (0861))<BR>(D'ERASMO, STEPHANIE (3911))<BR>(DIXON, MARGARET (7396))<BR>(FINAMORE, TIFFANIE (9899))<BR>(GEIGER, SEAN (0008))<BR>(GORDON, KALIFA (4412))<BR>(HECTOR, DEBORAH (3398))<BR>(HOCALAR, ESIN (8818))<BR>(LOPEZ, DENNIS (9673))<BR>(LORA, MONICA (9017))<BR>(MARCELIN, MELYSSA (1205))<BR>(MATEO, JUSTIN (8347))<BR>(MAURA, MARIO (8072))<BR>(MOLINA, CYNTHIA (3574))<BR>(PEREZ, KRYSTAL (1817))<BR>(POLYNICE, ARNAUD (5173))<BR>(RIOS, MILDRED (3048))<BR>(RODGERS, ZAKEIA (7006))<BR>(ROQUE, GWENDOLYN (1876))<BR>(SALAZAR, JAZMINE (3050))<BR>(SARWAR, LILA (5377))<BR>(SINGH, MANISHA (8964))<BR>(YIP, VERONICA (4970))<BR>(ZHENG, YAN (3582))</td></tr><tr><td> 108-topic-05 </td><td>(BARRETT, NATALIE (4813))<BR>(BARRIOS, JOSHUA (4542))<BR>(CANTALINO, PASQUALE (8936))<BR>(CASTILLO, JAY (6674))<BR>(CHOPRA, AMIT (6236))<BR>(CUOMO, VINCENT (0861))<BR>(DIXON, MARGARET (7396))<BR>(FINAMORE, TIFFANIE (9899))<BR>(GEIGER, SEAN (0008))<BR>(GORDON, KALIFA (4412))<BR>(HECTOR, DEBORAH (3398))<BR>(HOCALAR, ESIN (8818))<BR>(KHAN, FARAH (4979))<BR>(MARCELIN, MELYSSA (1205))<BR>(MAURA, MARIO (8072))<BR>(MOLINA, CYNTHIA (3574))<BR>(MONTI, VICTORIA (1651))<BR>(PEREZ, KRYSTAL (1817))<BR>(RIOS, MILDRED (3048))<BR>(ROQUE, GWENDOLYN (1876))<BR>(SALAZAR, JAZMINE (3050))<BR>(SARWAR, LILA (5377))<BR>(SINGH, MANISHA (8964))<BR>(ZHENG, YAN (3582))</td></tr><tr><td> 108-topic-06 </td><td>(BARRIOS, JOSHUA (4542))<BR>(CANTALINO, PASQUALE (8936))<BR>(CASTILLO, JAY (6674))<BR>(CESAR, ELIZABETH (5857))<BR>(CUOMO, VINCENT (0861))<BR>(DIXON, MARGARET (7396))<BR>(FINAMORE, TIFFANIE (9899))<BR>(GEIGER, SEAN (0008))<BR>(GORDON, KALIFA (4412))<BR>(HECTOR, DEBORAH (3398))<BR>(HOCALAR, ESIN (8818))<BR>(MARCELIN, MELYSSA (1205))<BR>(MATEO, JUSTIN (8347))<BR>(MOLINA, CYNTHIA (3574))<BR>(PEREZ, KRYSTAL (1817))<BR>(RODGERS, ZAKEIA (7006))<BR>(ROQUE, GWENDOLYN (1876))<BR>(SARWAR, LILA (5377))<BR>(SINGH, MANISHA (8964))<BR>(YIP, VERONICA (4970))<BR>(ZHENG, YAN (3582))</td></tr><tr><td> 108-topic-07 </td><td>(BARRIOS, JOSHUA (4542))<BR>(CASTILLO, JAY (6674))<BR>(CESAR, ELIZABETH (5857))<BR>(DIXON, MARGARET (7396))<BR>(MAURA, MARIO (8072))<BR>(MOLINA, CYNTHIA (3574))<BR>(SARWAR, LILA (5377))</td></tr><tr><td> 108-topic-08 </td><td>(BARRIOS, JOSHUA (4542))<BR>(CESAR, ELIZABETH (5857))<BR>(FINAMORE, TIFFANIE (9899))<BR>(GORDON, KALIFA (4412))<BR>(MOLINA, CYNTHIA (3574))<BR>(PEREZ, KRYSTAL (1817))<BR>(POLYNICE, ARNAUD (5173))<BR>(SALAZAR, JAZMINE (3050))<BR>(SARWAR, LILA (5377))</td></tr><tr><td> 108-topic-09 </td><td>(BARRIOS, JOSHUA (4542))<BR>(FINAMORE, TIFFANIE (9899))<BR>(GORDON, KALIFA (4412))<BR>(HOCALAR, ESIN (8818))<BR>(POLYNICE, ARNAUD (5173))</td></tr><tr><td> 108-topic-10 </td><td>(BARRETT, NATALIE (4813))<BR>(BARRIOS, JOSHUA (4542))<BR>(CANTALINO, PASQUALE (8936))<BR>(CASTILLO, JAY (6674))<BR>(CESAR, ELIZABETH (5857))<BR>(CUOMO, VINCENT (0861))<BR>(D'ERASMO, STEPHANIE (3911))<BR>(DIXON, MARGARET (7396))<BR>(GEIGER, SEAN (0008))<BR>(GORDON, KALIFA (4412))<BR>(HOCALAR, ESIN (8818))<BR>(LOPEZ, DENNIS (9673))<BR>(MALDONADO, STEVE (1118))<BR>(MATEO, JUSTIN (8347))<BR>(MONTI, VICTORIA (1651))<BR>(PEREZ, KRYSTAL (1817))<BR>(POLYNICE, ARNAUD (5173))<BR>(RIOS, MILDRED (3048))<BR>(RODGERS, ZAKEIA (7006))<BR>(ROQUE, GWENDOLYN (1876))<BR>(SALAZAR, JAZMINE (3050))<BR>(SARWAR, LILA (5377))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
