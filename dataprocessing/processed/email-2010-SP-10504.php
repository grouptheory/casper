#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 105 - MODERN_MATH_3 (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>105</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>04</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>MILLER_E</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1005</td><td>CANALES, WILLY</td><td>Absent on the assessment test.</td></tr><tr><td>2242</td><td>DEJESUS, STEPHANIE</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>7130</td><td>DEMOTT, SARA</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>3779</td><td>ENCARNACION, JANELIZA</td><td>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-08<BR>105-topic-10</td></tr><tr><td>3426</td><td>FELICIANO, RADAMES</td><td>Absent on the assessment test.</td></tr><tr><td>4838</td><td>FONG, JENNY</td><td>105-topic-01<BR>105-topic-04</td></tr><tr><td>1681</td><td>GOBENKO, NATALIYA</td><td>Absent on the assessment test.</td></tr><tr><td>8345</td><td>HARRIS, KIERRE</td><td>Absent on the assessment test.</td></tr><tr><td>8212</td><td>HOPKINS, BRENT</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07</td></tr><tr><td>0875</td><td>MORRIS, TANASHA</td><td>Absent on the assessment test.</td></tr><tr><td>7437</td><td>MOSS, AUDRIANE</td><td>105-topic-02<BR>105-topic-05<BR>105-topic-06<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>8261</td><td>MULLER, SAMANTHA</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>6473</td><td>NIEVES, EDWIN</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>6349</td><td>ORTIZ, DAVIN</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>3225</td><td>ORTIZ, RAYMOND</td><td>105-topic-01<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>7274</td><td>PANICHPISAL, PIYANUCH</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>9152</td><td>PASTAS, ANGELA</td><td>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>8403</td><td>PROFIT, RUBEN</td><td>Absent on the assessment test.</td></tr><tr><td>8097</td><td>RAMOS, STEPHANY</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>1181</td><td>RIVERA, STEPHANIE</td><td>Absent on the assessment test.</td></tr><tr><td>1116</td><td>SANJINES, CARMEN</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>2100</td><td>SANTOS, CHRISTOPHER</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>9416</td><td>SCOLLO, CARLA</td><td>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-09<BR>105-topic-10</td></tr><tr><td>6139</td><td>SPORER, NICHOLAS</td><td>Absent on the assessment test.</td></tr><tr><td>3330</td><td>TANG, TSZ_KWAN_AMY</td><td>105-topic-01<BR>105-topic-06<BR>105-topic-07</td></tr><tr><td>7667</td><td>TAVAREZ, GLADYS</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-04<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>4558</td><td>TKACHENKO, OLENA</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>8147</td><td>TORRES, ANNY</td><td>105-topic-01<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-10</td></tr><tr><td>4034</td><td>WILLIAMS, BRENT</td><td>Absent on the assessment test.</td></tr><tr><td>5123</td><td>ZEB, SHAZIA</td><td>105-topic-01<BR>105-topic-02<BR>105-topic-03<BR>105-topic-05<BR>105-topic-06<BR>105-topic-07<BR>105-topic-08<BR>105-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 105-topic-01 </td><td>(DEJESUS, STEPHANIE (2242))<BR>(DEMOTT, SARA (7130))<BR>(FONG, JENNY (4838))<BR>(HOPKINS, BRENT (8212))<BR>(MULLER, SAMANTHA (8261))<BR>(NIEVES, EDWIN (6473))<BR>(ORTIZ, DAVIN (6349))<BR>(ORTIZ, RAYMOND (3225))<BR>(PANICHPISAL, PIYANUCH (7274))<BR>(RAMOS, STEPHANY (8097))<BR>(SANJINES, CARMEN (1116))<BR>(SANTOS, CHRISTOPHER (2100))<BR>(TANG, TSZ_KWAN_AMY (3330))<BR>(TAVAREZ, GLADYS (7667))<BR>(TKACHENKO, OLENA (4558))<BR>(TORRES, ANNY (8147))<BR>(ZEB, SHAZIA (5123))</td></tr><tr><td> 105-topic-02 </td><td>(DEJESUS, STEPHANIE (2242))<BR>(DEMOTT, SARA (7130))<BR>(HOPKINS, BRENT (8212))<BR>(MOSS, AUDRIANE (7437))<BR>(NIEVES, EDWIN (6473))<BR>(ORTIZ, DAVIN (6349))<BR>(PANICHPISAL, PIYANUCH (7274))<BR>(RAMOS, STEPHANY (8097))<BR>(SANJINES, CARMEN (1116))<BR>(SANTOS, CHRISTOPHER (2100))<BR>(TAVAREZ, GLADYS (7667))<BR>(ZEB, SHAZIA (5123))</td></tr><tr><td> 105-topic-03 </td><td>(DEMOTT, SARA (7130))<BR>(HOPKINS, BRENT (8212))<BR>(MULLER, SAMANTHA (8261))<BR>(NIEVES, EDWIN (6473))<BR>(ORTIZ, DAVIN (6349))<BR>(PASTAS, ANGELA (9152))<BR>(SANJINES, CARMEN (1116))<BR>(SANTOS, CHRISTOPHER (2100))<BR>(SCOLLO, CARLA (9416))<BR>(TAVAREZ, GLADYS (7667))<BR>(TKACHENKO, OLENA (4558))<BR>(TORRES, ANNY (8147))<BR>(ZEB, SHAZIA (5123))</td></tr><tr><td> 105-topic-04 </td><td>(DEJESUS, STEPHANIE (2242))<BR>(DEMOTT, SARA (7130))<BR>(ENCARNACION, JANELIZA (3779))<BR>(FONG, JENNY (4838))<BR>(HOPKINS, BRENT (8212))<BR>(NIEVES, EDWIN (6473))<BR>(ORTIZ, DAVIN (6349))<BR>(PANICHPISAL, PIYANUCH (7274))<BR>(PASTAS, ANGELA (9152))<BR>(RAMOS, STEPHANY (8097))<BR>(SANTOS, CHRISTOPHER (2100))<BR>(TAVAREZ, GLADYS (7667))</td></tr><tr><td> 105-topic-05 </td><td>(DEJESUS, STEPHANIE (2242))<BR>(DEMOTT, SARA (7130))<BR>(ENCARNACION, JANELIZA (3779))<BR>(HOPKINS, BRENT (8212))<BR>(MOSS, AUDRIANE (7437))<BR>(MULLER, SAMANTHA (8261))<BR>(NIEVES, EDWIN (6473))<BR>(ORTIZ, DAVIN (6349))<BR>(ORTIZ, RAYMOND (3225))<BR>(PANICHPISAL, PIYANUCH (7274))<BR>(PASTAS, ANGELA (9152))<BR>(RAMOS, STEPHANY (8097))<BR>(SANJINES, CARMEN (1116))<BR>(SANTOS, CHRISTOPHER (2100))<BR>(SCOLLO, CARLA (9416))<BR>(TAVAREZ, GLADYS (7667))<BR>(TKACHENKO, OLENA (4558))<BR>(TORRES, ANNY (8147))<BR>(ZEB, SHAZIA (5123))</td></tr><tr><td> 105-topic-06 </td><td>(DEJESUS, STEPHANIE (2242))<BR>(DEMOTT, SARA (7130))<BR>(ENCARNACION, JANELIZA (3779))<BR>(HOPKINS, BRENT (8212))<BR>(MOSS, AUDRIANE (7437))<BR>(MULLER, SAMANTHA (8261))<BR>(NIEVES, EDWIN (6473))<BR>(ORTIZ, DAVIN (6349))<BR>(ORTIZ, RAYMOND (3225))<BR>(PANICHPISAL, PIYANUCH (7274))<BR>(PASTAS, ANGELA (9152))<BR>(RAMOS, STEPHANY (8097))<BR>(SANJINES, CARMEN (1116))<BR>(SANTOS, CHRISTOPHER (2100))<BR>(SCOLLO, CARLA (9416))<BR>(TANG, TSZ_KWAN_AMY (3330))<BR>(TAVAREZ, GLADYS (7667))<BR>(TKACHENKO, OLENA (4558))<BR>(TORRES, ANNY (8147))<BR>(ZEB, SHAZIA (5123))</td></tr><tr><td> 105-topic-07 </td><td>(DEJESUS, STEPHANIE (2242))<BR>(HOPKINS, BRENT (8212))<BR>(MULLER, SAMANTHA (8261))<BR>(NIEVES, EDWIN (6473))<BR>(ORTIZ, DAVIN (6349))<BR>(ORTIZ, RAYMOND (3225))<BR>(PANICHPISAL, PIYANUCH (7274))<BR>(PASTAS, ANGELA (9152))<BR>(RAMOS, STEPHANY (8097))<BR>(SANJINES, CARMEN (1116))<BR>(SANTOS, CHRISTOPHER (2100))<BR>(SCOLLO, CARLA (9416))<BR>(TANG, TSZ_KWAN_AMY (3330))<BR>(TAVAREZ, GLADYS (7667))<BR>(TKACHENKO, OLENA (4558))<BR>(TORRES, ANNY (8147))<BR>(ZEB, SHAZIA (5123))</td></tr><tr><td> 105-topic-08 </td><td>(ENCARNACION, JANELIZA (3779))<BR>(MOSS, AUDRIANE (7437))<BR>(NIEVES, EDWIN (6473))<BR>(ORTIZ, DAVIN (6349))<BR>(PANICHPISAL, PIYANUCH (7274))<BR>(RAMOS, STEPHANY (8097))<BR>(SANJINES, CARMEN (1116))<BR>(SANTOS, CHRISTOPHER (2100))<BR>(ZEB, SHAZIA (5123))</td></tr><tr><td> 105-topic-09 </td><td>(DEJESUS, STEPHANIE (2242))<BR>(DEMOTT, SARA (7130))<BR>(MOSS, AUDRIANE (7437))<BR>(MULLER, SAMANTHA (8261))<BR>(NIEVES, EDWIN (6473))<BR>(ORTIZ, DAVIN (6349))<BR>(PANICHPISAL, PIYANUCH (7274))<BR>(PASTAS, ANGELA (9152))<BR>(RAMOS, STEPHANY (8097))<BR>(SANJINES, CARMEN (1116))<BR>(SANTOS, CHRISTOPHER (2100))<BR>(SCOLLO, CARLA (9416))</td></tr><tr><td> 105-topic-10 </td><td>(DEJESUS, STEPHANIE (2242))<BR>(DEMOTT, SARA (7130))<BR>(ENCARNACION, JANELIZA (3779))<BR>(MOSS, AUDRIANE (7437))<BR>(MULLER, SAMANTHA (8261))<BR>(NIEVES, EDWIN (6473))<BR>(ORTIZ, DAVIN (6349))<BR>(ORTIZ, RAYMOND (3225))<BR>(PANICHPISAL, PIYANUCH (7274))<BR>(PASTAS, ANGELA (9152))<BR>(RAMOS, STEPHANY (8097))<BR>(SANJINES, CARMEN (1116))<BR>(SANTOS, CHRISTOPHER (2100))<BR>(SCOLLO, CARLA (9416))<BR>(TAVAREZ, GLADYS (7667))<BR>(TKACHENKO, OLENA (4558))<BR>(TORRES, ANNY (8147))<BR>(ZEB, SHAZIA (5123))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
