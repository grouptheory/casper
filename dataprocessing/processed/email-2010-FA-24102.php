#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 241 - CALCULUS_1 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>241</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>HOENIG_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8681</td><td>ALAM, SAQEB</td><td>Passed everything.</td></tr><tr><td>9121</td><td>ALFARO, KARLA</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>6968</td><td>BONAMO, GINA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>9266</td><td>CHRISTIAN, RICHARD</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>4092</td><td>CLARKE, SHANDIA</td><td>Passed everything.</td></tr><tr><td>5527</td><td>D'ERASMO, BRANDON</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>9589</td><td>FERREIRA, JANEIRO</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>4838</td><td>FONG, JENNY</td><td>241-topic-01<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5104</td><td>GLOVER, SHAKEMA</td><td>Passed everything.</td></tr><tr><td>4136</td><td>GOLDBERG, KERY</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>6644</td><td>HATCH, EMILY</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>4398</td><td>KELLY, TASHEDA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>2464</td><td>LOUIS, MARC</td><td>Passed everything.</td></tr><tr><td>1652</td><td>MARAGH, KADEEM</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5080</td><td>PEREZ, ANTHONY</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>7186</td><td>PEREZ, BRAYLIN</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>2431</td><td>PICART, ANDREW</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>4506</td><td>PLAIA, MARGARET</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5896</td><td>PRYCE, SONIA</td><td>241-topic-01<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>9190</td><td>SOTO, JEFFRY</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>3611</td><td>SUBHAN, NAFEEZA</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>8707</td><td>VIZUETA, CYNTHIA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>8158</td><td>WESOLOWSKI, KAROLINE</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>9005</td><td>WON, KYUNGSIK</td><td>Passed everything.</td></tr><tr><td>5596</td><td>YI, JIN-SUK</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 241-topic-01 </td><td>(ALFARO, KARLA (9121))<BR>(BONAMO, GINA (6968))<BR>(CHRISTIAN, RICHARD (9266))<BR>(D'ERASMO, BRANDON (5527))<BR>(FERREIRA, JANEIRO (9589))<BR>(FONG, JENNY (4838))<BR>(GOLDBERG, KERY (4136))<BR>(HATCH, EMILY (6644))<BR>(KELLY, TASHEDA (4398))<BR>(MARAGH, KADEEM (1652))<BR>(PEREZ, ANTHONY (5080))<BR>(PEREZ, BRAYLIN (7186))<BR>(PICART, ANDREW (2431))<BR>(PLAIA, MARGARET (4506))<BR>(PRYCE, SONIA (5896))<BR>(SOTO, JEFFRY (9190))<BR>(SUBHAN, NAFEEZA (3611))<BR>(VIZUETA, CYNTHIA (8707))<BR>(WESOLOWSKI, KAROLINE (8158))<BR>(YI, JIN-SUK (5596))</td></tr><tr><td> 241-topic-02 </td><td>(BONAMO, GINA (6968))<BR>(CHRISTIAN, RICHARD (9266))<BR>(D'ERASMO, BRANDON (5527))<BR>(FERREIRA, JANEIRO (9589))<BR>(HATCH, EMILY (6644))<BR>(KELLY, TASHEDA (4398))<BR>(MARAGH, KADEEM (1652))<BR>(PEREZ, ANTHONY (5080))<BR>(PEREZ, BRAYLIN (7186))<BR>(PICART, ANDREW (2431))<BR>(SOTO, JEFFRY (9190))<BR>(VIZUETA, CYNTHIA (8707))<BR>(WESOLOWSKI, KAROLINE (8158))<BR>(YI, JIN-SUK (5596))</td></tr><tr><td> 241-topic-03 </td><td>(ALFARO, KARLA (9121))<BR>(BONAMO, GINA (6968))<BR>(CHRISTIAN, RICHARD (9266))<BR>(D'ERASMO, BRANDON (5527))<BR>(FERREIRA, JANEIRO (9589))<BR>(GOLDBERG, KERY (4136))<BR>(HATCH, EMILY (6644))<BR>(KELLY, TASHEDA (4398))<BR>(MARAGH, KADEEM (1652))<BR>(PEREZ, ANTHONY (5080))<BR>(PEREZ, BRAYLIN (7186))<BR>(PICART, ANDREW (2431))<BR>(PLAIA, MARGARET (4506))<BR>(SOTO, JEFFRY (9190))<BR>(SUBHAN, NAFEEZA (3611))<BR>(VIZUETA, CYNTHIA (8707))<BR>(WESOLOWSKI, KAROLINE (8158))<BR>(YI, JIN-SUK (5596))</td></tr><tr><td> 241-topic-04 </td><td>(ALFARO, KARLA (9121))<BR>(BONAMO, GINA (6968))<BR>(CHRISTIAN, RICHARD (9266))<BR>(D'ERASMO, BRANDON (5527))<BR>(FERREIRA, JANEIRO (9589))<BR>(FONG, JENNY (4838))<BR>(GOLDBERG, KERY (4136))<BR>(HATCH, EMILY (6644))<BR>(KELLY, TASHEDA (4398))<BR>(PEREZ, ANTHONY (5080))<BR>(PEREZ, BRAYLIN (7186))<BR>(PICART, ANDREW (2431))<BR>(PRYCE, SONIA (5896))<BR>(SOTO, JEFFRY (9190))<BR>(SUBHAN, NAFEEZA (3611))<BR>(VIZUETA, CYNTHIA (8707))<BR>(WESOLOWSKI, KAROLINE (8158))<BR>(YI, JIN-SUK (5596))</td></tr><tr><td> 241-topic-05 </td><td>(ALFARO, KARLA (9121))<BR>(BONAMO, GINA (6968))<BR>(CHRISTIAN, RICHARD (9266))<BR>(D'ERASMO, BRANDON (5527))<BR>(FERREIRA, JANEIRO (9589))<BR>(FONG, JENNY (4838))<BR>(GOLDBERG, KERY (4136))<BR>(HATCH, EMILY (6644))<BR>(KELLY, TASHEDA (4398))<BR>(MARAGH, KADEEM (1652))<BR>(PEREZ, ANTHONY (5080))<BR>(PEREZ, BRAYLIN (7186))<BR>(PICART, ANDREW (2431))<BR>(PLAIA, MARGARET (4506))<BR>(PRYCE, SONIA (5896))<BR>(SOTO, JEFFRY (9190))<BR>(SUBHAN, NAFEEZA (3611))<BR>(VIZUETA, CYNTHIA (8707))<BR>(WESOLOWSKI, KAROLINE (8158))<BR>(YI, JIN-SUK (5596))</td></tr><tr><td> 241-topic-06 </td><td>(ALFARO, KARLA (9121))<BR>(BONAMO, GINA (6968))<BR>(CHRISTIAN, RICHARD (9266))<BR>(D'ERASMO, BRANDON (5527))<BR>(FERREIRA, JANEIRO (9589))<BR>(GOLDBERG, KERY (4136))<BR>(MARAGH, KADEEM (1652))<BR>(PEREZ, ANTHONY (5080))<BR>(PEREZ, BRAYLIN (7186))<BR>(PICART, ANDREW (2431))<BR>(PRYCE, SONIA (5896))<BR>(SOTO, JEFFRY (9190))<BR>(SUBHAN, NAFEEZA (3611))<BR>(VIZUETA, CYNTHIA (8707))<BR>(YI, JIN-SUK (5596))</td></tr><tr><td> 241-topic-07 </td><td>(ALFARO, KARLA (9121))<BR>(BONAMO, GINA (6968))<BR>(CHRISTIAN, RICHARD (9266))<BR>(D'ERASMO, BRANDON (5527))<BR>(FERREIRA, JANEIRO (9589))<BR>(FONG, JENNY (4838))<BR>(GOLDBERG, KERY (4136))<BR>(HATCH, EMILY (6644))<BR>(KELLY, TASHEDA (4398))<BR>(MARAGH, KADEEM (1652))<BR>(PEREZ, ANTHONY (5080))<BR>(PEREZ, BRAYLIN (7186))<BR>(PICART, ANDREW (2431))<BR>(PLAIA, MARGARET (4506))<BR>(PRYCE, SONIA (5896))<BR>(SOTO, JEFFRY (9190))<BR>(SUBHAN, NAFEEZA (3611))<BR>(VIZUETA, CYNTHIA (8707))<BR>(WESOLOWSKI, KAROLINE (8158))<BR>(YI, JIN-SUK (5596))</td></tr><tr><td> 241-topic-08 </td><td>(ALFARO, KARLA (9121))<BR>(BONAMO, GINA (6968))<BR>(CHRISTIAN, RICHARD (9266))<BR>(D'ERASMO, BRANDON (5527))<BR>(FERREIRA, JANEIRO (9589))<BR>(FONG, JENNY (4838))<BR>(GOLDBERG, KERY (4136))<BR>(HATCH, EMILY (6644))<BR>(KELLY, TASHEDA (4398))<BR>(MARAGH, KADEEM (1652))<BR>(PEREZ, ANTHONY (5080))<BR>(PEREZ, BRAYLIN (7186))<BR>(PICART, ANDREW (2431))<BR>(PLAIA, MARGARET (4506))<BR>(PRYCE, SONIA (5896))<BR>(SOTO, JEFFRY (9190))<BR>(SUBHAN, NAFEEZA (3611))<BR>(VIZUETA, CYNTHIA (8707))<BR>(WESOLOWSKI, KAROLINE (8158))<BR>(YI, JIN-SUK (5596))</td></tr><tr><td> 241-topic-09 </td><td>(ALFARO, KARLA (9121))<BR>(BONAMO, GINA (6968))<BR>(CHRISTIAN, RICHARD (9266))<BR>(D'ERASMO, BRANDON (5527))<BR>(FERREIRA, JANEIRO (9589))<BR>(FONG, JENNY (4838))<BR>(GOLDBERG, KERY (4136))<BR>(HATCH, EMILY (6644))<BR>(KELLY, TASHEDA (4398))<BR>(MARAGH, KADEEM (1652))<BR>(PEREZ, ANTHONY (5080))<BR>(PEREZ, BRAYLIN (7186))<BR>(PICART, ANDREW (2431))<BR>(PLAIA, MARGARET (4506))<BR>(PRYCE, SONIA (5896))<BR>(SOTO, JEFFRY (9190))<BR>(SUBHAN, NAFEEZA (3611))<BR>(VIZUETA, CYNTHIA (8707))<BR>(WESOLOWSKI, KAROLINE (8158))<BR>(YI, JIN-SUK (5596))</td></tr><tr><td> 241-topic-10 </td><td>(ALFARO, KARLA (9121))<BR>(BONAMO, GINA (6968))<BR>(CHRISTIAN, RICHARD (9266))<BR>(D'ERASMO, BRANDON (5527))<BR>(FERREIRA, JANEIRO (9589))<BR>(FONG, JENNY (4838))<BR>(GOLDBERG, KERY (4136))<BR>(HATCH, EMILY (6644))<BR>(KELLY, TASHEDA (4398))<BR>(MARAGH, KADEEM (1652))<BR>(PEREZ, ANTHONY (5080))<BR>(PEREZ, BRAYLIN (7186))<BR>(PICART, ANDREW (2431))<BR>(PLAIA, MARGARET (4506))<BR>(PRYCE, SONIA (5896))<BR>(SOTO, JEFFRY (9190))<BR>(SUBHAN, NAFEEZA (3611))<BR>(VIZUETA, CYNTHIA (8707))<BR>(WESOLOWSKI, KAROLINE (8158))<BR>(YI, JIN-SUK (5596))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
