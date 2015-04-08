<html>
<head>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>

<?php
include('connect.php');

$dblecheck="Drop Table IF EXISTS EX_TEMP";
$do=mysql_query($dblecheck) or die(mysql_err());

$export_type=$_POST['export'];
$year=$_POST['year'];
$semester=$_POST['semester'];

if(strcmp("active",$export_type)==0)
{

$create="Create Table EX_TEMP(Course varchar(6), Number varchar(6), Section varchar(6),Professor varchar(40), State varchar(6),Primary Key(Course,Number,Section))ENGINE=INNODB";
$made=mysql_query($create) or die(mysql_error());

$expo="Select COURSE.Department AS Course, Number, Section, PROF.Name As Professor, Active FROM OFFERING INNER JOIN COURSE ON OFFERING.Course_ID=COURSE.ID INNER JOIN PROF ON OFFERING.Prof_ID=PROF.ID Where Year=$year and Semester=\"$semester\" and Active=\"True\" Order By Course, Number, Section";
$ex=mysql_query($expo) or die(mysql_error());

echo "<table>
		<caption>Currently Active Courses</caption>
		<colgroup span=\"5\"/>
		<tr style=\"background-color:FFCC49\"><td><b>Course</b></td><td><b>Number</b></td><td><b>Section</b></td><td><b>Professor</b></td><td><b>Active</b></td></tr></table>";

echo "<div style=\"overflow: auto;height: 280px;\">";
echo "<table>
		<colgroup span=\"5\"/>";
		
		while($row=mysql_fetch_array($ex))
		{
		$crse=$row['Course'];
		$num=$row['Number'];
		$sec=$row['Section'];
		$prof=$row['Professor'];
		$status=$row['Active'];
		
		$insert="Insert Into EX_TEMP(Course,Number,Section,Professor,State) values(\"$crse\",\"$num\",\"$sec\",\"$prof\",\"$status\")";
		$in=mysql_query($insert) or die(mysql_error());
		echo "<tr style=\"background-color:FFFF99\"><td>$crse</td><td>$num</td><td>$sec</td><td>$prof</td><td>$status</td></tr>";
		}
}
else if(strcmp("student",$export_type)==0)
{
$create="Create Table EX_TEMP(Student_Code varchar(25), LName varchar(20), FName varchar(20),Department varchar(6), Number varchar(6), Section varchar(6), Topic varchar(255),Passed integer,Grade varchar(5))ENGINE=INNODB";
$made=mysql_query($create) or die(mysql_error());

$expo="Select CONCAT(STUDENT.SSN, STUDENT.Initials) As Student, LName, FName, COURSE.Department AS Course, Number, Section, TOPIC.Name AS Topic, Passed, Grade FROM REGISTRATION INNER JOIN OFFERING On REGISTRATION.Offering_ID=OFFERING.ID INNER JOIN COURSE ON OFFERING.Course_ID=COURSE.ID INNER JOIN STUDENT ON REGISTRATION.Student_ID=STUDENT.ID Inner Join COMPETENCY ON COMPETENCY.Registration_ID=REGISTRATION.ID INNER JOIN TOPIC ON COMPETENCY.Topic_ID=TOPIC.ID Where Semester=\"$semester\" AND Year=$year Order by Number, Section, Topic, Passed, Grade";
$ex=mysql_query($expo) or die(mysql_error());

echo "<table>
		<caption>Student Topic Scores</caption>
		<colgroup span=\"9\"/>
		<tr style=\"background-color:FFCC49\"><td><b>Student Code</b></td><td><b>Last Name</b></td><td><b>First Name</b></td><td><b>Course</b></td><td><b>Number</b></td><td><b>Section</b></td><td>Topic</b></td><td><b>Passed</b></td><td><b>Grade</b></td></tr></table>";

echo "<div style=\"overflow: auto;height: 280px;\">";
echo "<table>
		<colgroup span=\"9\"/>";
		
		while($row=mysql_fetch_array($ex))
		{
		$stcde=$row['Student'];
		$lnme=$row['LName'];
		$fnme=$row['FName'];
		$crse=$row['Course'];
		$num=$row['Number'];
		$sec=$row['Section'];
		$topic=$row['Topic'];
		$pass=$row['Passed'];
		$grde=$row['Grade'];
		
		$insert="Insert Into EX_TEMP(Student_Code,LName,FName,Department,Number,Section,Topic,Passed,Grade) values(\"$stcde\",\"$lnme\",\"$fnme\",\"$crse\",\"$num\",\"$sec\",\"$topic\",$pass,\"$grde\")";
		$in=mysql_query($insert) or die(mysql_error());
		echo "<tr style=\"background-color:FFFF99\"><td>$stcde</td><td>$lnme</td><td>$fnme</td><td>$crse</td><td>$num</td><td>$sec</td><td>$topic</td><td>$pass</td><td>$grde</td></tr>";
		}
}

