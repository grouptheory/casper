<html>
<head>
<Title>Filter Results</Title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<div id="main">
<?php


   include("connect.php");

$test=$_POST['test'];

$s=$_POST['sem'];

$year=$_POST['year'];

echo "<body>";
if($test==1)
{
include('assess.php');

echo "<form method=\"post\" action=\"intra.php\">";

echo "Filter Results";
echo "<input type=\"hidden\" name=\"sem\" value=\"$s\"/>";
echo "<input type=\"hidden\" name=\"year\" value=\"$year\"/>";
echo "<BR>";

echo "Minimum Amount of Students:";
echo "<input type=\"text\" name=\"student\" size=\"3\"/>";
echo "<BR>";
echo "<BR>";

echo "First Sort by:";
echo "<select name=\"first_sort\">
      <option value=\"Course\">Course</option>
	  <option value=\"Professor\">Instructor</option>
	  <option value=\"R\">Pearson R</option>
	  <option value=\"NormR\">Normalized Pearson R</option>
	  </select>";
	  
echo "<BR>";
echo "<BR>";

echo "Then Sort by:";
echo "<select name=\"second_sort\">
	 <option value=\"Course\">Course</option>
	 <option value=\"Professor\">Instructor</option>
	 <option value=\"R\">Pearson R</option>
	 <option value=\"NormR\">Normalized Pearson R</option>
	 </select>";
	 
echo "<BR>";
echo "<BR>";

echo "<input type=\"submit\" value=\"Show Data\">";
echo "</form>";
}
else
{
include('prereq.php');

echo "<form method=\"post\" action=\"inter.php\">";

echo "Filter Results:<BR>";
echo "<input type=\"hidden\" name=\"sem\" value=\"$s\"/>";
echo "<input type=\"hidden\" name=\"year\" value=\"$year\"/>";
echo "<BR>";

echo "Minimum Amount of Students:";
echo "<input type=\"text\" name=\"student\" size=\"3\"/>";
echo "<BR>";
echo "<BR>";

echo "First Sort by:";
echo "<select name=\"first_sort\">
      <option value=\"Pre_Course\">Course</option>
	  <option value=\"Professor\">Instructor</option>
	  <option value=\"R\">R</option>
	  <option value=\"NormR\">NormR</option>
	  </select>";
	  
echo "<BR>";
echo "<BR>";

echo "Then Sort by:";
echo "<select name=\"second_sort\">
	 <option value=\"Pre_Course\">Course</option>
	 <option value=\"Professor\">Instructor</option>
	 <option value=\"R\">R</option>
	 <option value=\"NormR\">NormR</option>
	 </select>";
	 
echo "<BR>";
echo "<BR>";

echo "<input type=\"submit\" value=\"Show Data\">";
echo "</form>";
}
echo "</body>";

include("disconnect.php");

?>
</div>
</html>



