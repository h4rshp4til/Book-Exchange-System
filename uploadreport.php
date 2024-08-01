<html>
<body>
<form name=frm method=post action=uploadreport.php>
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
$sql="Select * from upload";
$result=mysql_query($sql,$cn);
echo"<center><table border=1>";
echo"<tr>";
echo"<th>Upload no</th>";
echo"<th>Userid</th>";
echo"<th>Title</th>";
echo"<th>Update</th>";
echo"<th>Category</th>";
echo"<th>Language</th>";
echo"<th>Edition</th>";
echo"<th>Publication</th>";
echo"<th>Author</th>";
echo"<th>Original Price</th>";
echo"<th>Selling Price</th>";
echo"<th>Book image</th>";
echo"<th>Status</th>";
echo"</tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>$row[0]</td>";
echo"<td>$row[1]</td>";
echo"<td>$row[2]</td>";
echo"<td>$row[3]</td>";
echo"<td>$row[4]</td>";
echo"<td>$row[5]</td>";
echo"<td>$row[6]</td>";
echo"<td>$row[7]</td>";
echo"<td>$row[8]</td>";
echo"<td>$row[9]</td>";
echo"<td>$row[10]</td>";
echo"<td>$row[11]</td>";
echo"<td>$row[12]</td>";
echo"<td>$row[13]</td>";
echo"</tr>";
}
echo"record displayed";
echo"</table></center>";
}
}
?>