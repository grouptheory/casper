#!/usr/bin/php -q
<?
include("/var/www/html/casper/modules/phpmailer/email.php");



$email = "yuxiabuting@hotmail.com";
$name = "Chunhui Meng";
$subject = "ADMIN 104 - MODERN_MATH_2 (2009 FA)";
$body = "<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'><caption>---Course Information---</caption><tr><td align='center'>Course </td> <td align='center'>104</td></tr><tr><td align='center'>Semester</td> <td align='center'>FA</td></tr><tr><td align='center'>Section</td> <td align='center'>37</td></tr><tr><td align='center'>Year</td> <td align='center'>2009</td></tr><tr><td align='center'>Prof.</td> <td align='center'>PANNIZZO_F</td></tr></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td>8192</td><td>BICKRAM, CHANDANIE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6</td></tr><tr><td>6882</td><td>BOROJEVIC, NENAD</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>1924</td><td>BUENO, ADRIAN</td><td>Absent on the assessment test.</td></tr><tr><td>1657</td><td>CARABALLO, DENISE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>2691</td><td>DURO, JOANA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8</td></tr><tr><td>8783</td><td>FERRERA, JEFFREY</td><td>Absent on the assessment test.</td></tr><tr><td>2158</td><td>FLOCKE, ADAM</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-5<BR>104-topic-6</td></tr><tr><td>1900</td><td>HATIN, VICTORIA</td><td>Absent on the assessment test.</td></tr><tr><td>5730</td><td>JOHN-LEWIS, KARINE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>3556</td><td>LEWIS, TRICIA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>9371</td><td>LOPEZ, FAITH</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-3<BR>104-topic-4<BR>104-topic-6<BR>104-topic-7<BR>104-topic-9</td></tr><tr><td>1851</td><td>MEDINA, ADRIEL</td><td>104-topic-10<BR>104-topic-4<BR>104-topic-5<BR>104-topic-9</td></tr><tr><td>0344</td><td>MONGE, JOSE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>9900</td><td>MUDRENKO, ELVIRA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>3864</td><td>OCHOA, DAVID</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>6406</td><td>ORTIZ, NATALIE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>3700</td><td>ROBLES, GEORGE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>1577</td><td>SINGH, PREETEKA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>7003</td><td>SULLIVAN, ROBERT</td><td>104-topic-3<BR>104-topic-4Absent on the assessment test.</td></tr><tr><td>4708</td><td>TAVAREZ, GENESIS</td><td>Absent on the assessment test.</td></tr><tr><td>6073</td><td>TAVERAS, EDWIN</td><td>104-topic-10<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>6084</td><td>TAVERAS, JULISSA</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>3178</td><td>THOMAS-PAYNE, D'ARCY</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7</td></tr><tr><td>0105</td><td>TORRES, KATHERINE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><tr><td>7583</td><td>VELEZ, ALEXIS</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6</td></tr><tr><td>8845</td><td>WONG, ANDY</td><td>104-topic-3<BR>104-topic-5<BR>104-topic-6</td></tr><tr><td>7323</td><td>YACELGA, KATHERINE</td><td>104-topic-1<BR>104-topic-10<BR>104-topic-2<BR>104-topic-3<BR>104-topic-4<BR>104-topic-5<BR>104-topic-6<BR>104-topic-7<BR>104-topic-8<BR>104-topic-9</td></tr><caption>---Tutoring Required(By Student)---</caption></table><br><table cellspacing='3' cellpadding='3' border='5' width='600' align='center'><tr><td> 104-topic-1 </td><td>(BICKRAM, CHANDANIE (8192))<BR>(BOROJEVIC, NENAD (6882))<BR>(CARABALLO, DENISE (1657))<BR>(DURO, JOANA (2691))<BR>(FLOCKE, ADAM (2158))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(LEWIS, TRICIA (3556))<BR>(LOPEZ, FAITH (9371))<BR>(MONGE, JOSE (0344))<BR>(MUDRENKO, ELVIRA (9900))<BR>(OCHOA, DAVID (3864))<BR>(ORTIZ, NATALIE (6406))<BR>(ROBLES, GEORGE (3700))<BR>(SINGH, PREETEKA (1577))<BR>(TAVERAS, JULISSA (6084))<BR>(THOMAS-PAYNE, D'ARCY (3178))<BR>(TORRES, KATHERINE (0105))<BR>(VELEZ, ALEXIS (7583))<BR>(YACELGA, KATHERINE (7323))</td></tr><tr><td> 104-topic-10 </td><td>(BICKRAM, CHANDANIE (8192))<BR>(BOROJEVIC, NENAD (6882))<BR>(CARABALLO, DENISE (1657))<BR>(DURO, JOANA (2691))<BR>(FLOCKE, ADAM (2158))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(LEWIS, TRICIA (3556))<BR>(LOPEZ, FAITH (9371))<BR>(MEDINA, ADRIEL (1851))<BR>(MONGE, JOSE (0344))<BR>(MUDRENKO, ELVIRA (9900))<BR>(OCHOA, DAVID (3864))<BR>(ORTIZ, NATALIE (6406))<BR>(ROBLES, GEORGE (3700))<BR>(SINGH, PREETEKA (1577))<BR>(TAVERAS, EDWIN (6073))<BR>(TAVERAS, JULISSA (6084))<BR>(THOMAS-PAYNE, D'ARCY (3178))<BR>(TORRES, KATHERINE (0105))<BR>(VELEZ, ALEXIS (7583))<BR>(YACELGA, KATHERINE (7323))</td></tr><tr><td> 104-topic-2 </td><td>(BICKRAM, CHANDANIE (8192))<BR>(BOROJEVIC, NENAD (6882))<BR>(DURO, JOANA (2691))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(LEWIS, TRICIA (3556))<BR>(MONGE, JOSE (0344))<BR>(MUDRENKO, ELVIRA (9900))<BR>(OCHOA, DAVID (3864))<BR>(ORTIZ, NATALIE (6406))<BR>(ROBLES, GEORGE (3700))<BR>(SINGH, PREETEKA (1577))<BR>(THOMAS-PAYNE, D'ARCY (3178))<BR>(TORRES, KATHERINE (0105))<BR>(VELEZ, ALEXIS (7583))<BR>(YACELGA, KATHERINE (7323))</td></tr><tr><td> 104-topic-3 </td><td>(BOROJEVIC, NENAD (6882))<BR>(DURO, JOANA (2691))<BR>(LEWIS, TRICIA (3556))<BR>(LOPEZ, FAITH (9371))<BR>(MUDRENKO, ELVIRA (9900))<BR>(ORTIZ, NATALIE (6406))<BR>(SINGH, PREETEKA (1577))<BR>(SULLIVAN, ROBERT (7003))<BR>(TORRES, KATHERINE (0105))<BR>(WONG, ANDY (8845))<BR>(YACELGA, KATHERINE (7323))</td></tr><tr><td> 104-topic-4 </td><td>(BICKRAM, CHANDANIE (8192))<BR>(BOROJEVIC, NENAD (6882))<BR>(CARABALLO, DENISE (1657))<BR>(DURO, JOANA (2691))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(LEWIS, TRICIA (3556))<BR>(LOPEZ, FAITH (9371))<BR>(MEDINA, ADRIEL (1851))<BR>(MONGE, JOSE (0344))<BR>(MUDRENKO, ELVIRA (9900))<BR>(OCHOA, DAVID (3864))<BR>(ORTIZ, NATALIE (6406))<BR>(ROBLES, GEORGE (3700))<BR>(SINGH, PREETEKA (1577))<BR>(SULLIVAN, ROBERT (7003))<BR>(THOMAS-PAYNE, D'ARCY (3178))<BR>(TORRES, KATHERINE (0105))<BR>(VELEZ, ALEXIS (7583))<BR>(YACELGA, KATHERINE (7323))</td></tr><tr><td> 104-topic-5 </td><td>(BICKRAM, CHANDANIE (8192))<BR>(BOROJEVIC, NENAD (6882))<BR>(CARABALLO, DENISE (1657))<BR>(DURO, JOANA (2691))<BR>(FLOCKE, ADAM (2158))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(LEWIS, TRICIA (3556))<BR>(MEDINA, ADRIEL (1851))<BR>(MONGE, JOSE (0344))<BR>(MUDRENKO, ELVIRA (9900))<BR>(ORTIZ, NATALIE (6406))<BR>(ROBLES, GEORGE (3700))<BR>(SINGH, PREETEKA (1577))<BR>(TAVERAS, JULISSA (6084))<BR>(THOMAS-PAYNE, D'ARCY (3178))<BR>(TORRES, KATHERINE (0105))<BR>(VELEZ, ALEXIS (7583))<BR>(WONG, ANDY (8845))<BR>(YACELGA, KATHERINE (7323))</td></tr><tr><td> 104-topic-6 </td><td>(BICKRAM, CHANDANIE (8192))<BR>(BOROJEVIC, NENAD (6882))<BR>(CARABALLO, DENISE (1657))<BR>(DURO, JOANA (2691))<BR>(FLOCKE, ADAM (2158))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(LEWIS, TRICIA (3556))<BR>(LOPEZ, FAITH (9371))<BR>(MONGE, JOSE (0344))<BR>(MUDRENKO, ELVIRA (9900))<BR>(OCHOA, DAVID (3864))<BR>(ORTIZ, NATALIE (6406))<BR>(ROBLES, GEORGE (3700))<BR>(SINGH, PREETEKA (1577))<BR>(TAVERAS, EDWIN (6073))<BR>(TAVERAS, JULISSA (6084))<BR>(THOMAS-PAYNE, D'ARCY (3178))<BR>(TORRES, KATHERINE (0105))<BR>(VELEZ, ALEXIS (7583))<BR>(WONG, ANDY (8845))<BR>(YACELGA, KATHERINE (7323))</td></tr><tr><td> 104-topic-7 </td><td>(BOROJEVIC, NENAD (6882))<BR>(CARABALLO, DENISE (1657))<BR>(DURO, JOANA (2691))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(LEWIS, TRICIA (3556))<BR>(LOPEZ, FAITH (9371))<BR>(MONGE, JOSE (0344))<BR>(MUDRENKO, ELVIRA (9900))<BR>(OCHOA, DAVID (3864))<BR>(ORTIZ, NATALIE (6406))<BR>(ROBLES, GEORGE (3700))<BR>(SINGH, PREETEKA (1577))<BR>(TAVERAS, EDWIN (6073))<BR>(TAVERAS, JULISSA (6084))<BR>(THOMAS-PAYNE, D'ARCY (3178))<BR>(TORRES, KATHERINE (0105))<BR>(YACELGA, KATHERINE (7323))</td></tr><tr><td> 104-topic-8 </td><td>(DURO, JOANA (2691))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(LEWIS, TRICIA (3556))<BR>(MONGE, JOSE (0344))<BR>(MUDRENKO, ELVIRA (9900))<BR>(ORTIZ, NATALIE (6406))<BR>(ROBLES, GEORGE (3700))<BR>(SINGH, PREETEKA (1577))<BR>(TAVERAS, JULISSA (6084))<BR>(TORRES, KATHERINE (0105))<BR>(YACELGA, KATHERINE (7323))</td></tr><tr><td> 104-topic-9 </td><td>(BOROJEVIC, NENAD (6882))<BR>(JOHN-LEWIS, KARINE (5730))<BR>(LEWIS, TRICIA (3556))<BR>(LOPEZ, FAITH (9371))<BR>(MEDINA, ADRIEL (1851))<BR>(MONGE, JOSE (0344))<BR>(MUDRENKO, ELVIRA (9900))<BR>(ORTIZ, NATALIE (6406))<BR>(ROBLES, GEORGE (3700))<BR>(SINGH, PREETEKA (1577))<BR>(TAVERAS, JULISSA (6084))<BR>(TORRES, KATHERINE (0105))<BR>(YACELGA, KATHERINE (7323))</td></tr><caption>---Tutoring Required(By Topic)---</caption></table><br>";
$altbody = "Please open this important email in an HTML-compatible browser!";
send_email($email, $name, $subject, $body, $altbody);
sleep(10);




?>
