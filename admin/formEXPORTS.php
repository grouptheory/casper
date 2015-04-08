<html>
<head>
<title>Export Results</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="#FF9949">
<form method="post" action="export_exe.php">
<center>
<h3>Data Exports</h3>
<div id="main">
<table bgcolor="FFCC49">
<caption>Type of Export to Conduct</caption>
<tr>
<td>
Active Courses
</td>
<td>
<input type="radio" name="export" value="active" checked />
</td>
</tr>
<tr>
<td>
Student Scores
</td>
<td>
<input type="radio" name="export" value="student"/>
</td>
</tr>
<tr>
<td>
Failed or Withdrawn Students
</td>
<td>
<input type="radio" name="export" value="email"/>
</td>
</tr>
<tr>
<td>
Select Year:
</td>
<td>
<select name="year">
<?php

include ('connect.php');

$list_yr="Select DISTINCT(Year) From OFFERING";
$years=mysql_query($list_yr) or die(mysql_error());

while($row=mysql_fetch_array($years))
{
$year=$row['Year'];
echo "<option value=\"$year\">$year</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td>
Select Semester:
</td>
<td>
<select name="semester">
<?php

$list_sem="Select DISTINCT(Semester) From OFFERING";
$sems=mysql_query($list_sem) or die(mysql_error());

while($row=mysql_fetch_array($sems))
{
$sem=$row['Semester'];
echo "<option value=\"$sem\">$sem</option>";
}
include('disconnect.php')
?>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="Export"/>
</td>
</tr>
</table>
</div>
</center>
</body>
</html>

