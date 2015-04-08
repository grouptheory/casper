
<html>
<body bgcolor="#FF9949">
   <a name="(top)"> </a>
<form method ="POST" action="processTOPICadd.php" name="addTopic">
<table cellspacing="0" border="0" cellpadding="10" width="720" bgcolor="FFFF99" align="center">
<caption>
     <font color="000066" size="4">   Add Topics
     </font>
</caption>
<tr>
   <td align="center">
   <fieldset style="border-width:0; background:#FFCC49; width:700">
   <table width="100%">
       <tr>
          <td size="250" colspan="2" align="right"> New Topic:
          </td>
          <td><input type="text" name ="top1" size ="60" tabindex="1">
          </td>
       </tr>
     <tr>
       <td>
       </td>
       <td align="center" colspan="2"><input type="submit" name="button" value="ADD" tabindex="2">
          <input type="reset" name="clear" value="CANCEL" tabindex="3">
       </td>
     </tr>
     <tr>
       <td size="250" colspan="2" valign="top" align="right"> Existing Topics:
       </td>
       <td>
<!-- ********** PHP begins *********** -->
<?php
/*
 * Connect to the DB
 */
include("connect.php");
/*
 * Get list of all topic names
 */
$query_Topic_Name =("SELECT Name FROM TOPIC") or die(mysql_error());
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
      $TopicName = mysql_result($myresult_Topic_Name, $i, "Name");
      echo "&nbsp $TopicName<br>";
   }
/*
 * Disconnect from the DB
 */
include("disconnect.php");
?>
<!-- ********** PHP ends *********** -->
      </td>
    </tr>
<tr>
   <td align="center" colspan="3">
     <hr width="100%" size="3" color="gray">
   </td>
</tr>
<tr>
   <td align="center" colspan="3">
     <a href="#top" > Go To Top </a>
   </td>
</tr>
</td>
</tr>
</table>
</fieldset>
</table>
</form>
</body>
</html>
