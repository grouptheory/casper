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

  <form method="post" action="processASSESSMENTgenerate.php" name="generateASSESSMENT">
    <br>

    <table cellspacing="10" cellpadding="5" width="600" bgcolor="#FFFF99" align="center">
      <caption>
        <font color="#000066" size="5">Generate an Assessment Test</font>
      </caption>

      <tr>

        <td align="center">
          <fieldset style="border-width:0; background:#FFCC49; width:500">
            <table width="100%" cellspacing ="10">
<?php

  include("connect.php");   

   $query_course_id = "SELECT ID FROM COURSE";
   $myresult_course_id = mysql_query($query_course_id) or die(mysql_error());
   $rows_course_id = mysql_numrows($myresult_course_id);
           
echo "<tr><td width=\"100\" colspan=\"2\" valign=\"top\" align=\"right\">
        Choose Course: 
      </td>";

      if($rows_course_id == 0)
	{
	  echo "No course listed";
	}

echo "<td width=\"100\"  align=\"left\">";
echo "<select name=\"course_id\" onChange=\"Disabled(this.value)\">";
echo "<option selected=\"selected\" value=\"default\">-- Select One --</option>";
      for($i=0; $i<$rows_course_id; $i++)
         {
           $course_id = mysql_result($myresult_course_id, $i, "ID");
	   $course_number = get_course_number($course_id);
           $course_name = get_course_name($course_id);
           
           echo "<option value=\"$course_id\"> $course_number - $course_name </option>";
         }
echo "</select>";
echo "</td></tr>";

include("disconnect.php");

?>

 </table>
    </fieldset>
  </td>
 </tr>

 <tr>
    <td align="center"><input type="submit" name="submitbutton"
        value="GENERATE TEST" disabled="true">
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
