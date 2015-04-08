<html>
<head>
<title>Filtered Inter Correlation Results</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php

   include("connect.php");

$n=$_POST['student'];
$frst=$_POST['first_sort'];
$snd=$_POST['second_sort'];
$s=$_POST['sem'];
$year=$_POST['year'];

$show="Select * FROM PRERQ_TEST_$s$year Where N>=$n Order by $frst, $snd;";
$see=mysql_query($show) or die(mysql_error());

echo "Below we show all $s$year sections with >= $n assessments, ordered by $frst and $snd<BR>";
echo "For each section, we provide:<BR>";
echo "<b>R</b> Pearson coefficient between final grade in prerequisite and entrance assessment.<BR>";
echo "<b>M</b> slope of best fit line predicting entrance assessment from prerequisite course final grade.<BR>";
echo "<b>B</b> the y intercept of the best fit line predicting entrance assessment from prerequisite course final grade.<BR>";
echo "<b>NormR</b> is R expressed as a Z value (over all Rs for sections of this course).<BR>";
echo "<b>NormM</b> is M expressed as a Z value (over all Ms for sections of this course).<BR>";

echo "<table border=1>
<tr style=\"background-color:gray\">
<th width=\"11%\">Pre Course</th>
<th width=\"11%\">Section</th>
<th width=\"11%\">Instructor</th>
<th width=\"11%\">Post Course</th>
<th width=\"11%\"># of Students</th>
<th width=\"11%\">NormR</th>
<th width=\"11%\">NormM</th>
<th width=\"11%\">R</th>
<th width=\"11%\">M</th>
<th width=\"11%\">B</th>
</tr>";

while($row=mysql_fetch_array($see))
{
	$PRE=$row['Pre_Course'];
	$SEC=$row['Section'];
	$PROF=$row['Professor'];
	$POST=$row['Post_Course'];
	$R=$row['R'];
	  $R=round($R*100)/100.0;
	$NR=$row['NormR'];
	  $NR=round($NR*100)/100.0;
	$M=$row['M'];
	  $M=round($M*100)/100.0;
	$NM=$row['NormM'];
	  $NM=round($NM*100)/100.0;
	$B=$row['B'];
	  $B=round($B*100)/100.0;
	$N=$row['N'];
	  $N=round($N*100)/100.0;
	
	if($NR<0)
	{
	$display=255-($NR*-10);
	}
	else
	{
	$display=255-($NR*100);
	}
	$dec=round($display);
	
	$hex[0] = 0;
	$hex[1] = 1;
	$hex[2] = 2;
	$hex[3] = 3;
	$hex[4] = 4;
	$hex[5] = 5;
	$hex[6] = 6;
	$hex[7] = 7;
	$hex[8] = 8;
	$hex[9] = 9;
	$hex[10] = "A";
	$hex[11] = "B";
	$hex[12] = "C";
	$hex[13] = "D";
	$hex[14] = "E";
	$hex[15] = "F";

	$rem=$dec%16;
	$div=$dec-$rem;
	$mul=$div/16;
	$b=$hex[$rem];

	if($mul>=16)
	{
	$a++;
	$rem=$mul%16;
	$div=$mul-$rem;
	$mul=$div/16;

	$a=$hex[$rem];
	}
	else
	{
	$a=$hex[$mul];
	}

	echo "<tr style=\"background-color:#FF$a$b$a$b\">";
  	echo "<td width=\"11%\">" . $PRE . "</td>";
  	echo "<td width=\"11%\">" . $SEC . "</td>";
	echo "<td width=\"11%\">" . $PROF . "</td>";
	echo "<td width=\"11%\">" . $POST . "</td>";
  	echo "<td width=\"11%\">" . $N . "</td>";
	if(isset($NR))
	{
	echo "<td width=\"11%\">" . $NR. "</td>";
	echo "<td width=\"11%\">" . $NM . "</td>";
	}
	else
	{
	echo "<td width=\"11%\">Inapplicable</td>";
	echo "<td width=\"11%\">Inapplicable</td>";
	}
	echo "<td width=\"11%\">" . $R. "</td>";
  	echo "<td width=\"11%\">" . $M . "</td>";
	echo "<td width=\"11%\">" . $B . "</td>";
  	echo "</tr>";
}
echo "</table>";

echo "<BR>";
echo "<BR>";

$var2="Select Pre_Course, Post_Course,COUNT(Pre_Course), AVG(R), VARIANCE(R), AVG(M), VARIANCE(M) FROM PRERQ_TEST_$s$year Where N>=$n Group by Pre_Course,Post_Course Order by Pre_Course;";
$v2=mysql_query($var2) or die(mysql_error());

echo "VARIANCE OF PRE_COURSE VS POST_COURSE in $s$year with Minimum $n Students.";
echo "<table border=1>
<tr style=\"background-color:gray\">
<th>Pre_Course</th>
<th>Post_Course</th>
<th># of Sections</th>
<th>AVG(R)</th>
<th>VAR(R)</th>
<th>AVG(M)</th>
<th>VAR(M)</th>
</tr>";
while($row=mysql_fetch_array($v2))
{
$crse=$row['Pre_Course'];
$pcrse=$row['Post_Course'];
$crseN=$row['COUNT(Pre_Course)'];
$avgR=$row['AVG(R)'];
$varR=$row['VARIANCE(R)'];
$avgM=$row['AVG(M)'];
$varM=$row['VARIANCE(M)'];

echo "<tr style=\"background-color:gray\">";
echo "<td>" . $crse . "</td>";
echo "<td>" . $pcrse . "</td>";
echo "<td>" . $crseN. "</td>";
echo "<td>" . $avgR . "</td>";
echo "<td>" . $varR . "</td>";
echo "<td>" . $avgM . "</td>";
echo "<td>" . $varM . "</td>";
echo "<tr>";
}

echo "</table>";

echo "<BR>";
echo "<BR>";

echo "<div id=\"main\">";
echo "<form method=\"post\" action=\"inter.php\">";

echo "Filter Results Again:<BR>";
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
echo "OR";
echo "<form action=\"formANALYSIS.php\">";
echo "<input type=\"submit\" value=\"New Correlation\">";
echo "</form>";
echo "</div>";

   include("disconnect.php");

?>
</body>
</html>
