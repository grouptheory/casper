
<html>
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 18 June 2008), see www.w3.org">
  <title></title>
</head>
<body bgcolor="#FF9949">
  <br>
  <br>
  <table bgcolor="#FFFF99" cellspacing="0" cellpadding="10" border="0"
  width="500" align="center">
    <caption>
       <font color="#000066" size="5">New Topic Added</font>
    </caption>
    <tr>
       <td align="center"><?php include("connect.php");
       $Topic1=$_POST['top1'];
       echo "$Topic1<BR>";
             mysql_query("INSERT INTO TOPIC(Name) VALUES(\"$Topic1\");") or die(mysql_error());
       echo "The topic is added to the database ";
    
       include("disconnect.php");
       ?></td>
    </tr>
    <tr>
       <td width="100%">
          <hr size="3" color="gray">
       </td>
    </tr>
    <tr>
       <td align="center"><a href=
       "javascript:javascript:history.go(-1)">Return to Previous
       Page</a></td>
    </tr>
  </table>
</body>
</html>
