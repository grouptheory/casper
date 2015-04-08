<html>
<head>
   <meta name="generator" content=
   "HTML Tidy for Linux/x86 (vers 18 June 2008), see www.w3.org">
   <title></title>
</head>
<body bgcolor="#FF9949"  >
   <a name="(top)"></a><br>
   <table bgcolor="#FFFF99" cellspacing="8" cellpadding="6" border="0" width="800" align="center">
     <caption>
       <font color="#000066" size="5">
          !!!!THESE FEATURES ARE NOT YET SUPPORTED!!!!!<BR>

          Automatic Email Notifications / Tutoring Recommendations
       </font>
     </caption>
     <tr><td>

          <font color="#cc0000" size="4">
           <b>Each of the students you have assessed to need tutoring will now be emailed 
              an notification of tutoring services.  
              In addition, both you and tutoring services will receive a single email 
              which lists the students and their tutoring needs.  
              The emails will appear to come from 
              <i>Casper.System@gmail.com</i>.  
              This sequential process of sending emails takes some time because 
              the emails have to be sent at a rate of at most one every 10 seconds 
              (anything higher is seen as a spam attempt by Gmail).  
              The entire emailing 
              process should take on the order of 5 minutes.
              Please be patient.  </b>
          </font>
<hr>

       <?php
             include("connect.php");

       // use the hidden fields (which are communicated to us by the _POST array) to get:
       //  the number of SSNs, the number of topics, year, course_id, section, semester

       $year          =$_POST['year'];   
       $semester      = $_POST['semester'];
       $section       = $_POST['section'];
       $course_id     = $_POST['course_id'];
       $course_number =get_course_number($course_id);
       $course_name   =get_course_name($course_id);
       $student_row   = $_POST['student_row'];
       $topic_col     = $_POST['topic_col']; 


       $update_status_inactive = "UPDATE OFFERING SET Active=\"FALSE\"
                               WHERE (Section=\"$section\" && 
                               Semester=\"$semester\" && 
                               Year=\"$year\" && 
                               Course_ID=\"$course_id\")";
       mysql_query($update_status_inactive) or die(mysql_error());
            
// get all the students and store the results in an array
        $query_student = "SELECT REGISTRATION.Student_ID, STUDENT.SSN FROM REGISTRATION, OFFERING, STUDENT
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
	  $registered_student[$i] =mysql_result($myresult_student, $i, "Student_ID");
	  $registered_student_ssn[$i] =mysql_result($myresult_student, $i, "SSN");
        }
// echo "<br>";
// get all the topics and store  the results in an array
          $query_req_topic = "SELECT REQUIREMENT.Topic_ID, TOPIC.Name
                              FROM REQUIREMENT, TOPIC
                              WHERE REQUIREMENT.Course_ID =\"$course_id\" &&
                              REQUIREMENT.Topic_ID = TOPIC.ID
                              ORDER BY TOPIC.Name";
          $myresult_req_topic = mysql_query($query_req_topic) or die(mysql_error());
          $rows_req_topic = mysql_numrows($myresult_req_topic);

          for($i=0; $i< $rows_req_topic; $i++)
          {
            $req_topic[$i] =mysql_result($myresult_req_topic, $i, "Topic_ID");
	    $req_topic_name[$i] =mysql_result($myresult_req_topic, $i, "Name");
          }

