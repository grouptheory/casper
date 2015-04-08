#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>16</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>ARONOFF_ROBERTA</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1179</td><td>CONDE, JASMINE</td><td>104-topic-2<BR>104-topic-4</td></tr><tr><td>8958</td><td>DISCALA, MICHAEL</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5</td></tr><tr><td>0415</td><td>ERATH, LAUREN</td><td>104-topic-4</td></tr><tr><td>2622</td><td>ESTEVEZ, FENDY</td><td>104-topic-3</td></tr><tr><td>6598</td><td>INGRAM, KYLI</td><td>Passed everything.</td></tr><tr><td>9864</td><td>LHERISON, SHERLEY</td><td>Passed everything.</td></tr><tr><td>1047</td><td>LIEW, SONYA</td><td>Passed everything.</td></tr><tr><td>2742</td><td>LOPEZ, MELISSA</td><td>Passed everything.</td></tr><tr><td>6233</td><td>MONTENEGRO, KATHERINE</td><td>Passed everything.</td></tr><tr><td>6789</td><td>NAWAZ, SYLVIA</td><td>Passed everything.</td></tr><tr><td>1669</td><td>RIVERA, XYLINA</td><td>Passed everything.</td></tr><tr><td>3380</td><td>RONDA, MICHAEL</td><td>Passed everything.</td></tr><tr><td>7720</td><td>SIENICKA, SYLWIA</td><td>Passed everything.</td></tr><tr><td>9157</td><td>TAM, SHUSHAWNA</td><td>Passed everything.</td></tr><tr><td>7233</td><td>TANKSLEY, CARISMA</td><td>Passed everything.</td></tr><tr><td>1390</td><td>VALDES, KRISTINA</td><td>Passed everything.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(DISCALA, MICHAEL (8958))</td></tr><tr><td> 104-topic-2 </td><td>(CONDE, JASMINE (1179))<BR>(DISCALA, MICHAEL (8958))</td></tr><tr><td> 104-topic-3 </td><td>(DISCALA, MICHAEL (8958))<BR>(ESTEVEZ, FENDY (2622))</td></tr><tr><td> 104-topic-4 </td><td>(CONDE, JASMINE (1179))<BR>(DISCALA, MICHAEL (8958))<BR>(ERATH, LAUREN (0415))</td></tr><tr><td> 104-topic-5 </td><td>(DISCALA, MICHAEL (8958))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
