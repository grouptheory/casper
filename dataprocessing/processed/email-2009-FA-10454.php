#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>54</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>STAMBAUGH_T</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9433</td><td>BAEZ, GRACE</td><td>Absent on the assessment test.</td></tr><tr><td>2310</td><td>CAMPOS, JONATHAN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>3561</td><td>D'UGO, NICOLETTA</td><td>Absent on the assessment test.</td></tr><tr><td>0333</td><td>DECOPAIN, MARK</td><td>104-topic-1<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>0057</td><td>DEROSA, CHRISTA</td><td>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>4666</td><td>GALEA, WHITNEY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>7029</td><td>GUZMAN, MARC</td><td>104-topic-10<BR>104-topic-7</td></tr><tr><td>1275</td><td>KABIR, SHAHREAR</td><td>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>2784</td><td>KEITA, FATOUMATA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>6426</td><td>LAMONT, CHINA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>9676</td><td>LIANG, YI</td><td>Absent on the assessment test.</td></tr><tr><td>5840</td><td>MAHRAOUI, MEHDI</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6</td></tr><tr><td>1503</td><td>MATEO, MARLYN</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>1732</td><td>MCCLOUD, JAMAL</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>5078</td><td>MORALES, NICHOLAS</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-5<BR>104-topic-6</td></tr><tr><td>3117</td><td>PAPATHANASIOU, DIMITRA</td><td>104-topic-1<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>4235</td><td>PRASEK, FRANK</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>1464</td><td>RIVERA, AMANDA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>3077</td><td>RODRIGUEZ, STEPHANIE</td><td>104-topic-1<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-8</td></tr><tr><td>4138</td><td>SAMLALL, UMAYSHA</td><td>104-topic-1<BR>104-topic-2<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>6475</td><td>SANDY, ISACHA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>9301</td><td>SERRANO, VANESSA</td><td>Absent on the assessment test.</td></tr><tr><td>7906</td><td>STERLING, LUTICIA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-5<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>8669</td><td>TORRES, MELLISA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>3841</td><td>UGBOMAH, JENAYE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>8742</td><td>WALZ, STEPHEN</td><td>104-topic-10<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>6862</td><td>WILLIAMS, ANITA</td><td>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(CAMPOS, JONATHAN (2310))<BR>(DECOPAIN, MARK (0333))<BR>(GALEA, WHITNEY (4666))<BR>(KEITA, FATOUMATA (2784))<BR>(LAMONT, CHINA (6426))<BR>(MAHRAOUI, MEHDI (5840))<BR>(MATEO, MARLYN (1503))<BR>(MCCLOUD, JAMAL (1732))<BR>(MORALES, NICHOLAS (5078))<BR>(PAPATHANASIOU, DIMITRA (3117))<BR>(PRASEK, FRANK (4235))<BR>(RIVERA, AMANDA (1464))<BR>(RODRIGUEZ, STEPHANIE (3077))<BR>(SAMLALL, UMAYSHA (4138))<BR>(SANDY, ISACHA (6475))<BR>(STERLING, LUTICIA (7906))<BR>(TORRES, MELLISA (8669))<BR>(UGBOMAH, JENAYE (3841))</td></tr><tr><td> 104-topic-10 </td><td>(CAMPOS, JONATHAN (2310))<BR>(DEROSA, CHRISTA (0057))<BR>(GALEA, WHITNEY (4666))<BR>(GUZMAN, MARC (7029))<BR>(KABIR, SHAHREAR (1275))<BR>(KEITA, FATOUMATA (2784))<BR>(LAMONT, CHINA (6426))<BR>(MAHRAOUI, MEHDI (5840))<BR>(MATEO, MARLYN (1503))<BR>(MCCLOUD, JAMAL (1732))<BR>(MORALES, NICHOLAS (5078))<BR>(PRASEK, FRANK (4235))<BR>(RIVERA, AMANDA (1464))<BR>(SANDY, ISACHA (6475))<BR>(STERLING, LUTICIA (7906))<BR>(TORRES, MELLISA (8669))<BR>(UGBOMAH, JENAYE (3841))<BR>(WALZ, STEPHEN (8742))<BR>(WILLIAMS, ANITA (6862))</td></tr><tr><td> 104-topic-2 </td><td>(LAMONT, CHINA (6426))<BR>(MAHRAOUI, MEHDI (5840))<BR>(MATEO, MARLYN (1503))<BR>(MORALES, NICHOLAS (5078))<BR>(RIVERA, AMANDA (1464))<BR>(SAMLALL, UMAYSHA (4138))<BR>(SANDY, ISACHA (6475))<BR>(STERLING, LUTICIA (7906))</td></tr><tr><td> 104-topic-3 </td><td>(CAMPOS, JONATHAN (2310))<BR>(DECOPAIN, MARK (0333))<BR>(DEROSA, CHRISTA (0057))<BR>(LAMONT, CHINA (6426))<BR>(MATEO, MARLYN (1503))<BR>(MORALES, NICHOLAS (5078))<BR>(PAPATHANASIOU, DIMITRA (3117))<BR>(RIVERA, AMANDA (1464))<BR>(RODRIGUEZ, STEPHANIE (3077))<BR>(SANDY, ISACHA (6475))<BR>(TORRES, MELLISA (8669))</td></tr><tr><td> 104-topic-4 </td><td>(DECOPAIN, MARK (0333))<BR>(DEROSA, CHRISTA (0057))<BR>(KABIR, SHAHREAR (1275))<BR>(KEITA, FATOUMATA (2784))<BR>(LAMONT, CHINA (6426))<BR>(MAHRAOUI, MEHDI (5840))<BR>(MATEO, MARLYN (1503))<BR>(MCCLOUD, JAMAL (1732))<BR>(PAPATHANASIOU, DIMITRA (3117))<BR>(RIVERA, AMANDA (1464))<BR>(RODRIGUEZ, STEPHANIE (3077))<BR>(SANDY, ISACHA (6475))<BR>(TORRES, MELLISA (8669))<BR>(UGBOMAH, JENAYE (3841))</td></tr><tr><td> 104-topic-5 </td><td>(DECOPAIN, MARK (0333))<BR>(DEROSA, CHRISTA (0057))<BR>(GALEA, WHITNEY (4666))<BR>(KABIR, SHAHREAR (1275))<BR>(KEITA, FATOUMATA (2784))<BR>(LAMONT, CHINA (6426))<BR>(MAHRAOUI, MEHDI (5840))<BR>(MATEO, MARLYN (1503))<BR>(MCCLOUD, JAMAL (1732))<BR>(MORALES, NICHOLAS (5078))<BR>(PAPATHANASIOU, DIMITRA (3117))<BR>(PRASEK, FRANK (4235))<BR>(RIVERA, AMANDA (1464))<BR>(RODRIGUEZ, STEPHANIE (3077))<BR>(SAMLALL, UMAYSHA (4138))<BR>(SANDY, ISACHA (6475))<BR>(STERLING, LUTICIA (7906))<BR>(TORRES, MELLISA (8669))<BR>(UGBOMAH, JENAYE (3841))<BR>(WILLIAMS, ANITA (6862))</td></tr><tr><td> 104-topic-6 </td><td>(DECOPAIN, MARK (0333))<BR>(DEROSA, CHRISTA (0057))<BR>(GALEA, WHITNEY (4666))<BR>(KABIR, SHAHREAR (1275))<BR>(KEITA, FATOUMATA (2784))<BR>(LAMONT, CHINA (6426))<BR>(MAHRAOUI, MEHDI (5840))<BR>(MATEO, MARLYN (1503))<BR>(MCCLOUD, JAMAL (1732))<BR>(MORALES, NICHOLAS (5078))<BR>(PAPATHANASIOU, DIMITRA (3117))<BR>(PRASEK, FRANK (4235))<BR>(RIVERA, AMANDA (1464))<BR>(RODRIGUEZ, STEPHANIE (3077))<BR>(SAMLALL, UMAYSHA (4138))<BR>(SANDY, ISACHA (6475))<BR>(TORRES, MELLISA (8669))<BR>(UGBOMAH, JENAYE (3841))<BR>(WALZ, STEPHEN (8742))<BR>(WILLIAMS, ANITA (6862))</td></tr><tr><td> 104-topic-7 </td><td>(CAMPOS, JONATHAN (2310))<BR>(DECOPAIN, MARK (0333))<BR>(DEROSA, CHRISTA (0057))<BR>(GALEA, WHITNEY (4666))<BR>(GUZMAN, MARC (7029))<BR>(KABIR, SHAHREAR (1275))<BR>(KEITA, FATOUMATA (2784))<BR>(LAMONT, CHINA (6426))<BR>(MATEO, MARLYN (1503))<BR>(MCCLOUD, JAMAL (1732))<BR>(PAPATHANASIOU, DIMITRA (3117))<BR>(PRASEK, FRANK (4235))<BR>(RIVERA, AMANDA (1464))<BR>(SAMLALL, UMAYSHA (4138))<BR>(SANDY, ISACHA (6475))<BR>(STERLING, LUTICIA (7906))<BR>(TORRES, MELLISA (8669))<BR>(UGBOMAH, JENAYE (3841))<BR>(WALZ, STEPHEN (8742))<BR>(WILLIAMS, ANITA (6862))</td></tr><tr><td> 104-topic-8 </td><td>(DECOPAIN, MARK (0333))<BR>(LAMONT, CHINA (6426))<BR>(RIVERA, AMANDA (1464))<BR>(RODRIGUEZ, STEPHANIE (3077))<BR>(SAMLALL, UMAYSHA (4138))<BR>(SANDY, ISACHA (6475))<BR>(STERLING, LUTICIA (7906))<BR>(UGBOMAH, JENAYE (3841))<BR>(WILLIAMS, ANITA (6862))</td></tr><tr><td> 104-topic-9 </td><td>(CAMPOS, JONATHAN (2310))<BR>(DEROSA, CHRISTA (0057))<BR>(MATEO, MARLYN (1503))<BR>(MCCLOUD, JAMAL (1732))<BR>(SANDY, ISACHA (6475))<BR>(TORRES, MELLISA (8669))<BR>(UGBOMAH, JENAYE (3841))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
