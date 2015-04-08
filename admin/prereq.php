<?php

$drop="Drop Table If Exists PRERQ_TEST_$s$year, PRERQ_NA_$s$year;";
$dp=mysql_query($drop) or die(mysql_error());
//Checks if year and semester of the correlation has previously been entered into database, if so, drops the table with the correlation results.

$get="Select DISTINCT(OFFERING.ID) As ID, Course_ID FROM OFFERING Inner Join PREREQ On OFFERING.Course_ID=PREREQ.Course_ID_Pre WHERE Semester=\"$s\" And Year=$year;";
//Retrieve distinct offering ids and course ids of prereq offerings available in given semester and year.
$got=mysql_query($get) or die(mysql_error());

$output="Create Table PRERQ_TEST_$s$year(Pre_Course varchar(10), Section varchar(6), Professor varchar(40),Post_Course varchar(10), N integer, NormR double Null, NormM double Null, R double, M double, B double, Primary Key(Pre_Course, Section,Post_Course));";
$out=mysql_query($output) or die(mysql_error());
//Create a table PRERQ_TEST that will contain a prereq course, it's section, it's instructor and the correlation results between the final grade and post course competency scores of students who have taken one of it's corresponding post courses.

$left="Create Table PRERQ_NA_$s$year(Pre_Course varchar(10), Section varchar(6), Professor varchar(40),Post_Course varchar(10),Primary Key(Pre_Course, Section,Post_Course));";
$lft=mysql_query($left) or die(mysql_error());
//Create a table PRERQ_NA that that will contain the title, section and professor of all precourse that cound not be evaluated due to lack of data.


while($row=mysql_fetch_array($got))
{
$id=$row['ID'];//Offering ID
$pre=$row['Course_ID'];//Prerequisite Course ID

$pr_data="Select Department, Number, Section, Professor From DATA Where ID=$id;";
//For every prereq offering id, retrieve the Department, Number, Section, and Instructor of the offering from the view DATA that joins OFFERING, COURSE and PROF together and uses the Offering Id as its ID. 
$pa=mysql_query($pr_data) or die(mysql_error());

$dt=mysql_fetch_array($pa);
$d=$dt['Department'];//Pre_Course Department
$cn=$dt['Number'];//Pre_Course Number
$sec=$dt['Section'];//Pre_Course Section
$p=$dt['Professor'];//Pre_Course Professor 

$view="Create View PRE_EVALUATION AS Select REGISTRATION.ID, Student_ID, Numerical AS Final_Grade From REGISTRATION INNER JOIN GRADE On REGISTRATION.Grade=GRADE.Letter Where Offering_ID=$id Having Final_Grade>0;";
//Obtains and holds the students with passing grades for the given Offering ID
$vw=mysql_query($view) or die(mysql_error());

$next="Select Course_ID_Post As Post_ID From PREREQ Where Course_ID_Pre=$pre;";
//Gets the post course ids for the given prerequisite course
$nx=mysql_query($next) or die(mysql_error());

	while($row=mysql_fetch_array($nx))
	{
		$post=$row['Post_ID'];//Post Course ID
		
		$class="Select Department, Number From COURSE Where ID=$post;";
		//Obtains the Course information for given post course
		$cl=mysql_query($class) or die(mysql_error());
		
		$post_dt=mysql_fetch_array($cl);
		$pt_d=$post_dt['Department'];//Department of Post Course
		$pt_n=$post_dt['Number'];//Course Number of Post Course
		
		$newtb="Create Table PostTest(Student_ID integer Not Null, Average integer Not Null, Primary Key(Student_ID));";
		//Creates a table to hold the student ids and their competency scores from post course
		$nb=mysql_query($newtb) or die(mysql_error());
		
		$list="Select * From PRE_EVALUATION;";
		$lt=mysql_query($list) or die(mysql_error());
		
			while($row=mysql_fetch_array($lt))
			{
				$student=$row['Student_ID'];//Student ID
				
				$retrieve="Select REGISTRATION.ID AS ID,Year, Semester From REGISTRATION Inner Join OFFERING ON REGISTRATION.Offering_ID=OFFERING.ID Where Student_ID=$student AND Course_ID=$post Order by Semester ASC, Year DESC Limit 1;";
				//Obtain the semester and year of when, if they took the given post course
				$re=mysql_query($retrieve) or die(mysql_error());
				
				$count=mysql_num_rows($re);//Counts the outputed rows of the select for students who have taken the post course
				
				if($count!=0)
				{
					$row=mysql_fetch_array($re);
					$reg=$row['ID'];//Registration ID
					
					$command="Select Student_ID,100-((100/COUNT(Topic_ID))*Sum(Passed)) As Average From COMPETENCY Inner Join REGISTRATION ON REGISTRATION.ID=COMPETENCY.Registration_ID Where Registration_ID=$reg And Passed<2 Group by Student_ID;";
					//Tranform available competency scores from the given registration id into a usable average
					$cd=mysql_query($command) or die(mysql_error());
					
					$num=mysql_num_rows($cd);//Counts the rows outputed by $cd
					
					if($num==0)
					{
						$insert="Insert Into PostTest (Student_ID,Average) values ($student,0);";
						$in=mysql_query($insert) or die(mysql_error());
						//Inserts values a average of zero for students without competency scores for the post course they have taken
					}
					
						else
						{
							$row=mysql_fetch_array($cd);
							$av=$row['Average'];
							
							$insert="Insert Into PostTest(Student_ID, Average) values ($student, $av);";
							$in=mysql_query($insert) or die(mysql_error());
							//Inserts the available post course competency score for each student
						}
				}
			}
			
		$select="Select PostTest.Student_ID, Final_Grade,Average From PostTest Inner Join PRE_EVALUATION On PostTest.Student_ID=PRE_EVALUATION.Student_ID;";
		$sel=mysql_query($select) or die(mysql_error());
		//Joins PostTest and PRE_EVALUATION to obtain the final grade of the pre course and the competency score for the post test for each student
		
		$sumx = 0;
		$sumx2 = 0;
		$sumy = 0;
		$sumy2 = 0;
		$sumxy = 0;
		$n = 0;

		while($row=mysql_fetch_array($sel))
		{

		$x = $row['Final_Grade'];
		$y = $row['Average'];
		$sumx += $x;//Sum of All Final Grades
		$sumy += $y;//Sum of All Competency Scores
		$sumx2 += ($x * $x);//Sum of All Final Grades Squared
		$sumy2 += ($y * $y);//Sum of All Competency Scores Squared
		$sumxy += ($x * $y);//Sum of the Product of Final Grades and Competency Scores

		$n += 1;
		}
		
			$sumx_whole2 = $sumx * $sumx;//Squaring of the Sum of Final Grades
			$sumy_whole2 = $sumy * $sumy;//Squaring of the Sum of Competency Scores

			$m_undef=false;
			if(($n * $sumx2 - $sumx_whole2)==0)
			{
			$m_undef=true;
			}
			else
			{
			$m = ($n * $sumxy - $sumx * $sumy) / ($n * $sumx2 - $sumx_whole2);
			}

			$b_undef=false;
			if($n==0)
			{
			$b_undef=true;
			}
			else
			{
			$b = ($sumy - $m * $sumx) / $n;
			}

			$r_undef=false;
			if((sqrt($n * $sumx2 - $sumx_whole2) * sqrt($n * $sumy2 - $sumy_whole2))==0)
			{
			$r_undef=true;
			}
			else
			{
			$r = ($n * $sumxy - $sumx * $sumy) / (sqrt($n * $sumx2 - $sumx_whole2) * sqrt($n * $sumy2 - $sumy_whole2));
			}
			
			
			if($r_undef)
			{
			$do="Insert Into PRERQ_NA_$s$year(Pre_Course, Section, Professor,Post_Course) values (\"$d$cn\",\"$sec\",\"$p\",\"$pt_d$pt_n\");";
			$done=mysql_query($do) or die(mysql_error());
			}
			else
			{
			$do="Insert Into PRERQ_TEST_$s$year(Pre_Course,Section,Professor,Post_Course,N,R,M,B) values (\"$d$cn\",\"$sec\",\"$p\",\"$pt_d$pt_n\",$n,$r,$m,$b);";
			$done=mysql_query($do) or die(mysql_error());
			}
			
			$droptb="Drop table PostTest;";
			$tb=mysql_query($droptb) or die(mysql_error());
	}
	$dropvw="Drop view PRE_EVALUATION;";
	$dvw=mysql_query($dropvw) or die(mysql_error());
}

