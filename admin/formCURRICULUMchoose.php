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
  <form method="post" action="processCURRICULUMchoose.php" name=
  "ADDcurriculum">
    <br>
    <table cellspacing="0" cellpadding="10" width="550" bgcolor=
    "#FFFF99" align="center">
       <caption>
         <font color="#000066" size="4">Edit Course Curriculum</font>
       </caption>
       <tr>
         <td align="center">
            <fieldset style= "border-width:0; background:#FFCC49; width:400">
              <table width="100%">
   
                <?php

                include("connect.php");

                $query_Course_Number="SELECT Number FROM COURSE ORDER BY Number";
                $myresult_Course_Number = mysql_query($query_Course_Number) or die(mysql_error());
                $rows_Course_Number = mysql_numrows($myresult_Course_Number);

                echo "<tr><td width=\"100\" colspan=\"2\" valign=\"top\" align=\"center\">";
                echo "Choose a Course: </td>";
                if($rows_Course_Number == 0) {echo "No course listed";}

                echo "<td width=\"100\" align=\"center\">";
                echo "<select name=\"course_number\" onChange=\"Disabled(this.value)\">";
                echo "<option selected=\"selected\" value=\"default\"> --Select One-- </option>";
                for($i=0; $i<$rows_Course_Number; $i++)
                  {
                    $Course_Number = mysql_result($myresult_Course_Number, $i, "Number");
		    $Course_ID = get_course_id_from_number($Course_Number);
                    $Course_Name = get_course_name($Course_ID);
                    echo "<option value=\"$Course_ID\"> $Course_Number - $Course_Name </option>";
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
        value="SELECT" disabled="true">&#160;&#160; <input type="reset"
        value="CANCEL"></td>
      </tr>
      <tr>
        <td align="center">
           <hr width="100%" size="3" color="gray">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>

