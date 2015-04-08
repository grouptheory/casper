<html>
<?php

 /* Connect to the MySQL server, and select CASPER database */ 

mysql_connect("localhost", "casper", "c4sp3rrul3z") or die(mysql_error()); 

mysql_select_db("CASPER") or die(mysql_error());

 /* Include common.php file that contains fucntions */ 

include("common.php");

/* live version */
$WEBSITE = "http://fclab.jjay.cuny.edu";


/* lab version 
   $WEBSITE = "http://localhost"; 
*/

?>
</html>
