#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 301 - PROBABLTY_AND_STA_1 (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>301</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SHENKIN_P</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8992</td><td>CHOI, CHRISTOPHER</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-04<BR>301-topic-05<BR>301-topic-06<BR>301-topic-07<BR>301-topic-08<BR>301-topic-09<BR>301-topic-10</td></tr><tr><td>1132</td><td>FRANK, SARAH</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-06<BR>301-topic-08<BR>301-topic-10</td></tr><tr><td>9421</td><td>FRISCIA, ANNA</td><td>Absent on the assessment test.</td></tr><tr><td>1108</td><td>GOMEZ, CATHERINE</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-04<BR>301-topic-05<BR>301-topic-06<BR>301-topic-07<BR>301-topic-08<BR>301-topic-09<BR>301-topic-10</td></tr><tr><td>5840</td><td>JANIAK, KATARZYNA</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-04<BR>301-topic-05<BR>301-topic-06<BR>301-topic-07<BR>301-topic-08<BR>301-topic-09<BR>301-topic-10</td></tr><tr><td>9472</td><td>LAM, WANG</td><td>301-topic-02<BR>301-topic-04<BR>301-topic-06<BR>301-topic-08<BR>301-topic-09</td></tr><tr><td>2382</td><td>MATHURIN, TONI</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-04<BR>301-topic-05<BR>301-topic-06<BR>301-topic-07<BR>301-topic-08<BR>301-topic-09<BR>301-topic-10</td></tr><tr><td>6363</td><td>MC_MILLAN, ANDRE-ANN</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-08<BR>301-topic-09</td></tr><tr><td>5147</td><td>RANCHINSKIY, VASIL</td><td>Absent on the assessment test.</td></tr><tr><td>0955</td><td>REYNOSO, KATHERINE</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-04<BR>301-topic-08<BR>301-topic-09<BR>301-topic-10</td></tr><tr><td>5189</td><td>TATIS, EMILIO</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-04<BR>301-topic-05<BR>301-topic-06<BR>301-topic-07<BR>301-topic-08<BR>301-topic-09<BR>301-topic-10</td></tr><tr><td>0398</td><td>YAMADA, AYAKA</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-06<BR>301-topic-08<BR>301-topic-09<BR>301-topic-10</td></tr><tr><td>9469</td><td>YAMASAKI, MAMI</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-06<BR>301-topic-08<BR>301-topic-09<BR>301-topic-10</td></tr><tr><td>6641</td><td>YE, YU</td><td>301-topic-01<BR>301-topic-02<BR>301-topic-03<BR>301-topic-04<BR>301-topic-05<BR>301-topic-06<BR>301-topic-07<BR>301-topic-08<BR>301-topic-09<BR>301-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 301-topic-01 </td><td>(CHOI, CHRISTOPHER (8992))<BR>(FRANK, SARAH (1132))<BR>(GOMEZ, CATHERINE (1108))<BR>(JANIAK, KATARZYNA (5840))<BR>(MATHURIN, TONI (2382))<BR>(MC_MILLAN, ANDRE-ANN (6363))<BR>(REYNOSO, KATHERINE (0955))<BR>(TATIS, EMILIO (5189))<BR>(YAMADA, AYAKA (0398))<BR>(YAMASAKI, MAMI (9469))<BR>(YE, YU (6641))</td></tr><tr><td> 301-topic-02 </td><td>(CHOI, CHRISTOPHER (8992))<BR>(FRANK, SARAH (1132))<BR>(GOMEZ, CATHERINE (1108))<BR>(JANIAK, KATARZYNA (5840))<BR>(LAM, WANG (9472))<BR>(MATHURIN, TONI (2382))<BR>(MC_MILLAN, ANDRE-ANN (6363))<BR>(REYNOSO, KATHERINE (0955))<BR>(TATIS, EMILIO (5189))<BR>(YAMADA, AYAKA (0398))<BR>(YAMASAKI, MAMI (9469))<BR>(YE, YU (6641))</td></tr><tr><td> 301-topic-03 </td><td>(CHOI, CHRISTOPHER (8992))<BR>(FRANK, SARAH (1132))<BR>(GOMEZ, CATHERINE (1108))<BR>(JANIAK, KATARZYNA (5840))<BR>(MATHURIN, TONI (2382))<BR>(MC_MILLAN, ANDRE-ANN (6363))<BR>(REYNOSO, KATHERINE (0955))<BR>(TATIS, EMILIO (5189))<BR>(YAMADA, AYAKA (0398))<BR>(YAMASAKI, MAMI (9469))<BR>(YE, YU (6641))</td></tr><tr><td> 301-topic-04 </td><td>(CHOI, CHRISTOPHER (8992))<BR>(GOMEZ, CATHERINE (1108))<BR>(JANIAK, KATARZYNA (5840))<BR>(LAM, WANG (9472))<BR>(MATHURIN, TONI (2382))<BR>(REYNOSO, KATHERINE (0955))<BR>(TATIS, EMILIO (5189))<BR>(YE, YU (6641))</td></tr><tr><td> 301-topic-05 </td><td>(CHOI, CHRISTOPHER (8992))<BR>(GOMEZ, CATHERINE (1108))<BR>(JANIAK, KATARZYNA (5840))<BR>(MATHURIN, TONI (2382))<BR>(TATIS, EMILIO (5189))<BR>(YE, YU (6641))</td></tr><tr><td> 301-topic-06 </td><td>(CHOI, CHRISTOPHER (8992))<BR>(FRANK, SARAH (1132))<BR>(GOMEZ, CATHERINE (1108))<BR>(JANIAK, KATARZYNA (5840))<BR>(LAM, WANG (9472))<BR>(MATHURIN, TONI (2382))<BR>(TATIS, EMILIO (5189))<BR>(YAMADA, AYAKA (0398))<BR>(YAMASAKI, MAMI (9469))<BR>(YE, YU (6641))</td></tr><tr><td> 301-topic-07 </td><td>(CHOI, CHRISTOPHER (8992))<BR>(GOMEZ, CATHERINE (1108))<BR>(JANIAK, KATARZYNA (5840))<BR>(MATHURIN, TONI (2382))<BR>(TATIS, EMILIO (5189))<BR>(YE, YU (6641))</td></tr><tr><td> 301-topic-08 </td><td>(CHOI, CHRISTOPHER (8992))<BR>(FRANK, SARAH (1132))<BR>(GOMEZ, CATHERINE (1108))<BR>(JANIAK, KATARZYNA (5840))<BR>(LAM, WANG (9472))<BR>(MATHURIN, TONI (2382))<BR>(MC_MILLAN, ANDRE-ANN (6363))<BR>(REYNOSO, KATHERINE (0955))<BR>(TATIS, EMILIO (5189))<BR>(YAMADA, AYAKA (0398))<BR>(YAMASAKI, MAMI (9469))<BR>(YE, YU (6641))</td></tr><tr><td> 301-topic-09 </td><td>(CHOI, CHRISTOPHER (8992))<BR>(GOMEZ, CATHERINE (1108))<BR>(JANIAK, KATARZYNA (5840))<BR>(LAM, WANG (9472))<BR>(MATHURIN, TONI (2382))<BR>(MC_MILLAN, ANDRE-ANN (6363))<BR>(REYNOSO, KATHERINE (0955))<BR>(TATIS, EMILIO (5189))<BR>(YAMADA, AYAKA (0398))<BR>(YAMASAKI, MAMI (9469))<BR>(YE, YU (6641))</td></tr><tr><td> 301-topic-10 </td><td>(CHOI, CHRISTOPHER (8992))<BR>(FRANK, SARAH (1132))<BR>(GOMEZ, CATHERINE (1108))<BR>(JANIAK, KATARZYNA (5840))<BR>(MATHURIN, TONI (2382))<BR>(REYNOSO, KATHERINE (0955))<BR>(TATIS, EMILIO (5189))<BR>(YAMADA, AYAKA (0398))<BR>(YAMASAKI, MAMI (9469))<BR>(YE, YU (6641))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
