#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2010 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>23</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>VAN_WAGENEN_L</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>7932</td><td>ABREU, SHIRLEY</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09</td></tr><tr><td>4268</td><td>ALVAREZ, ROGER</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>2760</td><td>BARAN, FRANK</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>0221</td><td>BAZERMAN, CARLY</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-08</td></tr><tr><td>5676</td><td>BECKFORD-_BENJAMIN, MAKAILA</td><td>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>8399</td><td>BORROME, KATHERINE</td><td>Absent on the assessment test.</td></tr><tr><td>8975</td><td>BRUNO, DANIELA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>6694</td><td>BUTCHER, MEGAN</td><td>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07</td></tr><tr><td>4429</td><td>DELGADO, STEVEN</td><td>Passed everything.</td></tr><tr><td>8077</td><td>FOULKE, DEVON</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>0118</td><td>GRISPINO, LAREINA</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>8848</td><td>HUAYTA, ANTHONY</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>6088</td><td>JAMES, SHAMEEKA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1565</td><td>LOPEZ, ADIEL</td><td>Passed everything.</td></tr><tr><td>3110</td><td>MANTAGAS, MARIA</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-08</td></tr><tr><td>6662</td><td>MORIARTY, APOLLONIA</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>8239</td><td>MUNDY, CHANEL</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>1143</td><td>ORTIZ, RAMON</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09</td></tr><tr><td>7401</td><td>QUEZADA, JOHNNY</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-06<BR>104-topic-07</td></tr><tr><td>4615</td><td>QUIRK, JOSEPH</td><td>104-topic-03<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08</td></tr><tr><td>4983</td><td>RAMDAN, AMALAKY</td><td>104-topic-01<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-09<BR>104-topic-10</td></tr><tr><td>8055</td><td>RAMIREZ, MIGUEL</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-03<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07</td></tr><tr><td>1904</td><td>ROLON, ERIC</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>5393</td><td>SOSA, FARINA</td><td>104-topic-01<BR>104-topic-04<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-10</td></tr><tr><td>9238</td><td>SULAIMAN, KATHERINE</td><td>104-topic-01<BR>104-topic-02<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><tr><td>9949</td><td>YIGITSOY, SELIN</td><td>104-topic-01<BR>104-topic-03<BR>104-topic-05<BR>104-topic-06<BR>104-topic-07<BR>104-topic-08<BR>104-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-01 </td><td>(ABREU, SHIRLEY (7932))<BR>(ALVAREZ, ROGER (4268))<BR>(BARAN, FRANK (2760))<BR>(BAZERMAN, CARLY (0221))<BR>(BRUNO, DANIELA (8975))<BR>(FOULKE, DEVON (8077))<BR>(GRISPINO, LAREINA (0118))<BR>(HUAYTA, ANTHONY (8848))<BR>(JAMES, SHAMEEKA (6088))<BR>(MANTAGAS, MARIA (3110))<BR>(MORIARTY, APOLLONIA (6662))<BR>(MUNDY, CHANEL (8239))<BR>(ORTIZ, RAMON (1143))<BR>(QUEZADA, JOHNNY (7401))<BR>(RAMDAN, AMALAKY (4983))<BR>(RAMIREZ, MIGUEL (8055))<BR>(ROLON, ERIC (1904))<BR>(SOSA, FARINA (5393))<BR>(SULAIMAN, KATHERINE (9238))<BR>(YIGITSOY, SELIN (9949))</td></tr><tr><td> 104-topic-02 </td><td>(ALVAREZ, ROGER (4268))<BR>(BARAN, FRANK (2760))<BR>(BRUNO, DANIELA (8975))<BR>(JAMES, SHAMEEKA (6088))<BR>(MORIARTY, APOLLONIA (6662))<BR>(MUNDY, CHANEL (8239))<BR>(QUEZADA, JOHNNY (7401))<BR>(RAMIREZ, MIGUEL (8055))<BR>(ROLON, ERIC (1904))<BR>(SULAIMAN, KATHERINE (9238))</td></tr><tr><td> 104-topic-03 </td><td>(ALVAREZ, ROGER (4268))<BR>(BRUNO, DANIELA (8975))<BR>(JAMES, SHAMEEKA (6088))<BR>(MUNDY, CHANEL (8239))<BR>(ORTIZ, RAMON (1143))<BR>(QUIRK, JOSEPH (4615))<BR>(RAMIREZ, MIGUEL (8055))<BR>(YIGITSOY, SELIN (9949))</td></tr><tr><td> 104-topic-04 </td><td>(ABREU, SHIRLEY (7932))<BR>(ALVAREZ, ROGER (4268))<BR>(BECKFORD-_BENJAMIN, MAKAILA (5676))<BR>(BRUNO, DANIELA (8975))<BR>(BUTCHER, MEGAN (6694))<BR>(GRISPINO, LAREINA (0118))<BR>(HUAYTA, ANTHONY (8848))<BR>(MORIARTY, APOLLONIA (6662))<BR>(MUNDY, CHANEL (8239))<BR>(ORTIZ, RAMON (1143))<BR>(QUEZADA, JOHNNY (7401))<BR>(RAMIREZ, MIGUEL (8055))<BR>(ROLON, ERIC (1904))<BR>(SOSA, FARINA (5393))</td></tr><tr><td> 104-topic-05 </td><td>(ABREU, SHIRLEY (7932))<BR>(ALVAREZ, ROGER (4268))<BR>(BARAN, FRANK (2760))<BR>(BAZERMAN, CARLY (0221))<BR>(BECKFORD-_BENJAMIN, MAKAILA (5676))<BR>(BRUNO, DANIELA (8975))<BR>(BUTCHER, MEGAN (6694))<BR>(FOULKE, DEVON (8077))<BR>(GRISPINO, LAREINA (0118))<BR>(HUAYTA, ANTHONY (8848))<BR>(JAMES, SHAMEEKA (6088))<BR>(MANTAGAS, MARIA (3110))<BR>(MORIARTY, APOLLONIA (6662))<BR>(MUNDY, CHANEL (8239))<BR>(ORTIZ, RAMON (1143))<BR>(RAMDAN, AMALAKY (4983))<BR>(RAMIREZ, MIGUEL (8055))<BR>(ROLON, ERIC (1904))<BR>(SOSA, FARINA (5393))<BR>(YIGITSOY, SELIN (9949))</td></tr><tr><td> 104-topic-06 </td><td>(ABREU, SHIRLEY (7932))<BR>(ALVAREZ, ROGER (4268))<BR>(BARAN, FRANK (2760))<BR>(BAZERMAN, CARLY (0221))<BR>(BECKFORD-_BENJAMIN, MAKAILA (5676))<BR>(BRUNO, DANIELA (8975))<BR>(BUTCHER, MEGAN (6694))<BR>(FOULKE, DEVON (8077))<BR>(GRISPINO, LAREINA (0118))<BR>(HUAYTA, ANTHONY (8848))<BR>(JAMES, SHAMEEKA (6088))<BR>(MANTAGAS, MARIA (3110))<BR>(MORIARTY, APOLLONIA (6662))<BR>(MUNDY, CHANEL (8239))<BR>(ORTIZ, RAMON (1143))<BR>(QUEZADA, JOHNNY (7401))<BR>(QUIRK, JOSEPH (4615))<BR>(RAMDAN, AMALAKY (4983))<BR>(RAMIREZ, MIGUEL (8055))<BR>(ROLON, ERIC (1904))<BR>(SOSA, FARINA (5393))<BR>(SULAIMAN, KATHERINE (9238))<BR>(YIGITSOY, SELIN (9949))</td></tr><tr><td> 104-topic-07 </td><td>(ABREU, SHIRLEY (7932))<BR>(ALVAREZ, ROGER (4268))<BR>(BARAN, FRANK (2760))<BR>(BECKFORD-_BENJAMIN, MAKAILA (5676))<BR>(BRUNO, DANIELA (8975))<BR>(BUTCHER, MEGAN (6694))<BR>(FOULKE, DEVON (8077))<BR>(GRISPINO, LAREINA (0118))<BR>(HUAYTA, ANTHONY (8848))<BR>(JAMES, SHAMEEKA (6088))<BR>(MORIARTY, APOLLONIA (6662))<BR>(MUNDY, CHANEL (8239))<BR>(ORTIZ, RAMON (1143))<BR>(QUEZADA, JOHNNY (7401))<BR>(QUIRK, JOSEPH (4615))<BR>(RAMDAN, AMALAKY (4983))<BR>(RAMIREZ, MIGUEL (8055))<BR>(ROLON, ERIC (1904))<BR>(SOSA, FARINA (5393))<BR>(SULAIMAN, KATHERINE (9238))<BR>(YIGITSOY, SELIN (9949))</td></tr><tr><td> 104-topic-08 </td><td>(ABREU, SHIRLEY (7932))<BR>(BAZERMAN, CARLY (0221))<BR>(BECKFORD-_BENJAMIN, MAKAILA (5676))<BR>(FOULKE, DEVON (8077))<BR>(GRISPINO, LAREINA (0118))<BR>(HUAYTA, ANTHONY (8848))<BR>(JAMES, SHAMEEKA (6088))<BR>(MANTAGAS, MARIA (3110))<BR>(MUNDY, CHANEL (8239))<BR>(ORTIZ, RAMON (1143))<BR>(QUIRK, JOSEPH (4615))<BR>(RAMDAN, AMALAKY (4983))<BR>(SULAIMAN, KATHERINE (9238))<BR>(YIGITSOY, SELIN (9949))</td></tr><tr><td> 104-topic-09 </td><td>(ABREU, SHIRLEY (7932))<BR>(ALVAREZ, ROGER (4268))<BR>(BARAN, FRANK (2760))<BR>(BECKFORD-_BENJAMIN, MAKAILA (5676))<BR>(HUAYTA, ANTHONY (8848))<BR>(JAMES, SHAMEEKA (6088))<BR>(MORIARTY, APOLLONIA (6662))<BR>(MUNDY, CHANEL (8239))<BR>(ORTIZ, RAMON (1143))<BR>(RAMDAN, AMALAKY (4983))</td></tr><tr><td> 104-topic-10 </td><td>(ALVAREZ, ROGER (4268))<BR>(BARAN, FRANK (2760))<BR>(BECKFORD-_BENJAMIN, MAKAILA (5676))<BR>(BRUNO, DANIELA (8975))<BR>(FOULKE, DEVON (8077))<BR>(GRISPINO, LAREINA (0118))<BR>(HUAYTA, ANTHONY (8848))<BR>(JAMES, SHAMEEKA (6088))<BR>(MORIARTY, APOLLONIA (6662))<BR>(MUNDY, CHANEL (8239))<BR>(RAMDAN, AMALAKY (4983))<BR>(ROLON, ERIC (1904))<BR>(SOSA, FARINA (5393))<BR>(SULAIMAN, KATHERINE (9238))<BR>(YIGITSOY, SELIN (9949))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>