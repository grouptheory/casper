<html>
<head>
<title>Filtered Intra Correlation Results</title>
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

$show="Select * From ASSESSMENT_$s$year Where N>=$n Order by $frst, $snd;";
$see=mysql_query($show) or die(mysql_error());

echo "Below we show all $s$year sections with >= $n assessments, ordered by $frst and $snd<BR>";
echo "For each section, we provide:<BR>";
echo "<b>R</b> Pearson coefficient between entrance assessment and final grade.<BR>";
echo "<b>M</b> slope of best fit line predicting final grade as a function of entrance assessment.<BR>";
echo "<b>B</b> the y intercept of the best fit line predicting final grade as a function of entrance assessment.<BR>";
echo "<b>NormR</b> is R expressed as a Z value (over all Rs for sections of this course).<BR>";
echo "<b>NormM</b> is M expressed as a Z value (over all Ms for sections of this course).<BR>";
echo "<table>
		<colgroup span=\"9\"/>
<tr style=\"background-color:gray\">
<th width=\"11%\">Course</th>
<th width=\"11%\">Section</th>
<th width=\"11%\">Instructor</th>
<th width=\"11%\"># of Students</th>
<th width=\"11%\">NormR</th>
<th width=\"11%\">NormM</th>
<th width=\"11%\">R</th>
<th width=\"11%\">M</th>
<th width=\"11%\">B</th>
</tr>
</table>";

echo "<div style=\"overflow: auto;height: 280px;\">";
echo "<table>";
echo "<colgroup span=\"9\"/>";
while($row=mysql_fetch_array($see))
{
	$C=$row['Course'];
	$S=$row['Section'];
	$P=$row['Professor'];
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
	
	if($NR<0)//Uses the values of NormR to keep in the 255 range which is the highest used to html codes for color
	{
	$display=255-($NR*-10);
	}
	else
	{
	$display=255-($NR*100);
	}
	$dec=round($display);//Converts display number into whole number
	
	$hex[0] = 0;//Array That Holds hexadecimal representation of numbers from 0-15
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

	$rem=$dec%16;//Returns the Remainder which become the first # converted into hex
	$div=$dec-$rem;
	$mul=$div/16;
	//Retrieves the multiple of the division that is either used as the second n# to be converted or to retrieve the second # to be converted 
	$b=$hex[$rem];//Finds corresponding hexidecimal for the remainder

	if($mul>=16)
	{
	$rem=$mul%16;//Repeats previous calculation for next remainder
	$div=$mul-$rem;
	$mul=$div/16;

	$a=$hex[$rem];
	}
	else
	{
	$a=$hex[$mul];//Converts multiple into hexadecimal form
	}
	
	
	echo "<tr style=\"background-color:#FF$a$b$a$b\">";
  	echo "<td width=\"11%\">" . $C . "</td>";
  	echo "<td width=\"11%\">" . $S . "</td>";
	echo "<td width=\"11%\">" . $P . "</td>";
  	echo "<td width=\"11%\">" . $N . "</td>";
	if(isset($NR))
	{
	echo "<td width=\"11%\">" . $NR . "</td>";
	echo "<td width=\"11%\">" . $NM . "</td>";
	}
	else
	{
	echo "<td width=\"11%\">Inapplicable</td>";
	echo "<td width=\"11%\">Inapplicable</td>";
	}
	echo "<td width=\"11%\">" . $R . "</td>";
  	echo "<td width=\"11%\">" . $M . "</td>";
	echo "<td width=\"11%\">" . $B . "</td>";
  	echo "</tr>";
	
}
echo "</table>";
echo "</div>";
echo "<BR>";
echo "<BR>";

$var2="Select Course,COUNT(Course), AVG(R), VARIANCE(R), AVG(M), VARIANCE(M) FROM ASSESSMENT_$s$year Where N>=$n Group by Course Order by Course;";
$v2=mysql_query($var2) or die(mysql_error());

echo "VARIANCE OF COURSE in $s$year ASSESSMENT With Minimum $n Students.";
echo "<table border=1>
<tr style=\"background-color:gray\">
<th>Course</th>
<th># of Sections</th>
<th>AVG(R)</th>
<th>VAR(R)</th>
<th>AVG(M)</th>
<th>VAR(M)</th>
</tr>";
while($row=mysql_fetch_array($v2))
{
$crse=$row['Course'];
$crseN=$row['COUNT(Course)'];
$avgR=$row['AVG(R)'];
$varR=$row['VARIANCE(R)'];
$avgM=$row['AVG(M)'];
$varM=$row['VARIANCE(M)'];

echo "<tr style=\"background-color:gray\">";
echo "<td>" . $crse . "</td>";
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
echo "<form method=\"post\" action=\"intra.php\">";

echo "Filter Results Again";
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
	  <option value=\"R\">R</option>
	  <option value=\"NormR\">NormR</option>
	  </select>";
	  
echo "<BR>";
echo "<BR>";

echo "Then Sort by:";
echo "<select name=\"second_sort\">
	 <option value=\"Course\">Course</option>
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

