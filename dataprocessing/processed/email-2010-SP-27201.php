#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 272 - OBJECT_ORIENTED_PROG (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>272</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>01</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>BAKIRAS_S</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3153</td><td>CANESSA, MIGUEL</td><td>Absent on the assessment test.</td></tr><tr><td>8040</td><td>CERCADO, VANESSA</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>8314</td><td>FRANCIS, TONYO</td><td>Absent on the assessment test.</td></tr><tr><td>2101</td><td>JOSEPH, KERRY</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>3446</td><td>LAU, WINSTON</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>3057</td><td>LIU, WENHUI</td><td>Absent on the assessment test.</td></tr><tr><td>7055</td><td>LLANOS, ANDRES</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>2382</td><td>MATHURIN, TONI</td><td>Absent on the assessment test.</td></tr><tr><td>6537</td><td>MONTALVAN, JACQUELINE</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>4264</td><td>NUDELMAN, ARIK</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>7003</td><td>NUNEZ, BEATRIZ</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>0703</td><td>PENG, ANDY</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>5374</td><td>RIBAS, MARTIN</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>4612</td><td>SAWYER-DYMSKI, JAMAAL</td><td>Absent on the assessment test.</td></tr><tr><td>0130</td><td>STEPHENS, RAVENANGEL</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>4429</td><td>WHITE, SHAKARA</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>6303</td><td>WONG, JEFFREY</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><tr><td>5173</td><td>YAU, ALLEN</td><td>272-topic-01<BR>272-topic-02<BR>272-topic-03<BR>272-topic-04<BR>272-topic-05</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 272-topic-01 </td><td>(CERCADO, VANESSA (8040))<BR>(JOSEPH, KERRY (2101))<BR>(LAU, WINSTON (3446))<BR>(LLANOS, ANDRES (7055))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(NUDELMAN, ARIK (4264))<BR>(NUNEZ, BEATRIZ (7003))<BR>(PENG, ANDY (0703))<BR>(RIBAS, MARTIN (5374))<BR>(STEPHENS, RAVENANGEL (0130))<BR>(WHITE, SHAKARA (4429))<BR>(WONG, JEFFREY (6303))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-02 </td><td>(CERCADO, VANESSA (8040))<BR>(JOSEPH, KERRY (2101))<BR>(LAU, WINSTON (3446))<BR>(LLANOS, ANDRES (7055))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(NUDELMAN, ARIK (4264))<BR>(NUNEZ, BEATRIZ (7003))<BR>(PENG, ANDY (0703))<BR>(RIBAS, MARTIN (5374))<BR>(STEPHENS, RAVENANGEL (0130))<BR>(WHITE, SHAKARA (4429))<BR>(WONG, JEFFREY (6303))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-03 </td><td>(CERCADO, VANESSA (8040))<BR>(JOSEPH, KERRY (2101))<BR>(LAU, WINSTON (3446))<BR>(LLANOS, ANDRES (7055))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(NUDELMAN, ARIK (4264))<BR>(NUNEZ, BEATRIZ (7003))<BR>(PENG, ANDY (0703))<BR>(RIBAS, MARTIN (5374))<BR>(STEPHENS, RAVENANGEL (0130))<BR>(WHITE, SHAKARA (4429))<BR>(WONG, JEFFREY (6303))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-04 </td><td>(CERCADO, VANESSA (8040))<BR>(JOSEPH, KERRY (2101))<BR>(LAU, WINSTON (3446))<BR>(LLANOS, ANDRES (7055))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(NUDELMAN, ARIK (4264))<BR>(NUNEZ, BEATRIZ (7003))<BR>(PENG, ANDY (0703))<BR>(RIBAS, MARTIN (5374))<BR>(STEPHENS, RAVENANGEL (0130))<BR>(WHITE, SHAKARA (4429))<BR>(WONG, JEFFREY (6303))<BR>(YAU, ALLEN (5173))</td></tr><tr><td> 272-topic-05 </td><td>(CERCADO, VANESSA (8040))<BR>(JOSEPH, KERRY (2101))<BR>(LAU, WINSTON (3446))<BR>(LLANOS, ANDRES (7055))<BR>(MONTALVAN, JACQUELINE (6537))<BR>(NUDELMAN, ARIK (4264))<BR>(NUNEZ, BEATRIZ (7003))<BR>(PENG, ANDY (0703))<BR>(RIBAS, MARTIN (5374))<BR>(STEPHENS, RAVENANGEL (0130))<BR>(WHITE, SHAKARA (4429))<BR>(WONG, JEFFREY (6303))<BR>(YAU, ALLEN (5173))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
