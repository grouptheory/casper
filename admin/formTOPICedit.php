<html>
<body bgcolor="#FF9949">
   <a name="(top)"> </a>

<table cellspacing="0" border="0" cellpadding="10" width="680" bgcolor="FFFF99" align="center">
<caption>
     <font color="000066" size="4">   Edit Topics
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
$query_Topic_Name =("SELECT ID,Name FROM TOPIC ORDER BY Name") or die(mysql_error());
$myresult_Topic_Name = mysql_query($query_Topic_Name);
$rows_Topic_Name = mysql_numrows($myresult_Topic_Name);
/*
 * If there are no topics... say so.
 */
if($rows_Topic_Name == 0) { echo "No topic listed";}
/*
 * If there are some topics... iterate through them in a loop and list
 * each name.
 */

for($i=0; $i<$rows_Topic_Name; $i++)
   {
     echo "<tr colspan=\"6\" width=\"65\">";
      $TopicName = mysql_result($myresult_Topic_Name, $i, "Name");
      $TopicID = mysql_result($myresult_Topic_Name, $i, "ID");
      $tabindex = $i + 1;

      echo "<form action=\"processTOPICupdate.php\" method=\"POST\">";

      echo "<td><input type=\"text\" name=\"topic_name\" value=\"$TopicName\" size =\"60\" tabindex=\"$tabindex\"></td>";
      echo "<td><input type=\"hidden\" name=\"topic_id\" value=\"$TopicID\"</td>";
      echo "<td><input type=\"submit\" name=\"button\" value=\"Update\"></td>";
    
      echo "</form></td>";
     
      echo "<form action=\"processTOPICdelete.php\" method=\"POST\">";
      echo "<td><input type=\"hidden\" name=\"topic_id\" value=\"$TopicID\"</td>";
      echo "<td><input type=\"submit\" name=\"button\" value=\"Delete\"></td>";
      echo "</form></td>";

     echo "</tr>";
   }


/*
 * Disconnect from the DB
 */
include("disconnect.php");
?>

<tr>
   <td align="center" colspan="6">
     <hr width="100%" size="6" color="gray">
   </td>
</tr>
<tr>
   <td align="center" colspan="6">
     <a href="#top" > Go To Top </a>
   </td>
</tr>
</table>

</body>
</html>

