#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>24</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>GARRETT_K</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>4364</td><td>COMPRES, VICTOR</td><td>Absent on the assessment test.</td></tr><tr><td>4282</td><td>COSTA, BRIAN</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>8717</td><td>DONI, STEFFANI</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7</td></tr><tr><td>0464</td><td>DYCE, CAMISHA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>9747</td><td>EDWARDS, RHONDA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>2622</td><td>ESTEVEZ, FENDY</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>1195</td><td>FORBS, RAYMOND</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-9</td></tr><tr><td>8745</td><td>FRIAS, KEISHA</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>9046</td><td>GILLIAM, ALYSSA</td><td>Passed everything.</td></tr><tr><td>2919</td><td>HASSEL, ALAN</td><td>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>1827</td><td>LAM, TIMOTHY</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-9</td></tr><tr><td>7053</td><td>LANDY, TIMOTHY</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7</td></tr><tr><td>6430</td><td>LINARES, OLIMPIA</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>8036</td><td>MARTIN, TYHEEM</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-6<BR>108-topic-7</td></tr><tr><td>9309</td><td>MARTINEZ, RAPHY</td><td>108-topic-1<BR>108-topic-8</td></tr><tr><td>0348</td><td>MERCEDES, BRAYAN</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-7</td></tr><tr><td>1052</td><td>MERCERON, MARTINE</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6</td></tr><tr><td>9117</td><td>MORICO, GABRIELA</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>6254</td><td>MULHARE, BLAINE</td><td>108-topic-4</td></tr><tr><td>0764</td><td>OJEDA, CHRISTOPHER</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>5399</td><td>RAGUSA, JOSEPH</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>5190</td><td>ROA, JESSICA</td><td>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>0377</td><td>ROSA, CHRISTIAN</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-9</td></tr><tr><td>3201</td><td>RUIZ, LOURDES</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4</td></tr><tr><td>4465</td><td>SCARPA, KATHLEEN</td><td>Passed everything.</td></tr><tr><td>5152</td><td>SHARMA, KUNAL</td><td>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4</td></tr><tr><td>7046</td><td>SUI, CHRISTOPHER</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7</td></tr><tr><td>7656</td><td>TAVERAS, WESLY</td><td>108-topic-1<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5<BR>108-topic-6<BR>108-topic-9</td></tr><tr><td>6114</td><td>TORRES, STEVEN</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>4204</td><td>UBIERA, JONATHAN</td><td>108-topic-10<BR>108-topic-4<BR>108-topic-5<BR>108-topic-7<BR>108-topic-9</td></tr><tr><td>9563</td><td>WAX, NOA</td><td>Absent on the assessment test.</td></tr><tr><td>0766</td><td>YULI, CHRISTINA</td><td>108-topic-10<BR>108-topic-2<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><tr><td>9569</td><td>YUSUPOVA, ZARRINA</td><td>108-topic-1<BR>108-topic-10<BR>108-topic-3<BR>108-topic-4<BR>108-topic-5</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-1 </td><td>(COSTA, BRIAN (4282))<BR>(DYCE, CAMISHA (0464))<BR>(EDWARDS, RHONDA (9747))<BR>(ESTEVEZ, FENDY (2622))<BR>(FORBS, RAYMOND (1195))<BR>(FRIAS, KEISHA (8745))<BR>(LINARES, OLIMPIA (6430))<BR>(MARTIN, TYHEEM (8036))<BR>(MARTINEZ, RAPHY (9309))<BR>(MERCEDES, BRAYAN (0348))<BR>(MERCERON, MARTINE (1052))<BR>(MORICO, GABRIELA (9117))<BR>(OJEDA, CHRISTOPHER (0764))<BR>(ROSA, CHRISTIAN (0377))<BR>(RUIZ, LOURDES (3201))<BR>(SUI, CHRISTOPHER (7046))<BR>(TAVERAS, WESLY (7656))<BR>(TORRES, STEVEN (6114))<BR>(YUSUPOVA, ZARRINA (9569))</td></tr><tr><td> 108-topic-10 </td><td>(COSTA, BRIAN (4282))<BR>(DONI, STEFFANI (8717))<BR>(DYCE, CAMISHA (0464))<BR>(EDWARDS, RHONDA (9747))<BR>(ESTEVEZ, FENDY (2622))<BR>(FORBS, RAYMOND (1195))<BR>(HASSEL, ALAN (2919))<BR>(LAM, TIMOTHY (1827))<BR>(LANDY, TIMOTHY (7053))<BR>(MARTIN, TYHEEM (8036))<BR>(MERCEDES, BRAYAN (0348))<BR>(MERCERON, MARTINE (1052))<BR>(OJEDA, CHRISTOPHER (0764))<BR>(RAGUSA, JOSEPH (5399))<BR>(ROA, JESSICA (5190))<BR>(ROSA, CHRISTIAN (0377))<BR>(SHARMA, KUNAL (5152))<BR>(TORRES, STEVEN (6114))<BR>(UBIERA, JONATHAN (4204))<BR>(YULI, CHRISTINA (0766))<BR>(YUSUPOVA, ZARRINA (9569))</td></tr><tr><td> 108-topic-2 </td><td>(DYCE, CAMISHA (0464))<BR>(ESTEVEZ, FENDY (2622))<BR>(FORBS, RAYMOND (1195))<BR>(HASSEL, ALAN (2919))<BR>(MERCERON, MARTINE (1052))<BR>(SHARMA, KUNAL (5152))<BR>(YULI, CHRISTINA (0766))</td></tr><tr><td> 108-topic-3 </td><td>(COSTA, BRIAN (4282))<BR>(DONI, STEFFANI (8717))<BR>(DYCE, CAMISHA (0464))<BR>(EDWARDS, RHONDA (9747))<BR>(ESTEVEZ, FENDY (2622))<BR>(FORBS, RAYMOND (1195))<BR>(FRIAS, KEISHA (8745))<BR>(HASSEL, ALAN (2919))<BR>(LAM, TIMOTHY (1827))<BR>(LANDY, TIMOTHY (7053))<BR>(LINARES, OLIMPIA (6430))<BR>(MARTIN, TYHEEM (8036))<BR>(MERCERON, MARTINE (1052))<BR>(MORICO, GABRIELA (9117))<BR>(OJEDA, CHRISTOPHER (0764))<BR>(RAGUSA, JOSEPH (5399))<BR>(ROA, JESSICA (5190))<BR>(ROSA, CHRISTIAN (0377))<BR>(RUIZ, LOURDES (3201))<BR>(SHARMA, KUNAL (5152))<BR>(SUI, CHRISTOPHER (7046))<BR>(TAVERAS, WESLY (7656))<BR>(TORRES, STEVEN (6114))<BR>(YULI, CHRISTINA (0766))<BR>(YUSUPOVA, ZARRINA (9569))</td></tr><tr><td> 108-topic-4 </td><td>(COSTA, BRIAN (4282))<BR>(DONI, STEFFANI (8717))<BR>(DYCE, CAMISHA (0464))<BR>(EDWARDS, RHONDA (9747))<BR>(ESTEVEZ, FENDY (2622))<BR>(FORBS, RAYMOND (1195))<BR>(FRIAS, KEISHA (8745))<BR>(HASSEL, ALAN (2919))<BR>(LANDY, TIMOTHY (7053))<BR>(LINARES, OLIMPIA (6430))<BR>(MARTIN, TYHEEM (8036))<BR>(MERCERON, MARTINE (1052))<BR>(MORICO, GABRIELA (9117))<BR>(MULHARE, BLAINE (6254))<BR>(OJEDA, CHRISTOPHER (0764))<BR>(RAGUSA, JOSEPH (5399))<BR>(ROA, JESSICA (5190))<BR>(ROSA, CHRISTIAN (0377))<BR>(RUIZ, LOURDES (3201))<BR>(SHARMA, KUNAL (5152))<BR>(SUI, CHRISTOPHER (7046))<BR>(TAVERAS, WESLY (7656))<BR>(TORRES, STEVEN (6114))<BR>(UBIERA, JONATHAN (4204))<BR>(YULI, CHRISTINA (0766))<BR>(YUSUPOVA, ZARRINA (9569))</td></tr><tr><td> 108-topic-5 </td><td>(COSTA, BRIAN (4282))<BR>(DONI, STEFFANI (8717))<BR>(DYCE, CAMISHA (0464))<BR>(EDWARDS, RHONDA (9747))<BR>(ESTEVEZ, FENDY (2622))<BR>(FORBS, RAYMOND (1195))<BR>(FRIAS, KEISHA (8745))<BR>(HASSEL, ALAN (2919))<BR>(LANDY, TIMOTHY (7053))<BR>(LINARES, OLIMPIA (6430))<BR>(MERCERON, MARTINE (1052))<BR>(MORICO, GABRIELA (9117))<BR>(OJEDA, CHRISTOPHER (0764))<BR>(ROA, JESSICA (5190))<BR>(ROSA, CHRISTIAN (0377))<BR>(SUI, CHRISTOPHER (7046))<BR>(TAVERAS, WESLY (7656))<BR>(TORRES, STEVEN (6114))<BR>(UBIERA, JONATHAN (4204))<BR>(YULI, CHRISTINA (0766))<BR>(YUSUPOVA, ZARRINA (9569))</td></tr><tr><td> 108-topic-6 </td><td>(COSTA, BRIAN (4282))<BR>(EDWARDS, RHONDA (9747))<BR>(ESTEVEZ, FENDY (2622))<BR>(FORBS, RAYMOND (1195))<BR>(MARTIN, TYHEEM (8036))<BR>(MERCERON, MARTINE (1052))<BR>(TAVERAS, WESLY (7656))</td></tr><tr><td> 108-topic-7 </td><td>(COSTA, BRIAN (4282))<BR>(DONI, STEFFANI (8717))<BR>(EDWARDS, RHONDA (9747))<BR>(LANDY, TIMOTHY (7053))<BR>(MARTIN, TYHEEM (8036))<BR>(MERCEDES, BRAYAN (0348))<BR>(RAGUSA, JOSEPH (5399))<BR>(SUI, CHRISTOPHER (7046))<BR>(UBIERA, JONATHAN (4204))</td></tr><tr><td> 108-topic-8 </td><td>(MARTINEZ, RAPHY (9309))</td></tr><tr><td> 108-topic-9 </td><td>(COSTA, BRIAN (4282))<BR>(EDWARDS, RHONDA (9747))<BR>(FORBS, RAYMOND (1195))<BR>(LAM, TIMOTHY (1827))<BR>(RAGUSA, JOSEPH (5399))<BR>(ROSA, CHRISTIAN (0377))<BR>(TAVERAS, WESLY (7656))<BR>(UBIERA, JONATHAN (4204))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>