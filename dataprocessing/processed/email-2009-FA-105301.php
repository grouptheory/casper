#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>301</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>TAMARI_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0370</td><td>BENNETT, MILTON</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-4<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>9414</td><td>CAPELLA, GEORGE</td><td>105-topic-1<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>0469</td><td>CHELIOUT_DASILVA, SOFIA</td><td>Passed everything.</td></tr><tr><td>4092</td><td>CLARKE, SHANDIA</td><td>105-topic-2</td></tr><tr><td>0845</td><td>DAVID, MITCHEL</td><td>105-topic-1<BR>105-topic-6</td></tr><tr><td>8385</td><td>DEWAN, TANIYA</td><td>Absent on the assessment test.</td></tr><tr><td>4086</td><td>FERATOVIC, MERSIMA</td><td>Passed everything.</td></tr><tr><td>2237</td><td>FLORES, ROBIN</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-4<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>7358</td><td>HOLDER, TIONNE</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-5<BR>105-topic-6<BR>105-topic-9</td></tr><tr><td>2756</td><td>HOWARD, MADGELYN</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>3779</td><td>IFTIKHAR, MUHAMMAD</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-4<BR>105-topic-6<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>8075</td><td>JOSEPH, MARISSA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-6</td></tr><tr><td>9751</td><td>LEWIS, JILLISSA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-4<BR>105-topic-6</td></tr><tr><td>1221</td><td>MAHONEY, ARIEL</td><td>105-topic-2<BR>105-topic-6<BR>105-topic-9</td></tr><tr><td>8553</td><td>NEGRON, DENNISE</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>3099</td><td>PEARTREE, YVONNE</td><td>105-topic-10<BR>105-topic-2<BR>105-topic-6<BR>105-topic-8</td></tr><tr><td>2295</td><td>THACH, SAO</td><td>Passed everything.</td></tr><tr><td>8381</td><td>TRIFUNDIO, NOEL</td><td>105-topic-3<BR>105-topic-6</td></tr><tr><td>8709</td><td>WILSON, ANDREA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6</td></tr><tr><td>5581</td><td>ZEPHIRIN, EDYNE</td><td>105-topic-10<BR>105-topic-4<BR>105-topic-6<BR>105-topic-9</td></tr><tr><td>4400</td><td>ZUBETS, MARIA</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-1 </td><td>(BENNETT, MILTON (0370))<BR>(CAPELLA, GEORGE (9414))<BR>(DAVID, MITCHEL (0845))<BR>(FLORES, ROBIN (2237))<BR>(HOLDER, TIONNE (7358))<BR>(HOWARD, MADGELYN (2756))<BR>(IFTIKHAR, MUHAMMAD (3779))<BR>(JOSEPH, MARISSA (8075))<BR>(LEWIS, JILLISSA (9751))<BR>(NEGRON, DENNISE (8553))<BR>(WILSON, ANDREA (8709))Absent on the assessment test.</td></tr><tr><td> 105-topic-10 </td><td>(BENNETT, MILTON (0370))<BR>(HOLDER, TIONNE (7358))<BR>(HOWARD, MADGELYN (2756))<BR>(IFTIKHAR, MUHAMMAD (3779))<BR>(JOSEPH, MARISSA (8075))<BR>(LEWIS, JILLISSA (9751))<BR>(NEGRON, DENNISE (8553))<BR>(PEARTREE, YVONNE (3099))<BR>(WILSON, ANDREA (8709))<BR>(ZEPHIRIN, EDYNE (5581))Absent on the assessment test.</td></tr><tr><td> 105-topic-2 </td><td>(CLARKE, SHANDIA (4092))<BR>(FLORES, ROBIN (2237))<BR>(HOWARD, MADGELYN (2756))<BR>(MAHONEY, ARIEL (1221))<BR>(PEARTREE, YVONNE (3099))<BR>(WILSON, ANDREA (8709))Absent on the assessment test.</td></tr><tr><td> 105-topic-3 </td><td>(CAPELLA, GEORGE (9414))<BR>(HOWARD, MADGELYN (2756))<BR>(NEGRON, DENNISE (8553))<BR>(TRIFUNDIO, NOEL (8381))<BR>(WILSON, ANDREA (8709))Absent on the assessment test.</td></tr><tr><td> 105-topic-4 </td><td>(BENNETT, MILTON (0370))<BR>(CAPELLA, GEORGE (9414))<BR>(FLORES, ROBIN (2237))<BR>(HOWARD, MADGELYN (2756))<BR>(IFTIKHAR, MUHAMMAD (3779))<BR>(LEWIS, JILLISSA (9751))<BR>(NEGRON, DENNISE (8553))<BR>(WILSON, ANDREA (8709))<BR>(ZEPHIRIN, EDYNE (5581))Absent on the assessment test.</td></tr><tr><td> 105-topic-5 </td><td>(CAPELLA, GEORGE (9414))<BR>(HOLDER, TIONNE (7358))<BR>(HOWARD, MADGELYN (2756))<BR>(NEGRON, DENNISE (8553))<BR>(WILSON, ANDREA (8709))Absent on the assessment test.</td></tr><tr><td> 105-topic-6 </td><td>(BENNETT, MILTON (0370))<BR>(CAPELLA, GEORGE (9414))<BR>(DAVID, MITCHEL (0845))<BR>(FLORES, ROBIN (2237))<BR>(HOLDER, TIONNE (7358))<BR>(HOWARD, MADGELYN (2756))<BR>(IFTIKHAR, MUHAMMAD (3779))<BR>(JOSEPH, MARISSA (8075))<BR>(LEWIS, JILLISSA (9751))<BR>(MAHONEY, ARIEL (1221))<BR>(NEGRON, DENNISE (8553))<BR>(PEARTREE, YVONNE (3099))<BR>(TRIFUNDIO, NOEL (8381))<BR>(WILSON, ANDREA (8709))<BR>(ZEPHIRIN, EDYNE (5581))Absent on the assessment test.</td></tr><tr><td> 105-topic-7 </td><td>(BENNETT, MILTON (0370))<BR>(FLORES, ROBIN (2237))<BR>(HOWARD, MADGELYN (2756))<BR>(IFTIKHAR, MUHAMMAD (3779))<BR>(NEGRON, DENNISE (8553))Absent on the assessment test.</td></tr><tr><td> 105-topic-8 </td><td>(PEARTREE, YVONNE (3099))Absent on the assessment test.</td></tr><tr><td> 105-topic-9 </td><td>(BENNETT, MILTON (0370))<BR>(HOLDER, TIONNE (7358))<BR>(HOWARD, MADGELYN (2756))<BR>(IFTIKHAR, MUHAMMAD (3779))<BR>(MAHONEY, ARIEL (1221))<BR>(ZEPHIRIN, EDYNE (5581))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
