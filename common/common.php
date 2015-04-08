

<?php

$questions_path ="/var/www/html/casper/admin/questions/";
$sali_path ="/var/www/html/casper/admin/dataprocessing/raw/";

// this should become 0700
$questions_permissions = 0744;
$sali_permissions = 0744;
$em_permissions = 0754;

$CASPER_EMAIL = "Casper.System@gmail.com";
$TUTORING = "212-237-XXXX";
$TESTING_MODE = 1;

function semester_string($Sem) 
{
  $ans = $Sem;
  if ($Sem=="SP") {
    $Ans = "Spring";
  }
  else if ($Sem=="SU") {
    $Ans = "Summer";
  }
  else if ($Sem=="FA") {
    $Ans = "Fall";
  }
  return $Ans;
}

function prof_lname($prof) 
{
  $ind = stripos($prof, "_");
  $lname = substr($prof, 0, $ind);
  return $lname;
}

function get_course_name($Course_ID)
{
  $myresult_Course_Name = mysql_query("SELECT Name FROM COURSE WHERE ID=\"$Course_ID\"");
  $Course_Name = mysql_result($myresult_Course_Name, 0, "Name");
  return $Course_Name;
}


function get_course_number($Course_ID)
{
  $myresult_Course_Number = mysql_query("SELECT Number FROM COURSE WHERE ID=\"$Course_ID\"");
  $Course_Number = mysql_result($myresult_Course_Number, 0, "Number");
  return $Course_Number;
}


function get_course_id_from_number($Course_Number)
{
  $myresult_Course_ID = mysql_query("SELECT ID FROM COURSE WHERE Number=\"$Course_Number\"");
  $Course_ID = mysql_result($myresult_Course_ID, 0, "ID");
  return $Course_ID;
}


function get_topic_name($Topic_ID)
{
  $myresult_Topic_Name = mysql_query("SELECT Name FROM TOPIC WHERE ID=\"$Topic_ID\"");
  $Topic_Name = mysql_result($myresult_Topic_Name, 0, "Name");
  return $Topic_Name;
}


function get_topic_id($Topic_Name)
       {
         $myresult_Topic_ID = mysql_query("SELECT ID FROM TOPIC WHERE Name=\" $Topic_Name\"") 
                              or die(mysql_error());
         $Topic_ID = mysql_result($myresult_Topic_ID, 0, "ID");
         return $Topic_ID;
       }

function get_student_name($student_ID)
{
  $myresult_student_Name = mysql_query("SELECT LName, FName FROM STUDENT WHERE ID=\"$student_ID\"");
  $rows_of_student_Name = mysql_numrows($myresult_student_Name);
  for($i=0; $i<$rows_of_student_Name; $i++)
    {
      $student_LName = mysql_result($myresult_student_Name, $i, "LName");
      $student_FName = mysql_result($myresult_student_Name, $i, "FName");
      $student_Name = $student_LName.", ". $student_FName;
    }
  return $student_Name;
}

function get_student_ssn($student_ID)
{
  $myresult_student_ssn = mysql_query("SELECT SSN FROM STUDENT WHERE ID=\"$student_ID\"");
  $rows_of_student_ssn = mysql_numrows($myresult_student_ssn);
  if ($rows_of_student_ssn > 0) {
    $student_ssn = mysql_result($myresult_student_ssn, 0, "SSN");
  }
  else {
    $student_ssn = -1;
  }
  return $student_ssn;
}


function get_question_name($Question_ID)
{
  $myresult_question_Name = mysql_query("SELECT QuestionFile FROM QUESTION WHERE ID=\"$Question_ID\"");
 
  $question_Name = mysql_result($myresult_question_Name, 0, "QuestionFile");
     
  return $question_Name;
}


// function get_topics()
function get_topics($Course_ID)
{
  // create an empty array
  $list = array();
  //get topic id from table CURRICULUM that corresponding to the course id
  $result = mysql_query("SELECT Topic_ID FROM CURRICULUM WHERE Course_ID =\"$Course_ID\"") 
            or die(mysql_error());
  //store the result into an array
  while($row_TID = mysql_fetch_array($result))
    {
       if(!$result) //if the array is empty
         {
           // echo "No Topic ID listed <br/>";
         }
       else //array is not empty
         {
           // echo "Topic ID: ".$row_TID['Topic_ID'];//output topic id
           // echo "<br/>";
           //get topic name
           $topic_ID = $row_TID['Topic_ID'];
           $rslt= mysql_query("SELECT Name FROM TOPIC WHERE ID =\" $topic_ID\"") 
                  or die(mysql_error());
           while($row_TNM =mysql_fetch_array($rslt))
             {
               // echo "Topic Name: " .$row_TNM['Name'];
               // echo "<br/>";
               //append topic ID to the end of the list
               $list[] = $topic_ID;
             }
         }
    }
  // return the list
  return $list;
}


function get_topics_all($Course_ID_array)
{
  // create an empty array
  $list = array();
  // go through Course_ID_array one by one
  foreach($Course_ID_array as $course_id)
    {
       // Use get_topics function to find out what topics are needed for that one course
       $topic_ids_4_a_course = get_topics($course_id);
       // go through each topic id in the array $topic_ids_4_a_course
       foreach($topic_ids_4_a_course as $topic_ids)
       // for each topic id
          {
       // see if it is already in $list, if not, add it to the end of the list
          if(!in_array($topic_ids, $list))
          $list[] = $topic_ids;
          }
    }
  // return the list
  return $list;
}


