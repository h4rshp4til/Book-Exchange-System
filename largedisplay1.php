<html>
<body>
<form name=frm method=post action=preint.php>
<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select * from upload where uploadno='$_GET[upl]'";
$result=mysql_query($sql,$cn);
echo "<center><table>";
$i=0;
echo "<tr>";
while($row=mysql_fetch_array($result))
{
$ud=$row[1];
$_SESSION['upuserid']=$ud;
$sql11="select * from user where userid=$ud";
$result11=mysql_query($sql11,$cn);
$row11=mysql_fetch_array($result11);
$un=$row11[1];
$em=$row11[4];
$_SESSION['uplno']=$_GET['upl'];
echo "<td><img src=$row[11] height=300 width=350><br>title:$row[2]<br>language:$row[5]<br>edition:$row[6]<br>publication:$row[7]<br>author:$row[8]<br>original_price:$row[9]<br>selling_price:$row[10]<br>upload by:$un<br>emailid:$em</td>";
echo "<td></td><td></td><td></td><td></td><td></td><td></td>";
$i=$i+1;
if($i==6)
{
$i=0;
echo "</tr>";
echo "<tr>";
}
}
echo "</tr></table></center>";
?>
<input type=submit name=sbm value=like>
<input type=submit name=sbm value=back>
</form>
</body>
</html>
