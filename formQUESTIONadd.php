<html>

<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 18 June 2008), see www.w3.org">
  <script language="javascript" type="text/javascript">
function Disabled(val)
  {
  frm=document.forms[0]
  if(val=="default")
    {frm.submitbutton.disabled=true}
  else
    {frm.submitbutton.disabled=false}
  }

</script>

  <title></title>
</head>

<body bgcolor="#FF9949">
  <a name="(top)"></a><br>

  <form method="post" action="processQUESTIONadd.php" 
        name="addQUESTION" enctype ="multipart/form-data" ID="aform">
    <br>

    <table cellspacing="10" cellpadding="5" width="730" bgcolor="#FFFF99" align="center">
      <caption>
        <font color="#000066" size="5">Add Question</font>
      </caption>

      <tr>

        <td align="center">
          <fieldset style="border-width:0; background:#FFCC49; width:600">
            <table width="100%" cellspacing ="15">
              
<?php
  include("connect.php");

   $query_topic = "SELECT ID  FROM TOPIC";
   $myresult_topic = mysql_query($query_topic) or die(mysql_error());
   $rows_topic = mysql_numrows($myresult_topic);

echo "<tr><td  colspan=\"2\" valign=\"top\" align=\"right\">";
echo "Choose Topic: 
          </td>";

echo "<td align=\"left\">";
echo "<select name=\"topic\" onChange=\"Disabled(this.value)\">";
echo "<option selected=\"selected\" value=\"default\"> Select One </option>";
     if($rows_topic == 0)
     { echo "No topic listed";}

     for($i=0; $i<$rows_topic; $i++)
     {
       $topic_id = mysql_result($myresult_topic, $i, "ID");
       $topic_name =get_topic_name($topic_id);
       echo "<option value=\"$topic_id\"> $topic_name </option>";
     }
echo "</select>";
echo "</td></tr>";


echo "<tr><td colspan=\"2\" valign=\"top\" align=\"right\">";
echo "Attach File:
          </td>";

echo "<td align=\"left\">";
echo "<input type=\"file\" name=\"upload_file\">";
echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"100000\">";
echo "</td></tr>";


echo "<tr><td colspan=\"2\" valign=\"top\" align=\"right\">";
echo "Number of Answer: 
          </td>";
echo "<td  align=\"left\">";
echo "<select name=\"num_answer\" size=\"1\" onChange=\"redirect(this.options.selectedIndex)\">";
echo "<option selected=\"selected\" value=\"default\"> Select One </option>";

          for($i=1; $i<6; $i++)
	{
       
	  echo "<option value=\"$i\"> -- $i -- </option>";
	}
echo "</select>";
echo "</td></tr>";


echo "<tr><td colspan=\"2\" valign=\"top\" align=\"right\">
           Correct Answer: 
          </td>";
echo "<td  align=\"left\">";
echo "<select name=\"correct_answer\" size=\"1\" >";
echo "<option selected=\"selected\" value=\"default\" > Select One </option>";
     
      for($i=1; $i<6; $i++)
	{
	  echo "<option value=\"$i\" > -- $i -- </option>";
	}

echo "</select>";
echo "</td></tr>";

include("disconnect.php");

?>

<script>

var groups =document.addQUESTION.num_answer.options.length
var group = new Array(groups)

for( i=0; i<groups; i++)
group[i] = new Array()

group[0][0] = new Option("select one", "")

group[1][0] = new Option("select one", "")
group[1][1] = new Option("-- 1 --", "1")

group[2][0] = new Option("select one", "") 
group[2][1] = new Option("-- 1 --", "1") 
group[2][2] = new Option("-- 2 --", "2") 

group[3][0] = new Option("select one", "") 
group[3][1] = new Option("-- 1 --", "1") 
group[3][2] = new Option("-- 2 --", "2") 
group[3][3] = new Option("-- 3 --", "3") 

group[4][0] = new Option("select one", "") 
group[4][1] = new Option("-- 1 --", "1") 
group[4][2] = new Option("-- 2 --", "2") 
group[4][3] = new Option("-- 3 --", "3")
group[4][4] = new Option("-- 4 --", "4")

group[5][0] = new Option("select one", "") 
group[5][1] = new Option("-- 1 --", "1") 
group[5][2] = new Option("-- 2 --", "2") 
group[5][3] = new Option("-- 3 --", "3")
group[5][4] = new Option("-- 4 --", "4")
group[5][5] = new Option("-- 5 --", "5")

var temp=document.addQUESTION.correct_answer

function redirect(x)
{
for(m=temp.options.length-1; m>0; m--)
temp.options[m] = null

for(i=0; i<group[x].length;i++)
{
temp.options[i] = new Option(group[x][i].text,group[x][i].value)
}

temp.options[0].selected =false
}

</script>

            </table>
          </fieldset>
        </td>
      </tr>

      <tr>
        <td align="center"><input type="submit" name="submitbutton"
        value="UPLOAD QUESTION" disabled="true"></td>
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
