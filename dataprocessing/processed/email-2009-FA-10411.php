#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>11</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>PEIKES_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>2217</td><td>ARIF, AISHA</td><td>104-topic-10<BR>104-topic-4<BR>104-topic-6</td></tr><tr><td>9164</td><td>BARRAGAN, YANIL</td><td>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>1237</td><td>CAMPBELL, TIMOTHY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>1802</td><td>DINGLE, DAVID</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>8034</td><td>DREBSKAYA, YANINA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-8</td></tr><tr><td>2529</td><td>ESTRELLA, JULIE</td><td>Absent on the assessment test.</td></tr><tr><td>3809</td><td>FRANCIS, ASHLEY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-9</td></tr><tr><td>3758</td><td>GEORGE, DEANNA</td><td>104-topic-10<BR>104-topic-2<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>9665</td><td>HARVEY, ABIGAIL</td><td>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>2314</td><td>HUDA, AZHARUL</td><td>104-topic-1<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>6001</td><td>KOZIN, ILANA</td><td>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>6838</td><td>LAWRENCE, GLEN</td><td>Absent on the assessment test.</td></tr><tr><td>8210</td><td>LILES, ANDREW</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>3078</td><td>LOPEZ, CLAUDIA</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>0181</td><td>MEJIA, ALTHEA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>0889</td><td>NABIRALI, ALANA</td><td>Absent on the assessment test.</td></tr><tr><td>9617</td><td>NELSON-COOK, TANESHA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>3237</td><td>SAMAYOA, ALLAN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>3338</td><td>SANTOS, ANA</td><td>Absent on the assessment test.</td></tr><tr><td>8964</td><td>SINGH, MANISHA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>1351</td><td>SPRANCE, STEVEN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>5178</td><td>STEPHEN, LINDA</td><td>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>2554</td><td>VASQUEZ, CHRISTOPHER</td><td>104-topic-1<BR>104-topic-3<BR>104-topic-4<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>2299</td><td>VERTUS, MIKE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-7</td></tr><tr><td>9199</td><td>YUSUF, NASIRAT</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(CAMPBELL, TIMOTHY (1237))<BR>(DINGLE, DAVID (1802))<BR>(DREBSKAYA, YANINA (8034))<BR>(FRANCIS, ASHLEY (3809))<BR>(HUDA, AZHARUL (2314))<BR>(LILES, ANDREW (8210))<BR>(LOPEZ, CLAUDIA (3078))<BR>(MEJIA, ALTHEA (0181))<BR>(NELSON-COOK, TANESHA (9617))<BR>(SAMAYOA, ALLAN (3237))<BR>(SINGH, MANISHA (8964))<BR>(SPRANCE, STEVEN (1351))<BR>(VASQUEZ, CHRISTOPHER (2554))<BR>(VERTUS, MIKE (2299))<BR>(YUSUF, NASIRAT (9199))</td></tr><tr><td> 104-topic-10 </td><td>(ARIF, AISHA (2217))<BR>(BARRAGAN, YANIL (9164))<BR>(CAMPBELL, TIMOTHY (1237))<BR>(DINGLE, DAVID (1802))<BR>(DREBSKAYA, YANINA (8034))<BR>(FRANCIS, ASHLEY (3809))<BR>(GEORGE, DEANNA (3758))<BR>(HARVEY, ABIGAIL (9665))<BR>(KOZIN, ILANA (6001))<BR>(LILES, ANDREW (8210))<BR>(MEJIA, ALTHEA (0181))<BR>(NELSON-COOK, TANESHA (9617))<BR>(SAMAYOA, ALLAN (3237))<BR>(SINGH, MANISHA (8964))<BR>(SPRANCE, STEVEN (1351))<BR>(STEPHEN, LINDA (5178))<BR>(VERTUS, MIKE (2299))<BR>(YUSUF, NASIRAT (9199))</td></tr><tr><td> 104-topic-2 </td><td>(CAMPBELL, TIMOTHY (1237))<BR>(DINGLE, DAVID (1802))<BR>(GEORGE, DEANNA (3758))<BR>(HARVEY, ABIGAIL (9665))<BR>(KOZIN, ILANA (6001))<BR>(LOPEZ, CLAUDIA (3078))<BR>(MEJIA, ALTHEA (0181))<BR>(SAMAYOA, ALLAN (3237))<BR>(SPRANCE, STEVEN (1351))<BR>(YUSUF, NASIRAT (9199))</td></tr><tr><td> 104-topic-3 </td><td>(DINGLE, DAVID (1802))<BR>(DREBSKAYA, YANINA (8034))<BR>(LILES, ANDREW (8210))<BR>(NELSON-COOK, TANESHA (9617))<BR>(SAMAYOA, ALLAN (3237))<BR>(SPRANCE, STEVEN (1351))<BR>(STEPHEN, LINDA (5178))<BR>(VASQUEZ, CHRISTOPHER (2554))<BR>(VERTUS, MIKE (2299))<BR>(YUSUF, NASIRAT (9199))</td></tr><tr><td> 104-topic-4 </td><td>(ARIF, AISHA (2217))<BR>(DINGLE, DAVID (1802))<BR>(DREBSKAYA, YANINA (8034))<BR>(FRANCIS, ASHLEY (3809))<BR>(HARVEY, ABIGAIL (9665))<BR>(KOZIN, ILANA (6001))<BR>(MEJIA, ALTHEA (0181))<BR>(NELSON-COOK, TANESHA (9617))<BR>(SAMAYOA, ALLAN (3237))<BR>(SINGH, MANISHA (8964))<BR>(SPRANCE, STEVEN (1351))<BR>(STEPHEN, LINDA (5178))<BR>(VASQUEZ, CHRISTOPHER (2554))<BR>(VERTUS, MIKE (2299))</td></tr><tr><td> 104-topic-5 </td><td>(BARRAGAN, YANIL (9164))<BR>(CAMPBELL, TIMOTHY (1237))<BR>(DINGLE, DAVID (1802))<BR>(DREBSKAYA, YANINA (8034))<BR>(FRANCIS, ASHLEY (3809))<BR>(GEORGE, DEANNA (3758))<BR>(HUDA, AZHARUL (2314))<BR>(KOZIN, ILANA (6001))<BR>(LILES, ANDREW (8210))<BR>(MEJIA, ALTHEA (0181))<BR>(NELSON-COOK, TANESHA (9617))<BR>(SAMAYOA, ALLAN (3237))<BR>(SINGH, MANISHA (8964))<BR>(SPRANCE, STEVEN (1351))<BR>(STEPHEN, LINDA (5178))<BR>(VERTUS, MIKE (2299))<BR>(YUSUF, NASIRAT (9199))</td></tr><tr><td> 104-topic-6 </td><td>(ARIF, AISHA (2217))<BR>(BARRAGAN, YANIL (9164))<BR>(CAMPBELL, TIMOTHY (1237))<BR>(DINGLE, DAVID (1802))<BR>(DREBSKAYA, YANINA (8034))<BR>(FRANCIS, ASHLEY (3809))<BR>(GEORGE, DEANNA (3758))<BR>(HARVEY, ABIGAIL (9665))<BR>(HUDA, AZHARUL (2314))<BR>(KOZIN, ILANA (6001))<BR>(LILES, ANDREW (8210))<BR>(LOPEZ, CLAUDIA (3078))<BR>(MEJIA, ALTHEA (0181))<BR>(NELSON-COOK, TANESHA (9617))<BR>(SAMAYOA, ALLAN (3237))<BR>(SINGH, MANISHA (8964))<BR>(STEPHEN, LINDA (5178))<BR>(VASQUEZ, CHRISTOPHER (2554))<BR>(YUSUF, NASIRAT (9199))</td></tr><tr><td> 104-topic-7 </td><td>(BARRAGAN, YANIL (9164))<BR>(CAMPBELL, TIMOTHY (1237))<BR>(DINGLE, DAVID (1802))<BR>(GEORGE, DEANNA (3758))<BR>(HARVEY, ABIGAIL (9665))<BR>(HUDA, AZHARUL (2314))<BR>(KOZIN, ILANA (6001))<BR>(LILES, ANDREW (8210))<BR>(LOPEZ, CLAUDIA (3078))<BR>(MEJIA, ALTHEA (0181))<BR>(NELSON-COOK, TANESHA (9617))<BR>(SAMAYOA, ALLAN (3237))<BR>(SINGH, MANISHA (8964))<BR>(SPRANCE, STEVEN (1351))<BR>(STEPHEN, LINDA (5178))<BR>(VASQUEZ, CHRISTOPHER (2554))<BR>(VERTUS, MIKE (2299))<BR>(YUSUF, NASIRAT (9199))</td></tr><tr><td> 104-topic-8 </td><td>(CAMPBELL, TIMOTHY (1237))<BR>(DINGLE, DAVID (1802))<BR>(DREBSKAYA, YANINA (8034))<BR>(GEORGE, DEANNA (3758))<BR>(KOZIN, ILANA (6001))<BR>(NELSON-COOK, TANESHA (9617))<BR>(SAMAYOA, ALLAN (3237))<BR>(STEPHEN, LINDA (5178))</td></tr><tr><td> 104-topic-9 </td><td>(CAMPBELL, TIMOTHY (1237))<BR>(DINGLE, DAVID (1802))<BR>(FRANCIS, ASHLEY (3809))<BR>(MEJIA, ALTHEA (0181))<BR>(NELSON-COOK, TANESHA (9617))<BR>(SPRANCE, STEVEN (1351))<BR>(STEPHEN, LINDA (5178))<BR>(VASQUEZ, CHRISTOPHER (2554))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>