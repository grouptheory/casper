
<html>

<body bgcolor="#FF9949"><br><br>
 <table cellspacing="10" cellpadding="5" width="650" 
           bgcolor="#FFFF99" align="center">
      <caption>
        <font color="#000066" size="5"> Processing SALI data</font>
      </caption>

      <tr>

        <td align="center">
          <fieldset style="border-width:0; background:#FFCC49; width:550">
            <table width="100%" cellspacing ="15">

      <?php
            include("connect.php");

      $sali_path = $sali_path. basename($_FILES["upload_file"]["name"]);
      $input_file = basename($_FILES["upload_file"]["name"]);

      $upload = $_FILES['upload_file']['tmp_name'];
      
      echo "<tr><td width=\"220\"  valign=\"top\" align=\"left\">";
      echo "Attempting to upload the file $upload to $questions_path";
      echo "</td>";

      if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $sali_path)) {

         echo "<tr><td width=\"220\"  valign=\"top\" align=\"left\">";
         echo "Success! The file ".  basename( $_FILES['upload_file']['name']). 
	   " has been uploaded and saved in " . $sali_path;
	 echo "</td>";
	 echo "<tr><td>Beginning processing... this could take several minutes.<br></td></tr>";
	 ob_flush(); flush();

	 chmod($sali_path, $sali_permissions);

	 system("/var/www/html/casper/admin/dataprocessing/scripts/process1.sh ".$input_file);
	 ob_flush(); flush();
	 system("/var/www/html/casper/admin/dataprocessing/scripts/process2.sh ".$input_file);
	 ob_flush(); flush();
	 system("/var/www/html/casper/admin/dataprocessing/scripts/process3.sh ".$input_file);
	 ob_flush(); flush();

     $query_reg =("SELECT COUNT(*) AS Count FROM TEMP") or die(mysql_error());
     $myresult_reg = mysql_query($query_reg);
     $num_reg = mysql_result($myresult_reg, 0, "Count");

     $query_sec =("SELECT COUNT(DISTINCT(Regcode)) AS Count FROM TEMP") or die(mysql_error());
     $myresult_sec = mysql_query($query_sec);
     $num_sec = mysql_result($myresult_sec, 0, "Count");

echo "<tr><td>We have successfully added data about $num_reg students that were registered for $num_sec sections of courses using the information in the uploaded file... <br></td></tr>";

	 system("/var/www/html/casper/admin/dataprocessing/scripts/process4.sh ".$input_file);
	 ob_flush(); flush();
	 system("/var/www/html/casper/admin/dataprocessing/scripts/process5.sh ".$input_file);
	 ob_flush(); flush();
	 system("/var/www/html/casper/admin/dataprocessing/scripts/process6.sh ".$input_file);
	 ob_flush(); flush();
	 system("/var/www/html/casper/admin/dataprocessing/scripts/process7.sh ".$input_file);
	 ob_flush(); flush();
	 system("/var/www/html/casper/admin/dataprocessing/scripts/process8.sh ".$input_file);
	 ob_flush(); flush();
	 system("/var/www/html/casper/admin/dataprocessing/scripts/process9.sh ".$input_file);
	 ob_flush(); flush();

	 $logname = str_replace(".pdf",".log",$input_file);
	 $logname = str_replace(".PDF",".log",$logname);
	 $url = "$WEBSITE/casper/admin/dataprocessing/logs/$logname";
	 echo "Check the <a href=\"$url\">SALI processing log</a><br>";
      } 
      else{
         echo "<tr><td width=\"220\"  valign=\"top\" align=\"left\">";
         echo "There was an error uploading the file, please try again!";
         echo "Debugging info: <br>";
	 echo "Upload: " . $_FILES["upload_file"]["name"] . "<br>";
	 echo "Type: " . $_FILES["upload_file"]["type"] . "<br>";
	 echo "Size: " . ($_FILES["upload_file"]["size"] / 1024) . " Kb<br>";
	 echo "Stored in: " . $_FILES["upload_file"]["tmp_name"];
	 echo "</td>";
      }

      include("disconnect.php");
?>
</table>
 <tr>

        <td align="center">
          <hr width="100%" size="3" color="gray">
        </td>
      </tr>

  <tr>
      <td align="center" colspan="3">
      <a href="javascript:javascript:history.go(-1)">Return to Previous Page
      </a>
      </td>
    </tr>

</table>
</body>
</html>
