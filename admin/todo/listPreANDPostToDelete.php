<html>  <body bgcolor="#FF6633"> <a name="(top)"></a><br><br>
<form method ="POST" action="DELETEpreANDpostreq.php" name="deletePrePostReq">
<table cellspacing="0" border="0" cellpadding="0" width="650" bgcolor="FFCC33" align="center">
<caption><font color="000066" size="5"> Choose and Delete Pre and Post Requisite Course </font></caption>
<tr><td>
<fieldset style="border-width:0; background:#FFCC33; width:600">
<table width="100%">

<?php
mysql_connect("localhost", "root", "mandy10312") or die(mysql_error());/*echo "Connected to the local host<br>";*/
mysql_select_db("CASPER") or die(mysql_error());/*echo "Connected to the database <br>";*/

$query_pre ="SELECT Course_ID_Pre FROM PREREQ";
$query_post ="SELECT Course_ID_Post FROM PREREQ";
$query_pre_number = "SELECT Number FROM COURSE, PREREQ WHERE COURSE.ID = PREREQ.Course_ID_Pre";
$query_post_number = "SELECT Number FROM COURSE, PREREQ WHERE COURSE.ID = PREREQ.Course_ID_Post";

$myresult_pre = mysql_query($query_pre) or die(mysql_error());
$myresult_post = mysql_query($query_post) or die(mysql_error());
$myresult_pre_number = mysql_query($query_pre_number) or die(mysql_error());
$myresult_post__number = mysql_query($query_post_number) or die(mysql_error());

$rows_pre = mysql_numrows($myresult_pre);
$rows_post = mysql_numrows($myresult_post);
$rows_pre_number = mysql_numrows($myresult_pre_number);
$rows_post_number = mysql_numrows($myresult_post_number);

echo '<tr><td width="100" rowspan ="2" valign="top" align="right">';
echo "PREREQUISITE: ";
echo "</td>";
if($rows_pre == 0) {echo "No PREREQ course listed.";}

for($i=0; $i<$rows_pre; $i++ )
  { $Course_ID_Pre = mysql_result($myresult_pre, $i, "Course_ID_Pre");
    $Course_Pre_Number = mysql_result($myresult_pre_number, $i,"Number");
    echo '<td width="550" valign="top" align="center">';
    echo "<input type=\"radio\" name= \"pre_course_name\" value =\"$Course_Pre_Number\">";
    echo "$Course_Pre_Number";   
    echo "&nbsp<input type=\"hidden\" name=\"course_id_pre\" value= \"$Course_ID_Pre\">";
  }

echo "</td></tr>";
echo "<tr><td></td></tr>";
echo '<tr><td width="100" valign="top" align="right">';
echo "POSTREQUISITE:</td";

if($rows_post == 0) {echo "NO POSTREQUISITE course listed<br>";}
for($i=0; $i<$rows_post; $i++)
  {
    $Course_ID_Post = mysql_result($myresult_post, $i, "Course_ID_Post");
    $Course_Post_Number = mysql_result($myresult_post_number, $i,"Number");
    echo '<td width="550" valign="top" align="center">';
    echo "<input type=\"radio\" name= \"post_course_name\" value =\"$Course_Post_Number\">";
    echo "$Course_Post_Number";   
    echo "&nbsp<input type=\"hidden\" name=\"course_id_post\" value= \"$Course_ID_Post\">";
  }
mysql_close();
?>
</table>
</fieldset>
<tr> <td align="center">
<input type="submit" name="button" value ="Delete Chosen Course">
<input type="reset" value ="Clear Choices"> </td></tr>
<tr><td align="center">
<hr width="100%" size="3" color="gray">
<a href ="#top"> Return to Top </a>
</td></tr>
</table>
</form>
</body></html>