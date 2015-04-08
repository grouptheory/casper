<html>
<head>
<title>Export Results</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>

<?php 
session_start();
$student=$_GET['studnt'];
$student-=265;


include('connect.php');

if(isset($_SESSION["passwrd"]))
{
$get_name="Select CONCAT(LName,\",\",FName) AS Student from STUDENT WHERE ID=$student";
$gn=mysql_query($get_name) or die(mysql_error());

$named=mysql_fetch_array($gn);
$name=$named['Student'];

echo "<b>$name</b><BR><BR>";
echo "<div style=\"height:70%; width:100%; overflow-y:scroll;\">";
$year_trm="Select DISTINCT(Year) AS Year, Semester from OFFERING Order by Year,Semester DESC";
$yearandsem=mysql_query($year_trm) or die(mysql_error());

while($row=mysql_fetch_array($yearandsem))
{
$sem=$row['Semester'];
$yr=$row['Year'];

echo "<h5>$sem $yr</h5>";
echo "<div>";
		
$courses_tkn="Select CONCAT(COURSE.Department,COURSE.Number) AS COURSE, PROF.Name As Professor, Grade, REGISTRATION.ID AS Registration FROM OFFERING INNER JOIN REGISTRATION ON  OFFERING.ID=REGISTRATION.Offering_ID INNER JOIN COURSE ON COURSE.ID=OFFERING.Course_ID INNER JOIN PROF ON PROF.ID=OFFERING.Prof_ID WHERE YEAR=$yr AND Semester=\"$sem\" AND Student_ID=$student";
$taken=mysql_query($courses_tkn) or die(mysql_error());
$count=mysql_num_rows($taken);

if($count>0)
{

	while($row2=mysql_fetch_array($taken))
	{
	$crse=$row2['COURSE'];
	$prof=$row2['Professor'];
	$final_grade=$row2['Grade'];
	$regcode=$row2['Registration'];
	
	$competency="Select Topic_ID, Passed From COMPETENCY WHERE Registration_ID=$regcode order by Topic_ID";
	$comp=mysql_query($competency) or die(mysql_error());
		
		echo "<table><colgroup span=\"3\" width=\"250\"/>";
		echo "<tr style=\"background-color:FFCC49\">";
		echo "<th>Course:$crse</th>
			<th>Instructor:$prof</th>";
			
			if(empty($final_grade))
			echo "<th>Final Grade:N/A</th>";
			else
			echo "<th>Final Grade:$final_grade</th>";	
		echo "</tr>";
		
		if(mysql_num_rows($comp)>0)
		{
			$passed=array();
			$failed=array();
			$set=False;
		
		echo "<tr style=\"background-color:FFFF99\"><th colspan=\"3\">Entrance Assessment Results</th></tr>";
		echo "<tr style=\"background-color:FFFF99\"><th colspan=\"2\">Passed</th><th>Failed</th></tr>";
			while($out=mysql_fetch_array($comp))
			{
			$score=$out['Passed'];
				if($score==2)
				{
				echo "<tr style=\"background-color:FFFF99\"><td colspan=\"3\">Student assessment scores unavailable</td></tr>";
				break;
				}
				else
				{
				$topic=$out['Topic_ID'];
				$topicNme="Select Name From TOPIC Where ID=$topic";
				$top=mysql_query($topicNme) or die(mysql_error());
				$rslt=mysql_fetch_array($top);
				$topic_name=$rslt['Name'];
					
					if($score==0)
					{
					$passed[]=$topic_name;
					}
					else
					{
					$failed[]=$topic_name;
					}
				}
			$set=True;
			}
			
			if($set)
			{
					if(count($passed)>count($failed))
					{
					$len=count($passed);
					}
					else
					{
					$len=count($failed);
					}
		
					for($i=0;$i<$len;$i++)
					{
						echo "<tr style=\"background-color:FFFF99\">";
			
						if(isset($passed[$i]))
						echo "<td colspan=\"2\">$passed[$i]</td>";
						else
						echo "<td colspan=\"2\"></td>";
			
						if(isset($failed[$i]))
						echo "<td>$failed[$i]</td>";
						else
						echo "<td></td>";
			
						echo "</tr>";
					}
			}
		
		}
		else
		{
		echo "<tr style=\"background-color:FFFF99\"><td colspan=\"3\">!!!No available assessment scores for this course!!!</td></tr>";
		}
		echo "</table>";
	}
	
}
else
{
echo "<h4 style=\"background-color:FFCC49;width:700\">!!!No registered courses for this semester!!!</h4>";
}
echo "</div>";
echo "<BR>";
}
		$year=$_SESSION["year"];
		$password=$_SESSION["passwrd"];
		$course=$_SESSION["course_id"];
		$section=$_SESSION["section"];
		$semester=$_SESSION["semester"];
		
echo "</div>";

echo "<form method=\"post\" action=\"get_student.php\">
		<input type=\"hidden\" name=\"year\" value='$year' />
		<input type=\"hidden\" name=\"password\" value='$password'/>
		<input type=\"hidden\" name=\"course_id\" value='$course'/>
		<input type=\"hidden\" name=\"section\" value='$section'/>
		<input type=\"hidden\" name=\"semester\" value='$semester'/>
		<input type=\"submit\" value=\"Back to Student List\"/>
		</form>";
		
session_destroy();
}
else
echo "<center><h2>Access Denied</h2></center>";
include('disconnect.php');
?>
</html>