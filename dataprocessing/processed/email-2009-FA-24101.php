#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 241 - CALCULUS_1 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>241</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>HOENIG_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6955</td><td>BLANCO, KATHLEEN</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>8092</td><td>BONILLA, RASHADA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>4080</td><td>BUTTACAVOLI, NICHOLAS</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>8682</td><td>CARPIO, ANGELA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>5457</td><td>CARSON, BRIAN</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>5437</td><td>CARTER, DANEQUA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-3<BR>241-topic-5<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>7158</td><td>CHATTAR, NATASHA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>2504</td><td>CHEN, ELAINE</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>5259</td><td>CORDERO, JANESSA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>6548</td><td>DAVIS, APRIL</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>4692</td><td>DEJESUS, SHADE</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>5264</td><td>FENG, DONG_DONG</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>1322</td><td>HINCKSON, DWAYNE</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-8</td></tr><tr><td>0862</td><td>ILYAS, JJ</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-5<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>3905</td><td>PERALTA, DAMELSA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>5018</td><td>PERSAUD, AMANDA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>0324</td><td>PONZO, NICOLE</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>1682</td><td>QUERO, KRYSBEL</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>3811</td><td>RILEY, TANIA</td><td>241-topic-10<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>4208</td><td>SAENZ, YESSICA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>0150</td><td>SANABRIA, JOSEPH</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>3142</td><td>SANCHEZ, LOU</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-7<BR>241-topic-8</td></tr><tr><td>7522</td><td>STEVENS, MARK</td><td>241-topic-10<BR>241-topic-3<BR>241-topic-4<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>0492</td><td>SUKHNANAN, MARK</td><td>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>2018</td><td>TRINIDAD, SAMANTHA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>7467</td><td>VEGA, DAVID</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>1652</td><td>XIE, ZHIMIN</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-5<BR>241-topic-8<BR>241-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 241-topic-1 </td><td>(BLANCO, KATHLEEN (6955))<BR>(BONILLA, RASHADA (8092))<BR>(BUTTACAVOLI, NICHOLAS (4080))<BR>(CARPIO, ANGELA (8682))<BR>(CARSON, BRIAN (5457))<BR>(CARTER, DANEQUA (5437))<BR>(CHATTAR, NATASHA (7158))<BR>(CHEN, ELAINE (2504))<BR>(CORDERO, JANESSA (5259))<BR>(DAVIS, APRIL (6548))<BR>(DEJESUS, SHADE (4692))<BR>(FENG, DONG_DONG (5264))<BR>(HINCKSON, DWAYNE (1322))<BR>(ILYAS, JJ (0862))<BR>(PERALTA, DAMELSA (3905))<BR>(PERSAUD, AMANDA (5018))<BR>(PONZO, NICOLE (0324))<BR>(QUERO, KRYSBEL (1682))<BR>(SAENZ, YESSICA (4208))<BR>(SANABRIA, JOSEPH (0150))<BR>(SANCHEZ, LOU (3142))<BR>(TRINIDAD, SAMANTHA (2018))<BR>(VEGA, DAVID (7467))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-10 </td><td>(BLANCO, KATHLEEN (6955))<BR>(BONILLA, RASHADA (8092))<BR>(BUTTACAVOLI, NICHOLAS (4080))<BR>(CARPIO, ANGELA (8682))<BR>(CARSON, BRIAN (5457))<BR>(CARTER, DANEQUA (5437))<BR>(CHATTAR, NATASHA (7158))<BR>(CHEN, ELAINE (2504))<BR>(CORDERO, JANESSA (5259))<BR>(DAVIS, APRIL (6548))<BR>(DEJESUS, SHADE (4692))<BR>(FENG, DONG_DONG (5264))<BR>(HINCKSON, DWAYNE (1322))<BR>(ILYAS, JJ (0862))<BR>(PERALTA, DAMELSA (3905))<BR>(PERSAUD, AMANDA (5018))<BR>(PONZO, NICOLE (0324))<BR>(QUERO, KRYSBEL (1682))<BR>(RILEY, TANIA (3811))<BR>(SAENZ, YESSICA (4208))<BR>(SANABRIA, JOSEPH (0150))<BR>(SANCHEZ, LOU (3142))<BR>(STEVENS, MARK (7522))<BR>(SUKHNANAN, MARK (0492))<BR>(TRINIDAD, SAMANTHA (2018))<BR>(VEGA, DAVID (7467))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-2 </td><td>(BLANCO, KATHLEEN (6955))<BR>(BONILLA, RASHADA (8092))<BR>(BUTTACAVOLI, NICHOLAS (4080))<BR>(CARPIO, ANGELA (8682))<BR>(CARSON, BRIAN (5457))<BR>(CHATTAR, NATASHA (7158))<BR>(CHEN, ELAINE (2504))<BR>(CORDERO, JANESSA (5259))<BR>(DAVIS, APRIL (6548))<BR>(DEJESUS, SHADE (4692))<BR>(FENG, DONG_DONG (5264))<BR>(HINCKSON, DWAYNE (1322))<BR>(ILYAS, JJ (0862))<BR>(PERSAUD, AMANDA (5018))<BR>(PONZO, NICOLE (0324))<BR>(SAENZ, YESSICA (4208))<BR>(SANABRIA, JOSEPH (0150))<BR>(SANCHEZ, LOU (3142))<BR>(SUKHNANAN, MARK (0492))<BR>(TRINIDAD, SAMANTHA (2018))<BR>(VEGA, DAVID (7467))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-3 </td><td>(BLANCO, KATHLEEN (6955))<BR>(BONILLA, RASHADA (8092))<BR>(BUTTACAVOLI, NICHOLAS (4080))<BR>(CARPIO, ANGELA (8682))<BR>(CARSON, BRIAN (5457))<BR>(CARTER, DANEQUA (5437))<BR>(CHATTAR, NATASHA (7158))<BR>(CHEN, ELAINE (2504))<BR>(CORDERO, JANESSA (5259))<BR>(DAVIS, APRIL (6548))<BR>(DEJESUS, SHADE (4692))<BR>(FENG, DONG_DONG (5264))<BR>(HINCKSON, DWAYNE (1322))<BR>(ILYAS, JJ (0862))<BR>(PERALTA, DAMELSA (3905))<BR>(PERSAUD, AMANDA (5018))<BR>(PONZO, NICOLE (0324))<BR>(QUERO, KRYSBEL (1682))<BR>(RILEY, TANIA (3811))<BR>(SAENZ, YESSICA (4208))<BR>(SANABRIA, JOSEPH (0150))<BR>(SANCHEZ, LOU (3142))<BR>(STEVENS, MARK (7522))<BR>(SUKHNANAN, MARK (0492))<BR>(TRINIDAD, SAMANTHA (2018))<BR>(VEGA, DAVID (7467))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-4 </td><td>(BLANCO, KATHLEEN (6955))<BR>(BONILLA, RASHADA (8092))<BR>(CARPIO, ANGELA (8682))<BR>(CHEN, ELAINE (2504))<BR>(HINCKSON, DWAYNE (1322))<BR>(PERSAUD, AMANDA (5018))<BR>(RILEY, TANIA (3811))<BR>(SAENZ, YESSICA (4208))<BR>(SANABRIA, JOSEPH (0150))<BR>(SANCHEZ, LOU (3142))<BR>(STEVENS, MARK (7522))<BR>(TRINIDAD, SAMANTHA (2018))<BR>(VEGA, DAVID (7467))</td></tr><tr><td> 241-topic-5 </td><td>(BLANCO, KATHLEEN (6955))<BR>(BONILLA, RASHADA (8092))<BR>(CARPIO, ANGELA (8682))<BR>(CARTER, DANEQUA (5437))<BR>(CHATTAR, NATASHA (7158))<BR>(CHEN, ELAINE (2504))<BR>(CORDERO, JANESSA (5259))<BR>(DAVIS, APRIL (6548))<BR>(DEJESUS, SHADE (4692))<BR>(FENG, DONG_DONG (5264))<BR>(HINCKSON, DWAYNE (1322))<BR>(ILYAS, JJ (0862))<BR>(PERALTA, DAMELSA (3905))<BR>(PERSAUD, AMANDA (5018))<BR>(QUERO, KRYSBEL (1682))<BR>(RILEY, TANIA (3811))<BR>(SAENZ, YESSICA (4208))<BR>(SANABRIA, JOSEPH (0150))<BR>(SANCHEZ, LOU (3142))<BR>(SUKHNANAN, MARK (0492))<BR>(TRINIDAD, SAMANTHA (2018))<BR>(VEGA, DAVID (7467))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-6 </td><td>(BUTTACAVOLI, NICHOLAS (4080))<BR>(CARPIO, ANGELA (8682))<BR>(CHATTAR, NATASHA (7158))<BR>(CHEN, ELAINE (2504))<BR>(CORDERO, JANESSA (5259))<BR>(DAVIS, APRIL (6548))<BR>(DEJESUS, SHADE (4692))<BR>(FENG, DONG_DONG (5264))<BR>(HINCKSON, DWAYNE (1322))<BR>(PERALTA, DAMELSA (3905))<BR>(PONZO, NICOLE (0324))<BR>(QUERO, KRYSBEL (1682))<BR>(RILEY, TANIA (3811))<BR>(SAENZ, YESSICA (4208))<BR>(STEVENS, MARK (7522))<BR>(SUKHNANAN, MARK (0492))<BR>(TRINIDAD, SAMANTHA (2018))</td></tr><tr><td> 241-topic-7 </td><td>(BUTTACAVOLI, NICHOLAS (4080))<BR>(CARPIO, ANGELA (8682))<BR>(CHATTAR, NATASHA (7158))<BR>(CHEN, ELAINE (2504))<BR>(CORDERO, JANESSA (5259))<BR>(DAVIS, APRIL (6548))<BR>(DEJESUS, SHADE (4692))<BR>(ILYAS, JJ (0862))<BR>(PERALTA, DAMELSA (3905))<BR>(PONZO, NICOLE (0324))<BR>(RILEY, TANIA (3811))<BR>(SANABRIA, JOSEPH (0150))<BR>(SANCHEZ, LOU (3142))<BR>(STEVENS, MARK (7522))<BR>(SUKHNANAN, MARK (0492))<BR>(VEGA, DAVID (7467))</td></tr><tr><td> 241-topic-8 </td><td>(BLANCO, KATHLEEN (6955))<BR>(BONILLA, RASHADA (8092))<BR>(BUTTACAVOLI, NICHOLAS (4080))<BR>(CARPIO, ANGELA (8682))<BR>(CARSON, BRIAN (5457))<BR>(CARTER, DANEQUA (5437))<BR>(CHATTAR, NATASHA (7158))<BR>(CHEN, ELAINE (2504))<BR>(CORDERO, JANESSA (5259))<BR>(DAVIS, APRIL (6548))<BR>(DEJESUS, SHADE (4692))<BR>(FENG, DONG_DONG (5264))<BR>(HINCKSON, DWAYNE (1322))<BR>(ILYAS, JJ (0862))<BR>(PERALTA, DAMELSA (3905))<BR>(PERSAUD, AMANDA (5018))<BR>(PONZO, NICOLE (0324))<BR>(QUERO, KRYSBEL (1682))<BR>(RILEY, TANIA (3811))<BR>(SAENZ, YESSICA (4208))<BR>(SANABRIA, JOSEPH (0150))<BR>(SANCHEZ, LOU (3142))<BR>(STEVENS, MARK (7522))<BR>(SUKHNANAN, MARK (0492))<BR>(TRINIDAD, SAMANTHA (2018))<BR>(VEGA, DAVID (7467))<BR>(XIE, ZHIMIN (1652))</td></tr><tr><td> 241-topic-9 </td><td>(BLANCO, KATHLEEN (6955))<BR>(BONILLA, RASHADA (8092))<BR>(BUTTACAVOLI, NICHOLAS (4080))<BR>(CARPIO, ANGELA (8682))<BR>(CARSON, BRIAN (5457))<BR>(CARTER, DANEQUA (5437))<BR>(CHATTAR, NATASHA (7158))<BR>(CHEN, ELAINE (2504))<BR>(CORDERO, JANESSA (5259))<BR>(DAVIS, APRIL (6548))<BR>(DEJESUS, SHADE (4692))<BR>(FENG, DONG_DONG (5264))<BR>(ILYAS, JJ (0862))<BR>(PERALTA, DAMELSA (3905))<BR>(PERSAUD, AMANDA (5018))<BR>(PONZO, NICOLE (0324))<BR>(QUERO, KRYSBEL (1682))<BR>(RILEY, TANIA (3811))<BR>(SAENZ, YESSICA (4208))<BR>(SANABRIA, JOSEPH (0150))<BR>(STEVENS, MARK (7522))<BR>(SUKHNANAN, MARK (0492))<BR>(TRINIDAD, SAMANTHA (2018))<BR>(VEGA, DAVID (7467))<BR>(XIE, ZHIMIN (1652))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>