#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 141 - PRE-CALCULUS (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>141</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>TREMBINSKA_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0852</td><td>ALMONTE, GLORIMER</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>3487</td><td>CORTES, SHANNA</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>9676</td><td>FIDO, JOANNA</td><td>141-topic-02<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>1368</td><td>GOVIA, HELAINA</td><td>141-topic-01<BR>141-topic-03<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>3821</td><td>GRILLO, ANDREW</td><td>Passed everything.</td></tr><tr><td>3304</td><td>HLAING, TIN</td><td>141-topic-01<BR>141-topic-03<BR>141-topic-05<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>0850</td><td>KLEYN, RICHARD</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>8390</td><td>KNEZEVIC, VALENTINA</td><td>Passed everything.</td></tr><tr><td>1686</td><td>KOPEC, JUSTYNA</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>7066</td><td>LASPINA, NATALIA</td><td>141-topic-01<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>0939</td><td>LEVINE, QIANA</td><td>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-10</td></tr><tr><td>2717</td><td>MALDONADO, KRYSTAL</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>0212</td><td>MCKEITH, BRITTANY</td><td>141-topic-02<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>3302</td><td>MERCED, DANCHESKA</td><td>141-topic-02<BR>141-topic-05<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>7542</td><td>MOHAMED, KELVIN</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>8636</td><td>MUN, WUNG</td><td>141-topic-01<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>2217</td><td>NAVARRETE, JENNICA</td><td>141-topic-05<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>8662</td><td>O'PRAY, SARA</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>2753</td><td>OLIVAREZ, MADELYN</td><td>141-topic-01<BR>141-topic-03<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08</td></tr><tr><td>0945</td><td>PANEK, MARTIN</td><td>141-topic-01<BR>141-topic-04<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>4313</td><td>RODRIGUEZ, MICHELLE</td><td>141-topic-02<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>9160</td><td>ROLAND, WILLIAM</td><td>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>4614</td><td>ROZON, LIZAME</td><td>Passed everything.</td></tr><tr><td>7052</td><td>SANTIAGO, CHRISTIAN</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>4743</td><td>SULLIVAN, BRIANNA</td><td>141-topic-05<BR>141-topic-08<BR>141-topic-09</td></tr><tr><td>2429</td><td>TABARY, MELLODY</td><td>141-topic-02<BR>141-topic-04<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>3330</td><td>TANG, TSZ_KWAN_AMY</td><td>141-topic-04<BR>141-topic-06<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>9432</td><td>VALENTIN, DEVON</td><td>141-topic-01<BR>141-topic-02<BR>141-topic-03<BR>141-topic-04<BR>141-topic-05<BR>141-topic-06<BR>141-topic-07<BR>141-topic-08<BR>141-topic-09<BR>141-topic-10</td></tr><tr><td>9561</td><td>WILLIAMS, JASON</td><td>Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 141-topic-01 </td><td>(ALMONTE, GLORIMER (0852))<BR>(CORTES, SHANNA (3487))<BR>(GOVIA, HELAINA (1368))<BR>(HLAING, TIN (3304))<BR>(KLEYN, RICHARD (0850))<BR>(KOPEC, JUSTYNA (1686))<BR>(LASPINA, NATALIA (7066))<BR>(MALDONADO, KRYSTAL (2717))<BR>(MOHAMED, KELVIN (7542))<BR>(MUN, WUNG (8636))<BR>(O'PRAY, SARA (8662))<BR>(OLIVAREZ, MADELYN (2753))<BR>(PANEK, MARTIN (0945))<BR>(SANTIAGO, CHRISTIAN (7052))<BR>(VALENTIN, DEVON (9432))Absent on the assessment test.</td></tr><tr><td> 141-topic-02 </td><td>(ALMONTE, GLORIMER (0852))<BR>(CORTES, SHANNA (3487))<BR>(FIDO, JOANNA (9676))<BR>(KLEYN, RICHARD (0850))<BR>(KOPEC, JUSTYNA (1686))<BR>(LEVINE, QIANA (0939))<BR>(MALDONADO, KRYSTAL (2717))<BR>(MCKEITH, BRITTANY (0212))<BR>(MERCED, DANCHESKA (3302))<BR>(MOHAMED, KELVIN (7542))<BR>(O'PRAY, SARA (8662))<BR>(RODRIGUEZ, MICHELLE (4313))<BR>(SANTIAGO, CHRISTIAN (7052))<BR>(TABARY, MELLODY (2429))<BR>(VALENTIN, DEVON (9432))Absent on the assessment test.</td></tr><tr><td> 141-topic-03 </td><td>(FIDO, JOANNA (9676))<BR>(GOVIA, HELAINA (1368))<BR>(HLAING, TIN (3304))<BR>(LASPINA, NATALIA (7066))<BR>(OLIVAREZ, MADELYN (2753))<BR>(RODRIGUEZ, MICHELLE (4313))<BR>(VALENTIN, DEVON (9432))Absent on the assessment test.</td></tr><tr><td> 141-topic-04 </td><td>(ALMONTE, GLORIMER (0852))<BR>(CORTES, SHANNA (3487))<BR>(FIDO, JOANNA (9676))<BR>(KLEYN, RICHARD (0850))<BR>(LASPINA, NATALIA (7066))<BR>(LEVINE, QIANA (0939))<BR>(MOHAMED, KELVIN (7542))<BR>(PANEK, MARTIN (0945))<BR>(RODRIGUEZ, MICHELLE (4313))<BR>(ROLAND, WILLIAM (9160))<BR>(SANTIAGO, CHRISTIAN (7052))<BR>(TABARY, MELLODY (2429))<BR>(TANG, TSZ_KWAN_AMY (3330))<BR>(VALENTIN, DEVON (9432))Absent on the assessment test.</td></tr><tr><td> 141-topic-05 </td><td>(ALMONTE, GLORIMER (0852))<BR>(CORTES, SHANNA (3487))<BR>(FIDO, JOANNA (9676))<BR>(GOVIA, HELAINA (1368))<BR>(HLAING, TIN (3304))<BR>(KLEYN, RICHARD (0850))<BR>(KOPEC, JUSTYNA (1686))<BR>(LASPINA, NATALIA (7066))<BR>(LEVINE, QIANA (0939))<BR>(MERCED, DANCHESKA (3302))<BR>(MOHAMED, KELVIN (7542))<BR>(NAVARRETE, JENNICA (2217))<BR>(RODRIGUEZ, MICHELLE (4313))<BR>(ROLAND, WILLIAM (9160))<BR>(SANTIAGO, CHRISTIAN (7052))<BR>(SULLIVAN, BRIANNA (4743))<BR>(VALENTIN, DEVON (9432))Absent on the assessment test.</td></tr><tr><td> 141-topic-06 </td><td>(ALMONTE, GLORIMER (0852))<BR>(CORTES, SHANNA (3487))<BR>(FIDO, JOANNA (9676))<BR>(GOVIA, HELAINA (1368))<BR>(HLAING, TIN (3304))<BR>(KLEYN, RICHARD (0850))<BR>(KOPEC, JUSTYNA (1686))<BR>(LASPINA, NATALIA (7066))<BR>(LEVINE, QIANA (0939))<BR>(MALDONADO, KRYSTAL (2717))<BR>(MCKEITH, BRITTANY (0212))<BR>(MOHAMED, KELVIN (7542))<BR>(NAVARRETE, JENNICA (2217))<BR>(O'PRAY, SARA (8662))<BR>(OLIVAREZ, MADELYN (2753))<BR>(PANEK, MARTIN (0945))<BR>(RODRIGUEZ, MICHELLE (4313))<BR>(ROLAND, WILLIAM (9160))<BR>(SANTIAGO, CHRISTIAN (7052))<BR>(TABARY, MELLODY (2429))<BR>(TANG, TSZ_KWAN_AMY (3330))<BR>(VALENTIN, DEVON (9432))Absent on the assessment test.</td></tr><tr><td> 141-topic-07 </td><td>(ALMONTE, GLORIMER (0852))<BR>(CORTES, SHANNA (3487))<BR>(FIDO, JOANNA (9676))<BR>(GOVIA, HELAINA (1368))<BR>(KLEYN, RICHARD (0850))<BR>(KOPEC, JUSTYNA (1686))<BR>(LASPINA, NATALIA (7066))<BR>(LEVINE, QIANA (0939))<BR>(MALDONADO, KRYSTAL (2717))<BR>(MCKEITH, BRITTANY (0212))<BR>(MERCED, DANCHESKA (3302))<BR>(MOHAMED, KELVIN (7542))<BR>(OLIVAREZ, MADELYN (2753))<BR>(PANEK, MARTIN (0945))<BR>(RODRIGUEZ, MICHELLE (4313))<BR>(ROLAND, WILLIAM (9160))<BR>(SANTIAGO, CHRISTIAN (7052))<BR>(TABARY, MELLODY (2429))<BR>(VALENTIN, DEVON (9432))Absent on the assessment test.</td></tr><tr><td> 141-topic-08 </td><td>(ALMONTE, GLORIMER (0852))<BR>(CORTES, SHANNA (3487))<BR>(FIDO, JOANNA (9676))<BR>(GOVIA, HELAINA (1368))<BR>(HLAING, TIN (3304))<BR>(KLEYN, RICHARD (0850))<BR>(KOPEC, JUSTYNA (1686))<BR>(LASPINA, NATALIA (7066))<BR>(LEVINE, QIANA (0939))<BR>(MALDONADO, KRYSTAL (2717))<BR>(MCKEITH, BRITTANY (0212))<BR>(MERCED, DANCHESKA (3302))<BR>(MOHAMED, KELVIN (7542))<BR>(NAVARRETE, JENNICA (2217))<BR>(O'PRAY, SARA (8662))<BR>(OLIVAREZ, MADELYN (2753))<BR>(PANEK, MARTIN (0945))<BR>(RODRIGUEZ, MICHELLE (4313))<BR>(ROLAND, WILLIAM (9160))<BR>(SANTIAGO, CHRISTIAN (7052))<BR>(SULLIVAN, BRIANNA (4743))<BR>(TABARY, MELLODY (2429))<BR>(TANG, TSZ_KWAN_AMY (3330))<BR>(VALENTIN, DEVON (9432))Absent on the assessment test.</td></tr><tr><td> 141-topic-09 </td><td>(ALMONTE, GLORIMER (0852))<BR>(CORTES, SHANNA (3487))<BR>(FIDO, JOANNA (9676))<BR>(GOVIA, HELAINA (1368))<BR>(HLAING, TIN (3304))<BR>(KLEYN, RICHARD (0850))<BR>(KOPEC, JUSTYNA (1686))<BR>(LASPINA, NATALIA (7066))<BR>(MALDONADO, KRYSTAL (2717))<BR>(MCKEITH, BRITTANY (0212))<BR>(MERCED, DANCHESKA (3302))<BR>(MOHAMED, KELVIN (7542))<BR>(MUN, WUNG (8636))<BR>(NAVARRETE, JENNICA (2217))<BR>(O'PRAY, SARA (8662))<BR>(PANEK, MARTIN (0945))<BR>(RODRIGUEZ, MICHELLE (4313))<BR>(ROLAND, WILLIAM (9160))<BR>(SANTIAGO, CHRISTIAN (7052))<BR>(SULLIVAN, BRIANNA (4743))<BR>(TABARY, MELLODY (2429))<BR>(TANG, TSZ_KWAN_AMY (3330))<BR>(VALENTIN, DEVON (9432))Absent on the assessment test.</td></tr><tr><td> 141-topic-10 </td><td>(ALMONTE, GLORIMER (0852))<BR>(CORTES, SHANNA (3487))<BR>(FIDO, JOANNA (9676))<BR>(GOVIA, HELAINA (1368))<BR>(HLAING, TIN (3304))<BR>(KLEYN, RICHARD (0850))<BR>(LASPINA, NATALIA (7066))<BR>(LEVINE, QIANA (0939))<BR>(MALDONADO, KRYSTAL (2717))<BR>(MCKEITH, BRITTANY (0212))<BR>(MERCED, DANCHESKA (3302))<BR>(MOHAMED, KELVIN (7542))<BR>(MUN, WUNG (8636))<BR>(NAVARRETE, JENNICA (2217))<BR>(O'PRAY, SARA (8662))<BR>(RODRIGUEZ, MICHELLE (4313))<BR>(ROLAND, WILLIAM (9160))<BR>(SANTIAGO, CHRISTIAN (7052))<BR>(TABARY, MELLODY (2429))<BR>(TANG, TSZ_KWAN_AMY (3330))<BR>(VALENTIN, DEVON (9432))Absent on the assessment test.</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>