// doubly nested loop
// j = 1 to number of SSNs
//    i = 1 to number of topics
//       construct button_name = "row$j" . "_col$i";
//       get the value $_POST[$button_name] (it is either 0 or 1)
//       the ssn of the student is ssn_list[j-1]
//       the topic is topic_list[i-1]

         // for each row
          for ($j = 1; $j <= $rows_student; $j++)
	    {  //j is for each student, each row
              for ($i = 1; $i <= $rows_req_topic; $i++) 
                {// i is for each topic, each column
		  		 
		  $value_of_select_topic = $_POST["r$j"."_c$i"];
		 		  
		  $reg_id = get_registration_id($registered_student[$j-1], $year, $semester, $course_id, $section);
		  $top_id = $req_topic[$i-1];
		
		  switch($value_of_select_topic)
		    {
		    case "1": 
		       $qry_topics = "UPDATE COMPETENCY SET Passed=\"$value_of_select_topic\"
		                      WHERE Registration_ID=\"$reg_id\" AND Topic_ID=\"$top_id\"";
		       $myresult = mysql_query($qry_topics) or die(mysql_error());
		       break;

		    case "2":
		    		
		      $qry_topics = "UPDATE COMPETENCY SET Passed=\"$value_of_select_topic\"
		                     WHERE Registration_ID=\"$reg_id\"";
		      $myresult = mysql_query($qry_topics) or die(mysql_error());
		      break;

		    case "":
		   //should come up with something better for default value
		      $value_of_select_topic = 0;
		      $qry_topics = "UPDATE COMPETENCY SET Passed=\"$value_of_select_topic\"
		                     WHERE Registration_ID=\"$reg_id\" AND Topic_ID=\"$top_id\"";
		      $myresult = mysql_query($qry_topics) or die(mysql_error());     
		      break;	    
		    }
		  save_competency_info($reg_id, $top_id, $value_of_select_topic);
		}//end inner for loop
	    }//end outer for loop


//todo 
//construct email

$EMFILE = "email-$year"."-"."$semester"."-"."$course_number"."$section".".php";
$EMPATH = "/var/www/html/casper/dataprocessing/processed/$EMFILE";

$query_prof = "SELECT PROF.Name, PROF.Email 
               FROM PROF, OFFERING
               WHERE PROF.ID = OFFERING.Prof_ID &&
               OFFERING.Course_ID = \"$course_id\" AND OFFERING.Section = \"$section\"";
$myresult_prof = mysql_query($query_prof) or die(mysql_error());
$rows_prof = mysql_numrows($myresult_prof);
        
$prof_name =mysql_result($myresult_prof, 0, "Name");
$prof_email =mysql_result($myresult_prof, 0, "Email");         
$course_number = get_course_number($course_id);

$str2="<table cellspacing='3' cellpadding='3' border='5' width='250' align='center'>";
$str2.= "<caption>---Course Information---</caption>";
$str2.= "<tr><td align='center'>Course </td> <td align='center'>$course_number</td></tr>";
$str2.= "<tr><td align='center'>Semester</td> <td align='center'>$semester</td></tr>";
$str2.= "<tr><td align='center'>Section</td> <td align='center'>$section</td></tr>";
$str2.= "<tr><td align='center'>Year</td> <td align='center'>$year</td></tr>";
$str2.= "<tr><td align='center'>Prof.</td> <td align='center'>$prof_name</td></tr>";
$str2.= "</table><br>";
      
$subject = "Entrance Assessment for:  ";
$subject .= "$course_number";
$subject .= "($section)";
$subject .= "    $year";
$subject .= "($semester)";
$subject .= "    $prof_name";

$str2.= "<table cellspacing='3' cellpadding='3' border='5' width='600' align='center'>";
          
