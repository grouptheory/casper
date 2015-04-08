
<html>
<head>
   <meta name="generator" content=
   "HTML Tidy for Linux/x86 (vers 18 June 2008), see www.w3.org">
   <title></title>
</head>
<body bgcolor="#FF9949">
   <a name="(top)"></a><br>
   <table bgcolor="#FFFF99" cellspacing="8" cellpadding="4" border="0" width="620" align="center">
     <caption>
       <font color="#000066" size="5">
        Generating Instructor Passwords for Course/Sections
       </font>
     </caption>
     <tr>
       <?php
             include("connect.php");

       $offering_year = $_POST['year'];
       $offering_semester =$_POST['semester'];

$TEXFILE = "passwords-$offering_year"."-"."$offering_semester".".tex";
$F = fopen("/var/www/html/casper/admin/dataprocessing/raw/$TEXFILE","w") or die("file problem");
fwrite($F, "\\documentclass[final,10pt]{article}\n");
fwrite($F, "\\begin{document}\n");
fwrite($F, "       \\title{CASPER PASSWORDS FOR $offering_year, $offering_semester}\n");
fwrite($F, "\\maketitle\n");
fwrite($F, "\n");

// Get the Offerings for this year/semester

       $query_offering = "SELECT COURSE.Number, PROF.Name, PROF.Email, OFFERING.ID, OFFERING.Course_ID, OFFERING.Section, 
	 OFFERING.Year, OFFERING.Semester, OFFERING.Prof_ID FROM OFFERING, PROF, COURSE WHERE 
         (OFFERING.Course_ID=COURSE.ID && PROF.ID = OFFERING.Prof_ID && Year=\"$offering_year\" && Semester =\"$offering_semester\")
         ORDER BY PROF.Name";

       $myresult_offering = mysql_query($query_offering) or die(mysql_error());
       $rows_offering = mysql_numrows($myresult_offering);
       echo "<td colspan=\"2\" rowspan=\"3\" valign=\"top\" align=\"right\" > 
               Passwords for offerings in
             </td>";
       echo "<td align=\"left\" >";
       echo "$offering_year &nbsp $offering_semester";
       echo "</td></tr>";

$logname = str_replace(".tex",".pdf",$TEXFILE);
$url = "$WEBSITE/casper/admin/dataprocessing/processed/$logname";
echo "<tr><td>Here is a PDF version of the <a href=\"$url\">password file</a> for $offering_year ($offering_semester).  Please wait (about 20 seconds) until the progress bar on your browser indicates that the file creation process has been completed.<br></td></tr>";

       echo "<tr><td rowspan=\"2\" size=\"130\" align=\"center\" > </td></tr>";
      
       echo "<tr><td></td><td colspan=\"3\" align=\"left\" >";

       echo "<fieldset style=\"border-width:0; background:#FFCC49; width:350; align:center\" >
               <legend align=\"center\" style=\" font-size: 16pt\">
                    Password Information
               </legend>";

// Go through the Offerings we selected, one by one


for($i=0; $i< $rows_offering; $i++)
  {
    
    // For each offering

    $ID = mysql_result($myresult_offering, $i, "ID");
    $Course_ID = mysql_result($myresult_offering, $i, "Course_ID");
    $Section = mysql_result($myresult_offering, $i, "Section");
    $Year = mysql_result($myresult_offering, $i, "Year");
    $Semester = mysql_result($myresult_offering, $i, "Semester");
    $Prof_ID = mysql_result($myresult_offering, $i, "Prof_ID");
    $ProfName = mysql_result($myresult_offering, $i, "Name");
    $Email = mysql_result($myresult_offering, $i, "Email");
    $Course_Name = get_course_name($Course_ID);
    $Course_Number = get_course_number($Course_ID);

    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $length = 8;
    $password="";
    $max_i = strlen($chars)-1;

    // get required entrance topics

    $query_req = "SELECT TOPIC.Name FROM REQUIREMENT, TOPIC WHERE
         ((REQUIREMENT.Course_ID = \"$Course_ID\") AND (REQUIREMENT.Topic_ID = TOPIC.ID))
         ORDER BY TOPIC.Name ASC";
    $myresult_req = mysql_query($query_req) or die(mysql_error());
    $rows_req = mysql_numrows($myresult_req);

    // Make a password

    for($j=0; $j<$length; $j++)
      {
	srand(time());
	$password .=$chars{mt_rand(0, $max_i)};
      }

    echo "<table cellpadding=\"3\" cellspacing=\"1\" align=\"center\">";
    echo "<tr colspan=\"2\">";
    echo "<td align=\"right\">Year:</td><td> $offering_year</td></tr>
          <tr><td align=\"right\">Course:</td><td> $Course_Number - $Course_Name</td></tr>
          <tr><td align=\"right\">Section:</td><td> $Section</td></tr>
          <tr><td align=\"right\">ProfName:</td><td> $ProfName</td></tr>
          <tr><td align=\"right\">ProfEmail:</td><td> $Email</td></tr>
          <tr><td align=\"right\">Password:</td><td> $password</td></tr>";

      // Store the password we made into the right row of the Offering table

      mysql_query("UPDATE OFFERING SET paswrd=\"$password\" WHERE ID=\"$ID\";") or die(mysql_error());
      echo "<tr><td colspan=\"2\"><font color=\"purple\">The password is added to the database</font></td></tr>";
      echo "<hr>";

      $texProfName = str_replace("_","\_",$ProfName);
      $texCourse_Name = str_replace("_","\_",$Course_Name);
      $texEmail = str_replace("_","\_",$Email);
      $texpassword = str_replace("_","\_",$password);

      fwrite($F, "\\newpage\n");
      fwrite($F, "\\section*{ $texProfName - $Course_Number (Sec. $Section)}\n\n\n");

      fwrite($F, " CASPER (the system for Computer Analysis of Student Performance and Educational Retention) ". 
	     "is a new system developed by the Math and Computer Science Department ".
             "whose objective is to maintain records of student ".
	     "competencies at the moment that they {\em begin} a course.  In your specific case, ".
             "for example, CASPER will help us document ".
	     "the extent and variability in student preparedness for MAT$Course_Number ".
	     "(in terms of prerequisite knowledge) ".
             "{\em at the very outset of the semester}.  ".
	     "The information you provide is crucial in helping us better streamline the ".
	     "prerequisites experiences prior to MAT$Course_Number, and will help us to make sure future cadres ".
	     "of students entering MAT$Course_Number are better prepared.\\\\[0.1in]\n".
             "Enclosed you may find a sample 5-question Entrance Assessment Test (EAT) for MAT$Course_Number ".
	     "that was developed by a fellow colleague in the department.  ".
	     "Please use it to assess your students, and then enter ".
	     "the student pass/fail information for each topic into the CASPER system.  If you feel the ".
	     "EAT could be better please use the attached test anyway, but provide the department ".
	     "secretary with your alternate better version ".
	     "of a 5-question EAT for MAT$Course_Number; every effort will be made to incorporate ".
	     "your recommendations into the standardized MAT$Course_Number EAT in subsequent semesters. ".
	     "If the questions are indicated as ``Specified in class'', this ".
	     "indicates that we do not yet have an EAT for your course and request ".
	     "that you write the first draft.  An ideal EAT question should be a ".
	     "litmus test for success in your course, in the sense that the question ".
	     "should make you nod if you contemplate: ``The student needs to know ".
	     "this from the preceding course and if they don't then either the ".
	     "student will have a hard time here or I will have a hard time covering ".
	     "the material''.\\\\[0.1in]\n".
	     "The process for entering student EAT information into CASPER ".
	     "is easy and not at all time-consuming; the data collected will be absolutely invaluable to the department: ".
	     "\\noindent All that one needs to do is to visit the CASPER Website, which is at ".
	     "{\\bf http://fclab.jjay.cuny.edu/casper} and enter in the following data:\\\\[0.1in]\n");

      fwrite($F,"\\noindent{\\bf Information to Login CASPER:}\\\\[0.1in]\n");
      fwrite($F,"\\noindent Year: $Year \\\\\n");
      fwrite($F,"\\noindent Semester: $Semester \\\\\n");
      fwrite($F,"\\noindent Course: $Course_Number - $texCourse_Name \\\\\n");
      fwrite($F,"\\noindent Section: $Section \\\\\n"); 
      fwrite($F,"\\noindent Password: {\\bf $texpassword } (only valid for this year/semester/course/section)\\\\[0.1in]\n");

      fwrite($F,"\\noindent Once you have logged in, you will be presented with a table of students (rows) ".
	     "and topics (columns).  Based on your EATs, please check those (student,topic) ".
	     "entries in the table which represent {\bf deficiencies in student preparedness}.\\\\[0.1in]\n");

      /*
      fwrite($F,"\\noindent{CASPER will indicate your course has the following required \\bf entrance assessment topics} which correspond to the test questions in the sample test:\\\\\n");
      fwrite($F,"\\begin{itemize}\n");
      if ($rows_req==0) {
	fwrite($F,"\\item[{\\bf !!!}] None.\n");		
      }

      for($k=0; $k<$rows_req; $k++) {
	$top = mysql_result($myresult_req, $k, "Name");
	fwrite($F,"\\item[{\\bf $k.}] $top\n");	
      }
      fwrite($F,"\\end{itemize}\n");
      */

      fwrite($F,"If you have any concerns please contact Peter Shenkin (pshenkin@jjay.cuny.edu).  For technical issues using CASPER, please contact $CASPER_EMAIL.\\\\[0.1in]\n");

      fwrite($F,"THANK YOU FOR ASSISTING IN THIS IMPORTANT MATTER!!!\n");

      fwrite($F,"\\input{"."$Course_Number"."}\n");


  } // next Offering 
     echo "</table>";

fwrite($F, "\\end{document}\n");
fclose($F);

$ret = system("/var/www/html/casper/admin/dataprocessing/scripts/passwords2pdf.sh ".$TEXFILE);

     include("disconnect.php");

      ?>
    </fieldset>
    </td></tr>
    
    <tr><td colspan="3" align="center">
    <hr width="100%" size="3" color="gray">
       </td>
    </tr>
    <tr><td colspan="3" align="center">
       <a href="#top">Go To Top </a>&#160;&#160;&#160;
       <a href="javascript:javascript:history.go(-1)">Return to Previous Page</a>
       </td>
    </tr>
</table>
</body>
</html>
