#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>10</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SAMUEL_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9392</td><td>AJAZI, MERILIN</td><td>105-topic-04<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>7146</td><td>AKOPYAN, ANGELA</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>8121</td><td>ALASALVAR, ZAFER</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>6946</td><td>AMORES, EMELINA</td><td>105-topic-02<BR>105-topic-04<BR>105-topic-06</td></tr><tr><td>4729</td><td>BROWN, JHEANELL</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>3451</td><td>CONWAY, MICHAEL</td><td>105-topic-04<BR>105-topic-06</td></tr><tr><td>1550</td><td>DE_SOUZA_FERREIRA, LINA</td><td>105-topic-02<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>5367</td><td>ELCOCK, EARLSON</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>7434</td><td>HARRIS, ROSELLA</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>1900</td><td>HERNANDEZ, JEANIE</td><td>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>8800</td><td>JACKSON, EMERALD</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>6040</td><td>KERN, DANIEL</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>2406</td><td>LACHHMANEN, DEDREAN</td><td>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>3329</td><td>LOPEZ, MARIA</td><td>Passed everything.</td></tr><tr><td>6256</td><td>LOUIS, CARL</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>9536</td><td>MADORSKY, DMITRY</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>2432</td><td>MALDONADO, MARIAH</td><td>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>2796</td><td>MCFARLANE, CARLA</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>4935</td><td>NDREU, ERMIR</td><td>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>5248</td><td>POGOSOVA, SARAH</td><td>105-topic-06<BR>105-topic-07</td></tr><tr><td>6332</td><td>RAMROOP, NATALIE</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>0130</td><td>RODRIGUEZ, DAVID</td><td>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>6165</td><td>RODRIGUEZ, MARIA</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>5803</td><td>ROSARIO, MABEL</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>5176</td><td>SANTIAGO, NATALIE</td><td>105-topic-01<BR>105-topic-04<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>7462</td><td>SILLAU, GIOVANNI</td><td>105-topic-09<BR>105-topic-10</td></tr><tr><td>4129</td><td>TARARAKA, ALEXANDER</td><td>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>0439</td><td>TIBANA, BRIGITTE</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-04<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>2817</td><td>URUCHIMA, SAMANTHA</td><td>105-topic-03<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>5875</td><td>VALDEZ, TRACY</td><td>Absent on the assessment test.</td></tr><tr><td>8461</td><td>VECERIN, SAMANTHA</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>4563</td><td>VELEZ, JONATHAN</td><td>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-10</td></tr><tr><td>0609</td><td>WALSH, KAITLYN</td><td>105-topic-02<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>2083</td><td>XOCHMITL, KATHYA</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-01 </td><td>(AKOPYAN, ANGELA (7146))<BR>(ALASALVAR, ZAFER (8121))<BR>(BROWN, JHEANELL (4729))<BR>(ELCOCK, EARLSON (5367))<BR>(HARRIS, ROSELLA (7434))<BR>(JACKSON, EMERALD (8800))<BR>(KERN, DANIEL (6040))<BR>(LOUIS, CARL (6256))<BR>(MADORSKY, DMITRY (9536))<BR>(MCFARLANE, CARLA (2796))<BR>(RAMROOP, NATALIE (6332))<BR>(RODRIGUEZ, MARIA (6165))<BR>(ROSARIO, MABEL (5803))<BR>(SANTIAGO, NATALIE (5176))<BR>(TIBANA, BRIGITTE (0439))<BR>(VECERIN, SAMANTHA (8461))<BR>(XOCHMITL, KATHYA (2083))</td></tr><tr><td> 105-topic-02 </td><td>(AMORES, EMELINA (6946))<BR>(BROWN, JHEANELL (4729))<BR>(DE_SOUZA_FERREIRA, LINA (1550))<BR>(JACKSON, EMERALD (8800))<BR>(KERN, DANIEL (6040))<BR>(LOUIS, CARL (6256))<BR>(MADORSKY, DMITRY (9536))<BR>(MALDONADO, MARIAH (2432))<BR>(RAMROOP, NATALIE (6332))<BR>(RODRIGUEZ, MARIA (6165))<BR>(ROSARIO, MABEL (5803))<BR>(TARARAKA, ALEXANDER (4129))<BR>(VECERIN, SAMANTHA (8461))<BR>(VELEZ, JONATHAN (4563))<BR>(WALSH, KAITLYN (0609))<BR>(XOCHMITL, KATHYA (2083))</td></tr><tr><td> 105-topic-03 </td><td>(AKOPYAN, ANGELA (7146))<BR>(ALASALVAR, ZAFER (8121))<BR>(BROWN, JHEANELL (4729))<BR>(ELCOCK, EARLSON (5367))<BR>(HARRIS, ROSELLA (7434))<BR>(KERN, DANIEL (6040))<BR>(LACHHMANEN, DEDREAN (2406))<BR>(LOUIS, CARL (6256))<BR>(MALDONADO, MARIAH (2432))<BR>(MCFARLANE, CARLA (2796))<BR>(NDREU, ERMIR (4935))<BR>(RAMROOP, NATALIE (6332))<BR>(RODRIGUEZ, MARIA (6165))<BR>(ROSARIO, MABEL (5803))<BR>(TIBANA, BRIGITTE (0439))<BR>(URUCHIMA, SAMANTHA (2817))<BR>(XOCHMITL, KATHYA (2083))</td></tr><tr><td> 105-topic-04 </td><td>(AJAZI, MERILIN (9392))<BR>(AKOPYAN, ANGELA (7146))<BR>(ALASALVAR, ZAFER (8121))<BR>(AMORES, EMELINA (6946))<BR>(BROWN, JHEANELL (4729))<BR>(CONWAY, MICHAEL (3451))<BR>(ELCOCK, EARLSON (5367))<BR>(HARRIS, ROSELLA (7434))<BR>(KERN, DANIEL (6040))<BR>(LOUIS, CARL (6256))<BR>(MADORSKY, DMITRY (9536))<BR>(MALDONADO, MARIAH (2432))<BR>(MCFARLANE, CARLA (2796))<BR>(NDREU, ERMIR (4935))<BR>(RAMROOP, NATALIE (6332))<BR>(RODRIGUEZ, MARIA (6165))<BR>(ROSARIO, MABEL (5803))<BR>(SANTIAGO, NATALIE (5176))<BR>(TARARAKA, ALEXANDER (4129))<BR>(TIBANA, BRIGITTE (0439))<BR>(VECERIN, SAMANTHA (8461))<BR>(VELEZ, JONATHAN (4563))<BR>(XOCHMITL, KATHYA (2083))</td></tr><tr><td> 105-topic-05 </td><td>(AKOPYAN, ANGELA (7146))<BR>(ALASALVAR, ZAFER (8121))<BR>(BROWN, JHEANELL (4729))<BR>(HARRIS, ROSELLA (7434))<BR>(JACKSON, EMERALD (8800))<BR>(KERN, DANIEL (6040))<BR>(LACHHMANEN, DEDREAN (2406))<BR>(LOUIS, CARL (6256))<BR>(MADORSKY, DMITRY (9536))<BR>(MCFARLANE, CARLA (2796))<BR>(NDREU, ERMIR (4935))<BR>(RAMROOP, NATALIE (6332))<BR>(RODRIGUEZ, DAVID (0130))<BR>(RODRIGUEZ, MARIA (6165))<BR>(ROSARIO, MABEL (5803))<BR>(TARARAKA, ALEXANDER (4129))<BR>(VECERIN, SAMANTHA (8461))<BR>(VELEZ, JONATHAN (4563))<BR>(WALSH, KAITLYN (0609))<BR>(XOCHMITL, KATHYA (2083))</td></tr><tr><td> 105-topic-06 </td><td>(AJAZI, MERILIN (9392))<BR>(AKOPYAN, ANGELA (7146))<BR>(ALASALVAR, ZAFER (8121))<BR>(AMORES, EMELINA (6946))<BR>(BROWN, JHEANELL (4729))<BR>(CONWAY, MICHAEL (3451))<BR>(DE_SOUZA_FERREIRA, LINA (1550))<BR>(ELCOCK, EARLSON (5367))<BR>(HARRIS, ROSELLA (7434))<BR>(HERNANDEZ, JEANIE (1900))<BR>(JACKSON, EMERALD (8800))<BR>(KERN, DANIEL (6040))<BR>(LACHHMANEN, DEDREAN (2406))<BR>(LOUIS, CARL (6256))<BR>(MADORSKY, DMITRY (9536))<BR>(MALDONADO, MARIAH (2432))<BR>(MCFARLANE, CARLA (2796))<BR>(NDREU, ERMIR (4935))<BR>(POGOSOVA, SARAH (5248))<BR>(RAMROOP, NATALIE (6332))<BR>(RODRIGUEZ, DAVID (0130))<BR>(RODRIGUEZ, MARIA (6165))<BR>(ROSARIO, MABEL (5803))<BR>(SANTIAGO, NATALIE (5176))<BR>(TIBANA, BRIGITTE (0439))<BR>(URUCHIMA, SAMANTHA (2817))<BR>(VECERIN, SAMANTHA (8461))<BR>(VELEZ, JONATHAN (4563))<BR>(WALSH, KAITLYN (0609))<BR>(XOCHMITL, KATHYA (2083))</td></tr><tr><td> 105-topic-07 </td><td>(AKOPYAN, ANGELA (7146))<BR>(ALASALVAR, ZAFER (8121))<BR>(BROWN, JHEANELL (4729))<BR>(HARRIS, ROSELLA (7434))<BR>(HERNANDEZ, JEANIE (1900))<BR>(JACKSON, EMERALD (8800))<BR>(KERN, DANIEL (6040))<BR>(LACHHMANEN, DEDREAN (2406))<BR>(LOUIS, CARL (6256))<BR>(MADORSKY, DMITRY (9536))<BR>(MALDONADO, MARIAH (2432))<BR>(MCFARLANE, CARLA (2796))<BR>(NDREU, ERMIR (4935))<BR>(POGOSOVA, SARAH (5248))<BR>(RAMROOP, NATALIE (6332))<BR>(RODRIGUEZ, DAVID (0130))<BR>(RODRIGUEZ, MARIA (6165))<BR>(ROSARIO, MABEL (5803))<BR>(SANTIAGO, NATALIE (5176))<BR>(TARARAKA, ALEXANDER (4129))<BR>(TIBANA, BRIGITTE (0439))<BR>(URUCHIMA, SAMANTHA (2817))<BR>(VECERIN, SAMANTHA (8461))<BR>(WALSH, KAITLYN (0609))<BR>(XOCHMITL, KATHYA (2083))</td></tr><tr><td> 105-topic-08 </td><td>(AKOPYAN, ANGELA (7146))<BR>(ALASALVAR, ZAFER (8121))<BR>(BROWN, JHEANELL (4729))<BR>(KERN, DANIEL (6040))<BR>(LACHHMANEN, DEDREAN (2406))<BR>(LOUIS, CARL (6256))<BR>(MALDONADO, MARIAH (2432))<BR>(MCFARLANE, CARLA (2796))<BR>(NDREU, ERMIR (4935))<BR>(RODRIGUEZ, MARIA (6165))<BR>(ROSARIO, MABEL (5803))<BR>(SANTIAGO, NATALIE (5176))<BR>(VECERIN, SAMANTHA (8461))<BR>(WALSH, KAITLYN (0609))<BR>(XOCHMITL, KATHYA (2083))</td></tr><tr><td> 105-topic-09 </td><td>(AKOPYAN, ANGELA (7146))<BR>(ALASALVAR, ZAFER (8121))<BR>(HARRIS, ROSELLA (7434))<BR>(JACKSON, EMERALD (8800))<BR>(LOUIS, CARL (6256))<BR>(MADORSKY, DMITRY (9536))<BR>(MCFARLANE, CARLA (2796))<BR>(NDREU, ERMIR (4935))<BR>(RAMROOP, NATALIE (6332))<BR>(RODRIGUEZ, DAVID (0130))<BR>(RODRIGUEZ, MARIA (6165))<BR>(ROSARIO, MABEL (5803))<BR>(SANTIAGO, NATALIE (5176))<BR>(SILLAU, GIOVANNI (7462))<BR>(VECERIN, SAMANTHA (8461))<BR>(WALSH, KAITLYN (0609))</td></tr><tr><td> 105-topic-10 </td><td>(AJAZI, MERILIN (9392))<BR>(AKOPYAN, ANGELA (7146))<BR>(ALASALVAR, ZAFER (8121))<BR>(BROWN, JHEANELL (4729))<BR>(DE_SOUZA_FERREIRA, LINA (1550))<BR>(ELCOCK, EARLSON (5367))<BR>(HARRIS, ROSELLA (7434))<BR>(HERNANDEZ, JEANIE (1900))<BR>(JACKSON, EMERALD (8800))<BR>(KERN, DANIEL (6040))<BR>(LACHHMANEN, DEDREAN (2406))<BR>(LOUIS, CARL (6256))<BR>(MADORSKY, DMITRY (9536))<BR>(MALDONADO, MARIAH (2432))<BR>(MCFARLANE, CARLA (2796))<BR>(NDREU, ERMIR (4935))<BR>(RAMROOP, NATALIE (6332))<BR>(RODRIGUEZ, DAVID (0130))<BR>(RODRIGUEZ, MARIA (6165))<BR>(ROSARIO, MABEL (5803))<BR>(SANTIAGO, NATALIE (5176))<BR>(SILLAU, GIOVANNI (7462))<BR>(TARARAKA, ALEXANDER (4129))<BR>(TIBANA, BRIGITTE (0439))<BR>(URUCHIMA, SAMANTHA (2817))<BR>(VECERIN, SAMANTHA (8461))<BR>(VELEZ, JONATHAN (4563))<BR>(WALSH, KAITLYN (0609))<BR>(XOCHMITL, KATHYA (2083))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>