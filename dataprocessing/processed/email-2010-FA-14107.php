#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 141 - PRE-CALCULUS (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>141</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>07</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>WIESCHENBERG_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>4364</td><td>ALLEN, KRISTIAN</td><td>141-topic-07<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>4955</td><td>ARZU, JENNIFER</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-09</td></tr><tr><td>9365</td><td>BROWN, TAELOR</td><td>141-topic-01<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>2312</td><td>CANCEL, JOSUE</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>3083</td><td>CHACON, MEGAN</td><td>141-topic-01<BR>141-topic-03<BR>141-topic-05<BR>141-topic-06<BR>141-topic-08<BR>141-topic-10</td></tr><tr><td>8307</td><td>ESTRELLA, RADHIMIR</td><td>141-topic-04<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>9045</td><td>EVANS, MERTON</td><td>Passed everything.</td></tr><tr><td>4191</td><td>GIANNOS, MARIA</td><td>Passed everything.</td></tr><tr><td>8669</td><td>GILLETTE, TIMOTHY</td><td>141-topic-04<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>2119</td><td>GNATOVYCH, BOGDAN</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>9642</td><td>GOODWIN, JENNIFER</td><td>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>8129</td><td>GUARACA, JEFFREY</td><td>141-topic-04<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>5017</td><td>HAQUE, JABEARUL</td><td>141-topic-01<BR>141-topic-04<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>1756</td><td>KAPELONIS, KONSTANTINOS</td><td>141-topic-01<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>3078</td><td>KRONE, BRIANA</td><td>141-topic-02<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>2491</td><td>LACHMENAR, DAVID</td><td>141-topic-02<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-10</td></tr><tr><td>0647</td><td>LANTIGUA, ADANYS</td><td>141-topic-01<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>8092</td><td>MAKHRINSKY, DANIELLA</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>5793</td><td>PEREZ, JESSICA</td><td>141-topic-02<BR>141-topic-05<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>6352</td><td>RAMRATTAN, OMATIE</td><td>141-topic-01<BR>141-topic-05<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>6307</td><td>RAYSOR, KRYSTAL</td><td>Absent on the assessment test.</td></tr><tr><td>9233</td><td>SANDOR, SAROLTA</td><td>Passed everything.</td></tr><tr><td>4508</td><td>SINGH, NERVANA</td><td>141-topic-02<BR>141-topic-05<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>4883</td><td>TAVERAS, LUIS</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>4446</td><td>THORMAN, DEL'LANA</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>0686</td><td>TONG, WILLAM</td><td>141-topic-01<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>9998</td><td>TULIMIERO, EMILIA</td><td>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>1052</td><td>VASQUEZ, TAMARA</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 141-topic-01 </td><td>(ARZU, JENNIFER (4955))<BR>(BROWN, TAELOR (9365))<BR>(CANCEL, JOSUE (2312))<BR>(CHACON, MEGAN (3083))<BR>(GNATOVYCH, BOGDAN (2119))<BR>(HAQUE, JABEARUL (5017))<BR>(KAPELONIS, KONSTANTINOS (1756))<BR>(LANTIGUA, ADANYS (0647))<BR>(MAKHRINSKY, DANIELLA (8092))<BR>(RAMRATTAN, OMATIE (6352))<BR>(TAVERAS, LUIS (4883))<BR>(THORMAN, DEL'LANA (4446))<BR>(TONG, WILLAM (0686))</td></tr><tr><td> 141-topic-02 </td><td>(ARZU, JENNIFER (4955))<BR>(CANCEL, JOSUE (2312))<BR>(GNATOVYCH, BOGDAN (2119))<BR>(GOODWIN, JENNIFER (9642))<BR>(KRONE, BRIANA (3078))<BR>(LACHMENAR, DAVID (2491))<BR>(MAKHRINSKY, DANIELLA (8092))<BR>(PEREZ, JESSICA (5793))<BR>(SINGH, NERVANA (4508))<BR>(TAVERAS, LUIS (4883))<BR>(THORMAN, DEL'LANA (4446))</td></tr><tr><td> 141-topic-03 </td><td>(CHACON, MEGAN (3083))<BR>(GNATOVYCH, BOGDAN (2119))<BR>(KRONE, BRIANA (3078))</td></tr><tr><td> 141-topic-04 </td><td>(ARZU, JENNIFER (4955))<BR>(CANCEL, JOSUE (2312))<BR>(ESTRELLA, RADHIMIR (8307))<BR>(GILLETTE, TIMOTHY (8669))<BR>(GNATOVYCH, BOGDAN (2119))<BR>(GOODWIN, JENNIFER (9642))<BR>(GUARACA, JEFFREY (8129))<BR>(HAQUE, JABEARUL (5017))<BR>(KAPELONIS, KONSTANTINOS (1756))<BR>(KRONE, BRIANA (3078))<BR>(MAKHRINSKY, DANIELLA (8092))<BR>(TONG, WILLAM (0686))<BR>(TULIMIERO, EMILIA (9998))</td></tr><tr><td> 141-topic-05 </td><td>(ARZU, JENNIFER (4955))<BR>(BROWN, TAELOR (9365))<BR>(CANCEL, JOSUE (2312))<BR>(CHACON, MEGAN (3083))<BR>(GNATOVYCH, BOGDAN (2119))<BR>(GOODWIN, JENNIFER (9642))<BR>(KAPELONIS, KONSTANTINOS (1756))<BR>(KRONE, BRIANA (3078))<BR>(LACHMENAR, DAVID (2491))<BR>(LANTIGUA, ADANYS (0647))<BR>(MAKHRINSKY, DANIELLA (8092))<BR>(PEREZ, JESSICA (5793))<BR>(RAMRATTAN, OMATIE (6352))<BR>(SINGH, NERVANA (4508))<BR>(TAVERAS, LUIS (4883))<BR>(TONG, WILLAM (0686))<BR>(TULIMIERO, EMILIA (9998))</td></tr><tr><td> 141-topic-06 </td><td>(ARZU, JENNIFER (4955))<BR>(BROWN, TAELOR (9365))<BR>(CANCEL, JOSUE (2312))<BR>(CHACON, MEGAN (3083))<BR>(ESTRELLA, RADHIMIR (8307))<BR>(GILLETTE, TIMOTHY (8669))<BR>(GNATOVYCH, BOGDAN (2119))<BR>(GOODWIN, JENNIFER (9642))<BR>(GUARACA, JEFFREY (8129))<BR>(HAQUE, JABEARUL (5017))<BR>(KAPELONIS, KONSTANTINOS (1756))<BR>(KRONE, BRIANA (3078))<BR>(LACHMENAR, DAVID (2491))<BR>(LANTIGUA, ADANYS (0647))<BR>(MAKHRINSKY, DANIELLA (8092))<BR>(TAVERAS, LUIS (4883))<BR>(THORMAN, DEL'LANA (4446))<BR>(TONG, WILLAM (0686))<BR>(TULIMIERO, EMILIA (9998))</td></tr><tr><td> 141-topic-07 </td><td>(ALLEN, KRISTIAN (4364))<BR>(ARZU, JENNIFER (4955))<BR>(BROWN, TAELOR (9365))<BR>(CANCEL, JOSUE (2312))<BR>(GNATOVYCH, BOGDAN (2119))<BR>(GOODWIN, JENNIFER (9642))<BR>(KRONE, BRIANA (3078))<BR>(LACHMENAR, DAVID (2491))<BR>(LANTIGUA, ADANYS (0647))<BR>(PEREZ, JESSICA (5793))<BR>(RAMRATTAN, OMATIE (6352))<BR>(TAVERAS, LUIS (4883))<BR>(THORMAN, DEL'LANA (4446))<BR>(TONG, WILLAM (0686))<BR>(TULIMIERO, EMILIA (9998))</td></tr><tr><td> 141-topic-08 </td><td>(ALLEN, KRISTIAN (4364))<BR>(BROWN, TAELOR (9365))<BR>(CANCEL, JOSUE (2312))<BR>(CHACON, MEGAN (3083))<BR>(ESTRELLA, RADHIMIR (8307))<BR>(GILLETTE, TIMOTHY (8669))<BR>(GNATOVYCH, BOGDAN (2119))<BR>(GOODWIN, JENNIFER (9642))<BR>(GUARACA, JEFFREY (8129))<BR>(HAQUE, JABEARUL (5017))<BR>(KAPELONIS, KONSTANTINOS (1756))<BR>(KRONE, BRIANA (3078))<BR>(LACHMENAR, DAVID (2491))<BR>(LANTIGUA, ADANYS (0647))<BR>(MAKHRINSKY, DANIELLA (8092))<BR>(PEREZ, JESSICA (5793))<BR>(RAMRATTAN, OMATIE (6352))<BR>(SINGH, NERVANA (4508))<BR>(TAVERAS, LUIS (4883))<BR>(THORMAN, DEL'LANA (4446))<BR>(TULIMIERO, EMILIA (9998))</td></tr><tr><td> 141-topic-09 </td><td>(ALLEN, KRISTIAN (4364))<BR>(ARZU, JENNIFER (4955))<BR>(BROWN, TAELOR (9365))<BR>(CANCEL, JOSUE (2312))<BR>(ESTRELLA, RADHIMIR (8307))<BR>(GILLETTE, TIMOTHY (8669))<BR>(GNATOVYCH, BOGDAN (2119))<BR>(GOODWIN, JENNIFER (9642))<BR>(GUARACA, JEFFREY (8129))<BR>(HAQUE, JABEARUL (5017))<BR>(KAPELONIS, KONSTANTINOS (1756))<BR>(KRONE, BRIANA (3078))<BR>(LANTIGUA, ADANYS (0647))<BR>(MAKHRINSKY, DANIELLA (8092))<BR>(PEREZ, JESSICA (5793))<BR>(RAMRATTAN, OMATIE (6352))<BR>(SINGH, NERVANA (4508))<BR>(TAVERAS, LUIS (4883))<BR>(THORMAN, DEL'LANA (4446))<BR>(TONG, WILLAM (0686))<BR>(TULIMIERO, EMILIA (9998))</td></tr><tr><td> 141-topic-10 </td><td>(BROWN, TAELOR (9365))<BR>(CANCEL, JOSUE (2312))<BR>(CHACON, MEGAN (3083))<BR>(GILLETTE, TIMOTHY (8669))<BR>(GNATOVYCH, BOGDAN (2119))<BR>(GOODWIN, JENNIFER (9642))<BR>(HAQUE, JABEARUL (5017))<BR>(KAPELONIS, KONSTANTINOS (1756))<BR>(KRONE, BRIANA (3078))<BR>(LACHMENAR, DAVID (2491))<BR>(LANTIGUA, ADANYS (0647))<BR>(MAKHRINSKY, DANIELLA (8092))<BR>(PEREZ, JESSICA (5793))<BR>(SINGH, NERVANA (4508))<BR>(TAVERAS, LUIS (4883))<BR>(THORMAN, DEL'LANA (4446))<BR>(TONG, WILLAM (0686))<BR>(TULIMIERO, EMILIA (9998))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>