<html>

<head>
<title></title>
</head>

<body bgcolor="#FF9949">
  <a name="(top)"></a><br>

  <form method="post" action="processSALI.php" 
        name="SALI" enctype ="multipart/form-data" ID="aform">
    <br>

    <table cellspacing="10" cellpadding="5" width="620" 
           bgcolor="#FFFF99" align="center">
      <caption>
        <font color="#000066" size="4">Process SALI Data</font>
      </caption>

      <tr>

        <td align="center">

          <fieldset style="border-width:0; background:#FFCC49; width:500">
            <table width="100%" cellspacing ="15">
              
<?php
  include("connect.php");

echo "<tr><td width=\"120\" colspan=\"2\" valign=\"top\" align=\"right\">";
echo "SALI PDF File:
          </td>";

echo "<td width=\"120\" align=\"left\">";
echo "<input type=\"file\" name=\"upload_file\">";
echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"100000\">";
echo "</td></tr>";

include("disconnect.php");

?>
            </table>
          </fieldset>
        </td>
      </tr>

<tr><td>
	    <B>Note 1:</B> the SALI file can be named whatever you like as long as it ends in .PDF or .pdf ... It is recommended to name the files SS-YYYY-CCC.pdf, where SS indicates the semester (FA, SP, or SU for Fall, Spring and Summer), and YYYY indicates the year (e.g. 2007, 2008, 2009), and CCCC indicates the department (e.g. MAT or MATH or... ?)  Note that the system has not been tested outside of MAT and MATH.  Also, if the SALI export layout format changes significantly, this program will need to be revised.  
</td></tr>
<tr><td align="center">
  <B>This operation may take upto 5 minutes! <BR>
You will receive feedback on progress, shortly...</B>
</td></tr>
      <tr>
        <td align="center"><input type="submit" name="submitbutton"
        value="Process the data"</td>
      </tr>

      <tr>

        <td align="center">
          <hr width="100%" size="3" color="gray">
        </td>
      </tr>

    </table>

    </form>
</body>
</html>
