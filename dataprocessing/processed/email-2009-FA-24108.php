#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 241 - CALCULUS_1 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>241</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>08</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SEAMAN_C</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9443</td><td>BADA, OLUWATOBI</td><td>Absent on the assessment test.</td></tr><tr><td>7950</td><td>BOONE, MARKIA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>6551</td><td>BURMIN, POLINA</td><td>241-topic-3<BR>241-topic-6<BR>241-topic-8</td></tr><tr><td>1930</td><td>CAPULLARI, ALVITA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8</td></tr><tr><td>5630</td><td>CAYETANO, KAREM</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>2593</td><td>EGER, KATYA</td><td>241-topic-10<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>5356</td><td>EOM, JI_HYE(JENNY)</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-8</td></tr><tr><td>2477</td><td>FLAGIELLO, ANGELO</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-4<BR>241-topic-5<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>9417</td><td>GAONA, ALEJANDRA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>3535</td><td>GURKA, KRISTEN</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>1365</td><td>HOWARD, CHRISTINA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>8785</td><td>KAUR, JASPREET</td><td>241-topic-10<BR>241-topic-5<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>1241</td><td>KHAN, UMMAY</td><td>241-topic-10<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>1635</td><td>KHYMYCH, LESYA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>3628</td><td>LEE, LISA</td><td>241-topic-10<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-8</td></tr><tr><td>0636</td><td>LIU, MI</td><td>241-topic-1<BR>241-topic-2<BR>241-topic-3<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>5915</td><td>LOZADA, JEREMY</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-8</td></tr><tr><td>0578</td><td>MOHAMED, MOHAMED</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-2<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>8463</td><td>MORDUKHAYEV, ELIOR</td><td>241-topic-1<BR>241-topic-3<BR>241-topic-5<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>0703</td><td>PENG, ANDY</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-3<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>5887</td><td>SIGUENCIA, MILTON</td><td>241-topic-10<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>7165</td><td>TAM, JESSICA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-5<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>8266</td><td>THOMAS, TIFFANY</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-3<BR>241-topic-5<BR>241-topic-6<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>6531</td><td>TUNJIAN, ALEXANDRA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-6<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>9145</td><td>VARELA, MAYRA</td><td>241-topic-1<BR>241-topic-10<BR>241-topic-3<BR>241-topic-5<BR>241-topic-7<BR>241-topic-8<BR>241-topic-9</td></tr><tr><td>7532</td><td>YANG, ZHEN</td><td>241-topic-10<BR>241-topic-3<BR>241-topic-4<BR>241-topic-5<BR>241-topic-8</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 241-topic-1 </td><td>(BOONE, MARKIA (7950))<BR>(CAPULLARI, ALVITA (1930))<BR>(CAYETANO, KAREM (5630))<BR>(EOM, JI_HYE(JENNY) (5356))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAONA, ALEJANDRA (9417))<BR>(GURKA, KRISTEN (3535))<BR>(HOWARD, CHRISTINA (1365))<BR>(KHYMYCH, LESYA (1635))<BR>(LIU, MI (0636))<BR>(LOZADA, JEREMY (5915))<BR>(MOHAMED, MOHAMED (0578))<BR>(MORDUKHAYEV, ELIOR (8463))<BR>(PENG, ANDY (0703))<BR>(TAM, JESSICA (7165))<BR>(THOMAS, TIFFANY (8266))<BR>(TUNJIAN, ALEXANDRA (6531))<BR>(VARELA, MAYRA (9145))</td></tr><tr><td> 241-topic-10 </td><td>(BOONE, MARKIA (7950))<BR>(CAPULLARI, ALVITA (1930))<BR>(CAYETANO, KAREM (5630))<BR>(EGER, KATYA (2593))<BR>(EOM, JI_HYE(JENNY) (5356))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAONA, ALEJANDRA (9417))<BR>(GURKA, KRISTEN (3535))<BR>(HOWARD, CHRISTINA (1365))<BR>(KAUR, JASPREET (8785))<BR>(KHAN, UMMAY (1241))<BR>(KHYMYCH, LESYA (1635))<BR>(LEE, LISA (3628))<BR>(LOZADA, JEREMY (5915))<BR>(MOHAMED, MOHAMED (0578))<BR>(PENG, ANDY (0703))<BR>(SIGUENCIA, MILTON (5887))<BR>(TAM, JESSICA (7165))<BR>(THOMAS, TIFFANY (8266))<BR>(TUNJIAN, ALEXANDRA (6531))<BR>(VARELA, MAYRA (9145))<BR>(YANG, ZHEN (7532))</td></tr><tr><td> 241-topic-2 </td><td>(EOM, JI_HYE(JENNY) (5356))<BR>(GAONA, ALEJANDRA (9417))<BR>(HOWARD, CHRISTINA (1365))<BR>(KHYMYCH, LESYA (1635))<BR>(LIU, MI (0636))<BR>(MOHAMED, MOHAMED (0578))</td></tr><tr><td> 241-topic-3 </td><td>(BOONE, MARKIA (7950))<BR>(BURMIN, POLINA (6551))<BR>(CAYETANO, KAREM (5630))<BR>(EGER, KATYA (2593))<BR>(EOM, JI_HYE(JENNY) (5356))<BR>(GAONA, ALEJANDRA (9417))<BR>(GURKA, KRISTEN (3535))<BR>(KHAN, UMMAY (1241))<BR>(KHYMYCH, LESYA (1635))<BR>(LEE, LISA (3628))<BR>(LIU, MI (0636))<BR>(MOHAMED, MOHAMED (0578))<BR>(MORDUKHAYEV, ELIOR (8463))<BR>(PENG, ANDY (0703))<BR>(SIGUENCIA, MILTON (5887))<BR>(THOMAS, TIFFANY (8266))<BR>(TUNJIAN, ALEXANDRA (6531))<BR>(VARELA, MAYRA (9145))<BR>(YANG, ZHEN (7532))</td></tr><tr><td> 241-topic-4 </td><td>(BOONE, MARKIA (7950))<BR>(CAPULLARI, ALVITA (1930))<BR>(EGER, KATYA (2593))<BR>(EOM, JI_HYE(JENNY) (5356))<BR>(FLAGIELLO, ANGELO (2477))<BR>(KHAN, UMMAY (1241))<BR>(KHYMYCH, LESYA (1635))<BR>(LEE, LISA (3628))<BR>(LOZADA, JEREMY (5915))<BR>(MOHAMED, MOHAMED (0578))<BR>(SIGUENCIA, MILTON (5887))<BR>(TUNJIAN, ALEXANDRA (6531))<BR>(YANG, ZHEN (7532))</td></tr><tr><td> 241-topic-5 </td><td>(BOONE, MARKIA (7950))<BR>(CAPULLARI, ALVITA (1930))<BR>(CAYETANO, KAREM (5630))<BR>(EGER, KATYA (2593))<BR>(EOM, JI_HYE(JENNY) (5356))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAONA, ALEJANDRA (9417))<BR>(GURKA, KRISTEN (3535))<BR>(KAUR, JASPREET (8785))<BR>(KHAN, UMMAY (1241))<BR>(KHYMYCH, LESYA (1635))<BR>(LEE, LISA (3628))<BR>(LOZADA, JEREMY (5915))<BR>(MOHAMED, MOHAMED (0578))<BR>(MORDUKHAYEV, ELIOR (8463))<BR>(SIGUENCIA, MILTON (5887))<BR>(TAM, JESSICA (7165))<BR>(THOMAS, TIFFANY (8266))<BR>(TUNJIAN, ALEXANDRA (6531))<BR>(VARELA, MAYRA (9145))<BR>(YANG, ZHEN (7532))</td></tr><tr><td> 241-topic-6 </td><td>(BURMIN, POLINA (6551))<BR>(CAPULLARI, ALVITA (1930))<BR>(CAYETANO, KAREM (5630))<BR>(EGER, KATYA (2593))<BR>(EOM, JI_HYE(JENNY) (5356))<BR>(GAONA, ALEJANDRA (9417))<BR>(GURKA, KRISTEN (3535))<BR>(KHAN, UMMAY (1241))<BR>(KHYMYCH, LESYA (1635))<BR>(LOZADA, JEREMY (5915))<BR>(MOHAMED, MOHAMED (0578))<BR>(THOMAS, TIFFANY (8266))<BR>(TUNJIAN, ALEXANDRA (6531))</td></tr><tr><td> 241-topic-7 </td><td>(BOONE, MARKIA (7950))<BR>(CAPULLARI, ALVITA (1930))<BR>(CAYETANO, KAREM (5630))<BR>(EGER, KATYA (2593))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAONA, ALEJANDRA (9417))<BR>(HOWARD, CHRISTINA (1365))<BR>(KHAN, UMMAY (1241))<BR>(KHYMYCH, LESYA (1635))<BR>(MOHAMED, MOHAMED (0578))<BR>(MORDUKHAYEV, ELIOR (8463))<BR>(PENG, ANDY (0703))<BR>(SIGUENCIA, MILTON (5887))<BR>(TAM, JESSICA (7165))<BR>(THOMAS, TIFFANY (8266))<BR>(VARELA, MAYRA (9145))</td></tr><tr><td> 241-topic-8 </td><td>(BOONE, MARKIA (7950))<BR>(BURMIN, POLINA (6551))<BR>(CAPULLARI, ALVITA (1930))<BR>(CAYETANO, KAREM (5630))<BR>(EGER, KATYA (2593))<BR>(EOM, JI_HYE(JENNY) (5356))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAONA, ALEJANDRA (9417))<BR>(GURKA, KRISTEN (3535))<BR>(HOWARD, CHRISTINA (1365))<BR>(KAUR, JASPREET (8785))<BR>(KHAN, UMMAY (1241))<BR>(KHYMYCH, LESYA (1635))<BR>(LEE, LISA (3628))<BR>(LIU, MI (0636))<BR>(LOZADA, JEREMY (5915))<BR>(MOHAMED, MOHAMED (0578))<BR>(MORDUKHAYEV, ELIOR (8463))<BR>(PENG, ANDY (0703))<BR>(SIGUENCIA, MILTON (5887))<BR>(TAM, JESSICA (7165))<BR>(THOMAS, TIFFANY (8266))<BR>(TUNJIAN, ALEXANDRA (6531))<BR>(VARELA, MAYRA (9145))<BR>(YANG, ZHEN (7532))</td></tr><tr><td> 241-topic-9 </td><td>(BOONE, MARKIA (7950))<BR>(CAYETANO, KAREM (5630))<BR>(EGER, KATYA (2593))<BR>(FLAGIELLO, ANGELO (2477))<BR>(GAONA, ALEJANDRA (9417))<BR>(GURKA, KRISTEN (3535))<BR>(HOWARD, CHRISTINA (1365))<BR>(KAUR, JASPREET (8785))<BR>(KHAN, UMMAY (1241))<BR>(KHYMYCH, LESYA (1635))<BR>(LIU, MI (0636))<BR>(MOHAMED, MOHAMED (0578))<BR>(MORDUKHAYEV, ELIOR (8463))<BR>(PENG, ANDY (0703))<BR>(SIGUENCIA, MILTON (5887))<BR>(TAM, JESSICA (7165))<BR>(THOMAS, TIFFANY (8266))<BR>(TUNJIAN, ALEXANDRA (6531))<BR>(VARELA, MAYRA (9145))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>