else
{
$create="Create Table EX_TEMP(Department varchar(6),Number varchar(6),Section varchar(6), LName varchar(20), FName varchar(20),Grade varchar(5),Email varchar(60))ENGINE=INNODB";
$made=mysql_query($create) or die(mysql_error());
$insert="Insert Into EX_TEMP(Department,Number,Section,LName,FName,Grade,Email) values(\"$crse\",\"$num\",\"$sec\",\"$lnme\",\"$fnme\",\"$grde\",\"$email\")";

$expo="Select Department,Number,Section,LName,FName,Grade,Email From REGISTRATION INNER JOIN OFFERING ON REGISTRATION.Offering_ID=OFFERING.ID INNER JOIN STUDENT ON REGISTRATION.Student_ID=STUDENT.ID INNER JOIN COURSE ON OFFERING.Course_ID=COURSE.ID WHERE Year=$year and Semester=\"$semester\" and (Grade Like \"W%\" or Grade=\"F\") Order BY LName,FName";
$ex=mysql_query($expo) or die(mysql_error());

echo "<table>
		<caption>Students Who Failed or Withdrew</caption>
		<colgroup span=\"7\"/>
		<tr style=\"background-color:FFCC49\"><td><b>Course</b></td><td><b>Number</b></td><td><b>Section</b></td><td><b>LName</b></td><td><b>FName</b></td><td><b>Grade</b></td><td>Email</b></td></tr></table>";

echo "<div style=\"overflow: auto;height: 280px;\">";
echo "<table>
		<colgroup span=\"7\"/>";
		
		while($row=mysql_fetch_array($ex))
		{
		$lnme=$row['LName'];
		$fnme=$row['FName'];
		$crse=$row['Department'];
		$num=$row['Number'];
		$sec=$row['Section'];
		$email=$row['Email'];
		$grde=$row['Grade'];
		
		$insert="Insert Into EX_TEMP(Department,Number,Section,LName,FName,Grade,Email) values(\"$crse\",\"$num\",\"$sec\",\"$lnme\",\"$fnme\",\"$grde\",\"$email\")";
		$in=mysql_query($insert) or die(mysql_error());
		echo "<tr style=\"background-color:FFFF99\"><td>$crse</td><td>$num</td><td>$sec</td><td>$lnme</td><td>$fnme</td><td>$grde</td><td>$email</td></tr>";
		}
}
		echo "</table>";
		
		if (file_exists("/var/lib/mysql/CASPER/$export_type$semester$year.csv")) {
			unlink("/var/lib/mysql/CASPER/$export_type$semester$year.csv");
			//echo "THE FILE WAS DELETED<BR>";
		}
		else {
			//echo "NO PROBLEM<BR>";
		}

		$retrieve="Select * INTO OUTFILE '$export_type$semester$year.csv' FIELDS TERMINATED BY ', ' LINES TERMINATED BY '\n' FROM EX_TEMP";
		$got=mysql_query($retrieve) or die(mysql_error());

		rename("/var/lib/mysql/CASPER/$export_type$semester$year.csv", "/var/www/html/casper/admin/reports/$export_type$semester$year.csv");

		echo "</div>"; 

echo "<a href=\"http://fclab.jjay.cuny.edu/casper/admin/reports/$export_type$semester$year.csv\">Right click to save export file</a>";
		
		
include('disconnect.php');
?>
</html>

