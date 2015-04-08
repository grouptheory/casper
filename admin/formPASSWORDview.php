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

<body bgcolor="#FF9949"><br>
  <a name="(top)"></a><br>

  <form method="post" action="processPASSWORDview.php" name="viewPASSWORD">
    <br>

    <table cellspacing="10" cellpadding="6" width="600" bgcolor="#FFFF99" align="center">
      <caption>
        <font color="#000066" size="4">View Section Passwords</font>
      </caption>

      <tr>

        <td align="center">
          <fieldset style="border-width:0; background:#FFCC49; width:500">
            <table width="100%" cellspacing ="10">
<?php

  include("connect.php");   

   $query_year = "SELECT DISTINCT Year FROM OFFERING";
   $query_semester = "SELECT DISTINCT Semester FROM OFFERING";

   $myresult_year = mysql_query($query_year) or die(mysql_error());
   $myresult_semester = mysql_query($query_semester) or die(mysql_error());

   $rows_year = mysql_numrows($myresult_year);
   $rows_semester = mysql_numrows($myresult_semester);
           
echo "<tr><td width=\"100\" colspan=\"2\" valign=\"top\" align=\"right\">
        Choose Year: 
      </td>";

      if($rows_year == 0)
	{
	  echo "No year listed";
	}

echo "<td width=\"100\"  align=\"left\">";
echo "<select name=\"year\" onChange=\"Disabled(this.value)\">";
echo "<option selected=\"selected\" value=\"default\">-- Select One --</option>";
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
      if($rows_semester == 0)
	{
	  echo "No semester listed";
	}

echo "<td width=\"100\"  align=\"left\">";
echo "<select name=\"semester\" onChange=\"Disabled(this.value)\">";
echo "<option selected=\"selected\" value=\"default\">-- Select One --</option>";
       for($i=0; $i<$rows_semester; $i++)
         {
           $semester = mysql_result($myresult_semester, $i, "Semester");
           
           echo "<option value=\"$semester\"> $semester </option>";
         }

echo "</select>";
echo "</td></tr>";

?>

 </table>
    </fieldset>
  </td>
 </tr>

 <tr>
    <td align="center"><input type="submit" name="submitbutton"
        value="View the passwords" disabled="true">
    </td>
 </tr>

 <tr>
     <td align="center"><hr width="100%" size="3" color="gray">
     </td>
</tr>
    </table>
    </form>
</body>
</html>








