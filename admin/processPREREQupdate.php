
<html>
<head>
   <meta name="generator" content=
   "HTML Tidy for Linux/x86 (vers 18 June 2008), see www.w3.org">
   <title></title>
</head>
<body bgcolor="#FF9949">
   <br>
   <table bgcolor="#FFFF99" cellspacing="0" cellpadding="5" border="0"
   width="650" align="center">
     <caption>
        <font color="#000066" size="5">Prerequisite Course Updated
        </font>
     </caption>
     <tr>
        <td>
        <?php
              include("connect.php");
        $Course_ID = $_POST['course_number'];
        $Other_Course = $_POST['otheroptions'];
        $Prereq_ID = $_POST['prereq_id'];
        $Course_Name = get_course_name($Course_ID);
        $Course_Number = get_course_number($Course_ID);

        echo "You chose course: </td>";
        echo "<td> $Course_Number -  $Course_Name </td></tr>";
        
        
        $existing_prereq = mysql_query("SELECT Course_ID_Pre FROM PREREQ 
                                        WHERE Course_ID_Post =\"$Course_ID\" ");
        $rows_of_existing_prereq = mysql_numrows($existing_prereq);
        
        echo "<tr><td rowspan=\"2\" valign=\"top\">";
        echo "You are about to delete prereq course(s): </td>";
        echo "<td>";
        $counter=0;
        for($i=0; $i<$rows_of_existing_prereq; $i++)
          {
             $A_prereq_id = mysql_result($existing_prereq, $i, "Course_ID_Pre");
             /*
              if ($A_prereq not in $Course_ID_Pre) this is a prereq in 
              the PREREQ TABLE that is not checked,
              so we should delete $A_prereq
             */
             if ( in_array($A_prereq_id, $Prereq_ID)== FALSE )
                 {
                   $Course_Name = get_course_name($A_prereq_id);
		   $Course_Number = get_course_number($A_prereq_id);
                 echo "$Course_Number -  $Course_Name<BR>";

                 mysql_query("DELETE FROM PREREQ 
                              WHERE (Course_ID_Pre =\"$A_prereq_id\") && (Course_ID_Post =\"$Course_ID\");");
                 $counter++;
                 }
          }

        if($counter>0)
          { echo "<font color=\"purple\">
                      The chosen prereq course(s) deleted from the database!
                  </font>";
          }
          else
            echo "<font color=\"purple\">No prereq course selected!</font>";
      echo    "</td></tr><tr> <td></td></tr>";

      echo    "<tr><td rowspan=\"2\" valign=\"top\">";
      echo    "New prereq course(s) to add for the course:</td> ";
      echo    "<td>";
      $count= 0;
      foreach ($Other_Course as $Course_ID_Pre)
        {
           $Course_Name = get_course_name($Course_ID_Pre);
	   $Course_Number = get_course_number($Course_ID_Pre);
	     
          if ($Course_ID_Pre < 0) { }
           else
              { echo "$Course_Number -  $Course_Name<BR>";
               mysql_query("INSERT INTO PREREQ(Course_ID_Pre, Course_ID_Post)
                            VALUES(\"$Course_ID_Pre\", \"$Course_ID\" )") or die(mysql_error());
              $count++;
              }
       }

      if($count>0)
          { 
            echo "<font color=\"purple\">New prereq course(s) added to the database!</font>"; 
          }
      else

      echo "<font color=\"purple\">No prereq course selected</font>";
      echo "</td></tr><tr><td></td></tr>";

      include("disconnect.php");

      ?>
</td>
    </tr>
    <tr>
      <td width="100%" colspan="2">
          <hr size="3" color="gray">
      </td>
    </tr>
    <tr>
      <td align="center" colspan="2"><a href=
      "javascript:javascript:history.go(-1)">Return to Previous
      Page</a></td>
    </tr>
  </table>
</body>
</html>
