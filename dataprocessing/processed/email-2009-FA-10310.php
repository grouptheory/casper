#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>10</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>POLANCO_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7746</td><td>AUSTIN, MALEEK</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>9827</td><td>BOLLERS, CIETA</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>2672</td><td>CASADO, BASILIO</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>7948</td><td>CHARLES, WINNIE</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>8874</td><td>DEFREITAS, KARALYN</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>5265</td><td>DEL_ROSARIO, CRISTINA</td><td>103-topic-10<BR>103-topic-3<BR>103-topic-6<BR>103-topic-8</td></tr><tr><td>4974</td><td>DE_LA_NUEZ, KEYLA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>3511</td><td>DIAZ, JAIME</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>2052</td><td>JONES, TIASHA</td><td>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>6866</td><td>LAGRANGE, ALEXANDER</td><td>103-topic-2<BR>103-topic-3<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>0101</td><td>LOPEZ, ROSALINA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>3088</td><td>MUNOZ, CHRYSALIS</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>3232</td><td>OLIVIERI, LEANA</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-5<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>4575</td><td>REMLI, DEHBIA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>0885</td><td>SANTOS, JENNIFER</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>0620</td><td>SEJDARAS, BESMIR</td><td>Absent on the assessment test.</td></tr><tr><td>9269</td><td>SUAREZ, ERIDANIA</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-3<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8<BR>103-topic-9</td></tr><tr><td>3821</td><td>TIRADO, JACQUELINE</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-4<BR>103-topic-5<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>8257</td><td>TORRES, KALISHA</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>8785</td><td>WILLIAMS, BRITTANY</td><td>103-topic-1<BR>103-topic-10<BR>103-topic-2<BR>103-topic-3<BR>103-topic-6<BR>103-topic-7<BR>103-topic-8</td></tr><tr><td>1443</td><td>ZAPATA, KELLY</td><td>103-topic-1<BR>103-topic-2<BR>103-topic-4<BR>103-topic-6<BR>103-topic-8<BR>103-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-1 </td><td>(AUSTIN, MALEEK (7746))<BR>(BOLLERS, CIETA (9827))<BR>(CASADO, BASILIO (2672))<BR>(CHARLES, WINNIE (7948))<BR>(DEFREITAS, KARALYN (8874))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(DIAZ, JAIME (3511))<BR>(LOPEZ, ROSALINA (0101))<BR>(MUNOZ, CHRYSALIS (3088))<BR>(OLIVIERI, LEANA (3232))<BR>(REMLI, DEHBIA (4575))<BR>(SANTOS, JENNIFER (0885))<BR>(SUAREZ, ERIDANIA (9269))<BR>(TIRADO, JACQUELINE (3821))<BR>(TORRES, KALISHA (8257))<BR>(WILLIAMS, BRITTANY (8785))<BR>(ZAPATA, KELLY (1443))</td></tr><tr><td> 103-topic-10 </td><td>(AUSTIN, MALEEK (7746))<BR>(CHARLES, WINNIE (7948))<BR>(DEFREITAS, KARALYN (8874))<BR>(DEL_ROSARIO, CRISTINA (5265))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(DIAZ, JAIME (3511))<BR>(LOPEZ, ROSALINA (0101))<BR>(REMLI, DEHBIA (4575))<BR>(SANTOS, JENNIFER (0885))<BR>(TIRADO, JACQUELINE (3821))<BR>(TORRES, KALISHA (8257))<BR>(WILLIAMS, BRITTANY (8785))</td></tr><tr><td> 103-topic-2 </td><td>(AUSTIN, MALEEK (7746))<BR>(BOLLERS, CIETA (9827))<BR>(CASADO, BASILIO (2672))<BR>(CHARLES, WINNIE (7948))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(DIAZ, JAIME (3511))<BR>(JONES, TIASHA (2052))<BR>(LAGRANGE, ALEXANDER (6866))<BR>(LOPEZ, ROSALINA (0101))<BR>(MUNOZ, CHRYSALIS (3088))<BR>(OLIVIERI, LEANA (3232))<BR>(REMLI, DEHBIA (4575))<BR>(SANTOS, JENNIFER (0885))<BR>(SUAREZ, ERIDANIA (9269))<BR>(TORRES, KALISHA (8257))<BR>(WILLIAMS, BRITTANY (8785))<BR>(ZAPATA, KELLY (1443))</td></tr><tr><td> 103-topic-3 </td><td>(BOLLERS, CIETA (9827))<BR>(CASADO, BASILIO (2672))<BR>(CHARLES, WINNIE (7948))<BR>(DEFREITAS, KARALYN (8874))<BR>(DEL_ROSARIO, CRISTINA (5265))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(DIAZ, JAIME (3511))<BR>(JONES, TIASHA (2052))<BR>(LAGRANGE, ALEXANDER (6866))<BR>(MUNOZ, CHRYSALIS (3088))<BR>(REMLI, DEHBIA (4575))<BR>(SANTOS, JENNIFER (0885))<BR>(SUAREZ, ERIDANIA (9269))<BR>(WILLIAMS, BRITTANY (8785))</td></tr><tr><td> 103-topic-4 </td><td>(AUSTIN, MALEEK (7746))<BR>(BOLLERS, CIETA (9827))<BR>(DEFREITAS, KARALYN (8874))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(JONES, TIASHA (2052))<BR>(MUNOZ, CHRYSALIS (3088))<BR>(REMLI, DEHBIA (4575))<BR>(SANTOS, JENNIFER (0885))<BR>(SUAREZ, ERIDANIA (9269))<BR>(TIRADO, JACQUELINE (3821))<BR>(ZAPATA, KELLY (1443))</td></tr><tr><td> 103-topic-5 </td><td>(BOLLERS, CIETA (9827))<BR>(CASADO, BASILIO (2672))<BR>(DEFREITAS, KARALYN (8874))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(LAGRANGE, ALEXANDER (6866))<BR>(MUNOZ, CHRYSALIS (3088))<BR>(OLIVIERI, LEANA (3232))<BR>(REMLI, DEHBIA (4575))<BR>(SANTOS, JENNIFER (0885))<BR>(SUAREZ, ERIDANIA (9269))<BR>(TIRADO, JACQUELINE (3821))</td></tr><tr><td> 103-topic-6 </td><td>(AUSTIN, MALEEK (7746))<BR>(BOLLERS, CIETA (9827))<BR>(CASADO, BASILIO (2672))<BR>(CHARLES, WINNIE (7948))<BR>(DEFREITAS, KARALYN (8874))<BR>(DEL_ROSARIO, CRISTINA (5265))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(DIAZ, JAIME (3511))<BR>(JONES, TIASHA (2052))<BR>(LAGRANGE, ALEXANDER (6866))<BR>(LOPEZ, ROSALINA (0101))<BR>(MUNOZ, CHRYSALIS (3088))<BR>(REMLI, DEHBIA (4575))<BR>(SANTOS, JENNIFER (0885))<BR>(SUAREZ, ERIDANIA (9269))<BR>(TIRADO, JACQUELINE (3821))<BR>(TORRES, KALISHA (8257))<BR>(WILLIAMS, BRITTANY (8785))<BR>(ZAPATA, KELLY (1443))</td></tr><tr><td> 103-topic-7 </td><td>(AUSTIN, MALEEK (7746))<BR>(BOLLERS, CIETA (9827))<BR>(CASADO, BASILIO (2672))<BR>(CHARLES, WINNIE (7948))<BR>(DEFREITAS, KARALYN (8874))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(DIAZ, JAIME (3511))<BR>(JONES, TIASHA (2052))<BR>(LAGRANGE, ALEXANDER (6866))<BR>(LOPEZ, ROSALINA (0101))<BR>(MUNOZ, CHRYSALIS (3088))<BR>(OLIVIERI, LEANA (3232))<BR>(REMLI, DEHBIA (4575))<BR>(SANTOS, JENNIFER (0885))<BR>(SUAREZ, ERIDANIA (9269))<BR>(TIRADO, JACQUELINE (3821))<BR>(TORRES, KALISHA (8257))<BR>(WILLIAMS, BRITTANY (8785))</td></tr><tr><td> 103-topic-8 </td><td>(AUSTIN, MALEEK (7746))<BR>(BOLLERS, CIETA (9827))<BR>(CASADO, BASILIO (2672))<BR>(CHARLES, WINNIE (7948))<BR>(DEFREITAS, KARALYN (8874))<BR>(DEL_ROSARIO, CRISTINA (5265))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(DIAZ, JAIME (3511))<BR>(JONES, TIASHA (2052))<BR>(LAGRANGE, ALEXANDER (6866))<BR>(LOPEZ, ROSALINA (0101))<BR>(MUNOZ, CHRYSALIS (3088))<BR>(OLIVIERI, LEANA (3232))<BR>(REMLI, DEHBIA (4575))<BR>(SANTOS, JENNIFER (0885))<BR>(SUAREZ, ERIDANIA (9269))<BR>(TIRADO, JACQUELINE (3821))<BR>(TORRES, KALISHA (8257))<BR>(WILLIAMS, BRITTANY (8785))<BR>(ZAPATA, KELLY (1443))</td></tr><tr><td> 103-topic-9 </td><td>(CHARLES, WINNIE (7948))<BR>(DE_LA_NUEZ, KEYLA (4974))<BR>(REMLI, DEHBIA (4575))<BR>(SANTOS, JENNIFER (0885))<BR>(SUAREZ, ERIDANIA (9269))<BR>(ZAPATA, KELLY (1443))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
