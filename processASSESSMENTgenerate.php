<html>

<body bgcolor="#FF9949"><br><br>

  <table bgcolor="#FFFF99" cellspacing="10" cellpadding="6" border="0" width="620" align="center">
     <caption>
       <font color="#000066" size="5">
        Generated Assessment Test
       </font>
     </caption>

      <?php
            include("connect.php");

      $course_id =$_POST['course_id'];

     
//go through the REQUIREMENT table for each topic listed for the chosen course
      $topics_4_the_course = mysql_query("SELECT Topic_ID FROM REQUIREMENT 
                                          WHERE Course_ID =\"$course_id\"");
      $rows_of_the_topics = mysql_numrows($topics_4_the_course);
      
      echo "<tr><td width=\"220\"  valign=\"top\" align=\"left\">";
      echo "There are $rows_of_the_topics topic id(s) selected from REQUIREMENT table";
      echo "</td></tr>";
    
// pick a random question for that topic

for($i=0; $i< $rows_of_the_topics; $i++ )
  {
    $topic_ID = mysql_result($topics_4_the_course, $i, "Topic_ID");
   
  }

    $questions_4_the_topic = mysql_query("SELECT ID FROM QUESTION 
                                           WHERE Topic_ID =\"$topic_ID\"");
    $rows_of_questions_4_the_topic = mysql_numrows($questions_4_the_topic);
   
    srand(time());
    $random = rand(0, $rows_of_questions_4_the_topic);
    
    $question_ID = mysql_result($questions_4_the_topic, $random, "ID");
        
    $random_question_name = get_question_name($question_ID);
      
  
  echo "<tr><td width=\"220\"  valign=\"top\" align=\"left\">";
echo "There are $rows_of_questions_4_the_topic question(s) for the course from QUESTION table<br>";
 echo "The random number is: $random. The question id: $question_ID. The question name: $random_question_name.";
echo "</td></tr>";

// take the file name and show the file(for now, just show the file name)

      include("disconnect.php");
?>
 <tr>
        <td align="center">
          <hr width="100%" size="3" color="gray">
        </td>
 </tr>

  <tr>
      <td align="center" colspan="3">
      <a href="javascript:javascript:history.go(-1)">Return to Previous Page
      </a>
      </td>
  </tr>
</table>
</table>
</body>
</html>
