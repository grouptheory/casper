<?php include("connect.php");

       $TopicID=$_POST['topic_id'];
       $TopicName=$_POST['topic_name'];

       mysql_query("DELETE FROM TOPIC WHERE ID=\"$TopicID\";") or die(mysql_error());

       echo "Topic $TopicID ('$TopicName') has been deleted.<BR>";

       include("disconnect.php");

       echo "<A HREF=\"formTOPICedit.php\"> Return to topics list</A>";
?>
