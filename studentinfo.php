<html>

<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 18 June 2008), see www.w3.org">
  <script language="javascript" type="text/javascript">
function Disabled(val)
  {
  frm=document.forms[0]
  if(val=="default")
    {frm.submitbutton.disabled=true}
  else
    {frm.submitbutton.disabled=false}
  }
  </script>


  <title></title>
</head>

<body bgcolor="#FF9949">
  <a name="(top)"></a><br>

  <form method="post" action="get_student.php" target="right" 
        name="addGRADE">
    <br>

    <table cellspacing="10" cellpadding="5" width="700" 
           bgcolor="#FFFF99" align="center">
      <caption>
        <font color="#000066" size="5">Welcome to CASPER<br></font>
        <font color="#000066" size="3"> Instructor Login to View Student Roster</font>
      </caption>

      <tr>

        <td align="center">
          <fieldset style="border-width:0; background:#FFCC49; width:500">
            <table width="100%" cellspacing ="15">
              
<tr>
<td width="100" colspan="2" valign="top" align="right">

  <?php
  include("connect.php");

   $query_year = "SELECT DISTINCT Year FROM OFFERING ORDER BY Year";
   $query_semester = "SELECT DISTINCT Semester FROM OFFERING ORDER BY Semester";
   $query_course_id = "SELECT DISTINCT Course_ID FROM OFFERING, COURSE WHERE OFFERING.Course_ID=COURSE.ID ORDER BY COURSE.Number";
   $query_section = "SELECT  DISTINCT Section FROM OFFERING ORDER BY Section";
 

   $myresult_year = mysql_query($query_year) or die(mysql_error());
   $myresult_semester = mysql_query($query_semester) or die(mysql_error());
   $myresult_course_id = mysql_query($query_course_id) or die(mysql_error());
   $myresult_section = mysql_query($query_section) or die(mysql_error());

   $rows_year = mysql_numrows($myresult_year);
   $rows_semester = mysql_numrows($myresult_semester);
   $rows_course_id = mysql_numrows($myresult_course_id);
   $rows_section = mysql_numrows($myresult_section);


echo "Choose Year: </td>";

echo "<td width=\"100\"  align=\"left\">";
echo "<select name=\"year\" onChange=\"Disabled(this.value)\">";
echo "<option selected=\"selected\" value=\"default\">-- Select One --</option>";
     if($rows_year == 0)
     { echo "No year listed";}

     for($i=0; $i<$rows_year; $i++)
     {
       $year = mysql_result($myresult_year, $i, "Year");
       echo "<option value=\"$year\"> $year </option>";
     }
echo "</select>";
echo "</td></tr>";
echo "<tr><td width=\"100\" colspan=\"2\" valign=\"top\" align=\"right\">
           Choose Semester: 
          </td>";
echo"<td width=\"100\" align=\"left\">";
echo "<select name=\"semester\" onChange=\"Disabled(this.value)\">";
echo "<option selected=\"selected\" value=\"default\">-- Select One --</option>";
     if($rows_semester == 0)
      { echo "No year listed";}

     for($i=0; $i<$rows_semester; $i++)
     {
       $semester = mysql_result($myresult_semester, $i, "Semester");
       echo "<option value=\"$semester\"> $semester </option>";
     }

echo "</select>";
echo "</td></tr>";

echo "<tr><td width=\"100\" colspan=\"2\" valign=\"top\" align=\"right\">
            Choose Course: 
          </td>";
echo "<td width=\"100\" align=\"left\">";
echo "<select name=\"course_id\" onChange=\"Disabled(this.value)\">";
echo "<option selected=\"selected\" value=\"default\">-- Select One --</option>";

      if($rows_course_id == 0)
	{ echo "No course listed";}

      for($i=0; $i<$rows_course_id; $i++)
	{
	  $course_id = mysql_result($myresult_course_id, $i, "Course_ID");
	  $course_name = get_course_name($course_id);
	  $course_number = get_course_number($course_id);
	  echo "<option value=\"$course_id\">$course_number - $course_name </option>";
	}
echo "</select>";
echo "</td></tr>";

echo "<tr><td width=\"100\" colspan=\"2\" valign=\"top\" align=\"right\">
           Choose Section: 
          </td>";
echo "<td width=\"100\"  align=\"left\">";
echo "<select name=\"section\" onChange=\"Disabled(this.value)\">";
echo "<option selected=\"selected\" value=\"default\">-- Select One --</option>";
      if($rows_section == 0)
	{ echo "No section listed";}

      for($i=0; $i<$rows_section; $i++)
	{
	  $section = mysql_result($myresult_section, $i, "Section");
	  echo "<option value=\"$section\"> $section </option>";
	}

echo "</select>";
echo "</td></tr>";

echo "<tr><td width=\"100\" colspan=\"2\" valign=\"top\" align=\"right\">
            Enter Password: 
          </td>";
echo "<td width=\"100\"  align=\"left\">
      <input type=\"password\" name=\"password\" value =\"password\" size=\"25\" >
      </td>";
echo "</tr>";
echo "</table>";
echo "</fieldset>";
echo "</td>";
echo "</tr>";

echo "<tr>";

echo "<td align=\"center\"><input type=\"submit\" name=\"submitbutton\"
               value=\"Login\" disabled=\"true\"></td>";

echo "</tr>";

include("disconnect.php");

?>
    <tr>
        <td align="center">
          <hr width="100%" size="3" color="gray">
        </td>
      </tr>
    </table>
    </form>
</body>
</html>
