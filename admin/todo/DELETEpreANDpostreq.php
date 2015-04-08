<html>
<body bgcolor="#FF6633"><br><br>
<table bgcolor="yellow" cellspacing="0" cellpadding="0" border="0" width="500" align="center">
<tr>
<?php

$Pre_Course_Name =$_POST['pre_course_name'];
$Post_Course_Name =$_POST['post_course_name'];
$Course_ID_Pre =$_POST['course_id_pre'];
$Course_ID_Post =$_POST['course_id_post'];

echo '<td rowspan="2" valign="top"> You have selected: </td>';
echo "<td> Prerequisite: </td>";
echo "<td> $Pre_Course_Name </td>";
echo "<tr><td>Postrequisite: </td>";
echo "<td> $Post_Course_Name </td>";

mysql_connect("localhost", "root", "mandy10312") or die(mysql_error());
mysql_select_db("CASPER") or die(mysql_error());
mysql_query("DELETE FROM PREREQ WHERE( Course_ID_Pre = \"$Course_ID_Pre\")
                                && (Course_ID_Post = \"$Course_ID_Post\")") or die(mysql_error());
echo "</tr></table>";
echo '<p align="center">You have deleted the chosen pre and post requiste from the database</p>';
mysql_close();
?>

<center>
<form name ="return to delete pre and post requisite">
  <input type="button" name="return" value ="Return to Previous Page">
</form>
</center>
</body>
</html>
 