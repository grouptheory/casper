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
        <font color="#000066" size="5">Requirement Updated</font>
     </caption>
     <tr>
        <td>
        <?php
              include("connect.php");
        $topic_ID = $_POST['topic_id'];
        $required_topic_ID = $_POST['requiredtopics'];
        $course_ID = $_POST['course_number'];
        $course_name = get_course_name($course_ID);
        $course_number = get_course_number($course_ID);
        $topic_name = get_topic_name($topic_ID);


        echo "You chose course: </td>";
        echo "<td> $course_number - $course_name </td></tr>";
//
//now checking the existing topic under the chosen course
//
        $existing_req_topic = mysql_query("SELECT Topic_ID FROM REQUIREMENT 
                                           WHERE Course_ID =\"$course_ID\" ");
        $rows_of_existing_req_topic = mysql_numrows($existing_req_topic);
        echo "<tr><td rowspan=\"2\" valign=\"top\">";
        echo "You are about to delete required topic(s): </td>";
        echo "<td>";
        $counter=0;
        for($i=0; $i<$rows_of_existing_req_topic; $i++)
          {
             $A_req_topic_id = mysql_result($existing_req_topic, $i, "Topic_ID");
             /*
              if ($A_prereq not in $Course_ID_Pre) this is a prereq in 
              the PREREQ TABLE that is not checked,
              so we should delete $A_prereq
             */
             if ( in_array($A_req_topic_id, $topic_ID) == FALSE )
                 {
                   $topic_name = get_topic_name($A_req_topic_id);
                    echo " $topic_name<BR>";

                   mysql_query("DELETE FROM REQUIREMENT 
                                WHERE (Topic_ID =\"$A_req_topic_id\") && (Course_ID =\"$course_ID\");");
                   $counter++;
                 }
          }
        if($counter>0)
          { echo "<font color=\"purple\">
                      The chosen topic(s) deleted from the database!
                  </font>";
          }
          else
	    { echo "<font color=\"purple\">No required topic selected</font>";}

      echo    "</td></tr><tr> <td></td></tr>";
      echo    "<tr><td rowspan=\"2\" valign=\"top\">";
      echo    "New required topic(s) to add in requirement:</td> ";
      echo    "<td>";
      $count= 0;

      foreach($required_topic_ID as $Topic_ID)
      {//starting loop
      
       $Topic_Name = get_topic_name($Topic_ID);
       echo "$Topic_Name <br>";

           //if there is no topic
           if ($Topic_ID < 0) { echo "No topic!";}

	   //if there is selected topic to add, 
           else
           {//starting else
	       $myresult_course_in_req= mysql_query("SELECT Course_ID FROM REQUIREMENT
                                                     WHERE Topic_ID=\"$Topic_ID\";") or die(mysql_error());
               $rows_course_in_req = mysql_numrows($myresult_course_in_req);

               if($rows_course_in_req==0)
               {
		  mysql_query("INSERT INTO REQUIREMENT(Course_ID, Topic_ID) 
                               VALUES(\"$course_ID\",\"$Topic_ID\");") or die(mysql_error());
	
               }
	       else
	       {
		 mysql_query("UPDATE REQUIREMENT SET Topic_ID=\"$Topic_ID\"
                              WHERE (Course_ID=\"$course_ID\");") or die(mysql_error()); 
	
	       }

	       $count++;
	      
           }//end else
      }//end the loop
    
      if($count>0)
          { 
            echo "<font color=\"purple\">New required topic(s) added to the database!</font>"; 
          }
        else
           echo "<font color=\"purple\">No new topic added</font>";

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
