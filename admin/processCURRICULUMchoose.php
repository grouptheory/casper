
<html>
<head>
   <meta name="generator" content=
   "HTML Tidy for Linux/x86 (vers 18 June 2008), see www.w3.org">
   <title></title>
</head>
<body bgcolor="#FF9949">
   <a name="(top)"></a><br>
   <table bgcolor="#FFFF99" cellspacing="0" cellpadding="6" border="0"
   width="820" align="center">
     <caption>
       <font color="#000066" size="5">
       Update Curriculum
       </font>
     </caption>
     <tr>
       <?php
             include("connect.php");
       $Course_ID = $_POST['course_number'];
       $Course_Number =get_course_number($Course_ID);
       $Course_Name = get_course_name($Course_ID);
       echo "<td colspan=\"2\"  rowspan=\"3\" valign=\"top\" align=\"right\" width=\"100\" > You chose: </td>";
       echo "<td align=\"left\" valign=\"top\" >";
       echo "$Course_Number -  $Course_Name";
       echo "</td></tr>";

$query_Topic_ID =( "SELECT Topic_ID FROM CURRICULUM,TOPIC WHERE Course_ID =\"$Course_ID\" AND TOPIC.ID=CURRICULUM.Topic_ID ORDER BY TOPIC.Name" );
       $myresult_Topic_ID= mysql_query($query_Topic_ID) or die(mysql_error());
       $rows_Topic_ID = mysql_numrows($myresult_Topic_ID);
       echo "<tr><td></td></tr>";
       echo "<tr><td colspan = \"2\" rowspan=\"2\" size=\"230\" align=\"center\" > </td></tr>";
       echo "<form method=\"POST\" action=\"processCURRICULUMupdate.php\" name=\"ADDcurriculum\">";
       echo "<tr><td></td><td colspan=\"3\" align=\"left\" >";
       echo "<fieldset style=\"border-width:0; background:#FFCC49; width:640; align:left\" >
             <legend align=\"center\"> Current topic(s) for this course (uncheck to remove)
             </legend>";
       if($rows_Topic_ID == 0) {echo "No Topic listed";}
       for($i=0; $i<$rows_Topic_ID; $i++)
          {
            echo "<br>";
            $Topic_ID = mysql_result($myresult_Topic_ID, $i, "Topic_ID");
            $Topic_Name= get_topic_name($Topic_ID);
            echo "<input type=\"checkbox\" name=\"topic_id[]\" value=\"$Topic_ID\" 
                   checked=\"checked\">";
            echo "$Topic_Name";
       }
       echo "<input type=\"hidden\" name=\"course_number\" value=\"$Course_ID\">";
       echo "</fieldset><br>";
       echo "</td></tr>";
       $query_Other_Topic_ID =("SELECT ID FROM TOPIC WHERE ID NOT IN
                                (SELECT Topic_ID FROM CURRICULUM WHERE Course_ID=\"$Course_ID\") ORDER BY TOPIC.Name") 
                               or die(mysql_error());
      $myresult_Other_Topic_ID = mysql_query($query_Other_Topic_ID) or die(mysql_error());
      $rows_Other_Topic_ID = mysql_numrows($myresult_Other_Topic_ID);
      echo "<tr><td colspan=\"2\" valign=\"top\" align=\"right\"> Additional Topics: </td>";
      echo "<td colspan=\"2\" align=\"center\">";
      echo "<select name=\"otheroptions[]\" multiple=\"multiple\">";
      if($rows_Other_Topic_ID == 0) {echo "No topic name listed";}
      echo "<option selected =\"selected\" value=\"-1\">-- SELECT ONE OR MORE TO UPDATE --</option>";
      for($i=0; $i<$rows_Other_Topic_ID; $i++)
         {
           $Other_Topic_ID = mysql_result($myresult_Other_Topic_ID, $i, "ID");
           $Other_Topic_Name = get_topic_name($Other_Topic_ID);
           echo "<option value=\"$Other_Topic_ID\">  $Other_Topic_Name </option>";
         }
      echo "</select>";
      echo  "<tr><td> </td></tr>";
      echo  "<tr><td> </td>";
      echo  "<td colspan=\"2\" align=\"center\">
            <input type=\"submit\" name=\"button\" value=\"UPDATE\">";
      echo  "&nbsp&nbsp<input type=\"reset\" name=\"button\" value=\"CANCEL\"></td></tr>";
      echo "</form>";
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
      <a href="#top">Go To Top
      </a>&#160;&#160;&#160;
      <a href="javascript:javascript:history.go(-1)">Return to Previous Page
      </a>
      </td>
    </tr>
  </table><br>
</body>
</html>
