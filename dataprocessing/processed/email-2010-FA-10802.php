#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KUGAN_T</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>5367</td><td>ALTMAN, MARC</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>6479</td><td>BIKRAM, NISA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>3827</td><td>CADENA, MICHAEL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>8095</td><td>CAINES, CASIDA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>5343</td><td>CALDERON, JOSE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7021</td><td>CHOWDHURY, SAFAWANA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>0316</td><td>COLON, TATIANA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>5585</td><td>DELBREY, CELESTE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>5159</td><td>DELGADO, NAOMI</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7130</td><td>DEMOTT, SARA</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>8538</td><td>DIALLO, YOUSSOUF</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2292</td><td>DIAZ, KIANA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>3696</td><td>DISLA, LUISFREDO</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>6286</td><td>ECHAVARRIA, NATALIA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>1951</td><td>GARNER, LAKIA</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>9703</td><td>GONCALVES, TIMOTHY</td><td>108-topic-01<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>2141</td><td>GRACI, VINCENT</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>4984</td><td>GUGLIELMONI, VICTORIA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>4217</td><td>HARVEY, FAITH</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>1678</td><td>HORVAT, CHEYENNE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>8953</td><td>INSWOOD, DOMINIQUE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>7056</td><td>KENYON, KRYSTLE</td><td>Passed everything.</td></tr><tr><td>6573</td><td>KNAPIK, CHRIS</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>9674</td><td>MARAVILLA, DUQUE</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>4328</td><td>MARTINEZ, JOSHUA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>1317</td><td>MATOS, DALMA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>3517</td><td>PADUANI, KRYSTAL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>5632</td><td>RAFAEL, TEREFRANCI</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>3980</td><td>RAGOOBIR, RYAN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>4197</td><td>REYES, CYNTHYA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04</td></tr><tr><td>0718</td><td>RODRIGUEZ, DANIELA</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>4436</td><td>ROTHMAN, JONATHAN</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04</td></tr><tr><td>9621</td><td>SANTANA, CARLOS</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04</td></tr><tr><td>5580</td><td>VELEZ, JOSEPH</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(ALTMAN, MARC (5367))<BR>(BIKRAM, NISA (6479))<BR>(CADENA, MICHAEL (3827))<BR>(CAINES, CASIDA (8095))<BR>(CALDERON, JOSE (5343))<BR>(CHOWDHURY, SAFAWANA (7021))<BR>(COLON, TATIANA (0316))<BR>(DELBREY, CELESTE (5585))<BR>(DELGADO, NAOMI (5159))<BR>(DIALLO, YOUSSOUF (8538))<BR>(DIAZ, KIANA (2292))<BR>(DISLA, LUISFREDO (3696))<BR>(ECHAVARRIA, NATALIA (6286))<BR>(GONCALVES, TIMOTHY (9703))<BR>(GUGLIELMONI, VICTORIA (4984))<BR>(HARVEY, FAITH (4217))<BR>(HORVAT, CHEYENNE (1678))<BR>(INSWOOD, DOMINIQUE (8953))<BR>(KNAPIK, CHRIS (6573))<BR>(MARAVILLA, DUQUE (9674))<BR>(MARTINEZ, JOSHUA (4328))<BR>(MATOS, DALMA (1317))<BR>(PADUANI, KRYSTAL (3517))<BR>(RAFAEL, TEREFRANCI (5632))<BR>(RAGOOBIR, RYAN (3980))<BR>(REYES, CYNTHYA (4197))<BR>(ROTHMAN, JONATHAN (4436))<BR>(SANTANA, CARLOS (9621))<BR>(VELEZ, JOSEPH (5580))</td></tr><tr><td> 108-topic-02 </td><td>(CAINES, CASIDA (8095))<BR>(CHOWDHURY, SAFAWANA (7021))<BR>(COLON, TATIANA (0316))<BR>(DELBREY, CELESTE (5585))<BR>(DELGADO, NAOMI (5159))<BR>(DEMOTT, SARA (7130))<BR>(DIALLO, YOUSSOUF (8538))<BR>(DISLA, LUISFREDO (3696))<BR>(GARNER, LAKIA (1951))<BR>(GRACI, VINCENT (2141))<BR>(HARVEY, FAITH (4217))<BR>(HORVAT, CHEYENNE (1678))<BR>(INSWOOD, DOMINIQUE (8953))<BR>(MARAVILLA, DUQUE (9674))<BR>(MARTINEZ, JOSHUA (4328))<BR>(RAFAEL, TEREFRANCI (5632))<BR>(ROTHMAN, JONATHAN (4436))<BR>(SANTANA, CARLOS (9621))<BR>(VELEZ, JOSEPH (5580))</td></tr><tr><td> 108-topic-03 </td><td>(ALTMAN, MARC (5367))<BR>(BIKRAM, NISA (6479))<BR>(CADENA, MICHAEL (3827))<BR>(CAINES, CASIDA (8095))<BR>(CALDERON, JOSE (5343))<BR>(CHOWDHURY, SAFAWANA (7021))<BR>(COLON, TATIANA (0316))<BR>(DELBREY, CELESTE (5585))<BR>(DELGADO, NAOMI (5159))<BR>(DEMOTT, SARA (7130))<BR>(DIALLO, YOUSSOUF (8538))<BR>(DIAZ, KIANA (2292))<BR>(DISLA, LUISFREDO (3696))<BR>(ECHAVARRIA, NATALIA (6286))<BR>(GARNER, LAKIA (1951))<BR>(GRACI, VINCENT (2141))<BR>(GUGLIELMONI, VICTORIA (4984))<BR>(HARVEY, FAITH (4217))<BR>(HORVAT, CHEYENNE (1678))<BR>(INSWOOD, DOMINIQUE (8953))<BR>(KNAPIK, CHRIS (6573))<BR>(MARAVILLA, DUQUE (9674))<BR>(MARTINEZ, JOSHUA (4328))<BR>(MATOS, DALMA (1317))<BR>(PADUANI, KRYSTAL (3517))<BR>(RAGOOBIR, RYAN (3980))<BR>(REYES, CYNTHYA (4197))<BR>(RODRIGUEZ, DANIELA (0718))<BR>(SANTANA, CARLOS (9621))</td></tr><tr><td> 108-topic-04 </td><td>(ALTMAN, MARC (5367))<BR>(BIKRAM, NISA (6479))<BR>(CADENA, MICHAEL (3827))<BR>(CAINES, CASIDA (8095))<BR>(CHOWDHURY, SAFAWANA (7021))<BR>(COLON, TATIANA (0316))<BR>(DELBREY, CELESTE (5585))<BR>(DELGADO, NAOMI (5159))<BR>(DEMOTT, SARA (7130))<BR>(DIALLO, YOUSSOUF (8538))<BR>(DIAZ, KIANA (2292))<BR>(DISLA, LUISFREDO (3696))<BR>(ECHAVARRIA, NATALIA (6286))<BR>(GARNER, LAKIA (1951))<BR>(GRACI, VINCENT (2141))<BR>(GUGLIELMONI, VICTORIA (4984))<BR>(HARVEY, FAITH (4217))<BR>(HORVAT, CHEYENNE (1678))<BR>(INSWOOD, DOMINIQUE (8953))<BR>(KNAPIK, CHRIS (6573))<BR>(MARAVILLA, DUQUE (9674))<BR>(MARTINEZ, JOSHUA (4328))<BR>(MATOS, DALMA (1317))<BR>(PADUANI, KRYSTAL (3517))<BR>(RAFAEL, TEREFRANCI (5632))<BR>(RAGOOBIR, RYAN (3980))<BR>(REYES, CYNTHYA (4197))<BR>(RODRIGUEZ, DANIELA (0718))<BR>(ROTHMAN, JONATHAN (4436))<BR>(SANTANA, CARLOS (9621))<BR>(VELEZ, JOSEPH (5580))</td></tr><tr><td> 108-topic-05 </td><td>(ALTMAN, MARC (5367))<BR>(BIKRAM, NISA (6479))<BR>(CADENA, MICHAEL (3827))<BR>(CAINES, CASIDA (8095))<BR>(CALDERON, JOSE (5343))<BR>(CHOWDHURY, SAFAWANA (7021))<BR>(COLON, TATIANA (0316))<BR>(DELBREY, CELESTE (5585))<BR>(DEMOTT, SARA (7130))<BR>(DIAZ, KIANA (2292))<BR>(DISLA, LUISFREDO (3696))<BR>(ECHAVARRIA, NATALIA (6286))<BR>(GARNER, LAKIA (1951))<BR>(GONCALVES, TIMOTHY (9703))<BR>(GRACI, VINCENT (2141))<BR>(HARVEY, FAITH (4217))<BR>(HORVAT, CHEYENNE (1678))<BR>(INSWOOD, DOMINIQUE (8953))<BR>(MARAVILLA, DUQUE (9674))<BR>(MARTINEZ, JOSHUA (4328))<BR>(MATOS, DALMA (1317))<BR>(PADUANI, KRYSTAL (3517))<BR>(RAFAEL, TEREFRANCI (5632))<BR>(RAGOOBIR, RYAN (3980))<BR>(RODRIGUEZ, DANIELA (0718))<BR>(VELEZ, JOSEPH (5580))</td></tr><tr><td> 108-topic-06 </td><td>(CHOWDHURY, SAFAWANA (7021))<BR>(DIAZ, KIANA (2292))<BR>(DISLA, LUISFREDO (3696))<BR>(GARNER, LAKIA (1951))<BR>(GONCALVES, TIMOTHY (9703))<BR>(HARVEY, FAITH (4217))<BR>(HORVAT, CHEYENNE (1678))<BR>(INSWOOD, DOMINIQUE (8953))<BR>(KNAPIK, CHRIS (6573))<BR>(MARAVILLA, DUQUE (9674))<BR>(MARTINEZ, JOSHUA (4328))<BR>(MATOS, DALMA (1317))<BR>(PADUANI, KRYSTAL (3517))<BR>(RODRIGUEZ, DANIELA (0718))</td></tr><tr><td> 108-topic-07 </td><td>(CAINES, CASIDA (8095))<BR>(CHOWDHURY, SAFAWANA (7021))<BR>(DELBREY, CELESTE (5585))<BR>(DIAZ, KIANA (2292))<BR>(INSWOOD, DOMINIQUE (8953))<BR>(KNAPIK, CHRIS (6573))<BR>(MATOS, DALMA (1317))<BR>(PADUANI, KRYSTAL (3517))<BR>(RAFAEL, TEREFRANCI (5632))<BR>(RAGOOBIR, RYAN (3980))<BR>(VELEZ, JOSEPH (5580))</td></tr><tr><td> 108-topic-08 </td><td>(CAINES, CASIDA (8095))<BR>(CHOWDHURY, SAFAWANA (7021))<BR>(MARAVILLA, DUQUE (9674))<BR>(MATOS, DALMA (1317))<BR>(RAFAEL, TEREFRANCI (5632))<BR>(RODRIGUEZ, DANIELA (0718))</td></tr><tr><td> 108-topic-09 </td><td>(CALDERON, JOSE (5343))<BR>(DELGADO, NAOMI (5159))<BR>(DEMOTT, SARA (7130))<BR>(DIALLO, YOUSSOUF (8538))<BR>(DIAZ, KIANA (2292))<BR>(DISLA, LUISFREDO (3696))<BR>(GRACI, VINCENT (2141))<BR>(HORVAT, CHEYENNE (1678))<BR>(KNAPIK, CHRIS (6573))<BR>(MATOS, DALMA (1317))<BR>(PADUANI, KRYSTAL (3517))<BR>(RAFAEL, TEREFRANCI (5632))<BR>(RAGOOBIR, RYAN (3980))</td></tr><tr><td> 108-topic-10 </td><td>(CAINES, CASIDA (8095))<BR>(CALDERON, JOSE (5343))<BR>(CHOWDHURY, SAFAWANA (7021))<BR>(DELBREY, CELESTE (5585))<BR>(DELGADO, NAOMI (5159))<BR>(DEMOTT, SARA (7130))<BR>(DIALLO, YOUSSOUF (8538))<BR>(DIAZ, KIANA (2292))<BR>(DISLA, LUISFREDO (3696))<BR>(GARNER, LAKIA (1951))<BR>(GRACI, VINCENT (2141))<BR>(GUGLIELMONI, VICTORIA (4984))<BR>(HARVEY, FAITH (4217))<BR>(INSWOOD, DOMINIQUE (8953))<BR>(KNAPIK, CHRIS (6573))<BR>(MARAVILLA, DUQUE (9674))<BR>(MATOS, DALMA (1317))<BR>(PADUANI, KRYSTAL (3517))<BR>(RAFAEL, TEREFRANCI (5632))<BR>(RAGOOBIR, RYAN (3980))<BR>(RODRIGUEZ, DANIELA (0718))<BR>(VELEZ, JOSEPH (5580))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>