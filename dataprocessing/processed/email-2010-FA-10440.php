#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>40</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>NARTEY_L</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9728</td><td>AHMED, FAROOQ</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>3249</td><td>ALBA, MELISSA</td><td>104-topic-05</td></tr><tr><td>3525</td><td>BASSIT, JESSICA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>1843</td><td>CABRERA, CANDY</td><td>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>8567</td><td>CAMERINO, MATTHEW</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5182</td><td>CAMERON, SHENEKA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1817</td><td>CASTRO, AMANDA</td><td>Passed everything.</td></tr><tr><td>8454</td><td>CHUNG, DERRICK</td><td>Passed everything.</td></tr><tr><td>5001</td><td>DIOP, ALEN</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9430</td><td>DOLAN, DEMI</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4824</td><td>LAVAYEN, MARTHA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>7452</td><td>LEE, BO</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1306</td><td>MATEO, AMANDA</td><td>Passed everything.</td></tr><tr><td>4245</td><td>MEDINA, MELBA</td><td>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2832</td><td>PARACHE, KRYSTAL</td><td>Passed everything.</td></tr><tr><td>1959</td><td>RANIERI, PETER</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9018</td><td>REYNOSO, STEPHANIE</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1896</td><td>RIVERA, KAESHAUNA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>2469</td><td>RODRIGUEZ, MATTHEW</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07</td></tr><tr><td>2200</td><td>ROMERO, DONNA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>0991</td><td>SANCHEZ, SABRINA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5183</td><td>SEGNAN, MICHAEL</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>5912</td><td>TATIS, NAOMI</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>4938</td><td>TAVAREZ, DENISE</td><td>Passed everything.</td></tr><tr><td>0765</td><td>VELASQUEZ, ALEIDA</td><td>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>7982</td><td>WALKER, MARTHA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-07</td></tr><tr><td>1367</td><td>WILLIAMS, BRADLEY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>3403</td><td>YSIT, JESU</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(AHMED, FAROOQ (9728))<BR>(BASSIT, JESSICA (3525))<BR>(CAMERINO, MATTHEW (8567))<BR>(CAMERON, SHENEKA (5182))<BR>(DIOP, ALEN (5001))<BR>(DOLAN, DEMI (9430))<BR>(LAVAYEN, MARTHA (4824))<BR>(LEE, BO (7452))<BR>(RANIERI, PETER (1959))<BR>(REYNOSO, STEPHANIE (9018))<BR>(RIVERA, KAESHAUNA (1896))<BR>(RODRIGUEZ, MATTHEW (2469))<BR>(ROMERO, DONNA (2200))<BR>(SANCHEZ, SABRINA (0991))<BR>(SEGNAN, MICHAEL (5183))<BR>(TATIS, NAOMI (5912))<BR>(WALKER, MARTHA (7982))<BR>(WILLIAMS, BRADLEY (1367))<BR>(YSIT, JESU (3403))</td></tr><tr><td> 104-topic-02 </td><td>(AHMED, FAROOQ (9728))<BR>(BASSIT, JESSICA (3525))<BR>(CAMERINO, MATTHEW (8567))<BR>(CAMERON, SHENEKA (5182))<BR>(DIOP, ALEN (5001))<BR>(DOLAN, DEMI (9430))<BR>(LAVAYEN, MARTHA (4824))<BR>(LEE, BO (7452))<BR>(MEDINA, MELBA (4245))<BR>(RANIERI, PETER (1959))<BR>(RIVERA, KAESHAUNA (1896))<BR>(RODRIGUEZ, MATTHEW (2469))<BR>(ROMERO, DONNA (2200))<BR>(SANCHEZ, SABRINA (0991))<BR>(TATIS, NAOMI (5912))<BR>(WILLIAMS, BRADLEY (1367))<BR>(YSIT, JESU (3403))</td></tr><tr><td> 104-topic-03 </td><td>(BASSIT, JESSICA (3525))<BR>(CAMERINO, MATTHEW (8567))<BR>(CAMERON, SHENEKA (5182))<BR>(DIOP, ALEN (5001))<BR>(LAVAYEN, MARTHA (4824))<BR>(LEE, BO (7452))<BR>(RANIERI, PETER (1959))<BR>(REYNOSO, STEPHANIE (9018))<BR>(RIVERA, KAESHAUNA (1896))<BR>(ROMERO, DONNA (2200))<BR>(SANCHEZ, SABRINA (0991))<BR>(TATIS, NAOMI (5912))<BR>(VELASQUEZ, ALEIDA (0765))<BR>(WALKER, MARTHA (7982))<BR>(YSIT, JESU (3403))</td></tr><tr><td> 104-topic-04 </td><td>(BASSIT, JESSICA (3525))<BR>(CAMERINO, MATTHEW (8567))<BR>(DIOP, ALEN (5001))<BR>(LAVAYEN, MARTHA (4824))<BR>(RANIERI, PETER (1959))<BR>(REYNOSO, STEPHANIE (9018))<BR>(RIVERA, KAESHAUNA (1896))<BR>(ROMERO, DONNA (2200))<BR>(TATIS, NAOMI (5912))<BR>(VELASQUEZ, ALEIDA (0765))<BR>(WILLIAMS, BRADLEY (1367))<BR>(YSIT, JESU (3403))</td></tr><tr><td> 104-topic-05 </td><td>(AHMED, FAROOQ (9728))<BR>(ALBA, MELISSA (3249))<BR>(BASSIT, JESSICA (3525))<BR>(CAMERINO, MATTHEW (8567))<BR>(CAMERON, SHENEKA (5182))<BR>(DIOP, ALEN (5001))<BR>(DOLAN, DEMI (9430))<BR>(LAVAYEN, MARTHA (4824))<BR>(LEE, BO (7452))<BR>(MEDINA, MELBA (4245))<BR>(RANIERI, PETER (1959))<BR>(REYNOSO, STEPHANIE (9018))<BR>(RIVERA, KAESHAUNA (1896))<BR>(RODRIGUEZ, MATTHEW (2469))<BR>(ROMERO, DONNA (2200))<BR>(SANCHEZ, SABRINA (0991))<BR>(SEGNAN, MICHAEL (5183))<BR>(TATIS, NAOMI (5912))<BR>(VELASQUEZ, ALEIDA (0765))<BR>(WILLIAMS, BRADLEY (1367))</td></tr><tr><td> 104-topic-06 </td><td>(AHMED, FAROOQ (9728))<BR>(BASSIT, JESSICA (3525))<BR>(CABRERA, CANDY (1843))<BR>(CAMERINO, MATTHEW (8567))<BR>(CAMERON, SHENEKA (5182))<BR>(DIOP, ALEN (5001))<BR>(DOLAN, DEMI (9430))<BR>(LAVAYEN, MARTHA (4824))<BR>(LEE, BO (7452))<BR>(MEDINA, MELBA (4245))<BR>(RANIERI, PETER (1959))<BR>(REYNOSO, STEPHANIE (9018))<BR>(RIVERA, KAESHAUNA (1896))<BR>(RODRIGUEZ, MATTHEW (2469))<BR>(ROMERO, DONNA (2200))<BR>(SANCHEZ, SABRINA (0991))<BR>(SEGNAN, MICHAEL (5183))<BR>(TATIS, NAOMI (5912))<BR>(VELASQUEZ, ALEIDA (0765))<BR>(WILLIAMS, BRADLEY (1367))<BR>(YSIT, JESU (3403))</td></tr><tr><td> 104-topic-07 </td><td>(AHMED, FAROOQ (9728))<BR>(BASSIT, JESSICA (3525))<BR>(CABRERA, CANDY (1843))<BR>(CAMERINO, MATTHEW (8567))<BR>(CAMERON, SHENEKA (5182))<BR>(DIOP, ALEN (5001))<BR>(DOLAN, DEMI (9430))<BR>(LAVAYEN, MARTHA (4824))<BR>(LEE, BO (7452))<BR>(MEDINA, MELBA (4245))<BR>(RANIERI, PETER (1959))<BR>(REYNOSO, STEPHANIE (9018))<BR>(RIVERA, KAESHAUNA (1896))<BR>(RODRIGUEZ, MATTHEW (2469))<BR>(ROMERO, DONNA (2200))<BR>(SANCHEZ, SABRINA (0991))<BR>(SEGNAN, MICHAEL (5183))<BR>(TATIS, NAOMI (5912))<BR>(VELASQUEZ, ALEIDA (0765))<BR>(WALKER, MARTHA (7982))<BR>(WILLIAMS, BRADLEY (1367))<BR>(YSIT, JESU (3403))</td></tr><tr><td> 104-topic-08 </td><td>(AHMED, FAROOQ (9728))<BR>(CABRERA, CANDY (1843))<BR>(DIOP, ALEN (5001))<BR>(DOLAN, DEMI (9430))<BR>(LEE, BO (7452))<BR>(RANIERI, PETER (1959))<BR>(REYNOSO, STEPHANIE (9018))<BR>(RIVERA, KAESHAUNA (1896))<BR>(SANCHEZ, SABRINA (0991))<BR>(VELASQUEZ, ALEIDA (0765))<BR>(WILLIAMS, BRADLEY (1367))</td></tr><tr><td> 104-topic-09 </td><td>(CAMERON, SHENEKA (5182))<BR>(DIOP, ALEN (5001))<BR>(DOLAN, DEMI (9430))<BR>(LAVAYEN, MARTHA (4824))<BR>(LEE, BO (7452))<BR>(MEDINA, MELBA (4245))<BR>(RANIERI, PETER (1959))<BR>(REYNOSO, STEPHANIE (9018))<BR>(SANCHEZ, SABRINA (0991))<BR>(SEGNAN, MICHAEL (5183))<BR>(YSIT, JESU (3403))</td></tr><tr><td> 104-topic-10 </td><td>(AHMED, FAROOQ (9728))<BR>(BASSIT, JESSICA (3525))<BR>(CABRERA, CANDY (1843))<BR>(CAMERINO, MATTHEW (8567))<BR>(CAMERON, SHENEKA (5182))<BR>(DIOP, ALEN (5001))<BR>(DOLAN, DEMI (9430))<BR>(LAVAYEN, MARTHA (4824))<BR>(LEE, BO (7452))<BR>(MEDINA, MELBA (4245))<BR>(RANIERI, PETER (1959))<BR>(REYNOSO, STEPHANIE (9018))<BR>(RIVERA, KAESHAUNA (1896))<BR>(ROMERO, DONNA (2200))<BR>(SANCHEZ, SABRINA (0991))<BR>(SEGNAN, MICHAEL (5183))<BR>(TATIS, NAOMI (5912))<BR>(VELASQUEZ, ALEIDA (0765))<BR>(WILLIAMS, BRADLEY (1367))<BR>(YSIT, JESU (3403))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