// function get_prereqs()
function get_prereqs($Course_ID)
{
  // create an empty array
  $list = array();
  //get course id from table PREREQ that corresponding to the course id
  $result = mysql_query("SELECT Course_ID_Pre FROM PREREQ WHERE Course_ID_Post =\"$Course_ID\"")
            or die(mysql_error());
  //store the result into an array
  while($row_CID = mysql_fetch_array($result))
    {
      if(!$result) //if the array is empty
        {
            // echo "No Topic ID listed <br/>";
        }
      else //array is not empty
        {
            // echo "Course ID: ".$row_CID['Course_ID'];//output course id
            // echo "<br/>";
            //get course name
            $Pre_Course_ID = $row_CID['Course_ID_Pre'];
            $rslt= mysql_query("SELECT Name FROM COURSE WHERE ID =\"$Pre_Course_ID\"") or die(mysql_error());
            while($row_CNM =mysql_fetch_array($rslt))
              {
                // echo "Course Name: " .$row_CNM['Name'];
                // echo "<br/>";
                //append topic ID to the end of the list
                $list[] = $Pre_Course_ID;
                 }
           }
     }
   // return the list
   return $list;
}


function get_prereqs_all($Course_ID_array)
{
   // create an empty array
   $list = array();
   // go through Course_ID_array one by one
   foreach($Course_ID_array as $course_id)
     {
          // Use get_prereq function to find out what course ids are needed for that one course
          $pre_course_ids_4_a_course = get_prereqs($course_id);
           foreach($pre_course_ids_4_a_course as $course_id)
          // for each course id
             {
          // see if it is already in $list, if not, add it to the end of the list
             if(!in_array($course_id, $list))
             $list[] = $course_id;
             }
       }
   // return the list
   return $list;
}


function get_ultimate_prereqs($Course_ID)
{
   $list = array();
   // add the required course id into the list
   $list[] = $Course_ID;
   do {
         // get the prereqs for this course id
         $newlist = get_prereqs_all($list);
         $done = true;
         // go through each course id
         foreach($newlist as $newlist_course_id)
           {
               //if the course id is not in the list add them into list
               if(!in_array($newlist_course_id, $list)) {
                 $list[] = $newlist_course_id;
                 $done = false;
               }
           }
   }
   while (!$done);
   return $newlist;
}
/*
$ultimateCourseIDs = get_ultimate_prereqs(3);
echo "*********THE ULTIMATE PREREQ COURSE IDS FOR THIS COURSE ID AFTER FUNCTION<BR>";
foreach($ultimateCourseIDs as $course_id)
{
echo " $course_id<br/>";
}
*/
// function get_ultimate-prereq_topics()
function get_ultimate_prereq_topics($Course_ID)
{
   // create an empty array list
   $list = array();
   /* call the function get_ultimate_prereqs() with the course id to get an array of the prereq co
    urse ids */
   $ult_prereqs=get_ultimate_prereqs($Course_ID);
   /* call the function get_topics_all() with the array of prereq course ids to get an array of the
    topic ids */
   $ult_topics=get_topics_all($ult_prereqs);
   return $ult_topics;
}
/*
$array_topics = get_ultimate_prereq_topics(3);
echo "*********THE PREREQ TOPIC ID FOR THIS COURSE ID AFTER FUNCTION<BR>";
foreach($array_topics as $topic)
{
   echo "$topic <br/>";
}
*/
function get_registration_id($std, $yr, $sem, $crs, $sec)
{
    $query = "SELECT REGISTRATION.ID
              FROM REGISTRATION,OFFERING
              WHERE (REGISTRATION.Student_ID =\"$std\" &&
                     OFFERING.Year =\"$yr\" &&
                     OFFERING.Semester =\"$sem\" &&
                     OFFERING.Course_ID =\"$crs\" &&
                     OFFERING.Section =\"$sec\" &&
                     REGISTRATION.Offering_ID = OFFERING.ID)";

          $myresult = mysql_query($query) or die(mysql_error());
          $rows = mysql_numrows($myresult);

          for($i=0; $i< $rows; $i++)
          {
            $registration_id =mysql_result($myresult, $i, "ID");
	  }
   return $registration_id;
}



function save_competency_info($reg, $top, $passed) 
{
  // see if there is already a row in COMPETENCY for this $reg/$top, if so, update it
    $query_passed = "SELECT Passed
                     FROM COMPETENCY
                     WHERE (Registration_ID =\"$reg\" && Topic_ID =\"$top\")";
    $myresult = mysql_query($query_passed) or die(mysql_error());
    $rows = mysql_numrows($myresult);

    if ($rows > 0) 
      {// already there so we must update
      $query_passed = "UPDATE COMPETENCY SET Passed=\"$passed\" 
                       WHERE (Registration_ID =\"$reg\" && Topic_ID =\"$top\")";
      mysql_query($query_passed) or die(mysql_error());
     
      }
    else 
      {// the row is not there so we must insert
        $query = "INSERT INTO COMPETENCY (Registration_ID, Topic_ID, Passed) 
                  VALUES (\"$reg\", \"$top\", \"$passed\")";
        mysql_query($query) or die(mysql_error());
      }
}

?>



  