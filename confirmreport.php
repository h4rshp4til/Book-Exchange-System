
<html>
<body>
<form name=frm method=post action=confirmreport.php>
<center>
<input type=Submit name=sbm value=Display>
</center>
</form>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Display")
{
$sql="Select * from confirm";
$result=mysql_query($sql,$cn);
echo"<center><table border=1>";
echo"<tr>";
echo"<th>Confirmation no</th>";
echo"<th>Confirmation date</th>";
echo"<th>Upload no</th>";
echo"<th>To user</th>";
echo"<th>From user</th>";
echo"</tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>$row[0]</td>";
echo"<td>$row[1]</td>";
echo"<td>$row[2]</td>";
echo"<td>$row[3]</td>";
echo"<td>$row[4]</td>";
echo"</tr>";
}
echo"</table></center>";
}
}
?>