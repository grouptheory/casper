<html>
<head>
<title>Course Correlation Assessment</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<center>
<h3>Correlation Assessment</h3>
</center>
<div id="main">
<form method="post" action="switchboard.php">
<table bgcolor="FFCC49">
<caption>Type of Correlation to Conduct:</caption>
<tr>
<td>
<input type="radio" name="test" value="1" checked/>
Intra Test
</td>
<td colspan="4">(Correlate Assessment Score pre-Course VS. Final Exit Grade In Course)</td>
</tr>
<tr>
<td>
<input type="radio" name="test" value="2"/>
Inter Test
</td>
<td colspan="3">
(Correlate Final Grade in Prereq Course VS. Entrance Assessment In Course)
<td>
</tr>
<tr>
<td>
Choose Year:
</td>
<td>
<select name="year">
<?php

   include("connect.php");

$option="Select DISTINCT(Year) As Year From OFFERING Order by Year;";
$op=mysql_query($option) or die(mysql_error());

while($row=mysql_fetch_array($op))
{
$yr=$row['Year'];

echo "<option value=\"".$yr."\">" . $yr . "</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td>
Choose Semester:
</td>
<td>
<select name="sem">
<?php

$option2="Select DISTINCT(Semester) As Semester From OFFERING Order by Semester;";
$op2=mysql_query($option2) or die(mysql_error());

while($row=mysql_fetch_array($op2))
{
$sm=$row['Semester'];

echo "<option value=\"".$sm."\">" . $sm . "</option>";
}

   include("disconnect.php");

?>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="Submit">
</td>
</tr>
</table>
</form>  
</div>
</body>
</html>