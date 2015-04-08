<?

include("../modules/phpmailer/email.php");

  include("connect.php");

$query_prof_email = "SELECT Email, Name  FROM ADMIN";
$myresult_prof_email = mysql_query($query_prof_email) or die(mysql_error());
$rows_prof_email = mysql_numrows($myresult_prof_email);
 
for($i=0; $i< $rows_prof_email; $i++)
  {
    $email =mysql_result($myresult_prof_email,$i, "Email");
    $person =mysql_result($myresult_prof_email,$i, "Name");
    $name = "$person (Casper Admin)";
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    $altbody = "Please enable HTML in your email reader so that CASPER can send you entrance assessment results.";

    echo "Sending to $person at $email...<BR>";
    send_email($email, $name, $subject, $body, $altbody);
    echo "<HR>";
  }

  echo "Done sending $rows_prof_email emails.<BR>";

  include("disconnect.php");
?>
