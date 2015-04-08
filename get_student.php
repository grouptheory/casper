<head>
<title>Export Results</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<div id="main" class="dv">
<table bgcolor="FFCC49" border=0>
<?php
session_start();
include('connect.php');

$year=$_POST['year'];
$course=$_POST['course_id'];
$semester=$_POST['semester'];
$section=$_POST['section'];
$password=$_POST['password'];

$offeringpw="Select Paswrd FROM OFFERING WHERE Course_ID=$course AND Section=$section AND Year=$year AND Semester=\"$semester\"";
$pw=mysql_query($offeringpw) or die(mysql_error());

$got=mysql_fetch_array($pw);
$pass=$got['Paswrd'];

if(strcmp($password,$pass)==0)
{
$_SESSION["passwrd"]=$password;
$_SESSION["year"]=$year;
$_SESSION["course_id"]=$course;
$_SESSION["semester"]=$semester;
$_SESSION["section"]=$section;

$list="Select SSN, CONCAT(LName,\",\",FName) AS Student, STUDENT.ID AS StudentID FROM STUDENT INNER JOIN REGISTRATION ON STUDENT.ID=REGISTRATION.Student_ID INNER JOIN OFFERING ON REGISTRATION.Offering_ID=OFFERING.ID INNER JOIN COURSE ON OFFERING.Course_ID=COURSE.ID Where Semester=\"$semester\" AND Year=$year AND COURSE.ID=$course AND Section=$section Order by Student";
$getlist=mysql_query($list) or die(mysql_error());

while($row=mysql_fetch_array($getlist))
{
$ssn=$row['SSN'];
$student=$row['Student'];
$id=$row['StudentID'];
$id+=265;
echo "<tr>
		<td>
		<a href=\"#\" onclick=\"window.location.replace('displayhis.php?studnt=$id');\">$student</a>
		</td>
			</tr>";
}
}
include('disconnect.php');

?>

</table>
</div>
			
			
			
