#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 241 - CALCULUS_1 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>241</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>04</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>SALANE_D</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>1965</td><td>ADAMS, SYDNEY</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-04<BR>241-topic-05<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>9120</td><td>ANKUDOWICZ, OLIVIA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>9207</td><td>BEKER, IGOR</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5123</td><td>BRYANT, SHADAVIA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-08<BR>241-topic-10</td></tr><tr><td>2326</td><td>BUTKO, VOLDEMARAS</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5336</td><td>CHEUNG, LOK_YI_VIVIAN</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>7051</td><td>CHEUNG, LOUISE</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>7816</td><td>CIFUENTES, MARIA</td><td>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-10</td></tr><tr><td>4485</td><td>DEFRANCE, MICHAEL</td><td>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>6017</td><td>DINATALE, MATTHEW</td><td>241-topic-01<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>6836</td><td>FEBUS, HILDA</td><td>241-topic-01<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>9619</td><td>FERGUSON, ALIZEE</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>4609</td><td>HENRIQUEZ, ALLAN</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-10</td></tr><tr><td>7336</td><td>HO, NICHOLAS</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-10</td></tr><tr><td>8818</td><td>MALDONADO, KAILEY</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5431</td><td>MELLINA, ANDREW</td><td>Passed everything.</td></tr><tr><td>9692</td><td>MEMA, ELINA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5252</td><td>OLIVARES, HARDLY</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>4880</td><td>QUINONES, ANDREW</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>3871</td><td>RAMIREZ, BLANCA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>8798</td><td>RAMPHAL, KEVIN</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-08<BR>241-topic-10</td></tr><tr><td>1682</td><td>SAWNEY, TORI</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>5426</td><td>SMITH, ANDREW</td><td>241-topic-01<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>9346</td><td>TAPCHYLKA, YANA</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-06<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>1111</td><td>WANG, RONNY</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-09<BR>241-topic-10</td></tr><tr><td>6401</td><td>WU, JIAN_HENG</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-04<BR>241-topic-05<BR>241-topic-07<BR>241-topic-08<BR>241-topic-10</td></tr><tr><td>9009</td><td>YIU, GARRET</td><td>241-topic-01<BR>241-topic-02<BR>241-topic-03<BR>241-topic-05<BR>241-topic-06<BR>241-topic-08<BR>241-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 241-topic-01 </td><td>(ADAMS, SYDNEY (1965))<BR>(ANKUDOWICZ, OLIVIA (9120))<BR>(BEKER, IGOR (9207))<BR>(BRYANT, SHADAVIA (5123))<BR>(BUTKO, VOLDEMARAS (2326))<BR>(CHEUNG, LOK_YI_VIVIAN (5336))<BR>(CHEUNG, LOUISE (7051))<BR>(DINATALE, MATTHEW (6017))<BR>(FEBUS, HILDA (6836))<BR>(FERGUSON, ALIZEE (9619))<BR>(HENRIQUEZ, ALLAN (4609))<BR>(HO, NICHOLAS (7336))<BR>(MALDONADO, KAILEY (8818))<BR>(MEMA, ELINA (9692))<BR>(OLIVARES, HARDLY (5252))<BR>(QUINONES, ANDREW (4880))<BR>(RAMIREZ, BLANCA (3871))<BR>(RAMPHAL, KEVIN (8798))<BR>(SAWNEY, TORI (1682))<BR>(SMITH, ANDREW (5426))<BR>(TAPCHYLKA, YANA (9346))<BR>(WANG, RONNY (1111))<BR>(WU, JIAN_HENG (6401))<BR>(YIU, GARRET (9009))</td></tr><tr><td> 241-topic-02 </td><td>(ADAMS, SYDNEY (1965))<BR>(ANKUDOWICZ, OLIVIA (9120))<BR>(BEKER, IGOR (9207))<BR>(BRYANT, SHADAVIA (5123))<BR>(BUTKO, VOLDEMARAS (2326))<BR>(CHEUNG, LOK_YI_VIVIAN (5336))<BR>(CHEUNG, LOUISE (7051))<BR>(CIFUENTES, MARIA (7816))<BR>(DEFRANCE, MICHAEL (4485))<BR>(FERGUSON, ALIZEE (9619))<BR>(HENRIQUEZ, ALLAN (4609))<BR>(HO, NICHOLAS (7336))<BR>(MEMA, ELINA (9692))<BR>(OLIVARES, HARDLY (5252))<BR>(QUINONES, ANDREW (4880))<BR>(RAMIREZ, BLANCA (3871))<BR>(RAMPHAL, KEVIN (8798))<BR>(SAWNEY, TORI (1682))<BR>(TAPCHYLKA, YANA (9346))<BR>(WANG, RONNY (1111))<BR>(WU, JIAN_HENG (6401))<BR>(YIU, GARRET (9009))</td></tr><tr><td> 241-topic-03 </td><td>(BEKER, IGOR (9207))<BR>(BRYANT, SHADAVIA (5123))<BR>(CHEUNG, LOK_YI_VIVIAN (5336))<BR>(CHEUNG, LOUISE (7051))<BR>(CIFUENTES, MARIA (7816))<BR>(DEFRANCE, MICHAEL (4485))<BR>(HO, NICHOLAS (7336))<BR>(MALDONADO, KAILEY (8818))<BR>(MEMA, ELINA (9692))<BR>(OLIVARES, HARDLY (5252))<BR>(QUINONES, ANDREW (4880))<BR>(RAMIREZ, BLANCA (3871))<BR>(RAMPHAL, KEVIN (8798))<BR>(SAWNEY, TORI (1682))<BR>(SMITH, ANDREW (5426))<BR>(TAPCHYLKA, YANA (9346))<BR>(WANG, RONNY (1111))<BR>(YIU, GARRET (9009))</td></tr><tr><td> 241-topic-04 </td><td>(ADAMS, SYDNEY (1965))<BR>(ANKUDOWICZ, OLIVIA (9120))<BR>(BRYANT, SHADAVIA (5123))<BR>(CHEUNG, LOK_YI_VIVIAN (5336))<BR>(CHEUNG, LOUISE (7051))<BR>(DEFRANCE, MICHAEL (4485))<BR>(DINATALE, MATTHEW (6017))<BR>(FEBUS, HILDA (6836))<BR>(FERGUSON, ALIZEE (9619))<BR>(HENRIQUEZ, ALLAN (4609))<BR>(MALDONADO, KAILEY (8818))<BR>(MEMA, ELINA (9692))<BR>(OLIVARES, HARDLY (5252))<BR>(QUINONES, ANDREW (4880))<BR>(RAMPHAL, KEVIN (8798))<BR>(SAWNEY, TORI (1682))<BR>(TAPCHYLKA, YANA (9346))<BR>(WANG, RONNY (1111))<BR>(WU, JIAN_HENG (6401))</td></tr><tr><td> 241-topic-05 </td><td>(ADAMS, SYDNEY (1965))<BR>(ANKUDOWICZ, OLIVIA (9120))<BR>(BEKER, IGOR (9207))<BR>(BRYANT, SHADAVIA (5123))<BR>(BUTKO, VOLDEMARAS (2326))<BR>(CHEUNG, LOK_YI_VIVIAN (5336))<BR>(CHEUNG, LOUISE (7051))<BR>(CIFUENTES, MARIA (7816))<BR>(DEFRANCE, MICHAEL (4485))<BR>(DINATALE, MATTHEW (6017))<BR>(FEBUS, HILDA (6836))<BR>(FERGUSON, ALIZEE (9619))<BR>(HENRIQUEZ, ALLAN (4609))<BR>(HO, NICHOLAS (7336))<BR>(MALDONADO, KAILEY (8818))<BR>(MEMA, ELINA (9692))<BR>(OLIVARES, HARDLY (5252))<BR>(QUINONES, ANDREW (4880))<BR>(RAMIREZ, BLANCA (3871))<BR>(RAMPHAL, KEVIN (8798))<BR>(SAWNEY, TORI (1682))<BR>(SMITH, ANDREW (5426))<BR>(TAPCHYLKA, YANA (9346))<BR>(WANG, RONNY (1111))<BR>(WU, JIAN_HENG (6401))<BR>(YIU, GARRET (9009))</td></tr><tr><td> 241-topic-06 </td><td>(BEKER, IGOR (9207))<BR>(BUTKO, VOLDEMARAS (2326))<BR>(CIFUENTES, MARIA (7816))<BR>(DINATALE, MATTHEW (6017))<BR>(FEBUS, HILDA (6836))<BR>(FERGUSON, ALIZEE (9619))<BR>(HENRIQUEZ, ALLAN (4609))<BR>(HO, NICHOLAS (7336))<BR>(MALDONADO, KAILEY (8818))<BR>(MEMA, ELINA (9692))<BR>(OLIVARES, HARDLY (5252))<BR>(QUINONES, ANDREW (4880))<BR>(RAMIREZ, BLANCA (3871))<BR>(SMITH, ANDREW (5426))<BR>(TAPCHYLKA, YANA (9346))<BR>(YIU, GARRET (9009))</td></tr><tr><td> 241-topic-07 </td><td>(ANKUDOWICZ, OLIVIA (9120))<BR>(BEKER, IGOR (9207))<BR>(BUTKO, VOLDEMARAS (2326))<BR>(CHEUNG, LOK_YI_VIVIAN (5336))<BR>(DEFRANCE, MICHAEL (4485))<BR>(FERGUSON, ALIZEE (9619))<BR>(HENRIQUEZ, ALLAN (4609))<BR>(HO, NICHOLAS (7336))<BR>(MALDONADO, KAILEY (8818))<BR>(MEMA, ELINA (9692))<BR>(OLIVARES, HARDLY (5252))<BR>(QUINONES, ANDREW (4880))<BR>(SAWNEY, TORI (1682))<BR>(SMITH, ANDREW (5426))<BR>(TAPCHYLKA, YANA (9346))<BR>(WANG, RONNY (1111))<BR>(WU, JIAN_HENG (6401))</td></tr><tr><td> 241-topic-08 </td><td>(ADAMS, SYDNEY (1965))<BR>(ANKUDOWICZ, OLIVIA (9120))<BR>(BEKER, IGOR (9207))<BR>(BRYANT, SHADAVIA (5123))<BR>(BUTKO, VOLDEMARAS (2326))<BR>(CHEUNG, LOK_YI_VIVIAN (5336))<BR>(CHEUNG, LOUISE (7051))<BR>(CIFUENTES, MARIA (7816))<BR>(DEFRANCE, MICHAEL (4485))<BR>(DINATALE, MATTHEW (6017))<BR>(FEBUS, HILDA (6836))<BR>(FERGUSON, ALIZEE (9619))<BR>(HENRIQUEZ, ALLAN (4609))<BR>(HO, NICHOLAS (7336))<BR>(MALDONADO, KAILEY (8818))<BR>(MEMA, ELINA (9692))<BR>(OLIVARES, HARDLY (5252))<BR>(QUINONES, ANDREW (4880))<BR>(RAMPHAL, KEVIN (8798))<BR>(SAWNEY, TORI (1682))<BR>(SMITH, ANDREW (5426))<BR>(TAPCHYLKA, YANA (9346))<BR>(WANG, RONNY (1111))<BR>(WU, JIAN_HENG (6401))<BR>(YIU, GARRET (9009))</td></tr><tr><td> 241-topic-09 </td><td>(ADAMS, SYDNEY (1965))<BR>(ANKUDOWICZ, OLIVIA (9120))<BR>(BEKER, IGOR (9207))<BR>(BUTKO, VOLDEMARAS (2326))<BR>(CHEUNG, LOK_YI_VIVIAN (5336))<BR>(CHEUNG, LOUISE (7051))<BR>(DEFRANCE, MICHAEL (4485))<BR>(DINATALE, MATTHEW (6017))<BR>(FEBUS, HILDA (6836))<BR>(FERGUSON, ALIZEE (9619))<BR>(MALDONADO, KAILEY (8818))<BR>(MEMA, ELINA (9692))<BR>(OLIVARES, HARDLY (5252))<BR>(QUINONES, ANDREW (4880))<BR>(RAMIREZ, BLANCA (3871))<BR>(SAWNEY, TORI (1682))<BR>(SMITH, ANDREW (5426))<BR>(TAPCHYLKA, YANA (9346))<BR>(WANG, RONNY (1111))</td></tr><tr><td> 241-topic-10 </td><td>(ADAMS, SYDNEY (1965))<BR>(ANKUDOWICZ, OLIVIA (9120))<BR>(BEKER, IGOR (9207))<BR>(BRYANT, SHADAVIA (5123))<BR>(BUTKO, VOLDEMARAS (2326))<BR>(CHEUNG, LOK_YI_VIVIAN (5336))<BR>(CHEUNG, LOUISE (7051))<BR>(CIFUENTES, MARIA (7816))<BR>(DEFRANCE, MICHAEL (4485))<BR>(DINATALE, MATTHEW (6017))<BR>(FEBUS, HILDA (6836))<BR>(FERGUSON, ALIZEE (9619))<BR>(HENRIQUEZ, ALLAN (4609))<BR>(HO, NICHOLAS (7336))<BR>(MALDONADO, KAILEY (8818))<BR>(MEMA, ELINA (9692))<BR>(OLIVARES, HARDLY (5252))<BR>(QUINONES, ANDREW (4880))<BR>(RAMIREZ, BLANCA (3871))<BR>(RAMPHAL, KEVIN (8798))<BR>(SAWNEY, TORI (1682))<BR>(SMITH, ANDREW (5426))<BR>(TAPCHYLKA, YANA (9346))<BR>(WANG, RONNY (1111))<BR>(WU, JIAN_HENG (6401))<BR>(YIU, GARRET (9009))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
