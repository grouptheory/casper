
<html>
<body bgcolor="#FF9949"><BR>
   <a name="(top)"> </a>

<table cellspacing="0" border="0" cellpadding="8" width="720" bgcolor="FFFF99" align="center">
<caption>
     <font color="000066" size="4">   Instructor Email Addresses
     </font>
</caption>

<?php


/*
 * Connect to the DB
 */
include("connect.php");

/*
 * Get list of all topic names
 */
$query_prof_email =("SELECT ID, Email, Name FROM PROF ORDER BY Name") or die(mysql_error());
$myresult_prof_email = mysql_query($query_prof_email);
$rows_prof_email = mysql_numrows($myresult_prof_email);
/*
 * If there are no topics... say so.
 */
if($rows_prof_email == 0) { echo "No professor's listed";}
/*
 * If there are some topics... iterate through them in a loop and list
 * each name.
 */

for($i=0; $i<$rows_prof_email; $i++)
   {
     echo "<tr colspan=\"4\">";
      $prof_email = mysql_result($myresult_prof_email, $i, "Email");
      $prof_id = mysql_result($myresult_prof_email, $i, "ID");
      $prof_name = mysql_result($myresult_prof_email, $i, "Name");
      
      echo "<form action=\"processEMAILupdate.php\" method=\"POST\">";
      echo "<td align=\"right\">$prof_name</td>";
      $tabindex=$i+1;
         
      echo "<td><input type=\"text\" name=\"prof_email\" value=\"$prof_email\" size =\"40\" tabindex=\"$tabindex\"></td>";
      echo "<td><input type=\"hidden\" name=\"prof_id\" value=\"$prof_id\">
                <input type=\"hidden\" name=\"prof_name\" value=\"$prof_name\"></td>";
      echo "<td><input type=\"submit\" name=\"button\" value=\"Update\"></td>";
         
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

