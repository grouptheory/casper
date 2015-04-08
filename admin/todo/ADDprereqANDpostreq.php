<html>
<body bgcolor="#FF6633 ">
<br><br>
  <table bgcolor="yellow"  cellspacing="0" cellpadding="0" border="0" width="500" align="center">
  <tr>

<?php

$ID_pre=$_POST['pre_id'];
$ID_post=$_POST['post_id'];
$Course_ID_Pre=$_POST['course_id_pre'];
$Course_ID_Post=$_POST['course_id_post'];

 echo '<td rowspan="2" valign="top"> You have selected:</td>';

echo "<td> Prerequisite:</td>";

echo "<td>";
echo "$ID_pre";
echo "</td>";

echo "<tr><td>Postrequisite: </td>";
echo "<td>";
echo "$ID_post";
echo "</td>";

mysql_connect("localhost", "root", "mandy10312") or die(mysql_error());
mysql_select_db("CASPER") or die(mysql_error());

mysql_query("INSERT INTO PREREQ
             (Course_ID_Pre, Course_ID_Post)
             VALUES(\"$Course_ID_Pre\", \"$Course_ID_Post\")")or die(mysql_error());

echo "</tr>";
echo "</table>";

echo "<p align="center">You have added the prerequisite and postrequisite courses into the database</p>";
mysql_close();
?>
<center>
<form  name ="return to add preANDpostReq">
<input type="button" name="return" value="Return to Previous Page">
</form>
</center>
</body>
</html>