<?php

$drop="Drop Table If Exists ASSESSMENT_$s$year, DELINQUENT_$s$year;";
$dp=mysql_query($drop) or die(mysql_error());

$find="Select ID FROM OFFERING WHERE Semester=\"$s\" And Year=$year;";

$result=mysql_query($find) or die(mysql_error());

$do="Create Table ASSESSMENT_$s$year(Course varchar(10), Section varchar(6), Professor varchar(40), N integer, NormR double Null, NormM double Null, R double, M double , B double, Primary Key(Course,Section));";
$done=mysql_query($do) or die(mysql_error());

$do2="Create Table DELINQUENT_$s$year(Course varchar(10), Section varchar(6), Professor varchar(40),Primary Key(Course,Section));";

$done2=mysql_query($do2) or die(mysql_error());

while ($rw=mysql_fetch_array($result))
{

$id=$rw['ID'];

$vw="Create View EVALUATION AS Select Student_ID, Topic_ID, Passed, Grade From REGISTRATION Inner Join COMPETENCY On REGISTRATION.ID=COMPETENCY.Registration_ID Where Offering_ID=$id And Passed<2;";

$do=mysql_query($vw) or die(mysql_error());

$info="Select Department,Number, Section, Professor From DATA Where ID=$id;";

$rslt=mysql_query($info) or die(mysql_error());

$dt=mysql_fetch_array($rslt);
$d=$dt['Department'];
$c=$dt['Number'];
$sec=$dt['Section'];
$t=$dt['Professor'];


$get="Select Student_ID, 100-((100/COUNT(Topic_ID))*Sum(Passed)) As Average, MAX(Numerical) As Final_Grade From EVALUATION Inner Join GRADE On EVALUATION.Grade=GRADE.Letter Group By Student_ID Having Final_Grade>-1 Order by Average;";

$result2=mysql_query($get) or die(mysql_error());


$sumx = 0;
$sumx2 = 0;
$sumy = 0;
$sumy2 = 0;
$sumxy = 0;
$n = 0;

while($row=mysql_fetch_array($result2))
{
 	$x = $row['Average'];
	$y = $row['Final_Grade'];
	$sumx += $x;
	$sumy += $y;
	$sumx2 += ($x * $x);
	$sumy2 += ($y * $y);
	$sumxy += ($x * $y);

	$n += 1;
}

$sumx_whole2 = $sumx * $sumx;
$sumy_whole2 = $sumy * $sumy;

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
$in="Insert Into DELINQUENT_$s$year(Course, Section, Professor) values(\"$d$c\",\"$sec\",\"$t\");";
$done=mysql_query($in) or die(mysql_error());
}
else
{
$in="Insert Into ASSESSMENT_$s$year(Course,Section,Professor,N,R,M,B) values(\"$d$c\",\"$sec\",\"$t\",$n,$r,$m,$b);";
$done=mysql_query($in) or die(mysql_error());
}

$vw="Drop View EVALUATION;";
$do=mysql_query($vw) or die(mysql_error());
}

$run="Select * From ASSESSMENT_$s$year;";
$rn=mysql_query($run) or die(mysql_error());

while($row=mysql_fetch_array($rn))//Loop inserts NormR and NormM values in corresponding row where accessible
{
	$C=$row['Course'];
	$S=$row['Section'];
	$P=$row['Professor'];
	$R=$row['R'];
	$M=$row['M'];
	$B=$row['B'];
	$N=$row['N'];
	
	$var="Select Course, COUNT(Course), AVG(R),VARIANCE(R), AVG(M),VARIANCE(M) FROM ASSESSMENT_$s$year Where Course=\"$C\" Group by Course;";
	$v=mysql_query($var) or die(mysql_error());
	
	$vr=mysql_fetch_array($v);
	$cnt=$vr['COUNT(Course)'];
	$av_r=$vr['AVG(R)'];
	$va_r=$vr['VARIANCE(R)'];
	$av_m=$vr['AVG(M)'];
	$va_m=$vr['VARIANCE(M)'];
	
	if($cnt>1)
	{
	$NormR=($R-$av_r)/SQRT($va_r);
	$NormM=($M-$av_m)/SQRT($va_m);
	
	$update="Update ASSESSMENT_$s$year SET NormR=$NormR, NormM=$NormM Where Course=\"$C\" AND Section=\"$S\";";
	$up=mysql_query($update) or die(mysql_error());
	}
}

?>




