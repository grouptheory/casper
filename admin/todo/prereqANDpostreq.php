<html>
<body bgcolor="#FF6633">
<a name ="(top)"></a>
<br><br>
 <form method ="POST" action="ADDprereqANDpostreq.php" name="prereqANDpostreq"> 
<table cellspacing="0" border ="0" cellpadding ="0" width ="650" bgcolor="FFCC33" align="center">
<caption> 
<font  color="000066" size="5"> Choose and Add Pre and Post Requisite Course
</font>
</caption>
<tr><td>
      <fieldset style="border-width:0; background:#FFCC33; width:600">
      <table width="100%">
     
<?php

mysql_connect("localhost", "root", "mandy10312") or die(mysql_error());
/* echo "Connected to the local host<br>";*/
 mysql_select_db("CASPER") or die(mysql_error());
/* echo "connected to the database<br>";*/

$query_pre = "SELECT Number FROM COURSE";
$query_post = "SELECT Number FROM COURSE";
$query_id_pre = "SELECT ID FROM COURSE";
$query_id_post = "SELECT ID FROM COURSE";

$myresult_pre = mysql_query($query_pre) or die(mysql_error());
$myresult_post = mysql_query($query_post) or die(mysql_error());
$myresult_id_pre = mysql_query($query_id_pre) or die(mysql_error());
$myresult_id_post = mysql_query($query_id_post) or die(mysql_error());

$rows_pre=mysql_numrows($myresult_pre);
$rows_post=mysql_numrows($myresult_post);
$rows_id_pre=mysql_numrows($myresult_id_pre);
$rows_id_post=mysql_numrows($myresult_id_post);
/*
 echo "There are $rows_pre PREREQ course(s) listed <br>";
 echo "There are $rows_post POSTREQ course(s) listed <br>";
 echo "There are $rows_id_pre COURSE ID(s) listed <br>";
 echo "There are $rows_id_post COURSE ID(s) listed <br>";
 echo "<br>";
*/

/* echo '<form method =\"POST\" action=\"ADDprereqANDpostreq.php\" name=\"prereqANDpostreq\">';*/

 echo '<tr><td width="100" rowspan="2" valign="top" align="right">';
echo "PREREQUISITE:  ";
echo "</td>";

if($rows_pre == 0)  { echo "No PREREQ course listed <br>"; }
 
for($i=0; $i<$rows_pre; $i++)
  { 
    /* echo '<form method =\"POST\" action=\"ADDprereqANDpostreq.php\" name=\"prereqANDpostreq\">'; */

    $ID_pre = mysql_result($myresult_pre, $i, "Number");
    $Course_ID_Pre = mysql_result($myresult_id_pre, $i, "ID");

    echo '<td width="550" valign="top" align="center">';
    echo "<input type=\"radio\" name=\"pre_id\" value=\"$ID_pre\">";
    echo "$ID_pre";
   
    echo "&nbsp<input type=\"hidden\" name=\"course_id_pre\" value=\"$Course_ID_Pre\">";
    /* echo "&nbsp<input type=\"submit\" name=\"submit\" value=\"ADD\">";
    echo "&nbsp<input type=\"reset\" value=\"Clear\">";
    
    echo "</form>";*/
 }


 echo "</td></tr>";
echo "<tr><td></td></tr>";
 echo '<tr><td width="100" valign ="top" align="right">';
echo "POSTREQUISITE:</td>";

if($rows_post == 0)
  { echo "No POSTREQUISITE course listed<br>";}

for($i=0; $i<$rows_post; $i++)
  {
    /* echo '<form method =\"POST\" action=\"ADDprereqANDpostreq.php\" name=\"prereqANDpostreq\">'; */
    $ID_post = mysql_result($myresult_post, $i, "Number");
    $Course_ID_Post = mysql_result($myresult_id_post, $i, "ID");

    echo '<td width="350" valign="top" align="center">';
    echo "<input type=\"radio\" name=\"post_id\" value=\"$ID_post\">";
    echo "$ID_post";
    echo "&nbsp<input type=\"hidden\" name=\"course_id_post\" value=\"$Course_ID_Post\">";
    /* echo "&nbsp<input type=\"submit\" name=\"submit\" value=\"ADD\">";
    echo "&nbsp<input type=\"reset\" value=\"Clear\">";
    
    echo "</form>";*/
}
mysql_close();
?>
</table>
</fieldset>

<tr><td align="center">
<input type="submit" name="button" value="Submit Choices">
<input type="reset" value="Clear Choices">
</td></tr>

<tr><td align="center">
<hr width="100%" size="3" color="gray">
<a href = "#top"> Return to Top</a>
</td></tr>
</td></tr>
</table>
</form>
</body>
</html>
 