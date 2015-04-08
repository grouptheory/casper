
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
       <font color="#000066" size="5"> Update Prof.Email</font>
    </caption>
    <tr>
       <td align="center"><br>

<?php 
       include("connect.php");
      
       $prof_email=$_POST['prof_email'];
       $prof_id=$_POST['prof_id'];
       $prof_name=$_POST['prof_name'];

       mysql_query("UPDATE PROF SET Email=\"$prof_email\" WHERE ID=\"$prof_id\";") or die(mysql_error());

       echo "Email < $prof_email > has been set to prof. $prof_name!<BR>";

       include("disconnect.php");
?>
      </td>
    </tr>

    <tr>
       <td width="100%">
          <hr size="3" color="gray">
       </td>
    </tr>

    <tr>
       <td align="center">
       <a href="javascript:javascript:history.go(-1)"> Return to Previous Page
       </a>
       </td>
    </tr>

  </table>
</body>
</html>
