#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 108 - SOCIAL_SCI_MATH (2010 SP)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>108</td></tr><tr><td align='center'>Semester</td> <td align='center'>SP</td></tr><tr><td align='center'>Section</td> <td align='center'>02</td></tr><tr><td align='center'>Year</td> <td align='center'>2010</td></tr><tr><td align='center'>Prof.</td> <td align='center'>KUGAN_T</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>0413</td><td>AQUINO, ARIEL</td><td>108-topic-04</td></tr><tr><td>3488</td><td>BUSTAMANTE, KATHERINE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-05<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>4213</td><td>CHERON, PIERRE</td><td>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-08<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2954</td><td>COOKE, TIFFANY</td><td>108-topic-03<BR>108-topic-09</td></tr><tr><td>8083</td><td>DERHEMI, XHULIA</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>7440</td><td>EVERETT, NAOMI</td><td>108-topic-03<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09</td></tr><tr><td>0819</td><td>GORDILLO, VICTOR</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-09</td></tr><tr><td>5409</td><td>GRANT, KAREN</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05</td></tr><tr><td>1030</td><td>GREENE, JADE</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>9815</td><td>LEE, JAMES</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>5528</td><td>LEVESQUE, CATHRYN</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>8335</td><td>LIU, JIANHUA</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>5258</td><td>LOPES, JACK</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>1522</td><td>LUCIANO, ANTONIA</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>1638</td><td>MARKU, JACQUELINE</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2948</td><td>MCDOWELL, QUIEMA</td><td>Absent on the assessment test.</td></tr><tr><td>1900</td><td>MERCEDES, JUDI</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>8410</td><td>MORAN, RONY</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-06</td></tr><tr><td>4733</td><td>MRKULIC, SAMRA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-06<BR>108-topic-08<BR>108-topic-10</td></tr><tr><td>3947</td><td>MULLIGAN, LANNETTEA</td><td>Absent on the assessment test.</td></tr><tr><td>9865</td><td>NEVINS, WILLIAM</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-04<BR>108-topic-07<BR>108-topic-10</td></tr><tr><td>9428</td><td>OLSEN, CHRISTOPHER</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-03<BR>108-topic-05<BR>108-topic-06</td></tr><tr><td>8103</td><td>OTTOMANELLI, CHRISTOPHER</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09</td></tr><tr><td>3241</td><td>PIENCZYKOWSKI, YVONNE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>1391</td><td>PUPIALES, STEPHANIE</td><td>108-topic-02<BR>108-topic-03<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>4593</td><td>RABINOVICH, NAUM</td><td>108-topic-03<BR>108-topic-04</td></tr><tr><td>9616</td><td>ROMERO, JACQUELINE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-10</td></tr><tr><td>2578</td><td>ROSARIO, VANESSA</td><td>108-topic-01<BR>108-topic-02<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>2744</td><td>SANTANA, ADRIANA</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-10</td></tr><tr><td>8913</td><td>SEALY, KATRINA</td><td>Absent on the assessment test.</td></tr><tr><td>6977</td><td>SHEIKH, SHARIQUE</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-07<BR>108-topic-09<BR>108-topic-10</td></tr><tr><td>4154</td><td>SNIPE, SEIDRON</td><td>108-topic-01<BR>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-06<BR>108-topic-08<BR>108-topic-09</td></tr><tr><td>6249</td><td>VALERIUS, JULIANNA</td><td>108-topic-03<BR>108-topic-04<BR>108-topic-05<BR>108-topic-09<BR>108-topic-10</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 108-topic-01 </td><td>(BUSTAMANTE, KATHERINE (3488))<BR>(GORDILLO, VICTOR (0819))<BR>(LEE, JAMES (9815))<BR>(LOPES, JACK (5258))<BR>(MRKULIC, SAMRA (4733))<BR>(NEVINS, WILLIAM (9865))<BR>(OLSEN, CHRISTOPHER (9428))<BR>(OTTOMANELLI, CHRISTOPHER (8103))<BR>(PIENCZYKOWSKI, YVONNE (3241))<BR>(ROMERO, JACQUELINE (9616))<BR>(ROSARIO, VANESSA (2578))<BR>(SANTANA, ADRIANA (2744))<BR>(SHEIKH, SHARIQUE (6977))<BR>(SNIPE, SEIDRON (4154))</td></tr><tr><td> 108-topic-02 </td><td>(GORDILLO, VICTOR (0819))<BR>(LIU, JIANHUA (8335))<BR>(MERCEDES, JUDI (1900))<BR>(NEVINS, WILLIAM (9865))<BR>(OLSEN, CHRISTOPHER (9428))<BR>(PUPIALES, STEPHANIE (1391))<BR>(ROSARIO, VANESSA (2578))</td></tr><tr><td> 108-topic-03 </td><td>(BUSTAMANTE, KATHERINE (3488))<BR>(COOKE, TIFFANY (2954))<BR>(DERHEMI, XHULIA (8083))<BR>(EVERETT, NAOMI (7440))<BR>(GORDILLO, VICTOR (0819))<BR>(GRANT, KAREN (5409))<BR>(GREENE, JADE (1030))<BR>(LEE, JAMES (9815))<BR>(LEVESQUE, CATHRYN (5528))<BR>(LIU, JIANHUA (8335))<BR>(LOPES, JACK (5258))<BR>(LUCIANO, ANTONIA (1522))<BR>(MARKU, JACQUELINE (1638))<BR>(MERCEDES, JUDI (1900))<BR>(MORAN, RONY (8410))<BR>(MRKULIC, SAMRA (4733))<BR>(NEVINS, WILLIAM (9865))<BR>(OLSEN, CHRISTOPHER (9428))<BR>(OTTOMANELLI, CHRISTOPHER (8103))<BR>(PIENCZYKOWSKI, YVONNE (3241))<BR>(PUPIALES, STEPHANIE (1391))<BR>(RABINOVICH, NAUM (4593))<BR>(ROMERO, JACQUELINE (9616))<BR>(SANTANA, ADRIANA (2744))<BR>(SHEIKH, SHARIQUE (6977))<BR>(SNIPE, SEIDRON (4154))<BR>(VALERIUS, JULIANNA (6249))</td></tr><tr><td> 108-topic-04 </td><td>(AQUINO, ARIEL (0413))<BR>(CHERON, PIERRE (4213))<BR>(DERHEMI, XHULIA (8083))<BR>(GRANT, KAREN (5409))<BR>(GREENE, JADE (1030))<BR>(LEE, JAMES (9815))<BR>(LEVESQUE, CATHRYN (5528))<BR>(LIU, JIANHUA (8335))<BR>(LOPES, JACK (5258))<BR>(LUCIANO, ANTONIA (1522))<BR>(MARKU, JACQUELINE (1638))<BR>(MERCEDES, JUDI (1900))<BR>(MORAN, RONY (8410))<BR>(MRKULIC, SAMRA (4733))<BR>(NEVINS, WILLIAM (9865))<BR>(OTTOMANELLI, CHRISTOPHER (8103))<BR>(PIENCZYKOWSKI, YVONNE (3241))<BR>(RABINOVICH, NAUM (4593))<BR>(ROMERO, JACQUELINE (9616))<BR>(ROSARIO, VANESSA (2578))<BR>(SANTANA, ADRIANA (2744))<BR>(SHEIKH, SHARIQUE (6977))<BR>(SNIPE, SEIDRON (4154))<BR>(VALERIUS, JULIANNA (6249))</td></tr><tr><td> 108-topic-05 </td><td>(BUSTAMANTE, KATHERINE (3488))<BR>(CHERON, PIERRE (4213))<BR>(DERHEMI, XHULIA (8083))<BR>(EVERETT, NAOMI (7440))<BR>(GRANT, KAREN (5409))<BR>(LEE, JAMES (9815))<BR>(LEVESQUE, CATHRYN (5528))<BR>(LOPES, JACK (5258))<BR>(LUCIANO, ANTONIA (1522))<BR>(MARKU, JACQUELINE (1638))<BR>(MERCEDES, JUDI (1900))<BR>(OLSEN, CHRISTOPHER (9428))<BR>(OTTOMANELLI, CHRISTOPHER (8103))<BR>(PIENCZYKOWSKI, YVONNE (3241))<BR>(ROMERO, JACQUELINE (9616))<BR>(ROSARIO, VANESSA (2578))<BR>(SANTANA, ADRIANA (2744))<BR>(SHEIKH, SHARIQUE (6977))<BR>(SNIPE, SEIDRON (4154))<BR>(VALERIUS, JULIANNA (6249))</td></tr><tr><td> 108-topic-06 </td><td>(CHERON, PIERRE (4213))<BR>(DERHEMI, XHULIA (8083))<BR>(EVERETT, NAOMI (7440))<BR>(GREENE, JADE (1030))<BR>(LEE, JAMES (9815))<BR>(LIU, JIANHUA (8335))<BR>(LOPES, JACK (5258))<BR>(MARKU, JACQUELINE (1638))<BR>(MERCEDES, JUDI (1900))<BR>(MORAN, RONY (8410))<BR>(MRKULIC, SAMRA (4733))<BR>(OLSEN, CHRISTOPHER (9428))<BR>(OTTOMANELLI, CHRISTOPHER (8103))<BR>(PIENCZYKOWSKI, YVONNE (3241))<BR>(ROMERO, JACQUELINE (9616))<BR>(ROSARIO, VANESSA (2578))<BR>(SHEIKH, SHARIQUE (6977))<BR>(SNIPE, SEIDRON (4154))</td></tr><tr><td> 108-topic-07 </td><td>(BUSTAMANTE, KATHERINE (3488))<BR>(CHERON, PIERRE (4213))<BR>(GREENE, JADE (1030))<BR>(LEE, JAMES (9815))<BR>(LEVESQUE, CATHRYN (5528))<BR>(MARKU, JACQUELINE (1638))<BR>(NEVINS, WILLIAM (9865))<BR>(OTTOMANELLI, CHRISTOPHER (8103))<BR>(SHEIKH, SHARIQUE (6977))</td></tr><tr><td> 108-topic-08 </td><td>(CHERON, PIERRE (4213))<BR>(MRKULIC, SAMRA (4733))<BR>(SNIPE, SEIDRON (4154))</td></tr><tr><td> 108-topic-09 </td><td>(CHERON, PIERRE (4213))<BR>(COOKE, TIFFANY (2954))<BR>(EVERETT, NAOMI (7440))<BR>(GORDILLO, VICTOR (0819))<BR>(LOPES, JACK (5258))<BR>(LUCIANO, ANTONIA (1522))<BR>(MARKU, JACQUELINE (1638))<BR>(OTTOMANELLI, CHRISTOPHER (8103))<BR>(PUPIALES, STEPHANIE (1391))<BR>(ROSARIO, VANESSA (2578))<BR>(SHEIKH, SHARIQUE (6977))<BR>(SNIPE, SEIDRON (4154))<BR>(VALERIUS, JULIANNA (6249))</td></tr><tr><td> 108-topic-10 </td><td>(BUSTAMANTE, KATHERINE (3488))<BR>(CHERON, PIERRE (4213))<BR>(GREENE, JADE (1030))<BR>(LEE, JAMES (9815))<BR>(LEVESQUE, CATHRYN (5528))<BR>(LIU, JIANHUA (8335))<BR>(LOPES, JACK (5258))<BR>(LUCIANO, ANTONIA (1522))<BR>(MARKU, JACQUELINE (1638))<BR>(MERCEDES, JUDI (1900))<BR>(MRKULIC, SAMRA (4733))<BR>(NEVINS, WILLIAM (9865))<BR>(PIENCZYKOWSKI, YVONNE (3241))<BR>(PUPIALES, STEPHANIE (1391))<BR>(ROMERO, JACQUELINE (9616))<BR>(ROSARIO, VANESSA (2578))<BR>(SANTANA, ADRIANA (2744))<BR>(SHEIKH, SHARIQUE (6977))<BR>(VALERIUS, JULIANNA (6249))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
