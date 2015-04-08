
<html>
<head>
   <meta name="generator" content=
   "HTML Tidy for Linux/x86 (vers 18 June 2008), see www.w3.org">
   <title></title>
</head>
<body bgcolor="#FF9949">
  
   <table bgcolor="#FFFF99" cellspacing="8" cellpadding="4" border="0" width="620" align="center">
     <caption>
       <font color="#000066" size="5">
        Viewing Instructor Passwords for Course/Sections
       </font>
     </caption>
    
       <?php
             include("connect.php");

       $offering_year = $_POST['year'];
       $offering_semester =$_POST['semester'];


     $query_reg =("SELECT COUNT(REGISTRATION.ID) AS Count FROM REGISTRATION, OFFERING WHERE REGISTRATION.Offering_ID=OFFERING.ID AND OFFERING.Year=\"$offering_year\" AND OFFERING.Semester=\"$offering_semester\"") or die(mysql_error());
     $myresult_reg = mysql_query($query_reg);
     $num_reg = mysql_result($myresult_reg, 0, "Count");

     $query_sec =("SELECT COUNT(ID) AS Count FROM OFFERING WHERE Year=\"$offering_year\" AND Semester=\"$offering_semester\"") or die(mysql_error());
     $myresult_sec = mysql_query($query_sec);
     $num_sec = mysql_result($myresult_sec, 0, "Count");


$file_name="/var/www/html/casper/admin/dataprocessing/processed/passwords-$offering_year"."-$offering_semester.pdf";
$url = "$WEBSITE/casper/admin/dataprocessing/processed/passwords-$offering_year"."-$offering_semester.pdf";
if(file_exists($file_name))
  {
echo "<tr><td>We have data about $num_reg students that were registered for $num_sec sections of courses in $offering_year, $offering_semester.  Here is a PDF version of the existing <a href=\"$url\">password file</a> for $offering_year ($offering_semester) <br></td></tr>";
  }
 else
   {
     if ($num_reg==0 && $num_sec==0) {
       echo "<tr><td>It appears as though the SALI file for $offering_year, $offering_semester ($offering_semester-$offering_year.pdf) has not yet been processed because no data for that year/semester exists in the database.  Please process the appropriate SALI file ($offering_semester-$offering_year.pdf) before attempting to generate passwords for sections!</td></tr>";
     }
     else {
echo "<tr><td>We have data about $num_reg students that were registered for $num_sec sections of courses in $offering_year, $offering_semester.  However, no password file exists for for $offering_year, $offering_semester!<br>";

       echo "<tr><td><center><form method=\"post\" action=\"$WEBSITE/casper/admin/processPASSWORDgenerate.php\">";
       echo "<input type=\"hidden\" name=\"year\" value=\"$offering_year\">";
       echo "<input type=\"hidden\" name=\"semester\" value=\"$offering_semester\">";
       echo "<input type=\"submit\" name=\"submit\" value=\"generate passwords for $offering_year, $offering_semester\">";
       echo "</form></center></td></tr>";
     }
   }
  
     include("disconnect.php");

      ?>
        
    <tr><td colspan="3" align="center">
    <hr width="100%" size="3" color="gray">
       </td>
    </tr>
    <tr><td colspan="3" align="center">
       
       <a href="javascript:javascript:history.go(-1)">Return to Previous Page</a>
       </td>
    </tr>
</table>
</body>
</html>
