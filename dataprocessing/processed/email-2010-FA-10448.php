#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>48</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>ISLAM_M</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>3711</td><td>ABDELMOAMEN, AYA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>0880</td><td>ANTOINE, JERRY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1622</td><td>BORRERO, SARAH</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>0159</td><td>BROWN, PHYLENA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>7342</td><td>CABRERA, KIARA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2340</td><td>CHAUCA, FLAVIO</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>8178</td><td>COLON, CHRISTINA</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-10</td></tr><tr><td>7210</td><td>DIALLO, THIERNO</td><td>Passed everything.</td></tr><tr><td>7922</td><td>ESTEVEZ, BIANCA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>3298</td><td>FERNANDEZ, SAMANTHA</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>8986</td><td>GOMEZ, DIANA</td><td>Passed everything.</td></tr><tr><td>2079</td><td>KAUR, AMANDEEP</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4598</td><td>KIM, ALICE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>4738</td><td>LANIGAN, STEVEN</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9035</td><td>LEBAN, ALEXANDER</td><td>104-topic-05<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5610</td><td>MAHMOOD, IQRA</td><td>Passed everything.</td></tr><tr><td>5786</td><td>MARCELLE, MALCOLM</td><td>104-topic-02<BR>104-topic-04<BR>104-topic-05</td></tr><tr><td>8054</td><td>MARK, YANARIS</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>0741</td><td>MARTINEZ, ANGELICA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>4396</td><td>MCCORMACK, MATTHEW</td><td>Absent on the assessment test.</td></tr><tr><td>9864</td><td>PARRAGA, NATASHA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>4985</td><td>PEREZ, ANA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>4798</td><td>TAMOOR, JAMSHED</td><td>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-10</td></tr><tr><td>9883</td><td>VARBERO, THOMAS</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1099</td><td>VELEZ, JESSICA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>9867</td><td>WALSH, STEFAN</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6161</td><td>XIAO, JENNIFER</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(ABDELMOAMEN, AYA (3711))<BR>(ANTOINE, JERRY (0880))<BR>(BORRERO, SARAH (1622))<BR>(BROWN, PHYLENA (0159))<BR>(CABRERA, KIARA (7342))<BR>(CHAUCA, FLAVIO (2340))<BR>(COLON, CHRISTINA (8178))<BR>(ESTEVEZ, BIANCA (7922))<BR>(FERNANDEZ, SAMANTHA (3298))<BR>(KAUR, AMANDEEP (2079))<BR>(KIM, ALICE (4598))<BR>(LANIGAN, STEVEN (4738))<BR>(MARK, YANARIS (8054))<BR>(MARTINEZ, ANGELICA (0741))<BR>(PARRAGA, NATASHA (9864))<BR>(PEREZ, ANA (4985))<BR>(VARBERO, THOMAS (9883))<BR>(VELEZ, JESSICA (1099))<BR>(WALSH, STEFAN (9867))<BR>(XIAO, JENNIFER (6161))</td></tr><tr><td> 104-topic-02 </td><td>(ABDELMOAMEN, AYA (3711))<BR>(ANTOINE, JERRY (0880))<BR>(BORRERO, SARAH (1622))<BR>(BROWN, PHYLENA (0159))<BR>(CABRERA, KIARA (7342))<BR>(ESTEVEZ, BIANCA (7922))<BR>(KAUR, AMANDEEP (2079))<BR>(KIM, ALICE (4598))<BR>(MARCELLE, MALCOLM (5786))<BR>(MARK, YANARIS (8054))<BR>(MARTINEZ, ANGELICA (0741))<BR>(PARRAGA, NATASHA (9864))<BR>(PEREZ, ANA (4985))<BR>(TAMOOR, JAMSHED (4798))<BR>(VARBERO, THOMAS (9883))<BR>(VELEZ, JESSICA (1099))<BR>(WALSH, STEFAN (9867))</td></tr><tr><td> 104-topic-03 </td><td>(ABDELMOAMEN, AYA (3711))<BR>(BORRERO, SARAH (1622))<BR>(BROWN, PHYLENA (0159))<BR>(CABRERA, KIARA (7342))<BR>(KAUR, AMANDEEP (2079))<BR>(KIM, ALICE (4598))<BR>(LANIGAN, STEVEN (4738))<BR>(MARK, YANARIS (8054))<BR>(MARTINEZ, ANGELICA (0741))<BR>(PARRAGA, NATASHA (9864))<BR>(PEREZ, ANA (4985))<BR>(VARBERO, THOMAS (9883))<BR>(VELEZ, JESSICA (1099))<BR>(WALSH, STEFAN (9867))</td></tr><tr><td> 104-topic-04 </td><td>(ABDELMOAMEN, AYA (3711))<BR>(ANTOINE, JERRY (0880))<BR>(BORRERO, SARAH (1622))<BR>(BROWN, PHYLENA (0159))<BR>(CABRERA, KIARA (7342))<BR>(FERNANDEZ, SAMANTHA (3298))<BR>(KAUR, AMANDEEP (2079))<BR>(KIM, ALICE (4598))<BR>(LANIGAN, STEVEN (4738))<BR>(MARCELLE, MALCOLM (5786))<BR>(MARK, YANARIS (8054))<BR>(MARTINEZ, ANGELICA (0741))<BR>(PARRAGA, NATASHA (9864))<BR>(TAMOOR, JAMSHED (4798))<BR>(VARBERO, THOMAS (9883))<BR>(VELEZ, JESSICA (1099))<BR>(WALSH, STEFAN (9867))<BR>(XIAO, JENNIFER (6161))</td></tr><tr><td> 104-topic-05 </td><td>(ABDELMOAMEN, AYA (3711))<BR>(ANTOINE, JERRY (0880))<BR>(BORRERO, SARAH (1622))<BR>(BROWN, PHYLENA (0159))<BR>(CABRERA, KIARA (7342))<BR>(CHAUCA, FLAVIO (2340))<BR>(COLON, CHRISTINA (8178))<BR>(ESTEVEZ, BIANCA (7922))<BR>(FERNANDEZ, SAMANTHA (3298))<BR>(KAUR, AMANDEEP (2079))<BR>(KIM, ALICE (4598))<BR>(LANIGAN, STEVEN (4738))<BR>(LEBAN, ALEXANDER (9035))<BR>(MARCELLE, MALCOLM (5786))<BR>(MARK, YANARIS (8054))<BR>(MARTINEZ, ANGELICA (0741))<BR>(PARRAGA, NATASHA (9864))<BR>(PEREZ, ANA (4985))<BR>(TAMOOR, JAMSHED (4798))<BR>(VARBERO, THOMAS (9883))<BR>(VELEZ, JESSICA (1099))<BR>(WALSH, STEFAN (9867))</td></tr><tr><td> 104-topic-06 </td><td>(ABDELMOAMEN, AYA (3711))<BR>(ANTOINE, JERRY (0880))<BR>(BORRERO, SARAH (1622))<BR>(BROWN, PHYLENA (0159))<BR>(CABRERA, KIARA (7342))<BR>(CHAUCA, FLAVIO (2340))<BR>(COLON, CHRISTINA (8178))<BR>(ESTEVEZ, BIANCA (7922))<BR>(FERNANDEZ, SAMANTHA (3298))<BR>(KAUR, AMANDEEP (2079))<BR>(KIM, ALICE (4598))<BR>(LANIGAN, STEVEN (4738))<BR>(MARK, YANARIS (8054))<BR>(MARTINEZ, ANGELICA (0741))<BR>(PARRAGA, NATASHA (9864))<BR>(PEREZ, ANA (4985))<BR>(TAMOOR, JAMSHED (4798))<BR>(VARBERO, THOMAS (9883))<BR>(VELEZ, JESSICA (1099))<BR>(WALSH, STEFAN (9867))<BR>(XIAO, JENNIFER (6161))</td></tr><tr><td> 104-topic-07 </td><td>(ABDELMOAMEN, AYA (3711))<BR>(ANTOINE, JERRY (0880))<BR>(BORRERO, SARAH (1622))<BR>(BROWN, PHYLENA (0159))<BR>(CHAUCA, FLAVIO (2340))<BR>(ESTEVEZ, BIANCA (7922))<BR>(KAUR, AMANDEEP (2079))<BR>(LANIGAN, STEVEN (4738))<BR>(LEBAN, ALEXANDER (9035))<BR>(MARK, YANARIS (8054))<BR>(MARTINEZ, ANGELICA (0741))<BR>(PARRAGA, NATASHA (9864))<BR>(PEREZ, ANA (4985))<BR>(VARBERO, THOMAS (9883))<BR>(VELEZ, JESSICA (1099))<BR>(WALSH, STEFAN (9867))<BR>(XIAO, JENNIFER (6161))</td></tr><tr><td> 104-topic-08 </td><td>(ABDELMOAMEN, AYA (3711))<BR>(ANTOINE, JERRY (0880))<BR>(ESTEVEZ, BIANCA (7922))<BR>(KIM, ALICE (4598))<BR>(MARK, YANARIS (8054))<BR>(PARRAGA, NATASHA (9864))<BR>(PEREZ, ANA (4985))<BR>(VELEZ, JESSICA (1099))<BR>(WALSH, STEFAN (9867))<BR>(XIAO, JENNIFER (6161))</td></tr><tr><td> 104-topic-09 </td><td>(ANTOINE, JERRY (0880))<BR>(CABRERA, KIARA (7342))<BR>(CHAUCA, FLAVIO (2340))<BR>(ESTEVEZ, BIANCA (7922))<BR>(FERNANDEZ, SAMANTHA (3298))<BR>(KAUR, AMANDEEP (2079))<BR>(LANIGAN, STEVEN (4738))<BR>(MARK, YANARIS (8054))<BR>(PEREZ, ANA (4985))<BR>(VARBERO, THOMAS (9883))<BR>(VELEZ, JESSICA (1099))<BR>(WALSH, STEFAN (9867))<BR>(XIAO, JENNIFER (6161))</td></tr><tr><td> 104-topic-10 </td><td>(ABDELMOAMEN, AYA (3711))<BR>(ANTOINE, JERRY (0880))<BR>(BORRERO, SARAH (1622))<BR>(BROWN, PHYLENA (0159))<BR>(CABRERA, KIARA (7342))<BR>(CHAUCA, FLAVIO (2340))<BR>(COLON, CHRISTINA (8178))<BR>(ESTEVEZ, BIANCA (7922))<BR>(FERNANDEZ, SAMANTHA (3298))<BR>(KAUR, AMANDEEP (2079))<BR>(KIM, ALICE (4598))<BR>(LANIGAN, STEVEN (4738))<BR>(LEBAN, ALEXANDER (9035))<BR>(MARK, YANARIS (8054))<BR>(MARTINEZ, ANGELICA (0741))<BR>(PARRAGA, NATASHA (9864))<BR>(PEREZ, ANA (4985))<BR>(TAMOOR, JAMSHED (4798))<BR>(VARBERO, THOMAS (9883))<BR>(VELEZ, JESSICA (1099))<BR>(WALSH, STEFAN (9867))<BR>(XIAO, JENNIFER (6161))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