for ($j = 0; $j < $rows_student; $j++)
  {
    $student_id = mysql_result($myresult_student, $j, "Student_ID");
    $student_name=get_student_name($student_id);
    $student_ssn=get_student_ssn($student_id);

    $str2.= "<tr><td>$student_ssn</td><td>$student_name</td>";
    $str2.= "<td>";
    $first = true;

    // get the student's email
    $query_student_email = "SELECT Email FROM STUDENT
                            WHERE SSN = \"$student_ssn\"";
    $myresult_student_email = mysql_query($query_student_email) or die(mysql_error());
    $rows_student_email = mysql_numrows($myresult_student_email);
    $student_email = mysql_result($myresult_student_email, 0, "Email");

    $number_of_failures = 0;
    for ($i = 0; $i < $rows_req_topic ; $i++) 
      {
	$required_topic_id= mysql_result($myresult_req_topic, $i, "Topic_ID");
	$topic_name = get_topic_name($required_topic_id);

	$query_passed = "SELECT COMPETENCY.Passed
                         FROM COMPETENCY, REGISTRATION
                         WHERE COMPETENCY.Topic_ID =\"$required_topic_id\"  &&
                               REGISTRATION.ID = COMPETENCY.Registration_ID &&
                               REGISTRATION.Student_ID = \"$student_id\" ";
	$myresult_passed = mysql_query($query_passed) or die(mysql_error());
	$value_of_passed = mysql_result($myresult_passed, 0, "Passed");
	if($value_of_passed ==1)
	  {
	    $number_of_failures++;		    
	    if ($first == false) 
	      {
		$str2.= "<BR>";
	      }
	    $str2.= "$topic_name";
	    $altbody = "Please enable HTML in your email reader so that CASPER 
                                can send you entrance assessment results.";
		    
	    //echo "send_email_to_student($student_email, $student_name, $letter_to_student, $altbody)
	    
	    $first = false;
	  }

      }      	  	   
      	 if($value_of_passed ==2)
	  {
	    $str2.= "Absent on the assessment test.";
	  }

	if ($number_of_failures == 0 && $value_of_passed ==0) 
	  {
	    $str2.= "Passed everything.";
	  }
      
	$str2.= "</td>";
	$str2.= "</tr>";
      
  }

for ($j = 0; $j < $rows_student; $j++)
  {
    $student_id = mysql_result($myresult_student, $j, "Student_ID");
    $student_name=get_student_name($student_id);
    $student_ssn=get_student_ssn($student_id);
    $first = true;

    // todo: get the student's email
    $query_student_email = "SELECT Email FROM STUDENT
                            WHERE SSN = \"$student_ssn\"";
    $myresult_student_email = mysql_query($query_student_email) or die(mysql_error());
    $rows_student_email = mysql_numrows($myresult_student_email);
    $student_email = mysql_result($myresult_student_email, 0, "Email");

    //letter to student
    $letter_to_student = "<br>Dear ";
    $letter_to_student .= "$student_name ($student_email),<br>";
    $letter_to_student .= "Based on the Entrance Assessment Test for ";
    $letter_to_student .= "$course_number - $course_name we <i>strongly</i> recommend that ";
    $letter_to_student .= "you schedule tutoring in the following topics <i>immediately</i>:<br>";
    $letter_to_student .= "<ul>";
    $number_of_failures = 0;
    for ($i = 0; $i < $rows_req_topic ; $i++) 
      {
	$required_topic_id= mysql_result($myresult_req_topic, $i, "Topic_ID");
	$topic_name = get_topic_name($required_topic_id);

	$query_passed = "SELECT COMPETENCY.Passed
                         FROM COMPETENCY, REGISTRATION
                         WHERE COMPETENCY.Topic_ID =\"$required_topic_id\"  &&
                               REGISTRATION.ID = COMPETENCY.Registration_ID &&
                               REGISTRATION.Student_ID = \"$student_id\" ";
	$myresult_passed = mysql_query($query_passed) or die(mysql_error());
	$value_of_passed = mysql_result($myresult_passed, 0, "Passed");
	if($value_of_passed ==1)
	  {
	    $number_of_failures++;		    
	    if ($first == false) 
	      {
		$letter_to_student.= "<BR>";
	      }
	    // todo: in the $i loop, update the $letter_to_student as appropriate
	    $letter_to_student .="<li> $topic_name";

	    $altbody = "Please enable HTML in your email reader so that CASPER 
                                can send you entrance assessment results.";
		    
	    //echo "send_email_to_student($student_email, $student_name, $letter_to_student, $altbody)
	    
	    $first = false;
	  }   
      }
    $letter_to_student .= "</ul>";
    if($value_of_passed == 2)
      {
	 $letter_to_student.= "You were absent on the entrance assessment.";
      }
    if ($number_of_failures == 0 && $value_of_passed==0) {
      $letter_to_student.= "None.  You passed the entrance assessment.";
    }
    else {
      $letter_to_student.= "The Math Tutoring Center can be reached at by calling $TUTORING.";
    }
    $lname = prof_lname($prof_name);
    $letter_to_student .= "If you have any questions or concerns, please contact your instructor Prof. $lname.";

    if ($number_of_failures > 0) {
      echo "<B>To:</B> $student_name <$student_email><br>";
      echo "<B>Subject:</B> Tutoring to prepare for $course_number - $course_name this semester<br>";
      echo "$letter_to_student<br>";
      echo "<hr><i>Now sending email... (please wait)... ";

      $F = fopen($EMPATH,"w") or die("file problem");
      fwrite($F, "#!/usr/bin/php -q\n");
      fwrite($F, "<?\n");
      fwrite($F, "include(\"/var/www/html/casper/modules/phpmailer/email.php\");\n\n\n\n");
      if ($TESTING_MODE = 1) {
	fwrite($F, "\$email = \"grouptheory@gmail.com\";\n");
	fwrite($F, "// \$email = \"$student_email\";\n");
      }
      else {
	fwrite($F, "\$email = \"$student_email\";\n");
      }
      fwrite($F, "\$name = \"$student_name\";\n");
      fwrite($F, "\$subject = \"Tutoring to prepare for $course_number - $course_name this semester\";\n");
      fwrite($F, "\$body = \"$letter_to_student\";\n");
      fwrite($F, "\$altbody = \"Please open this important email in an HTML-compatible browser!\";\n");
      fwrite($F, "send_email(\$email, \$name, \$subject, \$body, \$altbody);\n");
      fwrite($F, "sleep(10);\n");
      fwrite($F, "\n\n\n\n");
      fwrite($F, "?>\n");
      fclose($F);
      chmod($EMPATH, $em_permissions);
      ob_flush();
      flush();
      // $ret = system("/var/www/html/casper/dataprocessing/processed/$EMFILE");

      echo "done (please wait, as other emails to students may need to be sent...)</i><br><hr>";
      ob_flush();
      flush();
    }
  }

