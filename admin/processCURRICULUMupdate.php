
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
       <font color="#000066" size="5">Curriculum Updated</font>
    </caption>
    <tr>
       <td>
       <?php
             include("connect.php");
       $Course_ID = $_POST['course_number'];
       $Other_Topics = $_POST['otheroptions'];
       $Topic_ID = $_POST['topic_id'];
       $Course_Name = get_course_name($Course_ID);
       $Course_Number = get_course_number($Course_ID);
       $Topic_Name = get_topic_name($Topic_ID);
       echo "You chose course: </td>";
       echo "<td> $Course_Number -  $Course_Name </td></tr>";
       $existing_topics = mysql_query("SELECT CURRICULUM.Topic_ID FROM CURRICULUM,TOPIC WHERE CURRICULUM.Course_ID =\"$Course_ID\" AND TOPIC.ID=CURRICULUM.Topic_ID ORDER BY TOPIC.Name");
       $rows_of_existing_topics = mysql_numrows($existing_topics);
       echo "<tr><td rowspan=\"2\" valign=\"top\">";
       echo "You are about to delete topic(s): </td>";
       echo "<td>";
       $counter=0;
       for($i=0; $i<$rows_of_existing_topics; $i++)
         {
            $A_Topic = mysql_result($existing_topics, $i, "Topic_ID");
            /*
             if ($A_Topic not in $Topic_ID) this is a topic in the CURRICULUM TABLE 
             that is not checked, so we should delete $A_Topic
            */
            if ( in_array($A_Topic, $Topic_ID)== FALSE )
                {
                $Topic_Name = get_topic_name($A_Topic);
                echo " $Topic_Name<BR>";
                mysql_query("DELETE FROM CURRICULUM 
                             WHERE (Topic_ID =\"$A_Topic\") && (Course_ID =\"$Course_ID\");");
                $counter++;
                }
         }
       if($counter>0)
         {echo "<font color=\"purple\">The chosen topic(s) deleted from the database!</font>"; }
         else
            echo "<font color=\"purple\">No topic selected</font>";
      echo    "</td></tr><tr> <td></td></tr>";
      echo    "<tr><td rowspan=\"2\" valign=\"top\">";
      echo    "New topic(s) to add under the course:</td> ";
      echo    "<td>";

      $count= 0;
      foreach ($Other_Topics as $Topic_ID)
        {
           $Topic_Name = get_topic_name($Topic_ID);
           echo " $Topic_Name <br>";
           if ($Topic_ID < 0) { }
           else
              {
              mysql_query("INSERT INTO CURRICULUM(Course_ID, Topic_ID)
                         VALUES( \"$Course_ID\", \"$Topic_ID\" )") or die(mysql_error());
              $count++;
            }
      }
      if($count>0)
          { echo "<font color=\"purple\">New topic(s) added to the database!</font>"; }
        else
           echo "<font color=\"purple\">No topic selected</font>";
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

