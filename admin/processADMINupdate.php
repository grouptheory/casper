
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
       <font color="#000066" size="5"> Update Admin Email</font>
    </caption>
    <tr>
       <td align="center"><br>

<?php 
       include("connect.php");
      
       $admin_email=$_POST['admin_email'];
       $admin_id=$_POST['admin_id'];
       $admin_name=$_POST['admin_name'];

       mysql_query("UPDATE ADMIN SET Email=\"$admin_email\" WHERE ID=\"$admin_id\";") or die(mysql_error());

       echo "Email < $admin_email > has been set to admin $admin_name!<BR>";

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
