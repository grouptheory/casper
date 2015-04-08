
<html>

<body bgcolor="#FF9949"><br><br>
 <table cellspacing="10" cellpadding="5" width="650" 
           bgcolor="#FFFF99" align="center">
      <caption>
        <font color="#000066" size="5"> Add Question</font>
      </caption>

      <tr>

        <td align="center">
          <fieldset style="border-width:0; background:#FFCC49; width:550">
            <table width="100%" cellspacing ="15">

      <?php
            include("connect.php");

      $questions_path = $questions_path. basename($_FILES["upload_file"]["tmp_name"]);

      $upload = $_FILES['upload_file']['tmp_name'];
      
      $topic = $_POST['topic'];
      $num_answer =$_POST['num_answer'];
      $correct_answer =$_POST['correct_answer'];

      echo "<tr><td width=\"220\"  valign=\"top\" align=\"left\">";
      echo "Attempting to upload the file $upload to $questions_path";
      echo "</td>";

      if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $questions_path)) {

         echo "<tr><td width=\"220\"  valign=\"top\" align=\"left\">";
         echo "Success! The file ".  basename( $_FILES['upload_file']['name']). 
	   " has been uploaded and saved in " . $questions_path;
	 echo "</td>";
	 chmod($questions_path, $questions_permissions);

	 
	 // to do: add a row in QUESTIONS table for this file


	 mysql_query("INSERT INTO QUESTION(Topic_ID, QuestionFile, NumAnswers, CorrectAnswer)
                      VALUES(\"$topic\", \"$upload\", \"$num_answer\", \"$correct_answer\");")
                          or die(mysql_error());
       echo "<tr><td width=\"120\"  valign=\"top\" align=\"left\">";
       echo "The question is added to the database ";
       echo "</td>";
    
      } 
      else{
         echo "<tr><td width=\"220\"  valign=\"top\" align=\"left\">";
         echo "There was an error uploading the file, please try again!";
         echo "Debugging info: <br>";
	 echo "Topic = $topic<br>";
	 echo "Answer = $correct_answer of $num_answer<br>";
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
