#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>17</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>Agyen-frempong_A</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>9567</td><td>CRUZ, STEPHANIE</td><td>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>2031</td><td>CUMBERBATCH, JENNIFER</td><td>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5603</td><td>GARABITO, CHRISTINA</td><td>Absent on the assessment test.</td></tr><tr><td>8736</td><td>GIL, MAGDALENA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>0322</td><td>GRANT, SANDRA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3338</td><td>GUERRERO, LUISA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>7857</td><td>GUERRIER, KATHLEEN</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>7252</td><td>LOCICERO, JOHN</td><td>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>6955</td><td>LUMI, MYRVETE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1684</td><td>MARTINEZ, ROSENDO</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3717</td><td>MAULEON, YOLANDA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9886</td><td>MENDOZA, EMILL</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06</td></tr><tr><td>7236</td><td>MOHAMED, DALAH</td><td>Absent on the assessment test.</td></tr><tr><td>8930</td><td>MOHAMED, SHAZEEDA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>9617</td><td>NELSON-COOK, TANESHA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9077</td><td>ORTA, NATALIA</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>3890</td><td>PATWARY, SAHID</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4010</td><td>PIMENTEL, RACHEL</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>2982</td><td>SALCEDO, AMILKA</td><td>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4236</td><td>SANCHEZ, FRANCARLY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>7130</td><td>SANTANA, DIANE</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06</td></tr><tr><td>3744</td><td>SHAHEED, TARIQ</td><td>104-topic-01<BR>104-topic-07</td></tr><tr><td>6176</td><td>SOBOTA, KAROL</td><td>Absent on the assessment test.</td></tr><tr><td>6821</td><td>TAYLOR, PAULINE</td><td>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>6561</td><td>VELEZ, CORETTA</td><td>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>1220</td><td>WALKER, LUCRETIA</td><td>Absent on the assessment test.</td></tr><tr><td>0320</td><td>WONG, SHELON</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(GIL, MAGDALENA (8736))<BR>(GRANT, SANDRA (0322))<BR>(GUERRERO, LUISA (3338))<BR>(GUERRIER, KATHLEEN (7857))<BR>(LUMI, MYRVETE (6955))<BR>(MARTINEZ, ROSENDO (1684))<BR>(MAULEON, YOLANDA (3717))<BR>(MENDOZA, EMILL (9886))<BR>(MOHAMED, SHAZEEDA (8930))<BR>(NELSON-COOK, TANESHA (9617))<BR>(ORTA, NATALIA (9077))<BR>(PATWARY, SAHID (3890))<BR>(PIMENTEL, RACHEL (4010))<BR>(SANCHEZ, FRANCARLY (4236))<BR>(SANTANA, DIANE (7130))<BR>(SHAHEED, TARIQ (3744))<BR>(WONG, SHELON (0320))</td></tr><tr><td> 104-topic-02 </td><td>(CRUZ, STEPHANIE (9567))<BR>(GIL, MAGDALENA (8736))<BR>(GRANT, SANDRA (0322))<BR>(GUERRERO, LUISA (3338))<BR>(GUERRIER, KATHLEEN (7857))<BR>(LOCICERO, JOHN (7252))<BR>(LUMI, MYRVETE (6955))<BR>(MARTINEZ, ROSENDO (1684))<BR>(MAULEON, YOLANDA (3717))<BR>(MOHAMED, SHAZEEDA (8930))<BR>(PATWARY, SAHID (3890))<BR>(SALCEDO, AMILKA (2982))<BR>(SANCHEZ, FRANCARLY (4236))<BR>(TAYLOR, PAULINE (6821))<BR>(VELEZ, CORETTA (6561))<BR>(WONG, SHELON (0320))</td></tr><tr><td> 104-topic-03 </td><td>(CRUZ, STEPHANIE (9567))<BR>(CUMBERBATCH, JENNIFER (2031))<BR>(GIL, MAGDALENA (8736))<BR>(GRANT, SANDRA (0322))<BR>(GUERRERO, LUISA (3338))<BR>(LUMI, MYRVETE (6955))<BR>(MAULEON, YOLANDA (3717))<BR>(MOHAMED, SHAZEEDA (8930))<BR>(NELSON-COOK, TANESHA (9617))<BR>(ORTA, NATALIA (9077))<BR>(PATWARY, SAHID (3890))<BR>(PIMENTEL, RACHEL (4010))<BR>(SANCHEZ, FRANCARLY (4236))<BR>(VELEZ, CORETTA (6561))<BR>(WONG, SHELON (0320))</td></tr><tr><td> 104-topic-04 </td><td>(CRUZ, STEPHANIE (9567))<BR>(GRANT, SANDRA (0322))<BR>(GUERRERO, LUISA (3338))<BR>(LUMI, MYRVETE (6955))<BR>(MARTINEZ, ROSENDO (1684))<BR>(MAULEON, YOLANDA (3717))<BR>(MENDOZA, EMILL (9886))<BR>(MOHAMED, SHAZEEDA (8930))<BR>(NELSON-COOK, TANESHA (9617))<BR>(ORTA, NATALIA (9077))<BR>(PATWARY, SAHID (3890))<BR>(PIMENTEL, RACHEL (4010))<BR>(SANCHEZ, FRANCARLY (4236))<BR>(TAYLOR, PAULINE (6821))<BR>(VELEZ, CORETTA (6561))</td></tr><tr><td> 104-topic-05 </td><td>(CRUZ, STEPHANIE (9567))<BR>(CUMBERBATCH, JENNIFER (2031))<BR>(GIL, MAGDALENA (8736))<BR>(GRANT, SANDRA (0322))<BR>(GUERRERO, LUISA (3338))<BR>(GUERRIER, KATHLEEN (7857))<BR>(LOCICERO, JOHN (7252))<BR>(LUMI, MYRVETE (6955))<BR>(MARTINEZ, ROSENDO (1684))<BR>(MAULEON, YOLANDA (3717))<BR>(MENDOZA, EMILL (9886))<BR>(MOHAMED, SHAZEEDA (8930))<BR>(NELSON-COOK, TANESHA (9617))<BR>(ORTA, NATALIA (9077))<BR>(PATWARY, SAHID (3890))<BR>(PIMENTEL, RACHEL (4010))<BR>(SALCEDO, AMILKA (2982))<BR>(SANCHEZ, FRANCARLY (4236))<BR>(SANTANA, DIANE (7130))<BR>(TAYLOR, PAULINE (6821))<BR>(VELEZ, CORETTA (6561))<BR>(WONG, SHELON (0320))</td></tr><tr><td> 104-topic-06 </td><td>(CRUZ, STEPHANIE (9567))<BR>(CUMBERBATCH, JENNIFER (2031))<BR>(GIL, MAGDALENA (8736))<BR>(GRANT, SANDRA (0322))<BR>(GUERRIER, KATHLEEN (7857))<BR>(LOCICERO, JOHN (7252))<BR>(LUMI, MYRVETE (6955))<BR>(MARTINEZ, ROSENDO (1684))<BR>(MAULEON, YOLANDA (3717))<BR>(MENDOZA, EMILL (9886))<BR>(MOHAMED, SHAZEEDA (8930))<BR>(NELSON-COOK, TANESHA (9617))<BR>(ORTA, NATALIA (9077))<BR>(PATWARY, SAHID (3890))<BR>(PIMENTEL, RACHEL (4010))<BR>(SALCEDO, AMILKA (2982))<BR>(SANCHEZ, FRANCARLY (4236))<BR>(SANTANA, DIANE (7130))<BR>(TAYLOR, PAULINE (6821))<BR>(VELEZ, CORETTA (6561))<BR>(WONG, SHELON (0320))</td></tr><tr><td> 104-topic-07 </td><td>(CRUZ, STEPHANIE (9567))<BR>(CUMBERBATCH, JENNIFER (2031))<BR>(GRANT, SANDRA (0322))<BR>(GUERRERO, LUISA (3338))<BR>(GUERRIER, KATHLEEN (7857))<BR>(LOCICERO, JOHN (7252))<BR>(LUMI, MYRVETE (6955))<BR>(MARTINEZ, ROSENDO (1684))<BR>(MAULEON, YOLANDA (3717))<BR>(MOHAMED, SHAZEEDA (8930))<BR>(NELSON-COOK, TANESHA (9617))<BR>(ORTA, NATALIA (9077))<BR>(PATWARY, SAHID (3890))<BR>(PIMENTEL, RACHEL (4010))<BR>(SALCEDO, AMILKA (2982))<BR>(SANCHEZ, FRANCARLY (4236))<BR>(SHAHEED, TARIQ (3744))<BR>(TAYLOR, PAULINE (6821))<BR>(WONG, SHELON (0320))</td></tr><tr><td> 104-topic-08 </td><td>(CRUZ, STEPHANIE (9567))<BR>(GRANT, SANDRA (0322))<BR>(GUERRIER, KATHLEEN (7857))<BR>(LOCICERO, JOHN (7252))<BR>(LUMI, MYRVETE (6955))<BR>(MARTINEZ, ROSENDO (1684))<BR>(MAULEON, YOLANDA (3717))<BR>(MOHAMED, SHAZEEDA (8930))<BR>(NELSON-COOK, TANESHA (9617))<BR>(ORTA, NATALIA (9077))<BR>(PIMENTEL, RACHEL (4010))<BR>(SANCHEZ, FRANCARLY (4236))<BR>(VELEZ, CORETTA (6561))<BR>(WONG, SHELON (0320))</td></tr><tr><td> 104-topic-09 </td><td>(GIL, MAGDALENA (8736))<BR>(GRANT, SANDRA (0322))<BR>(GUERRERO, LUISA (3338))<BR>(LUMI, MYRVETE (6955))<BR>(MARTINEZ, ROSENDO (1684))<BR>(MAULEON, YOLANDA (3717))<BR>(NELSON-COOK, TANESHA (9617))<BR>(PATWARY, SAHID (3890))<BR>(SALCEDO, AMILKA (2982))<BR>(SANCHEZ, FRANCARLY (4236))<BR>(WONG, SHELON (0320))</td></tr><tr><td> 104-topic-10 </td><td>(CRUZ, STEPHANIE (9567))<BR>(CUMBERBATCH, JENNIFER (2031))<BR>(GIL, MAGDALENA (8736))<BR>(GRANT, SANDRA (0322))<BR>(GUERRERO, LUISA (3338))<BR>(GUERRIER, KATHLEEN (7857))<BR>(LOCICERO, JOHN (7252))<BR>(LUMI, MYRVETE (6955))<BR>(MARTINEZ, ROSENDO (1684))<BR>(MAULEON, YOLANDA (3717))<BR>(MOHAMED, SHAZEEDA (8930))<BR>(NELSON-COOK, TANESHA (9617))<BR>(ORTA, NATALIA (9077))<BR>(PATWARY, SAHID (3890))<BR>(PIMENTEL, RACHEL (4010))<BR>(SALCEDO, AMILKA (2982))<BR>(SANCHEZ, FRANCARLY (4236))<BR>(TAYLOR, PAULINE (6821))<BR>(VELEZ, CORETTA (6561))<BR>(WONG, SHELON (0320))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>