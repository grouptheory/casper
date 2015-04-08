
<html>
<head>
   <meta name="generator" content=
   "HTML Tidy for Linux/x86 (vers 18 June 2008), see www.w3.org">
   <title></title>
</head>

<?php
       include("connect.php");

       $year = $_POST['year'];
       $semester =$_POST['semester'];
       $course_id =$_POST['course_id'];
       $section =$_POST['section'];
       $password =$_POST['password'];
       $course_name =get_course_name($course_id);
       $course_number =get_course_number($course_id);
 
//check if submission already exist
       $query_status_active = "SELECT Active FROM OFFERING 
                               WHERE (Section=\"$section\" && 
                               Semester=\"$semester\" && 
                               Year=\"$year\" && 
                               Course_ID=\"$course_id\")";
       $myresult_status_active = mysql_query($query_status_active) or die(mysql_error());
       $rows_status_active = mysql_numrows($myresult_status_active);
       $status_active =mysql_result($myresult_status_active, 0, "Active");

  if($status_active=="FALSE")
    { echo "<center><font size=\"+2\">Duplicate Submission</font></center>";}

  else
    {//starting brace to all the way bottom

      // Get the Offerings for this year/semester
       $query_offering_password = "SELECT paswrd FROM OFFERING 
                                   WHERE (Course_ID=\"$course_id\" && Section=\"$section\" && 
                                   Year=\"$year\" && Semester =\"$semester\")";

       $myresult_offering_password = mysql_query($query_offering_password) or die(mysql_error());
       $rows_offering_password = mysql_numrows($myresult_offering_password);
       $offering_password = mysql_result($myresult_offering_password, 0, "Paswrd");

	   
	   $getmaster="Select Password FROM MASTER";
	   $master=mysql_query($getmaster) or die(mysql_error());
	   
	   $rslt=mysql_fetch_array($master);
	   $unicde=$rslt['Password'];

       if ((strcmp($password,$offering_password)==0) || (strcmp($password,$unicde)==0)) 
	 {
	   $title = "Entrance Assessments";
	   $success = true;
	 }
       else 
	 {
	 $title = "Login Failed!";
	 $success = false;
	 }
?>

	<body bgcolor="#FF9949"  >
	  <a name="(top)"></a><br>
	   <table bgcolor="#FFFF99" cellspacing="8" cellpadding="6" border="0" width="950" align="center">
	   <caption>
	   <font color="#000066" size="5">
   
<?

	   echo $title;
?>

	   </font>
	   </caption>
	   <tr>
<?

       if ($success == true) 
	 {
	   
	   echo "<td colspan=\"2\" rowspan=\"3\" valign=\"top\" align=\"right\" >You Selected:</td>";
	   echo "<td align=\"left\" >";
	   echo "$year,  $semester, $course_number - $course_name, $section";
	   echo "</td></tr>";
     
	 echo "<tr><td></td></tr>";
	 echo "<tr><td rowspan=\"2\" size=\"130\" align=\"center\" > </td></tr>";
	 
	 echo "<tr><td></td><td colspan=\"3\" align=\"left\" >";
	 echo "<fieldset align=\"center\" style=\"border-width:0; background:#FFCC49; width:700\" >
               <legend align=\"center\" style=\"font-size: 15pt; width: 850px\">
                    Summary of Student/Course Data
               </legend>";
	 //get all the student names for the chosen section, semester, year and course
       $query_student = "SELECT REGISTRATION.Student_ID, STUDENT.SSN, STUDENT.LName, STUDENT.FName 
                         FROM REGISTRATION, OFFERING, STUDENT
                         WHERE (OFFERING.Section=\"$section\" && 
                               OFFERING.Semester=\"$semester\" && 
                               OFFERING.Year=\"$year\" && 
                               OFFERING.Course_ID=\"$course_id\" && 
                               OFFERING.ID=REGISTRATION.Offering_ID && STUDENT.ID = REGISTRATION.Student_ID)
                               ORDER BY STUDENT.LName, STUDENT.FName";

       $myresult_student = mysql_query($query_student) or die(mysql_error());
       $rows_student = mysql_numrows($myresult_student);

       for($i=0; $i< $rows_student; $i++)
       {
	 $registered_student =mysql_result($myresult_student, $i, "Student_ID");
	 $registered_student_ssn[$i] =mysql_result($myresult_student, $i, "SSN");
	 $registered_student_lname[$i] =mysql_result($myresult_student, $i, "LName");
	 $registered_student_fname[$i] =mysql_result($myresult_student, $i, "FName");
        }
       //get all the required topics for the chosen course
       $query_req_topic = "SELECT REQUIREMENT.Topic_ID, TOPIC.Name
                           FROM REQUIREMENT, TOPIC
                           WHERE REQUIREMENT.Course_ID =\"$course_id\" &&
                                 REQUIREMENT.Topic_ID = TOPIC.ID
                           ORDER BY TOPIC.Name";

       $myresult_req_topic = mysql_query($query_req_topic) or die(mysql_error());
       $rows_req_topic = mysql_numrows($myresult_req_topic);
       echo "There are $rows_req_topic topics/questions on EAT:<br>"; 

       //loop through all the required topics and output them
       for($j=0; $j< $rows_req_topic; $j++)
       {
	 $req_topic =mysql_result($myresult_req_topic, $j, "Topic_ID");
	 $req_topic_name[$j] =mysql_result($myresult_req_topic, $j, "Name");
	 $req_topic_num[$j] = " "."$j";
	 $topic_number = $j+1;
	 echo "$topic_number. $req_topic_name[$j]<BR>";
       }

       echo "For each listed student, please <b>CHECK</b> those topics in which comprehension was in your estimation, <b>DEFICIENT</b><br>"; 

       //form begins
       echo "<form method=\"post\" action=\"processGRADEupdate.php\">";

       //div scrollbar inside table
       echo "<div style=\"height: 375px; width: 550px; top: 190px; border: #000000 5px solid;  
                          overflow: scroll; align: center\">";

       echo "<table border=\"1\" cellspacing=\"5\" cellpadding=\"2\" bgcolor=\"#C0C0C0\" align=\"center\"> ";

       function headers($rows_req_topic2, $myresult_req_topic2)
       {
	 echo "<tr>";
	
	 for($j2=0; $j2<= $rows_req_topic2; $j2++) 
	   {

	     if ($j2 > 0) 
	       {// if begins
		 $req_topic2 = mysql_result($myresult_req_topic2, $j2-1, "Topic_ID");
		 $req_topic_name2[$j2] =mysql_result($myresult_req_topic2, $j2-1, "Name");
		 $req_topic_num2[$j2] = " "."$j2";
      
		 $LIMIT2 = 20;
		 if (strlen($req_topic_name2[$j2]) > $LIMIT2) 
		   {
		     $trunc2 = substr($req_topic_name2[$j2],0,$LIMIT2-3) . "...";
		   }
		 else 
		   {//else starts
		     $trunc2 = $req_topic_name2[$j2];
		     for ($k2=0;$k2<($LIMIT2-strlen($req_topic_name2[$j2]));$k2++) 
		       {
			 $trunc2 = $trunc2.".";
		       }
		   }//else ends
		 echo "<td align=\"center\">
                     <img src=\"http://fclab.jjay.cuny.edu/casper/modules/imagemaker/textToImage.php?message=$trunc2\">
                     </td>";

	       // j2==last column
	       if($j2==$rows_req_topic2)
		 {
		   echo "<td align=\"center\"> Absent? </td>";
		 }

	     }//if ends
	      
	   /*  additional column to indicate the student's absence */
	   else { // j2== 0
	     echo "<td width=\"200\"></td>";
	   }
	 }
	 echo "</tr>";
       }// end function header()

      
       for($i=0; $i<= $rows_student; $i++)
       {
	 if ($i==0) {
	   headers($rows_req_topic, $myresult_req_topic);
	 }
	 else 
	   {
	   $STUDENTS_PER_BLOCK = 5;

	   if ($i % $STUDENTS_PER_BLOCK == 0) 
	     {
	     headers($rows_req_topic, $myresult_req_topic);
	     }//end if
	   echo "<tr>";
     
	   $registered_student_lname[$i] =mysql_result($myresult_student, $i-1, "LName");
	   $registered_student_fname[$i] =mysql_result($myresult_student, $i-1, "FName");
	   echo "<td width=\"220\"> $registered_student_lname[$i], $registered_student_fname[$i]</td>";

	   for($j=0; $j<= $rows_req_topic; $j++)
	     {
	       if ($j > 0) 
		 {
		 $req_topic =mysql_result($myresult_req_topic, $j-1, "Topic_ID");
		 $req_topic_name[$j] =mysql_result($myresult_req_topic, $j-1, "Name");
		 $req_topic_num[$j] = " "."$j";

		 // i is the student, j is the topic.  student_topic
		 echo "<td><input type=\"checkbox\" name=\"r$i"."_c$j\" value=\"1\"></td>";
			
		   if($j==$rows_req_topic)// j==last column
		     {
		      
		       echo "<td><input type=\"checkbox\" name=\"r$i"."_c$j\" value=\"2\"> Absent </td>";
		   
		     }

		 }//end if
	       else 
		 { // j== 0
		 if ($i==0) 
		   {
		   echo "<td width=\"200\"></td>";
		   }//end if
		 }//end else
	     }//end for loop
	   echo "</tr>";
	   }//end else
       }//end for loop
       echo "</table>";
       echo "</div>";

       echo "<input type=\"hidden\" name=\"year\" value=\"$year\">";
       echo "<input type=\"hidden\" name=\"semester\" value=\"$semester\">";
       echo "<input type=\"hidden\" name=\"section\" value=\"$section\">";
       echo "<input type=\"hidden\" name=\"course_id\" value=\"$course_id\">";
       echo "<input type=\"hidden\" name=\"student_row\" value=\"$rows_student\">";
       echo "<input type=\"hidden\" name=\"topic_col\" value=\"$rows_req_topic\">";

       
       echo "<br>";  
       echo "<center><input type=\"submit\" name=\"submit\" value=\"submit\"></center>"; 
       echo "</form>";

       echo "<br>";
       
       }
  }//ending brace for all the way up else from active status
include("disconnect.php");

?>

     </fieldset>
     </td>
     </tr>

     <tr>
       <td align="center" colspan="3">
       <hr width="100%" size="3" color="gray">
       </td>
     </tr>
     <tr>
      <td align="center" colspan="3">
      <a href="javascript:javascript:history.go(-1)">Return to Previous Page
      </a>
      </td>
     </tr>
  </table><br>
</body>
</html>
