#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 241 - CALCULUS_1 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>241</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>08</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SEAMAN_C</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3157</td><td>AMANKWAH, RICHARD</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5431</td><td>ANDREWS, ARIELLE</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09</td></tr><tr><td>9984</td><td>ARRINGTON, MATEIA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09</td></tr><tr><td>4178</td><td>CAMPOS, RONNY</td><td>241-topic-04<BR>241-topic-05<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>0964</td><td>DEMOSTHENES, RALF</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-08<BR>241-topic-09</td></tr><tr><td>5132</td><td>FIJALKIEWICZ, KAMILA</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-08<BR>241-topic-09</td></tr><tr><td>8454</td><td>FLICKER, RICHARD</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>1107</td><td>GALIMOVA, RIMMA</td><td>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>1239</td><td>GOFMAN, ANTON</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09</td></tr><tr><td>7310</td><td>GONZALEZ, ATENEDORO</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-10</td></tr><tr><td>0757</td><td>HAZELL, TONYA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-05<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5876</td><td>HONG, WAN_SEOK</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>8892</td><td>JIANG, ANITA</td><td>Passed everything.</td></tr><tr><td>0745</td><td>KHAN, IQRAN</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-05<BR>241-topic-10</td></tr><tr><td>0245</td><td>LI, KELVIN</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-10</td></tr><tr><td>3540</td><td>LOPEZ, YESSENIA</td><td>241-topic-01</td></tr><tr><td>5649</td><td>LUKAC, AMILA</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06</td></tr><tr><td>4160</td><td>MILLAR-MORRISON, ASHLEE</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08</td></tr><tr><td>0578</td><td>MOHAMED, MOHAMED</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>0729</td><td>OSIRIS, CONSTANCE</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-10</td></tr><tr><td>5344</td><td>PARK, LINSEY</td><td>Passed everything.</td></tr><tr><td>4137</td><td>SANSON, CLARA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09</td></tr><tr><td>0245</td><td>SON, CHRISTIAN</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-08</td></tr><tr><td>0039</td><td>TIAN, WEN</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-04<BR>241-topic-08<BR>241-topic-09</td></tr><tr><td>2658</td><td>TRAN, ANH</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08</td></tr><tr><td>7583</td><td>VELEZ, ALEXIS</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08</td></tr><tr><td>0799</td><td>WALSH, EMILY</td><td>241-topic-01<BR>241-topic-05<BR>241-topic-08</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 241-topic-01 </td><td>(AMANKWAH, RICHARD (3157))<BR>(ANDREWS, ARIELLE (5431))<BR>(ARRINGTON, MATEIA (9984))<BR>(DEMOSTHENES, RALF (0964))<BR>(FIJALKIEWICZ, KAMILA (5132))<BR>(FLICKER, RICHARD (8454))<BR>(GOFMAN, ANTON (1239))<BR>(GONZALEZ, ATENEDORO (7310))<BR>(HAZELL, TONYA (0757))<BR>(HONG, WAN_SEOK (5876))<BR>(KHAN, IQRAN (0745))<BR>(LI, KELVIN (0245))<BR>(LOPEZ, YESSENIA (3540))<BR>(LUKAC, AMILA (5649))<BR>(MILLAR-MORRISON, ASHLEE (4160))<BR>(MOHAMED, MOHAMED (0578))<BR>(OSIRIS, CONSTANCE (0729))<BR>(SANSON, CLARA (4137))<BR>(SON, CHRISTIAN (0245))<BR>(TIAN, WEN (0039))<BR>(TRAN, ANH (2658))<BR>(VELEZ, ALEXIS (7583))<BR>(WALSH, EMILY (0799))</td></tr><tr><td> 241-topic-02 </td><td>(ARRINGTON, MATEIA (9984))<BR>(DEMOSTHENES, RALF (0964))<BR>(FLICKER, RICHARD (8454))<BR>(GOFMAN, ANTON (1239))<BR>(GONZALEZ, ATENEDORO (7310))<BR>(HAZELL, TONYA (0757))<BR>(HONG, WAN_SEOK (5876))<BR>(LI, KELVIN (0245))<BR>(MILLAR-MORRISON, ASHLEE (4160))<BR>(MOHAMED, MOHAMED (0578))<BR>(SANSON, CLARA (4137))<BR>(SON, CHRISTIAN (0245))<BR>(TRAN, ANH (2658))<BR>(VELEZ, ALEXIS (7583))</td></tr><tr><td> 241-topic-03 </td><td>(AMANKWAH, RICHARD (3157))<BR>(ANDREWS, ARIELLE (5431))<BR>(ARRINGTON, MATEIA (9984))<BR>(DEMOSTHENES, RALF (0964))<BR>(FIJALKIEWICZ, KAMILA (5132))<BR>(FLICKER, RICHARD (8454))<BR>(GOFMAN, ANTON (1239))<BR>(GONZALEZ, ATENEDORO (7310))<BR>(HONG, WAN_SEOK (5876))<BR>(KHAN, IQRAN (0745))<BR>(LI, KELVIN (0245))<BR>(LUKAC, AMILA (5649))<BR>(MILLAR-MORRISON, ASHLEE (4160))<BR>(MOHAMED, MOHAMED (0578))<BR>(OSIRIS, CONSTANCE (0729))<BR>(SANSON, CLARA (4137))<BR>(SON, CHRISTIAN (0245))<BR>(TIAN, WEN (0039))<BR>(TRAN, ANH (2658))<BR>(VELEZ, ALEXIS (7583))</td></tr><tr><td> 241-topic-04 </td><td>(AMANKWAH, RICHARD (3157))<BR>(ARRINGTON, MATEIA (9984))<BR>(CAMPOS, RONNY (4178))<BR>(DEMOSTHENES, RALF (0964))<BR>(FIJALKIEWICZ, KAMILA (5132))<BR>(FLICKER, RICHARD (8454))<BR>(GOFMAN, ANTON (1239))<BR>(GONZALEZ, ATENEDORO (7310))<BR>(HONG, WAN_SEOK (5876))<BR>(LI, KELVIN (0245))<BR>(MILLAR-MORRISON, ASHLEE (4160))<BR>(MOHAMED, MOHAMED (0578))<BR>(OSIRIS, CONSTANCE (0729))<BR>(SANSON, CLARA (4137))<BR>(SON, CHRISTIAN (0245))<BR>(TIAN, WEN (0039))</td></tr><tr><td> 241-topic-05 </td><td>(AMANKWAH, RICHARD (3157))<BR>(ANDREWS, ARIELLE (5431))<BR>(ARRINGTON, MATEIA (9984))<BR>(CAMPOS, RONNY (4178))<BR>(DEMOSTHENES, RALF (0964))<BR>(FIJALKIEWICZ, KAMILA (5132))<BR>(FLICKER, RICHARD (8454))<BR>(GALIMOVA, RIMMA (1107))<BR>(GOFMAN, ANTON (1239))<BR>(GONZALEZ, ATENEDORO (7310))<BR>(HAZELL, TONYA (0757))<BR>(HONG, WAN_SEOK (5876))<BR>(KHAN, IQRAN (0745))<BR>(LI, KELVIN (0245))<BR>(LUKAC, AMILA (5649))<BR>(MILLAR-MORRISON, ASHLEE (4160))<BR>(MOHAMED, MOHAMED (0578))<BR>(OSIRIS, CONSTANCE (0729))<BR>(SANSON, CLARA (4137))<BR>(SON, CHRISTIAN (0245))<BR>(TRAN, ANH (2658))<BR>(VELEZ, ALEXIS (7583))<BR>(WALSH, EMILY (0799))</td></tr><tr><td> 241-topic-06 </td><td>(AMANKWAH, RICHARD (3157))<BR>(ANDREWS, ARIELLE (5431))<BR>(ARRINGTON, MATEIA (9984))<BR>(GALIMOVA, RIMMA (1107))<BR>(GOFMAN, ANTON (1239))<BR>(GONZALEZ, ATENEDORO (7310))<BR>(HONG, WAN_SEOK (5876))<BR>(LI, KELVIN (0245))<BR>(LUKAC, AMILA (5649))<BR>(MOHAMED, MOHAMED (0578))<BR>(OSIRIS, CONSTANCE (0729))<BR>(SANSON, CLARA (4137))<BR>(TRAN, ANH (2658))<BR>(VELEZ, ALEXIS (7583))</td></tr><tr><td> 241-topic-07 </td><td>(ANDREWS, ARIELLE (5431))<BR>(GOFMAN, ANTON (1239))<BR>(MILLAR-MORRISON, ASHLEE (4160))<BR>(MOHAMED, MOHAMED (0578))</td></tr><tr><td> 241-topic-08 </td><td>(AMANKWAH, RICHARD (3157))<BR>(ANDREWS, ARIELLE (5431))<BR>(ARRINGTON, MATEIA (9984))<BR>(CAMPOS, RONNY (4178))<BR>(DEMOSTHENES, RALF (0964))<BR>(FIJALKIEWICZ, KAMILA (5132))<BR>(FLICKER, RICHARD (8454))<BR>(GALIMOVA, RIMMA (1107))<BR>(GOFMAN, ANTON (1239))<BR>(GONZALEZ, ATENEDORO (7310))<BR>(HAZELL, TONYA (0757))<BR>(HONG, WAN_SEOK (5876))<BR>(LI, KELVIN (0245))<BR>(MILLAR-MORRISON, ASHLEE (4160))<BR>(MOHAMED, MOHAMED (0578))<BR>(OSIRIS, CONSTANCE (0729))<BR>(SANSON, CLARA (4137))<BR>(SON, CHRISTIAN (0245))<BR>(TIAN, WEN (0039))<BR>(TRAN, ANH (2658))<BR>(VELEZ, ALEXIS (7583))<BR>(WALSH, EMILY (0799))</td></tr><tr><td> 241-topic-09 </td><td>(AMANKWAH, RICHARD (3157))<BR>(ANDREWS, ARIELLE (5431))<BR>(ARRINGTON, MATEIA (9984))<BR>(CAMPOS, RONNY (4178))<BR>(DEMOSTHENES, RALF (0964))<BR>(FIJALKIEWICZ, KAMILA (5132))<BR>(FLICKER, RICHARD (8454))<BR>(GALIMOVA, RIMMA (1107))<BR>(GOFMAN, ANTON (1239))<BR>(HAZELL, TONYA (0757))<BR>(HONG, WAN_SEOK (5876))<BR>(MOHAMED, MOHAMED (0578))<BR>(SANSON, CLARA (4137))<BR>(TIAN, WEN (0039))</td></tr><tr><td> 241-topic-10 </td><td>(AMANKWAH, RICHARD (3157))<BR>(CAMPOS, RONNY (4178))<BR>(FLICKER, RICHARD (8454))<BR>(GALIMOVA, RIMMA (1107))<BR>(GONZALEZ, ATENEDORO (7310))<BR>(HAZELL, TONYA (0757))<BR>(HONG, WAN_SEOK (5876))<BR>(KHAN, IQRAN (0745))<BR>(LI, KELVIN (0245))<BR>(MOHAMED, MOHAMED (0578))<BR>(OSIRIS, CONSTANCE (0729))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>