#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>10</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>VODOUNON_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9795</td><td>ALIKAKOS, GEORGE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04</td></tr><tr><td>0704</td><td>ARMSTRONG, KIMBERLY</td><td>108-topic-01<BR>108-topic-05</td></tr><tr><td>8944</td><td>BERNADIN, EARLYNN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>0211</td><td>BROOKS, DEVYNN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>0799</td><td>BUTT, AMEL</td><td>108-topic-02<BR>108-topic-04<BR>108-topic-09</td></tr><tr><td>8264</td><td>CASTILLO, GISELLA</td><td>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>1153</td><td>CASTILLO, YAMEELICE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7066</td><td>CLEMENTE, LUIGI</td><td>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>2890</td><td>DIAZ, CHRISTIAN</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>1933</td><td>FRANCIS, BRITTANY</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08<BR>108-topic-09</td></tr><tr><td>3843</td><td>GARCIA, BIKELBY</td><td>108-topic-04<BR>108-topic-05</td></tr><tr><td>3833</td><td>GOMEZ, DANIELA</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>8469</td><td>HAVIARAS, ANGELICA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04</td></tr><tr><td>0723</td><td>HEIDEL, AMANDA</td><td>108-topic-02<BR>108-topic-04</td></tr><tr><td>6849</td><td>HOTI, KUSHTRIM</td><td>108-topic-01<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>5809</td><td>JACKSON, PATRICK</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>9457</td><td>LATORRE, STEVEN</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>7473</td><td>LEY, JEFFREY</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>2050</td><td>LOGU, DENNIS</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>5081</td><td>MASBOOB, MARY</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>8583</td><td>MCCARTHY, KAMAY</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>4229</td><td>RAMLAKHAN, BHAJPAUL</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>4864</td><td>RODRIGUEZ, MANUEL</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>5801</td><td>RODRIGUEZ, VIANNA</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>9546</td><td>ROMAN, MARLEE</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>2338</td><td>SALGADO, MIGUEL</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-10</td></tr><tr><td>0938</td><td>SOMMA, ALESSANDRO</td><td>Absent on the assessment test.</td></tr><tr><td>8579</td><td>VAQUERO, NELSON</td><td>Absent on the assessment test.</td></tr><tr><td>2554</td><td>VASQUEZ, CHRISTOPHER</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-08</td></tr><tr><td>3870</td><td>VAZQUEZ, KATHERINE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>6896</td><td>YE, JIANQI</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>6804</td><td>ZAPATA_VALERIO, RAFAELA</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(ALIKAKOS, GEORGE (9795))<BR>(ARMSTRONG, KIMBERLY (0704))<BR>(BERNADIN, EARLYNN (8944))<BR>(BROOKS, DEVYNN (0211))<BR>(CASTILLO, YAMEELICE (1153))<BR>(DIAZ, CHRISTIAN (2890))<BR>(FRANCIS, BRITTANY (1933))<BR>(HAVIARAS, ANGELICA (8469))<BR>(HOTI, KUSHTRIM (6849))<BR>(LEY, JEFFREY (7473))<BR>(MCCARTHY, KAMAY (8583))<BR>(RAMLAKHAN, BHAJPAUL (4229))<BR>(RODRIGUEZ, MANUEL (4864))<BR>(SALGADO, MIGUEL (2338))<BR>(VAZQUEZ, KATHERINE (3870))</td></tr><tr><td> 108-topic-02 </td><td>(BUTT, AMEL (0799))<BR>(CASTILLO, GISELLA (8264))<BR>(CLEMENTE, LUIGI (7066))<BR>(HEIDEL, AMANDA (0723))<BR>(RAMLAKHAN, BHAJPAUL (4229))<BR>(SALGADO, MIGUEL (2338))</td></tr><tr><td> 108-topic-03 </td><td>(ALIKAKOS, GEORGE (9795))<BR>(BERNADIN, EARLYNN (8944))<BR>(BROOKS, DEVYNN (0211))<BR>(CASTILLO, YAMEELICE (1153))<BR>(DIAZ, CHRISTIAN (2890))<BR>(FRANCIS, BRITTANY (1933))<BR>(HAVIARAS, ANGELICA (8469))<BR>(JACKSON, PATRICK (5809))<BR>(LATORRE, STEVEN (9457))<BR>(LEY, JEFFREY (7473))<BR>(LOGU, DENNIS (2050))<BR>(MCCARTHY, KAMAY (8583))<BR>(RAMLAKHAN, BHAJPAUL (4229))<BR>(RODRIGUEZ, MANUEL (4864))<BR>(RODRIGUEZ, VIANNA (5801))<BR>(ROMAN, MARLEE (9546))<BR>(SALGADO, MIGUEL (2338))<BR>(VASQUEZ, CHRISTOPHER (2554))<BR>(VAZQUEZ, KATHERINE (3870))<BR>(YE, JIANQI (6896))</td></tr><tr><td> 108-topic-04 </td><td>(ALIKAKOS, GEORGE (9795))<BR>(BERNADIN, EARLYNN (8944))<BR>(BROOKS, DEVYNN (0211))<BR>(BUTT, AMEL (0799))<BR>(CASTILLO, GISELLA (8264))<BR>(CASTILLO, YAMEELICE (1153))<BR>(CLEMENTE, LUIGI (7066))<BR>(DIAZ, CHRISTIAN (2890))<BR>(FRANCIS, BRITTANY (1933))<BR>(GARCIA, BIKELBY (3843))<BR>(GOMEZ, DANIELA (3833))<BR>(HAVIARAS, ANGELICA (8469))<BR>(HEIDEL, AMANDA (0723))<BR>(HOTI, KUSHTRIM (6849))<BR>(JACKSON, PATRICK (5809))<BR>(LATORRE, STEVEN (9457))<BR>(LEY, JEFFREY (7473))<BR>(LOGU, DENNIS (2050))<BR>(MASBOOB, MARY (5081))<BR>(MCCARTHY, KAMAY (8583))<BR>(RAMLAKHAN, BHAJPAUL (4229))<BR>(RODRIGUEZ, MANUEL (4864))<BR>(RODRIGUEZ, VIANNA (5801))<BR>(ROMAN, MARLEE (9546))<BR>(SALGADO, MIGUEL (2338))<BR>(VASQUEZ, CHRISTOPHER (2554))<BR>(VAZQUEZ, KATHERINE (3870))<BR>(YE, JIANQI (6896))<BR>(ZAPATA_VALERIO, RAFAELA (6804))</td></tr><tr><td> 108-topic-05 </td><td>(ARMSTRONG, KIMBERLY (0704))<BR>(BERNADIN, EARLYNN (8944))<BR>(BROOKS, DEVYNN (0211))<BR>(CASTILLO, GISELLA (8264))<BR>(CASTILLO, YAMEELICE (1153))<BR>(CLEMENTE, LUIGI (7066))<BR>(DIAZ, CHRISTIAN (2890))<BR>(FRANCIS, BRITTANY (1933))<BR>(GARCIA, BIKELBY (3843))<BR>(GOMEZ, DANIELA (3833))<BR>(JACKSON, PATRICK (5809))<BR>(LEY, JEFFREY (7473))<BR>(LOGU, DENNIS (2050))<BR>(MASBOOB, MARY (5081))<BR>(MCCARTHY, KAMAY (8583))<BR>(ROMAN, MARLEE (9546))<BR>(VASQUEZ, CHRISTOPHER (2554))<BR>(VAZQUEZ, KATHERINE (3870))<BR>(ZAPATA_VALERIO, RAFAELA (6804))</td></tr><tr><td> 108-topic-06 </td><td>(BERNADIN, EARLYNN (8944))<BR>(CASTILLO, YAMEELICE (1153))<BR>(CLEMENTE, LUIGI (7066))<BR>(DIAZ, CHRISTIAN (2890))<BR>(GOMEZ, DANIELA (3833))<BR>(JACKSON, PATRICK (5809))<BR>(LATORRE, STEVEN (9457))<BR>(LEY, JEFFREY (7473))<BR>(RAMLAKHAN, BHAJPAUL (4229))<BR>(ROMAN, MARLEE (9546))<BR>(VAZQUEZ, KATHERINE (3870))<BR>(YE, JIANQI (6896))<BR>(ZAPATA_VALERIO, RAFAELA (6804))</td></tr><tr><td> 108-topic-07 </td><td>(BERNADIN, EARLYNN (8944))<BR>(CASTILLO, GISELLA (8264))<BR>(CLEMENTE, LUIGI (7066))<BR>(DIAZ, CHRISTIAN (2890))<BR>(JACKSON, PATRICK (5809))<BR>(LOGU, DENNIS (2050))<BR>(RAMLAKHAN, BHAJPAUL (4229))<BR>(RODRIGUEZ, VIANNA (5801))<BR>(ROMAN, MARLEE (9546))<BR>(ZAPATA_VALERIO, RAFAELA (6804))</td></tr><tr><td> 108-topic-08 </td><td>(BROOKS, DEVYNN (0211))<BR>(DIAZ, CHRISTIAN (2890))<BR>(FRANCIS, BRITTANY (1933))<BR>(LOGU, DENNIS (2050))<BR>(ROMAN, MARLEE (9546))<BR>(VASQUEZ, CHRISTOPHER (2554))</td></tr><tr><td> 108-topic-09 </td><td>(BROOKS, DEVYNN (0211))<BR>(BUTT, AMEL (0799))<BR>(CASTILLO, GISELLA (8264))<BR>(CASTILLO, YAMEELICE (1153))<BR>(DIAZ, CHRISTIAN (2890))<BR>(FRANCIS, BRITTANY (1933))<BR>(LATORRE, STEVEN (9457))</td></tr><tr><td> 108-topic-10 </td><td>(BERNADIN, EARLYNN (8944))<BR>(BROOKS, DEVYNN (0211))<BR>(CASTILLO, GISELLA (8264))<BR>(CASTILLO, YAMEELICE (1153))<BR>(CLEMENTE, LUIGI (7066))<BR>(DIAZ, CHRISTIAN (2890))<BR>(GOMEZ, DANIELA (3833))<BR>(HOTI, KUSHTRIM (6849))<BR>(JACKSON, PATRICK (5809))<BR>(LATORRE, STEVEN (9457))<BR>(LOGU, DENNIS (2050))<BR>(MASBOOB, MARY (5081))<BR>(MCCARTHY, KAMAY (8583))<BR>(RAMLAKHAN, BHAJPAUL (4229))<BR>(RODRIGUEZ, MANUEL (4864))<BR>(RODRIGUEZ, VIANNA (5801))<BR>(ROMAN, MARLEE (9546))<BR>(SALGADO, MIGUEL (2338))<BR>(YE, JIANQI (6896))<BR>(ZAPATA_VALERIO, RAFAELA (6804))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
