
<html>
<body bgcolor="#FF9949"><BR>
   <a name="(top)"> </a>

<table cellspacing="0" border="0" cellpadding="8" width="700" bgcolor="FFFF99" align="center">
<caption>
     <font color="000066" size="4">   Administrator Email Addresses
     </font>
</caption>

<?php


/*
 * Connect to the DB
 */
include("connect.php");

/*
 
 */
$query_admin_email =("SELECT ID, Email, Name FROM ADMIN ORDER BY ID") or die(mysql_error());
$myresult_admin_email = mysql_query($query_admin_email);
$rows_admin_email = mysql_numrows($myresult_admin_email);
/*
 
 */
if($rows_admin_email == 0) { echo "No administrator's listed";}
/*
 
 */

for($i=0; $i<$rows_admin_email; $i++)
   {
     echo "<tr colspan=\"4\">";
      $admin_email = mysql_result($myresult_admin_email, $i, "Email");
      $admin_id = mysql_result($myresult_admin_email, $i, "ID");
      $admin_name = mysql_result($myresult_admin_email, $i, "Name");
      $tabindex = $i+1;
      echo "<td align=\"right\"> $admin_name </td>";
      
      echo "<form action=\"processADMINupdate.php\" method=\"POST\">";
      echo "<input type=\"hidden\" name=\"admin_id\" value=\"$admin_id\">
                <input type=\"hidden\" name=\"admin_name\" value=\"$admin_name\">";
      echo "<td><input type=\"text\" name=\"admin_email\" value=\"$admin_email\" size =\"40\" tabindex=\"$tabindex\"></td>";
      echo "<td align=\"left\"><input type=\"submit\" name=\"button\" value=\"Update\"></td>";
         
      echo "</form></td>";
      echo "</tr>";
   }

/*
 * Disconnect from the DB
 */
include("disconnect.php");
?>

<tr>
   <td align="center" colspan="4">
     <hr width="100%" size="4" color="gray">
   </td>
</tr>
<tr>
   <td align="center" colspan="4">
     <a href="#top" > Go To Top </a>
   </td>
</tr>
</table>

</body>
</html>