$run="Select Pre_Course, Section, Post_Course, R, M From PRERQ_TEST_$s$year;";
$rn=mysql_query($run) or die(mysql_error());//Executes the select statement to run through the PRERQ table

while($row=mysql_fetch_array($rn))
{
	$C=$row['Pre_Course'];
	$S=$row['Section'];
	$Pst=$row['Post_Course'];
	$R=$row['R'];
	$M=$row['M'];
	
	$var="Select Pre_Course, Post_Course, COUNT(Pre_Course), AVG(R),VARIANCE(R), AVG(M),VARIANCE(M) FROM PRERQ_TEST_$s$year Where Pre_Course=\"$C\" AND Post_Course=\"$Pst\" Group by Pre_Course;";
	$v=mysql_query($var) or die(mysql_error());//Executes a select that calculates the 
	
	$is=mysql_num_rows($v); 
	
	if($is>0)
	{
	$vr=mysql_fetch_array($v);
	$cnt=$vr['COUNT(Pre_Course)'];
	$av_r=$vr['AVG(R)'];
	$va_r=$vr['VARIANCE(R)'];
	$av_m=$vr['AVG(M)'];
	$va_m=$vr['VARIANCE(M)'];
	
	if($cnt>1)
	{
	$NormR=($R-$av_r)/SQRT($va_r);
	$NormM=($M-$av_m)/SQRT($va_m);
	
	$update="Update PRERQ_TEST_$s$year SET NormR=$NormR, NormM=$NormM Where Pre_Course=\"$C\" AND Section=\"$S\" AND Post_Course=\"$Pst\";";
	$up=mysql_query($update) or die(mysql_error());
	}
	}
	
}
?>		
			
			
			
		
		










