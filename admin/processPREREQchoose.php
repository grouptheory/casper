
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
   <table bgcolor="#FFFF99" cellspacing="0" cellpadding="6" border="0" width="700" align="center">
     <caption>
      <font color="#000066" size="5">
        Update Prerequisite
      </font>
     </caption>
     <tr>
        <?php include("connect.php");
        $Course_ID = $_POST['course_number'];
        $Course_Number =get_course_number($Course_ID);
        $Course_Name = get_course_name($Course_ID);

        echo "<td colspan=\"2\"  rowspan=\"3\" valign=\"top\" align=\"right\" >
              You Chose:
              </td>";
        echo "<td align=\"center\" >";
        echo "$Course_Number -  $Course_Name";
        echo "</td></tr>";
        $query_Pre_ID =( "SELECT Course_ID_Pre FROM PREREQ
                          WHERE (Course_ID_Post =\"$Course_ID\" ) ORDER BY Course_ID_Pre" ) or die(mysql_error());
        $myresult_Pre_ID= mysql_query($query_Pre_ID) or die(mysql_error());
        $rows_Pre_ID = mysql_numrows($myresult_Pre_ID);
        echo "<tr><td></td></tr>";
        echo "<tr><td rowspan=\"2\" size=\"130\" align=\"center\" > </td></tr>";
        echo "<form method=\"POST\" action=\"processPREREQupdate.php\" name=\"updatePREREQ\">";
        echo "<tr><td></td><td colspan=\"4\" align=\"left\" >";
        echo "<fieldset style=\"border-width:0; background:#FFCC49; width:250; align:center\" >
             <legend align=\"center\"> 
                Current prerequisite(s) for this course (uncheck to remove)
             </legend>";
        echo "<br>";
        if($rows_Pre_ID == 0) {echo "No prereq course listed";}
        for($i=0; $i<$rows_Pre_ID; $i++)
          {
            $Pre_ID = mysql_result($myresult_Pre_ID, $i, "Course_ID_Pre");
            $Course_Name= get_course_name($Pre_ID);
           $Course_Number= get_course_number($Pre_ID);
           echo "<input type=\"checkbox\" name=\"prereq_id[]\" value=\"$Pre_ID\" 
                  checked=\"checked\"> $Course_Number -  $Course_Name<br>";
           
          }
      echo "<input type=\"hidden\" name=\"course_number\" value=\"$Course_ID\">";
      echo "</fieldset><br>";
      echo "</td></tr>";
      $query_Other_Prereq_Number =("SELECT Number,ID FROM COURSE WHERE ID NOT IN
                                (SELECT Course_ID_Pre FROM PREREQ 
                                 WHERE Course_ID_Post =\"$Course_ID\") ORDER BY Number") or die(mysql_error());
      $myresult_Other_Prereq_Number = mysql_query($query_Other_Prereq_Number) or die(mysql_error());
      $rows_Other_Prereq_Number = mysql_numrows($myresult_Other_Prereq_Number);
      echo "<tr><td colspan=\"2\" valign=\"top\" align=\"right\"> Additional Courses: </td>";
      echo "<td colspan=\"2\" align=\"left\">";
      echo "<select name=\"otheroptions[]\" multiple=\"multiple\">";
      if($rows_Other_Prereq_Number == 0) 
         {echo "No other topics available";}

      echo "<option selected =\"selected\" value=\"-1\">-- SELECT ONE OR MORE TO ADD --</option>";
      for($i=0; $i<$rows_Other_Prereq_Number; $i++)
         {
           $Other_Prereq_Course_Number = mysql_result($myresult_Other_Prereq_Number, $i, "Number");
           $Other_Prereq_ID = get_course_id_from_number($Other_Prereq_Course_Number);
           $Other_Prereq_Course_Name = get_course_name($Other_Prereq_ID);

           echo "<option value=\"$Other_Prereq_ID\">
                   $Other_Prereq_Course_Number - $Other_Prereq_Course_Name
                 </option>";
         }
      echo "</select>";
      echo  "<tr><td> </td></tr>";
      echo  "<tr><td> </td>";
      echo  "<td colspan=\"2\" align=\"left\"><input type=\"submit\" 
              name=\"button\" value=\"UPDATE\">";
      echo  "&nbsp&nbsp<input type=\"reset\" name=\"button\" value=\"CANCEL\"></td></tr>";

      include("disconnect.php");
      ?>
    </tr>
    <tr>
      <td align="center" colspan="3">
         <hr width="100%" size="3" color="gray">
      </td>
    </tr>
    <tr>
      <td align="center" colspan="3">
      <a href="#top">Go To Top</a>
      &#160;&#160;&#160;
      <a href="javascript:javascript:history.go(-1)">Return to Previous Page
      </a>
      </td>
    </tr>
  </table><br>
</body>
</html>