echo "<center><b>Done sending emails to students!<br>";
echo "Now sending an email to the instructor, and to CASPER administrators and Tutoring Services!</b></center><br>";
ob_flush();
flush();

$str2.= "<caption>---Tutoring Required(By Student)---</caption>";
$str2.= "</table><br>";

$str2.= "<table cellspacing='3' cellpadding='3' border='5' width='600' align='center'>";

for ($i = 0; $i < $rows_req_topic ; $i++) 
  {
    $required_topic_id= mysql_result($myresult_req_topic, $i, "Topic_ID");
    $topic_name = get_topic_name($required_topic_id);
    
    $str2.= "<tr><td> $topic_name </td>";
    $first = true;
    $number_of_failures = 0;
    
    $str2.= "<td>";
    for ($j = 0; $j < $rows_student; $j++)
      {
	$student_id = mysql_result($myresult_student, $j, "Student_ID");
	$student_name=get_student_name($student_id);
	$student_ssn=get_student_ssn($student_id);
	
	$query_passed = "SELECT COMPETENCY.Passed
                                FROM COMPETENCY, REGISTRATION
                                WHERE COMPETENCY.Topic_ID =\"$required_topic_id\" &&
                                      REGISTRATION.ID = COMPETENCY.Registration_ID &&
                                      REGISTRATION.Student_ID = \"$student_id\" ";
	$myresult_passed = mysql_query($query_passed) or die(mysql_error());
	$value_of_passed = mysql_result($myresult_passed, 0, "Passed");
	if($value_of_passed ==1) 
	  {
	    $number_of_failures++;		    
	    if ($first == false) 
	      {
		$str2.= "<BR>";
	      }
	    $str2.= "($student_name ($student_ssn))";

	    $first = false;
	  }
      }
       if ($value_of_passed == 2) {
       $str2.= "Absent on the assessment test.";
     }

    if ($number_of_failures == 0 && $value_of_passed==0) {
      $str2.= "Everyone passed.";
    }
    $str2.= "</td>";
    $str2.= "</tr>";
  }

