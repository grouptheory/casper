#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 103 - MODERN_MATH_I (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>103</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>04</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SHAMUILOVA_R</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>6265</td><td>ARIAS, YAHNNY</td><td>103-topic-01<BR>103-topic-03<BR>103-topic-04<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08</td></tr><tr><td>4069</td><td>ATHERLEY, ANASIA</td><td>103-topic-02<BR>103-topic-03<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-09<BR>103-topic-10</td></tr><tr><td>4534</td><td>BATISTA, SUGEIRY</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-10</td></tr><tr><td>5573</td><td>CHISHOLM, LEIGHTEN</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-04<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-10</td></tr><tr><td>6495</td><td>CORNELIO, MELISSA</td><td>Absent on the assessment test.</td></tr><tr><td>6563</td><td>DIAZ, MAYRA</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-10</td></tr><tr><td>1369</td><td>FEBRILLET, LISBETH</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-10</td></tr><tr><td>6982</td><td>GASPARRINI, STEVEN</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-04<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08</td></tr><tr><td>3274</td><td>LLANOS, JENICA</td><td>Absent on the assessment test.</td></tr><tr><td>2104</td><td>LUGO, FRANKLIN</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-04<BR>103-topic-07<BR>103-topic-08<BR>103-topic-09<BR>103-topic-10</td></tr><tr><td>8810</td><td>LUNNCRAFT, JASMINE</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-04<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-10</td></tr><tr><td>3448</td><td>MAQUILON, BRIGETTE</td><td>103-topic-01<BR>103-topic-03<BR>103-topic-04<BR>103-topic-07<BR>103-topic-08<BR>103-topic-09<BR>103-topic-10</td></tr><tr><td>1062</td><td>MIRANDA, ASHLEY</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-04<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-10</td></tr><tr><td>6575</td><td>MORINHO, COURTNEY</td><td>103-topic-01<BR>103-topic-03<BR>103-topic-04<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-09<BR>103-topic-10</td></tr><tr><td>9980</td><td>NALLADURAI, DANIEL</td><td>103-topic-01<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-10</td></tr><tr><td>9869</td><td>PEAKES, SHEILA</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-04<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08</td></tr><tr><td>1950</td><td>QUINONES, ZENAYDA</td><td>Absent on the assessment test.</td></tr><tr><td>8185</td><td>RODRIGUEZ, CHARLTON</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-04<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-10</td></tr><tr><td>9541</td><td>RODRIGUEZ, VIANELLY</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-07<BR>103-topic-08</td></tr><tr><td>4719</td><td>SOTO, KATHERINE</td><td>103-topic-01<BR>103-topic-02<BR>103-topic-03<BR>103-topic-04<BR>103-topic-05<BR>103-topic-06<BR>103-topic-07<BR>103-topic-08<BR>103-topic-09<BR>103-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 103-topic-01 </td><td>(ARIAS, YAHNNY (6265))<BR>(BATISTA, SUGEIRY (4534))<BR>(CHISHOLM, LEIGHTEN (5573))<BR>(DIAZ, MAYRA (6563))<BR>(FEBRILLET, LISBETH (1369))<BR>(GASPARRINI, STEVEN (6982))<BR>(LUGO, FRANKLIN (2104))<BR>(LUNNCRAFT, JASMINE (8810))<BR>(MAQUILON, BRIGETTE (3448))<BR>(MIRANDA, ASHLEY (1062))<BR>(MORINHO, COURTNEY (6575))<BR>(NALLADURAI, DANIEL (9980))<BR>(PEAKES, SHEILA (9869))<BR>(RODRIGUEZ, CHARLTON (8185))<BR>(RODRIGUEZ, VIANELLY (9541))<BR>(SOTO, KATHERINE (4719))</td></tr><tr><td> 103-topic-02 </td><td>(ATHERLEY, ANASIA (4069))<BR>(BATISTA, SUGEIRY (4534))<BR>(CHISHOLM, LEIGHTEN (5573))<BR>(DIAZ, MAYRA (6563))<BR>(FEBRILLET, LISBETH (1369))<BR>(GASPARRINI, STEVEN (6982))<BR>(LUGO, FRANKLIN (2104))<BR>(LUNNCRAFT, JASMINE (8810))<BR>(MIRANDA, ASHLEY (1062))<BR>(PEAKES, SHEILA (9869))<BR>(RODRIGUEZ, CHARLTON (8185))<BR>(RODRIGUEZ, VIANELLY (9541))<BR>(SOTO, KATHERINE (4719))</td></tr><tr><td> 103-topic-03 </td><td>(ARIAS, YAHNNY (6265))<BR>(ATHERLEY, ANASIA (4069))<BR>(BATISTA, SUGEIRY (4534))<BR>(CHISHOLM, LEIGHTEN (5573))<BR>(DIAZ, MAYRA (6563))<BR>(FEBRILLET, LISBETH (1369))<BR>(GASPARRINI, STEVEN (6982))<BR>(LUGO, FRANKLIN (2104))<BR>(LUNNCRAFT, JASMINE (8810))<BR>(MAQUILON, BRIGETTE (3448))<BR>(MIRANDA, ASHLEY (1062))<BR>(MORINHO, COURTNEY (6575))<BR>(PEAKES, SHEILA (9869))<BR>(RODRIGUEZ, CHARLTON (8185))<BR>(RODRIGUEZ, VIANELLY (9541))<BR>(SOTO, KATHERINE (4719))</td></tr><tr><td> 103-topic-04 </td><td>(ARIAS, YAHNNY (6265))<BR>(CHISHOLM, LEIGHTEN (5573))<BR>(GASPARRINI, STEVEN (6982))<BR>(LUGO, FRANKLIN (2104))<BR>(LUNNCRAFT, JASMINE (8810))<BR>(MAQUILON, BRIGETTE (3448))<BR>(MIRANDA, ASHLEY (1062))<BR>(MORINHO, COURTNEY (6575))<BR>(PEAKES, SHEILA (9869))<BR>(RODRIGUEZ, CHARLTON (8185))<BR>(SOTO, KATHERINE (4719))</td></tr><tr><td> 103-topic-05 </td><td>(ARIAS, YAHNNY (6265))<BR>(ATHERLEY, ANASIA (4069))<BR>(BATISTA, SUGEIRY (4534))<BR>(CHISHOLM, LEIGHTEN (5573))<BR>(FEBRILLET, LISBETH (1369))<BR>(GASPARRINI, STEVEN (6982))<BR>(LUNNCRAFT, JASMINE (8810))<BR>(MIRANDA, ASHLEY (1062))<BR>(NALLADURAI, DANIEL (9980))<BR>(PEAKES, SHEILA (9869))<BR>(RODRIGUEZ, CHARLTON (8185))<BR>(SOTO, KATHERINE (4719))</td></tr><tr><td> 103-topic-06 </td><td>(ARIAS, YAHNNY (6265))<BR>(ATHERLEY, ANASIA (4069))<BR>(BATISTA, SUGEIRY (4534))<BR>(CHISHOLM, LEIGHTEN (5573))<BR>(DIAZ, MAYRA (6563))<BR>(FEBRILLET, LISBETH (1369))<BR>(GASPARRINI, STEVEN (6982))<BR>(LUNNCRAFT, JASMINE (8810))<BR>(MIRANDA, ASHLEY (1062))<BR>(MORINHO, COURTNEY (6575))<BR>(NALLADURAI, DANIEL (9980))<BR>(PEAKES, SHEILA (9869))<BR>(RODRIGUEZ, CHARLTON (8185))<BR>(SOTO, KATHERINE (4719))</td></tr><tr><td> 103-topic-07 </td><td>(ARIAS, YAHNNY (6265))<BR>(ATHERLEY, ANASIA (4069))<BR>(BATISTA, SUGEIRY (4534))<BR>(CHISHOLM, LEIGHTEN (5573))<BR>(DIAZ, MAYRA (6563))<BR>(FEBRILLET, LISBETH (1369))<BR>(GASPARRINI, STEVEN (6982))<BR>(LUGO, FRANKLIN (2104))<BR>(LUNNCRAFT, JASMINE (8810))<BR>(MAQUILON, BRIGETTE (3448))<BR>(MIRANDA, ASHLEY (1062))<BR>(MORINHO, COURTNEY (6575))<BR>(NALLADURAI, DANIEL (9980))<BR>(PEAKES, SHEILA (9869))<BR>(RODRIGUEZ, CHARLTON (8185))<BR>(RODRIGUEZ, VIANELLY (9541))<BR>(SOTO, KATHERINE (4719))</td></tr><tr><td> 103-topic-08 </td><td>(ARIAS, YAHNNY (6265))<BR>(ATHERLEY, ANASIA (4069))<BR>(BATISTA, SUGEIRY (4534))<BR>(CHISHOLM, LEIGHTEN (5573))<BR>(DIAZ, MAYRA (6563))<BR>(FEBRILLET, LISBETH (1369))<BR>(GASPARRINI, STEVEN (6982))<BR>(LUGO, FRANKLIN (2104))<BR>(LUNNCRAFT, JASMINE (8810))<BR>(MAQUILON, BRIGETTE (3448))<BR>(MIRANDA, ASHLEY (1062))<BR>(MORINHO, COURTNEY (6575))<BR>(NALLADURAI, DANIEL (9980))<BR>(PEAKES, SHEILA (9869))<BR>(RODRIGUEZ, CHARLTON (8185))<BR>(RODRIGUEZ, VIANELLY (9541))<BR>(SOTO, KATHERINE (4719))</td></tr><tr><td> 103-topic-09 </td><td>(ATHERLEY, ANASIA (4069))<BR>(LUGO, FRANKLIN (2104))<BR>(MAQUILON, BRIGETTE (3448))<BR>(MORINHO, COURTNEY (6575))<BR>(SOTO, KATHERINE (4719))</td></tr><tr><td> 103-topic-10 </td><td>(ATHERLEY, ANASIA (4069))<BR>(BATISTA, SUGEIRY (4534))<BR>(CHISHOLM, LEIGHTEN (5573))<BR>(DIAZ, MAYRA (6563))<BR>(FEBRILLET, LISBETH (1369))<BR>(LUGO, FRANKLIN (2104))<BR>(LUNNCRAFT, JASMINE (8810))<BR>(MAQUILON, BRIGETTE (3448))<BR>(MIRANDA, ASHLEY (1062))<BR>(MORINHO, COURTNEY (6575))<BR>(NALLADURAI, DANIEL (9980))<BR>(RODRIGUEZ, CHARLTON (8185))<BR>(SOTO, KATHERINE (4719))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>