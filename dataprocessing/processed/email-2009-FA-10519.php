#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>19</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>TAMARI_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3334</td><td>CALDERON, JEFFREY</td><td>105-topic-2<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>7816</td><td>CIFUENTES, MARIA</td><td>105-topic-7</td></tr><tr><td>2824</td><td>CORONEL, JOSE</td><td>Absent on the assessment test.</td></tr><tr><td>3487</td><td>CORTES, SHANNA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>1047</td><td>DOMPOR, KHRISTINE</td><td>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>9491</td><td>DOWLING, CHRISTOPHER</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>4638</td><td>FARIA, JONATHAN</td><td>105-topic-6</td></tr><tr><td>9311</td><td>GOMES, ACHILLES</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-7</td></tr><tr><td>1686</td><td>GRULLON, ROYSAN</td><td>105-topic-4<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>0757</td><td>HAZELL, TONYA</td><td>105-topic-1<BR>105-topic-2<BR>105-topic-4<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>7117</td><td>HERRERA, FAVIOLA</td><td>105-topic-1<BR>105-topic-10<BR>105-topic-2<BR>105-topic-3<BR>105-topic-4<BR>105-topic-6</td></tr><tr><td>6755</td><td>JUCA, AMANDA</td><td>105-topic-1<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>0839</td><td>MARTIN, ROBERT</td><td>105-topic-6<BR>105-topic-7</td></tr><tr><td>2579</td><td>MCCOMBS, TYTIANA</td><td>Absent on the assessment test.</td></tr><tr><td>4011</td><td>MILROM, ABRAHAM</td><td>105-topic-1<BR>105-topic-4<BR>105-topic-7</td></tr><tr><td>5168</td><td>MOTYKA, IWONA</td><td>105-topic-10<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>6665</td><td>PAULINO, RUBEN</td><td>105-topic-4<BR>105-topic-7</td></tr><tr><td>9031</td><td>RAMSARAN, SABITA</td><td>105-topic-6<BR>105-topic-7</td></tr><tr><td>8247</td><td>SANCHEZ, LORENA</td><td>105-topic-6<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>2212</td><td>SEBTI, MICA</td><td>105-topic-6<BR>105-topic-7</td></tr><tr><td>2260</td><td>SINGH, BALJEET</td><td>105-topic-4<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>3861</td><td>SMITH, BRYANT</td><td>105-topic-10<BR>105-topic-4<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>2335</td><td>SMITH, TASHA</td><td>105-topic-6</td></tr><tr><td>0657</td><td>STUART, SHERROD</td><td>105-topic-3<BR>105-topic-4<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>8728</td><td>THOMAS, TREVOR</td><td>105-topic-6<BR>105-topic-7</td></tr><tr><td>6624</td><td>TURTURRO, JESSICA</td><td>105-topic-10<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>0402</td><td>URENA, RICARDO</td><td>105-topic-10<BR>105-topic-4<BR>105-topic-6<BR>105-topic-7</td></tr><tr><td>7366</td><td>VALENCIA, KEVIN</td><td>105-topic-2<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6<BR>105-topic-7<BR>105-topic-8</td></tr><tr><td>2441</td><td>WALINSKI, SHERRY</td><td>105-topic-10<BR>105-topic-7<BR>105-topic-9</td></tr><tr><td>1934</td><td>WILLIAMS, GABRIELLA</td><td>105-topic-1<BR>105-topic-4<BR>105-topic-5<BR>105-topic-6</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-1 </td><td>(CORTES, SHANNA (3487))<BR>(DOWLING, CHRISTOPHER (9491))<BR>(GOMES, ACHILLES (9311))<BR>(HAZELL, TONYA (0757))<BR>(HERRERA, FAVIOLA (7117))<BR>(JUCA, AMANDA (6755))<BR>(MILROM, ABRAHAM (4011))<BR>(WILLIAMS, GABRIELLA (1934))</td></tr><tr><td> 105-topic-10 </td><td>(CORTES, SHANNA (3487))<BR>(GOMES, ACHILLES (9311))<BR>(HERRERA, FAVIOLA (7117))<BR>(MOTYKA, IWONA (5168))<BR>(SMITH, BRYANT (3861))<BR>(TURTURRO, JESSICA (6624))<BR>(URENA, RICARDO (0402))<BR>(WALINSKI, SHERRY (2441))</td></tr><tr><td> 105-topic-2 </td><td>(CALDERON, JEFFREY (3334))<BR>(CORTES, SHANNA (3487))<BR>(DOMPOR, KHRISTINE (1047))<BR>(DOWLING, CHRISTOPHER (9491))<BR>(HAZELL, TONYA (0757))<BR>(HERRERA, FAVIOLA (7117))<BR>(VALENCIA, KEVIN (7366))</td></tr><tr><td> 105-topic-3 </td><td>(DOMPOR, KHRISTINE (1047))<BR>(HERRERA, FAVIOLA (7117))<BR>(STUART, SHERROD (0657))</td></tr><tr><td> 105-topic-4 </td><td>(CORTES, SHANNA (3487))<BR>(DOMPOR, KHRISTINE (1047))<BR>(GRULLON, ROYSAN (1686))<BR>(HAZELL, TONYA (0757))<BR>(HERRERA, FAVIOLA (7117))<BR>(MILROM, ABRAHAM (4011))<BR>(PAULINO, RUBEN (6665))<BR>(SINGH, BALJEET (2260))<BR>(SMITH, BRYANT (3861))<BR>(STUART, SHERROD (0657))<BR>(TURTURRO, JESSICA (6624))<BR>(URENA, RICARDO (0402))<BR>(VALENCIA, KEVIN (7366))<BR>(WILLIAMS, GABRIELLA (1934))</td></tr><tr><td> 105-topic-5 </td><td>(CORTES, SHANNA (3487))<BR>(TURTURRO, JESSICA (6624))<BR>(VALENCIA, KEVIN (7366))<BR>(WILLIAMS, GABRIELLA (1934))</td></tr><tr><td> 105-topic-6 </td><td>(CALDERON, JEFFREY (3334))<BR>(CORTES, SHANNA (3487))<BR>(DOWLING, CHRISTOPHER (9491))<BR>(FARIA, JONATHAN (4638))<BR>(GRULLON, ROYSAN (1686))<BR>(HERRERA, FAVIOLA (7117))<BR>(JUCA, AMANDA (6755))<BR>(MARTIN, ROBERT (0839))<BR>(MOTYKA, IWONA (5168))<BR>(RAMSARAN, SABITA (9031))<BR>(SANCHEZ, LORENA (8247))<BR>(SEBTI, MICA (2212))<BR>(SINGH, BALJEET (2260))<BR>(SMITH, TASHA (2335))<BR>(STUART, SHERROD (0657))<BR>(THOMAS, TREVOR (8728))<BR>(TURTURRO, JESSICA (6624))<BR>(URENA, RICARDO (0402))<BR>(VALENCIA, KEVIN (7366))<BR>(WILLIAMS, GABRIELLA (1934))</td></tr><tr><td> 105-topic-7 </td><td>(CALDERON, JEFFREY (3334))<BR>(CIFUENTES, MARIA (7816))<BR>(CORTES, SHANNA (3487))<BR>(DOMPOR, KHRISTINE (1047))<BR>(DOWLING, CHRISTOPHER (9491))<BR>(GOMES, ACHILLES (9311))<BR>(GRULLON, ROYSAN (1686))<BR>(HAZELL, TONYA (0757))<BR>(JUCA, AMANDA (6755))<BR>(MARTIN, ROBERT (0839))<BR>(MILROM, ABRAHAM (4011))<BR>(MOTYKA, IWONA (5168))<BR>(PAULINO, RUBEN (6665))<BR>(RAMSARAN, SABITA (9031))<BR>(SANCHEZ, LORENA (8247))<BR>(SEBTI, MICA (2212))<BR>(SINGH, BALJEET (2260))<BR>(SMITH, BRYANT (3861))<BR>(STUART, SHERROD (0657))<BR>(THOMAS, TREVOR (8728))<BR>(TURTURRO, JESSICA (6624))<BR>(URENA, RICARDO (0402))<BR>(VALENCIA, KEVIN (7366))<BR>(WALINSKI, SHERRY (2441))</td></tr><tr><td> 105-topic-8 </td><td>(CORTES, SHANNA (3487))<BR>(DOMPOR, KHRISTINE (1047))<BR>(DOWLING, CHRISTOPHER (9491))<BR>(HAZELL, TONYA (0757))<BR>(SANCHEZ, LORENA (8247))<BR>(VALENCIA, KEVIN (7366))</td></tr><tr><td> 105-topic-9 </td><td>(SMITH, BRYANT (3861))<BR>(WALINSKI, SHERRY (2441))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