$str2.= "<caption>---Tutoring Required(By Topic)---</caption>";
$str2.= "</table><br>"; 

echo $str2;


echo "<i>Now sending an email to the instructor....";
if ($prof_email == "") {
  echo "<font color=\"cc0000\">";
  echo "No email address was found on record for $prof_name.<br>";
  echo "Please email $CASPER_EMAIL with your name and email address to receive future emails.</i><br><hr>";
  echo "</font>";
}
else {
  $F = fopen($EMPATH,"w") or die("file problem");
  fwrite($F, "#!/usr/bin/php -q\n");
  fwrite($F, "<?\n");
  fwrite($F, "include(\"/var/www/html/casper/modules/phpmailer/email.php\");\n\n\n\n");
  if ($TESTING_MODE = 1) {
    fwrite($F, "\$email = \"grouptheory@gmail.com\";\n");
    fwrite($F, "// \$email = \"$student_email\";\n");
  }
  else {
    fwrite($F, "\$email = \"$prof_email\";\n");
  }
  fwrite($F, "\$name = \"$student_name\";\n");
  fwrite($F, "\$subject = \"INSTRUCTOR $course_number - $course_name ($year $semester)\";\n");
  fwrite($F, "\$body = \"$str2\";\n");
  fwrite($F, "\$altbody = \"Please open this important email in an HTML-compatible browser!\";\n");
  fwrite($F, "send_email(\$email, \$name, \$subject, \$body, \$altbody);\n");
  fwrite($F, "sleep(10);\n");
  fwrite($F, "\n\n\n\n");
  fwrite($F, "?>\n");
  fclose($F);
  chmod($EMPATH, $em_permissions);
  ob_flush();
  flush();
  // $ret = system("/var/www/html/casper/dataprocessing/processed/$EMFILE");
  echo "done.  Now sending an email to Tutoring Services</i><br><hr>";
  ob_flush();
  flush();
}



$query_admin_email = "SELECT Email, Name  FROM ADMIN";
$myresult_admin_email = mysql_query($query_admin_email) or die(mysql_error());
$rows_admin_email = mysql_numrows($myresult_admin_email);
 
for($i=0; $i< $rows_admin_email; $i++)
  {
    $email =mysql_result($myresult_admin_email,$i, "Email");
    $person =mysql_result($myresult_admin_email,$i, "Name");

    echo "<i>Sending to CASPER Administrator $person at $email... ";
    $F = fopen($EMPATH,"w") or die("file problem");
    fwrite($F, "#!/usr/bin/php -q\n");
    fwrite($F, "<?\n");
    fwrite($F, "include(\"/var/www/html/casper/modules/phpmailer/email.php\");\n\n\n\n");
    fwrite($F, "\$email = \"$email\";\n");
    fwrite($F, "\$name = \"$person\";\n");
    fwrite($F, "\$subject = \"ADMIN $course_number - $course_name ($year $semester)\";\n");
    fwrite($F, "\$body = \"$str2\";\n");
    fwrite($F, "\$altbody = \"Please open this important email in an HTML-compatible browser!\";\n");
    fwrite($F, "send_email(\$email, \$name, \$subject, \$body, \$altbody);\n");
    fwrite($F, "sleep(10);\n");
    fwrite($F, "\n\n\n\n");
    fwrite($F, "?>\n");
    fclose($F);
    chmod($EMPATH, $em_permissions);
    ob_flush();
    flush();
    // $ret = system("/var/www/html/casper/dataprocessing/processed/$EMFILE");
    echo "done.</i><br><hr>";
    ob_flush();
    flush();
  }
echo "<br><i>Done sending $rows_prof_email emails to the CASPER administrators and Tutoring Services.</i><BR>";

echo "<b><i>ALL EMAILS HAVE BEEN SENT!</i></b><BR>";

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
      <a href="#top" > Go To Top </a>&nbsp&nbsp
      <a href="javascript:javascript:history.go(-1)">Return to Previous Page</a>
      </td>
    </tr>
  </table><br>
</body>
</html>
